<?php
/* @var $this MdnaChildLabTblController */
/* @var $model MdnaChildLabTbl */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

    <?php if($searchConfig->id != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'id'); ?>
     
                <?php echo $form->textField($model,'id',array('size'=>20,'maxlength'=>20)); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->id_a != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'id_a'); ?>
     
                <?php echo $form->textField($model,'id_a',array('size'=>20,'maxlength'=>20)); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_hb != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_hb'); ?>
     
                <?php echo $form->textField($model,'hgm_hb'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_mcv != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_mcv'); ?>
     
                <?php echo $form->textField($model,'hgm_mcv'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_rbc != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_rbc'); ?>
     
                <?php echo $form->textField($model,'hgm_rbc'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_mch != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_mch'); ?>
     
                <?php echo $form->textField($model,'hgm_mch'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_pcv != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_pcv'); ?>
     
                <?php echo $form->textField($model,'hgm_pcv'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_mchc != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_mchc'); ?>
     
                <?php echo $form->textField($model,'hgm_mchc'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_esr_mm != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_esr_mm'); ?>
     
                <?php echo $form->textField($model,'hgm_esr_mm'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_bleeding_time != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_bleeding_time'); ?>
     
                <?php echo $form->textField($model,'hgm_bleeding_time',array('size'=>10,'maxlength'=>10)); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_clotting_time != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_clotting_time'); ?>
     
                <?php echo $form->textField($model,'hgm_clotting_time',array('size'=>10,'maxlength'=>10)); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_platelet_count != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_platelet_count'); ?>
     
                <?php echo $form->textField($model,'hgm_platelet_count'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_dc_wbc != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_dc_wbc'); ?>
     
                <?php echo $form->textField($model,'hgm_dc_wbc'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_dc_neutrophils != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_dc_neutrophils'); ?>
     
                <?php echo $form->textField($model,'hgm_dc_neutrophils'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_dc_eosinophils != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_dc_eosinophils'); ?>
     
                <?php echo $form->textField($model,'hgm_dc_eosinophils'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_dc_basophills != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_dc_basophills'); ?>
     
                <?php echo $form->textField($model,'hgm_dc_basophills'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_dc_lymphocytes != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_dc_lymphocytes'); ?>
     
                <?php echo $form->textField($model,'hgm_dc_lymphocytes'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_dc_monocytes != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_dc_monocytes'); ?>
     
                <?php echo $form->textField($model,'hgm_dc_monocytes'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_dc_aec != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_dc_aec'); ?>
     
                <?php echo $form->textField($model,'hgm_dc_aec'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_dc_retieulocyte != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_dc_retieulocyte'); ?>
     
                <?php echo $form->textField($model,'hgm_dc_retieulocyte'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_dc_blast_cells != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_dc_blast_cells'); ?>
     
                <?php echo $form->textField($model,'hgm_dc_blast_cells'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_dc_promyelocyte != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_dc_promyelocyte'); ?>
     
                <?php echo $form->textField($model,'hgm_dc_promyelocyte'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_dc_myelocytes != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_dc_myelocytes'); ?>
     
                <?php echo $form->textField($model,'hgm_dc_myelocytes'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_dc_metamyelocytes != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_dc_metamyelocytes'); ?>
     
                <?php echo $form->textField($model,'hgm_dc_metamyelocytes'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_dc_stabforms != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_dc_stabforms'); ?>
     
                <?php echo $form->textField($model,'hgm_dc_stabforms'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgm_dc_rdw != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgm_dc_rdw'); ?>
     
                <?php echo $form->textField($model,'hgm_dc_rdw'); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgn_sp_albumin != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgn_sp_albumin'); ?>
     
                <?php echo $form->textField($model,'hgn_sp_albumin',array('size'=>10,'maxlength'=>10)); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgn_sp_globulin != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgn_sp_globulin'); ?>
     
                <?php echo $form->textField($model,'hgn_sp_globulin',array('size'=>10,'maxlength'=>10)); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->hgn_sp_ag_ratio != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'hgn_sp_ag_ratio'); ?>
     
                <?php echo $form->textField($model,'hgn_sp_ag_ratio',array('size'=>10,'maxlength'=>10)); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->ps_rbc != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'ps_rbc'); ?>
     
                <?php echo $form->textField($model,'ps_rbc',array('size'=>60,'maxlength'=>100)); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->ps_wbc != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'ps_wbc'); ?>
     
                <?php echo $form->textField($model,'ps_wbc',array('size'=>60,'maxlength'=>100)); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->ps_platelets != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'ps_platelets'); ?>
     
                <?php echo $form->textField($model,'ps_platelets',array('size'=>60,'maxlength'=>100)); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->ps_impression != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'ps_impression'); ?>
     
                <?php echo $form->textField($model,'ps_impression',array('size'=>60,'maxlength'=>100)); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->lab_urine_profile != 'N') { ?>

            <div class="row">           
                <?php echo $form->labelEx($model,'lab_urine_profile'); ?>
     
                <?php echo $form->textField($model,'lab_urine_profile',array('size'=>60,'maxlength'=>100)); ?>
       
            </div>

            <?php } ?> 

<?php if($searchConfig->lab_bor != 'N') { ?>
            <div class="row">
                <?php echo $form->labelEx($model,'lab_bor'); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                  'name'=>'bookdate',               // the name of the field
                                  'model'=>$model,                 // Model object
                                  'attribute'=>'lab_bor',   // Attribute name          
                                  'options'=>array(
                                      'showAnim'=>'fold',
                                      'dateFormat'=>'yy-mm-dd',     // optional date formatting
                                      'debug'=>true,
                                  ),
                                  'htmlOptions'=>array(
                                    'style'=>'height:20px;'
                                   ),
                                )); ?>
            </div>
            <?php } ?> 

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->