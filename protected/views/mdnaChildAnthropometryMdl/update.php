<?php

/* @var $this MdnaChildAnthropometryMdlController */
/* @var $model MdnaChildAnthropometryMdl */

$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'mydialog',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => Yii::app()->params['update_ant']." ($model->id_a)",
        'autoOpen' => true,
        'width' => 550,
        'height' => 470,
    ),
));
?>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>

<?php

$this->endWidget('zii.widgets.jui.CJuiDialog');
?>