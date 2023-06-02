<?php 

var_dump($_GET);

$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];

echo "<br>";
echo "Here is the receiver for a GET form sent by {$first_name} {$last_name}";


