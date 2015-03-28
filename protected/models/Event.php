<?php

/**
 * This is the model class for table "{{event}}".
 *
 * The followings are the available columns in table '{{event}}':
 * @property integer $id
 * @property string $title
 * @property string $subject
 * @property string $place
 * @property string $duration
 * @property string $event_date
 * @property string $event_time
 * @property string $lecturer
 * @property string $description
 * @property string $sponsor
 * @property string $full_name
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property integer $status
 */
class Event extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{event}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, subject, place, duration, event_date, event_time, lecturer', 'required'),
            array('status', 'numerical', 'integerOnly' => true),
            array('title, subject, sponsor, address', 'length', 'max' => 250),
            array('place, duration, event_time, email', 'length', 'max' => 100),
            array('lecturer, full_name', 'length', 'max' => 150),
            array('phone', 'length', 'max' => 50),
            array('description', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, title, subject, place, duration, event_date, event_time, lecturer, description, sponsor, full_name, phone, email, address, status', 'safe', 'on' => 'search'),
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
            'title' => 'Title',
            'subject' => 'Subject',
            'place' => 'Place',
            'duration' => 'Duration',
            'event_date' => 'Date',
            'event_time' => 'Time',
            'lecturer' => 'Lecturer',
            'description' => 'Description',
            'sponsor' => 'Sponsor',
            'full_name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'address' => 'Address',
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
        $criteria->compare('title', $this->title, true);
        $criteria->compare('subject', $this->subject, true);
        $criteria->compare('place', $this->place, true);
        $criteria->compare('duration', $this->duration, true);
        $criteria->compare('event_date', $this->event_date, true);
        $criteria->compare('event_time', $this->event_time, true);
        $criteria->compare('lecturer', $this->lecturer, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('sponsor', $this->sponsor, true);
        $criteria->compare('full_name', $this->full_name, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('status', $this->status);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Event the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    public static function countEvent() {
        $value = Event::model()->findAll();
        return count($value);
    }

}
