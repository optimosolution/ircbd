<?php

class ResourceController extends BackEndController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    protected function beforeAction($action) {
        $access = $this->checkAccess(Yii::app()->controller->id, Yii::app()->controller->action->id);
        if ($access == 1) {
            return true;
        } else {
            Yii::app()->user->setFlash('error', "You are not authorized to perform this action!");
            $this->redirect(array('/site/noaccess'));
        }
    }

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
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('admin', 'delete', 'create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete', 'create', 'update'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Resource;
        $path = Yii::app()->basePath . '/../uploads/resource';
        if (!is_dir($path)) {
            mkdir($path);
        }

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Resource'])) {
            $model->attributes = $_POST['Resource'];
            if (isset($model->related_resource))
                    $model->related_resource = implode(",", $model->attributes['related_resource']);
            
            if ($model->validate()) {
                $model->created_on = new CDbExpression('NOW()');                
                //Picture upload script
                if (@!empty($_FILES['Resource']['name']['img_location'])) {
                    $model->img_location = $_POST['Resource']['img_location'];

                    if ($model->validate(array('img_location'))) {
                        $model->img_location = CUploadedFile::getInstance($model, 'img_location');
                    } else {
                        $model->img_location = '';
                    }
                    $model->img_location->saveAs($path . '/' . time() . '_' . str_replace(' ', '_', strtolower($model->img_location)));
                    $model->img_location = time() . '_' . str_replace(' ', '_', strtolower($model->img_location));
                }
                if ($model->save()) {
                    Yii::app()->user->setFlash('success', 'Data was saved successfully');
                    $this->redirect(array('admin'));
                }
            }
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
        $previuosFileName = $model->img_location;
        $path = Yii::app()->basePath . '/../uploads/resource';
        if (!is_dir($path)) {
            mkdir($path);
        }

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Resource'])) {
            $model->attributes = $_POST['Resource'];
            if (isset($model->related_resource))
                $model->related_resource = implode(',', (array) $model->attributes['related_resource']);

            if ($model->validate()) {
                //Picture upload script
                if (@!empty($_FILES['Resource']['name']['img_location'])) {
                    $model->img_location = $_POST['Resource']['img_location'];

                    if ($model->validate(array('img_location'))) {
                        $myFile = $path . '/' . $previuosFileName;
                        if ((is_file($myFile)) && (file_exists($myFile))) {
                            unlink($myFile);
                        }
                        $model->img_location = CUploadedFile::getInstance($model, 'img_location');
                    } else {
                        $model->img_location = '';
                    }
                    $model->img_location->saveAs($path . '/' . time() . '_' . str_replace(' ', '_', strtolower($model->img_location)));
                    $model->img_location = time() . '_' . str_replace(' ', '_', strtolower($model->img_location));
                } else {
                    $model->img_location = $previuosFileName;
                }
                if ($model->save()) {
                    Yii::app()->user->setFlash('success', 'Data was saved successfully');
                    $this->redirect(array('admin'));
                }
            }
        } else {
            if (isset($model->related_resource))
                $model->related_resource = explode(',', $model->related_resource);
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
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax'])) {
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
            }
        } else {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Resource');
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
        if (isset($_GET['Resource'])) {
            $model->attributes = $_GET['Resource'];
        }

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
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
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
