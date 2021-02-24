<?php

/* 
 * @Author: Wendi Harvey
 * The viewMeds page formats the data about the medications a patient takes
 * (if they take any). 
 */

$startDate = filter_input(INPUT_POST,'sDate');
$endDate = filter_input(INPUT_POST, 'eDate');
$patId = $_SESSION['patId'];
$patName = $_SESSION['patName'];
/*If filter is set for date range, present data with filter. 
  Otherwise, show all data. If there's nothing in the database
  for this category for this patient, display "NO MEDICATIONS FOUND."*/

if($startDate != null && $endDate != null){
    $meds = PatientViewRangeUtility::getPatMedsRange($patId,$startDate,$endDate);
    
}
else{
    $meds = PatientViewAllUtility::getPatMeds($patId);
}
echo "<div class='view'>";


if($meds != NULL){
    
     echo "<table id='medTable'>";
     echo "<caption>Medications on Record</caption>";
     echo "<tr>";
     echo "<th>Date Prescribed</th>";
     echo "<th>Medication</th>";
     echo "<th>Reason for Taking</th>";
     echo "<th>Prescription Id</th>";
     echo "</tr>";
    foreach($meds as $med){
        $datePrescribed = $med->getMedDate();
        $name = $med->getMedName();
        $reason = $med->getMedReason();
        $prescId = $med->getPrescId();
        
        echo "<tr>";
        echo "<td>$datePrescribed</td>";
        echo "<td>$name</td>";
        echo "<td>$reason</td>";
        echo "<td>$prescId</td>";
        echo "</tr>";
    }
} else {
    echo "<p>No medications were found on file for this patient.</p>";
}
echo "</div>";



