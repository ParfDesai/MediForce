
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
        <?php include 'staffPortalNav.php'; ?>
        <!-- Container2 div is the middle container holding the form contents -->
        <div class="container2">
            <form action='index.php' method="POST">
            <!-- Start column staff: the far left column on this page that holds the search items of the form.  -->
            <column class="staff">
                <h3>2 Ways to Search</h3>
                    <p><label for='searchId'>Search by patient id: </label><!-- Start search by patId -->
                        <input type='text' name='patId'>
                       
                    </p><!-- END search by patId-->
                <br>
                <!-- Start search by name & DOB -->
                <p><label for='searchFName'>Search by name & birthday  (all 3 fields required):</label><br>
                        <em>First name</em><input type='text' name='fName'>
                        <em>Last name</em><input type='text' name='lName'>
                        <em>Patient birthday</em><input type='date' name='bday'>
                        
                    </p><!--End search by name & DOB -->
            </column><!--column staff end-->
            <column class="queryRes1"><!-- START column queryRes1: offers choices of items to view. Right section on page. -->
                <h3>What would you like to view?</h3>
                <p>You will see the Patient's general information by doing a search.</p>
                <p>If you need to see something else, choose what you need to view <strong><em><span style="text-decoration: underline">before</span></em></strong> running your patient search.</p>
                <p>You can choose as many of these as you need to see. You can modify the patient's record on the next page.</p><br>
<!--                <p class='warning'><em>Warning:</em> If no date range filter is set, your search will return all information in a category available for this patient.</p>-->
                <p><span style='text-decoration: underline; color: #00466c; font-weight: bolder;'>Filter Date Range:</span> From <input type='date'name='sDate'> To <input type='date'name='eDate'>&nbsp; 
                   
                    <button class='portalButton' name='search'>Search</button></p>
                    <table id='staffChoices'>
                        <tr>
                            <td><input type='checkbox' name='view[]' value='viewMeds' >See Medications</td>
                            <td><input type='checkbox' name='view[]' value='viewPO' >See Physicians' Orders</td>
                        </tr>
                        <tr>
                            <td><input type='checkbox' name='view[]' value='viewMAR'>See Medication Administration Records</td>
                            <td><input type='checkbox' name='view[]' value='viewTAR'>See Treatment Administration Records</td>
                        </tr>
                        <tr>
                            <td><input type='checkbox' name='view[]' value='viewCN'>See Care Notes</td>
                            <td><input type='checkbox' name='view[]' value='viewImmun'>See Immunizations & Vaccines</td>
                        </tr>
                        <tr>
                            <td><input type='checkbox' name='view[]' value='viewHosp'>See Hospitalizations</td>
                            <td><input type='checkbox' name='view[]' value='viewLabs'>See Lab Results</td>
                        </tr>
                        <tr>
                            <td><input type='checkbox' name='view[]' value='viewExams'>See Examinations</td>
                            <td><input type='checkbox' name='view[]' value='viewAssess'>See Assessments</td>
                        </tr>
                        <tr>
                            <td><input type='checkbox' name='view[]' value='viewActiveIns'>See active Insurance info</td>
                            <td><input type='checkbox' name='view[]' value='viewAllIns'>See all Insurance info</td>
                        </tr>
                        <tr>
                            <td><input type='checkbox' name='view[]' value='viewDiagnoses'>See Diagnoses</td>
                            <td><input type='checkbox' name='view[]' value='viewAllergies'>See Allergies</td>
                        </tr>
                    </table>
                   </column><!--END queryRes1 COL--><input type='hidden' name='action' value='search'>
            </form>
        </div>
        <!-- FOOTER -->
        <?php include 'view/footer.php'; ?>
    </body>
</html>
