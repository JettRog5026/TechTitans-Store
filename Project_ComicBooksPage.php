<!--
    TechTitans Store Comic Books Page
    Date last modified: 4/13/24
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
                <li><a href="Project_HomePage.html" target ='_self'>Home</a></li> 			<!--When clicked, shows the Home page-->
                <li><a href="Project_ComicBooksPage.html" target ='_self'>Comic Books</a></li> 		<!--When clicked, shows the Comic Boks page-->
                <li><a href="Project_VideoGamesPage.html" target ='_self'>Video Games</a></li> 		<!--When clicked, shows the Games page-->
		<li><a href="Project_ContactUsPage.html" target ='_self'>Contact Us</a></li> 		<!--When clicked, shows the Contact Us page-->
                <li><a href="Project_AboutUsPage.html" target ='_self'>About Us</a></li> 		<!--When clicked, shows the About Us page-->
            </ul>
        </nav>
		
		<div id="Comic Books" sytle="display: none;">

            <h1>Hot Deals</h1>
            <div class="Hotcontainer">
                <div class="book">
                    <h2>Saga Book Set</h2>
                    <h4>BrianK. Vaughan / Fiona Staples</h4>
                    <img src="Images/ComicBooks/saga-box-set.jpg" alt="Saga">
                    <p>$49.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                    <!-- <p>
                        Journey across the universe in this critically acclaimed space opera. Saga follows the adventures of Alana and Marko, lovers from warring planets, as they navigate parenthood, interstellar conflict, and bizarre encounters.<br>
                        This gorgeous box set, you will be collecting all nine of the bestselling trade paperback collections in one affordable package.<br>
                        It’s the perfect way to introduce any "mature readers" who haven’t yet tried SAGA to our weirdly wonderful universe.
                    </p><br> -->
                    <!-- <a href="" id="cart">
                        <div class="cartbutton">
                            <button>Add To Cart</button>
                        </div>
                    </a> -->
                </div>
                <div class="book">
                    <h2>Ms. Marvel</h2>
                    <h4>Sana Amanat / Stephen Wacker / G. Willow Wilson / Adrian Alphona</h4>
                    <img src="Images/ComicBooks/MsMarvel.jpg" alt="Ms Marvel">
                    <p>$49.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                    <!-- <p>
                        Meet Kamala Khan, a Pakistani-American teenager from Jersey City who discovers she has shape-shifting abilities.<br>
                        Follow Kamala's journey as she takes on the mantle of Ms. Marvel and defends her community from threats big and small.
                    </p> -->
                </div>
                <div class="book">
                    <h2>Invincible Compendium Volume 1</h2>
                    <h4>Robert Kirkman / Cory Walker / Ryan Ottley</h4>
                    <img src="Images/ComicBooks/InvincibleV1.jpg" alt="Invincible Collection">
                    <p>$49.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                    <!-- <p>
                        The first nine volumes of the greatest superhero comic in the universe<br>
                        Experience the superhero genre like never before. Invincible follows Mark Grayson, a young hero with inherited powers,<br>
                        as he navigates the challenges of being a superhero while uncovering dark family secrets.
                    </p> -->
                </div>

                <div class="book">
                    <h2>The Batman Who Laughs</h2>
                    <h4>Scott Snyder / Jock</h4>
                    <img src="Images/ComicBooks/batmanLaugh.jpg" alt="Batman Who Laughs">
                    <p>$49.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                    <!-- <p>
                        Dive into a twisted tale from the Dark Multiverse. The Batman Who Laughs is a chilling combination of Batman and his arch-nemesis, the Joker.<br>
                        Follow Batman's struggle against this monstrous new foe in a dark and suspenseful series.
                    </p> -->
                </div>
            </div>
            
            <h1>Genres</h1>
            <h2>Romance</h2>
            <div class="RomanceContainer">
                <div class="book">
                    <h2>The Sun Is Also a Star</h2>
                    <h4>Nicola Yoon (Author) / David Yoon (Illustrator)</h4>
                    <img src="Images/ComicBooks/SunisStar.jpg">
                    <p>$59.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
                <div class="book">
                    <h2>Heartstopper</h2>
                    <h4>Alice Oseman</h4>
                    <img src="Images/ComicBooks/HeartStop.jpg">
                    <p>$59.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
                <div class="book">
                    <h2>Bloom</h2>
                    <h4>Kevin Panetta (Author) / Savanna Ganucheau (Illustrator)</h4>
                    <img src="Images/ComicBooks/Bloom.jpg">
                    <p>$59.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
                <div class="book">
                    <h2>Laura Dean Keeps Breaking Up with Me</h2>
                    <h4>Mariko Tamaki (Author) / Rosemary Valero-O'Connell (Illustrator)</h4>
                    <img src="Images/ComicBooks/LauraDean.jpg">
                    <p>$59.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
            </div>
            <h2>Horror</h2>
            <div class="HorrorContainer">
                <div class="book">
                    <h2>Locke & Key</h2>
                    <h4>Joe Hill (Author) / Gabriel Rodríguez (Illustrator)</h4>
                    <img src="Images/ComicBooks/Lock.jpg">
                    <p>$59.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
                <div class="book">
                    <h2>Harrow County</h2>
                    <h4>Cullen Bunn (Author) / Tyler Crook (Illustrator)</h4>
                    <img src="Images/ComicBooks/HarrowCounty.jpg">
                    <p>$59.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
                <div class="book">
                    <h2>Gideon Falls</h2>
                    <h4>Jeff Lemire (Author), Andrea Sorrentino (Illustrator)</h4>
                    <img src="Images/ComicBooks/Gideon.jpg">
                    <p>$59.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
                <div class="book">
                    <h2>Something is Killing the Children</h2>
                    <h4>James Tynion IV (Author), Werther Dell'Edera (Illustrator)</h4>
                    <img src="Images/ComicBooks/KillChildren.jpg">
                    <p>$59.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
            </div>
            <h2>Manga</h2>
            <div class="MangaContainer">
                <div class="book">
                    <h2>My Hero Academia</h2>
                    <h4>Kohei Horikoshi</h4>
                    <img src="Images/ComicBooks/MyHeroA.png">
                    <p>$59.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
                <div class="book">
                    <h2>Attack on Titan</h2>
                    <h4>Hajime Isayama</h4>
                    <img src="Images/ComicBooks/AttackOnTitan.jpg">
                    <p>$59.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
                <div class="book">
                    <h2>Fruits Basket</h2>
                    <h4>Natsuki Takaya</h4>
                    <img src="Images/ComicBooks/FruitsBasket.jpg">
                    <p>$59.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
                <div class="book">
                    <h2>Death Note</h2>
                    <h4>Tsugumi Ohba (Author) / Takeshi Obata (Illustrator)</h4>
                    <img src="Images/ComicBooks/DeathNote.jpg">
                    <p>$59.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
            </div>
            <h2>SuperHero</h2>
            <div class="SuperheroContainer">
                <div class="book">
                    <h2>Batman: Hush</h2>
                    <h4>Jeph Loeb (Author) / Jim Lee (Illustrator)</h4>
                    <img src="Images/ComicBooks/BatmanHush.jpg">
                    <p>$59.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
                <div class="book">
                    <h2>Ms. Marvel</h2>
                    <h4>Sana Amanat / Stephen Wacker / G. Willow Wilson / Adrian Alphona</h4>
                    <img src="Images/ComicBooks/MsMarvel.jpg">
                    <p>$59.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
                <div class="book">
                    <h2>Superman: Red Son</h2>
                    <h4>Mark Millar (Author) / Dave Johnson (Illustrator)</h4>
                    <img src="Images/ComicBooks/SupermanRed.jpg">
                    <p>$59.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
                <div class="book">
                    <h2>Spider-Man: Into the Spider-Verse</h2>
                    <h4>Ralph Macchio</h4>
                    <img src="Images/ComicBooks/SpiderManSpiderVerse.jpg">
                    <p>$59.99</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
            </div>


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