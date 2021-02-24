<?php
/**
 * This class updates patients medical records in their individual EMRs.
 *
 * @author Wendi Harvey
 */
class PatientUpdateUtility {
    
    
    function updatePatAllergy($patId){
        
        
    }
    
    function updatePatCareNote($patId){
        
        
    }
    
    function updatePatHosp($patId,$hospInDate,$hospOutDate,$hospName,$hospReason,
                           $hospContact, $hospPhone){
        global $db;
        
        $query = "INSERT INTO hospitalization( pat_id , hosp_date_in, 
                  hosp_date_out, hosp_name, hosp_reason, hosp_contact, 
                  hosp_phone) VALUES ('$patId', '$hospInDate',
                  '$hospOutDate', '$hospName', '$hospReason',
                  '$hospContact', '$hospPhone')";
        
        $statement = $db->prepare($query);
        $added = $statement->execute();
        $rowCount = $statement->rowCount();
        $statement->closeCursor();
        
        //This gets the last auto-generated hosp id from DB. This is done for testing purposes
        //ONLY and will be commented out after testing is completed.
        $hospId = $db->lastInsertedId();
        
        //creates a message that will let user know if DB table was successfully updated or not.
        $msg = "";
        
        //will be used to return a message to page to let user know if EMR was updated.
        if($added){
            $msg="$rowCount hospitalizations were successfully added to $patId medical record "
                    . "with $hospId.";
        }
        else{
            $msg="There was a problem. No hospitalizations were added to $patId medical record.";
        }
         return $msg;
    }
    
    function updatePatImmuniz($patId){
        
        
    }
    
    function updatePatLabRes($patId){
        
        
    }
    
    function updatePatMAR($patId){
        
        
    }
    
    function updatePatMeds($patId){
        
        
    }
    
    function updatePatIns($patId){
        
        
    }
    
    function updatePatPO($patId){
        
        
    }
    
    function updatePatTAR($patId){
        
        
    }
    
}
