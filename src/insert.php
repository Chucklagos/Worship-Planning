<?php

//$connect = new PDO('mysql:host=localhost;dbname=church', 'root', '');
$connect = new PDO('mysql:host=localhost;dbname=church', 'iglesia', 'iglesia');
//$connect = new PDO('mysql:host=vkh7buea61avxg07.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=asx4muqaxno0bdu3', 'drb6g4wswu2bfhgw', 'h9dhysdg8hz6yygr');

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO events
 (title, start_event, end_event)
 VALUES (:title, :start_event, :end_event)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end']
  )
 );
}


?>
