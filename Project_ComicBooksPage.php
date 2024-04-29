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
    <div id="bookContainer">
        <?php
            include("connectdatabase.php");
            
            // SQL query to retrieve books data
            $sql = "SELECT name, author, genre, price, picturepath, description FROM comicbooks";
            $result = mysqli_query($conn, $sql);
            
            // Close database connection
            $conn->close();

            // Output books as HTML
            if ($result->num_rows > 0) {
                $lasGenre = null;
                while ($row = $result->fetch_assoc()) {
                    if($row['genre'] != $lasGenre) {
                        if($lasGenre == null)
                        {
                            echo '</div>';
                        }
                        echo '<h1>'. $row['genre'] . '</h1>';
                        echo '<div class="'. $row['genre']. 'container">';
                        $lasGenre = $row['genre'];
                    }
                    echo '<div class="book">';
                    echo '<h2>' . $row['name'] . '</h2>';
                    echo '<p>Author: ' . $row['author'] . '</p>';
                    echo '<img src="' . $row['picturepath'] . '" alt="Book Cover">';
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
