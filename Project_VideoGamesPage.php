<?php
	include("connectdatabase.php")
?>
<!--
    TechTitans Store Video Games Page
    Date last modified: 4/13/2024
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
		<style>
			#listingForm 
			{
				display: none;
			}
		</style>
    </header>

     <body>
		<?php include("Header.php") ?>
		<?php include("showListing.php") ?>
		<?php include("Footer.php") ?>
	</body>
	<script src="store.js" defer></script>
		
</html>

