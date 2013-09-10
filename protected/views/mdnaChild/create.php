<?php
/* @var $this MdnaChildController */
/* @var $model MdnaChildMdl */

$this->breadcrumbs=array(
	'Mdna Child Mdls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Child Profile', 'url'=>array('admin')),
);
?>

<h1>Create Child Profile</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,  'anthropometry' => $anthropometry, 'labReport' => $labReport, 'photomodel'    =>  $photomodel)); ?>