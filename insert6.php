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
$myDate = date('Y/m/d');

$sql="SELECT Opening_balance,Item_received,Sold_quantity,Damaged from total_quantity where Item_name='$item_name' AND Date='$myDate'";
$result= mysql_query($sql);

if(mysql_num_rows($result)==1)
{
	$row= mysql_fetch_assoc($result);
	echo json_encode($row);
}
else{

$sql="SELECT MAX(Date) from total_quantity where Item_name='$item_name' ";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);
$max_date=$row['MAX(Date)'];

$sql="SELECT Opening_balance,Item_received,Sold_quantity,Damaged from total_quantity where Item_name='$item_name' AND Date='$max_date'";

$result= mysql_query($sql);
$row=mysql_fetch_assoc($result);
$row['Opening_balance']=$row['Opening_balance']+$row['Item_received']-$row['Sold_quantity']-$row['Damaged'];
$row['Item_received']=0;
$row['Sold_quantity']=0;
$row['Damaged']=0;

echo json_encode($row);
}


die; 
mysqli_close($link);

?>