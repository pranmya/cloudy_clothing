<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);

?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>HOME PAGE</h1>

	<br>
	WELCOME, <?php echo $user_data['user_name']; ?>
	</body>
</html> -->
	<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloudy Clothing</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff; /* Sunny Sky Blue */
            margin: 0;
            padding: 0;
        }

        header {
            text-align: left;
            padding: 20px;
            background-color: #87ceeb; /* Sky Blue */
        }

        h1 {
            font-family: 'Pacifico', cursive; /* Different font for Cloudy Clothing */
            margin: 0;
            font-size: 36px;
            color: #ffffff; /* White text color */
        }

        main {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            /* flex-wrap: wrap; */
        }

        section {
            width: 30%; /* Adjust the width as needed */
            margin: 20px;
            text-align: center;
        }

        .category {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .model-photo {
            border-radius: 90%;
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .swipable-item img {
        max-width: 100%;
        height: auto;
        /* Adjust the width and height as needed */
        width: 200px;
        height: 200px;
        }

    #swipable-container {
        overflow-x: auto; /* Enable horizontal scrolling */
        white-space: nowrap; /* Prevent line breaks */
        padding: 20px 0; /* Add some padding */
    }

    .swipable-item {
        display: inline-block; /* Display items in a row */
        margin-right: 10px; /* Add some space between items */
    }

    .swipable-item img {
        max-width: 100%;
        height: auto;
        width: 300px; /* Set width of each image */
        height: 300px; /* Set height of each image */
        border-radius: 10px; /* Add rounded corners */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
    }
    header {
            background-color:#87ceeb; /* White background color */
            color: #292929; /* Dark text color */
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items:center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add shadow */
        }

        .logo {
            display: inline-block;
            cursor: pointer;
        }

        .search-icon {
            display: inline-block;
            cursor: pointer;
        }
    footer {
            background-color: #292929; /* Dark background color */
            color: #fff; /* White text color */
            padding: 40px 20px;
            text-align: center;
            display: flex; /* Use flexbox for layout */
            justify-content:space-around; 
            align-items:start;
        }

        .footer-links {
            margin-bottom: 20px;
            flex-grow: 1; /* Allow links to take up remaining space */
        }

        .footer-link {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer-link:hover {
            text-decoration: underline;
        }

        .footer-title {
            color: #87ceeb; /* Sky blue color */
            font-size: 24px;
            margin-bottom: 20px;
            text-align:start; /* Align title to the left */
            padding-left: 20px; /* Add left padding for spacing */
            flex-grow: 1; /* Allow title to take up remaining space */
        }

        .app-download {
            text-align: center; /* Center align app download links */
        }

        .app-download img {
            width: 120px; /* Adjust size of app logos */
            margin-top: 20px;
            cursor: pointer; /* Change cursor to pointer on hover */
        }
        /* CSS styles for side menu */
.side-menu {
    position: fixed;
    top: 0;
    left: -250px; /* Hide the menu by default */
    width: 250px;
    height: 100%;
    background-color: #333;
    color: #fff;
    transition: left 0.3s ease; /* Add smooth transition */
}

.side-menu ul {
    list-style: none;
    padding: 0;
}

.side-menu li {
    padding: 10px;
}

.side-menu a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease; /* Add smooth color transition */
}

.side-menu a:hover {
    color: #87ceeb; /* Change color on hover */
}

</style>

</head>
<body>
    <header>
        <div class="logo" onclick="openSideMenu()">
            <!-- Your logo image here -->
            <img src="logo.png" alt="Logo" width="40" height="40">
        </div>
        <h1>Cloudy Clothing</h1>
        <div class="search-icon" onclick="openSearch()">
            <!-- Your search icon here -->
            <img src="search_icon.png" alt="Search"width="40" height="40">
        </div>
    </header>
    <!-- Side Menu -->
    <nav id="side-menu" class="side-menu">
        <ul>
            <li><a href="cloudy.html">Home</a></li>
            <li><a href="men.html">Men</a></li>
            <li><a href="women.html">Women</a></li>
            
            <!-- Add more menu items as needed -->
        </ul>
    </nav>
    <main>
        <section>
            <a href="men.html">
            <img class="model-photo" src="man_model.jpg" alt="Men's Clothing Model" width="1500" height="1500">
            </a>
            <div class="category">Men</div>
            <!-- Add more content like T-shirts, joggers, etc. -->
        </section>

        <section>
            <a href="women.html">
           
            <img class="model-photo" src="women_model.jpg" alt="Women's Clothing Model"width="1500" height="1500" >
            </a>
            <div class="category">Women</div>
            <!-- Add more content like tops, trousers, etc. -->
        </section>
        </main>
        <main>
        <div id="swipable-container">
            <div class="swipable-item">
                <img src="men_women.jpg" alt="Image 1">
            </div>
            <div class="swipable-item">
                <img src="men_women.gif" alt="Image 2">
            </div>
            <div class="swipable-item">
                <img src="men_women2.jpg" alt="Image 3">
            </div>
            <div class="swipable-item">
                <img src="men_women3.jpg" alt="Image 4">
            </div>
            <!-- Add more swipable items with images as needed -->
        </div>
    </main>
    <footer>
        <div class="footer-title">Cloudy Clothing</div>
        <div class="footer-content">
            <p> </p>
            <p>Customer Service: support@cloudyclothing.com</p>
            <p>Connect with us: Facebook | Instagram | Twitter</p>
            <p>About Company:</p>
            <p>     About Us  AND
                We're Hiring AND
                Terms & Conditions AND
                Privacy Policy AND
                Blog</p>
            <p>Features:</p> 
            <p>15 Days return policy*
                         Cash on delivery*
            </p>
            <p>Secure Payment Methods: Visa, Mastercard, PayPal</p>
        </div>
        <div class="app-download">
            <a href="#" id="play-store-link"><img src="play_store_logo.png" alt="Download from Play Store"></a>
            <a href="#" id="app-store-link"><img src="app_store_logo.png" alt="Download from App Store" width="100" height="80"></a>
        </div>
    </footer>
    <script>
        function openSideMenu() {
            // Add logic to open side menu here
            var sideMenu = document.getElementById('side-menu');
    if (sideMenu.style.left === '0px') {
        sideMenu.style.left = '-250px'; // Hide the menu
    } else {
        sideMenu.style.left = '0px'; // Show the menu
    }
            // alert('Opening side menu');
        }

        function openSearch() {
            // Add logic to open search here
            alert('Opening search');
        }

        // Function to handle clicks on the Play Store logo
        document.getElementById('play-store-link').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default action (opening link)
            // Add your logic here, for example, open the Play Store link in a new tab
            window.open('https://play.google.com/store', '_blank');
        });

        // Function to handle clicks on the App Store logo
        document.getElementById('app-store-link').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default action (opening link)
            // Add your logic here, for example, open the App Store link in a new tab
            window.open('https://www.apple.com/app-store/', '_blank');
        });
    </script>
    
</body>
</html>
