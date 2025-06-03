<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once('config.php'); // RDS connection info

$message = "";

if (isset($_POST['login'])) {
    $uname = $_POST['username'];
    $password = $_POST['password'];

    if (empty($uname) || empty($password)) {
        $message = "You cannot leave username and password empty";
    } else {
        $sql = "SELECT * FROM user_registration WHERE username='$uname' AND is_admin = true";
        $result = mysqli_query($conn, $sql);
        $check = mysqli_fetch_assoc($result);

        if ($check && $check['password'] == $password) {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $uname;
            header("Location: admin_view.php");
            exit;
        } else {
            $message = "Username or Password incorrect or user is not admin";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/login.css"> <!-- Optional: External CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            width: 350px;
        }

        .title {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }

        .input-box {
            margin-bottom: 15px;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .input-box.button input {
            background-color: #007BFF;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }

        .input-box.button input:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="title">Admin Login</div>

            <?php if (!empty($message)) { ?>
                <div class="error-message"><?php echo $message; ?></div>
            <?php } ?>

            <div class="input-box">
                <input type="text" name="username" placeholder="Enter Your Username" required />
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="Enter Your Password" required />
            </div>

            <div class="input-box button">
                <input type="submit" name="login" value="Sign In" />
            </div>
        </form>
    </div>
</body>
</html>
