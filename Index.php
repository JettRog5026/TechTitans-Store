<!--
    TechTitans Store
    Date last modified: 4/13/24
    Who last modified: Adam Pousson
-->

<!DOCTYPE html>
<html lang="en">

    <header>
        <!-- Author of webpage-->
		<meta name = "author" content = "Jett Rogers"/>
		
		<!-- Description of webpage-->
		<meta name = "description" content = "TexhTitans Store"/>
		
		<!-- Keywords of webpage-->
		<meta name = "keywords" content = "HTML, Web Programming"/>
		
		<!-- Charachter set of webpage-->
		<meta charset = "UTF-8"/>
		
		<!--Link to external stylesheet -->
		<link href = "style.css" type = "text/css" rel = "stylesheet">
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
        </div>

        <!--Navigation bar-->
        <nav>
            <ul class="navbar">
                <li><a href="Project_HomePage.html"  target ='_self'>Home</a></li> 				<!--When clicked, shows the Home page-->
                <li><a href="Project_ComicBooksPage.html"  target ='_self'>Comic Books</a></li> 		<!--When clicked, shows the Comic Boks page-->
                <li><a href="Project_VideoGamesPage.html"  target ='_self'>Video Games</a></li> 		<!--When clicked, shows the Games page-->
		<li><a href="Project_ContactUsPage.html"  target ='_self'>Contact Us</a></li> 			<!--When clicked, shows the Contact Us page-->
                <li><a href="Project_AboutUsPage.html"  target ='_self'>About Us</a></li> 		        <!--When clicked, shows the About Us page-->
            </ul>
        </nav>

        <!--Home Page Content-->
        <div id="HomePage">
		
            <h2>Hottest Deals</h2>
            <div class="RowofItems">

                <div class = "EachItem">
			<p>Elden Ring<br>
				FromSoftware
			</p>
			<img src="Images/EldenRing.jpg" alt="Elden Ring" class="itemPic">
			<h4>Price: $39.99</h4>
			</div>
			<div class = "EachItem">
				<p>Horizon Forbidden West<br>
					Guerrilla Games
				</p>
				<img src="Images/Horizon Forbidden West.jpg" alt="Horizon Forbidden West" class="itemPic">
				<h4>Price: $39.99</h4>
			</div>
			<div class = "EachItem">
				<p>Fortnite<br>
					Epic Games
				</p>
				<img src="Images/Fortnite.jpg" alt="Fortnite" class="itemPic">
				<h4>Price: $39.99</h4>
			</div>
			<div class = "EachItem">
				<p>The Witcher 3: Wild Hunt<br>
					CD Projekt Red
				</p>
				<img src="Images\TheWitcher3WildHunt.jpg" alt="The Witcher 3: Wild Hunt" class="itemPic">
				<p>Price: $39.99</p>
			</div>

                <div class="EachItem">
                    
                    <img src="Images/ComicBooks/saga-box-set.jpg" alt="GameName" class="itemPic">

                    <p>Saga Book Set<br>
                        <i>BrianK. Vaughan</i><br>
                        <b>Price: $49.99</b>
                    </p>

                </div>

                <div class="EachItem">
                    
                    <img src="Images/ComicBooks/MsMarvel.jpg" alt="GameName" class="itemPic">

                    <p>Ms. Marvel<br>
                        Sana Amanat<br>
                        <b>Price: $49.99</b>
                    </p>
                </div>

                <div class="EachItem">
                    
                    <img src="Images/ComicBooks/InvincibleV1.jpg" alt="GameName" class="itemPic">

                    <p>Invincible Compendium<br>
                        Robert Kirkman<br>
                        <b>Price: $49.99</b>
                    </p>
                </div>

                <div class="EachItem">
                    
                    <img src="Images/ComicBooks/batmanLaugh.jpg" alt="GameName" class="itemPic">

                    <p>The Batman Who Laughs<br>
                        Scott Snyder<br>
                        <b>Price: $49.99</b>
                    </p>
                </div>
            </div>

            <h2 >Comic Books</h2>
            <div class="RowofItems">
                <div class="EachItem">

                    <img src="Images/ComicBooks/SunisStar.jpg" alt="GameName" class="itemPic">

                    <p><b>The Sun Is Also a Star</b><br>
                        <i>Nicola Yoon</i><br>
                        <b>Price: $59.99</b>
                    </p>
                </div>
                

                <div class="EachItem">

                    <img src="Images/ComicBooks/HeartStop.jpg" alt="GameName" class="itemPic">

                    <p><b>Heartstopper</b><br>
                        <i>Alice Oseman</i><br>
                        <b>Price: $59.99</b>
                    </p>
                </div>

                <div class="EachItem">
                    
                    <img src="Images/ComicBooks/Lock.jpg" alt="GameName" class="itemPic">

                    <p><b>Locke & Key</b><br>
                        <i>Joe Hill</i><br>
                        <b>Price: $59.99</b>
                    </p>
                </div>

                <div class="EachItem">

                    <img src="Images/ComicBooks/HarrowCounty.jpg" alt="GameName" class="itemPic">

                    <p><b>Harrow County</b><br>
                        <i>Cullen Bunn</i><br>
                        <b>Price: $59.99</b>
                    </p>
                </div>

                <div class="EachItem">
                    
                    <img src="Images/ComicBooks/MyHeroA.png" alt="GameName" class="itemPic">

                    <p><b>My Hero Academia</b><br>
                        <i>Kohei Horikoshi</i><br>
                        <b>Price: $59.99</b>
                    </p>
                </div>

                <div class="EachItem">
                    
                    <img src="Images/ComicBooks/AttackOnTitan.jpg" alt="GameName" class="itemPic">

                    <p><b>Attack on Titan</b><br>
                        <i>Hajime Isayama</i><br>
                        <b>Price: $59.99</b>
                    </p>
                </div>

                <div class="EachItem">
                    
                    <img src="Images/ComicBooks/BatmanHush.jpg" alt="GameName" class="itemPic">

                    <p><b>Batman: Hush</b><br>
                        <i>Jeph Loeb</i><br>
                        <b>Price: $59.99</b>
                    </p>
                </div>

                <div class="EachItem">
                    
                    <img src="Images/ComicBooks/SupermanRed.jpg" alt="GameName" class="itemPic">

                    <p><b>Superman: Red Son</b><br>
                        <i>Mark Millar</i><br>
                        <b>Price: $59.99</b>
                    </p>
                </div>
            </div>

            <h2>Video Games</h2>
            <div class="RowofItems">
                <div class="EachItem">
                    
                   <p>Madden NFL 22<br>
								EA Sports
							</p>
							<img src="Images/Madden NFL 22.jpg" alt="Madden NFL 22" class="itemPic">
							<h4>Price: $69.99</h4>
                </div>
                

                <div class="EachItem">
                    

                    <p>World of Warcraft<br>
								Blizzard Entertainment
							</p>
							<img src="Images/World of Warcraft.jpg" alt="World of Warcraft" class="itemPic">
							<h4>Price: $69.99</h4>
                </div>

                <div class="EachItem">
                    
                    <p>Call of Duty: Warzone<br>
								Infinity Ward / Raven Software
							</p>
							<img src="Images/CallofDutyWarzone.jpg" alt="Call of Duty: Warzone" class="itemPic">
							<h4>Price: $69.99</h4>
                </div>

                <div class="EachItem">
                    
                    <p>Hades<br>
								Supergiant Games
							</p>
							<img src="Images/Hades.jpg" alt="Hades" class="itemPic">
							<h4>Price: $69.99</h4>
                </div>

                <div class="EachItem">
                    
                    <p>FIFA 22<br>
								EA Sports
							</p>
							<img src="Images/FIFA 22.jpg" alt="FIFA 22" class="itemPic">
							<h4>Price: $69.99</h4>
                </div>

                <div class="EachItem">
                    
                    <p>Stardew Valley<br>
								ConcernedApe (Eric Barone)
							</p>
							<img src="Images/Stardew Valley.jpg" alt="Stardew Valley" class="itemPic">
							<h4>Price: $69.99</h4>
                </div>

                <div class="EachItem">
                    
                    <p>Hades<br>
								Supergiant Games
							</p>
							<img src="Images/Hades.jpg" alt="Hades" class="itemPic">
							<h4>Price: $69.99</h4>
                </div>

                <div class="EachItem">
                    
                    <p>Counter-Strike: Global Offensive<br>
								Valve Corporation / Hidden Path Entertainment
							</p>
							<img src="Images/Counter-StrikeGlobalOffensive.jpg" alt="Counter-Strike: Global Offensive" class="itemPic">
							<h4>Price: $69.99</h4>
                </div>

            </div>
        </div>

        
        <!--Code for cart-->
        <div class="cartView">
            <h1>Cart</h1>
            <ul class="cartList"></ul>

            <div class="checkout">
                <div class="total">0</div>
                <div class="closeCart">Close Cart</div>
            </div>
        </div>


        <!--Footer Code-->
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
                    <p>&copy; Copyright 2024 TechTitans. All rights reserved.</p>
                </div>

                <!--Contact us text-->
                <div class="contactUs">
                    <h3>Contact Us</h3>
                    <p>Need to contact us? Please don't hesitate to use the Contact Form.</p>
                </div>
            </div>
        </footer>
        <script src="store.js" defer></script>
    </body>

</html>
