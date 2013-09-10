<?php
/* @var $this MdnaChildController */
/* @var $model MdnaChildMdl */
/* @var $anthropometry MdnaChildAnthropometryMdl */

$this->breadcrumbs=array(
	'Mdna Child Mdls'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Child Profile', 'url'=>array('create')),
	array('label'=>'View Child Profile', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Child Profile', 'url'=>array('admin')),
        array('label' => 'Import from csv', 'url' => array('import'), 'visible' => Yii::app()->user->checkAccess('Authenticated')),
);
?>

<h1>Update Child Profile (<?php echo $model->taluk_code; ?>)</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'anthropometry' => $anthropometry, 'labReport' => $labReport, 'photomodel'    =>  $photomodel)); ?>

<div id="detail-section"></div>