
<?php
// Start the session
session_start();

// Check if the user is logged in
if(isset($_SESSION['user_id'])) {
    echo 'Welcome, User ID: ' . $_SESSION['user_id'];
} else {
    echo 'You are not logged in.';
}

// Simulate a login process
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the login (You would usually check against a database)
    // For simplicity, let's assume the login is successful with user_id 123
    if($username == 'demo' && $password == 'password') {
        $_SESSION['user_id'] = 123;
        echo 'Login successful. Welcome!';
    } else {
        echo 'Invalid username or password.';
    }
}

// Simulate a logout process
if(isset($_GET['logout'])) {
    // Unset all session variables
    session_unset();
    
    // Destroy the session
    session_destroy();

    echo 'You have been logged out.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Management</title>
</head>
<body>
    <h1>Session Management Example</h1>

    <?php if(!isset($_SESSION['user_id'])) { ?>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            
            <button type="submit" name="login">Login</button>
        </form>
    <?php } else { ?>
        <p><a href="?logout=true">Logout</a></p>
    <?php } ?>
</body>
</html>


