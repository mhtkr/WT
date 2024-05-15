<!DOCTYPE html>
<html>
<head>
    <title>User Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Student Data</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Password</th>
        <th>Email</th>
    </tr>

    <?php

    $file = fopen("data.txt", "r");

    while(!feof($file)) {
        $line = fgets($file);
        // Split the line into an array using the ":" delimiter
        $data = explode(",", $line);
        echo "<tr>";
        echo "<td>" . $data[0] . "</td>";
        echo "<td>" . $data[1] . "</td>";
        echo "<td>" . $data[2] . "</td>";
        echo "</tr>";
    }

    fclose($file);
    ?>
</table>

</body>
</html>

