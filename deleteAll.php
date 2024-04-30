<!--
    PHP file that deletes items from cart
    Author: Jett Rogers
    Created On: 4/28/2024
-->
<?php
    include("connectdatabase.php");
    
    if(isset($_POST['userID'])) {

        $customerId = $_POST['userID'];

        $query = "DELETE FROM Cart WHERE `cart`.`userID` = ?";
        $statement = $conn->prepare($query);
        $statement->bind_param("i", $customerId);


        if ($statement->execute()) {
            // Items successfully removed
            echo "<script>alert('Items successfully removed.');</script>";
            include("index.php");
            } else {
                // Error removing Item
                echo "<script>alert('Error removing item. Please try again.');</script>";
                include("index.php");
        }
        
        
    } 
    else {
        // Customer id is not provided
        echo "<script>alert('Customer ID is missing.');</script>";
    }
?>