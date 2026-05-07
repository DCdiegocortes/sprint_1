<?php
session_start(); // start the session to store form data

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) { // check if the form data is set

    $username = $_POST['username']; // get the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email; // store the form data in the session
    
    echo "Username: " . $_SESSION['username'] . "<br>";
    echo "Email: " . $_SESSION['email'] . "<br>";
    echo " Password is stored securely "; // passwords are sensitive data
}
else {
    echo "Please fill in all fields.";
}
?>
