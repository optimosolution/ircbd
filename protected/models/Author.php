<?php

/**
 * This is the model class for table "{{author}}".
 *
 * The followings are the available columns in table '{{author}}':
 * @property integer $id
 * @property string $author_name
 * @property string $description
 * @property string $author_photo
 * @property integer $ordering
 */
class Author extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{author}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('author_name', 'required'),
            array('ordering', 'numerical', 'integerOnly' => true),
            array('author_name', 'length', 'max' => 150),
            array('author_photo', 'length', 'max' => 250),
            array('description', 'safe'),
            array('author_photo', 'file', 'types' => 'jpg,jpeg,gif,png', 'allowEmpty' => true, 'minSize' => 2, 'maxSize' => 1024 * 1024 * 5, 'tooLarge' => 'The file was larger than 5MB. Please upload a smaller file.', 'wrongType' => 'File format was not supported.', 'tooSmall' => 'File size was too small or empty.'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, author_name, description, author_photo, ordering', 'safe', 'on' => 'search'),
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
            'author_name' => 'Name',
            'description' => 'Details',
            'author_photo' => 'Picture',
            'ordering' => 'Ordering',
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
        $criteria->compare('author_name', $this->author_name, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('author_photo', $this->author_photo, true);
        $criteria->compare('ordering', $this->ordering);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Author the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function get_author_name($id) {
        $value = Author::model()->findByAttributes(array('id' => $id));
        if (empty($value->author_name)) {
            return null;
        } else {
            return $value->author_name;
        }
    }

    public static function get_picture_grid($id) {
        $value = Author::model()->findByAttributes(array('id' => $id));
        $filePath = Yii::app()->basePath . '/../uploads/author/' . $value->author_photo;
        if ((is_file($filePath)) && (file_exists($filePath))) {
            return CHtml::image(Yii::app()->baseUrl . '/uploads/author/' . $value->author_photo, 'Picture', array('alt' => $value->author_name, 'class' => 'nav-user-photo', 'title' => $value->author_name, 'style' => 'width:50px;'));
        } else {
            return CHtml::image(Yii::app()->baseUrl . '/uploads/author/profile.jpg', 'Picture', array('alt' => $value->author_name, 'class' => 'nav-user-photo', 'title' => $value->author_name, 'style' => 'width:50px;'));
        }
    }

    public static function get_author_list() {
        $array = Author::model()->findAll(
                array(
                    'select' => 'id,author_name',
                    'condition' => '',
                    'order' => 'RAND()',
                    'limit' => '20',
        ));
        echo '<h3>AUTHOR</h3>';
        echo '<ul class="nav nav-list">';
        foreach ($array as $key => $value) {
            echo '<li>' . CHtml::link('<i class="fa fa-angle-right"></i> ' . $value['author_name'] . ' [' . Resource::count_author($value['id']) . ']', array('resource/author', 'id' => $value['id']), array('target' => '_blank')) . '</li>';
        }
        echo '<li>' . CHtml::link('<i class="fa fa-user"></i> MORE AUTHOR', array('resource/authors'), array('target' => '_blank')) . '</li>';
        echo '</ul>';
    }

}
