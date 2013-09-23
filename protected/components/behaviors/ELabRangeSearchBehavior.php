<?php

/**
 * This model behavior builds a date range search condition.
 */
class ELabRangeSearchBehavior extends CActiveRecordBehavior {

    /**
     * @param the default 'from' date when nothing is entered.
     */
    public $hbFromDefault = 0.0;

    /**
     * @param the default 'to' date when nothing is entered.
     */
    public $hbToDefault = 100.00;

    /*
     * Date range search criteria
     * public $attribute name of the date attribute
     * public $value value of the date attribute
     * @return instance of CDbCriteria for the model's search() method
     */

    public function valRangeSearchCriteria($attribute, $value) {
        // Create a new db criteria instance
        $criteria = new CDbCriteria;
        // Check if attribute value is an array
        if (is_array($value)) {
            // Check if either key in the array has a value
            if (!empty($value[0]) || !empty($value[1])) {
                // Set the date 'from' variable to the first value in the array
                $hbFrom = $value[0];
                if (empty($hbFrom)) {
                    // Set the 'from' date to the default
                    $hbFrom = $this->hbFromDefault;
                }

                // Set the date 'to' variable to the second value in the array
                $hbTo = $value[1];
                if (empty($hbTo)) {
                    // Set the 'to' date to the default
                    $hbTo = $this->hbToDefault;
                }

                // Check if the 'from' date is greater than the 'to' date
                if ($hbFrom > $hbTo) {
                    // Swap the dates around
                    list($hbFrom, $hbTo) = array($hbTo, $hbFrom);
                }

                // Add a BETWEEN condition to the search criteria
                $criteria->addBetweenCondition($attribute, $hbFrom, $hbTo);
            } else {
                // The value array is empty so set it to an empty string
                $value = '';
                // Add a compare condition to the search criteria
                $criteria->compare($attribute, $value, true);
            }
        } else {
            // Add a standard compare condition to the search criteria
            $criteria->compare($attribute, $value, true);
        }

        // Return the search criteria to merge with the model's search() method
        return $criteria;
    }   

}

?>