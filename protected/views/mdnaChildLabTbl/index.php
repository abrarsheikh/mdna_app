<?php
/* @var $this MdnaChildLabTblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mdna Child Lab Tbls',
);

$this->menu=array(
	array('label'=>'Create MdnaChildLabTbl', 'url'=>array('create')),
	array('label'=>'Manage MdnaChildLabTbl', 'url'=>array('admin')),
);
?>

<h1>Mdna Child Lab Tbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
