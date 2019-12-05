<html> 
<style>
.button {
    background-color: black;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<body background="190220.jpg">
<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "furniture_renting";
 $con = new mysqli($servername,$username,$password,$dbname);
if($con->connect_error) {
	die("connection failed: " . $con->connect_error);
} 
	$rid=$_POST["Rent_ID"]; 
	$cn=$_POST["Customer_name"]; 
	$ca=$_POST["Customer_Address"];

	$cp=$_POST["Customer_Phone"];
	$fid=$_POST["Furniture_ID"];
	$sid=$_POST["Showroom_ID"];
	$nop=$_POST["No_of_pieces"];
	$t=$_POST["Term"];	
	$sql="UPDATE `rents` SET `Customer_name`='$cn', `Customer_Address`='$ca', `Customer_Phone`='cp',
 `Furniture_ID`='$fid', `Showroom_ID`='$sid', `No_of_pieces`='$nop', `Term`='$t' where Rent_ID='$rid';"; 
	if($con->query($sql) == TRUE){ 
		echo "<b>Record Updated Successfully</b>";
	}else{ 
		echo "<b>Incorrect Details</b>" ;
	}
$con->close();
?>
 
</body>
</html>
