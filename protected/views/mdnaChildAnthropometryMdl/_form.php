<?php
/* @var $this MdnaChildAnthropometryMdlController */
/* @var $model MdnaChildAnthropometryMdl */
/* @var $form CActiveForm */
?>

<div class="wide form" >

    <?php
    $form = $this->beginWidget('CActiveForm', array(
                'id' => 'mdna-child-anthropometry-mdl-form',
                'enableAjaxValidation' => false,
            ));
    ?>

    <?php echo $form->errorSummary($model); ?>


    <div class="row">           

        <?php echo $form->hiddenField($model, 'id_a'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'weight'); ?>

        <?php echo $form->textField($model, 'weight'); ?>
        <?php echo $form->error($model, 'weight'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'height'); ?>

        <?php echo $form->textField($model, 'height'); ?>
        <?php echo $form->error($model, 'height'); ?>

    </div>


    <div class="row">           
        <?php echo $form->labelEx($model, 'muac'); ?>

        <?php echo $form->textField($model, 'muac'); ?>
        <?php echo $form->error($model, 'muac'); ?>

    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'date'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'name' => $model->id_a, // the name of the field
            'model' => $model, // Model object
            'attribute' => 'date', // Attribute name          
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
        <?php echo $form->error($model, 'date'); ?>
    </div>
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->