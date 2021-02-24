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
<?php include 'view/header.php'; ?>
<?php include 'view/patPortalNav.php'; ?>
    
    <div class="container2">
        <?php include 'view/patPortalLeftNav.php'; ?>
    <column class="info">
        <h2>Welcome to Your Patient Profile</h2>
        <h3>
            <p>From here you can check through your information</p>
        
            <p> Current Medical Activity will show you your current medical prescriptions and lab results.</p>
           
            <p>General Personal will show you the personal information we have on file so you can double-check we got it right.</p>
            <p> Medical History will give a comprehensive overview of all of your medical history we have on file.</p>
            <p>
            Insurance information will show what we have as your current insurance situation
            </p>
            <p>
            Family will show any people that are minors in your care or people that have signed the HIPPA release form allowing you to see their information
            </p></h3>
    </column>
        <div class="patDisp">
      </div>
    
    </div>
    <!-- FOOTER -->
    <?php include 'view/footer.php'; ?>
    </body>
</html>
