<?php
	include("connectdatabase.php")
?>
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
			<?php
				$sql = "SELECT * FROM videogames WHERE userAdd = TRUE"; // Replace 'your_table' with the actual name of your table
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
						echo "<h1> NO USER INPUTS <h1>";
					}
					echo '</div>';
?>
		<?php include("Footer.php") ?>
		<script src="store.js" defer></script>
    </body>
</html>