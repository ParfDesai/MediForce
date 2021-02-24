
<!DOCTYPE html>
<!--
This is the Error Page.
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
        <?php include 'staffHeader.php';?>
        <?php include 'staffPortalNav.php'?>
        <?php 
         require_once 'model/Utility.php'; 
      
       
        ?>
        <div class="container2">
            <main class='error'>
                <h1>There was a problem...</h1>
            <img id='errorpic' src='view/images/error.jpg' alt='Practitioner with arms crossed'>
            <p><?php echo $error_message;?></p>
            <form action='index.php ' method='POST'>
                <input type='hidden' name='action' value='goBack'>
                <button name='return'>Return</button>                 
            </form>

            </main>
        </div>

            <!-- FOOTER -->
    <?php include 'view/footer.php'; ?>
    </body>
</html>


