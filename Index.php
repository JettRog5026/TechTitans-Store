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

            <a href="Project_ComicBooksPage.php"><h2>Comic Books</h2></a>
            <div id="bookContainer">
                <?php
                    include("connectdatabase.php");
                    
                    // SQL query to retrieve books data
                    $sql = "SELECT name, author, genre, price, picturepath, description FROM comicbooks LIMIT 4";
                    $result = mysqli_query($conn, $sql);
                    
                    // Close database connection
                    $conn->close();

                    // Output books as HTML
                    if ($result->num_rows > 0) {
                        $lasGenre = null;
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="book">';
                            echo '<h1>' . $row['name'] . '</h1>';
                            echo '<i>' . $row['author'] . '</i>';
                            echo '<p>'. $row['genre'] . '</p>';
                            echo '<hr>';
                            echo '<img src="' . $row['picturepath'] . '" alt="Book Cover">';
                            echo '<hr>';
                            echo '<p>$' . $row['price'] . '</p>';
                            echo '<p class="description">' . $row['description'] . '</p>';
                            echo '<button class="add-to-cart-btn">Add to Cart</button>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p>No books found.</p>';
                    }
                ?>
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
