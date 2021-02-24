<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="view/style.css">
        <title>
            Oakland Medical | Staff Login
        </title>
    </head>

    <body>
        <?php echo '<input type="hidden" name="location" value="';
              if (isset($_GET['location'])){
                  echo htmlspecialchars($_GET['location']);
              }
              
               echo '"/>';   
                  ?>
        <!-- logo and header -->
        <?php include 'view/header.php'; ?>
        <!-- navigation bar-->
        <?php include 'view/nav.php'; ?>


        <!--login box          -->

        <section id="patLogin">

            <div class="overlay">
                 <div class="container">
                     <h1>Staff Log-in</h1>
                    <div class="banner">
                        <form method = "POST" action="index.php">
                            <label for="uname"><b>Username</b></label>
                            <input type="text" placeholder="Enter User Id" name="user" required><br>
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="pass" required>
                            <br> <input type="hidden" name="action" value="sLogin">
                            <button type="submit">Login</button><br>
                            <input type="checkbox" name="action" value="helpMe">I can't remember my password!
                        </form>
                   </div>
                   </div>
                </div>
        </section>
        <!--footer-->
        <?php include 'view/footer.php'; ?>
    </body>

</html>
