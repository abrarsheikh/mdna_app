<?php

/**
 * This is the model class for table "mdna_child_tbl".
 *
 * The followings are the available columns in table 'mdna_child_tbl':
 * @property string $id
 * @property string $taluk_code
 * @property string $sr_no_wnc
 * @property string $name
 * @property string $phc_name
 * @property string $dob
 * @property string $sex
 * @property string $caste
 * @property string $street
 * @property string $landmark
 * @property string $sam_no
 * @property string $district
 * @property string $talluka
 * @property string $name_of_anganwadi
 * @property string $name_of_AWW
 * @property string $ph_no
 * @property string $dor
 * @property string $fi_m_name
 * @property string $fi_m_dob
 * @property string $fi_m_education
 * @property string $fi_m_profession
 * @property string $fi_f_name
 * @property string $fi_f_dob
 * @property string $fi_f_education
 * @property string $fi_f_profession
 * @property integer $fi_size
 * @property integer $fi_daily_income
 * @property integer $fi_no_sibling
 * @property integer $fi_no_brother
 * @property integer $fi_no_sister
 * @property string $c_appetite
 * @property string $c_dairrhoea
 * @property string $c_vomiting
 * @property string $c_urinary
 * @property string $c_fever
 * @property string $c_cough
 * @property string $c_lethargy
 * @property string $c_swelling
 * @property string $ih_opv
 * @property string $ih_hepb
 * @property string $ih_bcg
 * @property string $ih_opv123
 * @property string $ih_dpt123
 * @property string $ih_hepb123
 * @property string $ih_mis_vita
 * @property string $ih_dpt_opv
 * @property string $ih_mis_bost
 * @property string $dh_breast_feeds
 * @property string $dh_other
 * @property string $dh_other_milk
 * @property string $dh_bottle_feeding
 * @property string $dh_comp_feeds
 * @property string $dh_age_of_comp
 * @property string $dh_no_of_feeds
 * @property string $gpe_heart_rate
 * @property string $gpe_respiratory_rate
 * @property string $gpe_chest_indrawing
 * @property string $gpe_visible_severe_wasting
 * @property string $gpe_bl_pedal_edema
 * @property string $gpe_bl_grade
 * @property string $gpe_alert_Irritable_lethargic
 * @property string $gpe_hair_changes
 * @property string $gpe_desc_hair_change
 * @property string $gpe_skin_changes
 * @property string $gpe_desc_skin_change
 * @property string $gpe_eye_signs_vit_a_def
 * @property string $gpe_desc_vit_a_def
 * @property string $gpe_ear_discharge
 * @property string $gpe_desc_ear_discharge
 * @property string $gpe_mouth_glossitis
 * @property string $gpe_pallor
 * @property string $gpe_pallor_some_sever
 * @property integer $gpe_lymphadenopathy
 * @property string $gpe_desc_ymphadenopathy
 * @property string $gpe_if_diarrhoea
 * @property string $se_respitary
 * @property string $se_cardio_vascular
 * @property string $se_abdominal
 * @property string $se_central_nervous
 * @property string $ir_Hb
 * @property string $ir_leukocyte_count
 * @property string $ir_blood_glucose
 * @property string $ir_blood_culture
 * @property string $ir_urine_routine
 * @property string $ir_urine_cs
 * @property string $ir_chest_xray
 * @property string $ir_monthoux_test
 * @property string $ci_malnutritionutrition
 * @property string $ci_diagnosi
 * @property string $m_domiciliaty
 * @property string $m_medical
 * @property string $m_Nutritional
 * @property string $r_higher_facility
 * @property string $fuw1
 * @property string $fuw2
 * @property string $fuw3
 * @property string $fuw4
 * @property string $fum2
 * @property string $fum4
 * @property string $ep_cereals
 * @property string $ep_pulses
 * @property string $ep_oilseeds
 * @property string $ep_milk_products
 * @property string $ep_fruits
 * @property string $ep_coloured_vegetable
 * @property string $ep_other_vegetables
 * @property string $ep_oils_fat
 * @property string $ep_egg
 * @property string $ep_fleshy_foods
 * @property string $ep_sugar
 * @property string $ep_others
 * @property string $dh_like
 * @property string $dh_dislike
 * @property string $bf_put_to_breast
 * @property string $bf_Breast_fed_up_to
 * @property string $bf_introduction_of_food_at
 * @property string $mp_m_menu
 * @property string $mp_m_ingredients
 * @property string $mp_m_quantity
 * @property string $mp_m_time
 * @property string $mp_bf_menu
 * @property string $mp_bf_ingredients
 * @property string $mp_bf_quantity
 * @property string $mp_bf_time
 * @property string $mp_l_menu
 * @property string $mp_l_ingredients
 * @property string $mp_l_quantity
 * @property string $mp_l_time
 * @property string $mp_s_menu
 * @property string $mp_s_ingredients
 * @property string $mp_s_quantity
 * @property string $mp_s_time
 * @property string $mp_d_menu
 * @property string $mp_d_ingredients
 * @property string $mp_d_quantity
 * @property string $mp_d_time
 * @property string $mp_o_menu
 * @property string $mp_o_ingredients
 * @property string $mp_o_quantity
 * @property string $mp_o_time
 * @property string $cre_biscuits
 * @property string $cre_khara_mixture
 * @property string $cre_bread
 * @property string $cre_chocolates
 * @property string $cre_chips
 * @property string $cre_soft_drinks
 * @property string $cre_other
 * @property string $sq_aitamin_a
 * @property string $sq_iron_n_folic_acid
 * @property string $sq_b_complex
 * @property string $created_by
 * @property string $last_edited_by
 * @property string $create_at
 * @property string $last_edited_at
 *
 * The followings are the available model relations:
 * @property MdnaChildAnthropometryTbl[] $mdnaChildAnthropometryTbls
 * @property MdnaChildLabTbl[] $mdnaChildLabTbls
 */
