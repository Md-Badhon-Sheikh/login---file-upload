<?php
if (isset($_POST['btnSubmit'])) {
    $name = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    if ($password === $confirm_password) {
        
        $file = file('loginData.txt');
        $userExists = false;

        foreach ($file as $singleData) {
            list($signupName, $storedPassword) = explode(',', trim($singleData));

            if ($name === $signupName) {
                $userExists = true;
                break;
            }
        }

        if ($userExists) {
            $msg = 'This user already exists';
        } else {
           
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $data = $name . ',' . $hashedPassword . PHP_EOL;
            file_put_contents('loginData.txt', $data, FILE_APPEND);
            session_start();
            $_SESSION['mySession'] = $name;
            header('Location: registration.php');
            exit;
        }
    } else {
        $msgPassword = 'Passwords do not match';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles/signup.css">
</head>

<body>
    <div class="signup-container">
        <form class="signup-form" action="#" method="post">
            <h2>Create an Account</h2>
            <?php
            echo isset($msgPassword) ? $msgPassword : '';
            echo isset($msg) ? $msg : '';

            ?>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
            </div>
            <button type="submit" name="btnSubmit">Sign Up</button>
            <p>Already have an account? <a href="index.php">Login here</a></p>
        </form>
    </div>
</body>

</html>