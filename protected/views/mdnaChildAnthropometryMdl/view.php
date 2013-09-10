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
//	$model->id,
//);
//
//$this->menu=array(
//	array('label'=>'List MdnaChildAnthropometryMdl', 'url'=>array('index')),
//	array('label'=>'Create MdnaChildAnthropometryMdl', 'url'=>array('create')),
//	array('label'=>'Update MdnaChildAnthropometryMdl', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete MdnaChildAnthropometryMdl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage MdnaChildAnthropometryMdl', 'url'=>array('admin')),
//);
?>

<h2>Anthropometry Detail #<?php echo $model->id; ?></h2>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'weight',
        'height',
        'muac',
        'date',
    ),
));
?>
<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>