class MdnaChildMdl extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return MdnaChildMdl the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'mdna_child_tbl';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        $search_lab = "hgm_hb,  hgm_mcv,  hgm_rbc,  hgm_mch,  hgm_pcv,  hgm_mchc,  hgm_esr_mm,  hgm_bleeding_time,  hgm_clotting_time,  hgm_platelet_count,  hgm_dc_wbc,  hgm_dc_neutrophils,  hgm_dc_eosinophils,  hgm_dc_basophills, hgm_dc_lymphocytes, gm_dc_monocytes, hgm_dc_aec,  hgm_dc_retieulocyte,  hgm_dc_blast_cells,  hgm_dc_promyelocyte,  hgm_dc_myelocytes,  hgm_dc_metamyelocytes,  hgm_dc_stabforms,  hgm_dc_rdw,  hgn_sp_albumin,  hgn_sp_globulin,  hgn_sp_ag_ratio,  ps_rbc,  ps_wbc,  ps_platelets,  ps_impression,  lab_urine_profile,  lab_bor  ";
        $search_ant = "weight, height, muac";
        return array(
            array('taluk_code, name, phc_name, dob, sex', 'required'),
            array('age, fi_size, fi_daily_income, fi_no_sibling, fi_no_brother, fi_no_sister, gpe_lymphadenopathy', 'numerical', 'integerOnly' => true),
            array('taluk_code, sr_no_wnc, caste, district, talluka, ph_no, gpe_mouth_glossitis, gpe_pallor_some_sever, gpe_if_diarrhoea, se_respitary, se_cardio_vascular, se_abdominal, se_central_nervous, ir_Hb, ir_leukocyte_count, ir_blood_glucose, ir_blood_culture, ir_urine_routine, ir_urine_cs, ir_chest_xray, ir_monthoux_test, bf_Breast_fed_up_to, bf_introduction_of_food_at', 'length', 'max' => 20),
            array('name, phc_name, street, landmark, name_of_anganwadi, name_of_AWW, fi_m_name, fi_m_profession, fi_f_name, fi_f_profession, dh_other_milk, gpe_desc_hair_change, gpe_desc_skin_change, gpe_desc_vit_a_def, gpe_desc_ear_discharge, gpe_desc_ymphadenopathy, ci_malnutritionutrition, m_domiciliaty, m_medical, m_Nutritional, created_by, last_edited_by', 'length', 'max' => 50),
            array('sex, sam_no, dh_age_of_comp, dh_no_of_feeds, gpe_heart_rate, gpe_respiratory_rate, gpe_bl_grade, gpe_alert_Irritable_lethargic, ep_cereals, ep_pulses, ep_oilseeds, ep_milk_products, ep_fruits, ep_coloured_vegetable, ep_other_vegetables, ep_oils_fat, ep_egg, ep_fleshy_foods, ep_sugar, ep_others, mp_m_time, mp_bf_quantity, mp_bf_time, mp_l_quantity, mp_l_time, mp_s_quantity, mp_s_time, mp_d_quantity, mp_d_time, mp_o_quantity, mp_o_time, cre_biscuits, cre_khara_mixture, cre_bread, cre_chocolates, cre_chips, cre_soft_drinks, cre_other, sq_aitamin_a, sq_iron_n_folic_acid, sq_b_complex', 'length', 'max' => 10),
            array('fi_m_education, fi_f_education, ci_diagnosi, r_higher_facility, fuw1, fuw2, fuw3, fuw4, fum2, fum4, mp_m_menu, mp_m_ingredients, mp_m_quantity, mp_bf_menu, mp_bf_ingredients, mp_l_menu, mp_l_ingredients, mp_s_menu, mp_s_ingredients, mp_d_menu, mp_d_ingredients, mp_o_menu, mp_o_ingredients', 'length', 'max' => 100),
            array('c_appetite, c_dairrhoea, c_vomiting, c_urinary, c_fever, c_cough, c_lethargy, c_swelling, ih_opv, ih_hepb, ih_bcg, ih_opv123, ih_dpt123, ih_hepb123, ih_mis_vita, ih_dpt_opv, ih_mis_bost, dh_breast_feeds, dh_other, dh_bottle_feeding, dh_comp_feeds, gpe_chest_indrawing, gpe_visible_severe_wasting, gpe_bl_pedal_edema, gpe_hair_changes, gpe_skin_changes, gpe_eye_signs_vit_a_def, gpe_ear_discharge, gpe_pallor', 'length', 'max' => 1),
            array('dh_like, dh_dislike', 'length', 'max' => 500),
            array('bf_put_to_breast', 'length', 'max' => 40),
            array('dor, fi_m_dob, fi_f_dob, age,      create_at, last_edited_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array("$search_lab, $search_ant, id, taluk_code, sr_no_wnc, name, phc_name, dob, age, sex, caste, street, landmark, sam_no, district, talluka, name_of_anganwadi, name_of_AWW, ph_no, dor, fi_m_name, fi_m_dob, fi_m_education, fi_m_profession, fi_f_name, fi_f_dob, fi_f_education, fi_f_profession, fi_size, fi_daily_income, fi_no_sibling, fi_no_brother, fi_no_sister, c_appetite, c_dairrhoea, c_vomiting, c_urinary, c_fever, c_cough, c_lethargy, c_swelling, ih_opv, ih_hepb, ih_bcg, ih_opv123, ih_dpt123, ih_hepb123, ih_mis_vita, ih_dpt_opv, ih_mis_bost, dh_breast_feeds, dh_other, dh_other_milk, dh_bottle_feeding, dh_comp_feeds, dh_age_of_comp, dh_no_of_feeds, gpe_heart_rate, gpe_respiratory_rate, gpe_chest_indrawing, gpe_visible_severe_wasting, gpe_bl_pedal_edema, gpe_bl_grade, gpe_alert_Irritable_lethargic, gpe_hair_changes, gpe_desc_hair_change, gpe_skin_changes, gpe_desc_skin_change, gpe_eye_signs_vit_a_def, gpe_desc_vit_a_def, gpe_ear_discharge, gpe_desc_ear_discharge, gpe_mouth_glossitis, gpe_pallor, gpe_pallor_some_sever, gpe_lymphadenopathy, gpe_desc_ymphadenopathy, gpe_if_diarrhoea, se_respitary, se_cardio_vascular, se_abdominal, se_central_nervous, ir_Hb, ir_leukocyte_count, ir_blood_glucose, ir_blood_culture, ir_urine_routine, ir_urine_cs, ir_chest_xray, ir_monthoux_test, ci_malnutritionutrition, ci_diagnosi, m_domiciliaty, m_medical, m_Nutritional, r_higher_facility, fuw1, fuw2, fuw3, fuw4, fum2, fum4, ep_cereals, ep_pulses, ep_oilseeds, ep_milk_products, ep_fruits, ep_coloured_vegetable, ep_other_vegetables, ep_oils_fat, ep_egg, ep_fleshy_foods, ep_sugar, ep_others, dh_like, dh_dislike, bf_put_to_breast, bf_Breast_fed_up_to, bf_introduction_of_food_at, mp_m_menu, mp_m_ingredients, mp_m_quantity, mp_m_time, mp_bf_menu, mp_bf_ingredients, mp_bf_quantity, mp_bf_time, mp_l_menu, mp_l_ingredients, mp_l_quantity, mp_l_time, mp_s_menu, mp_s_ingredients, mp_s_quantity, mp_s_time, mp_d_menu, mp_d_ingredients, mp_d_quantity, mp_d_time, mp_o_menu, mp_o_ingredients, mp_o_quantity, mp_o_time, cre_biscuits, cre_khara_mixture, cre_bread, cre_chocolates, cre_chips, cre_soft_drinks, cre_other, sq_aitamin_a, sq_iron_n_folic_acid, sq_b_complex, created_by, last_edited_by, create_at, last_edited_at, ", 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'mdnaChildAnthropometryTbls' => array(self::HAS_MANY, 'MdnaChildAnthropometryMdl', 'id_a'),
            'mdnaChildLabTbls' => array(self::HAS_MANY, 'MdnaChildLabTbl', 'id_a'),
            'mdnaChildPhotoTbls' => array(self::HAS_MANY, 'MdnaChildPhotoTbl', 'taluk_code'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return Yii::app()->params['childProfile'];
    }

    public $age;
    //lab search variables
    public $hgm_hb;
    public $hgm_mcv;
    public $hgm_rbc;
    public $hgm_mch;
    public $hgm_pcv;
    public $hgm_mchc;
    public $hgm_esr_mm;
    public $hgm_bleeding_time;
    public $hgm_clotting_time;
    public $hgm_platelet_count;
    public $hgm_dc_wbc;
    public $hgm_dc_neutrophils;
    public $hgm_dc_eosinophils;
    public $hgm_dc_basophills;
    public $hgm_dc_lymphocytes;
    public $hgm_dc_monocytes;
    public $hgm_dc_aec;
    public $hgm_dc_retieulocyte;
    public $hgm_dc_blast_cells;
    public $hgm_dc_promyelocyte;
    public $hgm_dc_myelocytes;
    public $hgm_dc_metamyelocytes;
    public $hgm_dc_stabforms;
    public $hgm_dc_rdw;
    public $hgn_sp_albumin;
    public $hgn_sp_globulin;
    public $hgn_sp_ag_ratio;
    public $ps_rbc;
    public $ps_wbc;
    public $ps_platelets;
    public $ps_impression;
    public $lab_urine_profile;
    public $lab_bor;
    //antropomentry search variables
    public $weight;
    public $height;
    public $muac;

    public function getAge() {
        if (!is_array($this->dob))
            return round((strtotime('now') - strtotime($this->dob)) / (31556925.9747), 1, PHP_ROUND_HALF_DOWN);
    }

    public function setAge($age) {
        $this->age = $age;
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.


        $criteria = new CDbCriteria;
        if (!Yii::app()->user->checkAccess('Authenticated')) {
            $criteria->select = '*';  // only select the 'title' column
            $criteria->condition = 'created_by=:created_by';
            $criteria->params = array(':created_by' => Yii::app()->user->name);
        }
        $criteria->with = array(
            'mdnaChildAnthropometryTbls'    => array(// this is for filtering
                'select' => false,
                'together' => true,
            ),
            'mdnaChildLabTbls' => array(// this is for filtering
                'select' => false,
                'together' => true,
            ),
        );

        //some testing going here       
        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildLabTbls.hgm_hb', $this->hgm_hb));
        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildLabTbls.hgm_mcv', $this->hgm_mcv));
        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildLabTbls.hgm_rbc', $this->hgm_rbc));
        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildLabTbls.hgm_mch', $this->hgm_mch));
        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildLabTbls.hgm_pcv', $this->hgm_pcv));
        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildLabTbls.hgm_mchc', $this->hgm_mchc));
        $criteria->compare('mdnaChildLabTbls.hgm_esr_mm', $this->hgm_esr_mm, true);
        $criteria->compare('mdnaChildLabTbls.hgm_bleeding_time', $this->hgm_bleeding_time, true);
        $criteria->compare('mdnaChildLabTbls.hgm_clotting_time', $this->hgm_clotting_time, true);
        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildLabTbls.hgm_platelet_count', $this->hgm_platelet_count));
        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildLabTbls.hgm_dc_wbc', $this->hgm_dc_wbc));
        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildLabTbls.hgm_dc_neutrophils', $this->hgm_dc_neutrophils));
        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildLabTbls.hgm_dc_eosinophils', $this->hgm_dc_eosinophils));
        $criteria->compare('mdnaChildLabTbls.hgm_dc_basophills', $this->hgm_dc_basophills, true);
        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildLabTbls.hgm_dc_neutrophils', $this->hgm_dc_lymphocytes));
        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildLabTbls.hgm_dc_eosinophils', $this->hgm_dc_monocytes));
        $criteria->compare('mdnaChildLabTbls.hgm_dc_aec', $this->hgm_dc_aec, true);
        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildLabTbls.hgm_dc_retieulocyte', $this->hgm_dc_retieulocyte));
        $criteria->compare('mdnaChildLabTbls.hgm_dc_blast_cells', $this->hgm_dc_blast_cells, true);
        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildLabTbls.hgm_dc_promyelocyte', $this->hgm_dc_promyelocyte));
        $criteria->compare('mdnaChildLabTbls.hgm_dc_myelocytes', $this->hgm_dc_myelocytes, true);
        $criteria->compare('mdnaChildLabTbls.hgm_dc_metamyelocytes', $this->hgm_dc_metamyelocytes, true);
        $criteria->compare('mdnaChildLabTbls.hgm_dc_stabforms', $this->hgm_dc_stabforms, true);
        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildLabTbls.hgm_dc_rdw', $this->hgm_dc_rdw));
        $criteria->compare('mdnaChildLabTbls.hgn_sp_albumin', $this->hgn_sp_albumin, true);
        $criteria->compare('mdnaChildLabTbls.hgn_sp_globulin', $this->hgn_sp_globulin, true);
        $criteria->compare('mdnaChildLabTbls.hgn_sp_ag_ratio', $this->hgn_sp_ag_ratio, true);
        $criteria->compare('mdnaChildLabTbls.ps_rbc', $this->ps_rbc, true);
        $criteria->compare('mdnaChildLabTbls.ps_wbc', $this->ps_wbc, true);
        $criteria->compare('mdnaChildLabTbls.ps_platelets', $this->ps_platelets, true);
        $criteria->compare('mdnaChildLabTbls.ps_impression', $this->ps_impression, true);
        $criteria->compare('mdnaChildLabTbls.lab_urine_profile', $this->lab_urine_profile, true);
        $criteria->mergeWith($this->dateRangeSearchCriteria('mdnaChildLabTbls.lab_bor', $this->lab_bor));

        if (!empty($this->hgm_hb) ||
                !empty($this->hgm_mcv) ||
                !empty($this->hgm_rbc) ||
                !empty($this->hgm_mch) ||
                !empty($this->hgm_pcv) ||
                !empty($this->hgm_mchc) ||
                !empty($this->hgm_esr_mm) ||
                !empty($this->hgm_bleeding_time) ||
                !empty($this->hgm_clotting_time) ||
                !empty($this->hgm_platelet_count) ||
                !empty($this->hgm_dc_wbc) ||
                !empty($this->hgm_dc_neutrophils) ||
                !empty($this->hgm_dc_eosinophils) ||
                !empty($this->hgm_dc_basophills) ||
                !empty($this->hgm_dc_lymphocytes) ||
                !empty($this->hgm_dc_monocytes) ||
                !empty($this->hgm_dc_aec) ||
                !empty($this->hgm_dc_retieulocyte) ||
                !empty($this->hgm_dc_blast_cells) ||
                !empty($this->hgm_dc_promyelocyte) ||
                !empty($this->hgm_dc_myelocytes) ||
                !empty($this->hgm_dc_metamyelocytes) ||
                !empty($this->hgm_dc_stabforms) ||
                !empty($this->hgm_dc_rdw) ||
                !empty($this->hgn_sp_albumin) ||
                !empty($this->hgn_sp_globulin) ||
                !empty($this->hgn_sp_ag_ratio) ||
                !empty($this->ps_rbc) ||
                !empty($this->ps_wbc) ||
                !empty($this->ps_platelets) ||
                !empty($this->ps_impression) ||
                !empty($this->lab_urine_profile) ||
                !empty($this->lab_bor)
        )
            $criteria->compare('mdnaChildLabTbls.is_active', 'Y', true);


        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildAnthropometryTbls.weight', $this->weight));
        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildAnthropometryTbls.height', $this->height));
        $criteria->mergeWith($this->valRangeSearchCriteria('mdnaChildAnthropometryTbls.muac', $this->muac));

        if (!empty($this->weight) ||
                !empty($this->height) ||
                !empty($this->muac)
        )
            $criteria->compare('mdnaChildAnthropometryTbls.is_active', 'Y', true);
        //end of testing

        $criteria->compare('id', $this->id, true);
        $criteria->compare('taluk_code', $this->taluk_code, true);
        $criteria->compare('sr_no_wnc', $this->sr_no_wnc, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('phc_name', $this->phc_name, true);
        $criteria->compare('sex', $this->sex, false);
        $criteria->mergeWith($this->dateRangeSearchCriteria('dob', $this->dob));
        $criteria->mergeWith($this->ageRangeSearchCriteria('dob', $this->age));

        $criteria->compare('caste', $this->caste, false);
        $criteria->compare('street', $this->street, true);
        $criteria->compare('landmark', $this->landmark, true);
        $criteria->compare('sam_no', $this->sam_no, true);
        $criteria->compare('district', $this->district, true);
        $criteria->compare('talluka', $this->talluka, true);
        $criteria->compare('name_of_anganwadi', $this->name_of_anganwadi, true);
        $criteria->compare('name_of_AWW', $this->name_of_AWW, true);
        $criteria->compare('ph_no', $this->ph_no, true);
        $criteria->compare('dor', $this->dor, true);
        $criteria->compare('fi_m_name', $this->fi_m_name, true);
        $criteria->compare('fi_m_dob', $this->fi_m_dob, true);
        $criteria->compare('fi_m_education', $this->fi_m_education, true);
        $criteria->compare('fi_m_profession', $this->fi_m_profession, true);
        $criteria->compare('fi_f_name', $this->fi_f_name, true);
        $criteria->compare('fi_f_dob', $this->fi_f_dob, true);
        $criteria->compare('fi_f_education', $this->fi_f_education, true);
        $criteria->compare('fi_f_profession', $this->fi_f_profession, true);
        $criteria->compare('fi_size', $this->fi_size);
        $criteria->compare('fi_daily_income', $this->fi_daily_income);
        $criteria->compare('fi_no_sibling', $this->fi_no_sibling);
        $criteria->compare('fi_no_brother', $this->fi_no_brother);
        $criteria->compare('fi_no_sister', $this->fi_no_sister);
        $criteria->compare('c_appetite', $this->c_appetite, false);
        $criteria->compare('c_dairrhoea', $this->c_dairrhoea, true);
        $criteria->compare('c_vomiting', $this->c_vomiting, true);
        $criteria->compare('c_urinary', $this->c_urinary, true);
        $criteria->compare('c_fever', $this->c_fever, true);
        $criteria->compare('c_cough', $this->c_cough, true);
        $criteria->compare('c_lethargy', $this->c_lethargy, true);
        $criteria->compare('c_swelling', $this->c_swelling, true);
        $criteria->compare('ih_opv', $this->ih_opv, true);
        $criteria->compare('ih_hepb', $this->ih_hepb, true);
        $criteria->compare('ih_bcg', $this->ih_bcg, true);
        $criteria->compare('ih_opv123', $this->ih_opv123, true);
        $criteria->compare('ih_dpt123', $this->ih_dpt123, true);
        $criteria->compare('ih_hepb123', $this->ih_hepb123, true);
        $criteria->compare('ih_mis_vita', $this->ih_mis_vita, true);
        $criteria->compare('ih_dpt_opv', $this->ih_dpt_opv, true);
        $criteria->compare('ih_mis_bost', $this->ih_mis_bost, true);
        $criteria->compare('dh_breast_feeds', $this->dh_breast_feeds, true);
        $criteria->compare('dh_other', $this->dh_other, true);
        $criteria->compare('dh_other_milk', $this->dh_other_milk, true);
        $criteria->compare('dh_bottle_feeding', $this->dh_bottle_feeding, true);
        $criteria->compare('dh_comp_feeds', $this->dh_comp_feeds, true);
        $criteria->compare('dh_age_of_comp', $this->dh_age_of_comp, true);
        $criteria->compare('dh_no_of_feeds', $this->dh_no_of_feeds, true);
        $criteria->compare('gpe_heart_rate', $this->gpe_heart_rate, true);
        $criteria->compare('gpe_respiratory_rate', $this->gpe_respiratory_rate, true);
        $criteria->compare('gpe_chest_indrawing', $this->gpe_chest_indrawing, true);
        $criteria->compare('gpe_visible_severe_wasting', $this->gpe_visible_severe_wasting, true);
        $criteria->compare('gpe_bl_pedal_edema', $this->gpe_bl_pedal_edema, true);
        $criteria->compare('gpe_bl_grade', $this->gpe_bl_grade, true);
        $criteria->compare('gpe_alert_Irritable_lethargic', $this->gpe_alert_Irritable_lethargic, true);
        $criteria->compare('gpe_hair_changes', $this->gpe_hair_changes, true);
        $criteria->compare('gpe_desc_hair_change', $this->gpe_desc_hair_change, true);
        $criteria->compare('gpe_skin_changes', $this->gpe_skin_changes, true);
        $criteria->compare('gpe_desc_skin_change', $this->gpe_desc_skin_change, true);
        $criteria->compare('gpe_eye_signs_vit_a_def', $this->gpe_eye_signs_vit_a_def, true);
        $criteria->compare('gpe_desc_vit_a_def', $this->gpe_desc_vit_a_def, true);
        $criteria->compare('gpe_ear_discharge', $this->gpe_ear_discharge, true);
        $criteria->compare('gpe_desc_ear_discharge', $this->gpe_desc_ear_discharge, true);
        $criteria->compare('gpe_mouth_glossitis', $this->gpe_mouth_glossitis, true);
        $criteria->compare('gpe_pallor', $this->gpe_pallor, true);
        $criteria->compare('gpe_pallor_some_sever', $this->gpe_pallor_some_sever, true);
        $criteria->compare('gpe_lymphadenopathy', $this->gpe_lymphadenopathy);
        $criteria->compare('gpe_desc_ymphadenopathy', $this->gpe_desc_ymphadenopathy, true);
        $criteria->compare('gpe_if_diarrhoea', $this->gpe_if_diarrhoea, false);
        $criteria->compare('se_respitary', $this->se_respitary, true);
        $criteria->compare('se_cardio_vascular', $this->se_cardio_vascular, true);
        $criteria->compare('se_abdominal', $this->se_abdominal, true);
        $criteria->compare('se_central_nervous', $this->se_central_nervous, true);
        $criteria->compare('ir_Hb', $this->ir_Hb, true);
        $criteria->compare('ir_leukocyte_count', $this->ir_leukocyte_count, true);
        $criteria->compare('ir_blood_glucose', $this->ir_blood_glucose, true);
        $criteria->compare('ir_blood_culture', $this->ir_blood_culture, true);
        $criteria->compare('ir_urine_routine', $this->ir_urine_routine, true);
        $criteria->compare('ir_urine_cs', $this->ir_urine_cs, true);
        $criteria->compare('ir_chest_xray', $this->ir_chest_xray, true);
        $criteria->compare('ir_monthoux_test', $this->ir_monthoux_test, true);
        $criteria->compare('ci_malnutritionutrition', $this->ci_malnutritionutrition, true);
        $criteria->compare('ci_diagnosi', $this->ci_diagnosi, true);
        $criteria->compare('m_domiciliaty', $this->m_domiciliaty, true);
        $criteria->compare('m_medical', $this->m_medical, true);
        $criteria->compare('m_Nutritional', $this->m_Nutritional, true);
        $criteria->compare('r_higher_facility', $this->r_higher_facility, true);
        $criteria->compare('fuw1', $this->fuw1, true);
        $criteria->compare('fuw2', $this->fuw2, true);
        $criteria->compare('fuw3', $this->fuw3, true);
        $criteria->compare('fuw4', $this->fuw4, true);
        $criteria->compare('fum2', $this->fum2, true);
        $criteria->compare('fum4', $this->fum4, true);
        $criteria->compare('ep_cereals', $this->ep_cereals, true);
        $criteria->compare('ep_pulses', $this->ep_pulses, true);
        $criteria->compare('ep_oilseeds', $this->ep_oilseeds, true);
        $criteria->compare('ep_milk_products', $this->ep_milk_products, true);
        $criteria->compare('ep_fruits', $this->ep_fruits, true);
        $criteria->compare('ep_coloured_vegetable', $this->ep_coloured_vegetable, true);
        $criteria->compare('ep_other_vegetables', $this->ep_other_vegetables, true);
        $criteria->compare('ep_oils_fat', $this->ep_oils_fat, true);
        $criteria->compare('ep_egg', $this->ep_egg, true);
        $criteria->compare('ep_fleshy_foods', $this->ep_fleshy_foods, true);
        $criteria->compare('ep_sugar', $this->ep_sugar, true);
        $criteria->compare('ep_others', $this->ep_others, true);
        $criteria->compare('dh_like', $this->dh_like, true);
        $criteria->compare('dh_dislike', $this->dh_dislike, true);
        $criteria->compare('bf_put_to_breast', $this->bf_put_to_breast, false);
        $criteria->compare('bf_Breast_fed_up_to', $this->bf_Breast_fed_up_to, true);
        $criteria->compare('bf_introduction_of_food_at', $this->bf_introduction_of_food_at, true);
        $criteria->compare('mp_m_menu', $this->mp_m_menu, true);
        $criteria->compare('mp_m_ingredients', $this->mp_m_ingredients, true);
        $criteria->compare('mp_m_quantity', $this->mp_m_quantity, true);
        $criteria->compare('mp_m_time', $this->mp_m_time, true);
        $criteria->compare('mp_bf_menu', $this->mp_bf_menu, true);
        $criteria->compare('mp_bf_ingredients', $this->mp_bf_ingredients, true);
        $criteria->compare('mp_bf_quantity', $this->mp_bf_quantity, true);
        $criteria->compare('mp_bf_time', $this->mp_bf_time, true);
        $criteria->compare('mp_l_menu', $this->mp_l_menu, true);
        $criteria->compare('mp_l_ingredients', $this->mp_l_ingredients, true);
        $criteria->compare('mp_l_quantity', $this->mp_l_quantity, true);
        $criteria->compare('mp_l_time', $this->mp_l_time, true);
        $criteria->compare('mp_s_menu', $this->mp_s_menu, true);
        $criteria->compare('mp_s_ingredients', $this->mp_s_ingredients, true);
        $criteria->compare('mp_s_quantity', $this->mp_s_quantity, true);
        $criteria->compare('mp_s_time', $this->mp_s_time, true);
        $criteria->compare('mp_d_menu', $this->mp_d_menu, true);
        $criteria->compare('mp_d_ingredients', $this->mp_d_ingredients, true);
        $criteria->compare('mp_d_quantity', $this->mp_d_quantity, true);
        $criteria->compare('mp_d_time', $this->mp_d_time, true);
        $criteria->compare('mp_o_menu', $this->mp_o_menu, true);
        $criteria->compare('mp_o_ingredients', $this->mp_o_ingredients, true);
        $criteria->compare('mp_o_quantity', $this->mp_o_quantity, true);
        $criteria->compare('mp_o_time', $this->mp_o_time, true);
        $criteria->compare('cre_biscuits', $this->cre_biscuits, true);
        $criteria->compare('cre_khara_mixture', $this->cre_khara_mixture, true);
        $criteria->compare('cre_bread', $this->cre_bread, true);
        $criteria->compare('cre_chocolates', $this->cre_chocolates, true);
        $criteria->compare('cre_chips', $this->cre_chips, true);
        $criteria->compare('cre_soft_drinks', $this->cre_soft_drinks, true);
        $criteria->compare('cre_other', $this->cre_other, true);
        $criteria->compare('sq_aitamin_a', $this->sq_aitamin_a, true);
        $criteria->compare('sq_iron_n_folic_acid', $this->sq_iron_n_folic_acid, true);
        $criteria->compare('sq_b_complex', $this->sq_b_complex, true);
        $criteria->compare('created_by', $this->created_by, true);
        $criteria->compare('last_edited_by', $this->last_edited_by, true);
        $criteria->compare('create_at', $this->create_at, true);
        $criteria->compare('last_edited_at', $this->last_edited_at, true);

        $sort = new CSort;
        $sort->attributes = array(
            'taluk_code',
            'name',
            'phc_name',
            'dob',
            'age' => array(
                'asc' => 'dob DESC',
                'desc' => 'dob ASC',
            ),
        );

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => $sort,
        ));
    }

    /**
     * Model behaviors
     */
    public function behaviors() {
        return array(
            'dateRangeSearch' => array(
                'class' => 'application.components.behaviors.EDateRangeSearchBehavior',
            ),
            'labRangeSearch' => array(
                'class' => 'application.components.behaviors.ELabRangeSearchBehavior',
            ),
        );
    }

}