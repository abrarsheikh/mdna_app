<?php

$dataProvider = $labReport->search();
$criteria = $dataProvider->getCriteria();
$criteria->params = array(':id_a' => $model->taluk_code);

$dataProvider->setCriteria($criteria);
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'mdna-child-a-mdl-grid',
    'dataProvider' => $dataProvider,
    'columns' => array(
        'hgm_hb',
        'hgm_mcv',
        'hgm_rbc',
        'lab_bor',
    ),
));
?>