<!--
    PHP file for the add to cart function
    Author: Jett Rogers
    Created On: 4/28/2024
-->

<?php
    include("connectdatabase.php");

    if(isset($_POST['email']) && isset($_POST['orderNumber']) && isset($_POST['message']))
    {
        $id = $_POST['id'];
        $email = $_POST['email'];
        $orderId = $_POST['orderNumber'];
        $message = $_POST['message'];

        $query = "INSERT INTO contact (userID, email, orderNumber, description) VALUES (?, ?, ?, ?)";
        $statement = $conn->prepare($query);

        $statement->bind_param("isis", $id, $email, $orderId, $message);

        if ($statement->execute()) 
        {
            echo "<script>alert('Contact recieved.');</script>";
            include("index.php");
        } 
        else 
        {
            echo "<script>alert('Failed to add review. Please try again.');</script>";
            echo '<script>window.location.href = "Project_ContactUsPage.php";</script>';
        }
    }
    else
    {
        echo "<script>alert('A piece of info is missing.');</script>";
        echo '<script>window.location.href = "Project_ContactUsPage.php";</script>';
    }
?>