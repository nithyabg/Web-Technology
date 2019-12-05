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
	$FNAME=$_POST["FNAME"];
	$SID=$_POST["SID"];
	$NO_OF_PIECES=$_POST["NO_OF_PIECES"]; 
	$PRICE=$_POST["PRICE"];  
	
	
		$sql="UPDATE furniture SET Furniture='$FNAME',Showroom_ID='$SID', No_of_pieces='$NO_OF_PIECES',price_per_term='$PRICE' WHERE Furniture_ID='$FID' "; 
	if($con->query($sql) == TRUE){ 
		echo "<b><font size=6>Record Updated Successfully</font></b>";
	}else{ 
		echo "<b><font size=6>Incorrect Details</font></b>" ;
	}
$con->close();
?> 
</body>
</html>
