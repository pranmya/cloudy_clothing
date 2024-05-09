<?php 
session_start();

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // Read from database
        if($con) {
            // Connection successful, proceed with the query
            $query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
            $result = mysqli_query($con, $query);

            if($result) {
                if(mysqli_num_rows($result) > 0) {
                    // User found, verify password
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password) {
                        // Password matches, set session and redirect
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        exit(); // Ensure that code execution stops after the redirect
                    } else {
                        echo "Wrong username or password!";
                    }
                } else {
                    echo "Wrong username or password!";
                }
            } else {
                // Query execution failed
                echo "Error: " . mysqli_error($con);
            }
        } else {
            // Connection failed
            echo "Error: Database connection failed";
        }
    } else {
        echo "Wrong username or password!";
    }
}
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloudy-Login</title>
    <style>
        /* General styles */
        body {
            background-color: #f0f0f0; /* Cloudy background */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container styles */
        .container {
            background-color: #ffffff; /* White container */
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        /* Input group styles */
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

        /* Submit button styles */
        .input-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .input-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Signup link styles */
        .signup-link {
            margin-top: 10px;
            font-size: 14px;
        }

        .signup-link a {
            color: #007bff;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div  class="container">
        <h2>Welcome to Cloudy Clothing</h2>
        <form id="loginForm" action="cloudy.html" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="user_name"  placeholder="Enter your name" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="input-group">
                <input type="submit" value="Login">
            </div>
        </form>
        <div class="signup-link">Don't have an account? <a href="signup.php">Sign up here</a></div>
    </div>
</body>
</html> -->
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: red;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: LightGray;
		margin: auto;
		width: 500px;
		padding: 50px;
	}
        /* General styles */
        body {
            background-color: #f0f0f0; /* Cloudy background */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container styles */
        .container {
            background-color: #ffffff; /* White container */
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        /* Input group styles */
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

        /* Submit button styles */
        .input-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .input-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Signup link styles */
        .signup-link {
            margin-top: 10px;
            font-size: 14px;
        }

        .signup-link a {
            color: #007bff;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>

	<!-- <div>
		
		<form method="post">
			<div style="font-size: 30px;margin: 20px;color: red;">Login</div>
            <label for="username">Username</label>
			<input id="text" type="text" name="user_name"><br><br>
			<label for="password">Password</label>
            <input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>
            <div class="signup-link">Don't have an account? <a href="signup.php">Sign up here</a></div>
			<a href="signup.php">Signup</a><br><br>
		</form>
	</div> -->
    <div  class="container">
        <h2>Welcome to Cloudy Clothing</h2>
        <form method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="user_name"  placeholder="Enter your name" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="input-group">
                <input type="submit" value="Login">
            </div>
        </form>
        <div class="signup-link">Don't have an account? <a href="signup.php">Sign up here</a></div>
    </div>
</body>
</html>

