<?php
 $host = "localhost";
    $user = "root";
    $psw = "";
    $dbname = "baza1";

    //open connection to mysql db
    $conn = new mysqli($host,$user,$psw,$dbname); // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$sql = "SELECT ROUND(AVG(stars),1) AS avgg FROM ratings WHERE id = 6"; 

    
$result = $conn->query($sql);

 $rows = array();

    if ($result->num_rows > 0){
        while($r = $result->fetch_assoc()){
            $rows[] = $r;
        }
	print json_encode($rows);
    } else {
        echo "0 results";
    }

    

?>