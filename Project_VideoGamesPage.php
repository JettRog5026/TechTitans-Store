<?php
	$servername = "localhost"; // Change this to your database server name if it's not localhost
	$username = "root"; // Change this to your database username
	$password = ""; // Change this to your database password
	$database = "techtitans"; // Change this to your database name

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
	$conn->set_charset("utf8");
	// Check connection
	if (!$conn) 
	{
		die("Connection failed: " . mysqli_connect_error());
	}
?>
<!--
    TechTitans Store Video Games Page
    Date last modified: 4/13/2024
    Who last modified: Morgan Leger
-->

<!DOCTYPE html>
<html lang="en">

    <header>
        <!-- Author of webpage-->
		<meta name = "author" content = "Morgan Leger"/>
		
		<!-- Description of webpage-->
		<meta name = "description" content = "About Tech Titan Morgan Leger"/>
		
		<!-- Keywords of webpage-->
		<meta name = "keywords" content = "HTML, Web Programming"/>
		
		<!-- Charachter set of webpage-->
		<meta charset = "UTF-8"/>
		
		<!--Link to external stylesheet -->
		<link href = "style.css" type = "text/css" rel = "stylesheet">
		<style>
			#listingForm 
			{
				display: none;
			}
		</style>
    </header>

     <body>

        <div class="header">
            <img src="Images/McNeeseLogo.png" alt="McNeese" id="mcneeselogotop"> <!--Mcneese logo-->

            <!--Search bar-->
            <div class="search">
                <input type="text" class="searchInput" placeholder="Enter Product Name or Brand">
            </div>

            <!--Sign in button-->
            <a href="" id="signin">
                <div class="signinbutton">
                    <button>Sign In
                        <img id="signinImage" src="Images/SignIn.png" alt="Sign In">
                    </button>
                </div>
            </a>

            <!--Cart button-->
            <a href="" id="cart">
                <div class="cartbutton">
                    <button>Cart
                        <img id="cartImage" src="Images/ShoppingCart.png" alt="Shopping Cart">
                    </button>
                </div>
            </a>
			<a href="Listing.php" target ='_self'>
				<button onclick ="showForm()">Listings</button>
			</a>
        </div>

        <!--Navigation bar-->
        <nav>
            <ul class="navbar">
                <li><a href="Project_HomePage.html" target ='_self'>Home</a></li> 				<!--When clicked, shows the Home page-->
                <li><a href="Project_ComicBooksPage.html" target ='_self'>Comic Books</a></li> 	<!--When clicked, shows the Comic Boks page-->
                <li><a href="Project_VideoGamesPage.php" target ='_self'>Video Games</a></li> 	<!--When clicked, shows the Games page-->
				<li><a href="Project_ContactUsPage.html" target ='_self'>Contact Us</a></li> 	<!--When clicked, shows the Contact Us page-->
                <li><a href="Project_AboutUsPage.html" target ='_self'>About Us</a></li> 		<!--When clicked, shows the About Us page-->
            </ul>
        </nav>
		<div class = "VG_Window" sytle="display: none;">
			<?php
				$sql = "SELECT * FROM videogames"; // Replace 'your_table' with the actual name of your table
				$result = $conn->query($sql);
					if ($result->num_rows > 0) 
					{
						echo '<div id="Comic Books" sytle="display: none;">';
							global $conn;
							echo '<div class="Hotcontainer">';
							while($row = $result->fetch_assoc()) 
							{
								if($row["genre"] == "MMO-RPG")
								{		
									echo '<h2>MMO-RPG</h2>';
									echo '<div class="book">';
										echo '<h2>'.$row["name"].'</h2>';
										echo '<h4>'.$row["developer"].'</h4>';
										echo '<img src="'.$row["picturepath"].'" alt="'.$row["name"].'>';
										echo '<p>'.$row["price"].'</p>';
										echo '<button class="add-to-cart-btn:Active">Add to Cart</button>';
									echo '</div>';
								}
								elseif($row["genre"] == "FPS")
								{
									echo '<h2>FPS</h2>';
									echo '<div class="book">';
										echo '<h2>'.$row["name"].'</h2>';
										echo '<h4>'.$row["developer"].'</h4>';
										echo '<img src="'.$row["picturepath"].'" alt="'.$row["name"].'>';
										echo '<p>Price: $'.$row["price"].'</p>';
										echo '<button class="add-to-cart-btn">Add to Cart</button>';
									echo '</div>';
								}
								elseif($row["genre"] == "INDIE")
								{
									echo '<div class="book">';
										echo '<h2>'.$row["name"].'</h2>';
										echo '<h4>'.$row["developer"].'</h4>';
										echo '<img src="'.$row["picturepath"].'" alt="'.$row["name"].'>';
										echo '<p>Price: $'.$row["price"].'</p>';
										echo '<button class="add-to-cart-btn">Add to Cart</button>';
									echo '</div>';
								}
								elseif($row["genre"] == "SPORTS")
								{
									echo '<div class="book">';
										echo '<h2>'.$row["name"].'</h2>';
										echo '<h4>'.$row["developer"].'</h4>';
										echo '<img src="'.$row["picturepath"].'" alt="'.$row["name"].'>';
										echo '<p>Price: $'.$row["price"].'</p>';
										echo '<button class="add-to-cart-btn">Edit Listing</button>';
									echo '</div>';
								}
							}
							echo '</div>';
					}	
					else 
					{
						echo "0 results";
					}
					echo '</div>';
			?>
			
			</div>
			<!--Broad View of Video Game Window-->
			<div class = "filterBar">
				<h3> Genre Surf Here!</h3>
				<button class = "filterDropDown">Filter</button>
				<div class = "filterContent">
					<ul>
						<li><button> MMO-RPG </li></button>
						<li><button> FPS </li></button>
						<li><button> INDIE's </li></button>
						<li><button> Sports </li></button>
						<li><button> .... </li></button>
					</ul>
				</div>
				<div class = "filterprice">
					<ul>
						<li><button> High-To-Low </li></button>
						<li><button> Low-To-High </li></button>
					</ul>
				</div>
			</div>
		</body>
		<footer>
	
					<img src="Images/McNeeseLogo.png" alt="McNeese" id="mcneeselogofooter"> <!--McNeese logo-->

			<div class="socialMedia">
				<!--Social media logos that bring you to the social media accounts when clicked on-->
				<ul>
					<li><a href="https://www.facebook.com/McNeeseStateU/" target="_blank"><img src="Images/facebook.png" alt="Facebook"></a></li>
					<li><a href="https://twitter.com/mcneese" target="_blank"><img src="Images/twitter.png" alt="Twitter"></a></li>
					<li><a href="https://www.youtube.com/user/McNeeseStateU" target="_blank"><img src="Images/youtube.png" alt="Youtube"></a></li>
					<li><a href="https://www.instagram.com/mcneese/" target="_blank"><img src="Images/instagram.png" alt="Instagram"></a></li>
					<li><a href="https://www.linkedin.com/school/27461/" target="_blank"><img src="Images/linkedin.png" alt="LinkedIn"></a></li>
				</ul>
			</div>

			<div class="footer">
				<!--Text that displays the McNeese bookstore hours-->
				<div class="storeHours">
					<h3>Store Hours</h3>
					<p>Monday - Thursday: 7:30 AM - 5 PM<br>Friday: 7:30 AM - 11:30 AM</p>
				</div>

				<!--Text that displays McNeese's address and phone number-->
				<div class="addressPhonenumber">
					<p>McNeese State University | 4205 Ryan St, Lake Charles, LA 70605 | 800-622-3352</p>
					<p>&copy; Copyright 2024 TechTitans Bookstore. All rights reserved.</p>
				</div>

				<!--Contact us text-->
				<div class="contactUs">
					<h3>Contact Us</h3>
					<p>Need to contact us? Please don't hesitate to use the Contact Form.</p>
				</div>
			</div>
		</footer>
		<script src="store.js" defer></script>
		
</html>
