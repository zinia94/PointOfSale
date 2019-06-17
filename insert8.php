<?php
//error_reporting(0);
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
$startTime = mysqli_real_escape_string($link, $_REQUEST['item_date_1']);
$endTime = mysqli_real_escape_string($link, $_REQUEST['item_date_2']);
$A = strtotime( $startTime,'12:00' );
$B = strtotime( $endTime,'12:00' );


echo "<h1>Kitchen Item</h1>";

echo '<table border="1" width="100%">';
echo '<thead>';
echo '<tr>';
echo '<th>Date</th>';
echo '<th>Item name</th>';
echo '<th>Opening Balance</th>';
echo '<th>Received Item</th>';
echo '<th>Sold Quantity</th>';
echo '<th>Damaged/Broken Item</th>';
echo '<th>Closing Balance</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
for ( $i = $A; $i <= $B; $i = $i + 86400 ) {
 $thisDate = date( 'Y-m-d', $i );
echo '<tr>';
echo '<td>';
echo $thisDate;
echo '</td>';

echo '<td>';
echo '<table border="1" width="100%">';

$sql="SELECT Item_name from type where Item_Type='Item from kitchen' ";
$result=mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
	$item_name=$row['Item_name'];
	echo '<tr>';
echo '<td>';
echo $item_name;
echo '</td>';
echo '</tr>';
}

echo '</table>';
echo '</td>';

echo '<td>';
echo '<table border="1" width="100%">';
$result=mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
$item_name=$row['Item_name'];
$sql2="SELECT Opening_balance from total_quantity where Item_name='$item_name' AND Date='$thisDate' ";
$result2= mysql_query($sql2);
$row2= mysql_fetch_assoc($result2);
echo '<tr>';
echo '<td colspan="5">';
if(mysql_num_rows($result2)==1)
{
     echo $row2['Opening_balance'];
}
else
{
	$sql2="SELECT MAX(Date) from total_quantity where Item_name='$item_name' AND Date<'$thisDate' ";
    $result2 = mysql_query($sql2);
	if(mysql_num_rows($result2)==1){
    $row2 = mysql_fetch_assoc($result2);
	
    $max_date=$row2['MAX(Date)'];
	$sql2="SELECT Opening_balance,Item_received,Sold_quantity,Damaged from total_quantity where Item_name='$item_name' AND Date='$max_date' ";
	$result2 = mysql_query($sql2);
    $row2 = mysql_fetch_assoc($result2);
	$A=$row2['Opening_balance']+$row2['Item_received']-$row2['Sold_quantity']-$row2['Damaged'];
	echo $A;
	}
	else
	echo "0";
}
echo '</td>';
echo '</tr>';
}
echo '</table>';
echo '</td>';

echo '<td>';
echo '</td>';

echo '<td>';
echo '</td>';

echo '<td>';
echo '</td>';

echo '<td>';
echo '</td>';


echo '</tr>';
}
echo '</tbody>';

echo '</table>';

                                                                   
                                                                
															mysqli_close($link);


?>