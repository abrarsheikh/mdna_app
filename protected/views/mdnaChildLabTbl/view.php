<?php
/* @var $this MdnaChildLabTblController */
/* @var $model MdnaChildLabTbl */

$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'mydialog',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => Yii::app()->params['view_lab']." ($model->id_a)",
        'autoOpen' => true,
        'width' => 550,
        'height' => 470,
    ),
));

//$this->breadcrumbs=array(
//	'Mdna Child Lab Tbls'=>array('index'),
//	$model->id,
//);
//
//$this->menu=array(
//	array('label'=>'List MdnaChildLabTbl', 'url'=>array('index')),
//	array('label'=>'Create MdnaChildLabTbl', 'url'=>array('create')),
//	array('label'=>'Update MdnaChildLabTbl', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete MdnaChildLabTbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage MdnaChildLabTbl', 'url'=>array('admin')),
//);
?>

<h1></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'hgm_hb',
		'hgm_mcv',
		'hgm_rbc',
		'hgm_mch',
		'hgm_pcv',
		'hgm_mchc',
		'hgm_esr_mm',
		'hgm_bleeding_time',
		'hgm_clotting_time',
		'hgm_platelet_count',
		'hgm_dc_wbc',
		'hgm_dc_neutrophils',
		'hgm_dc_eosinophils',
		'hgm_dc_basophills',
		'hgm_dc_lymphocytes',
		'hgm_dc_monocytes',
		'hgm_dc_aec',
		'hgm_dc_retieulocyte',
		'hgm_dc_blast_cells',
		'hgm_dc_promyelocyte',
		'hgm_dc_myelocytes',
		'hgm_dc_metamyelocytes',
		'hgm_dc_stabforms',
		'hgm_dc_rdw',
		'hgn_sp_albumin',
		'hgn_sp_globulin',
		'hgn_sp_ag_ratio',
		'ps_rbc',
		'ps_wbc',
		'ps_platelets',
		'ps_impression',
		'lab_urine_profile',
		'lab_bor',
	),
)); ?>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>
