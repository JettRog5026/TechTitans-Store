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
        <style>
			#listingForm 
			{
				display: none;
			}

            .Hotcontainer h2
            {
                display:block;
                width:100%
            }
		</style>
    </header>

    <body>

        <?php include("Header.php") ?>
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
                <?php
                    include("connectdatabase.php");
                    $videogames = array();
                   $sql_videogames = "SELECT * FROM videogames WHERE userAdd = FALSE AND price < 30 ORDER BY price ASC";
                    $result_videogames = mysqli_query($conn, $sql_videogames);
                    if (mysqli_num_rows($result_videogames) > 0) 
                    {
                        //Keep track of displayed genres
                        $displayedGenres = array();
                        echo '<div class="Hotcontainer">';
                        while ($row = mysqli_fetch_assoc($result_videogames))
                        {
                            //Check if the genre has already been displayed
                            //Display game details
                            echo '<div class="book">';
                                echo '<h2>'.$row["name"].'</h2>';
                                echo '<h4>'.$row["developer"].'</h4>';
                                echo '<img src="'.$row["picturepath"].'" alt="'.$row["name"].'">';
                                echo '<p>Price: $'.$row["price"].'</p>';
                                echo '<button class="add-to-cart-btn">Add to Cart</button>';
                            echo '</div>';
                        }
                    } 
                    else 
                    {
                        echo "<h1>NO USER INPUTS</h1>";
                    }
                ?>
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
        <?php include("Footer.php") ?>
        <script src="store.js" defer></script>
    </body>

</html>
