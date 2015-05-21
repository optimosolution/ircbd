<?php

/**
 * This is the model class for table "{{learn_quran}}".
 *
 * The followings are the available columns in table '{{learn_quran}}':
 * @property integer $id
 * @property string $subject
 * @property integer $city
 * @property string $area
 * @property string $place
 * @property string $event_date
 * @property string $event_time
 * @property string $teacher
 * @property string $remarks
 * @property integer $status
 */
class LearnQuran extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{learn_quran}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('subject, city, area, place, event_date, event_time', 'required'),
            array('city, status', 'numerical', 'integerOnly' => true),
            array('subject', 'length', 'max' => 250),
            array('area, place, event_time, teacher', 'length', 'max' => 150),
            array('remarks', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, subject, city, area, place, event_date, event_time, teacher, remarks, status', 'safe', 'on' => 'search'),
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
            'subject' => 'Subject',
            'city' => 'City/District',
            'area' => 'Area',
            'place' => 'Place',
            'event_date' => 'Date',
            'event_time' => 'Time',
            'teacher' => 'Teacher',
            'remarks' => 'Remarks',
            'status' => 'Status',
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
        $criteria->compare('subject', $this->subject, true);
        $criteria->compare('city', $this->city);
        $criteria->compare('area', $this->area, true);
        $criteria->compare('place', $this->place, true);
        $criteria->compare('event_date', $this->event_date, true);
        $criteria->compare('event_time', $this->event_time, true);
        $criteria->compare('teacher', $this->teacher, true);
        $criteria->compare('remarks', $this->remarks, true);
        $criteria->compare('status', $this->status);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return LearnQuran the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function countLearnQuran() {
        $value = LearnQuran::model()->findAll();
        return count($value);
    }

    public static function count_learnQuran() {
        $value = LearnQuran::model()->findAll();
        return count($value);
    }

}
