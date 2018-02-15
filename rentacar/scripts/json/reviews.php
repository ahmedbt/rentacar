

<?php

    header('Content-Type: application/json');

    $host = "localhost";
    $user = "root";
    $psw = "";
    $dbname = "baza1";

    //open connection to mysql db
    $conn = new mysqli($host,$user,$psw,$dbname); // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM ratings WHERE id = 1";
    $result = $conn->query($sql);

    $rows = array();

    if ($result->num_rows > 0){
        while($r = $result->fetch_assoc()){
            $rows[] = $r;
        }
        echo json_encode($rows);
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
?> 

