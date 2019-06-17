<?php

$link = mysqli_connect("localhost", "root", "", "demo");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$item_name = mysqli_real_escape_string($link, $_REQUEST['item_name_new']);
$item_type = mysqli_real_escape_string($link, $_REQUEST['item_type']);
if($item_name!=""){

$sql= "INSERT INTO type (Item_name,Item_Type) VALUES ('$item_name','$item_type')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
 
// close connection
mysqli_close($link);
?>