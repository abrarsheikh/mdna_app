<<?php
/* @var $this MdnaChildController */
/* @var $model MdnaSearchConfigTbl */
/* @var $form CActiveForm */


$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'configDialog',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' =>  Yii::app()->params['search_config_title'],
        'autoOpen' => true,
        'width' => 550,
        'height' => 470,
    ),
));
?>



<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
                'id' => 'mdna-child-mdl-form',
                'enableAjaxValidation' => false,
            ));
    ?>

    <?php echo $form->errorSummary($model); ?>

    
    <div class="row">
        <?php echo $form->labelEx($model,'taluk_code'); ?>
        <?php echo $form->checkBox($model,'taluk_code', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'sr_no_wnc'); ?>
        <?php echo $form->checkBox($model,'sr_no_wnc', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'name'); ?>
        <?php echo $form->checkBox($model,'name', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'phc_name'); ?>
        <?php echo $form->checkBox($model,'phc_name', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'dob'); ?>
        <?php echo $form->dropDownList($model,'dob', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'age'); ?>
        <?php echo $form->dropDownList($model,'age', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'sex'); ?>
        <?php echo $form->checkBox($model,'sex', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'caste'); ?>
        <?php echo $form->checkBox($model,'caste', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'street'); ?>
        <?php echo $form->checkBox($model,'street', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'landmark'); ?>
        <?php echo $form->checkBox($model,'landmark', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'sam_no'); ?>
        <?php echo $form->checkBox($model,'sam_no', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'district'); ?>
        <?php echo $form->checkBox($model,'district', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'talluka'); ?>
        <?php echo $form->checkBox($model,'talluka', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'name_of_anganwadi'); ?>
        <?php echo $form->checkBox($model,'name_of_anganwadi', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'name_of_AWW'); ?>
        <?php echo $form->checkBox($model,'name_of_AWW', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ph_no'); ?>
        <?php echo $form->checkBox($model,'ph_no', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'dor'); ?>
        <?php echo $form->checkBox($model,'dor', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fi_m_name'); ?>
        <?php echo $form->checkBox($model,'fi_m_name', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fi_m_dob'); ?>
        <?php echo $form->checkBox($model,'fi_m_dob', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fi_m_education'); ?>
        <?php echo $form->checkBox($model,'fi_m_education', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fi_m_profession'); ?>
        <?php echo $form->checkBox($model,'fi_m_profession', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fi_f_name'); ?>
        <?php echo $form->checkBox($model,'fi_f_name', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fi_f_dob'); ?>
        <?php echo $form->checkBox($model,'fi_f_dob', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fi_f_education'); ?>
        <?php echo $form->checkBox($model,'fi_f_education', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fi_f_profession'); ?>
        <?php echo $form->checkBox($model,'fi_f_profession', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fi_size'); ?>
        <?php echo $form->checkBox($model,'fi_size', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fi_daily_income'); ?>
        <?php echo $form->checkBox($model,'fi_daily_income', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fi_no_sibling'); ?>
        <?php echo $form->checkBox($model,'fi_no_sibling', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fi_no_brother'); ?>
        <?php echo $form->checkBox($model,'fi_no_brother', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fi_no_sister'); ?>
        <?php echo $form->checkBox($model,'fi_no_sister', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model,'weight'); ?>
        <?php echo $form->dropDownList($model,'weight', Yii::app()->params['searchConfig_dd']); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model,'height'); ?>
        <?php echo $form->dropDownList($model,'height', Yii::app()->params['searchConfig_dd']); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model,'muac'); ?>
        <?php echo $form->dropDownList($model,'muac', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'c_appetite'); ?>
        <?php echo $form->checkBox($model,'c_appetite', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'c_dairrhoea'); ?>
        <?php echo $form->checkBox($model,'c_dairrhoea', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'c_vomiting'); ?>
        <?php echo $form->checkBox($model,'c_vomiting', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'c_urinary'); ?>
        <?php echo $form->checkBox($model,'c_urinary', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'c_fever'); ?>
        <?php echo $form->checkBox($model,'c_fever', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'c_cough'); ?>
        <?php echo $form->checkBox($model,'c_cough', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'c_lethargy'); ?>
        <?php echo $form->checkBox($model,'c_lethargy', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'c_swelling'); ?>
        <?php echo $form->checkBox($model,'c_swelling', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ih_opv'); ?>
        <?php echo $form->checkBox($model,'ih_opv', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ih_hepb'); ?>
        <?php echo $form->checkBox($model,'ih_hepb', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ih_bcg'); ?>
        <?php echo $form->checkBox($model,'ih_bcg', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ih_opv123'); ?>
        <?php echo $form->checkBox($model,'ih_opv123', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ih_dpt123'); ?>
        <?php echo $form->checkBox($model,'ih_dpt123', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ih_hepb123'); ?>
        <?php echo $form->checkBox($model,'ih_hepb123', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ih_mis_vita'); ?>
        <?php echo $form->checkBox($model,'ih_mis_vita', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ih_dpt_opv'); ?>
        <?php echo $form->checkBox($model,'ih_dpt_opv', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ih_mis_bost'); ?>
        <?php echo $form->checkBox($model,'ih_mis_bost', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'dh_breast_feeds'); ?>
        <?php echo $form->checkBox($model,'dh_breast_feeds', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'dh_other'); ?>
        <?php echo $form->checkBox($model,'dh_other', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'dh_other_milk'); ?>
        <?php echo $form->checkBox($model,'dh_other_milk', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'dh_bottle_feeding'); ?>
        <?php echo $form->checkBox($model,'dh_bottle_feeding', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'dh_comp_feeds'); ?>
        <?php echo $form->checkBox($model,'dh_comp_feeds', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'dh_age_of_comp'); ?>
        <?php echo $form->checkBox($model,'dh_age_of_comp', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'dh_no_of_feeds'); ?>
        <?php echo $form->checkBox($model,'dh_no_of_feeds', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_heart_rate'); ?>
        <?php echo $form->checkBox($model,'gpe_heart_rate', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_respiratory_rate'); ?>
        <?php echo $form->checkBox($model,'gpe_respiratory_rate', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_chest_indrawing'); ?>
        <?php echo $form->checkBox($model,'gpe_chest_indrawing', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_visible_severe_wasting'); ?>
        <?php echo $form->checkBox($model,'gpe_visible_severe_wasting', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_bl_pedal_edema'); ?>
        <?php echo $form->checkBox($model,'gpe_bl_pedal_edema', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_bl_grade'); ?>
        <?php echo $form->checkBox($model,'gpe_bl_grade', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_alert_Irritable_lethargic'); ?>
        <?php echo $form->checkBox($model,'gpe_alert_Irritable_lethargic', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_hair_changes'); ?>
        <?php echo $form->checkBox($model,'gpe_hair_changes', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_desc_hair_change'); ?>
        <?php echo $form->checkBox($model,'gpe_desc_hair_change', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_skin_changes'); ?>
        <?php echo $form->checkBox($model,'gpe_skin_changes', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_desc_skin_change'); ?>
        <?php echo $form->checkBox($model,'gpe_desc_skin_change', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_eye_signs_vit_a_def'); ?>
        <?php echo $form->checkBox($model,'gpe_eye_signs_vit_a_def', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_desc_vit_a_def'); ?>
        <?php echo $form->checkBox($model,'gpe_desc_vit_a_def', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_ear_discharge'); ?>
        <?php echo $form->checkBox($model,'gpe_ear_discharge', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_desc_ear_discharge'); ?>
        <?php echo $form->checkBox($model,'gpe_desc_ear_discharge', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_mouth_glossitis'); ?>
        <?php echo $form->checkBox($model,'gpe_mouth_glossitis', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_pallor'); ?>
        <?php echo $form->checkBox($model,'gpe_pallor', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_pallor_some_sever'); ?>
        <?php echo $form->checkBox($model,'gpe_pallor_some_sever', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_lymphadenopathy'); ?>
        <?php echo $form->checkBox($model,'gpe_lymphadenopathy', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_desc_ymphadenopathy'); ?>
        <?php echo $form->checkBox($model,'gpe_desc_ymphadenopathy', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gpe_if_diarrhoea'); ?>
        <?php echo $form->checkBox($model,'gpe_if_diarrhoea', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'se_respitary'); ?>
        <?php echo $form->checkBox($model,'se_respitary', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'se_cardio_vascular'); ?>
        <?php echo $form->checkBox($model,'se_cardio_vascular', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'se_abdominal'); ?>
        <?php echo $form->checkBox($model,'se_abdominal', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'se_central_nervous'); ?>
        <?php echo $form->checkBox($model,'se_central_nervous', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ir_Hb'); ?>
        <?php echo $form->checkBox($model,'ir_Hb', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ir_leukocyte_count'); ?>
        <?php echo $form->checkBox($model,'ir_leukocyte_count', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ir_blood_glucose'); ?>
        <?php echo $form->checkBox($model,'ir_blood_glucose', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ir_blood_culture'); ?>
        <?php echo $form->checkBox($model,'ir_blood_culture', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ir_urine_routine'); ?>
        <?php echo $form->checkBox($model,'ir_urine_routine', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ir_urine_cs'); ?>
        <?php echo $form->checkBox($model,'ir_urine_cs', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ir_chest_xray'); ?>
        <?php echo $form->checkBox($model,'ir_chest_xray', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ir_monthoux_test'); ?>
        <?php echo $form->checkBox($model,'ir_monthoux_test', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ci_malnutritionutrition'); ?>
        <?php echo $form->checkBox($model,'ci_malnutritionutrition', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ci_diagnosi'); ?>
        <?php echo $form->checkBox($model,'ci_diagnosi', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'m_domiciliaty'); ?>
        <?php echo $form->checkBox($model,'m_domiciliaty', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'m_medical'); ?>
        <?php echo $form->checkBox($model,'m_medical', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'m_Nutritional'); ?>
        <?php echo $form->checkBox($model,'m_Nutritional', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'r_higher_facility'); ?>
        <?php echo $form->checkBox($model,'r_higher_facility', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fuw1'); ?>
        <?php echo $form->checkBox($model,'fuw1', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fuw2'); ?>
        <?php echo $form->checkBox($model,'fuw2', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fuw3'); ?>
        <?php echo $form->checkBox($model,'fuw3', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fuw4'); ?>
        <?php echo $form->checkBox($model,'fuw4', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fum2'); ?>
        <?php echo $form->checkBox($model,'fum2', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fum4'); ?>
        <?php echo $form->checkBox($model,'fum4', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ep_cereals'); ?>
        <?php echo $form->checkBox($model,'ep_cereals', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ep_pulses'); ?>
        <?php echo $form->checkBox($model,'ep_pulses', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ep_oilseeds'); ?>
        <?php echo $form->checkBox($model,'ep_oilseeds', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ep_milk_products'); ?>
        <?php echo $form->checkBox($model,'ep_milk_products', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ep_fruits'); ?>
        <?php echo $form->checkBox($model,'ep_fruits', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ep_coloured_vegetable'); ?>
        <?php echo $form->checkBox($model,'ep_coloured_vegetable', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ep_other_vegetables'); ?>
        <?php echo $form->checkBox($model,'ep_other_vegetables', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ep_oils_fat'); ?>
        <?php echo $form->checkBox($model,'ep_oils_fat', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ep_egg'); ?>
        <?php echo $form->checkBox($model,'ep_egg', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ep_fleshy_foods'); ?>
        <?php echo $form->checkBox($model,'ep_fleshy_foods', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ep_sugar'); ?>
        <?php echo $form->checkBox($model,'ep_sugar', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ep_others'); ?>
        <?php echo $form->checkBox($model,'ep_others', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'dh_like'); ?>
        <?php echo $form->checkBox($model,'dh_like', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'dh_dislike'); ?>
        <?php echo $form->checkBox($model,'dh_dislike', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'bf_put_to_breast'); ?>
        <?php echo $form->checkBox($model,'bf_put_to_breast', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'bf_Breast_fed_up_to'); ?>
        <?php echo $form->checkBox($model,'bf_Breast_fed_up_to', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'bf_introduction_of_food_at'); ?>
        <?php echo $form->checkBox($model,'bf_introduction_of_food_at', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_m_menu'); ?>
        <?php echo $form->checkBox($model,'mp_m_menu', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_m_ingredients'); ?>
        <?php echo $form->checkBox($model,'mp_m_ingredients', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_m_quantity'); ?>
        <?php echo $form->checkBox($model,'mp_m_quantity', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_m_time'); ?>
        <?php echo $form->checkBox($model,'mp_m_time', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_bf_menu'); ?>
        <?php echo $form->checkBox($model,'mp_bf_menu', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_bf_ingredients'); ?>
        <?php echo $form->checkBox($model,'mp_bf_ingredients', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_bf_quantity'); ?>
        <?php echo $form->checkBox($model,'mp_bf_quantity', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_bf_time'); ?>
        <?php echo $form->checkBox($model,'mp_bf_time', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_l_menu'); ?>
        <?php echo $form->checkBox($model,'mp_l_menu', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_l_ingredients'); ?>
        <?php echo $form->checkBox($model,'mp_l_ingredients', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_l_quantity'); ?>
        <?php echo $form->checkBox($model,'mp_l_quantity', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_l_time'); ?>
        <?php echo $form->checkBox($model,'mp_l_time', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_s_menu'); ?>
        <?php echo $form->checkBox($model,'mp_s_menu', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_s_ingredients'); ?>
        <?php echo $form->checkBox($model,'mp_s_ingredients', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_s_quantity'); ?>
        <?php echo $form->checkBox($model,'mp_s_quantity', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_s_time'); ?>
        <?php echo $form->checkBox($model,'mp_s_time', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_d_menu'); ?>
        <?php echo $form->checkBox($model,'mp_d_menu', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_d_ingredients'); ?>
        <?php echo $form->checkBox($model,'mp_d_ingredients', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_d_quantity'); ?>
        <?php echo $form->checkBox($model,'mp_d_quantity', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_d_time'); ?>
        <?php echo $form->checkBox($model,'mp_d_time', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_o_menu'); ?>
        <?php echo $form->checkBox($model,'mp_o_menu', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_o_ingredients'); ?>
        <?php echo $form->checkBox($model,'mp_o_ingredients', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_o_quantity'); ?>
        <?php echo $form->checkBox($model,'mp_o_quantity', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'mp_o_time'); ?>
        <?php echo $form->checkBox($model,'mp_o_time', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'cre_biscuits'); ?>
        <?php echo $form->checkBox($model,'cre_biscuits', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'cre_khara_mixture'); ?>
        <?php echo $form->checkBox($model,'cre_khara_mixture', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'cre_bread'); ?>
        <?php echo $form->checkBox($model,'cre_bread', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'cre_chocolates'); ?>
        <?php echo $form->checkBox($model,'cre_chocolates', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'cre_chips'); ?>
        <?php echo $form->checkBox($model,'cre_chips', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'cre_soft_drinks'); ?>
        <?php echo $form->checkBox($model,'cre_soft_drinks', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'cre_other'); ?>
        <?php echo $form->checkBox($model,'cre_other', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'sq_aitamin_a'); ?>
        <?php echo $form->checkBox($model,'sq_aitamin_a', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'sq_iron_n_folic_acid'); ?>
        <?php echo $form->checkBox($model,'sq_iron_n_folic_acid', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'sq_b_complex'); ?>
        <?php echo $form->checkBox($model,'sq_b_complex', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_hb'); ?>
        <?php echo $form->dropDownList($model,'hgm_hb', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_mcv'); ?>
        <?php echo $form->dropDownList($model,'hgm_mcv', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_rbc'); ?>
        <?php echo $form->dropDownList($model,'hgm_rbc', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_mch'); ?>
        <?php echo $form->dropDownList($model,'hgm_mch', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_pcv'); ?>
        <?php echo $form->dropDownList($model,'hgm_pcv', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_mchc'); ?>
        <?php echo $form->dropDownList($model,'hgm_mchc', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_esr_mm'); ?>
        <?php echo $form->checkBox($model,'hgm_esr_mm', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_bleeding_time'); ?>
        <?php echo $form->checkBox($model,'hgm_bleeding_time', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_clotting_time'); ?>
        <?php echo $form->checkBox($model,'hgm_clotting_time', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_platelet_count'); ?>
        <?php echo $form->dropDownList($model,'hgm_platelet_count', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_dc_wbc'); ?>
        <?php echo $form->dropDownList($model,'hgm_dc_wbc', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_dc_neutrophils'); ?>
        <?php echo $form->dropDownList($model,'hgm_dc_neutrophils', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_dc_eosinophils'); ?>
        <?php echo $form->dropDownList($model,'hgm_dc_eosinophils', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_dc_basophills'); ?>
        <?php echo $form->checkBox($model,'hgm_dc_basophills', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_dc_lymphocytes'); ?>
        <?php echo $form->dropDownList($model,'hgm_dc_lymphocytes', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_dc_monocytes'); ?>
        <?php echo $form->dropDownList($model,'hgm_dc_monocytes', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_dc_aec'); ?>
        <?php echo $form->checkBox($model,'hgm_dc_aec', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_dc_retieulocyte'); ?>
        <?php echo $form->dropDownList($model,'hgm_dc_retieulocyte', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_dc_blast_cells'); ?>
        <?php echo $form->checkBox($model,'hgm_dc_blast_cells', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_dc_promyelocyte'); ?>
        <?php echo $form->dropDownList($model,'hgm_dc_promyelocyte', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_dc_myelocytes'); ?>
        <?php echo $form->checkBox($model,'hgm_dc_myelocytes', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_dc_metamyelocytes'); ?>
        <?php echo $form->checkBox($model,'hgm_dc_metamyelocytes', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_dc_stabforms'); ?>
        <?php echo $form->checkBox($model,'hgm_dc_stabforms', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgm_dc_rdw'); ?>
        <?php echo $form->dropDownList($model,'hgm_dc_rdw', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgn_sp_albumin'); ?>
        <?php echo $form->checkBox($model,'hgn_sp_albumin', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgn_sp_globulin'); ?>
        <?php echo $form->checkBox($model,'hgn_sp_globulin', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hgn_sp_ag_ratio'); ?>
        <?php echo $form->checkBox($model,'hgn_sp_ag_ratio', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ps_rbc'); ?>
        <?php echo $form->checkBox($model,'ps_rbc', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ps_wbc'); ?>
        <?php echo $form->checkBox($model,'ps_wbc', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ps_platelets'); ?>
        <?php echo $form->checkBox($model,'ps_platelets', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ps_impression'); ?>
        <?php echo $form->checkBox($model,'ps_impression', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'lab_urine_profile'); ?>
        <?php echo $form->checkBox($model,'lab_urine_profile', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'lab_bor'); ?>
        <?php echo $form->dropDownList($model,'lab_bor', Yii::app()->params['searchConfig_dd']); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'created_by'); ?>
        <?php echo $form->checkBox($model,'created_by', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'last_edited_by'); ?>
        <?php echo $form->checkBox($model,'last_edited_by', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'create_at'); ?>
        <?php echo $form->checkBox($model,'create_at', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'last_edited_at'); ?>
        <?php echo $form->checkBox($model,'last_edited_at', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>