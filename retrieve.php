<?php

include('connection.php');

$sql = "SELECT * FROM `products`";
$result = $conn->query($sql);
if($result->num_rows > 0){
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
}
echo json_encode($data)

?>