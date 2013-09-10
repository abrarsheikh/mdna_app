<?php

/**
 * This is the model class for table "mdna_child_lab_tbl".
 *
 * The followings are the available columns in table 'mdna_child_lab_tbl':
 * @property string $id
 * @property string $id_a
 * @property double $hgm_hb
 * @property double $hgm_mcv
 * @property double $hgm_rbc
 * @property double $hgm_mch
 * @property double $hgm_pcv
 * @property double $hgm_mchc
 * @property double $hgm_esr_mm
 * @property string $hgm_bleeding_time
 * @property string $hgm_clotting_time
 * @property double $hgm_platelet_count
 * @property double $hgm_dc_wbc
 * @property integer $hgm_dc_neutrophils
 * @property integer $hgm_dc_eosinophils
 * @property integer $hgm_dc_basophills
 * @property integer $hgm_dc_lymphocytes
 * @property integer $hgm_dc_monocytes
 * @property double $hgm_dc_aec
 * @property double $hgm_dc_retieulocyte
 * @property double $hgm_dc_blast_cells
 * @property double $hgm_dc_promyelocyte
 * @property double $hgm_dc_myelocytes
 * @property double $hgm_dc_metamyelocytes
 * @property double $hgm_dc_stabforms
 * @property double $hgm_dc_rdw
 * @property string $hgn_sp_albumin
 * @property string $hgn_sp_globulin
 * @property string $hgn_sp_ag_ratio
 * @property string $ps_rbc
 * @property string $ps_wbc
 * @property string $ps_platelets
 * @property string $ps_impression
 * @property string $lab_urine_profile
 * @property string $lab_bor
 *
 * The followings are the available model relations:
 * @property MdnaChildTbl $idA
 */
class MdnaChildLabTbl extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return MdnaChildLabTbl the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'mdna_child_lab_tbl';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id_a', 'required'),
            array('hgm_dc_neutrophils, hgm_dc_eosinophils, hgm_dc_basophills, hgm_dc_lymphocytes, hgm_dc_monocytes', 'numerical', 'integerOnly' => true),
            array('hgm_hb, hgm_mcv, hgm_rbc, hgm_mch, hgm_pcv, hgm_mchc, hgm_esr_mm, hgm_platelet_count, hgm_dc_wbc, hgm_dc_aec, hgm_dc_retieulocyte, hgm_dc_blast_cells, hgm_dc_promyelocyte, hgm_dc_myelocytes, hgm_dc_metamyelocytes, hgm_dc_stabforms, hgm_dc_rdw', 'numerical'),
            array('id_a', 'length', 'max' => 20),
            array('hgm_bleeding_time, hgm_clotting_time, hgn_sp_albumin, hgn_sp_globulin, hgn_sp_ag_ratio', 'length', 'max' => 10),
            array('ps_rbc, ps_wbc, ps_platelets, ps_impression, lab_urine_profile', 'length', 'max' => 100),
            array('lab_bor', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, id_a, hgm_hb, hgm_mcv, hgm_rbc, hgm_mch, hgm_pcv, hgm_mchc, hgm_esr_mm, hgm_bleeding_time, hgm_clotting_time, hgm_platelet_count, hgm_dc_wbc, hgm_dc_neutrophils, hgm_dc_eosinophils, hgm_dc_basophills, hgm_dc_lymphocytes, hgm_dc_monocytes, hgm_dc_aec, hgm_dc_retieulocyte, hgm_dc_blast_cells, hgm_dc_promyelocyte, hgm_dc_myelocytes, hgm_dc_metamyelocytes, hgm_dc_stabforms, hgm_dc_rdw, hgn_sp_albumin, hgn_sp_globulin, hgn_sp_ag_ratio, ps_rbc, ps_wbc, ps_platelets, ps_impression, lab_urine_profile, lab_bor', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idA' => array(self::BELONGS_TO, 'MdnaChildMdl', 'id_a'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return Yii::app()->params['childProfile'];
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->select = '*';  // only select the 'title' column
        $criteria->condition = 'id_a=:id_a ';

        $criteria->compare('id', $this->id, true);
        $criteria->compare('id_a', $this->id_a, true);
        $criteria->compare('hgm_hb', $this->hgm_hb);
        $criteria->compare('hgm_mcv', $this->hgm_mcv);
        $criteria->compare('hgm_rbc', $this->hgm_rbc);
        $criteria->compare('hgm_mch', $this->hgm_mch);
        $criteria->compare('hgm_pcv', $this->hgm_pcv);
        $criteria->compare('hgm_mchc', $this->hgm_mchc);
        $criteria->compare('hgm_esr_mm', $this->hgm_esr_mm);
        $criteria->compare('hgm_bleeding_time', $this->hgm_bleeding_time, true);
        $criteria->compare('hgm_clotting_time', $this->hgm_clotting_time, true);
        $criteria->compare('hgm_platelet_count', $this->hgm_platelet_count);
        $criteria->compare('hgm_dc_wbc', $this->hgm_dc_wbc);
        $criteria->compare('hgm_dc_neutrophils', $this->hgm_dc_neutrophils);
        $criteria->compare('hgm_dc_eosinophils', $this->hgm_dc_eosinophils);
        $criteria->compare('hgm_dc_basophills', $this->hgm_dc_basophills);
        $criteria->compare('hgm_dc_lymphocytes', $this->hgm_dc_lymphocytes);
        $criteria->compare('hgm_dc_monocytes', $this->hgm_dc_monocytes);
        $criteria->compare('hgm_dc_aec', $this->hgm_dc_aec);
        $criteria->compare('hgm_dc_retieulocyte', $this->hgm_dc_retieulocyte);
        $criteria->compare('hgm_dc_blast_cells', $this->hgm_dc_blast_cells);
        $criteria->compare('hgm_dc_promyelocyte', $this->hgm_dc_promyelocyte);
        $criteria->compare('hgm_dc_myelocytes', $this->hgm_dc_myelocytes);
        $criteria->compare('hgm_dc_metamyelocytes', $this->hgm_dc_metamyelocytes);
        $criteria->compare('hgm_dc_stabforms', $this->hgm_dc_stabforms);
        $criteria->compare('hgm_dc_rdw', $this->hgm_dc_rdw);
        $criteria->compare('hgn_sp_albumin', $this->hgn_sp_albumin, true);
        $criteria->compare('hgn_sp_globulin', $this->hgn_sp_globulin, true);
        $criteria->compare('hgn_sp_ag_ratio', $this->hgn_sp_ag_ratio, true);
        $criteria->compare('ps_rbc', $this->ps_rbc, true);
        $criteria->compare('ps_wbc', $this->ps_wbc, true);
        $criteria->compare('ps_platelets', $this->ps_platelets, true);
        $criteria->compare('ps_impression', $this->ps_impression, true);
        $criteria->compare('lab_urine_profile', $this->lab_urine_profile, true);
        $criteria->compare('lab_bor', $this->lab_bor, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}