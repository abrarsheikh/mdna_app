<?php

/* @var $this MdnaChildAnthropometryMdlController */
/* @var $model MdnaChildAnthropometryMdl */

$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'mydialog',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => Yii::app()->params['view_ant']." ($model->id_a)",
        'autoOpen' => true,
        'width' => 550,
        'height' => 470,
    ),
));
?>

<?php

$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'weight',
        'height',
        'muac',
        'date',
    ),
));
?>
<?php

$this->endWidget('zii.widgets.jui.CJuiDialog');
?>