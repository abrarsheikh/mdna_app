<?php
/* @var $this MdnaChildController */
/* @var $data MdnaChildMdl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taluk_code')); ?>:</b>
	<?php echo CHtml::encode($data->taluk_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sr_no_wnc')); ?>:</b>
	<?php echo CHtml::encode($data->sr_no_wnc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phc_name')); ?>:</b>
	<?php echo CHtml::encode($data->phc_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dob')); ?>:</b>
	<?php echo CHtml::encode($data->dob); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('caste')); ?>:</b>
	<?php echo CHtml::encode($data->caste); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('street')); ?>:</b>
	<?php echo CHtml::encode($data->street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('landmark')); ?>:</b>
	<?php echo CHtml::encode($data->landmark); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sam_no')); ?>:</b>
	<?php echo CHtml::encode($data->sam_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('district')); ?>:</b>
	<?php echo CHtml::encode($data->district); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('talluka')); ?>:</b>
	<?php echo CHtml::encode($data->talluka); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_of_anganwadi')); ?>:</b>
	<?php echo CHtml::encode($data->name_of_anganwadi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_of_AWW')); ?>:</b>
	<?php echo CHtml::encode($data->name_of_AWW); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ph_no')); ?>:</b>
	<?php echo CHtml::encode($data->ph_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dor')); ?>:</b>
	<?php echo CHtml::encode($data->dor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fi_m_name')); ?>:</b>
	<?php echo CHtml::encode($data->fi_m_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fi_m_dob')); ?>:</b>
	<?php echo CHtml::encode($data->fi_m_dob); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fi_m_education')); ?>:</b>
	<?php echo CHtml::encode($data->fi_m_education); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fi_m_profession')); ?>:</b>
	<?php echo CHtml::encode($data->fi_m_profession); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fi_f_name')); ?>:</b>
	<?php echo CHtml::encode($data->fi_f_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fi_f_dob')); ?>:</b>
	<?php echo CHtml::encode($data->fi_f_dob); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fi_f_education')); ?>:</b>
	<?php echo CHtml::encode($data->fi_f_education); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fi_f_profession')); ?>:</b>
	<?php echo CHtml::encode($data->fi_f_profession); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fi_size')); ?>:</b>
	<?php echo CHtml::encode($data->fi_size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fi_daily_income')); ?>:</b>
	<?php echo CHtml::encode($data->fi_daily_income); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fi_no_sibling')); ?>:</b>
	<?php echo CHtml::encode($data->fi_no_sibling); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fi_no_brother')); ?>:</b>
	<?php echo CHtml::encode($data->fi_no_brother); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fi_no_sister')); ?>:</b>
	<?php echo CHtml::encode($data->fi_no_sister); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('a_weight')); ?>:</b>
	<?php echo CHtml::encode($data->a_weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('a_height')); ?>:</b>
	<?php echo CHtml::encode($data->a_height); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('a_muac')); ?>:</b>
	<?php echo CHtml::encode($data->a_muac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_appetite')); ?>:</b>
	<?php echo CHtml::encode($data->c_appetite); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_dairrhoea')); ?>:</b>
	<?php echo CHtml::encode($data->c_dairrhoea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_vomiting')); ?>:</b>
	<?php echo CHtml::encode($data->c_vomiting); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_urinary')); ?>:</b>
	<?php echo CHtml::encode($data->c_urinary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_fever')); ?>:</b>
	<?php echo CHtml::encode($data->c_fever); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_cough')); ?>:</b>
	<?php echo CHtml::encode($data->c_cough); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_lethargy')); ?>:</b>
	<?php echo CHtml::encode($data->c_lethargy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_swelling')); ?>:</b>
	<?php echo CHtml::encode($data->c_swelling); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ih_opv')); ?>:</b>
	<?php echo CHtml::encode($data->ih_opv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ih_hepb')); ?>:</b>
	<?php echo CHtml::encode($data->ih_hepb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ih_bcg')); ?>:</b>
	<?php echo CHtml::encode($data->ih_bcg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ih_opv123')); ?>:</b>
	<?php echo CHtml::encode($data->ih_opv123); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ih_dpt123')); ?>:</b>
	<?php echo CHtml::encode($data->ih_dpt123); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ih_hepb123')); ?>:</b>
	<?php echo CHtml::encode($data->ih_hepb123); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ih_mis_vita')); ?>:</b>
	<?php echo CHtml::encode($data->ih_mis_vita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ih_dpt_opv')); ?>:</b>
	<?php echo CHtml::encode($data->ih_dpt_opv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ih_mis_bost')); ?>:</b>
	<?php echo CHtml::encode($data->ih_mis_bost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dh_breast_feeds')); ?>:</b>
	<?php echo CHtml::encode($data->dh_breast_feeds); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dh_other')); ?>:</b>
	<?php echo CHtml::encode($data->dh_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dh_other_milk')); ?>:</b>
	<?php echo CHtml::encode($data->dh_other_milk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dh_bottle_feeding')); ?>:</b>
	<?php echo CHtml::encode($data->dh_bottle_feeding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dh_comp_feeds')); ?>:</b>
	<?php echo CHtml::encode($data->dh_comp_feeds); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dh_age_of_comp')); ?>:</b>
	<?php echo CHtml::encode($data->dh_age_of_comp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dh_no_of_feeds')); ?>:</b>
	<?php echo CHtml::encode($data->dh_no_of_feeds); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_heart_rate')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_heart_rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_respiratory_rate')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_respiratory_rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_chest_indrawing')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_chest_indrawing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_visible_severe_wasting')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_visible_severe_wasting); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_bl_pedal_edema')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_bl_pedal_edema); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_bl_grade')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_bl_grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_alert_Irritable_lethargic')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_alert_Irritable_lethargic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_hair_changes')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_hair_changes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_desc_hair_change')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_desc_hair_change); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_skin_changes')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_skin_changes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_desc_skin_change')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_desc_skin_change); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_eye_signs_vit_a_def')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_eye_signs_vit_a_def); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_desc_vit_a_def')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_desc_vit_a_def); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_ear_discharge')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_ear_discharge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_desc_ear_discharge')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_desc_ear_discharge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_mouth_glossitis')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_mouth_glossitis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_pallor')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_pallor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_pallor_some_sever')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_pallor_some_sever); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_lymphadenopathy')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_lymphadenopathy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_desc_ymphadenopathy')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_desc_ymphadenopathy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpe_if_diarrhoea')); ?>:</b>
	<?php echo CHtml::encode($data->gpe_if_diarrhoea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('se_respitary')); ?>:</b>
	<?php echo CHtml::encode($data->se_respitary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('se_cardio_vascular')); ?>:</b>
	<?php echo CHtml::encode($data->se_cardio_vascular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('se_abdominal')); ?>:</b>
	<?php echo CHtml::encode($data->se_abdominal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('se_central_nervous')); ?>:</b>
	<?php echo CHtml::encode($data->se_central_nervous); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ir_Hb')); ?>:</b>
	<?php echo CHtml::encode($data->ir_Hb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ir_leukocyte_count')); ?>:</b>
	<?php echo CHtml::encode($data->ir_leukocyte_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ir_blood_glucose')); ?>:</b>
	<?php echo CHtml::encode($data->ir_blood_glucose); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ir_blood_culture')); ?>:</b>
	<?php echo CHtml::encode($data->ir_blood_culture); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ir_urine_routine')); ?>:</b>
	<?php echo CHtml::encode($data->ir_urine_routine); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ir_urine_cs')); ?>:</b>
	<?php echo CHtml::encode($data->ir_urine_cs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ir_chest_xray')); ?>:</b>
	<?php echo CHtml::encode($data->ir_chest_xray); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ir_monthoux_test')); ?>:</b>
	<?php echo CHtml::encode($data->ir_monthoux_test); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ci_malnutritionutrition')); ?>:</b>
	<?php echo CHtml::encode($data->ci_malnutritionutrition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ci_diagnosi')); ?>:</b>
	<?php echo CHtml::encode($data->ci_diagnosi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_domiciliaty')); ?>:</b>
	<?php echo CHtml::encode($data->m_domiciliaty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_medical')); ?>:</b>
	<?php echo CHtml::encode($data->m_medical); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_Nutritional')); ?>:</b>
	<?php echo CHtml::encode($data->m_Nutritional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('r_higher_facility')); ?>:</b>
	<?php echo CHtml::encode($data->r_higher_facility); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuw1')); ?>:</b>
	<?php echo CHtml::encode($data->fuw1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuw2')); ?>:</b>
	<?php echo CHtml::encode($data->fuw2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuw3')); ?>:</b>
	<?php echo CHtml::encode($data->fuw3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuw4')); ?>:</b>
	<?php echo CHtml::encode($data->fuw4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fum2')); ?>:</b>
	<?php echo CHtml::encode($data->fum2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fum4')); ?>:</b>
	<?php echo CHtml::encode($data->fum4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ep_cereals')); ?>:</b>
	<?php echo CHtml::encode($data->ep_cereals); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ep_pulses')); ?>:</b>
	<?php echo CHtml::encode($data->ep_pulses); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ep_oilseeds')); ?>:</b>
	<?php echo CHtml::encode($data->ep_oilseeds); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ep_milk_products')); ?>:</b>
	<?php echo CHtml::encode($data->ep_milk_products); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ep_fruits')); ?>:</b>
	<?php echo CHtml::encode($data->ep_fruits); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ep_coloured_vegetable')); ?>:</b>
	<?php echo CHtml::encode($data->ep_coloured_vegetable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ep_other_vegetables')); ?>:</b>
	<?php echo CHtml::encode($data->ep_other_vegetables); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ep_oils_fat')); ?>:</b>
	<?php echo CHtml::encode($data->ep_oils_fat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ep_egg')); ?>:</b>
	<?php echo CHtml::encode($data->ep_egg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ep_fleshy_foods')); ?>:</b>
	<?php echo CHtml::encode($data->ep_fleshy_foods); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ep_sugar')); ?>:</b>
	<?php echo CHtml::encode($data->ep_sugar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ep_others')); ?>:</b>
	<?php echo CHtml::encode($data->ep_others); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dh_like')); ?>:</b>
	<?php echo CHtml::encode($data->dh_like); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dh_dislike')); ?>:</b>
	<?php echo CHtml::encode($data->dh_dislike); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bf_put_to_breast')); ?>:</b>
	<?php echo CHtml::encode($data->bf_put_to_breast); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bf_Breast_fed_up_to')); ?>:</b>
	<?php echo CHtml::encode($data->bf_Breast_fed_up_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bf_introduction_of_food_at')); ?>:</b>
	<?php echo CHtml::encode($data->bf_introduction_of_food_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_m_menu')); ?>:</b>
	<?php echo CHtml::encode($data->mp_m_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_m_ingredients')); ?>:</b>
	<?php echo CHtml::encode($data->mp_m_ingredients); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_m_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->mp_m_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_m_time')); ?>:</b>
	<?php echo CHtml::encode($data->mp_m_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_bf_menu')); ?>:</b>
	<?php echo CHtml::encode($data->mp_bf_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_bf_ingredients')); ?>:</b>
	<?php echo CHtml::encode($data->mp_bf_ingredients); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_bf_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->mp_bf_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_bf_time')); ?>:</b>
	<?php echo CHtml::encode($data->mp_bf_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_l_menu')); ?>:</b>
	<?php echo CHtml::encode($data->mp_l_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_l_ingredients')); ?>:</b>
	<?php echo CHtml::encode($data->mp_l_ingredients); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_l_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->mp_l_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_l_time')); ?>:</b>
	<?php echo CHtml::encode($data->mp_l_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_s_menu')); ?>:</b>
	<?php echo CHtml::encode($data->mp_s_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_s_ingredients')); ?>:</b>
	<?php echo CHtml::encode($data->mp_s_ingredients); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_s_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->mp_s_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_s_time')); ?>:</b>
	<?php echo CHtml::encode($data->mp_s_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_d_menu')); ?>:</b>
	<?php echo CHtml::encode($data->mp_d_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_d_ingredients')); ?>:</b>
	<?php echo CHtml::encode($data->mp_d_ingredients); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_d_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->mp_d_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_d_time')); ?>:</b>
	<?php echo CHtml::encode($data->mp_d_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_o_menu')); ?>:</b>
	<?php echo CHtml::encode($data->mp_o_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_o_ingredients')); ?>:</b>
	<?php echo CHtml::encode($data->mp_o_ingredients); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_o_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->mp_o_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_o_time')); ?>:</b>
	<?php echo CHtml::encode($data->mp_o_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cre_biscuits')); ?>:</b>
	<?php echo CHtml::encode($data->cre_biscuits); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cre_khara_mixture')); ?>:</b>
	<?php echo CHtml::encode($data->cre_khara_mixture); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cre_bread')); ?>:</b>
	<?php echo CHtml::encode($data->cre_bread); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cre_chocolates')); ?>:</b>
	<?php echo CHtml::encode($data->cre_chocolates); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cre_chips')); ?>:</b>
	<?php echo CHtml::encode($data->cre_chips); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cre_soft_drinks')); ?>:</b>
	<?php echo CHtml::encode($data->cre_soft_drinks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cre_other')); ?>:</b>
	<?php echo CHtml::encode($data->cre_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sq_aitamin_a')); ?>:</b>
	<?php echo CHtml::encode($data->sq_aitamin_a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sq_iron_n_folic_acid')); ?>:</b>
	<?php echo CHtml::encode($data->sq_iron_n_folic_acid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sq_b_complex')); ?>:</b>
	<?php echo CHtml::encode($data->sq_b_complex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_hb')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_hb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_mcv')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_mcv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_rbc')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_rbc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_mch')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_mch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_pcv')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_pcv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_mchc')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_mchc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_esr_mm')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_esr_mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_bleeding_time')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_bleeding_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_clotting_time')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_clotting_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_platelet_count')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_platelet_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_dc_wbc')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_dc_wbc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_dc_neutrophils')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_dc_neutrophils); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_dc_eosinophils')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_dc_eosinophils); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_dc_basophills')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_dc_basophills); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_dc_lymphocytes')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_dc_lymphocytes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_dc_monocytes')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_dc_monocytes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_dc_aec')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_dc_aec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_dc_retieulocyte')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_dc_retieulocyte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_dc_blast_cells')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_dc_blast_cells); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_dc_promyelocyte')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_dc_promyelocyte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_dc_myelocytes')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_dc_myelocytes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_dc_metamyelocytes')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_dc_metamyelocytes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_dc_stabforms')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_dc_stabforms); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgm_dc_rdw')); ?>:</b>
	<?php echo CHtml::encode($data->hgm_dc_rdw); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgn_sp_albumin')); ?>:</b>
	<?php echo CHtml::encode($data->hgn_sp_albumin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgn_sp_globulin')); ?>:</b>
	<?php echo CHtml::encode($data->hgn_sp_globulin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hgn_sp_ag_ratio')); ?>:</b>
	<?php echo CHtml::encode($data->hgn_sp_ag_ratio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ps_rbc')); ?>:</b>
	<?php echo CHtml::encode($data->ps_rbc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ps_wbc')); ?>:</b>
	<?php echo CHtml::encode($data->ps_wbc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ps_platelets')); ?>:</b>
	<?php echo CHtml::encode($data->ps_platelets); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lab_urine_profile')); ?>:</b>
	<?php echo CHtml::encode($data->lab_urine_profile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lab_bor')); ?>:</b>
	<?php echo CHtml::encode($data->lab_bor); ?>
	<br />

	*/ ?>

</div>