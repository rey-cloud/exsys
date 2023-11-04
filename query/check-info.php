<?php 
    session_start();
    if (isset($_POST['pass'])) {
        $pin = $_POST['pass'];
        $_SESSION['first'] = $_POST['f_name'];
        $_SESSION['last'] = $_POST['l_name'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['pass-pin'] = $pin;

        $_SESSION['security'] = $_POST['security'];
        $_SESSION['secret'] = $_POST['secret'];
        

        if (empty($pin)) {
            header("Location: ../index.php?error-pin=PIN is required.");
        } elseif (!preg_match('/^[0-9]{4}$/', $pin)) {
            unset($_SESSION['pass-pin']);
            header("Location: ../index.php?error-pin=PIN should be a 4-digit number.");
        } else {
            $f_name = $_SESSION['first'];
            $l_name = $_SESSION['last'];
            $age = $_SESSION['age'];
            $security =  $_SESSION['security'];
            $secret = $_SESSION['secret'];

            // Check if first name is empty
            if (empty($f_name)) {
                header("Location: ../index.php?error-first=First Name is required.");
                exit;
            } elseif (!preg_match('/^[A-Za-z.]+$/', $f_name)) {
                unset($_SESSION['first']);
                header("Location: ../index.php?error-first=First Name should only contain letters and dots.");
                exit;
            }

            // Check if last name is empty
            if (empty($l_name)) {
                header("Location: ../index.php?error-last=Last Name is required.");
                exit;
            } elseif (!preg_match('/^[A-Za-z.]+$/', $l_name)) {
                unset($_SESSION['last']);
                header("Location: ../index.php?error-last=Last Name should only contain letters and dots.");
                exit;
            }

            // Check if age is empty
            if (empty($age)) {
                unset($_SESSION['age']);
                header("Location: ../index.php?error-age=Age is required.");
                exit;
            }

            // Validate age
            if (!is_numeric($age)) {
                unset($_SESSION['age']);
                header("Location: ../index.php?error-age=Age should be a number.");
                exit;
            } elseif ($age < 0) {
                unset($_SESSION['age']);
                header("Location: ../index.php?error-age=Age cannot be below 0.");
                exit;
            } elseif ($age > 120) {
                unset($_SESSION['age']);
                header("Location: ../index.php?error-age=Age cannot exceed more than 120.");
                exit;
            }

            // Check if Security Question is empty
            if ($security == "Select Option") {
                header("Location: ../index.php?error-security=Security Question is required.");
                exit;
            }

            if (empty($secret)) {
                header("Location: ../index.php?error-secret=Secret answer is required.");
                exit;
            }

            // If all validations pass, store data in session and proceed
            $_SESSION['new-acc'] = true; // Storing the pin in session
            header("Location: ../index.php?instruction=true");
        }
    }
?>