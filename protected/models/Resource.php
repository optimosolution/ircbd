<?php

/**
 * This is the model class for table "{{resource}}".
 *
 * The followings are the available columns in table '{{resource}}':
 * @property integer $id
 * @property string $code
 * @property string $title
 * @property integer $category
 * @property string $resource_type
 * @property integer $resource_for
 * @property string $size_info
 * @property string $sort_description
 * @property string $img_location
 * @property integer $author_id
 * @property string $co_author
 * @property string $search_text
 * @property integer $ordering
 * @property integer $hits
 * @property string $main_source
 * @property string $mirror1
 * @property string $mirror2
 * @property string $location
 * @property string $created_by
 * @property string $created_on
 * @property integer $status
 */
class Resource extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{resource}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title', 'required'),
            array('category, resource_for, author_id, ordering, hits, status, editorial_choice, featured', 'numerical', 'integerOnly' => true),
            array('code', 'length', 'max' => 11),
            array('title, size_info, main_source, mirror1, mirror2, location, related_resource', 'length', 'max' => 250),
            array('resource_type', 'length', 'max' => 50),
            array('img_location', 'length', 'max' => 100),
            array('co_author', 'length', 'max' => 500),
            array('created_by', 'length', 'max' => 150),
            array('sort_description, search_text, created_on', 'safe'),
            array('img_location', 'file', 'types' => 'jpg,jpeg,gif,png', 'allowEmpty' => true, 'minSize' => 2, 'maxSize' => 1024 * 1024 * 5, 'tooLarge' => 'The file was larger than 5MB. Please upload a smaller file.', 'wrongType' => 'File format was not supported.', 'tooSmall' => 'File size was too small or empty.'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, code, title, category, resource_type, resource_for, size_info, sort_description, img_location, author_id, co_author, search_text, ordering, hits, main_source, mirror1, mirror2, location, created_by, created_on, status, related_resource, editorial_choice, featured', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'code' => 'Code',
            'title' => 'Title',
            'category' => 'Category',
            'resource_type' => 'Type',
            'resource_for' => 'For',
            'size_info' => 'Size',
            'sort_description' => 'Description',
            'img_location' => 'Resource Image',
            'author_id' => 'Author',
            'co_author' => 'Co-author',
            'search_text' => 'Search Text',
            'ordering' => 'Ordering',
            'hits' => 'Hits',
            'main_source' => 'Main Source',
            'mirror1' => 'Mirror 1',
            'mirror2' => 'Morror 2',
            'location' => 'Location',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'status' => 'Status',
            'related_resource' => 'Related Resource',
            'editorial_choice' => 'Editorial choice',
            'featured' => 'Featured',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('code', $this->code, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('category', $this->category);
        $criteria->compare('resource_type', $this->resource_type, true);
        $criteria->compare('resource_for', $this->resource_for);
        $criteria->compare('size_info', $this->size_info, true);
        $criteria->compare('sort_description', $this->sort_description, true);
        $criteria->compare('img_location', $this->img_location, true);
        $criteria->compare('author_id', $this->author_id);
        $criteria->compare('co_author', $this->co_author, true);
        $criteria->compare('search_text', $this->search_text, true);
        $criteria->compare('ordering', $this->ordering);
        $criteria->compare('hits', $this->hits);
        $criteria->compare('main_source', $this->main_source, true);
        $criteria->compare('mirror1', $this->mirror1, true);
        $criteria->compare('mirror2', $this->mirror2, true);
        $criteria->compare('location', $this->location, true);
        $criteria->compare('created_by', $this->created_by, true);
        $criteria->compare('created_on', $this->created_on, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('related_resource', $this->related_resource, true);
        $criteria->compare('editorial_choice', $this->editorial_choice);
        $criteria->compare('featured', $this->featured);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Resource the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function get_title($id) {
        $value = Resource::model()->findByAttributes(array('id' => $id));
        if (empty($value->title)) {
            return null;
        } else {
            return $value->title;
        }
    }

    public static function get_hits($id) {
        $value = Resource::model()->findByAttributes(array('id' => $id));
        if (empty($value->hits)) {
            return 0;
        } else {
            return $value->hits;
        }
    }

    public static function count_resource() {
        $value = Resource::model()->findAll();
        return count($value);
    }

    public static function count_category($id) {
        $value = Resource::model()->findAll(array('condition' => 'status=1 AND category=' . $id,));
        return count($value);
    }

    public static function count_author($id) {
        $value = Resource::model()->findAll(array('condition' => 'status=1 AND author_id=' . (int) $id,));
        return count($value);
    }

    public static function count_for($id) {
        $value = Resource::model()->findAll(array('condition' => 'status=1 AND resource_for=' . (int) $id,));
        return count($value);
    }

    public static function get_popular() {
        $array = Resource::model()->findAll(
                array(
                    'select' => 'id,title,category,main_source',
                    'condition' => 'status=1',
                    'order' => 'hits DESC',
                    'limit' => '10',
        ));
        echo '<ul>';
        foreach ($array as $key => $value) {
            echo '<li>' . CHtml::link('<i class="fa fa-sign-out"></i> ' . $value['title'], array('resource/view', 'id' => $value['id']), array()) . ' <small>[' . ResourceCategory::get_title($value['category']) . ']</small></li>';
        }
        echo '</ul>';
    }

    public static function get_recent() {
        $array = Resource::model()->findAll(
                array(
                    'select' => 'id,title,category,main_source',
                    'condition' => 'status=1',
                    'order' => 'created_on DESC, id DESC',
                    'limit' => '10',
        ));
        echo '<ul>';
        foreach ($array as $key => $value) {
            echo '<li>' . CHtml::link('<i class="fa fa-sign-out"></i> ' . $value['title'], array('resource/view', 'id' => $value['id']), array()) . ' <small>[' . ResourceCategory::get_title($value['category']) . ']</small></li>';
        }
        echo '</ul>';
    }

    public static function get_picture($id) {
        $value = Resource::model()->findByAttributes(array('id' => $id));
        $filePath = Yii::app()->basePath . '/../uploads/resource/' . $value->img_location;
        if ((is_file($filePath)) && (file_exists($filePath))) {
            return CHtml::image(Yii::app()->baseUrl . '/uploads/resource/' . $value->img_location, 'Picture', array('alt' => $value->title, 'class' => 'img-circle', 'title' => $value->title, 'style' => 'width:100px;'));
        } else {
            return CHtml::image(Yii::app()->baseUrl . '/uploads/resource/default.png', 'Picture', array('alt' => $value->title, 'class' => 'img-circle', 'title' => $value->title, 'style' => 'width:100px;'));
        }
    }

    public static function get_picture_responsive($id) {
        $value = Resource::model()->findByAttributes(array('id' => $id));
        $filePath = Yii::app()->basePath . '/../uploads/resource/' . $value->img_location;
        if ((is_file($filePath)) && (file_exists($filePath))) {
            return CHtml::image(Yii::app()->baseUrl . '/uploads/resource/' . $value->img_location, 'Picture', array('alt' => $value->title, 'class' => '', 'title' => $value->title, 'style' => 'height:170px;width:230px;'));
        } else {
            return CHtml::image(Yii::app()->baseUrl . '/uploads/resource/default.png', 'Picture', array('alt' => $value->title, 'class' => '', 'title' => $value->title, 'style' => 'height:170px;width:230px;'));
        }
    }

    public static function get_related_resource($properties) {
        $exval = explode(',', $properties);
        $total = count($exval);
        $property = '';
        for ($i = 0; $i < $total; $i++) {
            if ($i == ($total - 1)) {
                $property .= Resource::get_title($exval[$i]);
            } else {
                $property .= Resource::get_title($exval[$i]) . ', ';
            }
        }
        return $property;
    }

    public static function get_related($id) {
        $value = Resource::model()->findByAttributes(array('id' => $id));
        if (empty($value->related_resource)) {
            $in = 0;
        } else {
            $in = $value->related_resource;
        }
        $array = Resource::model()->findAll(
                array(
                    'select' => 'id,title,category,main_source',
                    'condition' => 'status=1 AND id IN(' . $in . ')',
                    'order' => 'hits DESC',
        ));
        echo '<ul>';
        foreach ($array as $key => $value) {
            echo '<li>' . CHtml::link('<i class="fa fa-sign-out"></i> ' . $value['title'], array('resource/view', 'id' => $value['id']), array()) . ' <small>[' . ResourceCategory::get_title($value['category']) . ']</small></li>';
        }
        echo '</ul>';
    }

}
