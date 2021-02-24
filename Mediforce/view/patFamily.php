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
                    Family
                </h2>
                <div class="patDisp">

                    <li> Family member first name: 


                    </li>
                    <li>
                        Family member last name:
                    </li>

                    <li> Patient ID: 


                    </li><li>
                        Family member relation:
                    </li>
                    <br>
                    <br>

                    <li> Family member first name: 


                    </li>
                    <li>
                        Family member last name:
                    </li>

                    <li> Patient ID: 


                    </li><li>
                        Family member relation:
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
