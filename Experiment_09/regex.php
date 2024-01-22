<?php

$namePattern = "/^[a-zA-Z ]+$/";
$emailPattern = "/^[\w+\-.]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,}$/";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

if (!preg_match($namePattern, $name)) {
    $errors[] = "Please enter a valid name";
}

if (!preg_match($emailPattern, $email)) {
    $errors[] = "Please enter a valid email address";
}

if (!empty($phone) && !preg_match("/^[0-9]{10}$/", $phone)) {
    $errors[] = "Please enter a valid phone number";
}

if (empty($message)) {
    $errors[] = "Please enter a message";
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
    die();
}



?>
