<?php
session_start();
require $_SERVER["DOCUMENT_ROOT"] . '/expert_system/config/database.php';

if (isset($_POST['email'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);

    if (empty($email)) {
      $error_message = "Email is required";
      header("Location: ../index.php?error=" . urlencode($error_message));
    } else {
        $_SESSION['email'] = $email;
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            header("Location: ../index.php?existing-user=true");
        } else {
            header("Location: ../index.php?new-user=true");
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}
?>