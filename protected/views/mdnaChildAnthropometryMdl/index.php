<?php
/* @var $this MdnaChildAnthropometryMdlController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mdna Child Anthropometry Mdls',
);

$this->menu=array(
	array('label'=>'Create MdnaChildAnthropometryMdl', 'url'=>array('create')),
	array('label'=>'Manage MdnaChildAnthropometryMdl', 'url'=>array('admin')),
);
?>

<h1>Mdna Child Anthropometry Mdls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
