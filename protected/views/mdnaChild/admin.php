<?php
/* @var $this MdnaChildController */
/* @var $model MdnaChildMdl */
/* @var $searchConfig MdnaSearchConfig */

$this->breadcrumbs = array(
    'Mdna Child Mdls' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'Create Child Profile', 'url' => array('create')),
    array('label' => 'Import from csv', 'url' => array('import'), 'visible' => Yii::app()->user->checkAccess('Authenticated')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mdna-child-mdl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Child Profile</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>



<?php
echo CHtml::ajaxLink(
        'Search Comfig', Yii::app()->createUrl("/mdnaChild/configSearch"), array(
    'url' => "js:$(this).attr('href')",
    'update' => '#config-section',
        )
);
?>

</br>
<?php
echo CHtml::link('Advanced Search', '#', array('class' => 'search-button'));
?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
        'searchConfig' => $searchConfig,
    ));
    ?>
</div><!-- search-form -->

<?php
$dataProvider = $model->search();
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'mdna-child-mdl-grid',
    'htmlOptions' => array('class' => 'table table-striped table-bordered table-condensed'),
    'dataProvider' => $dataProvider,
    'filter' => $model,
    'columns' => array(
        //'id',
        'taluk_code',
        'name',
        'dob',
        'age',
//        array(
//            'name' => 'age',
//            'value' => '$data->age',
//        ),
        /*
          'sex',
          'caste',
          'street',
          'landmark',
          'sam_no',
          'district',
          'talluka',
          'name_of_anganwadi',
          'name_of_AWW',
          'ph_no',
          'dor',
          'fi_m_name',
          'fi_m_dob',
          'fi_m_education',
          'fi_m_profession',
          'fi_f_name',
          'fi_f_dob',
          'fi_f_education',
          'fi_f_profession',
          'fi_size',
          'fi_daily_income',
          'fi_no_sibling',
          'fi_no_brother',
          'fi_no_sister',
          'a_weight',
          'a_height',
          'a_muac',
          'c_appetite',
          'c_dairrhoea',
          'c_vomiting',
          'c_urinary',
          'c_fever',
          'c_cough',
          'c_lethargy',
          'c_swelling',
          'ih_opv',
          'ih_hepb',
          'ih_bcg',
          'ih_opv123',
          'ih_dpt123',
          'ih_hepb123',
          'ih_mis_vita',
          'ih_dpt_opv',
          'ih_mis_bost',
          'dh_breast_feeds',
          'dh_other',
          'dh_other_milk',
          'dh_bottle_feeding',
          'dh_comp_feeds',
          'dh_age_of_comp',
          'dh_no_of_feeds',
          'gpe_heart_rate',
          'gpe_respiratory_rate',
          'gpe_chest_indrawing',
          'gpe_visible_severe_wasting',
          'gpe_bl_pedal_edema',
          'gpe_bl_grade',
          'gpe_alert_Irritable_lethargic',
          'gpe_hair_changes',
          'gpe_desc_hair_change',
          'gpe_skin_changes',
          'gpe_desc_skin_change',
          'gpe_eye_signs_vit_a_def',
          'gpe_desc_vit_a_def',
          'gpe_ear_discharge',
          'gpe_desc_ear_discharge',
          'gpe_mouth_glossitis',
          'gpe_pallor',
          'gpe_pallor_some_sever',
          'gpe_lymphadenopathy',
          'gpe_desc_ymphadenopathy',
          'gpe_if_diarrhoea',
          'se_respitary',
          'se_cardio_vascular',
          'se_abdominal',
          'se_central_nervous',
          'ir_Hb',
          'ir_leukocyte_count',
          'ir_blood_glucose',
          'ir_blood_culture',
          'ir_urine_routine',
          'ir_urine_cs',
          'ir_chest_xray',
          'ir_monthoux_test',
          'ci_malnutritionutrition',
          'ci_diagnosi',
          'm_domiciliaty',
          'm_medical',
          'm_Nutritional',
          'r_higher_facility',
          'fuw1',
          'fuw2',
          'fuw3',
          'fuw4',
          'fum2',
          'fum4',
          'ep_cereals',
          'ep_pulses',
          'ep_oilseeds',
          'ep_milk_products',
          'ep_fruits',
          'ep_coloured_vegetable',
          'ep_other_vegetables',
          'ep_oils_fat',
          'ep_egg',
          'ep_fleshy_foods',
          'ep_sugar',
          'ep_others',
          'dh_like',
          'dh_dislike',
          'bf_put_to_breast',
          'bf_Breast_fed_up_to',
          'bf_introduction_of_food_at',
          'mp_m_menu',
          'mp_m_ingredients',
          'mp_m_quantity',
          'mp_m_time',
          'mp_bf_menu',
          'mp_bf_ingredients',
          'mp_bf_quantity',
          'mp_bf_time',
          'mp_l_menu',
          'mp_l_ingredients',
          'mp_l_quantity',
          'mp_l_time',
          'mp_s_menu',
          'mp_s_ingredients',
          'mp_s_quantity',
          'mp_s_time',
          'mp_d_menu',
          'mp_d_ingredients',
          'mp_d_quantity',
          'mp_d_time',
          'mp_o_menu',
          'mp_o_ingredients',
          'mp_o_quantity',
          'mp_o_time',
          'cre_biscuits',
          'cre_khara_mixture',
          'cre_bread',
          'cre_chocolates',
          'cre_chips',
          'cre_soft_drinks',
          'cre_other',
          'sq_aitamin_a',
          'sq_iron_n_folic_acid',
          'sq_b_complex',
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
          'lab_urine_profile',
          'lab_bor',
         */
        array(
            'class' => 'CButtonColumn',
//            'deleteButtonOptions'     => array(
//                'visible'   =>  'Yii::app()->user->checkAccess("Authenticated")',
//            ),
            'buttons' => array(
                'delete' => array
                    (
                    'visible' => 'Yii::app()->user->checkAccess("Authenticated")',
                ),
            )
        ),
    ),
));
?>

<div id="config-section"></div>