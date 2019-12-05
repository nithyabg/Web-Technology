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
	$FID=$_POST["FID"]; 
	$F=$_POST["FNAME"];
	$SID=$_POST["SID"]; 
	$Nop=$_POST["NO_OF_PIECES"]; 
	$ppt=$_POST["PRICE"]; 
	$sql="INSERT INTO `furniture` (`Furniture_ID`, `Furniture`, `Showroom_ID`, 
`No_of_pieces`, `price_per_term`) VALUES ('$FID', '$F','$SID', '$Nop','$ppt');"; 
	if($con->query($sql) == TRUE){ 
		echo "<b><font size=6>New Record Created Successfully</font></b>";
	}
else{ 
		echo "<b><font size=6>Incorrect Details</font></b>" ;
	}
$con->close();
?>
  
</body>
</html>
