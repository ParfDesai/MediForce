<?php

/* * *****************************************************************************
 * The PatientViewUtility class gathers each of the components of a patient's  *
 * EMR for viewing.                                                            *
 *                                                                             *
  /****************************************************************************** */

class PatientViewAllUtility {

    //1. Gets all of a patient's allergy information from the DB.
    function getPatAllergies($patId) {

        global $db;

        $query = "SELECT pat_id, allergy_id,allergy_name, allergy_desc FROM allergy "
                . "WHERE pat_id = '$patId'";
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $allergies = array();
        foreach ($rows as $row) {
            $allergy = new Allergy($row['pat_id'],
                    $row['allergy_id'],
                    $row['allergy_name'],
                    $row['allergy_desc']);
            $allergies[] = $allergy;
        }

        return $allergies;
    }

//2. Gets all of a patient's care notes from the DB.
    function getPatCareNotes($patId) {
        global $db;

        $query = "SELECT care_note_id, care_note_date, care_note, author FROM care_note "
                . "WHERE pat_id = '$patId'";
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $careNotes = array();
        foreach ($rows as $row) {
            $careNote = new CareNote($row['care_note_id'], $row['care_note_date'],
                    $row['care_note'],
                    $row['author']);
            $careNotes[] = $careNote;
        }

        return $careNotes;
    }

//3. Gets all of patient's hospitalization info from the DB.
    function getPatHospitalizations($patId) {
        global $db;

        $query = "SELECT pat_id, hosp_id, hosp_in_date, hosp_out_date, hosp_name,"
                . " hosp_reason,"
                . " hosp_contact, hosp_phone FROM hospitalization"
                . " WHERE pat_id = '$patId'";
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $hospitalizations = array();
        foreach ($rows as $row) {
            $hosp = new Hospitalization($row['pat_id'], $row['hosp_id'],
                    $row['hosp_in_date'], $row['hosp_out_date'],
                    $row['hosp_name'], $row['hosp_reason'],
                    $row['hosp_contact'], $row['hosp_phone']);
            $hospitalizations[] = $hosp;
        }
        return $hospitalizations;
    }

//4. Gets all of a patient's immunization record from the DB.
    function getPatImmunizations($patId) {
        global $db;

        $query = "SELECT pat_id, immuniz_id, immuniz_date, "
                . "immuniz_name, given_by FROM immunization "
                . "WHERE pat_id = '$patId'";
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $immunizations = array();
        foreach ($rows as $row) {
            $imm = new Immunization($row['pat_id'], $row['immuniz_id'],
                    $row['immuniz_date'],
                    $row['immuniz_name'],
                    $row['given_by']);
            $immunizations[] = $imm;
        }
        return $immunizations;
    }

//5. Gets all of a patient's lab results from the DB.
    function getPatLabResults($patId) {
        global $db;

        $query = "SELECT lab_id,pat_id,lab_res_date, lab_res_data"
                . " FROM lab_results "
                . "WHERE pat_id = '$patId'";
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $labResults = array();
        foreach ($rows as $row) {
            $labRes = new LabResults($row['lab_id'], $row['pat_id'],
                    $row['lab_res_date'], $row['lab_res_data']);
            $labResults[] = $labRes;
        }
        return $labResults;
    }

//6. Gets information about all the meds a patient takes or has taken from the DB.
    function getPatMeds($patId) {
        global $db;

        $query = "SELECT * FROM medication WHERE pat_id = '$patId'";

        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $meds = array();
        foreach ($rows as $row) {
            $med = new Medication($row['pat_id'], $row['med_id'],
                    $row['med_name'], $row['med_date'],
                    $row['med_reason'], $row['prescription_id']);
            $meds[] = $med;
        }
        return $meds;
    }

//7. Gets all of a patient's Med Admin Record info from the DB.
    function getPatMARs($patId) {
        global $db;

        $query = "SELECT * FROM med_adm_rec"
                . " WHERE pat_id = '$patId'";

        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $mars = array();
        foreach ($rows as $row) {
            $mar = new MedAdminRec($row['pat_id'], $row['mar_id'],
                    $row['mar_date'], $row['mar_med'], $row['mar_note'],
                    $row['emp_id'], $row['emp_name'], $row['emp_title']);
            $mars[] = $mar;
        }
        return $mars;
    }

//8.Gets all patient's insurance info from the DB, active or not.
    function getPatInsurance($patId) {

        global $db;

        $query = "SELECT * FROM patient_insurance "
                . "WHERE pat_id = '$patId'";
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $ins = array();
        foreach ($rows as $row) {
            $insurance = new PatientInsurance($row['pat_ins_id'], $row['pat_id'],
                    $row['pat_ins_co'], $row['active_date'], $row['inactive_date']);

            $ins[] = $insurance;
        }
        return $ins;
    }

//9.Gets all of a patient's physician orders from the DB.
    function getPatPhysicianOrders($patId) {

        global $db;

        $query = "SELECT *"
                . " FROM physician_order WHERE pat_id = '$patId'";

        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $pos = array();
        foreach ($rows as $row) {
            $po = new PhysicianOrder($row['pat_id'], $row['phys_ord_id'],
                    $row['phys_ord_date'], $row['phys_ord'],
                    $row['ordered_by'], $row['noted_by'],
                    $row['noted_date']);

            $pos[] = $po;
        }
        return $pos;
    }

//10. Gets all of patient's treatment administration records from DB.
    function getPatTARs($patId) {
        global $db;

        $query = "SELECT * "
                . "FROM treatment_adm_rec WHERE pat_id = '$patId'";

        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $tars = array();
        foreach ($rows as $row) {
            $tar = new TreatmentAdmRec($row['pat_id'], $row['tar_id'],
                    $row['tar_date'], $row['tar_type'],
                    $row['tar_note'], $row['emp_treated_by'],
                    $row['emp_id']);

            $tars[] = $tar;
        }
    }

    //11. Get all patient assessments.
    function getAllPatAssessments($patId) {

        global $db;

        $query = "SELECT * FROM assessment WHERE pat_id = '$patId'";

        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $assessments = array();
        foreach ($rows as $row) {
            $assess = new PatAssessment($row['assess_id'],
                    $row['assess_date'], $row['assess_discipline'],
                    $row['pat_id'], $row['assess_soap'],
                    $row['emp_name'], $row['emp_id'],
                    $row['emp_title']);

            $assessments[] = $assess;
        }

        return $assessments;
    }

    //12. Get all exams
    function getAllPatExams($patId) {

        global $db;

        $query = "SELECT exam_id, exam_date, pat_id, exam_soap, emp_name,"
                . " emp_title,"
                . " emp_id FROM "
                . "examination WHERE pat_id = '$patId'";

        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $exams = array();
        foreach ($rows as $row) {

            $exam = new Examination($row['exam_id'], $row['exam_date'],
                    $row['pat_id'], $row['exam_soap'],
                    $row['emp_id'], $row['emp_name'],
                    $row['emp_title']);

            $exams[] = $exam;
        }

        return $exams;
    }

    //Get all of a patient's diagnoses.
    function getAllPatDiag($patId) {
        global $db;

        $query = "SELECT diag_id, pat_id, diag_name, diag_date, diagd_by, "
                . "diagd_by_title FROM diagnoses WHERE pat_id = '$patId'";

        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $diagnoses = array();

        foreach ($rows as $row) {
            $diag = new Diagnoses($row['diag_id'], $row['pat_id'],
                    $row['diag_name'], $row['diag_date'],
                    $row['diagd_by'], $row['diag_by_title']);

            $diagnoses[] = $diag;
        }

        return $diagnoses;
    }

}
