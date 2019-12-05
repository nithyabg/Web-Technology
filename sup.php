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
	$SRID=$_POST["SRID"]; 
	$SA=$_POST["SA"]; 
	$SRPHONE=$_POST["SRPHONE"]; 
	
	
		$sql="UPDATE SHOWROOM SET Showrroom_number='$SRPHONE',Showroom_Address='$SA' WHERE Showroom_ID='$SRID' "; 
	if($con->query($sql) == TRUE){ 
		echo "<b><font size=6>Record Updated Successfully</font></b>";
	}else{ 
		echo "<b><font size=6>Incorrect Details</font></b>" ;
	}
$con->close();
?>
 
</body>
</html>
