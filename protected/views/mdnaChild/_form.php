<?php
/* @var $this MdnaChildController */
/* @var $model MdnaChildMdl */
/* @var $form CActiveForm */
/* @var $anthropometry MdnaChildAnthropometryMdl */
/* @var $labReport MdnaChildLabTbl */
/* @var $photomodel MdnaChildPhotoTb */
?>

<div class="wide form" >



    

    <?php
    $this->widget('zii.widgets.jui.CJuiTabs', array(
        'tabs' => array(
            'Basic' => $this->renderPartial('_form_basic', array('model' => $model), true),
            'Anthropometry' => $this->renderPartial('_form_ant', array('model' => $model, 'anthropometry' => $anthropometry), true),
            'Lab Report' => $this->renderPartial('_form_lab', array('model' => $model, 'labReport' => $labReport), true),
            'Photo Upload' => $this->renderPartial('_form_pupload', array('model' => $model, 'photomodel' => $photomodel), true),
        ),
        'options' => array(
            'collapsible' => false,
            'selected' => 0,
        ),
        'htmlOptions' => array(
            'style' => 'width:auto;'
        ),
    ));
    ?>


</div><!-- form -->