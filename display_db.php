<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mydatabase";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error)
    {
        die("Connection failed - " . $conn->connect_error);
    }

    $sql = "SELECT * FROM form_data";
    $result = $conn->query($sql);

    echo "<table border='5'>";
    echo "<tr><th>NAME</th><th>EMAIL</th><th>MOBILE</th><th>PHONE</th></tr>";

    while($row = $result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>" . $row["NAME"] . "</td>";
        echo "<td>" . $row["EMAIL"] . "</td>";
        echo "<td>" . $row["ADDRESS"] . "</td>";
        echo "<td>" . $row["MOBILE"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    $conn->close();

?>