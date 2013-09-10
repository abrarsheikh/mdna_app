<?php
/**
* EArrayModel class file.
*
* @author Maarten van Bloem <maartenvanbloem@gmail.com>
* @link http://www.yiiframework.com/
* @copyright Copyright &copy; 2011 Maarten van Bloem
*/

/**
* EArrayModel is the base class for classes representing array data.
* 
* This model class can be used to access and manipulate array data located on the file system. The main 
* purpose of this kind of model is to access your array data in a more object oriented way.
*
* This class is based on the built-in Yii model class CActiveRecord. The public method names have the same 
* structure as CActiveRecord, so new users can understand this model more easily. To understand such models, 
* I'd like to refer to the tutorials about models and active record on the website of the Yii Framework. This 
* class works almost the same, except for find-conditions ({@link matchByCondition}).
*
* @author Maarten van Bloem <maartenvanbloem@gmail.com>
* @version 1.0 2011-06-30 21:50:13Z maartenvanbloem $
* @package Yii Framework
*/
class ArrayModel extends CModel
{
	private static $_data = array(); // Cached content of the data file
	private static $_names = array(); // Cached attribute names, generated by {@link arrayStructure()}
	private static $_models = array(); // Class name => model
	private $_oldId; // Containing the old id of the data row
	private $_attributes = array(); // Attribute name => attribute value
	private $_new = false; // Whether this instance is new or not
	
	/**
	* Our beautiful constructor
	*/
	public function __construct($scenario = 'insert')
	{
		$this->_attributes = array_fill_keys($this->attributeNames(), null);
		
		if($scenario === null) // internally used by instantiate() and model()
			return;
			
		$this->setScenario($scenario);
		$this->setIsNew(true);
		
		$this->init();
		
		$this->afterConstruct();
	}

	/**
	* Initializes this model.
	* This method is invoked when an ArrayModel instance is newly created.
	* You may override this method to provide code that is needed to initialize the model (e.g. setting
	* initial property values.)
	*/
	public function init()
	{
	}
	
	/**
	* PHP getter magic method.
	* This method is overridden so that ArrayModel attributes can be accessed like properties.
	* @param string $name property name
	* @return mixed property value
	*/
	public function __get($name)
	{
		if(array_key_exists($name, $this->_attributes))
			return $this->_attributes[$name];
		else
			return parent::__get($name);
	}
	
	/**
	* PHP setter magic method.
	* This method is overridden so that ArrayModel attributes can be accessed like properties.
	* @param string $name property name
	* @param mixed $value property value
	*/
	public function __set($name, $value)
	{
		if(array_key_exists($name, $this->_attributes))
			$this->_attributes[$name] = $value;
		else
		{
			return parent::__set($name, $value);
		}
	}

	/**
	* Checks if a property value is null.
	* This method overrides the parent implementation by checking
	* if the named attribute is null or not.
	* @param string $name the property name or the event name
	* @return boolean whether the property value is null
	*/
	public function __isset($name)
	{
		if(isset($this->_attributes[$name]))
			return true;
		else
			return parent::__isset($name);
	}

	/**
	* Sets a component property to be null.
	* This method overrides the parent implementation by clearing
	* the specified attribute value.
	* @param string $name the property name or the event name
	*/
	public function __unset($name)
	{
		if(isset($this->_attributes[$name]))
			unset($this->_attributes[$name]);
		else
			parent::__unset($name);
	}
	
	/**
	* Returns the static model of the specified ArrayModel class.
	* The model returned is a static instance of the ArrayModel class.
	* It is provided for invoking class-level methods (something similar to static class methods.)
	*
	* @param string $className array model class name.
	* @return ArrayModel array model instance.
	*/
	public static function model($className=__CLASS__)
	{
		if(isset(self::$_models[$className]))
		{
			return self::$_models[$className];
		}
		else
		{
			return self::$_models[$className] = new $className(null);
		}
	}
	
	/**
	* Creates an ArroyModel instance.
	* @return ArrayModel
	*/
	protected function instantiate()
	{
		$class = get_class($this);
		$model = new $class(null);
		return $model;
	}
	
	/**
	* Returns the data file of this model. The name must be an Yii alias. This function may be 
	* overriden. It defaults to the name of the class inside the application.data folder
	* 
	* @return string yii aliased filename
	*/
	public function fileName()
	{
		return 'application.data.' . get_class($this);
	}
	
