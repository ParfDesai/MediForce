<?php
require_once('model/database.php');
?>

<nav class="portalNav">
    <ul>
        <li class="greeting">
            <?php
            date_default_timezone_set('EST');

// 24-hour format of an hour without leading zeros (0 through 23)
            $hour = date('G');

            if ($hour >= 2 && $hour <= 11) {
                echo "Good Morning, ";
            } else if ($hour >= 12 && $hour <= 15) {
                echo "Good Afternoon, ";
            } else if ($hour >= 14 || $hour <= 1) {
                echo "Good Evening, ";
            }

            if ($_SESSION['patName'] == NULL) {
                $pats = Utility::getPat($uid);

                    foreach ($pats as $pat) {

                        $_SESSION['patName'] = $pat->getPatFName() . " " . $pat->getPatLName();
                    }

                    echo $_SESSION['patName'];
                }
            else {
                echo $_SESSION['patName'];
            }
            ?>
        </li>
        <li>
            <form method="POST" action="index.php">
                <button class= "logoutButton" name="action" value="logout">Log Out</button>
            </form>
        </li>
    </ul>
</nav>

