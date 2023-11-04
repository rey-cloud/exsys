<?php 
session_start();
require $_SERVER["DOCUMENT_ROOT"] . '/expert_system/config/database.php';

if (isset($_POST['submit-forgot'])) {
    $fAnswer = $_POST['submit-forgot'];
    $email = $_SESSION['email']; 
    if (empty($fAnswer)) {
        header("Location: ../index.php?forgot-error=Secret answer is required");
    } else {
        $sql = "SELECT * FROM users WHERE email='$email' AND s_answer='$fAnswer'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($_SESSION['another-question']) {
                unset($_SESSION['another-question']);
                $_SESSION['new-acc'] = false;
                $_SESSION['existing-email'] = true;
                header("Location: ../index.php?instruction=true");
            } else {
                header("Location: ../php_tabs/view-results.php");
            }
        } else {
            header("Location: ../index.php?forgot-error=Incorrect Answer");
        }
    }
}
?>