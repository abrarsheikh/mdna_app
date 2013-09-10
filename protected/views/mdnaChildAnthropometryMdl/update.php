<?php
/* @var $this MdnaChildAnthropometryMdlController */
/* @var $model MdnaChildAnthropometryMdl */

$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'mydialog',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => 'Dialog box 1',
        'autoOpen' => true,
        'width' => 550,
        'height' => 470,
    ),
));

//$this->breadcrumbs=array(
//	'Mdna Child Anthropometry Mdls'=>array('index'),
//	$model->id=>array('view','id'=>$model->id),
//	'Update',
//);

//$this->menu=array(
//	array('label'=>'List MdnaChildAnthropometryMdl', 'url'=>array('index')),
//	array('label'=>'Create MdnaChildAnthropometryMdl', 'url'=>array('create')),
//	array('label'=>'View MdnaChildAnthropometryMdl', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage MdnaChildAnthropometryMdl', 'url'=>array('admin')),
//);
?>

<h2>Update Anthropometry #<?php echo $model->id; ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>