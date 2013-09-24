<?php
/* @var $this MdnaChildController */
/* @var $model MdnaChildMdl */

$this->breadcrumbs = array(
    'Child Profiles' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'Manage Child Profile', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::app()->params['create_child_pro'] ?> </h1>

<?php echo $this->renderPartial('_form', array('model' => $model, 'anthropometry' => $anthropometry, 'labReport' => $labReport, 'photomodel' => $photomodel)); ?>