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
                <h2>
                    Medical History
                </h2>
                <div class="patDisp">

                   
                        <li>
                            Allergy 
                        </li> <li>
                            Allergy Description:
                        </li> 

                        <li>
                            Medication for Allergy
                        </li> <li>
                            Immunization:
                        </li> <li>
                            Immunization Date:
                        </li> <li>
                            Immunization Administered By:
                        </li>
                        <li>
                            Hospital Date in:
                        </li> <li>
                            Hospital Date Out:
                        </li> <li>
                            Hospital Visit Reason:
                        </li> <li>
                            Contact:
                        </li> <li>
                            Contact Phone:
                        </li> 
                        <li>
                            Lab test:
                        </li> <li>
                            Test Date:
                        </li><li>
                            Lab Result:
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
