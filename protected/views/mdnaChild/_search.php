<?php
/* @var $this MdnaChildController */
/* @var $model MdnaChildMdl */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <?php if ($searchConfig->id != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'id'); ?>

            <?php echo $form->textField($model, 'id', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->taluk_code != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'taluk_code'); ?>

            <?php echo $form->textField($model, 'taluk_code', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->sr_no_wnc != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'sr_no_wnc'); ?>

            <?php echo $form->textField($model, 'sr_no_wnc', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->name != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'name'); ?>

            <?php echo $form->textField($model, 'name', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->phc_name != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'phc_name'); ?>

            <?php echo $form->textField($model, 'phc_name', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <div class="row">
        <?php if ($searchConfig->dob != 'N' && $searchConfig->dob == 'Y') { ?>
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
            <?php
        } else if ($searchConfig->dob != 'N' && $searchConfig->dob == 'R') {
            echo $form->labelEx($model, 'dob');
            $attribute = 'dob';
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'id' => CHtml::activeId($model, $attribute . '_' . $i),
                    'model' => $model,
                    'attribute' => $attribute . "[$i]",
                    'options' => array(
                        'showAnim' => 'fold',
                        'dateFormat' => 'yy-mm-dd', // optional date formatting
                        'debug' => true,
                    ),
                ));
            }
        }
        ?> 
    </div>

    <div class="row">   
        <?php if ($searchConfig->age != 'N' && $searchConfig->age == 'Y') { ?>
            <?php echo $form->labelEx($model, 'age'); ?>
            <?php echo $form->textField($model, 'age'); ?>            
            <?php
        } else if ($searchConfig->age != 'N' && $searchConfig->age == 'R') {
            $attribute = 'age';
            echo $form->labelEx($model, 'age');
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        ?> 
    </div>
    <?php if ($searchConfig->sex != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'sex'); ?>     

            <?php echo $form->dropDownList($model, 'sex', Yii::app()->params['sex']); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->caste != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'caste'); ?>

            <?php echo $form->dropDownList($model, 'caste', Yii::app()->params['caste']); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->street != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'street'); ?>

            <?php echo $form->textField($model, 'street', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->landmark != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'landmark'); ?>

            <?php echo $form->textField($model, 'landmark', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->sam_no != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'sam_no'); ?>

            <?php echo $form->textField($model, 'sam_no', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->district != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'district'); ?>

            <?php echo $form->textField($model, 'district', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->talluka != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'talluka'); ?>

            <?php echo $form->textField($model, 'talluka', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->name_of_anganwadi != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'name_of_anganwadi'); ?>

            <?php echo $form->textField($model, 'name_of_anganwadi', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->name_of_AWW != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'name_of_AWW'); ?>

            <?php echo $form->textField($model, 'name_of_AWW', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ph_no != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ph_no'); ?>

            <?php echo $form->textField($model, 'ph_no', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->dor != 'N') { ?>
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
        </div>
    <?php } ?> 

    <?php if ($searchConfig->fi_m_name != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_m_name'); ?>

            <?php echo $form->textField($model, 'fi_m_name', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->fi_m_dob != 'N') { ?>
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
        </div>
    <?php } ?> 

    <?php if ($searchConfig->fi_m_education != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_m_education'); ?>

            <?php echo $form->textField($model, 'fi_m_education', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->fi_m_profession != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_m_profession'); ?>

            <?php echo $form->textField($model, 'fi_m_profession', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->fi_f_name != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_f_name'); ?>

            <?php echo $form->textField($model, 'fi_f_name', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->fi_f_dob != 'N') { ?>
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
        </div>
    <?php } ?> 

    <?php if ($searchConfig->fi_f_education != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_f_education'); ?>

            <?php echo $form->textField($model, 'fi_f_education', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->fi_f_profession != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_f_profession'); ?>

            <?php echo $form->textField($model, 'fi_f_profession', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->fi_size != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_size'); ?>

            <?php echo $form->textField($model, 'fi_size'); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->fi_daily_income != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_daily_income'); ?>

            <?php echo $form->textField($model, 'fi_daily_income'); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->fi_no_sibling != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_no_sibling'); ?>

            <?php echo $form->textField($model, 'fi_no_sibling'); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->fi_no_brother != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_no_brother'); ?>

            <?php echo $form->textField($model, 'fi_no_brother'); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->fi_no_sister != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fi_no_sister'); ?>

            <?php echo $form->textField($model, 'fi_no_sister'); ?>

        </div>

    <?php } ?> 
    
    <div class="row">   
        <?php
        $attribute = 'weight';
        $sc_var = $searchConfig->weight;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>
    
    <div class="row">   
        <?php
        $attribute = 'height';
        $sc_var = $searchConfig->height;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>
    
    <div class="row">   
        <?php
        $attribute = 'muac';
        $sc_var = $searchConfig->muac;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <?php if ($searchConfig->c_appetite != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'c_appetite'); ?>
            <?php echo $form->dropDownList($model, 'c_appetite', Yii::app()->params['c_appetite']); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->c_dairrhoea != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'c_dairrhoea'); ?>
            <?php echo $form->checkBox($model, 'c_dairrhoea', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->c_vomiting != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'c_vomiting'); ?>
            <?php echo $form->checkBox($model, 'c_vomiting', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->c_urinary != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'c_urinary'); ?>
            <?php echo $form->checkBox($model, 'c_urinary', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->c_fever != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'c_fever'); ?>
            <?php echo $form->checkBox($model, 'c_fever', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->c_cough != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'c_cough'); ?>
            <?php echo $form->checkBox($model, 'c_cough', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->c_lethargy != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'c_lethargy'); ?>
            <?php echo $form->checkBox($model, 'c_lethargy', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->c_swelling != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'c_swelling'); ?>
            <?php echo $form->checkBox($model, 'c_swelling', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->ih_opv != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_opv'); ?>
            <?php echo $form->checkBox($model, 'ih_opv', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->ih_hepb != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_hepb'); ?>
            <?php echo $form->checkBox($model, 'ih_hepb', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->ih_bcg != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_bcg'); ?>
            <?php echo $form->checkBox($model, 'ih_bcg', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->ih_opv123 != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_opv123'); ?>
            <?php echo $form->checkBox($model, 'ih_opv123', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->ih_dpt123 != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_dpt123'); ?>
            <?php echo $form->checkBox($model, 'ih_dpt123', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->ih_hepb123 != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_hepb123'); ?>
            <?php echo $form->checkBox($model, 'ih_hepb123', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->ih_mis_vita != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_mis_vita'); ?>
            <?php echo $form->checkBox($model, 'ih_mis_vita', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->ih_dpt_opv != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_dpt_opv'); ?>
            <?php echo $form->checkBox($model, 'ih_dpt_opv', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->ih_mis_bost != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'ih_mis_bost'); ?>
            <?php echo $form->checkBox($model, 'ih_mis_bost', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->dh_breast_feeds != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'dh_breast_feeds'); ?>
            <?php echo $form->checkBox($model, 'dh_breast_feeds', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->dh_other != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'dh_other'); ?>
            <?php echo $form->checkBox($model, 'dh_other', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->dh_other_milk != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'dh_other_milk'); ?>

            <?php echo $form->textField($model, 'dh_other_milk', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->dh_bottle_feeding != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'dh_bottle_feeding'); ?>
            <?php echo $form->checkBox($model, 'dh_bottle_feeding', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->dh_comp_feeds != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'dh_comp_feeds'); ?>
            <?php echo $form->checkBox($model, 'dh_comp_feeds', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->dh_age_of_comp != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'dh_age_of_comp'); ?>

            <?php echo $form->textField($model, 'dh_age_of_comp', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->dh_no_of_feeds != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'dh_no_of_feeds'); ?>

            <?php echo $form->textField($model, 'dh_no_of_feeds', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->gpe_heart_rate != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_heart_rate'); ?>

            <?php echo $form->textField($model, 'gpe_heart_rate', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->gpe_respiratory_rate != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_respiratory_rate'); ?>

            <?php echo $form->textField($model, 'gpe_respiratory_rate', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->gpe_chest_indrawing != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'gpe_chest_indrawing'); ?>
            <?php echo $form->checkBox($model, 'gpe_chest_indrawing', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->gpe_visible_severe_wasting != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'gpe_visible_severe_wasting'); ?>
            <?php echo $form->checkBox($model, 'gpe_visible_severe_wasting', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->gpe_bl_pedal_edema != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'gpe_bl_pedal_edema'); ?>
            <?php echo $form->checkBox($model, 'gpe_bl_pedal_edema', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->gpe_bl_grade != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_bl_grade'); ?>

            <?php echo $form->textField($model, 'gpe_bl_grade', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->gpe_alert_Irritable_lethargic != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_alert_Irritable_lethargic'); ?>

            <?php echo $form->textField($model, 'gpe_alert_Irritable_lethargic', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->gpe_hair_changes != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'gpe_hair_changes'); ?>
            <?php echo $form->checkBox($model, 'gpe_hair_changes', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->gpe_desc_hair_change != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_desc_hair_change'); ?>

            <?php echo $form->textField($model, 'gpe_desc_hair_change', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->gpe_skin_changes != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'gpe_skin_changes'); ?>
            <?php echo $form->checkBox($model, 'gpe_skin_changes', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->gpe_desc_skin_change != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_desc_skin_change'); ?>

            <?php echo $form->textField($model, 'gpe_desc_skin_change', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->gpe_eye_signs_vit_a_def != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'gpe_eye_signs_vit_a_def'); ?>
            <?php echo $form->checkBox($model, 'gpe_eye_signs_vit_a_def', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->gpe_desc_vit_a_def != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_desc_vit_a_def'); ?>

            <?php echo $form->textField($model, 'gpe_desc_vit_a_def', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->gpe_ear_discharge != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'gpe_ear_discharge'); ?>
            <?php echo $form->checkBox($model, 'gpe_ear_discharge', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->gpe_desc_ear_discharge != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_desc_ear_discharge'); ?>

            <?php echo $form->textField($model, 'gpe_desc_ear_discharge', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->gpe_mouth_glossitis != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_mouth_glossitis'); ?>

            <?php echo $form->textField($model, 'gpe_mouth_glossitis', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->gpe_pallor != 'N') { ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'gpe_pallor'); ?>
            <?php echo $form->checkBox($model, 'gpe_pallor', array('value' => 'Y', 'uncheckValue' => 'N')); ?>
        </div>
    <?php } ?> 

    <?php if ($searchConfig->gpe_pallor_some_sever != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_pallor_some_sever'); ?>

            <?php echo $form->textField($model, 'gpe_pallor_some_sever', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->gpe_lymphadenopathy != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_lymphadenopathy'); ?>

            <?php echo $form->textField($model, 'gpe_lymphadenopathy'); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->gpe_desc_ymphadenopathy != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_desc_ymphadenopathy'); ?>

            <?php echo $form->textField($model, 'gpe_desc_ymphadenopathy', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->gpe_if_diarrhoea != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'gpe_if_diarrhoea'); ?>

            <?php echo $form->dropDownList($model, 'gpe_if_diarrhoea', Yii::app()->params['gpe_if_diarrhoea']); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->se_respitary != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'se_respitary'); ?>

            <?php echo $form->textField($model, 'se_respitary', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->se_cardio_vascular != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'se_cardio_vascular'); ?>

            <?php echo $form->textField($model, 'se_cardio_vascular', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->se_abdominal != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'se_abdominal'); ?>

            <?php echo $form->textField($model, 'se_abdominal', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->se_central_nervous != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'se_central_nervous'); ?>

            <?php echo $form->textField($model, 'se_central_nervous', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ir_Hb != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ir_Hb'); ?>

            <?php echo $form->textField($model, 'ir_Hb', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ir_leukocyte_count != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ir_leukocyte_count'); ?>

            <?php echo $form->textField($model, 'ir_leukocyte_count', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ir_blood_glucose != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ir_blood_glucose'); ?>

            <?php echo $form->textField($model, 'ir_blood_glucose', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ir_blood_culture != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ir_blood_culture'); ?>

            <?php echo $form->textField($model, 'ir_blood_culture', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ir_urine_routine != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ir_urine_routine'); ?>

            <?php echo $form->textField($model, 'ir_urine_routine', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ir_urine_cs != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ir_urine_cs'); ?>

            <?php echo $form->textField($model, 'ir_urine_cs', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ir_chest_xray != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ir_chest_xray'); ?>

            <?php echo $form->textField($model, 'ir_chest_xray', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ir_monthoux_test != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ir_monthoux_test'); ?>

            <?php echo $form->textField($model, 'ir_monthoux_test', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ci_malnutritionutrition != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ci_malnutritionutrition'); ?>

            <?php echo $form->textField($model, 'ci_malnutritionutrition', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ci_diagnosi != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ci_diagnosi'); ?>

            <?php echo $form->textField($model, 'ci_diagnosi', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->m_domiciliaty != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'm_domiciliaty'); ?>

            <?php echo $form->textField($model, 'm_domiciliaty', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->m_medical != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'm_medical'); ?>

            <?php echo $form->textField($model, 'm_medical', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->m_Nutritional != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'm_Nutritional'); ?>

            <?php echo $form->textField($model, 'm_Nutritional', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->r_higher_facility != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'r_higher_facility'); ?>

            <?php echo $form->textField($model, 'r_higher_facility', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->fuw1 != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fuw1'); ?>

            <?php echo $form->textField($model, 'fuw1', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->fuw2 != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fuw2'); ?>

            <?php echo $form->textField($model, 'fuw2', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->fuw3 != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fuw3'); ?>

            <?php echo $form->textField($model, 'fuw3', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->fuw4 != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fuw4'); ?>

            <?php echo $form->textField($model, 'fuw4', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->fum2 != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fum2'); ?>

            <?php echo $form->textField($model, 'fum2', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->fum4 != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'fum4'); ?>

            <?php echo $form->textField($model, 'fum4', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ep_cereals != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_cereals'); ?>

            <?php echo $form->textField($model, 'ep_cereals', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ep_pulses != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_pulses'); ?>

            <?php echo $form->textField($model, 'ep_pulses', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ep_oilseeds != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_oilseeds'); ?>

            <?php echo $form->textField($model, 'ep_oilseeds', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ep_milk_products != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_milk_products'); ?>

            <?php echo $form->textField($model, 'ep_milk_products', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ep_fruits != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_fruits'); ?>

            <?php echo $form->textField($model, 'ep_fruits', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ep_coloured_vegetable != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_coloured_vegetable'); ?>

            <?php echo $form->textField($model, 'ep_coloured_vegetable', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ep_other_vegetables != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_other_vegetables'); ?>

            <?php echo $form->textField($model, 'ep_other_vegetables', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ep_oils_fat != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_oils_fat'); ?>

            <?php echo $form->textField($model, 'ep_oils_fat', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ep_egg != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_egg'); ?>

            <?php echo $form->textField($model, 'ep_egg', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ep_fleshy_foods != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_fleshy_foods'); ?>

            <?php echo $form->textField($model, 'ep_fleshy_foods', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ep_sugar != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_sugar'); ?>

            <?php echo $form->textField($model, 'ep_sugar', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ep_others != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ep_others'); ?>

            <?php echo $form->textField($model, 'ep_others', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->dh_like != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'dh_like'); ?>

            <?php echo $form->textField($model, 'dh_like', array('size' => 60, 'maxlength' => 500)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->dh_dislike != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'dh_dislike'); ?>

            <?php echo $form->textField($model, 'dh_dislike', array('size' => 60, 'maxlength' => 500)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->bf_put_to_breast != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'bf_put_to_breast'); ?>

            <?php
            echo $form->dropDownList($model, 'bf_put_to_breast', Yii::app()->params['bf_put_to_breast']);
            ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->bf_Breast_fed_up_to != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'bf_Breast_fed_up_to'); ?>

            <?php echo $form->textField($model, 'bf_Breast_fed_up_to', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->bf_introduction_of_food_at != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'bf_introduction_of_food_at'); ?>

            <?php echo $form->textField($model, 'bf_introduction_of_food_at', array('size' => 20, 'maxlength' => 20)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_m_menu != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_m_menu'); ?>

            <?php echo $form->textField($model, 'mp_m_menu', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_m_ingredients != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_m_ingredients'); ?>

            <?php echo $form->textField($model, 'mp_m_ingredients', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_m_quantity != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_m_quantity'); ?>

            <?php echo $form->textField($model, 'mp_m_quantity', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_m_time != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_m_time'); ?>

            <?php echo $form->textField($model, 'mp_m_time', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_bf_menu != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_bf_menu'); ?>

            <?php echo $form->textField($model, 'mp_bf_menu', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_bf_ingredients != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_bf_ingredients'); ?>

            <?php echo $form->textField($model, 'mp_bf_ingredients', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_bf_quantity != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_bf_quantity'); ?>

            <?php echo $form->textField($model, 'mp_bf_quantity', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_bf_time != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_bf_time'); ?>

            <?php echo $form->textField($model, 'mp_bf_time', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_l_menu != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_l_menu'); ?>

            <?php echo $form->textField($model, 'mp_l_menu', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_l_ingredients != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_l_ingredients'); ?>

            <?php echo $form->textField($model, 'mp_l_ingredients', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_l_quantity != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_l_quantity'); ?>

            <?php echo $form->textField($model, 'mp_l_quantity', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_l_time != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_l_time'); ?>

            <?php echo $form->textField($model, 'mp_l_time', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_s_menu != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_s_menu'); ?>

            <?php echo $form->textField($model, 'mp_s_menu', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_s_ingredients != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_s_ingredients'); ?>

            <?php echo $form->textField($model, 'mp_s_ingredients', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_s_quantity != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_s_quantity'); ?>

            <?php echo $form->textField($model, 'mp_s_quantity', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_s_time != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_s_time'); ?>

            <?php echo $form->textField($model, 'mp_s_time', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_d_menu != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_d_menu'); ?>

            <?php echo $form->textField($model, 'mp_d_menu', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_d_ingredients != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_d_ingredients'); ?>

            <?php echo $form->textField($model, 'mp_d_ingredients', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_d_quantity != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_d_quantity'); ?>

            <?php echo $form->textField($model, 'mp_d_quantity', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_d_time != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_d_time'); ?>

            <?php echo $form->textField($model, 'mp_d_time', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_o_menu != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_o_menu'); ?>

            <?php echo $form->textField($model, 'mp_o_menu', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_o_ingredients != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_o_ingredients'); ?>

            <?php echo $form->textField($model, 'mp_o_ingredients', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_o_quantity != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_o_quantity'); ?>

            <?php echo $form->textField($model, 'mp_o_quantity', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->mp_o_time != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'mp_o_time'); ?>

            <?php echo $form->textField($model, 'mp_o_time', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->cre_biscuits != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'cre_biscuits'); ?>

            <?php echo $form->textField($model, 'cre_biscuits', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->cre_khara_mixture != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'cre_khara_mixture'); ?>

            <?php echo $form->textField($model, 'cre_khara_mixture', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->cre_bread != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'cre_bread'); ?>

            <?php echo $form->textField($model, 'cre_bread', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->cre_chocolates != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'cre_chocolates'); ?>

            <?php echo $form->textField($model, 'cre_chocolates', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->cre_chips != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'cre_chips'); ?>

            <?php echo $form->textField($model, 'cre_chips', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->cre_soft_drinks != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'cre_soft_drinks'); ?>

            <?php echo $form->textField($model, 'cre_soft_drinks', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->cre_other != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'cre_other'); ?>

            <?php echo $form->textField($model, 'cre_other', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->sq_aitamin_a != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'sq_aitamin_a'); ?>

            <?php echo $form->textField($model, 'sq_aitamin_a', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->sq_iron_n_folic_acid != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'sq_iron_n_folic_acid'); ?>

            <?php echo $form->textField($model, 'sq_iron_n_folic_acid', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->sq_b_complex != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'sq_b_complex'); ?>

            <?php echo $form->textField($model, 'sq_b_complex', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?>     

    <?php if ($searchConfig->created_by != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'created_by'); ?>

            <?php echo $form->textField($model, 'created_by', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <div class="row">   
        <?php
        $attribute = 'hgm_hb';
        $sc_var = $searchConfig->hgm_hb;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_mcv';
        $sc_var = $searchConfig->hgm_mcv;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_rbc';
        $sc_var = $searchConfig->hgm_rbc;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_mch';
        $sc_var = $searchConfig->hgm_mch;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_pcv';
        $sc_var = $searchConfig->hgm_pcv;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_mchc';
        $sc_var = $searchConfig->hgm_mchc;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_esr_mm';
        $sc_var = $searchConfig->hgm_esr_mm;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_bleeding_time';
        $sc_var = $searchConfig->hgm_bleeding_time;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_clotting_time';
        $sc_var = $searchConfig->hgm_clotting_time;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_platelet_count';
        $sc_var = $searchConfig->hgm_platelet_count;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_dc_wbc';
        $sc_var = $searchConfig->hgm_dc_wbc;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_dc_neutrophils';
        $sc_var = $searchConfig->hgm_dc_neutrophils;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_dc_eosinophils';
        $sc_var = $searchConfig->hgm_dc_eosinophils;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_dc_basophills';
        $sc_var = $searchConfig->hgm_dc_basophills;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_dc_lymphocytes';
        $sc_var = $searchConfig->hgm_dc_lymphocytes;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_dc_monocytes';
        $sc_var = $searchConfig->hgm_dc_monocytes;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_dc_aec';
        $sc_var = $searchConfig->hgm_dc_aec;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_dc_retieulocyte';
        $sc_var = $searchConfig->hgm_dc_retieulocyte;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_dc_blast_cells';
        $sc_var = $searchConfig->hgm_dc_blast_cells;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_dc_promyelocyte';
        $sc_var = $searchConfig->hgm_dc_promyelocyte;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_dc_myelocytes';
        $sc_var = $searchConfig->hgm_dc_myelocytes;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_dc_metamyelocytes';
        $sc_var = $searchConfig->hgm_dc_metamyelocytes;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_dc_stabforms';
        $sc_var = $searchConfig->hgm_dc_stabforms;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <div class="row">   
        <?php
        $attribute = 'hgm_dc_rdw';
        $sc_var = $searchConfig->hgm_dc_rdw;
        if ($sc_var != 'N' && $sc_var == 'Y') {
            ?>
            <?php echo $form->labelEx($model, $attribute); ?>
            <?php echo $form->textField($model, $attribute); ?>            
            <?php
        } else if ($sc_var != 'N' && $sc_var == 'R') {
            echo $form->labelEx($model, $attribute);
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                echo $form->textField($model, $attribute . "[$i]");
            }
        }
        unset($attribute);
        unset($sc_var);
        ?> 
    </div>

    <?php if ($searchConfig->hgn_sp_albumin != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'hgn_sp_albumin'); ?>

            <?php echo $form->textField($model, 'hgn_sp_albumin', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->hgn_sp_globulin != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'hgn_sp_globulin'); ?>

            <?php echo $form->textField($model, 'hgn_sp_globulin', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->hgn_sp_ag_ratio != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'hgn_sp_ag_ratio'); ?>

            <?php echo $form->textField($model, 'hgn_sp_ag_ratio', array('size' => 10, 'maxlength' => 10)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ps_rbc != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ps_rbc'); ?>

            <?php echo $form->textField($model, 'ps_rbc', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ps_wbc != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ps_wbc'); ?>

            <?php echo $form->textField($model, 'ps_wbc', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ps_platelets != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ps_platelets'); ?>

            <?php echo $form->textField($model, 'ps_platelets', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->ps_impression != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'ps_impression'); ?>

            <?php echo $form->textField($model, 'ps_impression', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->lab_urine_profile != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'lab_urine_profile'); ?>

            <?php echo $form->textField($model, 'lab_urine_profile', array('size' => 60, 'maxlength' => 100)); ?>

        </div>

    <?php } ?> 

    <div class="row">
        <?php if ($searchConfig->lab_bor != 'N' && $searchConfig->lab_bor == 'Y') { ?>
            <?php echo $form->labelEx($model, 'lab_bor'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'name' => 'bookdate', // the name of the field
                'model' => $model, // Model object
                'attribute' => 'lab_bor', // Attribute name          
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
            <?php
        } else if ($searchConfig->lab_bor != 'N' && $searchConfig->lab_bor == 'R') {
            echo $form->labelEx($model, 'lab_bor');
            $attribute = 'lab_bor';
            for ($i = 0; $i <= 1; $i++) {
                echo ($i == 0 ? Yii::t('main', 'From:') : Yii::t('main', 'To:'));
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'id' => CHtml::activeId($model, $attribute . '_' . $i),
                    'model' => $model,
                    'attribute' => $attribute . "[$i]",
                    'options' => array(
                        'showAnim' => 'fold',
                        'dateFormat' => 'yy-mm-dd', // optional date formatting
                        'debug' => true,
                    ),
                ));
            }
        }
        ?> 
    </div>


    <?php if ($searchConfig->last_edited_by != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'last_edited_by'); ?>

            <?php echo $form->textField($model, 'last_edited_by', array('size' => 50, 'maxlength' => 50)); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->create_at != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'create_at'); ?>

            <?php echo $form->textField($model, 'create_at'); ?>

        </div>

    <?php } ?> 

    <?php if ($searchConfig->last_edited_at != 'N') { ?>

        <div class="row">           
            <?php echo $form->labelEx($model, 'last_edited_at'); ?>

            <?php echo $form->textField($model, 'last_edited_at'); ?>

        </div>

    <?php } ?> 

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->