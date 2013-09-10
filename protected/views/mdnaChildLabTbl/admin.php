<?php
/* @var $this MdnaChildLabTblController */
/* @var $model MdnaChildLabTbl */

$this->breadcrumbs=array(
	'Mdna Child Lab Tbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MdnaChildLabTbl', 'url'=>array('index')),
	array('label'=>'Create MdnaChildLabTbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mdna-child-lab-tbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Mdna Child Lab Tbls</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mdna-child-lab-tbl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_a',
		'hgm_hb',
		'hgm_mcv',
		'hgm_rbc',
		'hgm_mch',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
