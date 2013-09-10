<?php
/* @var $this MdnaChildLabTblController */
/* @var $model MdnaChildLabTbl */

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
//	'Mdna Child Lab Tbls'=>array('index'),
//	$model->id=>array('view','id'=>$model->id),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List MdnaChildLabTbl', 'url'=>array('index')),
//	array('label'=>'Create MdnaChildLabTbl', 'url'=>array('create')),
//	array('label'=>'View MdnaChildLabTbl', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage MdnaChildLabTbl', 'url'=>array('admin')),
//);
?>

<h1>Update MdnaChildLabTbl <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>