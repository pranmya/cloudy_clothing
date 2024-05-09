
<?php 
session_start();

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    echo "Mobile Number: " . $mobile_number;

    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if(!empty($user_name) && !empty($email) && !empty($password) && !is_numeric($user_name)) {
        // Check if email is not already registered
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0) {
            echo "Email already exists!";
        } else {
            // Generate a unique user_id
            $user_id = uniqid();

            //save to database
            $query = "INSERT INTO users (user_id, user_name, email, mobile_number, password, confirm_password) VALUES ('$user_id', '$user_name', '$email', '$mobile_number', '$password', '$confirm_password')";
            if(mysqli_query($con, $query)) {
                header("Location: login.php");
                die;
            } else {
                echo "Error: " . mysqli_error($con);
            }
        }
    } else {
        echo "Please enter some valid information!";
    }
   

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <style>
        body {
            background-color: #f0f0f0; /* Cloudy background */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background: url(nature.png);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: transparent;/* White container */
            background: transparent;
            border : 2px solid rgba(255,255,255,.5);
            border-radius: 20px;
            backdrop-filter: blur(20px);
            box-shadow: black;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .input-group {
            margin-bottom: 20px;
        }
        .input-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .input-group input {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }
        .input-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        .input-group input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form  method="post">
            <div class="input-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="user_name" placeholder="Enter your full name" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="mobile_number" placeholder="Enter your phone number (10 digits)" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="input-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
            </div>
            <div class="input-group">
                <input type="submit" value="Sign Up" id="signupButton">
            </div>
        </form>
    </div>
    <script>
        document.getElementById('signupForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            var username = document.getElementById('fullname').value.trim();
            var email = document.getElementById('email').value.trim();
            var phone = document.getElementById('phone').value.trim();

            // Basic validation
            if (username === '' || email === '' || phone === '') {
                alert('Please fill out all fields.');
                return;
            }

            // Redirect to cloudy.html
            window.location.href = 'login.php';
        });
    </script>
</body>
</html>
