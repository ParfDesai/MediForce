<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>
        Oakland Hospital | Patient Registration

    </title>
   <link rel="stylesheet" href="view/style.css">
</head>

<body>

   <!-- logo and header -->
<?php include 'view/header.php'; ?>
    <!-- navigation bar-->
<?php include 'view/nav.php'; ?>
    
        <!--login box          -->
    <div class="overlay"
    <div class="container">
     <div class="patReg"> 
         
    <h2>Personal Information</h2>
  
   <div class="patInfo">
       <form action='index.php' method="POST">
           First name:<br>
           <input type="text" name="firstname" placeholder="required" ><br>
               Last name:<br>
        <input type="text" name="lastname" placeholder="required" >
        <br>
            <br>
          Address:<br>
  <input type="text" name="address" placeholder="required" >
  <br>
            <br>
                  City:<br>
  <input type="text" name="city" placeholder="required" >
  <br>
            <br>
                   State:<br>
  <input type="text" name="state" placeholder="required" >
  <br><br>
                   Zip Code:<br>
  <input type="text" name="zip" placeholder="required" >
  <br>
            <br>
                   Phone number:<br>
  <input type="text" name="phone" placeholder="XXX/XXX/XXXX" >
  <br><br>
                   Birth Date:<br>
  <input type="text" name="birth" placeholder="MM/DD/YYYY" >
  <br><br>
                   Occupation:<br>
  <input type="text" name="Occupation" placeholder="Optional" >
  <br><br>

                    Social Security number:<br>
  <input type="text" name="ssn" placeholder="XXX/XX/XXXX" >
  <br><br>
         
  <input type="hidden" name="action" value="bePatient">         
  <input type="submit" value="Submit">
       </form>
        </div>
    </div>
    </div>
</div>
 <!--footer-->
 <?php include 'view/footer.php'; ?>
    </body>
</html>