<?php
                $paramsArray = array(
                    "table"=>"mdna_child_tbl",
                    "delimiter"=>",",
		    "textDelimiter"=>"\"",
                    "mode"=>1,
                    "perRequest"=>10,
                    "csvKey"=>"",
                    "tableKey"=>"",
                    "columns"=>array(
                        "id"=>1, "taluk_code"=>7, "sr_no_wnc"=>3, "name"=>4, "phc_name"=>5, "dob"=>6, "sex"=>7, "caste"=>8, "street"=>9, "landmark"=>10, "sam_no"=>11, "district"=>12, "talluka"=>13, "name_of_anganwadi"=>14, "name_of_AWW"=>15, "ph_no"=>16, "dor"=>17, "fi_m_name"=>18, "fi_m_dob"=>19, "fi_m_education"=>20, "fi_m_profession"=>21, "fi_f_name"=>22, "fi_f_dob"=>23, "fi_f_education"=>24, "fi_f_profession"=>25, "fi_size"=>26, "fi_daily_income"=>27, "fi_no_sibling"=>28, "fi_no_brother"=>29, "fi_no_sister"=>30, "a_weight"=>31, "a_height"=>32, "a_muac"=>33, "c_appetite"=>34, "c_dairrhoea"=>35, "c_vomiting"=>36, "c_urinary"=>37, "c_fever"=>38, "c_cough"=>39, "c_lethargy"=>40, "c_swelling"=>41, "ih_opv"=>42, "ih_hepb"=>43, "ih_bcg"=>44, "ih_opv123"=>45, "ih_dpt123"=>46, "ih_hepb123"=>47, "ih_mis_vita"=>48, "ih_dpt_opv"=>49, "ih_mis_bost"=>50, "dh_breast_feeds"=>51, "dh_other"=>52, "dh_other_milk"=>53, "dh_bottle_feeding"=>54, "dh_comp_feeds"=>55, "dh_age_of_comp"=>56, "dh_no_of_feeds"=>57, "gpe_heart_rate"=>58, "gpe_respiratory_rate"=>59, "gpe_chest_indrawing"=>60, "gpe_visible_severe_wasting"=>61, "gpe_bl_pedal_edema"=>62, "gpe_bl_grade"=>63, "gpe_alert_Irritable_lethargic"=>64, "gpe_hair_changes"=>65, "gpe_desc_hair_change"=>66, "gpe_skin_changes"=>67, "gpe_desc_skin_change"=>68, "gpe_eye_signs_vit_a_def"=>69, "gpe_desc_vit_a_def"=>70, "gpe_ear_discharge"=>71, "gpe_desc_ear_discharge"=>72, "gpe_mouth_glossitis"=>73, "gpe_pallor"=>74, "gpe_pallor_some_sever"=>75, "gpe_lymphadenopathy"=>76, "gpe_desc_ymphadenopathy"=>77, "gpe_if_diarrhoea"=>78, "se_respitary"=>79, "se_cardio_vascular"=>80, "se_abdominal"=>81, "se_central_nervous"=>82, "ir_Hb"=>83, "ir_leukocyte_count"=>84, "ir_blood_glucose"=>85, "ir_blood_culture"=>86, "ir_urine_routine"=>87, "ir_urine_cs"=>88, "ir_chest_xray"=>89, "ir_monthoux_test"=>90, "ci_malnutritionutrition"=>91, "ci_diagnosi"=>92, "m_domiciliaty"=>93, "m_medical"=>94, "m_Nutritional"=>95, "r_higher_facility"=>96, "fuw1"=>97, "fuw2"=>98, "fuw3"=>99, "fuw4"=>100, "fum2"=>101, "fum4"=>102, "ep_cereals"=>103, "ep_pulses"=>104, "ep_oilseeds"=>105, "ep_milk_products"=>106, "ep_fruits"=>107, "ep_coloured_vegetable"=>108, "ep_other_vegetables"=>109, "ep_oils_fat"=>110, "ep_egg"=>111, "ep_fleshy_foods"=>112, "ep_sugar"=>113, "ep_others"=>114, "dh_like"=>115, "dh_dislike"=>116, "bf_put_to_breast"=>117, "bf_Breast_fed_up_to"=>118, "bf_introduction_of_food_at"=>119, "mp_m_menu"=>120, "mp_m_ingredients"=>121, "mp_m_quantity"=>122, "mp_m_time"=>123, "mp_bf_menu"=>124, "mp_bf_ingredients"=>125, "mp_bf_quantity"=>126, "mp_bf_time"=>127, "mp_l_menu"=>128, "mp_l_ingredients"=>129, "mp_l_quantity"=>130, "mp_l_time"=>131, "mp_s_menu"=>132, "mp_s_ingredients"=>133, "mp_s_quantity"=>134, "mp_s_time"=>135, "mp_d_menu"=>136, "mp_d_ingredients"=>137, "mp_d_quantity"=>138, "mp_d_time"=>139, "mp_o_menu"=>140, "mp_o_ingredients"=>141, "mp_o_quantity"=>142, "mp_o_time"=>143, "cre_biscuits"=>144, "cre_khara_mixture"=>145, "cre_bread"=>146, "cre_chocolates"=>147, "cre_chips"=>148, "cre_soft_drinks"=>149, "cre_other"=>150, "sq_aitamin_a"=>151, "sq_iron_n_folic_acid"=>152, "sq_b_complex"=>153, "hgm_hb"=>154, "hgm_mcv"=>155, "hgm_rbc"=>156, "hgm_mch"=>157, "hgm_pcv"=>158, "hgm_mchc"=>159, "hgm_esr_mm"=>160, "hgm_bleeding_time"=>161, "hgm_clotting_time"=>162, "hgm_platelet_count"=>163, "hgm_dc_wbc"=>164, "hgm_dc_neutrophils"=>165, "hgm_dc_eosinophils"=>166, "hgm_dc_basophills"=>167, "hgm_dc_lymphocytes"=>168, "hgm_dc_monocytes"=>169, "hgm_dc_aec"=>170, "hgm_dc_retieulocyte"=>171, "hgm_dc_blast_cells"=>172, "hgm_dc_promyelocyte"=>173, "hgm_dc_myelocytes"=>174, "hgm_dc_metamyelocytes"=>175, "hgm_dc_stabforms"=>176, "hgm_dc_rdw"=>177, "hgn_sp_albumin"=>178, "hgn_sp_globulin"=>179, "hgn_sp_ag_ratio"=>180, "ps_rbc"=>181, "ps_wbc"=>182, "ps_platelets"=>183, "lab_urine_profile"=>184, "lab_bor"=>185, 
                    ),
                );
            ?>