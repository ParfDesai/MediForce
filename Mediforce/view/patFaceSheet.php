<!DOCTYPE html>
<!--
This will be the medical staff portal page which will allow staff to interact with 
the database of patients' medical records.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Oakland Hospital | Staff Medical Records Portal</title>
        <link rel="stylesheet" href="view/style.css">
    </head>
    <body>
        <!-- logo and header -->
        <?php include 'staffHeader.php'; ?>
        <?php include 'staffPortalNav.php' ?>
        <?php
        $patId = filter_input(INPUT_POST, 'patId');
        $startDate = filter_input(INPUT_POST, 'sDate');
        $endDate = filter_input(INPUT_POST, 'eDate');
        $fName = filter_input(INPUT_POST, 'fName');
        $lName = filter_input(INPUT_POST, 'lName');
        $bDay = filter_input(INPUT_POST, 'bday');
        $views = filter_input(INPUT_POST, 'view',
                FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
        $message = "";

        if (!empty($patId)) {
            $ps = Utility::getPatDemog($patId);
        } else if (!empty($fName) && !empty($lName) && !empty($bDay)) {
            $ps = Utility::getPatInfos($fName, $lName, $bDay);
        } else {

            $message = "No valid information found.";
            echo "<p>$message</p>";
        }
        ?>     

        <div class="container2">
            <aside class = 'staff'>
             
              <form action = 'index.php' method = 'post'>
                   <button class = 'retButton' name='action' value='return'>
                   Find New Patient
                   </button>
                   <ul class='sideDisplay'>
                       
                  
                  <li><h5><span style='font-weight: bold; text-decoration: underline; color: #8f0222'>
                                  Or Update This Patient's Medical Record</span></h5></li>
                    
                      <li> <a href='index.php?action=enterPatDemo'>Update Patient's General Information</a></li>
                      <li> <a href='index.php?action=updatePatMeds'>Add Medications</a></li>
                      <li><a href='index.php?action=enterMAR'>Add Medication Administration Record</a></li>
                      <li><a href='index.php?action=enterTAR'>Add Treatment Administration Record</a></li>
                      <li><a href="index.php?action=enterCareNote">Add CareNote</a></li>
                      <li><a href="index.php?action=enterImmuniz">Add Immunization/Vaccine</a></li>
                      <li><a href="index.php?action=enterHosp">Add a Hospitalization</a></li>
                      <li><a href="index.php?action=enterLabs">Add Lab Result</a></li>
                      <li><a href="index.php?action=enterExam">Add Examination</a></li>
                      <li><a hre='index.php?action=enterAssess'>Add Assessment</a></li>
                      <li><a href='index.php?action=updatePatIns'>Update Insurance</a></li>
                      <li><a href='index.php?action=enterDiag'>Add New Diagnosis</a></li>
                      <li><a href='index.php?action=enterAllerg'>Add New Allergy</a></li>
                      
                  </ul>   
                </form>
                
            </aside>
           <column class="queryRes1">
             
                <?php
                foreach ($ps as $p) {
                    $patId = $p->getPatId();
                    $patFName = $p->getPatFName();
                    $patLName = $p->getPatLName();
                    $patBday = $p->getPatBirthday();
                    $patAddr = $p->getPatStrAddr() . ", " . $p->getPatCity() . ", " .
                            $p->getPatState() . " " . $p->getPatZipcode();
                    $patPhone = $p->getPatPhone();
                    $patOccupation = $p->getPatOccupation();
                    $patEmail = $p->getPatEmail();
                    $patRespParName = $p->getRespParName();
                    $patRespParType = $p->getRespParType();
                    $patRespParPhone = $p->getRespParPhone();
                }
                $_SESSION['patId'] = $patId;
                ?>
                <table class="patFS">
                    <tr>
                        <td><label>Name: </label><?php echo $patFName . " " . $patLName; ?></td>
                        <td><label>Date of Birth: </label><?php echo $patBday; ?></td>
                        <td><label>Patient Id: </label><?php echo $patId; ?></td>
                    </tr>
                    <tr>
                        <td><label>Patient Phone: </label><?php echo $patPhone; ?></td>
                        <td><label>Occupation: </label><?php echo $patOccupation; ?></td>
                        <td><label>Email: </label><?php echo $patEmail; ?> </td>
                    </tr>
                    <tr>
                        <td colspan="3"><label>Address: </label><?php echo $patAddr; ?></td>
                    </tr>
                    <tr>
                        <td><label>Responsible Party: </label><?php echo $patRespParName; ?></td>
                        <td><label>Phone: </label><?php echo $patRespParPhone; ?></td>
                        <td><label>Type: </label><?php echo $patRespParType; ?></td>
                    </tr>
                </table>

                <?php
                /* Go thru the view array to see which checkboxes are checked
                 * and process the data and show it formatted accordingly.   */

                if ($views != NULL) {
                    foreach ($views as $view) {
                        if ($view == 'viewMeds') {
                            echo "<p>";
                            include 'view/viewMeds.php';
                            echo "</p>";
                        }
                        if ($view == 'viewPO') {
                            echo "<p>";
                            include 'view/viewPO.php';
                            echo "</p>";
                        }
//        if ($view == 'viewMAR') {
//            include 'view/viewMAR.php';
//        }
//        if ($view == 'viewTAR') {
//            include 'view/viewTAR.php';
//        }
//        if ($view == 'viewCN') {
//            include 'view/viewCN.php';
//        }
//        if ($view == 'viewImmun') {
//            include 'view/viewImmun.php';
//        }
//        if ($view == 'viewHosp') {
//            include 'view/viewHosp.php';
//        }
//        if ($view == 'viewLabs') {
//            include 'view/viewLabs.php';
//        }
//        if ($view == 'viewExams') {
//            include 'view/viewExams.php';
//        }
//        if ($view == 'viewAssess') {
//            include 'view/viewAssess.php';
//        }
                    }
                }
                ?>


            </column>

        </div>
        <div id="dynFooter">
           
        </div>
    </body>
</html>


