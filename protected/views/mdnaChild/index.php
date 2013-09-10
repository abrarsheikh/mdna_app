<?php
/* @var $this MdnaChildController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mdna Child Mdls',
);

$this->menu=array(
	array('label'=>'Create Child Profile', 'url'=>array('create')),
	array('label' => 'Import from csv', 'url' => array('import'), 'visible' => Yii::app()->user->checkAccess('Authenticated')),
);
?>

<h1>Mdna Child Mdls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
