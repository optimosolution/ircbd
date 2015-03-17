<?php

/**
 * This is the model class for table "{{resource_category}}".
 *
 * The followings are the available columns in table '{{resource_category}}':
 * @property integer $id
 * @property string $resource_category
 * @property string $slug
 * @property integer $ordering
 */
class ResourceCategory extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{resource_category}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('resource_category', 'required'),
            array('ordering', 'numerical', 'integerOnly' => true),
            array('resource_category, slug', 'length', 'max' => 250),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, resource_category, slug, ordering', 'safe', 'on' => 'search'),
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
            'resource_category' => 'Category',
            'slug' => 'Slug',
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
        $criteria->compare('resource_category', $this->resource_category, true);
        $criteria->compare('slug', $this->slug, true);
        $criteria->compare('ordering', $this->ordering);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ResourceCategory the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function get_title($id) {
        $value = ResourceCategory::model()->findByAttributes(array('id' => $id));
        if (empty($value->resource_category)) {
            return null;
        } else {
            return $value->resource_category;
        }
    }

    public static function get_category_list() {
        $array = ResourceCategory::model()->findAll(
                array(
                    'select' => 'id,resource_category',
                    'condition' => '',
                    'order' => 'ordering, resource_category',
        ));
        echo '<ul>';
        foreach ($array as $key => $value) {
            echo '<li>' . CHtml::link('<i class="fa fa-sign-out"></i> ' . $value['resource_category'], array('resource/category', 'id' => $value['id']), array('target' => '_blank')) . ' [' . Resource::count_category($value['id']) . ']</li>';
        }
        echo '</ul>';
    }

    public static function count_total() {
        $value = ResourceCategory::model()->findAll();
        return count($value);
    }

}