	/**
	* Returns the structure of the data file. This function must be overriden to define the structure 
	* of the array. The attribute names will be based on this structure. The keys are the keys for in 
	* the data file and the values are the attribute names
	* 
	* @return array Structure
	*/
	public function arrayStructure()
	{
		return array();
	}

	/**
	* Returns the list of all attribute names of the model.
	* 
	* @return array list of attribute names.
	*/
	public function attributeNames()
	{
		$class = get_class($this);
		if(!isset(self::$_names[$class]))
		{
			self::$_names[$class] = array_merge(array('id'), $this->getNames($this->arrayStructure()));
		}
		
		return self::$_names[$class];
	}
	
	/**
	* Finds a single ArrayModel with the specified condition. Returns the first data row found by the 
	* given condition. See {@link matchByCondition()} for detailed explanation about $condition.
	* 
	* @param array $condition condition for filtering array data. Defaults to null, meaning the first 
	* data row of the data file will be returned.
	* @return ArrayModel
	*/
	public function find($condition = null)
	{
		$models = $this->findAll($condition, 0, 1);
		if(isset($models[0]))
		{
			return $models[0];
		}
		else
		{
			return null;
		}
	}
	
	/**
	* Finds all ArrayModels with the specified condition. Returns the first data row found by the 
	* given condition. See {@link matchByCondition()} for detailed explanation about $condition.
	* 
	* Example:
	* $model = ArrayModel::model()->find(array('name' => 'John'));
	* echo $model->name; // example: John
	* 
	* @param array $condition condition for filtering array data. Defaults to null, meaning all the 
	* data rows of the data file will be returned.
	* @return ArrayModel
	*/
	public function findAll($condition = null, $offset = null, $limit = null)
	{
		$data = $this->getData();
		$models = array();
		
		// Walk all the data
		$counter = 0;
		
		$this->beforeFind();
		
		foreach($data as $key => $value)
		{
			// Get the data row
			$model = $this->dataToModel($value);
			$model->id = $model->_oldId = $key;
			
			// Check for the condition
			if(is_array($condition) && !$model->matchByCondition($condition))
			{
				unset($model);
				continue;
			}
			
			// Set scenario to update
			$model->setScenario('update');
			
			++$counter;
			
			$model->afterFind();
			
			// Set the data row
			$models[] = $model;
			
			// Apply offset
			if($offset !== null && $counter < $offset)
				continue;
			
			// Apply limit
			if($limit !== null && $counter > ($offset + $limit))
				break;
		}
		
		return $models;
	}
	
	/**
	* Finds a single ArrayModel with the specified id / index. This find method is significantly faster 
	* then the conditional finding methods like {@link find()} or {@link findAll()}. If you search for 
	* a data row with a specific id, then mainly use this method.
	* 
	* Example:
	* $model = ArrayModel::model()->findById(4);
	* echo $model->name; // example: John
	* 
	* @param mixed $id id of the data row
	* @return ArrayModel
	*/
	public function findById($id)
	{
		$data = $this->getData();
		$model = null;
		
		$this->beforeFind();
		
		if(isset($data[$id]) && is_array($data[$id]))
		{
			$model = $this->dataToModel($data[$id]);
			$model->id = $model->_oldId = $id;
			
			// Set scenario to update
			$model->setScenario('update');
			
			$model->afterFind();
		}
		
		return $model;
	}
	
	/**
	* Deletes the data row corresponding to the current ArrayModel. For multiple deletion of data rows, 
	* it is recommended to use {@link deleteAll()}.
	* 
	* Example:
	* $model = ArrayModel::model()->findById(4);
	* $model->delete();
	* 
	* @return boolean true on success and false on failure
	*/
	public function delete()
	{
		$data = $this->getData();
		
		// Remove the data from the array
		if($this->beforeDelete() && isset($data[$this->id]))
		{
			// New records can not be deleted
			if($this->getIsNew())
			{
				return false;
			}
				
			unset($data[$this->id]);
			
			$this->afterDelete();
			
			return $this->setData($data);;
		}
		else
		{
			return false;
		}
	}
	
