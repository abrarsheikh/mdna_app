<?php

/**
 * This is the model class for table "mdna_child_photo_tbl".
 *
 * The followings are the available columns in table 'mdna_child_photo_tbl':
 * @property string $id
 * @property string $taluk_code
 * @property string $photo_id
 * @property string $timeOf_photo
 * @property string $name
 * @property string $type
 * @property string $size
 *
 * The followings are the available model relations:
 * @property MdnaChildTbl $talukCode
 */
class MdnaChildPhotoTb extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MdnaChildPhotoTb the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mdna_child_photo_tbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('taluk_code, photo_id', 'required'),
			array('taluk_code, type', 'length', 'max'=>20),
			array('photo_id, name', 'length', 'max'=>100),
			array('size', 'length', 'max'=>10),
			array('timeOf_photo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, taluk_code, photo_id, timeOf_photo, name, type, size', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'talukCode' => array(self::BELONGS_TO, 'MdnaChildMdl', 'taluk_code'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'taluk_code' => 'Taluk Code',
			'photo_id' => 'Photo',
			'timeOf_photo' => 'Time Of Photo',
			'name' => 'Name',
			'type' => 'Type',
			'size' => 'Size',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('taluk_code',$this->taluk_code,true);
		$criteria->compare('photo_id',$this->photo_id,true);
		$criteria->compare('timeOf_photo',$this->timeOf_photo,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('size',$this->size,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}