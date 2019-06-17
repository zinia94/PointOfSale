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
for($i=0;$i<=9;$i++){
$item_name=mysqli_real_escape_string($link, $_REQUEST['item_name'][$i]);
echo $item_name;
if($item_name!=""){


$sold_quantity = mysqli_real_escape_string($link, $_REQUEST['sold_quantity'][$i]);
$sale_price = mysqli_real_escape_string($link, $_REQUEST['sale_price_per_unit'][$i]);
$date =mysqli_real_escape_string($link, $_REQUEST['date_order']);

echo $date;
echo $sold_quantity;
echo $sale_price;
$myDate = date('Y/m/d');

$sql= "SELECT Sold_quantity from sellinginfo WHERE Item_name='$item_name' AND Date='$myDate' AND Price='$sale_price'";
$result= mysql_query($sql);
$row= mysql_fetch_assoc($result);
var_dump($row);
if(mysql_num_rows($result)==1)
{
	$sql="UPDATE sellinginfo SET Sold_quantity=Sold_quantity+'$sold_quantity' WHERE Item_name='$item_name' AND Date='$myDate' AND Price='$sale_price' ";
    if(mysqli_query($link, $sql)){
		echo "sellinginfo Updated Successfully 67!!\n";
	}
	else echo "error 9\n";
}
else
{
	$sql="INSERT INTO sellinginfo (Item_name,Date,Price,Sold_quantity) VALUES('$item_name','$myDate','$sale_price','$sold_quantity') ";
	if(mysqli_query($link, $sql)){
		echo " \n sellinginfo Insertion Successfull 23!!\n";
	    }
	   else 
	    {
			$result = mysql_query($sql);
            $row = mysql_fetch_assoc($result);
            echo $row;
		    echo "\n Insertion error 8\n";
	    }
}

//------------------

$sql= "SELECT Sold_quantity from total_quantity WHERE Item_name='$item_name' AND Date='$myDate' ";
$result= mysql_query($sql);
$row= mysql_fetch_assoc($result);
var_dump($row);
if(mysql_num_rows($result)==1)
{
	$sql="UPDATE total_quantity SET Sold_quantity=Sold_quantity+'$sold_quantity' WHERE Item_name='$item_name' AND Date='$myDate' ";
    if(mysqli_query($link, $sql)){
		echo "sellinginfo Updated Successfully 67!!\n";
	}
	else echo "error 9\n";
}
else
{
	$sql="SELECT MAX(Date) from total_quantity where Item_name='$item_name' ";
    $result = mysql_query($sql);
    $row = mysql_fetch_assoc($result);
    $max_date=$row['MAX(Date)'];
	$sql="SELECT Opening_balance,Item_received,Sold_quantity,Damaged from total_quantity where Item_name='$item_name' AND Date='$max_date' ";
	$result = mysql_query($sql);
    $row = mysql_fetch_assoc($result);
	$A=$row['Opening_balance']+$row['Item_received']-$row['Sold_quantity']-$row['Damaged'];
	
   
	$sql="INSERT INTO total_quantity (Item_name,Date,Opening_balance,Sold_quantity) VALUES('$item_name','$myDate','$A','$sold_quantity') ";
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


}
}

// close connection
mysqli_close($link);


?>