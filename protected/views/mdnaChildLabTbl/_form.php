<?php
/* @var $this MdnaChildLabTblController */
/* @var $model MdnaChildLabTbl */
/* @var $form CActiveForm */
?>

<div class="wide form" >

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'mdna-child-lab-tbl-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <?php echo $form->errorSummary($model); ?>


    <div class="row">           

        <?php echo $form->hiddenField($model, 'id_a'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_hb'); ?>

        <?php echo $form->textField($model, 'hgm_hb'); ?>
        <?php echo $form->error($model, 'hgm_hb'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_mcv'); ?>

        <?php echo $form->textField($model, 'hgm_mcv'); ?>
        <?php echo $form->error($model, 'hgm_mcv'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_rbc'); ?>

        <?php echo $form->textField($model, 'hgm_rbc'); ?>
        <?php echo $form->error($model, 'hgm_rbc'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_mch'); ?>

        <?php echo $form->textField($model, 'hgm_mch'); ?>
        <?php echo $form->error($model, 'hgm_mch'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_pcv'); ?>

        <?php echo $form->textField($model, 'hgm_pcv'); ?>
        <?php echo $form->error($model, 'hgm_pcv'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_mchc'); ?>

        <?php echo $form->textField($model, 'hgm_mchc'); ?>
        <?php echo $form->error($model, 'hgm_mchc'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_esr_mm'); ?>

        <?php echo $form->textField($model, 'hgm_esr_mm'); ?>
        <?php echo $form->error($model, 'hgm_esr_mm'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_bleeding_time'); ?>

        <?php echo $form->textField($model, 'hgm_bleeding_time', array('size' => 10, 'maxlength' => 10)); ?>
        <?php echo $form->error($model, 'hgm_bleeding_time'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_clotting_time'); ?>

        <?php echo $form->textField($model, 'hgm_clotting_time', array('size' => 10, 'maxlength' => 10)); ?>
        <?php echo $form->error($model, 'hgm_clotting_time'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_platelet_count'); ?>

        <?php echo $form->textField($model, 'hgm_platelet_count'); ?>
        <?php echo $form->error($model, 'hgm_platelet_count'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_dc_wbc'); ?>

        <?php echo $form->textField($model, 'hgm_dc_wbc'); ?>
        <?php echo $form->error($model, 'hgm_dc_wbc'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_dc_neutrophils'); ?>

        <?php echo $form->textField($model, 'hgm_dc_neutrophils'); ?>
        <?php echo $form->error($model, 'hgm_dc_neutrophils'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_dc_eosinophils'); ?>

        <?php echo $form->textField($model, 'hgm_dc_eosinophils'); ?>
        <?php echo $form->error($model, 'hgm_dc_eosinophils'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_dc_basophills'); ?>

        <?php echo $form->textField($model, 'hgm_dc_basophills'); ?>
        <?php echo $form->error($model, 'hgm_dc_basophills'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_dc_lymphocytes'); ?>

        <?php echo $form->textField($model, 'hgm_dc_lymphocytes'); ?>
        <?php echo $form->error($model, 'hgm_dc_lymphocytes'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_dc_monocytes'); ?>

        <?php echo $form->textField($model, 'hgm_dc_monocytes'); ?>
        <?php echo $form->error($model, 'hgm_dc_monocytes'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_dc_aec'); ?>

        <?php echo $form->textField($model, 'hgm_dc_aec'); ?>
        <?php echo $form->error($model, 'hgm_dc_aec'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_dc_retieulocyte'); ?>

        <?php echo $form->textField($model, 'hgm_dc_retieulocyte'); ?>
        <?php echo $form->error($model, 'hgm_dc_retieulocyte'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_dc_blast_cells'); ?>

        <?php echo $form->textField($model, 'hgm_dc_blast_cells'); ?>
        <?php echo $form->error($model, 'hgm_dc_blast_cells'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_dc_promyelocyte'); ?>

        <?php echo $form->textField($model, 'hgm_dc_promyelocyte'); ?>
        <?php echo $form->error($model, 'hgm_dc_promyelocyte'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_dc_myelocytes'); ?>

        <?php echo $form->textField($model, 'hgm_dc_myelocytes'); ?>
        <?php echo $form->error($model, 'hgm_dc_myelocytes'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_dc_metamyelocytes'); ?>

        <?php echo $form->textField($model, 'hgm_dc_metamyelocytes'); ?>
        <?php echo $form->error($model, 'hgm_dc_metamyelocytes'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_dc_stabforms'); ?>

        <?php echo $form->textField($model, 'hgm_dc_stabforms'); ?>
        <?php echo $form->error($model, 'hgm_dc_stabforms'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgm_dc_rdw'); ?>

        <?php echo $form->textField($model, 'hgm_dc_rdw'); ?>
        <?php echo $form->error($model, 'hgm_dc_rdw'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgn_sp_albumin'); ?>

        <?php echo $form->textField($model, 'hgn_sp_albumin', array('size' => 10, 'maxlength' => 10)); ?>
        <?php echo $form->error($model, 'hgn_sp_albumin'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgn_sp_globulin'); ?>

        <?php echo $form->textField($model, 'hgn_sp_globulin', array('size' => 10, 'maxlength' => 10)); ?>
        <?php echo $form->error($model, 'hgn_sp_globulin'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'hgn_sp_ag_ratio'); ?>

        <?php echo $form->textField($model, 'hgn_sp_ag_ratio', array('size' => 10, 'maxlength' => 10)); ?>
        <?php echo $form->error($model, 'hgn_sp_ag_ratio'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'ps_rbc'); ?>

        <?php echo $form->textField($model, 'ps_rbc', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'ps_rbc'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'ps_wbc'); ?>

        <?php echo $form->textField($model, 'ps_wbc', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'ps_wbc'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'ps_platelets'); ?>

        <?php echo $form->textField($model, 'ps_platelets', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'ps_platelets'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'ps_impression'); ?>

        <?php echo $form->textField($model, 'ps_impression', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'ps_impression'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'lab_urine_profile'); ?>

        <?php echo $form->textField($model, 'lab_urine_profile', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'lab_urine_profile'); ?>

    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'lab_bor'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'name' => 'labdate', // the name of the field
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
        <?php echo $form->error($model, 'lab_bor'); ?>
    </div>
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->