<?php
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


$item_name = mysqli_real_escape_string($link, $_REQUEST['item_name_']);
$item_damaged= mysqli_real_escape_string($link, $_REQUEST['damaged_item']);
$myDate = date('Y/m/d');

$sql="SELECT Damaged FROM total_quantity WHERE Item_name='$item_name' AND Date='$myDate'";
$result=mysql_query($sql);
if(mysql_num_rows($result)==1)
{
	$sql="UPDATE total_quantity SET Damaged='$item_damaged' WHERE Item_name='$item_name' AND Date='$myDate'";
	if(mysqli_query($link, $sql)){
		echo "total_quantity Updated Successfully 67!!\n";
	}
	else echo "error 9\n";
	
}
else
{
	$sql="SELECT MAX(Date) from total_quantity where Item_name='$item_name' ";
    $result = mysql_query($sql);
    $row = mysql_fetch_assoc($result);
    $max_date=$row['MAX(Date)'];
	//--------------------------------------
    $sql="SELECT Opening_balance,Item_received,Sold_quantity,Damaged from total_quantity where Item_name='$item_name' AND Date='$max_date' ";
	$result = mysql_query($sql);
    $row = mysql_fetch_assoc($result);
	$A=$row['Opening_balance']+$row['Item_received']-$row['Sold_quantity']-$row['Damaged'];
	
   
	$sql="INSERT INTO total_quantity (Item_name,Date,Opening_balance,Damaged) VALUES('$item_name','$myDate','$A','$item_damaged') ";
	if(mysqli_query($link, $sql)){
		echo " \n total_quantity Insertion Successfull 29!!\n";
	    }
	   else 
	    {
			$result = mysql_query($sql);
            $row = mysql_fetch_assoc($result);
            echo $row;
		    echo "\n Insertion error 18\n";
	    }
}
mysqli_close($link);
?>