	/**
	* Deletes the data rows corresponding to the given condition. The benefit of using this method is that 
	* the deletion of multiple data rows is more file system friendly. It will first collect all the 
	* data rows, after that it will delete the rows and save it to the data file. For single data rows however, 
	* it is recommended to use {@link delete()}.
	* 
	* Example:
	* ArrayModel::model()->deleteAll(array('id > ' => '5'));
	* 
	* @param array $models an array consisting of ArrayModels. Defaults to null, meaning all the rows 
	* of the data file will be deleted.
	* @return boolean true on success and false on failure
	*/
	public function deleteAll($condition = null)
	{
		$data = $this->getData();
		
		// Delete by condition
		if(is_array($condition))
		{
			foreach($data as $key => $value)
			{
				// Get the data row
				$model = $this->dataToModel($value);
				$model->id = $key;
				
				// Check for the condition
				if($model->matchByCondition($condition))
				{
					// Remove the data from the array
					unset($data[$model->id], $model);
				}
			}
		}
		// Just delete all
		else
		{
			$data = array();
		}
		
		return $this->setData($data);
	}
	
	/**
	* Saves the data row corresponding to the current ArrayModel.
	* 
	* Example:
	* $model = ArrayModel::model()->findById(4);
	* $model->name = 'John';
	* $model->save();
	* 
	* @param boolean $runValidation whether to perform validation before saving the data row.
	* If the validation fails, the data row will not be saved to the data file.
	* @param array $attributes list of attributes that need to be saved. Defaults to null,
	* meaning all attributes will be saved.
	* @return boolean true on success and false on failure
	*/
	public function save($runValidation = true, $attributes = null)
	{
		// Validate?
		if($runValidation && !$this->validate($attributes))
		{
			return false;
		}
		
		// Insert
		if($this->getIsNew())
		{
			return $this->insert($attributes);
		}
		// Update
		else
		{
			return $this->update($attributes);
		}
	}
	
	/**
	* Inserts the data row corresponding to the current ArrayModel.
	* Note, validation is not performed in this method. You may call {@link validate} to perform the validation.
	* 
	* @param array $attributes list of attributes that need to be saved. Defaults to null,
	* meaning all attributes will be saved.
	* @return boolean true on success and false on failure
	*/
	public function insert($attributes = null)
	{
		if($this->beforeSave())
		{
			// The record must be new
			if(!$this->getIsNew())
				return false;
			
			$data = $this->getData();
			
			// Add the data
			$data[] = $this->modelToData($this, $attributes);
			
			// Obtain the key and assign to the model
			end($data);
			$this->id = $this->_oldId = key($data);
			
			$this->afterSave();
			
			// It is no new record anymore:
			$this->setIsNew(false);
			$this->setScenario('update');
			
			return $this->setData($data);
		}
		return false;
	}
	
	/**
	* Updates the data row corresponding to the current ArrayModel.
	* Note, validation is not performed in this method. You may call {@link validate} to perform the validation.
	* 
	* @param array $attributes list of attributes that need to be saved. Defaults to null,
	* meaning all attributes will be saved.
	* @return boolean true on success and false on failure
	*/
	public function update($attributes = null)
	{
		if($this->beforeSave())
		{
			// The record may not be new
			if($this->getIsNew())
				return false;
			
			$data = $this->getData();
			
			// Change ID?
			if($this->id !== $this->_oldId)
			{
				unset($data[$this->_oldId]);
			}
			
			// Change the data
			$data[$this->id] = $this->modelToData($this, $attributes);
			
			// When the id is null, then the id will be reassigned, so get the new id
			if($this->id === null)
			{
				end($data);
				$this->id = $this->_oldId = key($data);
			}
			
			$this->afterSave();
			
			return $this->setData($data);
		}
		return false;
	}
	
	/**
	* Flushes the cached data, if needed. The data will automatically be refreshed by the next data 
	* collection
	*/
	public function flushData()
	{
		$class = get_class($this);
		unset($this->_data[$class]);
	}
	
