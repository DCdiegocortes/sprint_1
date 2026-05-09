<?php

session_start(); // start the session to store form data

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) { // check if the form data is set!!!

    $username = $_POST['username']; // get the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        if (empty($username) || empty($email) || empty($password)) {
            throw new InvalidArgumentException("All fields must be filled in.");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // email validation
        {
            throw new InvalidArgumentException("Invalid email format.");
        }
        if (strlen($password) < 8) // length
        {
            throw new InvalidArgumentException("Password must be at least 8 characters long.");
        }
    }catch (InvalidArgumentException $e) {
        echo "Error: " . $e->getMessage();
        return;
    }
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email; // store the form data in the session

    echo "Username: " . $_SESSION['username'] . "<br>";
    echo "Email: " . $_SESSION['email'] . "<br>";
    echo " Password is stored securely "; // passwords are sensitive data

}else {
    echo "Form has not been submitted";
}

?>
