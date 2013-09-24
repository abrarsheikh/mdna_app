<div class="row-fluid">
    <div class="span6">
        <?php
        $this->widget('ext.widgets.loading.LoadingWidget');
        if (isset($model->taluk_code) && $model->taluk_code != '') {
            $dataProvider = $anthropometry->search();
            $criteria = $dataProvider->getCriteria();
            $criteria->params = array(':id_a' => $model->taluk_code);
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'mdna-child-a-mdl-grid',
                'dataProvider' => $dataProvider,
                'columns' => array(
                    'weight',
                    'height',
                    'muac',
                    'date',
                    array(
                        'class' => 'CButtonColumn',
                        'buttons' => array(
                            'view' => array(
                                'url' => 'Yii::app()->createUrl("/mdnaChildAnthropometryMdl/view", array("id" => $data["id"]))',
                                'options' => array(
                                    'ajax' => array(
                                        'type' => 'POST',
                                        'url' => "js:$(this).attr('href')",
                                        'update' => '#detail-section',
                                        'beforeSend' => 'function(data){
                                            Loading.show();
                                        }',
                                        'complete' => 'function(data){
                                            Loading.hide();
                                        }',
                                    ),
                                ),
                            ), // view button
                            'update' => array(
                                'url' => 'Yii::app()->createUrl("/mdnaChildAnthropometryMdl/update", array("id" => $data["id"]))',
                                'options' => array(
                                    'ajax' => array(
                                        'type' => 'POST',
                                        'url' => "js:$(this).attr('href')",
                                        'update' => '#detail-section',
                                        'beforeSend' => 'function(data){
                                            Loading.show();
                                        }',
                                        'complete' => 'function(data){
                                            Loading.hide();
                                        }',
                                    ),
                                ),
                            ), // update button
                            'delete' => array
                                (
                                'visible' => 'Yii::app()->user->checkAccess("Authenticated")',
                            ),
                        ),
                        'deleteButtonUrl' => 'Yii::app()->createUrl("/mdnaChildAnthropometryMdl/delete", array("id" =>  $data["id"]))',
                    ),
                ),
            ));
            unset($dataProvider);
            ?>
            <?php
            $code = $model->taluk_code;
            echo CHtml::ajaxLink(
                    'Add', Yii::app()->createUrl("/mdnaChildAnthropometryMdl/create"), array(
                'type' => 'POST',
                'data' => "js:{ 'id_a': '$code'}",
                'url' => "js:$(this).attr('href')",
                'update' => '#detail-section',
                'beforeSend' => 'function(data){
                    Loading.show();
                }',
                'complete' => 'function(data){
                    Loading.hide();
                }',
                    )
            );
        } else {
            echo Yii::app()->params['anthropometry_01'];
        }
        ?>
    </div>
</div>