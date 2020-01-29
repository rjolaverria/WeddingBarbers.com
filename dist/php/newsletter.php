<?php
    require_once("config.php");
    if((isset($_POST['newsletter-email'])&& $_POST['newsletter-email'] !=''))
    {

    $newsletterEmail = $conn->real_escape_string($_POST['newsletter-email']);

    $sql="INSERT INTO Emails (email_address) VALUES ('$newsletterEmail')";


    if(!$result = $conn->query($sql)){
        die('There was an error running the query [' . $conn->error . ']');
    }
    else
    {
        echo "Thank you! We will contact you soon";
    }
    }
    else
    {
    echo "Please enter Email";
    }
?>