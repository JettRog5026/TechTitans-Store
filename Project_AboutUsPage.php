<!--
    TechTitans Store About Us Page
    Date last modified: 4/13/24
    Who last modified: Adam Pousson
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
    </header>

     <body>

        <div class="header">
            <img src="Images/McNeeseLogo.png" alt="McNeese" id="mcneeselogotop"> <!--McNeese logo-->

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
        </div>

        <!--Navigation bar-->
        <nav>
            <ul class="navbar">
                <li><a href="Project_HomePage.html" target ='_self'>Home</a></li> 			        <!--When clicked, shows the Home page-->
                <li><a href="Project_ComicBooksPage.html" target ='_self'>Comic Books</a></li> 		<!--When clicked, shows the Comic Boks page-->
                <li><a href="Project_VideoGamesPage.html" target ='_self'>Video Games</a></li> 		<!--When clicked, shows the Games page-->
		        <li><a href="Project_ContactUsPage.html" target ='_self'>Contact Us</a></li> 		<!--When clicked, shows the Contact Us page-->
                <li><a href="Project_AboutUsPage.html" target ='_self'>About Us</a></li> 			<!--When clicked, shows the About Us page-->
            </ul>
        </nav>
		
	<div id="About Us" sytle="display: none;">
		<!--Modified by Adam Pousson-->
            <h2>About Us</h2>
			<!--Written by Adam Pousson-->
			<h3>How we started</h3>
			<p>
				Welcome to the TechTitans Webstore!
			</p>
			
			<p>
				At the TechTitans Webstore, we're more than just an online retailer. Our journey began 
				in February 2012, when a group of friends kept running into the same issues. Our group was having trouble finding retro video games and comics.
				After a lot of searching, we finally found the game we were looking after posting to a forum. We bought the game, but when it arrived, we quickly realized it was a fake copy and was unplayable.
				That's when our team came up with the idea for our store.
			</p>
			
			<p>
				At TechTitans, we act as a middle man for sellers and buyers. Sellers send us their products, we authenticate and grade each product based on their condition, then post them to our store. 
				Once the product sells, we payout to the sellers, charging a small convenience fee to keep the store running. Over the years, we expanded to selling old consoles, trading cards, and comics.
				With thousands of 5 star reviews, you can be confident that you will be satisfied with your order
			</p>
			
			<p>
				Thank you for choosing TechTitans Webstore.
			</p>
			
			<p>
				Adam Pousson, Jett Rogers, Morgan Leger, Christopher Bertram
			</p>
			
			<p>
				Founders of TechTitans Webstore
			</p>
			
        </div>
		
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
        <script src="navFunctions.js" defer></script>
    </body>

</html>