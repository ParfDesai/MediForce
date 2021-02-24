<?php
$user = filter_input(INPUT_POST, 'user');
$pass = filter_input(INPUT_POST, 'pass');
$action = filter_input(INPUT_POST, 'action');
?>

<nav class="portalNav">
    <ul>
        <li class="greeting">
            <?php
            date_default_timezone_set('EST');

// 24-hour format of an hour without leading zeros (0 through 23)
            $hour = date('G');

            if ($hour >= 3 && $hour <= 11) {
                echo "Good Morning, ";
            } else if ($hour >= 12 && $hour <= 15) {
                echo "Good Afternoon, ";
            } else if ($hour >= 14 || $hour < 3) {
                echo "Good Evening, ";
            }


            if ($_SESSION['staffName'] == NULL) {
                $emps = Utility::getEmployee($user);

                foreach ($emps as $emp) {
                    if ($emp->getEmpType() == "MD" || $emp->getEmpType() == "OD" || $emp->getEmpType() == "PhD") {
                        $_SESSION['staffName'] = "Dr. " . $emp->getEmpFname() . " " . $emp->getEmpLname() . ", " . $emp->getEmpType();
                    } else {
                        $_SESSION['staffName'] = $emp->getEmpFname() . " " . $emp->getEmpLname() . ", " . $emp->getEmpType();
                    }
                    echo $_SESSION['staffName'];
                    echo "</li>";
                }
            } else {
                echo $_SESSION['staffName'] . "</li>";
               
                                  
            }
            ?>
        <li class ='logout'>
            <form method="POST" action="index.php">
                <button class = "logoutButton" name="action" value="logout">Log Out</button>
            </form>
        </li>
    </ul>
</nav>

