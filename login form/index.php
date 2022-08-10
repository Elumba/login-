<?php
include 'config.php'
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<div class="signup-form">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="" method="post">
                <label>email</label>
                <input type="email" name="email" required placeholder="Enter your Email" required><br>
                <label>Password</label>
                <input type="password" name="password"  required  placeholder="Enter your password" required>
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" required placeholder="comfirm your password" re>
                <input type="submit" name="submit" class="submit-btn">
                
           

            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
        <div class="status">
        </div>
    </div> 
    <?php
            if(isset($_POST['submit']))
            {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];

            if(strlen($password) < 8) {
                $error = "<p>Your password must be atleast 8 character</p>";
                    }
            elseif($password != $confirm_password) {
                    $error .= "<p>Your password do not Match</p>";
            }
            }
             ?>

   
</body>
</html>