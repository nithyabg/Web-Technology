<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    

        .header {
            color: white;
            background-image: url("images (2).jpg");
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
        }

        .navbar {
            width: 100%;
            background-color: #333;
            overflow: auto;
font-size:20px;
position:relative;
        }

        .navbar a:hover {
            background-color: #000;
        }

        @media screen and (max-width: 500px) {
            .navbar a {
                float: none;
                display: block;
            }
        }

        .navbar a {
            float: left;
            text-align: center;
            padding: 12px;
            color: white;
            text-decoration: none;
            font-size: 20px;
        }

        .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }

        #page-container {
            position: relative;
            min-height: 100vh;
        }

        #content-wrap {
            padding-bottom: 7.5rem;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 7.5rem;
            background-color: #333;
            text-align: center;
        }

        .footer a {
            text-align: center;
            padding: 12px;
            color: white;
            text-decoration: none;
            font-size: 20px;
        }

        .login {
            background-color: #555;
            color: white;
            padding: 12px;
            float: right;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: 20px;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 10%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        .modal {
            display: none;
            position: absolute;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 50%;
        }

        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .SupFlpDivCls {
            width: 315px;
            height: 315px;
            margin: 5px;
            border: 1px solid #CCC;
            perspective: 1000px;
        }

        .SubFlpDivCls {
            width: 100%;
            height: 100%;
            cursor: pointer;
            position: relative;
            transition: transform 1s;
            transform-style: preserve-3d;
        }

        .SubFlpDivCls:hover {
            transform: rotateY(180deg);
        }

        .FacFlpDivCls {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            background-size: cover;
        }

        .BacFlpDivCls {
            background: black;
            transform: rotateY(180deg);
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            text-align: center;
            color:white;
            font-size: 28px;
            overflow:hidden;
        }
select::-ms-expand {
  display: none;
}
select {
border:none;
  display: inline-block;
  box-sizing: border-box;
  padding: 0.5em 2em 0.5em 2em;
  font: inherit;
font-size:inherit;
  line-height: inherit;
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  color:white;
  background: #333;
  background-repeat: no-repeat;
  background-image: linear-gradient(45deg, transparent 50%, white 50%), linear-gradient(135deg,white 50%, transparent 50%);
  background-position: right 15px top 1em, right 10px top 1em;
  background-size: 5px 5px, 5px 5px;
}
    </style>
<!--<script>
function changeFunc(selectObject) {
	var value=selectObject.value;
	console.log(value);
}
/*
var val=document.getElementById("sel").onchange=function(){
	var value=document.getElementById("sel").value;
}
/*
onchange="changeFunc(this.options[this.seletedIndex].value)"
console.log(val);
var mysql=require('mysql');
var con=mysql.createConnection({
	host: "localhost",
	user: "root",
database: "furniture_renting"});
con.connect(function(err) {
if(err) throw err;
var query="'select Furniture,No_of_pieces from furniture where Showroom_ID = '+mysql.escape(val)"; 
con.query(sql,function(err,result){
	if (err) throw err;
	document.write(result);
});
});
*/
</script>
-->
</head>

<body>
    <div id="page-container">
        <div id="content-wrap">
            <div class="header">

                <marquee>
                    <h1>WELCOME TO FURNITURE RENTING</h1>
                </marquee>
            </div>
            <div class="navbar" onchange="changeFunc(this)">
                <a href="welcome.php"><i class="fa fa-fw fa-home"></i>Home</a>
                <a href="ab.html"><i class="fa fa-fw fa-info"></i>About</a>
				<a href="fdisp.php">Check Availability</a>
<select id="sel" >
<option value="Check">Branches</option>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "furniture_renting";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "select Showroom_ID, Showroom_Address from Showroom";
$res = $conn->query($sql);
while($row=mysqli_fetch_row($res))
{
	echo '<option value="'.$row[0].'">'.$row[1].'</option>';
}
$conn->close();
?>
</select>              <button class="login" onclick="document.getElementById('id01').style.display='block'"
                    style="width:auto;">Login</button>
            </div>
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Vj7lZKDMskhDjweQNl2QzYFcX4No4ddg" width="1240"
                height="350" style="padding: 10px;margin-left: 40px;margin-top: 10px; border: 1px solid #333"></iframe>
            <table>
                <tr>
                    <td>
                        <div class="SupFlpDivCls">
                            <div class="SubFlpDivCls">
                                <div class="FacFlpDivCls"><img src="dsc_9417_b.jpg" alt="Avatar" style="width:100%">
                                </div>
                                <div class="BacFlpDivCls"><div class="text">Shelfe couch with bookshelves</div></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="SupFlpDivCls">
                            <div class="SubFlpDivCls">
                                <div class="FacFlpDivCls">
                                    <img src="20180806_143111-min_1.jpg" alt="Avatar" style="width:100%"></div>
                                <div class="BacFlpDivCls"><div class="text">Starlight Queen Size Bed with Mattress and Side table</div></div>
                            </div>
                        </div>
        </div>
        </td>
        <td>
            <div class="SupFlpDivCls">
                <div class="SubFlpDivCls">
                    <div class="FacFlpDivCls">
                        <img src="dscn0300-min.jpg" alt="Avatar" style="width:100%"></div>
                    <div class="BacFlpDivCls"><div class="text">Princess crown</div></div>
                </div>
            </div>



        </td>

        <td>
            <div class="SupFlpDivCls">
                <div class="SubFlpDivCls">
                    <div class="FacFlpDivCls">
                        <img src="dsc_0876.jpg" alt="Avatar" style="width:100%"></div>
                    <div class="BacFlpDivCls"><div class="text">Orbital Dining Table</div></div>
                </div>
            </div>
        </td>
        </tr>
        </table>
    </div>
    <div class="footer">
        <h2 style="color:white;">CONTACT US</h2>
        <a
            href="https://www.google.com/maps/place/Buffalo+Back/@12.9354497,77.583812,17z/data=!3m1!4b1!4m5!3m4!1s0x3bae15bd7670458b:0x97109e457eb10635!8m2!3d12.9354445!4d77.5860007"><i
                class="fa fa-address-card"></i> Head Quaters</a>
        <a href="https://mail.google.com/mail/?extsrc=mailto&url=mailto%3A%3Fto%3Dcustomercare%40gmail.com%26"
            title="Please Click"><i class="fa fa-fw fa-envelope"></i> Email</a>
        <a href="https://instagram.com/furniture_renting"><i class="fa fa-instagram" aria-hidden="true"></i>
            Instagram</a>
        <a href="#"><i class="fa fa-fw fa-phone"></i> 1800-676-8000</a>
    </div>

    <div id="id01" class="modal">
        <form class="modal-content animate" action="login.php" method="POST">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <img src="Capture.PNG" alt="Avatar" class="avatar">
            </div>
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                    class="cancelbtn">Cancel</button>
     
            </div>
        </form>
    </div>
    <script>
        var modal = document.getElementById('id01');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    </div>
</body>

</html>