	/**
	* Matches the given condition to a single data model of type ArrayModel. The condition needs 
	* to be an array and must consist of conditional statements with the structure 'attribute => value'.
	* Every conditional statement needs to be seperated by an AND or OR operator. The condition behaves 
	* like normal IF statements in PHP and may contain the following comparison operators: 
	* 
	* >, >=, <, <=, = (or ==), !=, ===, !==, %, !%
	* 
	* In addition to PHP there are two more operators, % and !%. These operators stand for 
	* respectively 'contains' and 'not contains'. It will check whether the given string can 
	* be found or not found inside the value of the specified attribute. The operator will search 
	* case insensitive.
	* 
	* When no comparison operator has been used, then it will automatically function like 
	* exact matching (= or ==).
	* 
	* Just like in PHP, the condition can contain sub-conditions, sub-sub-conditions, and so forth. It 
	* can be realised by just adding new arrays, containing conditional statements.
	* 
	* Examples:
	* 
	* $model->matchByCondition(array(array('id' => 1)); // Return data with ID 1 (exact matching)
	* $model->matchByCondition(array(array('id >' => 5), 'AND', array('id >' => 15)); // Matches data with an ID bigger than 5 and smaller than 15
	* $model->matchByCondition(array(array('name %' => 'asd'), 'OR', array('name %' => 'qwe'))); // Matches data which contains asd or qwe
	* $model->matchByCondition(array(array(array('first_name' => 'John'), 'OR', array('first_name' => 'Matthew')), 'AND', array('last_name' => 'Smith'))); // Matches data where the first name is John or Matthew and the last name is Smith
	* 
	* @param array $condition
	* @return boolean True on match and false on no match
	*/
	public function matchByCondition($condition)
	{
		// Input must be an array
		if(!is_array($condition))
			return false;
			
		$valid = false;
		
		// Walk every condition
		$counter = 0;
		foreach($condition as $conditionAttr => $conditionNeedle)
		{
			++$counter;
			// Check the operator (there must be an operator between every condition)
			if(!($counter & 1))
			{
				// Implement the OR operator
				if((strtolower($conditionNeedle) === 'and' && $valid === false) || (strtolower($conditionNeedle) === 'or' && $valid === true))
				{
					break;
				}
				else
				{
					continue;
				}
			}
			
			$attrName = trim($conditionAttr);
			$attrLength = strlen($attrName);
			
			// Sub condition
			if(is_array($conditionNeedle))
			{
				$valid = $this->matchByCondition($conditionNeedle);
			}
			// Condition with the '>' comparison operator
			else if($attrName{($attrLength - 1)} == '>' && isset($this->{$attrNameFinal = rtrim(substr($attrName, 0, $attrLength - 1))}) && $this->$attrNameFinal > $conditionNeedle)
			{
				$valid = true;
			}
			// Condition with the '<' comparison operator
			else if($attrName{($attrLength - 1)} == '<' && isset($this->{$attrNameFinal = rtrim(substr($attrName, 0, $attrLength - 1))}) && $this->$attrNameFinal < $conditionNeedle)
			{
				$valid = true;
			}
			// Condition with the '>=' comparison operator 
			else if($attrName{($attrLength - 2)} == '>' && $attrName{($attrLength - 1)} == '=' && isset($this->{$attrNameFinal = rtrim(substr($attrName, 0, $attrLength - 2))}) && $this->$attrNameFinal >= $conditionNeedle)
			{
				$valid = true;
			}
			// Condition with the '<=' comparison operator
			else if($attrName{($attrLength - 2)} == '<' && $attrName{($attrLength - 1)} == '=' && isset($this->{$attrNameFinal = rtrim(substr($attrName, 0, $attrLength - 2))}) && $this->$attrNameFinal <= $conditionNeedle)
			{
				$valid = true;
			}
			// Condition with the '=' comparison operator
			else if($attrName{($attrLength - 1)} == '=' && isset($this->{$attrNameFinal = rtrim(substr($attrName, 0, $attrLength - 1))}) && $this->$attrNameFinal == $conditionNeedle)
			{
				$valid = true;
			}
			// Condition with the '==' comparison operator
			else if($attrName{($attrLength - 2)} == '=' && $attrName{($attrLength - 1)} == '=' && isset($this->{$attrNameFinal = rtrim(substr($attrName, 0, $attrLength - 2))}) && $this->$attrNameFinal == $conditionNeedle)
			{
				$valid = true;
			}
			// Condition with the '!=' comparison operator
			else if($attrName{($attrLength - 2)} == '!' && $attrName{($attrLength - 1)} == '=' && isset($this->{$attrNameFinal = rtrim(substr($attrName, 0, $attrLength - 2))}) && $this->$attrNameFinal != $conditionNeedle)
			{
				$valid = true;
			}
			// Condition with the '===' comparison operator
			else if($attrName{($attrLength - 3)} == '=' && $attrName{($attrLength - 2)} == '=' && $attrName{($attrLength - 1)} == '=' && $this->{$attrNameFinal = rtrim(substr($attrName, 0, $attrLength - 3))} === $conditionNeedle)
			{
				$valid = true;
			}
			// Condition with the '!==' comparison operator
			else if($attrName{($attrLength - 3)} == '!' && $attrName{($attrLength - 2)} == '=' && $attrName{($attrLength - 1)} == '=' && $this->{$attrNameFinal = rtrim(substr($attrName, 0, $attrLength - 3))} !== $conditionNeedle)
			{
				$valid = true;
			}
			// Condition with the '!=' comparison operator
			else if($attrName{($attrLength - 2)} == '!' && $attrName{($attrLength - 1)} == '=' && isset($this->{$attrNameFinal = rtrim(substr($attrName, 0, $attrLength - 2))}) && $this->$attrNameFinal != $conditionNeedle)
			{
				$valid = true;
			}
			// Condition with the '%' comparison operator to check if the string contains another string
			else if($attrName{($attrLength - 1)} == '%' && isset($this->{$attrNameFinal = rtrim(substr($attrName, 0, $attrLength - 1))}) && ($conditionNeedle == '' || strpos(strtolower($this->$attrNameFinal), strtolower($conditionNeedle)) !== false))
			{
				$valid = true;
			}
			// Condition with the '!%' comparison operator to check if the string not contains another string
			else if($attrName{($attrLength - 2)} == '!' && $attrName{($attrLength - 1)} == '%' && isset($this->{$attrNameFinal = rtrim(substr($attrName, 0, $attrLength - 2))}) && ($conditionNeedle == '' || strpos(strtolower($this->$attrNameFinal), strtolower($conditionNeedle)) === false))
			{
				$valid = true;
			}
			// Check for an exact match
			else if(isset($this->$attrName) && $this->$attrName == $conditionNeedle)
			{
				$valid = true;
			}
			// Not matched :-(
			else
			{
				$valid = false;
			}
		}
		
		return $valid;
	}
	
