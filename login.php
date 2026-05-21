<?php

require_once('functions.php');

$username = $_POST['username'];
$password = $_POST['password'];

$db = connectToDb();

// Hämta användaren (om den finns)
$statement = $db->prepare("SELECT * FROM users2 WHERE username = ?");
$statement->bind_param('s', $username);
$statement->execute();
$result = $statement->get_result();
$user = $result->fetch_assoc();

// Om användaren inte finns: tillbaka till index.php
if ( ! $user) {
    header('Location: index.php');
    exit();
}

$hashedPassword = $user['password'];

// Om lösenorden inte stämmer: tillbaka till index.php
if ( ! password_verify($password, $hashedPassword)) {
    header('Location: index.php');
    exit();
}

$_SESSION['loggedIn'] = TRUE;
$_SESSION['userId'] = $user['id'];
header('Location: members.php');

?>   



