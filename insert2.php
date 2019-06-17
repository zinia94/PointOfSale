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


$item_name = mysqli_real_escape_string($link, $_REQUEST['item_name2']);
if($item_name!=""){
$sale_price = mysqli_real_escape_string($link, $_REQUEST['sale_price2']);
$item_received = mysqli_real_escape_string($link, $_REQUEST['item_received2']);
$myDate = date('Y/m/d');

$sql= "SELECT Received_quantity from itemreceived WHERE Item_name='$item_name' AND Date='$myDate' AND Price='$sale_price'";
$result= mysql_query($sql);

if(mysql_num_rows($result)==1)
{
	$sql3= "UPDATE itemreceived SET Received_quantity=Received_quantity+'$item_received' WHERE Item_name='$item_name' AND Date='$myDate' AND Price='$sale_price' ";
	//$sql3="UPDATE itemreceived SET Received_quantity=Received_quantity+'$item_received' WHERE Item_name='$item_name' AND Date='$myDate' And Price='$sale_price' ";
	if(mysqli_query($link, $sql3)){
		echo "itemreceived Updated Successfully 67!!\n";
	}
	else echo "error 9\n";
}
else
{
	$sql4="INSERT INTO itemreceived (Item_name,Date,Price,Received_quantity) VALUES('$item_name','$myDate','$sale_price','$item_received') ";
	if(mysqli_query($link, $sql4)){
		echo " \n itemreceived Insertion Successfull 23!!\n";
	    }
	   else 
	    {
			$result = mysql_query($sql4);
            $row = mysql_fetch_assoc($result);
            echo $row;
		    echo "\n Insertion error 8\n";
	    }
}
$sql= "SELECT Item_received from total_quantity WHERE Item_name='$item_name' AND Date='$myDate'";
$result= mysql_query($sql);
if(mysql_num_rows($result)==1)
{
	$sql3="UPDATE total_quantity SET Item_received=Item_received+'$item_received' WHERE Item_name='$item_name' AND Date='$myDate' ";
	if(mysqli_query($link, $sql3)){
		echo "totalquantity Updated Successfully 100!!\n";
	}
	else echo "error 89\n";
}
else
{
$sql3="SELECT MAX(Date) from total_quantity where Item_name='$item_name' ";
$result3 = mysql_query($sql3);
$row = mysql_fetch_assoc($result3);
$max_date=$row['MAX(Date)'];
echo var_dump($row);
echo $myDate;

$sql3="SELECT Opening_balance,Item_received,Sold_quantity,Damaged from total_quantity where Item_name='$item_name' AND Date='$max_date'";
$result3 = mysql_query($sql3);
$row = mysql_fetch_assoc($result3);
$tot=$row['Opening_balance'];
$B=$row['Sold_quantity'];
$C=$row['Damaged'];
$D=$row['Item_received'];
$tot=$tot+$D;
$tot=$tot-$B;
$tot=$tot-$C;
echo $tot;
	
	
	$sql4="INSERT INTO total_quantity (Item_name,Date,Opening_balance,Item_received) VALUES('$item_name','$myDate','$tot',$item_received) ";
	if(mysqli_query($link, $sql4))
		echo "itemreceived Insertion Successfull 76!!\n";    
	   else
		echo " Insertion error 3\n";
	    
}
}
// close connection
mysqli_close($link);
?>