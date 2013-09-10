<?php
/* @var $this MdnaChildController */
/* @var $model MdnaChildMdl */
/* @var $anthropometry MdnaChildAnthropometryMdl */

$this->breadcrumbs = array(
    'Mdna Child Mdls' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'Create Child Profile', 'url' => array('create')),
    array('label' => 'Update Child Profile', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Child Profile', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Child Profile', 'url' => array('admin')),
    array('label' => 'Import from csv', 'url' => array('import'), 'visible' => Yii::app()->user->checkAccess('Authenticated')),
);
?>



<h1>View Child Profile (<?php echo $model->taluk_code; ?>)</h1>

<?php
    $this->widget('zii.widgets.jui.CJuiTabs', array(
        'tabs' => array(
            'Basic' => $this->renderPartial('_view_basic', array('model' => $model), true),
            'Anthropometry' => $this->renderPartial('_view_ant', array('model' => $model, 'anthropometry' => $anthropometry), true),
            'Lab Report' => $this->renderPartial('_view_lab', array('model' => $model, 'labReport' => $labReport), true),
            'Photo Upload' => $this->renderPartial('_view_photo', array('model' => $model, 'photomodel' => $photomodel), true),
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


