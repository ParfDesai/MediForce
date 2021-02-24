<!DOCTYPE html>
<!--
This page confirms a User's log out.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Oakland Hospital | You Are Logged Out</title>
        <link rel="stylesheet" href="view/style.css">
    </head>
    <body>
        <!-- This script prevents someone from using the back button once the user has logged out -->
        <script type="text/javascript">
       
        </script>

        <!-- logo and header -->
        <?php include 'view/header.php'; ?>
        <?php include 'view/nav.php'; ?>
        <div class="overlay">
            <div class="container">
                <?php
                if (!isset($_SESSION[session_id()])) {
                    echo "<p><h1>You are now logged out of the system.</h1></p>";
                } else {
                    echo "<p><h1>There's a problem...</h1></p>"; //Displays if something went wrong.
                }
                ?></div>
        </div>
        <!-- FOOTER -->
        <?php include 'view/footer.php'; ?>
    </body>
</html>

