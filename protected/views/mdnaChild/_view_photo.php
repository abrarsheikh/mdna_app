
<div class="row-fluid" style="padding-left:1cm;">

    <?php
    $this->widget('xupload.XUpload', array(
        'url' => Yii::app()->createUrl("mdnaChild/upload", array('id' => $model->id)),
        'model' => $photomodel,
        'attribute' => 'file',
        'multiple' => true,
    ));
    ?>

    <script type="text/javascript">
        $(function() {
            'use strict';

            // Initialize the jQuery File Upload widget:
            $('#XUploadForm-form').fileupload({
                url: '<?php echo Yii::app()->createUrl("mdnaChild/get", array("id" => $model->id)) ?>'
            });
            
            $('#XUploadForm-form').bind('fileuploadadd', function (e, data) {
                alert("Photo Cannot be added in view mode");
                return false;
            })

            $.ajax({
                url: $('#XUploadForm-form').fileupload('option', 'url'),
                dataType: 'json',
                context: $('#XUploadForm-form')[0]
            }).done(function(result) {
                $(this).fileupload('option', 'done')
                        .call(this, null, {result: result});
            });
        });
    </script>

</div>