	/**
	* Gets the data out of the data array file and cache it for later use. This function 
	* can be accessed in public so that the raw data can be obtained.
	* 
	* @return array Data
	*/
	public function getData()
	{
		$class = get_class($this);
		if(!isset(self::$_data[$class]))
		{
			self::$_data[$class] = require(Yii::getPathOfAlias($this->fileName()).'.php');
			
			if(!is_array(self::$_data[$class]))
				self::$_data[$class] = array();
		}
		
		return self::$_data[$class];
	}
	
	/**
	* Saves the input data array to the data file (and creates a nice 
	* looking data file with comments and tabs). The data saved by this function will also 
	* be cached and will be used as the new data provider for the current ArrayModel.
	* 
	* This function can also be used in public to save a whole bunch of data in one time.
	* 
	* @param array $data
	* @return boolean true on success and false on failure
	*/
	public function setData($data)
	{
		$class = get_class($this);
		
		$content = "<?php\r\n/**\r\n* Data file generated by " . get_class($this) . " (" . get_parent_class($this) . ")\r\n* Date: " . date("F j, Y, g:i a") . "\r\n*\r\n* Allowed data structure:\r\n*   " . str_replace("\r\n", "\r\n*   ", $this->arrayExport($this->arrayStructure(), 0, '    ')) . "\r\n*/\r\nreturn " . $this->arrayExport($data) . ";\r\n";
		
		// Write the content to the data file and put it in cache again
		if(file_put_contents(Yii::getPathOfAlias($this->fileName()).'.php', $content))
		{
			self::$_data[$class] = $data;
			return true;
		}
		else
		{
			return false;
		}
	}

	/**
	* Returns if the current data row is new.
	* 
	* @return boolean whether the data row is new and should be inserted when calling {@link save()}.
	* Defaults to false, but it will be set to true if the instance is created using the new operator.
	*/
	public function getIsNew()
	{
		return $this->_new;
	}

	/**
	* Sets if the data row is new.
	* 
	* @param boolean $value whether the data row is new and should be inserted when calling {@link save()}.
	* @see getIsNew
	*/
	public function setIsNew($value)
	{
		$this->_new = $value;
	}

	/**
	* This event is raised before the data row is saved.
	* By setting {@link CModelEvent::isValid} to be false, the normal {@link save()} process will be stopped.
	* 
	* @param CModelEvent $event the event parameter
	*/
	public function onBeforeSave($event)
	{
		$this->raiseEvent('onBeforeSave',$event);
	}

