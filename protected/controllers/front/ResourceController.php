<?php

class ResourceController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view', 'authors', 'author', 'category', 'type', 'ajax', 'search', 'writer'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionAjax() {
        $request = trim($_GET['term']);
        if ($request != '') {
            $model = SearchText::model()->findAll(array("condition" => "search_text like '$request%'", 'limit' => '10'));
            $data = array();
            foreach ($model as $get) {
                $data[] = $get->search_text;
            }
            $this->layout = 'empty';
            echo json_encode($data);
        }
    }

    public function actionAuthors() {
        $this->render('authors', array());
    }

    public function actionAuthor($id) {
        $criteria = new CDbCriteria;
        $criteria->addCondition('status=1');
        $criteria->addCondition('author_id=' . (int) $id);
        $dataProvider = new CActiveDataProvider('Resource', array(
            'criteria' => $criteria,
        ));
        $criteria->order = 'created_on DESC, id DESC';
        $this->render('author', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionCategory($id) {
        $criteria = new CDbCriteria;
        $criteria->addCondition('status=1');
        $criteria->addCondition('category=' . (int) $id);
        $dataProvider = new CActiveDataProvider('Resource', array(
            'criteria' => $criteria,
        ));
        $criteria->order = 'created_on DESC, id DESC';
        $this->render('category', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionType($id) {
        $criteria = new CDbCriteria;
        $criteria->addCondition('status=1');
        $criteria->addCondition('resource_type=' . (int) $id);
        $dataProvider = new CActiveDataProvider('Resource', array(
            'criteria' => $criteria,
        ));
        $criteria->order = 'created_on DESC, id DESC';
        $this->render('type', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionSearch() {
        $criteria = new CDbCriteria;
        $criteria->compare('status', 1, false, 'AND');
        if (isset($_REQUEST['q']) && !empty($_REQUEST['q']))
            $criteria->addCondition('search_text LIKE "%' . $_REQUEST['q'] . '%"');
        if (isset($_REQUEST['category']) && !empty($_REQUEST['category']))
            $criteria->compare('category', (int) $_REQUEST['category'], false, 'AND');
        if (isset($_REQUEST['for']) && !empty($_REQUEST['for']))
            $criteria->compare('resource_for', (int) $_REQUEST['for'], false, 'AND');
        if (isset($_REQUEST['author']) && !empty($_REQUEST['author']))
            $criteria->compare('author_id', (int) $_REQUEST['author'], false, 'AND');

        $dataProvider = new CActiveDataProvider('Resource', array(
            'criteria' => $criteria,
        ));
        $criteria->order = 'created_on DESC, id DESC';
        $this->render('search', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        Yii::app()->db->createCommand('UPDATE {{resource}} SET hits = hits+1 WHERE id=' . $id)->execute();

        //get comments
        $model_comment = new ResourceComment;
        if (isset($_POST['ResourceComment'])) {
            $model_comment->attributes = $_POST['ResourceComment'];
            $model_comment->created = new CDbExpression('NOW()');
            $model_comment->resource = $id;

            if ($model_comment->save())
                $this->redirect(array('resource/view', 'id' => $id));
        }

        $this->render('view', array(
            'model' => $this->loadModel($id),
            'model_comment' => $model_comment,
        ));
    }

    public function actionWriter($id) {
        $this->render('writer', array(
            'model' => $this->loadAuthor($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Resource;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Resource'])) {
            $model->attributes = $_POST['Resource'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Resource'])) {
            $model->attributes = $_POST['Resource'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex($id) {
        $criteria = new CDbCriteria;
        $criteria->addCondition('status=1');
        $criteria->addCondition('resource_for=' . (int) $id);
        $dataProvider = new CActiveDataProvider('Resource', array(
            'criteria' => $criteria,
        ));
        $criteria->order = 'created_on DESC, id DESC';
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Resource('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Resource']))
            $model->attributes = $_GET['Resource'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Resource the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Resource::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function loadAuthor($id) {
        $model = Author::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Resource $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'resource-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
