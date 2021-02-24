<?php
/*******************************************************************************
 * This class validates log-ins, gathers staff & patient names for greetings,  *
 * and grabs general patient information for the patient facesheet.            *
 * There are also functions (triggers) for when a staff member or family member*
 * logs in in this class, so that events are logged in the database.           *
 *  None of the gathering of more in-depth patient EMR information is done here*
 ******************************************************************************/
class Utility {
    //Validates staff log-in.
    function staffLogIn($user, $pass) {
        global $db;
        $query = 'SELECT emp_id FROM employee'
                . ' WHERE sdb_user = :user AND sdb_pwd= :pass';
        $statement = $db->prepare($query);
        $statement->bindValue(':user', $user);
        $statement->bindValue(':pass', $pass);
        $statement->execute();
        $valid = ($statement->rowCount() == 1);
        $statement->closeCursor();
        return $valid;
    }
    //Validates patient log-in.
    function patLogIn($uid, $pwd) {
        global $db;
        $query = "SELECT pat_id FROM patient"
                . " WHERE pat_user_id = '$uid' AND p_p_word = '$pwd'";
        $statement = $db->prepare($query);
        $statement->execute();
        $valid = ($statement->rowCount() == 1);
        $statement->closeCursor();
        return $valid;
    }
    //Validates patient id entered in search on staff portal.
    function validPatIdInSys($patId){
        global $db;
        $query = "SELECT pat_fname, pat_lname FROM patient "
                . "WHERE pat_id = '$patId'";
        
        $statement = $db->prepare($query);
        $statement->execute();
        $valid = ($statement->rowCount() == 1);
        $statement->closeCursor();
        
        return $valid;
    }
    //Validates patient name and birthday entered in search on staff portal.
    function validPatNameDOB($fName,$lName,$bDay){
        global $db;
        
        $query = "SELECT pat_id FROM patient "
                . "WHERE pat_fname = '$fName' AND pat_lname = '$lName'"
                . " AND pat_birthday = '$bDay'";
        
        $statement = $db->prepare($query);
        $statement->execute();
        $valid = ($statement->rowCount() == 1);
        $statement->closeCursor();
        
        return $valid;
        
    }
    
    //Logs DB activities.
    function logDBActivity($user){
        
        
    }
    //Gets the employee name after log-in for greeting.
    function getEmployee($user) {
        global $db;

        $query = "SELECT * FROM employee "
                . "WHERE sdb_user = '$user'";
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        foreach ($rows as $row) {
            $emp = new Employee($row['emp_id'], $row['emp_fname'], $row['emp_lname'],
                    $row['emp_email'], $row['emp_type'], $row['sdb_pwd'],
                    $row['sdb_user']);
            $emps[] = $emp;
        }
        return $emps;
    }
    //Gets the patient name after log-in for greeting.
    function getPat($uid) {
        global $db;

        $query = "SELECT * FROM patient WHERE pat_user_id = '$uid'";
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();
        
        $pats = array();
        foreach ($rows as $row) {
            $pat = new Patient($row['pat_id'], $row['pat_fname'], $row['pat_lname'],
                    $row['pat_street_addr'], $row['pat_city'], $row['pat_state'],
                    $row['pat_zipcode'], $row['pat_phone'], $row['pat_birthday'],
                    $row['pat_occupation'], $row['resp_par_name'], $row['pat_user_id'],
                    $row['resp_par_phone'], $row['resp_par_type'],
                    $row['pat_socsec_num'], $row['pat_email'],$row['p_p_word']);
            $pats[] = $pat;
        }
        return $pats;
    }
    //Grabs patient demographic information for the patient facesheets, using pat_id.
    function getPatDemog($patId) {
    
        global $db;
    
        $query = "SELECT * FROM patient WHERE pat_id = '$patId'";
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $ps = array();
        foreach ($rows as $row) {
            $p = new Patient($row['pat_id'], $row['pat_fname'], $row['pat_lname'],
                    $row['pat_street_addr'], $row['pat_city'], $row['pat_state'],
                    $row['pat_zipcode'], $row['pat_phone'], $row['pat_birthday'],
                    $row['pat_occupation'], $row['resp_par_name'],$row['resp_par_id'],
                    $row['resp_par_phone'], $row['resp_par_type'],
                    $row['pat_socsec_num'], $row['pat_email'],$row['p_p_word']);
            
            $patName = $row['pat_fname']." ".$row['pat_lname'];
            $_SESSION['patName']= $patName;
            $ps[] = $p;
        }
        return $ps;
    }
    //Grabs patient demographic info for patient facesheets, using pat name & DOB.
    function getPatInfos($fName, $lName, $bDay) {
        global $db;

        $query = "SELECT * FROM patient WHERE pat_fname = '$fName' "
                . "AND pat_lname = '$lName' "
                . "AND pat_birthday = '$bDay'";
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $ps = array();
        foreach ($rows as $row) {
            $patInfo = new Patient($row['pat_id'], $row['pat_fname'], $row['pat_lname'],
                    $row['pat_street_addr'], $row['pat_city'], $row['pat_state'],
                    $row['pat_zipcode'], $row['pat_phone'], $row['pat_birthday'],
                    $row['pat_occupation'], $row['resp_par_name'], $row['pat_user_id'],
                    $row['resp_par_phone'], $row['resp_par_type'],
                    $row['pat_socsec_num'], $row['pat_email'], $row['p_p_word']);
            
            $ps[] = $patInfo;
        }
        return $ps;
    }

}
