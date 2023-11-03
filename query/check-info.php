<?php 
    session_start();
    if (isset($_POST['pass'])) {
        $pin = $_POST['pass'];
        if (empty($pin)) {
            header("Location: ../index.php?error-pin=PIN is required.");
        } elseif (!preg_match('/^[0-9]{4}$/', $pin)) {
            header("Location: ../index.php?error-pin=PIN should be a 4-digit number.");
        } else {
            $f_name = $_POST['f_name'];
            $l_name = $_POST['l_name'];
            $age = $_POST['age'];

            // Check if first name is empty
            if (empty($f_name)) {
                header("Location: ../index.php?error-first=First Name is required.");
                exit;
            } elseif (!preg_match('/^[A-Za-z.]+$/', $f_name)) {
                header("Location: ../index.php?error-first=First Name should only contain letters and dots.");
                exit;
            }

            // Check if last name is empty
            if (empty($l_name)) {
                header("Location: ../index.php?error-last=Last Name is required.");
                exit;
            } elseif (!preg_match('/^[A-Za-z.]+$/', $l_name)) {
                header("Location: ../index.php?error-last=Last Name should only contain letters and dots.");
                exit;
            }

            // Check if age is empty
            if (empty($age)) {
                header("Location: ../index.php?error-age=Age is required.");
                exit;
            }

            // Validate age
            if (!is_numeric($age)) {
                header("Location: ../index.php?error-age=Age should be a number.");
                exit;
            } elseif ($age < 0) {
                header("Location: ../index.php?error-age=Age cannot be below 0.");
                exit;
            } elseif ($age > 120) {
                header("Location: ../index.php?error-age=Age cannot exceed more than 120.");
                exit;
            }

            // If all validations pass, store data in session and proceed
            $_SESSION['new-acc'] = true;
            $_SESSION['first'] = $f_name;
            $_SESSION['last'] = $l_name;
            $_SESSION['age'] = $age;
            $_SESSION['pass-pin'] = $pin; // Storing the pin in session
            header("Location: ../index.php?instruction=true");
        }
    }
?>