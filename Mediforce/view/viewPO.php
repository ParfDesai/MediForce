<?php

/*  @Author: Wendi Harvey
 * This file calls the viewPO function and formats the data received from the DB.*/
$startDate = filter_input(INPUT_POST,'sDate');
$endDate = filter_input(INPUT_POST, 'eDate');
$patId = $_SESSION['patId'];
$patName = $_SESSION['patName'];
/*If filter is set for date range, present data with filter. 
  Otherwise, show all data. If there's nothing in the database
  for this category for this patient, display "NO PHYSICIAN ORDERS FOUND."*/
if($startDate != null && $endDate != null){
    $pos = PatientViewUtility::getPatPOsRange($patId,$startDate,$endDate);
    
}
else{
    $pos = PatientViewAllUtility::getPatPhysicianOrders($patId);
}

echo "<div class='view'>";


if($pos != NULL){
    
     echo "<table id='medTable'>";
     echo "<caption>Physician Orders on Record</caption>";

    foreach($pos as $po){
        $dateOrdered = $po->getPhysOrdDate();
        $orderText = $po->getPhysOrd();
        $orderBy = $po->getOrderBy();
        $dateNoted = $po->getNotedDate();
        $notedBy = $po->getNotedBy();
        
        
        echo "<tr><td><label>Date ordered: </label>$dateOrdered &nbsp;<label>Ordered by: </label>$orderBy</td></tr>";
        echo "<tr><td><label>Order: </label>$orderText</td></tr>";
        echo "<tr><td><label>Date noted: </label>$dateNoted &nbsp;<label> Noted by: </label>$notedBy </td></tr>";
        echo "<br>";
    }
} else {
    echo"<h4>Physician Orders on Record</h4><p>No physician orders were found on file for this patient.</p>";
}
echo "</div>";


