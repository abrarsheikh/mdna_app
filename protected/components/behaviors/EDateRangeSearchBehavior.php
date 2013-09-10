<?php

/**
 * This model behavior builds a date range search condition.
 */
class EDateRangeSearchBehavior extends CActiveRecordBehavior {

    /**
     * @param the default 'from' date when nothing is entered.
     */
    public $dateFromDefault = '1900-01-01';
    /**
     * @param the default 'to' date when nothing is entered.
     */
    public $dateToDefault = '2099-12-31';

    /*
     * Date range search criteria
     * public $attribute name of the date attribute
     * public $value value of the date attribute
     * @return instance of CDbCriteria for the model's search() method
     */
    public function dateRangeSearchCriteria($attribute, $value) {
        // Create a new db criteria instance
        $criteria = new CDbCriteria;
//        $value = array();
////$this->owner = $this->getOwner();
//        if ($attribute == 'age') {
//            $attribute = 'dob';
////            $value1 = $this->fromBirthdate;
//            $value2 = 6;
//            if (isset($value1)) {
//                $from = new DateTime("-$value1 years");
//                $value[0] = $from->format('Y-m-d');
//            }
//            if (isset($value2)) {
//                $to = new DateTime("-$value2 years");
//                $value[1] = $to->format('Y-m-d');
//            }
//
////            $dateFromDefault = $value[0] = date('Y-m-d',strtotime("-" . $dateFromDefault . "years", time()));
////            $dateToDefault = $value[0] = date('Y-m-d',strtotime("-" . $dateToDefault . "years", time()));
//        }
//        else
//            $value = $value1;
        // Check if attribute value is an array
        if (is_array($value)) {
            // Check if either key in the array has a value
            if (!empty($value[0]) || !empty($value[1])) {
                // Set the date 'from' variable to the first value in the array
                $dateFrom = $value[0];
                if (empty($dateFrom)) {
                    // Set the 'from' date to the default
                    $dateFrom = $this->dateFromDefault;
                }

                // Set the date 'to' variable to the second value in the array
                $dateTo = $value[1];
                if (empty($dateTo)) {
                    // Set the 'to' date to the default
                    $dateTo = $this->dateToDefault;
                }

                // Check if the 'from' date is greater than the 'to' date
                if ($dateFrom > $dateTo) {
                    // Swap the dates around
                    list($dateFrom, $dateTo) = array($dateTo, $dateFrom);
                }

                // Add a BETWEEN condition to the search criteria
                $criteria->addBetweenCondition($attribute, $dateFrom, $dateTo);
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

    public function ageRangeSearchCriteria($attribute, $value1, $value2) {
        // Create a new db criteria instance
        $criteria = new CDbCriteria;

        $value = array();
        $value[0] = $value1;
        $value[1] = $value2;

        // Check if attribute value is an array
        if (is_array($value)) {
            // Check if either key in the array has a value
            if (!empty($value[0]) || !empty($value[1])) {
                // Set the date 'from' variable to the first value in the array
                $dateFrom = date('Y-m-d', strtotime('now') - ((strtotime('now') - strtotime($value[0])) / (60 * 60 * 24 * 365.26)) * 31556926);
                if (empty($dateFrom)) {
                    // Set the 'from' date to the default
                    $dateFrom = $this->dateFromDefault;
                }

                // Set the date 'to' variable to the second value in the array
                $dateFrom = date('Y-m-d', strtotime('now') - ((strtotime('now') - strtotime($value[1])) / (60 * 60 * 24 * 365.26)) * 31556926);
                if (empty($dateTo)) {
                    // Set the 'to' date to the default
                    $dateTo = $this->dateToDefault;
                }

                // Check if the 'from' date is greater than the 'to' date
                if ($dateFrom > $dateTo) {
                    // Swap the dates around
                    list($dateFrom, $dateTo) = array($dateTo, $dateFrom);
                }

                // Add a BETWEEN condition to the search criteria
                $criteria->addBetweenCondition($attribute, $dateFrom, $dateTo);
            } else {
                // The value array is empty so set it to an empty string
                $value = '';

                // Add a compare condition to the search criteria
                $dateFrom = date('Y-m-d', strtotime('now') - ((strtotime('now') - strtotime($value)) / (60 * 60 * 24 * 365.26)) * 31556926);
            }
        } else {
            // Add a standard compare condition to the search criteria
            $dateFrom = date('Y-m-d', strtotime('now') - ((strtotime('now') - strtotime($value)) / (60 * 60 * 24 * 365.26)) * 31556926);
        }

        // Return the search criteria to merge with the model's search() method
        return $criteria;
    }

}

?>