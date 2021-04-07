<?php


if(isset($_POST["id"]))
{
 //$connect = new PDO('mysql:host=localhost;dbname=church', 'root', '');
 $connect = new PDO('mysql:host=localhost;dbname=church', 'iglesia', 'iglesia');
 //$connect = new PDO('mysql:host=vkh7buea61avxg07.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=asx4muqaxno0bdu3', 'drb6g4wswu2bfhgw', 'h9dhysdg8hz6yygr');

 $query = "
 DELETE from events WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>
