<?php														
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
// Check connection
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
$sql3="SELECT MAX(Date) from itemreceived where Item_name='$item_name' ";
$result3 = mysql_query($sql3);
$row = mysql_fetch_assoc($result3);
$max_date=$row['MAX(Date)'];

$sql5="SELECT MAX(Item_ID) from itemreceived where Item_name='$item_name' AND Date='$max_date'";

$result5 = mysql_query($sql5);
$row5 = mysql_fetch_assoc($result5);
$max_id=$row5['MAX(Item_ID)'];

$sql4= "SELECT Price from itemreceived where Item_name='$item_name' AND Item_ID='$max_id'";
$result4= mysql_query($sql4);
$row4=mysql_fetch_assoc($result4);

//var_dump(json_encode($row4));
echo json_encode($row4);


die; 
mysqli_close($link);

?>