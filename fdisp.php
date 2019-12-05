<html>
<style>
body {
background-image: url("c (2).jpg");
background-repeat: no-repeat;
background-size: 100% 100%}
</style>
<body>

    <table width=850; border="5" align="center">
    <caption><h1>FURNITURE DETAILS</h1></caption>
        <tr>
            <th>FURNITURE ID</th>
            <th>FURNITURE</th>
		<th>SHOWROOM ID</th>
            <th>NO_OF_PIECES</th>
			<th>PRICE(PER TERM/15days)</th>
			
            
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','furniture_renting');
            $Query = "SELECT * FROM furniture";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $FID = $Datarows['Furniture_ID'];
                $FNAME = $Datarows['Furniture'];
		$SID=$Datarows['Showroom_ID'];
                $NO_OF_PIECES = $Datarows['No_of_pieces'];
		$PRICE = $Datarows['price_per_term'];
				
                
            
                
            ?>
        <tr>
        <td><?php echo $FID; ?></td>
        <td><?php echo $FNAME; ?></td>
	<td><?php echo $SID; ?></td>
        <td><?php echo $NO_OF_PIECES; ?></td>
        <td><?php echo $PRICE; ?></td> 
 		

            </tr>
            
    <?php    } ?>    
    </table>
    
</body>
</html>