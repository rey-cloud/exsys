<?php
session_start();
if (isset($_POST['Yes'])) {
    header("Location: ../php_tabs/questions.php");
  } else if (isset($_POST['No'])) {
    if(isset($_SESSION['existing-email'])) {
      unset($_SESSION['existing-email']);
      header("Location: ../index.php?existing-user=true");
    } else {
      header("Location: ../index.php?new-user=true");
    }
  }
?>