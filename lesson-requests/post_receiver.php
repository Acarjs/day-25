<?php 

session_start();

var_dump($_POST);

if(empty( $_POST['quantity'] )) {

  // echo "<h1>No items ordered</h1>";

  $_SESSION["no-quantity"] = "No quantity ordered";
  header("Location:form.php");
  exit();
}


$first_name = $_POST['fName'];
$second_name = $_POST['lName'];



echo "<br>";
echo "Here is the receiver for a POST form sent by {$first_name} $second_name";



header('Location:post_landing_page.php');