<?php

/**
 * This is the model class for table "mdna_child_anthropometry_tbl".
 *
 * The followings are the available columns in table 'mdna_child_anthropometry_tbl':
 * @property string $id
 * @property string $id_a
 * @property double $weight
 * @property double $height
 * @property double $muac
 * @property string $date
 *
 * The followings are the available model relations:
 * @property MdnaChildTbl $idA
 */
class MdnaChildAnthropometryMdl extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return MdnaChildAnthropometryMdl the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'mdna_child_anthropometry_tbl';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id_a', 'required'),
            array('weight, height, muac', 'numerical'),
            array('id_a', 'length', 'max' => 20),
            array('date', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, id_a, weight, height, muac, date', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idA' => array(self::BELONGS_TO, 'MdnaChildMdl', 'id_a'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return Yii::app()->params['childProfile'];
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->select = '*';  // only select the 'title' column
        $criteria->condition = 'id_a=:id_a ';

        $criteria->compare('id', $this->id, true);
        $criteria->compare('id_a', $this->id_a, true);
        $criteria->compare('weight', $this->weight);
        $criteria->compare('height', $this->height);
        $criteria->compare('muac', $this->muac);
        $criteria->compare('date', $this->date, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}