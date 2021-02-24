<?php
/**
 * Description of PatientViewRangeUtility: This is the class that views a filtered
 * range of dates for different parts of a specified patient's medical record.
 *
 * @author Wendi Harvey
 */
class PatientViewRangeUtility {

    //Gets all of a patient's care notes for a specified date range.
    function getRangeCareNotes($patId, $startDate, $endDate) {

        global $db;

        $query = "SELECT care_note_date, care_note, author FROM care_note "
                . "WHERE pat_id = '$patId' AND (DATE(care_note_date) BETWEEN"
                . " '$startDate' AND '$endDate')";
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $careNotes = array();
        foreach ($rows as $row) {
            $careNote = new CareNote($row['care_note_date'],
                    $row['care_note'],
                    $row['author']);
            $careNotes[] = $careNote;
        }

        return $careNotes;
    }

    //Gets hospitalizations within a specified range of start dates for a patient.
    function getPatHospRange($patId, $startDate, $endDate) {

        global $db;

        $query = "SELECT hosp_in_date, hosp_out_date, hosp_name, hosp_reason,"
                . " hosp_contact, hosp_phone FROM hospitalization"
                . " WHERE pat_id = '$patId' AND (DATE(hosp_out_date) BETWEEN "
                . "'$startDate' AND '$endDate')";
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $hospitalizations = array();
        foreach ($rows as $row) {
            $hosp = new Hospitalization($row['hosp_in_date'], $row['hosp_out_date'],
                    $row['hosp_name'], $row['hosp_reason'],
                    $row['hosp_contact'], $row['hosp_phone']);
            $hospitalizations[] = $hosp;
        }
        return $hospitalizations;
    }

    function getRangePatImmunizations($patId, $startDate, $endDate) {
        global $db;

        $query = "SELECT immuniz_date, immuniz_name, given_by FROM immunization "
                . "WHERE pat_id = '$patId' AND (DATE(immuniz_date) BETWEEN "
                . "'$startDate' AND '$endDate')";
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $immunizations = array();
        foreach ($rows as $row) {
            $imm = new Immunization($row['immuniz_date'],
                    $row['immuniz_name'],
                    $row['given_by']);
            $immunizations[] = $imm;
        }
        return $immunizations;
    }

    //Gets lab results within the filtered date range for specified patient.
    function getPatLabResultsRange($patId, $startDate, $endDate) {
        global $db;

        $query = "SELECT lab_res_date, lab_res_data FROM lab_results "
                . "WHERE pat_id = '$patId' AND (DATE(lab_res_date) BETWEEN "
                . "'$startDate' AND '$endDate')";
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $labResults = array();
        foreach ($rows as $row) {
            $labRes = new LabResults($row['lab_res_date'], $row['lab_res_data']);
            $labResults[] = $labRes;
        }
        return $labResults;
    }

    //Gets medications within a specified date range for a patient.
    function getPatMedsRange($patId, $startDate, $endDate) {
        global $db;

        $query = "SELECT *"
                . " FROM `medication` WHERE `pat_id` = '$patId' "
                . "AND (DATE(`med_date`) BETWEEN '$startDate' AND '$endDate')";

        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $meds = array();
        foreach ($rows as $row) {
            $med = new Medication($row['pat_id'],$row['med_id'],
                                  $row['med_name'],$row['med_date'], 
                                  $row['med_reason'],$row['prescription_id']);

            $meds[] = $med;
        }
        return $meds;
    }

    //Gets a patient's MARs within a specified date range.
    function getParMARsRange($patId, $startDate, $endDate) {
        global $db;

        $query = "SELECT mar_date, mar_med, emp_id FROM med_adm_rec WHERE pat_id = '$patId'"
                . " AND (DATE(mar_date) BETWEEN '$startDate' AND '$endDate')";

        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $mars = array();
        foreach ($rows as $row) {
            $mar = new MedAdminRec($row['mar_date'], $row['mar_med'], $row['emp_id']);
            $mars[] = $mar;
        }
        return $mars;
    }


//Gets the patient's physician order from a date range.
    function getPatPOsRange($patId, $startDate, $endDate) {

        global $db;

        $query = "SELECT phys_ord_date,phys_ord,ordered_by,noted_by,noted_date"
                . " FROM medication WHERE pat_id = '$patId' "
                . "AND (DATE(phys_ord_date) BETWEEN '$startDate' AND '$endDate')";

        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $pos = array();
        foreach ($rows as $row) {
            $po = new PhysicianOrder($row['phys_ord_date'], $row['phys_ord'],
                    $row['ordered_by'], $row['noted_by'],
                    $row['noted_date']);

            $pos[] = $po;
        }
        return $pos;
    }
}
