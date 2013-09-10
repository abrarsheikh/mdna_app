<?php

Yii::import("xupload.models.XUploadForm");

class MdnaChildController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'rights',
        );
    }

    public function actions() {
        return array(
//            'upload' => array(
//                'class' => 'xupload.actions.XUploadAction',
//                'path' => Yii::app()->getBasePath() . "/../uploads",
//                'publicPath' => Yii::app()->getBaseUrl() . "/uploads",
//            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $model = $this->loadModel($id);
        $ant = $model->mdnaChildAnthropometryTbls();
        $this->render('view', array(
            'model' => $model,
            'anthropometry' => $this->loadAnthropometry(),
            'labReport' => $this->loadLabReport(),
            'photomodel' => new XUploadForm
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new MdnaChildMdl;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['MdnaChildMdl'])) {
            $model->attributes = $_POST['MdnaChildMdl'];
            $model->created_by = Yii::app()->user->name;
            $model->create_at = date("Y-m-d H:i:s");
            if ($model->save()) {
                Yii::app()->user->setFlash('success', "Child Record ($model->taluk_code) Updated");
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array(
            'model' => $model,
            'anthropometry' => new MdnaChildAnthropometryMdl,
            'labReport' => new MdnaChildLabTbl,
            'photomodel' => new XUploadForm
        ));
    }

    public function actionImport() {
        $this->render('import');
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $photos = new XUploadForm;

        //check if the user is authenticated
        if (!Yii::app()->user->checkAccess('Authenticated')) {
            
        }

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['MdnaChildMdl'])) {

            $model->attributes = $_POST['MdnaChildMdl'];

            //update last edited by and last edited at
            $model->last_edited_at = date("Y-m-d H:i:s");
            $model->last_edited_by = Yii::app()->user->name;
            if ($model->save()) {
                Yii::app()->user->setFlash('success', "Child Record ($model->taluk_code) Updated");
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
            'anthropometry' => $this->loadAnthropometry(),
            'labReport' => $this->loadLabReport(),
            'photomodel' => $photos
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $model = $this->loadModel($id);
        Yii::app()->user->setFlash('success', "Child Record ($model->taluk_code) Deleted");
        $model->delete();
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $model = new MdnaChildMdl('search');
        $searchConfig = $this->loadConfig();
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['MdnaChildMdl']))
            $model->attributes = $_GET['MdnaChildMdl'];

        $this->render('admin', array(
            'model' => $model,
            'searchConfig' => $searchConfig,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new MdnaChildMdl('search');
        $searchConfig = $this->loadConfig();
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['MdnaChildMdl']))
            $model->attributes = $_GET['MdnaChildMdl'];

        $this->render('admin', array(
            'model' => $model,
            'searchConfig' => $searchConfig,
        ));
    }

    public function actionConfigSearch() {

        $model = $this->loadConfig();

        if (isset($_POST['MdnaSearchConfigTbl'])) {
            $model->attributes = $_POST['MdnaSearchConfigTbl'];
            //update last edited by and last edited at
            $model->user = Yii::app()->user->name;

            if (MdnaSearchConfigTbl::model()->findByPk($model->user))
                $model->update();
            else
                $model->save();
            $this->redirect(array('admin'));

//            if ($model->save()) {
//                Yii::app()->user->setFlash('success', "Child Record ($model->taluk_code) Updated");
//                $this->redirect(array('view', 'id' => $model->id));
//            }
        }

        if (Yii::app()->request->isAjaxRequest) {
            $this->renderPartial('configSearch', array(
                'model' => $model,
                'asDialog' => !empty($_GET['asDialog']),
                    ), false, true);

            Yii::app()->end();
        }
        else
            $this->render('configSearch', array(
                'model' => $model,
            ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return MdnaChildMdl the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = MdnaChildMdl::model()->findByPk($id);
        if (Yii::app()->user->checkAccess('Authenticated') || Yii::app()->user->name == $model->created_by) {
            return $model;
        }
        else
            throw new CHttpException(403, 'User is not Authorized');
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
    }

    public function loadConfig() {
        $model = new MdnaSearchConfigTbl();
        $model = $model->findByPk(Yii::app()->user->name);
        if ($model === null)
            $model = new MdnaSearchConfigTbl();
        //throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function loadAnthropometry() {
        $anthropometryMdl = new MdnaChildAnthropometryMdl;
        $anthropometryMdl->unsetAttributes();  // clear any default values
//        if ($anthropometryMdl === null)
//            throw new CHttpException(404, 'The requested page does not exist.');
        return $anthropometryMdl;
    }

    public function loadLabReport() {
        $labMdl = new MdnaChildLabTbl;
        $labMdl->unsetAttributes();  // clear any default values
//        if ($labMdl === null)
//            throw new CHttpException(404, 'The requested page does not exist.');
        return $labMdl;
    }

    /**
     * Performs the AJAX validation.
     * @param MdnaChildMdl $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'mdna-child-mdl-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGet() {
        $modelId = $_GET['id'];
        $path = Yii::app()->getBasePath() . "/../images/uploads/{$modelId}/";
        $url = Yii::app()->getBaseUrl() . "/images/uploads/{$modelId}/";
        $taluk_code = MdnaChildMdl::model()->findByPk($modelId)->taluk_code;
        $photos = MdnaChildPhotoTb::model()->findAllByAttributes(array('taluk_code' => $taluk_code));
        $output = array();
        foreach ($photos as $photo) {
            if (is_file($path . $photo["photo_id"])) {
                $new = array(
                    "name" => $photo->name,
                    "type" => $photo->type,
                    "type" => $photo->size,
                    "url" => $path . $photo["photo_id"],
                    "thumbnail_url" => $url . $photo["photo_id"], // $publicPath . "thumbs/$filename",
//                        "delete_url" => $this->createUrl("upload", array(
//                            "_method" => "delete",
//                            "file" => $filename
//                        )),
//                        "delete_type" => "POST"
                );
                array_push($output, $new);
            }
        }
        echo json_encode($output);
    }
    
    public function actionDeletePhoto() {
        $modelId = $_GET['id'];
        $path = Yii::app()->getBasePath() . "/../images/uploads/{$modelId}/";
        $url = Yii::app()->getBaseUrl() . "/images/uploads/{$modelId}/";
        $taluk_code = MdnaChildMdl::model()->findByPk($modelId)->taluk_code;
        $photos = MdnaChildPhotoTb::model()->findAllByAttributes(array('taluk_code' => $taluk_code));
        $output = array();
        foreach ($photos as $photo) {
            if (is_file($path . $photo["photo_id"])) {
                $new = array(
                    "name" => $photo->name,
                    "type" => $photo->type,
                    "type" => $photo->size,
                    "url" => $path . $photo["photo_id"],
                    "thumbnail_url" => $url . $photo["photo_id"], // $publicPath . "thumbs/$filename",
//                        "delete_url" => $this->createUrl("upload", array(
//                            "_method" => "delete",
//                            "file" => $filename
//                        )),
//                        "delete_type" => "POST"
                );
                array_push($output, $new);
            }
        }
        echo json_encode($output);
    }


    public function actionUpload() {
        Yii::import("xupload.models.XUploadForm");
        //Here we define the paths where the files will be stored temporarily
        $modelId = $_GET['id'];
        $path = (Yii::app()->getBasePath() . "/../images/uploads/tmp/") ;
        $publicPath = Yii::app()->getBaseUrl() . "/images/uploads/tmp/";

        //This is for IE which doens't handle 'Content-type: application/json' correctly
        header('Vary: Accept');
        if (isset($_SERVER['HTTP_ACCEPT']) && (strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false)) {
            header('Content-type: application/json');
        } else {
            header('Content-type: text/plain');
        }

        //Here we check if we are deleting and uploaded file
        if (isset($_GET["_method"])) {
            if ($_GET["_method"] == "delete") {
                if ($_GET["file"][0] !== '.') {
                    $file = $path . $_GET["file"];
                    if (is_file($file)) {
                        unlink($file);
                    }
                }
                echo json_encode(true);
            }
        } else {
            $model = new XUploadForm;
            $model->file = CUploadedFile::getInstance($model, 'file');
            //We check that the file was successfully uploaded
            if ($model->file !== null) {
                //Grab some data
                $model->mime_type = $model->file->getType();
                $model->size = $model->file->getSize();
                $model->name = $model->file->getName();
                //(optional) Generate a random name for our file
                $filename = md5(Yii::app()->user->id . microtime() . $model->name);
                $filename .= "." . $model->file->getExtensionName();
                if ($model->validate()) {
                    //Move our file to our temporary dir
                    chmod(Yii::app()->getBasePath() . "/../images/uploads/tmp/", 0777);
                    $model->file->saveAs($path . $filename);
                    chmod($path . $filename, 0777);
                    //here you can also generate the image versions you need 
                    //using something like PHPThumb
                    //Now we need to save this path to the user's session
                    if (Yii::app()->user->hasState('images')) {
                        $userImages = Yii::app()->user->getState('images');
                    } else {
                        $userImages = array();
                    }
                    $p = $path . $filename;
                    $userImages[] = array(
                        "path" => $p,
                        //the same file or a thumb version that you generated
                        "thumb" => $p,
                        "filename" => $filename,
                        'size' => $model->size,
                        'mime' => $model->mime_type,
                        'name' => $model->name,
                    );
                    Yii::app()->user->setState('images', $userImages);

                    //Now we need to tell our widget that the upload was succesfull
                    //We do so, using the json structure defined in
                    // https://github.com/blueimp/jQuery-File-Upload/wiki/Setup
                    echo json_encode(array(array(
                            "name" => $model->name,
                            "type" => $model->mime_type,
                            "type" => $model->size,
                            "url" => $publicPath . $filename,
                            "thumbnail_url" => Yii::app()->getBaseUrl() . "/images/uploads/{$modelId}/" . $filename, // $publicPath . "thumbs/$filename",
                            "delete_url" => $this->createUrl("upload", array(
                                "_method" => "delete",
                                "file" => $filename
                            )),
                            "delete_type" => "POST"
                    )));

                    $this->addImages($modelId);
                } else {
                    //If the upload failed for some reason we log some data and let the widget know
                    echo json_encode(array(
                        array("error" => $model->getErrors('file'),
                    )));
                    Yii::log("XUploadAction: " . CVarDumper::dumpAsString($model->getErrors()), CLogger::LEVEL_ERROR, "xupload.actions.XUploadAction"
                    );
                }
            } else {
                throw new CHttpException(500, "Could not upload file");
            }
        }
    }

    public function addImages($modelId) {
        //If we have pending images
        if (Yii::app()->user->hasState('images')) {
            $userImages = Yii::app()->user->getState('images');
            //Resolve the final path for our images
            $path = (Yii::app()->getBasePath() . "/../images/uploads/{$modelId}/");
            //Create the folder and give permissions if it doesnt exists
            if (!is_dir($path)) {
//                chmod(Yii::app()->getBasePath() . "/../images/uploads/{$modelId}/", 0777);
                mkdir($path);
                chmod($path, 0777);
            }

            //Now lets create the corresponding models and move the files
            foreach ($userImages as $image) {
                if (is_file($image["path"])) {
                    if (rename($image["path"], $path . $image["filename"])) {
                        chmod($path . $image["filename"], 0777);
//                    write the model code here
                        $img = new MdnaChildPhotoTb( );
                        $img->size = $image["size"];
                        $img->type = $image["mime"];
                        $img->name = $image["name"];
                        $img->photo_id = $image["filename"];
                        $taluk_code = MdnaChildMdl::model()->findByPk($modelId)->taluk_code;
                        $img->taluk_code = $taluk_code;
                        if (!$img->save()) {
                            //Its always good to log something
                            $error = $img->getErrors();
                            Yii::log("Could not save Image:\n" . CVarDumper::dumpAsString(
                                            $img->getErrors()), CLogger::LEVEL_ERROR);
                            //this exception will rollback the transaction
                            throw new Exception('Could not save Image');
                        }
                    }
                } else {
                    //You can also throw an execption here to rollback the transaction
                    Yii::log($image["path"] . " is not a file", CLogger::LEVEL_WARNING);
                }
            }
            //Clear the user's session
            Yii::app()->user->setState('images', null);
        }
    }

}
