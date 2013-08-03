<? 
include_once"config.php";
$final_report="Please complete all the fields below..";
if(isset($_POST['login'])){
$username= trim($_POST['username']);
$password = trim($_POST['password']);
if($username == NULL OR $password == NULL){
$final_report="Please complete all the fields below..";
}else{
$check_user_data = mysql_query("SELECT * FROM `code` WHERE `username` = '$username'") or die(mysql_error());
if(mysql_num_rows($check_user_data) == 0){
$final_report="Username or Password does not exist.";
}
$check_user_data2 = mysql_query("SELECT * FROM `code` WHERE `password` = '$password'") or die(mysql_error());
if(mysql_num_rows($check_user_data2) == 0){
$final_report="Username or Password does not exist.";
}
$get_user_data = mysql_fetch_array($check_user_data);
if($get_user_data['password'] == $password){
$start_idsess = $_SESSION['username'] = "".$get_user_data['username']."";
$start_passsess = $_SESSION['password'] = "".$get_user_data['password']."";
setcookie("user",$get_user_data['name'], time()+600);
$final_report="You are about to be logged in, please wait a few moments.. <meta http-equiv='Refresh' content='0; URL=task.php'/>";
}}}
include_once"header.php";
?> 

<center><h3>Login Page</h3></center>
<form action="" method="post"> 
<center>
<table width="384" align="center" border="0"> <h5><? echo "<tr><td colspan='2' align = 'center'><font color = 'yellow'>".$final_report."</font></td></tr><tr>";?></h5>


  <tr> 
    <td>Username:</td> 
    <td><input type="text" name="username" size="30" maxlength="25"></td> 
  </tr> 
  <tr> 
    <td>Password:</td> 
    <td><input type="password" name="password" size="30" maxlength="25"></td> 
  </tr>
 
   <tr>
   <td>&nbsp;</td>
   <td><input type="submit" value="Login" name="login" ></td>
</table>
</center>
</form>
<p><a href = "register.php">Register for Code Warz</a></p>
</body>
</html>
