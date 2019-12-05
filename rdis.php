<html>

<style>
body {
background-image: url("c (2).jpg");
background-repeat: no-repeat;
background-size: 100% 100%}
.dropbtn , button {
  background-color: black;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropup {
  position: relative;
  display: inline-block;
}

.dropup-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  bottom: 50px;
  z-index: 1;
}

.dropup-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropup-content a:hover {background-color: #ccc}

.dropup:hover .dropup-content {
  display: block;
}

.dropup:hover .dropbtn {
  background-color: #333;
}
button:hover  {
  background-color: #333;
}
</style>
    <table width=850; border="5" align="center">
    <caption><h1>RENT DETAILS</h1></caption>
        <tr>
            <th>Rent ID</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Customer Phone</th>
            <th>Furniture ID</th>
            <th>Showroom ID</th>
            <th>Quantity</th>
            <th>Term</th>
						
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','furniture_renting');
            $Query = "SELECT * FROM RENTS";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
		$Rent_ID = $Datarows['Rent_ID'];
                $Customer_name = $Datarows['Customer_name'];
                $Customer_Address = $Datarows['Customer_Address'];
                $Customer_Phone = $Datarows['Customer_Phone'];
		$Furniture_ID=$Datarows['Furniture_ID'];
		$Showroom_ID=$Datarows['Showroom_ID'];		
		$No_of_pieces=$Datarows['No_of_pieces'];
		$Term=$Datarows['Term'];		
                
            
                
            ?>
        <tr>
        <td><?php echo $Rent_ID; ?></td>
        <td><?php echo $Customer_name; ?></td>
        <td><?php echo $Customer_Address; ?></td>
	<td><?php echo $Customer_Phone; ?></td>     
 	<td><?php echo $Furniture_ID; ?></td>	
	<td><?php echo $Showroom_ID; ?></td>
	<td><?php echo $No_of_pieces; ?></td>
	<td><?php echo $Term; ?></td>
            </tr>
            
    <?php    } ?>    
    </table>
  <div class="dropup" style="position:relative; left:20%;top:400px">
  <button class="dropbtn">Showroom</button>
  <div class="dropup-content">
    <a href="sa.html">Add</a>
    <a href="sup.html">Update</a>
    <a href="sdel.html">Delete</a>
  </div>
  </div>
  <div class="dropup" style="position:relative; left:30%;top:400px">
  <button class="dropbtn">Furniture</button>
  <div class="dropup-content">
    <a href="11a.html">Add</a>
    <a href="fup.html">Update</a>
    <a href="fdisp.php">Display</a>
  </div>
</div>
<div class="dropup" style="position:relative; left:40%;top:400px">
  <button class="dropbtn">Record</button>
  <div class="dropup-content">
    <a href="rins.html">Add</a>
    <a href="fur.html">Update</a>
  </div>
</div>
<button type="button" onclick="location.href='bill.html';" style="position:relative; left:50%; top: 400px"> Get Bill</button> 
                

</body>
</html>