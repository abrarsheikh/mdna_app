<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'mdna-child-mdl-form',
    'enableAjaxValidation' => false,
        ));
?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<div class="page-header">
    <h2><?php echo Yii::app()->params['ci']; ?></h2>
</div>
<div class="row-fluid">
    <div class="span6">

        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => Yii::app()->params['sm'],
        ));
        ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'taluk_code'); ?>

            <?php echo $form->textField($model, 'taluk_code', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'taluk_code'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'sr_no_wnc'); ?>

            <?php echo $form->textField($model, 'sr_no_wnc', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'sr_no_wnc'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'name'); ?>

            <?php echo $form->textField($model, 'name', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'name'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'phc_name'); ?>

            <?php echo $form->textField($model, 'phc_name', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'phc_name'); ?>

        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'dob'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'name' => 'bookdate', // the name of the field
                'model' => $model, // Model object
                'attribute' => 'dob', // Attribute name          
                'options' => array(
                    'showAnim' => 'fold',
                    'dateFormat' => 'yy-mm-dd', // optional date formatting
                    'debug' => true,
                ),
                'htmlOptions' => array(
                    'style' => 'height:20px;'
                ),
            ));
            ?>
            <?php echo $form->error($model, 'dob'); ?>
        </div>

        <div class="row">           
            <?php echo $form->labelEx($model, 'sex'); ?>             
            <?php echo $form->dropDownList($model, 'sex', Yii::app()->params['sex']); ?>
            <?php echo $form->error($model, 'sex'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'caste'); ?>
            <?php echo $form->dropDownList($model, 'caste', Yii::app()->params['caste']); ?>
            <?php echo $form->error($model, 'caste'); ?>
        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'street'); ?>

            <?php echo $form->textField($model, 'street', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'street'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'landmark'); ?>

            <?php echo $form->textField($model, 'landmark', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'landmark'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'sam_no'); ?>

            <?php echo $form->textField($model, 'sam_no', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'sam_no'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'district'); ?>

            <?php echo $form->textField($model, 'district', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'district'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'talluka'); ?>

            <?php echo $form->textField($model, 'talluka', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'talluka'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'name_of_anganwadi'); ?>

            <?php echo $form->textField($model, 'name_of_anganwadi', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'name_of_anganwadi'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'name_of_AWW'); ?>

            <?php echo $form->textField($model, 'name_of_AWW', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'name_of_AWW'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ph_no'); ?>

            <?php echo $form->textField($model, 'ph_no', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'ph_no'); ?>

        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'dor'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'name' => 'bookdate', // the name of the field
                'model' => $model, // Model object
                'attribute' => 'dor', // Attribute name          
                'options' => array(
                    'showAnim' => 'fold',
                    'dateFormat' => 'yy-mm-dd', // optional date formatting
                    'debug' => true,
                ),
                'htmlOptions' => array(
                    'style' => 'height:20px;'
                ),
            ));
            ?>
            <?php echo $form->error($model, 'dor'); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div>
    <div class="span6">

        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => Yii::app()->params['fi'],
        ));
        ?> 

        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_m_name'); ?>

            <?php echo $form->textField($model, 'fi_m_name', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'fi_m_name'); ?>

        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'fi_m_dob'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'name' => 'bookdate', // the name of the field
                'model' => $model, // Model object
                'attribute' => 'fi_m_dob', // Attribute name          
                'options' => array(
                    'showAnim' => 'fold',
                    'dateFormat' => 'yy-mm-dd', // optional date formatting
                    'debug' => true,
                ),
                'htmlOptions' => array(
                    'style' => 'height:20px;'
                ),
            ));
            ?>
            <?php echo $form->error($model, 'fi_m_dob'); ?>
        </div>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_m_education'); ?>

            <?php echo $form->textField($model, 'fi_m_education', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'fi_m_education'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_m_profession'); ?>

            <?php echo $form->textField($model, 'fi_m_profession', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'fi_m_profession'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_f_name'); ?>

            <?php echo $form->textField($model, 'fi_f_name', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'fi_f_name'); ?>

        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'fi_f_dob'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'name' => 'bookdate', // the name of the field
                'model' => $model, // Model object
                'attribute' => 'fi_f_dob', // Attribute name          
                'options' => array(
                    'showAnim' => 'fold',
                    'dateFormat' => 'yy-mm-dd', // optional date formatting
                    'debug' => true,
                ),
                'htmlOptions' => array(
                    'style' => 'height:20px;'
                ),
            ));
            ?>
            <?php echo $form->error($model, 'fi_f_dob'); ?>
        </div>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_f_education'); ?>

            <?php echo $form->textField($model, 'fi_f_education', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'fi_f_education'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_f_profession'); ?>

            <?php echo $form->textField($model, 'fi_f_profession', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'fi_f_profession'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_size'); ?>

            <?php echo $form->textField($model, 'fi_size'); ?>
            <?php echo $form->error($model, 'fi_size'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_daily_income'); ?>

            <?php echo $form->textField($model, 'fi_daily_income'); ?>
            <?php echo $form->error($model, 'fi_daily_income'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_no_sibling'); ?>

            <?php echo $form->textField($model, 'fi_no_sibling'); ?>
            <?php echo $form->error($model, 'fi_no_sibling'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_no_brother'); ?>

            <?php echo $form->textField($model, 'fi_no_brother'); ?>
            <?php echo $form->error($model, 'fi_no_brother'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_no_sister'); ?>

            <?php echo $form->textField($model, 'fi_no_sister'); ?>
            <?php echo $form->error($model, 'fi_no_sister'); ?>

        </div>


        <?php $this->endWidget(); ?>
    </div>
</div>


<div class="row-fluid">


    <div class="span6">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => Yii::app()->params['c'],
        ));
        ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'c_appetite'); ?>
            <?php echo $form->dropDownList($model, 'c_appetite', Yii::app()->params['c_appetite']); ?>
            <?php echo $form->error($model, 'c_appetite'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'c_dairrhoea'); ?>
            <?php echo $form->checkBox($model, 'c_dairrhoea', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'c_dairrhoea'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'c_vomiting'); ?>
            <?php echo $form->checkBox($model, 'c_vomiting', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'c_vomiting'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'c_urinary'); ?>
            <?php echo $form->checkBox($model, 'c_urinary', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'c_urinary'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'c_fever'); ?>
            <?php echo $form->checkBox($model, 'c_fever', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'c_fever'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'c_cough'); ?>
            <?php echo $form->checkBox($model, 'c_cough', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'c_cough'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'c_lethargy'); ?>
            <?php echo $form->checkBox($model, 'c_lethargy', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'c_lethargy'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'c_swelling'); ?>
            <?php echo $form->checkBox($model, 'c_swelling', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'c_swelling'); ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span6">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => Yii::app()->params['ih'],
        ));
        ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_opv'); ?>
            <?php echo $form->checkBox($model, 'ih_opv', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'ih_opv'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_hepb'); ?>
            <?php echo $form->checkBox($model, 'ih_hepb', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'ih_hepb'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_bcg'); ?>
            <?php echo $form->checkBox($model, 'ih_bcg', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'ih_bcg'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_opv123'); ?>
            <?php echo $form->checkBox($model, 'ih_opv123', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'ih_opv123'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_dpt123'); ?>
            <?php echo $form->checkBox($model, 'ih_dpt123', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'ih_dpt123'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_hepb123'); ?>
            <?php echo $form->checkBox($model, 'ih_hepb123', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'ih_hepb123'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_mis_vita'); ?>
            <?php echo $form->checkBox($model, 'ih_mis_vita', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'ih_mis_vita'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_dpt_opv'); ?>
            <?php echo $form->checkBox($model, 'ih_dpt_opv', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'ih_dpt_opv'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_mis_bost'); ?>
            <?php echo $form->checkBox($model, 'ih_mis_bost', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'ih_mis_bost'); ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>
    <div class="span6">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => Yii::app()->params['dh'],
        ));
        ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'dh_breast_feeds'); ?>
            <?php echo $form->checkBox($model, 'dh_breast_feeds', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'dh_breast_feeds'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'dh_other'); ?>
            <?php echo $form->checkBox($model, 'dh_other', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'dh_other'); ?>
        </div>

        <div class="row">           
            <?php echo $form->labelEx($model, 'dh_other_milk'); ?>

            <?php echo $form->textField($model, 'dh_other_milk', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'dh_other_milk'); ?>

        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'dh_bottle_feeding'); ?>
            <?php echo $form->checkBox($model, 'dh_bottle_feeding', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'dh_bottle_feeding'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'dh_comp_feeds'); ?>
            <?php echo $form->checkBox($model, 'dh_comp_feeds', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'dh_comp_feeds'); ?>
        </div>

        <div class="row">           
            <?php echo $form->labelEx($model, 'dh_age_of_comp'); ?>

            <?php echo $form->textField($model, 'dh_age_of_comp', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'dh_age_of_comp'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'dh_no_of_feeds'); ?>

            <?php echo $form->textField($model, 'dh_no_of_feeds', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'dh_no_of_feeds'); ?>

        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => Yii::app()->params['gpe'],
        ));
        ?>


        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_heart_rate'); ?>

            <?php echo $form->textField($model, 'gpe_heart_rate', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'gpe_heart_rate'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_respiratory_rate'); ?>

            <?php echo $form->textField($model, 'gpe_respiratory_rate', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'gpe_respiratory_rate'); ?>

        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'gpe_chest_indrawing'); ?>
            <?php echo $form->checkBox($model, 'gpe_chest_indrawing', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'gpe_chest_indrawing'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'gpe_visible_severe_wasting'); ?>
            <?php echo $form->checkBox($model, 'gpe_visible_severe_wasting', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'gpe_visible_severe_wasting'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'gpe_bl_pedal_edema'); ?>
            <?php echo $form->checkBox($model, 'gpe_bl_pedal_edema', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'gpe_bl_pedal_edema'); ?>
        </div>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_bl_grade'); ?>

            <?php echo $form->textField($model, 'gpe_bl_grade', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'gpe_bl_grade'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_alert_Irritable_lethargic'); ?>

            <?php echo $form->textField($model, 'gpe_alert_Irritable_lethargic', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'gpe_alert_Irritable_lethargic'); ?>

        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'gpe_hair_changes'); ?>
            <?php echo $form->checkBox($model, 'gpe_hair_changes', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'gpe_hair_changes'); ?>
        </div>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_desc_hair_change'); ?>

            <?php echo $form->textField($model, 'gpe_desc_hair_change', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'gpe_desc_hair_change'); ?>

        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'gpe_skin_changes'); ?>
            <?php echo $form->checkBox($model, 'gpe_skin_changes', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'gpe_skin_changes'); ?>
        </div>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_desc_skin_change'); ?>

            <?php echo $form->textField($model, 'gpe_desc_skin_change', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'gpe_desc_skin_change'); ?>

        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'gpe_eye_signs_vit_a_def'); ?>
            <?php echo $form->checkBox($model, 'gpe_eye_signs_vit_a_def', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'gpe_eye_signs_vit_a_def'); ?>
        </div>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_desc_vit_a_def'); ?>

            <?php echo $form->textField($model, 'gpe_desc_vit_a_def', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'gpe_desc_vit_a_def'); ?>

        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'gpe_ear_discharge'); ?>
            <?php echo $form->checkBox($model, 'gpe_ear_discharge', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'gpe_ear_discharge'); ?>
        </div>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_desc_ear_discharge'); ?>

            <?php echo $form->textField($model, 'gpe_desc_ear_discharge', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'gpe_desc_ear_discharge'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_mouth_glossitis'); ?>

            <?php echo $form->textField($model, 'gpe_mouth_glossitis', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'gpe_mouth_glossitis'); ?>

        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'gpe_pallor'); ?>
            <?php echo $form->checkBox($model, 'gpe_pallor', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
            <?php echo $form->error($model, 'gpe_pallor'); ?>
        </div>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_pallor_some_sever'); ?>

            <?php echo $form->textField($model, 'gpe_pallor_some_sever', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'gpe_pallor_some_sever'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_lymphadenopathy'); ?>

            <?php echo $form->textField($model, 'gpe_lymphadenopathy'); ?>
            <?php echo $form->error($model, 'gpe_lymphadenopathy'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_desc_ymphadenopathy'); ?>

            <?php echo $form->textField($model, 'gpe_desc_ymphadenopathy', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'gpe_desc_ymphadenopathy'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_if_diarrhoea'); ?>
            <?php echo $form->dropDownList($model, 'gpe_if_diarrhoea', Yii::app()->params['gpe_if_diarrhoea']); ?>
            <?php echo $form->error($model, 'gpe_if_diarrhoea'); ?>

        </div>
        <?php $this->endWidget(); ?>
    </div>
    <div class="span6">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => Yii::app()->params['se'],
        ));
        ?>


        <div class="row">           
            <?php echo $form->labelEx($model, 'se_respitary'); ?>

            <?php echo $form->textField($model, 'se_respitary', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'se_respitary'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'se_cardio_vascular'); ?>

            <?php echo $form->textField($model, 'se_cardio_vascular', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'se_cardio_vascular'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'se_abdominal'); ?>

            <?php echo $form->textField($model, 'se_abdominal', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'se_abdominal'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'se_central_nervous'); ?>

            <?php echo $form->textField($model, 'se_central_nervous', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'se_central_nervous'); ?>

        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => Yii::app()->params['ir'],
        ));
        ?>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ir_Hb'); ?>

            <?php echo $form->textField($model, 'ir_Hb', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'ir_Hb'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ir_leukocyte_count'); ?>

            <?php echo $form->textField($model, 'ir_leukocyte_count', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'ir_leukocyte_count'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ir_blood_glucose'); ?>

            <?php echo $form->textField($model, 'ir_blood_glucose', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'ir_blood_glucose'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ir_blood_culture'); ?>

            <?php echo $form->textField($model, 'ir_blood_culture', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'ir_blood_culture'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ir_urine_routine'); ?>

            <?php echo $form->textField($model, 'ir_urine_routine', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'ir_urine_routine'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ir_urine_cs'); ?>

            <?php echo $form->textField($model, 'ir_urine_cs', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'ir_urine_cs'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ir_chest_xray'); ?>

            <?php echo $form->textField($model, 'ir_chest_xray', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'ir_chest_xray'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ir_monthoux_test'); ?>

            <?php echo $form->textField($model, 'ir_monthoux_test', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'ir_monthoux_test'); ?>

        </div>
        <?php $this->endWidget(); ?>
    </div>
    <div class="span6">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => Yii::app()->params['ci'],
        ));
        ?>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ci_malnutritionutrition'); ?>

            <?php echo $form->textField($model, 'ci_malnutritionutrition', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'ci_malnutritionutrition'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ci_diagnosi'); ?>

            <?php echo $form->textField($model, 'ci_diagnosi', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'ci_diagnosi'); ?>

        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span6">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => Yii::app()->params['m'],
        ));
        ?>


        <div class="row">           
            <?php echo $form->labelEx($model, 'm_domiciliaty'); ?>

            <?php echo $form->textField($model, 'm_domiciliaty', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'm_domiciliaty'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'm_medical'); ?>

            <?php echo $form->textField($model, 'm_medical', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'm_medical'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'm_Nutritional'); ?>

            <?php echo $form->textField($model, 'm_Nutritional', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'm_Nutritional'); ?>

        </div>
        <?php $this->endWidget(); ?>
    </div>
    <div class="span6">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => Yii::app()->params['r'],
        ));
        ?>


        <div class="row">           
            <?php echo $form->labelEx($model, 'r_higher_facility'); ?>

            <?php echo $form->textField($model, 'r_higher_facility', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'r_higher_facility'); ?>

        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>
<div class="row-fluid">
    <?php
    $this->beginWidget('zii.widgets.CPortlet', array(
        'title' => Yii::app()->params['fu'],
    ));
    ?>


    <div class="row">           
        <?php echo $form->labelEx($model, 'fuw1'); ?>

        <?php echo $form->textField($model, 'fuw1', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'fuw1'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'fuw2'); ?>

        <?php echo $form->textField($model, 'fuw2', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'fuw2'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'fuw3'); ?>

        <?php echo $form->textField($model, 'fuw3', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'fuw3'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'fuw4'); ?>

        <?php echo $form->textField($model, 'fuw4', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'fuw4'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'fum2'); ?>

        <?php echo $form->textField($model, 'fum2', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'fum2'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'fum4'); ?>

        <?php echo $form->textField($model, 'fum4', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'fum4'); ?>

    </div>
    <?php $this->endWidget(); ?>
</div>

<div class="page-header">
    <h2><?php echo Yii::app()->params['ans']; ?></h2>
</div>

<div class="row-fluid">
    <div class="span6">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => Yii::app()->params['ep'],
        ));
        ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_cereals'); ?>

            <?php echo $form->textField($model, 'ep_cereals', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'ep_cereals'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_pulses'); ?>

            <?php echo $form->textField($model, 'ep_pulses', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'ep_pulses'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_oilseeds'); ?>

            <?php echo $form->textField($model, 'ep_oilseeds', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'ep_oilseeds'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_milk_products'); ?>

            <?php echo $form->textField($model, 'ep_milk_products', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'ep_milk_products'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_fruits'); ?>

            <?php echo $form->textField($model, 'ep_fruits', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'ep_fruits'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_coloured_vegetable'); ?>

            <?php echo $form->textField($model, 'ep_coloured_vegetable', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'ep_coloured_vegetable'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_other_vegetables'); ?>

            <?php echo $form->textField($model, 'ep_other_vegetables', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'ep_other_vegetables'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_oils_fat'); ?>

            <?php echo $form->textField($model, 'ep_oils_fat', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'ep_oils_fat'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_egg'); ?>

            <?php echo $form->textField($model, 'ep_egg', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'ep_egg'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_fleshy_foods'); ?>

            <?php echo $form->textField($model, 'ep_fleshy_foods', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'ep_fleshy_foods'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_sugar'); ?>

            <?php echo $form->textField($model, 'ep_sugar', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'ep_sugar'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_others'); ?>

            <?php echo $form->textField($model, 'ep_others', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'ep_others'); ?>

        </div>
        <?php $this->endWidget(); ?>
    </div>
    <div class="span6">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => Yii::app()->params['dhc'],
        ));
        ?>


        <div class="row">           
            <?php echo $form->labelEx($model, 'dh_like'); ?>

            <?php echo $form->textField($model, 'dh_like', array('size' => 60, 'maxlength' => 500)); ?>
            <?php echo $form->error($model, 'dh_like'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'dh_dislike'); ?>

            <?php echo $form->textField($model, 'dh_dislike', array('size' => 60, 'maxlength' => 500)); ?>
            <?php echo $form->error($model, 'dh_dislike'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'bf_put_to_breast'); ?>
            <?php
            echo $form->dropDownList($model, 'bf_put_to_breast', Yii::app()->params['bf_put_to_breast']);
            ?>
            <?php echo $form->error($model, 'bf_put_to_breast'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'bf_Breast_fed_up_to'); ?>

            <?php echo $form->textField($model, 'bf_Breast_fed_up_to', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'bf_Breast_fed_up_to'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'bf_introduction_of_food_at'); ?>

            <?php echo $form->textField($model, 'bf_introduction_of_food_at', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'bf_introduction_of_food_at'); ?>

        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span6">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => Yii::app()->params['mp'],
        ));
        ?>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_m_menu'); ?>

            <?php echo $form->textField($model, 'mp_m_menu', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'mp_m_menu'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_m_ingredients'); ?>

            <?php echo $form->textField($model, 'mp_m_ingredients', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'mp_m_ingredients'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_m_quantity'); ?>

            <?php echo $form->textField($model, 'mp_m_quantity', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'mp_m_quantity'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_m_time'); ?>

            <?php echo $form->textField($model, 'mp_m_time', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'mp_m_time'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_bf_menu'); ?>

            <?php echo $form->textField($model, 'mp_bf_menu', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'mp_bf_menu'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_bf_ingredients'); ?>

            <?php echo $form->textField($model, 'mp_bf_ingredients', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'mp_bf_ingredients'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_bf_quantity'); ?>

            <?php echo $form->textField($model, 'mp_bf_quantity', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'mp_bf_quantity'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_bf_time'); ?>

            <?php echo $form->textField($model, 'mp_bf_time', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'mp_bf_time'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_l_menu'); ?>

            <?php echo $form->textField($model, 'mp_l_menu', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'mp_l_menu'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_l_ingredients'); ?>

            <?php echo $form->textField($model, 'mp_l_ingredients', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'mp_l_ingredients'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_l_quantity'); ?>

            <?php echo $form->textField($model, 'mp_l_quantity', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'mp_l_quantity'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_l_time'); ?>

            <?php echo $form->textField($model, 'mp_l_time', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'mp_l_time'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_s_menu'); ?>

            <?php echo $form->textField($model, 'mp_s_menu', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'mp_s_menu'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_s_ingredients'); ?>

            <?php echo $form->textField($model, 'mp_s_ingredients', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'mp_s_ingredients'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_s_quantity'); ?>

            <?php echo $form->textField($model, 'mp_s_quantity', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'mp_s_quantity'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_s_time'); ?>

            <?php echo $form->textField($model, 'mp_s_time', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'mp_s_time'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_d_menu'); ?>

            <?php echo $form->textField($model, 'mp_d_menu', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'mp_d_menu'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_d_ingredients'); ?>

            <?php echo $form->textField($model, 'mp_d_ingredients', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'mp_d_ingredients'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_d_quantity'); ?>

            <?php echo $form->textField($model, 'mp_d_quantity', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'mp_d_quantity'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_d_time'); ?>

            <?php echo $form->textField($model, 'mp_d_time', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'mp_d_time'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_o_menu'); ?>

            <?php echo $form->textField($model, 'mp_o_menu', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'mp_o_menu'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_o_ingredients'); ?>

            <?php echo $form->textField($model, 'mp_o_ingredients', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'mp_o_ingredients'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_o_quantity'); ?>

            <?php echo $form->textField($model, 'mp_o_quantity', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'mp_o_quantity'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_o_time'); ?>

            <?php echo $form->textField($model, 'mp_o_time', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'mp_o_time'); ?>

        </div>
        <?php $this->endWidget(); ?>
    </div>
    <div class="span6">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => Yii::app()->params['cre'],
        ));
        ?>
        <div class="row">           
            <?php echo $form->labelEx($model, 'cre_biscuits'); ?>

            <?php echo $form->textField($model, 'cre_biscuits', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'cre_biscuits'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'cre_khara_mixture'); ?>

            <?php echo $form->textField($model, 'cre_khara_mixture', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'cre_khara_mixture'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'cre_bread'); ?>

            <?php echo $form->textField($model, 'cre_bread', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'cre_bread'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'cre_chocolates'); ?>

            <?php echo $form->textField($model, 'cre_chocolates', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'cre_chocolates'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'cre_chips'); ?>

            <?php echo $form->textField($model, 'cre_chips', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'cre_chips'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'cre_soft_drinks'); ?>

            <?php echo $form->textField($model, 'cre_soft_drinks', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'cre_soft_drinks'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'cre_other'); ?>

            <?php echo $form->textField($model, 'cre_other', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'cre_other'); ?>

        </div>
        <?php $this->endWidget(); ?>
    </div>

</div>
<div class="row-fluid">
    <div class="span6">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => Yii::app()->params['ns'],
        ));
        ?>


        <div class="row">           
            <?php echo $form->labelEx($model, 'sq_aitamin_a'); ?>

            <?php echo $form->textField($model, 'sq_aitamin_a', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'sq_aitamin_a'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'sq_iron_n_folic_acid'); ?>

            <?php echo $form->textField($model, 'sq_iron_n_folic_acid', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'sq_iron_n_folic_acid'); ?>

        </div>


        <div class="row">           
            <?php echo $form->labelEx($model, 'sq_b_complex'); ?>

            <?php echo $form->textField($model, 'sq_b_complex', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'sq_b_complex'); ?>

        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>

<div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>


<?php $this->endWidget(); ?>