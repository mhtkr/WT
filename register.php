<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mydatabase";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error)
    {
        die("Connection failed - " . $conn->connect_error);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["name"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];

        $sql = "INSERT INTO form_data (NAME, ADDRESS, EMAIL, MOBILE) VALUES ('$name', '$address', '$email', '$mobile')";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } 
    else 
    {
        echo "Form not submitted!";
    }

    $conn->close();
?>