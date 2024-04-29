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

    <?php include("Header.php") ?>
    <h1>Romance</h1>
    <div id="RomanceContainer">
        <?php
            include("connectdatabase.php");
            
            // SQL query to retrieve books data
            $sql = "SELECT name, author, genre, price, picturepath, description FROM comicbooks WHERE genre = 'Romance'";
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

    <h1>Horror</h1>
    <div id="HorrorContainer">
    <?php
            include("connectdatabase.php");
            
            // SQL query to retrieve books data
            $sql = "SELECT name, author, genre, price, picturepath, description FROM comicbooks WHERE genre = 'Horror'";
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

    <h1>Superhero</h1>
    <div id="SuperheroContainer">
    <?php
            include("connectdatabase.php");
            
            // SQL query to retrieve books data
            $sql = "SELECT name, author, genre, price, picturepath, description FROM comicbooks WHERE genre = 'Superhero'";
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

    <h1>Manga</h1>
    <div id="MangaContainer">
    <?php
            include("connectdatabase.php");
            
            // SQL query to retrieve books data
            $sql = "SELECT name, author, genre, price, picturepath, description FROM comicbooks WHERE genre = 'Manga'";
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
	<?php include("Footer.php") ?>
    <script src="navFunctions.js" defer></script>
    </body>

</html>