	/**
	* This event is raised after the data row is saved.
	* 
	* @param CEvent $event the event parameter
	*/
	public function onAfterSave($event)
	{
		$this->raiseEvent('onAfterSave',$event);
	}

	/**
	* This event is raised before the data row is deleted.
	* By setting {@link CModelEvent::isValid} to be false, the normal {@link delete()} process will be stopped.
	* 
	* @param CModelEvent $event the event parameter
	*/
	public function onBeforeDelete($event)
	{
		$this->raiseEvent('onBeforeDelete',$event);
	}

	/**
	* This event is raised after the data row is deleted.
	* 
	* @param CEvent $event the event parameter
	*/
	public function onAfterDelete($event)
	{
		$this->raiseEvent('onAfterDelete',$event);
	}

	/**
	* This event is raised before an finder performs a find call.
	* 
	* @param CModelEvent $event the event parameter
	* @see beforeFind
	*/
	public function onBeforeFind($event)
	{
		$this->raiseEvent('onBeforeFind',$event);
	}

	/**
	* This event is raised after the data row is instantiated by a find method.
	* 
	* @param CEvent $event the event parameter
	*/
	public function onAfterFind($event)
	{
		$this->raiseEvent('onAfterFind',$event);
	}

	/**
	* This method is invoked before saving a data row (after validation, if any).
	* The default implementation raises the {@link onBeforeSave} event.
	* You may override this method to do any preparation work for data row saving.
	* Use {@link isNew} to determine whether the saving is
	* for inserting or updating record.
	* Make sure you call the parent implementation so that the event is raised properly.
	* 
	* @return boolean whether the saving should be executed. Defaults to true.
	*/
	protected function beforeSave()
	{
		if($this->hasEventHandler('onBeforeSave'))
		{
			$event = new CModelEvent($this);
			$this->onBeforeSave($event);
			return $event->isValid;
		}
		else
			return true;
	}

	/**
	* This method is invoked after saving a data row successfully.
	* The default implementation raises the {@link onAfterSave} event.
	* You may override this method to do postprocessing after data row saving.
	* Make sure you call the parent implementation so that the event is raised properly.
	*/
	protected function afterSave()
	{
		if($this->hasEventHandler('onAfterSave'))
			$this->onAfterSave(new CEvent($this));
	}

	/**
	* This method is invoked before deleting a data row.
	* The default implementation raises the {@link onBeforeDelete} event.
	* You may override this method to do any preparation work for data row deletion.
	* Make sure you call the parent implementation so that the event is raised properly.
	* 
	* @return boolean whether the record should be deleted. Defaults to true.
	*/
	protected function beforeDelete()
	{
		if($this->hasEventHandler('onBeforeDelete'))
		{
			$event = new CModelEvent($this);
			$this->onBeforeDelete($event);
			return $event->isValid;
		}
		else
			return true;
	}

	/**
	* This method is invoked after deleting a data row.
	* The default implementation raises the {@link onAfterDelete} event.
	* You may override this method to do postprocessing after the data row is deleted.
	* Make sure you call the parent implementation so that the event is raised properly.
	*/
	protected function afterDelete()
	{
		if($this->hasEventHandler('onAfterDelete'))
			$this->onAfterDelete(new CEvent($this));
	}

	/**
	* This method is invoked before a finder executes a find call.
	* The find calls include {@link find}, {@link findAll} and {@link findById}.
	* The default implementation raises the {@link onBeforeFind} event.
	* If you override this method, make sure you call the parent implementation
	* so that the event is raised properly.
	*/
	protected function beforeFind()
	{
		if($this->hasEventHandler('onBeforeFind'))
		{
			$event = new CModelEvent($this);
			$this->onBeforeFind($event);
		}
	}

	/**
	* This method is invoked after each data row is instantiated by a find method.
	* The default implementation raises the {@link onAfterFind} event.
	* You may override this method to do postprocessing after each newly found record is instantiated.
	* Make sure you call the parent implementation so that the event is raised properly.
	*/
	protected function afterFind()
	{
		if($this->hasEventHandler('onAfterFind'))
			$this->onAfterFind(new CEvent($this));
	}
	
