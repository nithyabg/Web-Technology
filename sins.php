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
$dbname = "FURNITURE";
 $con = new mysqli($servername,$username,$password,$dbname);
if($con->connect_error) {
	die("connection failed: " . $con->connect_error);
} 
	$SRID=$_POST["SRID"]; 
	$SRPHONE=$_POST["SRPHONE"]; 
	$NO_OF_EMP=$_POST["NO_OF_EMP"]; 
	$MSSN=$_POST["MSSN"]; 
	
		$sql="insert into showroom(SRID,SRPHONE,NO_OF_EMP,MSSN)values('$SRID','$SRPHONE','$NO_OF_EMP','$MSSN')"; 
	if($con->query($sql) == TRUE){ 
		echo "<b><font size=6>New Record Created Successfully</font></b>";
	}else{ 
		echo "<b><font size=6>Incorrect Details</font></b>" ;
	}
$con->close();
?>

</body>
</html>
