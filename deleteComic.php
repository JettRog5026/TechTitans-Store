<!--
    PHP file that deletes items from cart
    Author: Jett Rogers
    Created On: 4/28/2024
-->

<?php
    include("connectdatabase.php");
    echo "<script>alert('hello.');</script>";
    if(isset($_POST['id'])) {
        $id = $_POST['id']; // Get product ID from form

        $query = "DELETE FROM Cart WHERE `comicbookID` = ?";
        $statement = $conn->prepare($query);
        $statement->bind_param("i", $id); // Bind product ID

        if ($statement->execute()) {
            // Item successfully removed
            echo "<script>alert('Item successfully removed.');</script>";

            // Redirect back to cart
            header("Location: cart.php");
            exit();
        } else {
            // Error removing item
            echo "<script>alert('Error removing item. Please try again.');</script>";

            // Redirect back to cart
            header("Location: cart.php");
            exit();
        }
    } else {
        // Product ID is not provided
        echo "<script>alert('Product ID is missing.');</script>";

        // Redirect back to cart
        header("Location: cart.php");
        exit();
    }
?>