<html>
<title>Login</title>
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

body {
background-image: url("r.jpg");
background-repeat: no-repeat;
background-size: 100% 100%}
</style> 
  <?php
  $usr = "admin";
  $psw = "password";
  $username = '$_POST[uname]';
  $password = '$_POST[psw]';
  session_start();
  if ($_POST['uname']=="admin" && $_POST['psw']=="password")
 {
    $_SESSION['login']=true;
header("Location: rdis.php"); 
    exit; 
}
    else 
    {
      echo "<b><font size=6>Incorrect Username or Password</font></b>" ;
    }
    ?>
<form action="welcome.html" method="POST">
<br><input type="submit" class="button" value="RETURN"/> 
</body>
</html>