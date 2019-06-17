<?php														

$link = mysqli_connect("localhost", "root", "", "demo");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$host="localhost";
$user="root";
$password="";
$db="demo";


mysql_connect($host,$user,$password);
mysql_select_db($db);
$item_name = mysqli_real_escape_string($link, $_REQUEST['item_name']);


$sql3="SELECT MAX(Date) from total_quantity where Item_name='$item_name'";
$result3 = mysql_query($sql3);
$row = mysql_fetch_assoc($result3);
$my_date=$row['MAX(Date)'];
//echo $my_date;

$sql4= "SELECT Opening_balance,Item_received,Sold_quantity,Damaged from total_quantity where Item_name='$item_name' AND Date='$my_date' ";
//$sql4= "SELECT Opening_balance,Item_received,Sold_quantity,Damaged from total_quantity where Item_name='$item_name' AND Date='$my_date'";
$result4= mysql_query($sql4);
$row=mysql_fetch_assoc($result4);
$A=$row['Opening_balance']+$row['Item_received']-$row['Sold_quantity']-$row['Damaged'];

echo json_encode($A);

die; 

?>