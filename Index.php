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

            .book {
                width: calc(12.5% - 20px);
                margin-right: 20px;
                margin-bottom: 20px;
                box-sizing: border-box;
                text-align: center;
                position: relative;
                padding: 20px;
                overflow: hidden;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
		</style>
    </header>

    <body>

        <?php include("Header.php") ?>
        <!--Home Page Content-->
        <div id="HomePage">
		
            <h2>Hottest Deals</h2>
            <div id="bookContainer">
                <?php
                    include("connectdatabase.php");
                    
                    // SQL query to retrieve books data
                    $sql = "SELECT name, author, genre, price, picturepath, description FROM comicbooks ORDER BY price ASC LIMIT 4";
                    $result = mysqli_query($conn, $sql);
                    $sql = "SELECT * FROM videogames WHERE userAdd = FALSE AND price < 30 ORDER BY price ASC LIMIT 4";
                    $result2 = mysqli_query($conn, $sql);
                    
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

                    if ($result2->num_rows > 0) {
                        $lasGenre = null;
                        while ($row = $result2->fetch_assoc()) {
                            echo '<div class="book">';
                            echo '<h1>' . $row['name'] . '</h1>';
                            echo '<i>' . $row['developer'] . '</i>';
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

            <a href="Project_ComicBooksPage.php"><h2>Comic Books</h2></a>
            <div id="bookContainer">
                <?php
                    include("connectdatabase.php");
                    
                    // SQL query to retrieve books data
                    $sql = "SELECT name, author, genre, price, picturepath, description FROM comicbooks LIMIT 8";
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

            <a href="Project_VideoGamesPage.php"><h2>Video Games</h2></a>
            <div id="gameContainer">
                <?php
                        include("connectdatabase.php");
                        
                        //SQL query to retrieve videogame data
                        $sql = "SELECT * FROM videogames WHERE userAdd = FALSE LIMIT 8";
                        $result = mysqli_query($conn, $sql);
                        
                        $conn->close();

                        if ($result->num_rows > 0) {
                            $lasGenre = null;
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="book">';
                                echo '<h1>' . $row['name'] . '</h1>';
                                echo '<i>' . $row['developer'] . '</i>';
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
