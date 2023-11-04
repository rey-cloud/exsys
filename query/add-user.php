<?php

require $_SERVER["DOCUMENT_ROOT"] . '/expert_system/config/database.php';

$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, age, email, pass, s_question, s_answer) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssissis", $firstname, $lastname, $age, $email, $pass, $security, $secret);

$firstname = $_SESSION['first'];
$lastname = $_SESSION['last'];
$age = $_SESSION['age'];
$email = $_SESSION['email']; 
$pass = $_SESSION['pass-pin'];
$security = $_SESSION['security'];
$secret = $_SESSION['secret'];
$stmt->execute();


$stmt->close();
$conn->close();

?>
