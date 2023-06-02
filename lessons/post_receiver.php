<?php 

var_dump($_POST);

$first_name = $_POST['first_name'];

echo "<br>";
echo "this is a receiver by {$first_name}";

// header('Location: post_landing_page.php');
