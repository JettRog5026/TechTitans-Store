<!--
    TechTitans UserListing Page
    Date last modified: 4/13/24
    Who last modified: Adam Pousson, Jett Rogers, Morgan Leger
-->

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
		<?php include("showListing.php") ?>
		<?php include("Footer.php") ?>
    </body>
	<script src="store.js" defer></script>
</html>
