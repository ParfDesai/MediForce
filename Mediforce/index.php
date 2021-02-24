<?php

/*
 * The index.php file is the controller for this project.
 * The controller generates NO OUTPUT to the user, and does NO PROCESSING of the core data.
 * The view code does the user interface, and the model core does core data processing.
 */

// This controller is the central control area, and all requests are guided by
// the $action value.
//Session start mgmt and other necessary functions.
session_start();
require 'model/Database.php';
require 'model/Utility.php';
require 'model/PatientViewAllUtility.php';
require 'model/PatientViewRangeUtility.php';
require 'model/PatientUpdateUtility.php';
require 'model/Allergy.php';
require 'model/CareNote.php';
require 'model/Diagnoses.php';
require 'model/Employee.php';
require 'model/Examination.php';
require 'model/Hospitalization.php';
require 'model/Immunization.php';
require 'model/LabResults.php';
require 'model/MedAdminRec.php';
require 'model/Patient.php';
require 'model/Medication.php';
require 'model/PhysicianOrder.php';



//Get the action to perform. Default set to POST method.
$action = filter_input(INPUT_POST, 'action');

if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}
//nav action HOME presents the homepage to the user.
if ($action == 'home') {
    include('view/home.php');
}
//Nav action ABOUT presents the about page to the user.
else if ($action == 'about') {
    include('view/about.php');
}

////////////////////////////////////////////////////////////////////////////////
//              Patient functionality section.                                //
////////////////////////////////////////////////////////////////////////////////
//Nav action PATIENT presents patient-log in to user.
else if ($action == 'patientLogIn') {
    include('view/patientLogIn.php');
}
//If the patient log in is successful, takes user to Patient Portal.
else if ($action == 'pLogIn') {

    $uid = filter_input(INPUT_POST, 'uid');
    $pwd = filter_input(INPUT_POST, 'pwd');


    if (Utility::patLogIn($uid, $pwd)) {
        //Set the Session login variable to the user id.
        $_SESSION['log-in'] = true;
        $_SESSION['patName'] = NULL;
//        $_SESSION['respParName'] = NULL;
        include('view/patientPortal.php');
    } else {
        //If the log in isn't successful, redirects user to patient log in.
        include('view/patientLogIn.php');
    }
}
else if ($action == 'patPersonal'){
    include('view/patPersonal.php');
}
else if ($action == 'patMedHistory'){
    include('view/patMedHistory.php');
}
else if ($action == 'patInsurance'){
    include('view/patInsurance.php');
}
else if ($action == 'patFamily'){
    include('view/patFamily.php');
}



///////////////////////////////////////////////////////////////////////////////
//            Staff functionality section                                    //
///////////////////////////////////////////////////////////////////////////////

/* Nav action Staff */ else if ($action == 'staffLogIn') {
    include('view/staffLogIn.php');

//Action that logs staff member in.    
} else if ($action == 'sLogin') {
    $user = filter_input(INPUT_POST, 'user');
    $pass = filter_input(INPUT_POST, 'pass');

    //Validates log-in.
    if (Utility::staffLogIn($user, $pass)) {
        //Initializing staffName and log-in session array variables.
        $_SESSION['staffName'] = NULL;
        $_SESSION['log-in'] = true;
        //If log-in is successful, show the staff portal page.
        include('view/staffPortal.php');
    }
    //If staff log-in is not successful, redirects to staff log-in page.
    else {
        include('view/staffLogIn.php');
    }
}

/* On the staff portal page, the action that happens with the search button 
  and a combination of fields filled in. */ else if ($action == 'search') {
    $patId = filter_input(INPUT_POST, 'patId');
    $fName = filter_input(INPUT_POST, 'fName');
    $lName = filter_input(INPUT_POST, 'lName');
    $bDay = filter_input(INPUT_POST, 'bday');

    //if search is being done by entering patient id...
    if (!empty($patId)) {
        //If the patient id entered is valid, then get the go to the patient record.
        if (Utility::validPatIdInSys($patId)) {
            
           
            include('view/patFaceSheet.php');
        } else {
            $error_message = "Could not find the patient ID that you requested in the database. "
                    . "Please go back and try again.";
            include('view/error.php');
            if ($action == 'goBack') {
                if ($_SESSION['log-in']) {
                    include 'view/staffPortal.php';
                }
            }
        }
        //if search is being done by entering a combo of first name, last name & birthday...
    } else if (!empty($fName) && !empty($lName) && !empty($bDay)) {

        //if the information is valid in the database, then go to the patient record.
        if (Utility::validPatNameDOB($fName, $lName, $bDay)) {
            
           
            include('view/patFaceSheet.php');
            if ($action == 'goBack') {

                if ($_SESSION['log-in']) {
                    include 'view/staffPortal.php';
                }
            }
        } else {
            //if the information doesn't check out in the database:
            $error_message = "Could not find the patient name & birthday that you requested"
                    . " in the database. "
                    . "Please go back and try again.";
            include('view/error.php');
            if ($action == 'goBack') {
                if ($_SESSION['log-in']) {
                    include 'view/staffPortal.php';
                }
            }
        }
    }
}
//action that happens if user clicks the new patient search button.
else if ($action == 'return') {
    //Takes user back to the staff portal.
    $_SESSION['patId'] = null;
    $_SESSION['patName'] = null;
    
    include('view/staffPortal.php');
} else if ($action == 'error') {
    $error_message = "This patient ID could not be found in the system.";
    include('view/error.php');
} else if ($action == 'logout') {
    session_destroy();
    include('view/confirmLogout.php');  //Confirms log out to user
} else {

    include('view/staffLogIn.php');
}
?>


