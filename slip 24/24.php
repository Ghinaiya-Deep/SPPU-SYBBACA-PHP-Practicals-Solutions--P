<?php
$correctUsername = 'deep'; // Replace with the correct username
$correctPassword = '123456'; // Replace with the correct password

$attempts = 3;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uname = $_POST['uname'];
    $password = $_POST['password'];

    if ($uname === $correctUsername && $password === $correctPassword) {
        // Correct credentials, show the second form
        displaySecondForm();
        exit;
    } else {
        $attempts=$attempts-1;

        if ($attempts > 0) {
            echo "Invalid username or password. $attempts attempts remaining.<br>";
        } else {
            echo "You have exceeded the maximum number of attempts. Please try again later.";
            exit;
        }
    }
}


function displaySecondForm() {

    echo 'Welcome! You have successfully logged in. Second form goes here.';
}
?>
