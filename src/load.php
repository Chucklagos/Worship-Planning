<?php

//$connect = new PDO('mysql:host=localhost;dbname=church', 'root', '');
$connect = new PDO('mysql:host=vkh7buea61avxg07.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=asx4muqaxno0bdu3', 'drb6g4wswu2bfhgw', 'h9dhysdg8hz6yygr');

$data = array();

$query = "SELECT * FROM events ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"]
 );
}

echo json_encode($data);

?>