	/**
	* Converts the raw input data into a ArrayModel by using the structure defined in {@link arrayStructure()}. 
	* It will not add the identifier.
	* 
	* @param array $data RawData
	* @return ArrayModel
	*/
	private function dataToModel($data)
	{
		$model = $this->instantiate();
		
		if(is_array($data))
		{
			$attributesData = $this->dataToAttributes($this->arrayStructure(), $data);
			
			// Walk the data and assign the values to the attributes in the model
			foreach($attributesData as $key => $value)
			{
				$model->$key = $value;
			}
		}
		
		return $model;
	}
	
	/**
	* Converts the given ArrayModel to raw data by using the structure defined in {@link arrayStructure()}.
	* 
	* @param ArrayModel $model
	* @param array $attributes list of attributes that need to be converted. Defaults to null,
	* meaning all attributes will be converted.
	* @return array Raw data
	*/
	private function modelToData($model, $attributes = null)
	{
		$attributesData = array();
		
		// Specific attributes used?
		if(!is_array($attributes))
		{
			$attributes = $this->attributeNames();
		}
		
		// Walk the data and assign the values to the attributes in the model
		foreach($this->attributeNames() as $name)
		{
			$attributesData[$name] = $model->$name;
		}
		
		$data = $this->attributesToData($this->arrayStructure(), $attributesData);
		
		return $data;
	}
	
	/**
	* Converts the attribute data to the raw data format
	* 
	* @param array $structure
	* @param array $attributeData AttributeData
	* @return array RawData
	*/
	private function attributesToData($structure, $attributeData)
	{
		$data = array();
		if(!is_array($structure))
		{
			return $data;
		}
		
		// Walk the complete structure
		foreach($structure as $key => $attribute)
		{
			// There is a deeper structure?
			if(is_array($attribute))
			{
				$data[$key] = $this->attributesToData($structure[$key], $attributeData);
			}
			else
			{
				// Use single data if the data is not an array while it must be (as defined in the structure)
				if(is_array($data))
				{
					$data[$key] = $attributeData[$attribute];
				}
				else
				{
					$data[$key] = $attributeData;
				}
			}
		}
		
		return $data;
	}
	
	/**
	* Converts the raw data to attribute data
	* 
	* @param array $structure
	* @param array $data RawData
	* @return array AttributeData
	*/
	private function dataToAttributes($structure, $data)
	{
		$attributeData = array();
		if(!is_array($structure))
		{
			return $attributeData;
		}
		
		// Walk the complete structure
		foreach($structure as $key => $attribute)
		{
			// There is a deeper structure?
			if(is_array($attribute))
			{
				$attributeData = array_merge($attributeData, $this->dataToAttributes($structure[$key], $data[$key]));
			}
			else
			{
				// Use single data if the data is not an array while it must be (as defined in the structure)
				if(is_array($data))
				{
					$attributeData[$attribute] = $data[$key];
				}
				else
				{
					$attributeData[$attribute] = $data;
				}
			}
		}
		
		return $attributeData;
	}
	
	/**
	* Gets all the attribute names out of a structure array
	* 
	* @param array $structure
	* @return array
	*/
	private function getNames($structure)
	{
		$attributeList = array();
		foreach($structure as $attribute)
		{
			if(is_array($attribute))
			{
				$attributeList = array_merge($attributeList, $this->getNames($attribute));
			}
			else
			{
				$attributeList[] = $attribute;
			}
		}
		return $attributeList;
	}
	
	/**
	* Exports the input array to a nice and clean string output. This function is used 
	* by the {@link setData()} function and will be used to create a nice output data file.
	* 
	* @param array $array
	* @param integer $level
	* @param mixed $levelChar
	* @return string output of array export
	*/
	private function arrayExport($array = array(), $level = 0, $levelChar = "\t")
	{
		$arrayFields = 0;
		
		$output = "array(\r\n";
		foreach($array as $key => $value)
		{
			// Skip empty values and array keys
			if(is_array($key) || $value === null)
			{
				continue;
			}
			
			// Generate the value output
			$valueOutput = is_array($value) ? $this->arrayExport($value, $level + 1, $levelChar) : var_export($value, true);
			
			// Check if the value is an empty array
			if($level > 0 && $valueOutput === 'array()')
			{
				continue;
			}
			
			++$arrayFields;
			
			$output .= str_repeat($levelChar, $level + 1) . var_export($key, true) . " => " . $valueOutput . ",\r\n";
		}
		$output .= str_repeat($levelChar, $level) . ")";
		
		// Reformat if an array is empty, just to make it neat
		if($arrayFields == 0)
		{
			$output = 'array()';
		}
			
		return $output;
	}
}
