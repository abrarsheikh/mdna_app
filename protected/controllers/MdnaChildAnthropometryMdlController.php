<?php

class MdnaChildAnthropometryMdlController extends Controller {

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

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        if (Yii::app()->request->isAjaxRequest) {
            $this->renderPartial('view', array(
                'model' => $this->loadModel($id),
                'asDialog' => !empty($_GET['asDialog']),
                    ), false, true);

            Yii::app()->end();
        } else {
            $this->render('view', array(
                'model' => $this->loadModel($id),
            ));
        }
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new MdnaChildAnthropometryMdl;
        if (isset($_POST["id_a"]))
            $model->id_a = $_POST["id_a"];

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['MdnaChildAnthropometryMdl'])) {
            $model->attributes = $_POST['MdnaChildAnthropometryMdl'];
            Yii::app()->db->createCommand("update mdna_child_anthropometry_tbl set is_active='N' WHERE id_a = '$model->id_a'")->query();
            $model->is_active = 'Y';
            if ($model->save())
                $this->redirect(array('mdnaChild/view', 'id' => MdnaChildMdl::model()->findByAttributes(array('taluk_code' => $model->id_a))->id));
        }

        if (Yii::app()->request->isAjaxRequest) {
            $this->renderPartial('create', array(
                'model' => $model,
                'asDialog' => !empty($_GET['asDialog']),
                    ), false, true);

            Yii::app()->end();
        }
        else
            $this->render('create', array(
                'model' => $model,
            ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['MdnaChildAnthropometryMdl'])) {
            $model->attributes = $_POST['MdnaChildAnthropometryMdl'];
            if ($model->save()) {
                $this->redirect(array('mdnaChild/view', 'id' => MdnaChildMdl::model()->findByAttributes(array('taluk_code' => $model->id_a))->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $taluk_code = $this->loadModel($id)->id_a;
        $Criteria = new CDbCriteria();
        $Criteria->condition = "id_a = '$taluk_code'";
        $results = MdnaChildLabTbl::model()->findAll($Criteria);
        $count = count($results);
        unset($results);
        unset($Criteria);
        if ($count > 1) {
            $Criteria = new CDbCriteria();
            $Criteria->condition = "id_a = '$taluk_code'";
            $Criteria->order = "date DESC";
            $Criteria->limit = 1;
            $record = MdnaChildAnthropometryMdl::model()->find($Criteria);
            $record->is_active = 'Y';
            $record->save();
            unset($results);
            unset($Criteria);
            unset($record);
        }
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('MdnaChildAnthropometryMdl');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new MdnaChildAnthropometryMdl('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['MdnaChildAnthropometryMdl']))
            $model->attributes = $_GET['MdnaChildAnthropometryMdl'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return MdnaChildAnthropometryMdl the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = MdnaChildAnthropometryMdl::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param MdnaChildAnthropometryMdl $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'mdna-child-anthropometry-mdl-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
