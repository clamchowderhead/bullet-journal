<?php
//postBullet.php
// Gets the bullet information from the "add" model, and posts the information into the database

//Conversion from JSON to associative array
$post_date = file_get_contents("php://input");
$data = json_decode($post_date);
print $data->add;
?>
