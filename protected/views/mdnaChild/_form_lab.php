
<?php

if (isset($model->id) && $model->id != '') {
    $dataProvider = $labReport->search();
    $criteria = $dataProvider->getCriteria();
    $criteria->params = array(':id_a' => $model->taluk_code);
    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'mdna-child-lab-mdl-grid',
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
                        'url' => 'Yii::app()->createUrl("/mdnaChildLabTbl/update", array("id" => $data["id"]))',
                        'options' => array(
                            'ajax' => array(
                                'type' => 'POST',
                                'url' => "js:$(this).attr('href')",
                                'update' => '#detail-section',
                            ),
                        ),
                    ), // update button
                    'delete' => array
                        (
                        'visible' => 'Yii::app()->user->checkAccess("Authenticated")',
                    ),
                ),
                'deleteButtonUrl' => 'Yii::app()->createUrl("/mdnaChildLabTbl/delete", array("id" =>  $data["id"]))',
            ),
        ),
    ));
    unset($dataProvider);
?>
    <?php

    echo CHtml::ajaxLink(
            'Add', Yii::app()->createUrl("/mdnaChildLabTbl/create"), array(
        'type' => 'POST',
        'data' => "js:{ 'id_a':'$model->taluk_code' }",
        'url' => "js:$(this).attr('href')",
        'update' => '#detail-section',
            )
    );
} else {
    echo Yii::app()->params['lab_01'];
}
    ?>
