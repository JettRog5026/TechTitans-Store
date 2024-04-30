<!--
    TechTitans Store Comic Books Page
    Date last modified: 4/13/24
    Who last modified: Morgan Leger
-->
<!DOCTYPE html>
<html lang="en">

    <header>
        <!-- Author of webpage-->
		<meta name = "author" content = "Christopher Bertram"/>
		
		<!-- Description of webpage-->
		<meta name = "description" content = "Comic Books"/>
		
		<!-- Keywords of webpage-->
		<meta name = "keywords" content = "HTML, Web Programming"/>
		
		<!-- Charachter set of webpage-->
		<meta charset = "UTF-8"/>
		
		<!--Link to external stylesheet -->
		<link href = "style.css" type = "text/css" rel = "stylesheet">
    </header>

    <body>

    <?php include("Header.php") ?>
    <?php
        include("connectdatabase.php");

        $sql = "SELECT DISTINCT genre FROM comicbooks";
        $genres = mysqli_query($conn, $sql);

        if ($genres->num_rows > 0) {
            while($genre = $genres->fetch_assoc()) {
                $curGenre = $genre['genre'];
                echo '<h1>' . $curGenre . '</h1>';
                echo '<div id="' . $curGenre . 'Container">';
                
                $sql = "SELECT name, author, genre, price, picturepath, description FROM comicbooks WHERE genre = '" . $curGenre . "'";
                $result = mysqli_query($conn, $sql);

                if ($result->num_rows > 0) {
                    $lasGenre = null;
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="item">';
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

                echo '</div>';
            }
        }
        $conn->close();
    ?>
	<?php include("Footer.php") ?>
    <script src="navFunctions.js" defer></script>
    </body>

</html>
