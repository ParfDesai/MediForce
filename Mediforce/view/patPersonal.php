<!DOCTYPE html>
<!--
This will be the patients' portal page which will allow staff to interact with 
the database of patients' medical records.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Oakland Hospital | Patient Medical Records Portal</title>
        <link rel="stylesheet" href="view/style.css">
    </head>
    <body>
        <!-- logo and header -->
        <?php include 'view/staffHeader.php'; ?>
        <?php include 'view/patPortalNav.php'; ?>

        <div class="container2">
            <?php include 'view/patPortalLeftNav.php'; ?>
            <column class="info">
                <h2>Personal Information</h2>
                <div class="patDisp">
                    <li> Patient ID: 


                    </li>
                    <li> First name: 


                    </li>
                    <li>
                        Last name:
                    </li>
                    <li>
                        Address:
                    </li>
                    <li>
                        City: 

                    </li>
                    <li>
                        State:

                    </li>
                    <li>
                        Zip Code:
                    </li>
                    <li>
                        Phone number:


                    </li><li>      Birth Date:


                    </li>
                    <li>Occupation: 


                    </li>

                    <li>  Parent: 


                    </li>
                    <li>Parent First Name: 


                    </li>
                    <li>Parent Last Name: 


                    </li>
                    <li>Parent Phone Number: 


                    </li>


                    <li> Social Security number:

                    </li>



                </div>
            </column>
            <div class="patDisp">
            </div>

        </div>
        <!-- FOOTER -->
        <?php include 'view/footer.php'; ?>
    </body>
</html>
