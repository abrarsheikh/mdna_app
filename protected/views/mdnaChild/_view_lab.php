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
        'hgm_rbc',
        'hgm_platelet_count',
        'hgm_dc_wbc',
        'hgm_dc_eosinophils',
        'lab_bor',
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}',
            'buttons' => array(
                'view' => array(
                    'url' => 'Yii::app()->createUrl("/mdnaChildLabTbl/view", array("id" => $data["id"]))',
                    'options' => array(
                        'ajax' => array(
                            'type' => 'POST',
                            'url' => "js:$(this).attr('href')",
                            'update' => '#detail-section',
                        ),
                    ),
                ), // view button
                'update' => array(
                ), // update button
                'delete' => array
                (
                ),
            ),
        ),
    ),
));
?>