<? 
include_once"config.php";
$report = "Enter Details";
if(isset($_POST['register'])){
$name = $_POST['name'];
$passid = $_POST['passid'];
$uemail = $_POST['uemail'];
$pass2 = $_POST['pass2'];
$utele = $_POST['utele'];
$user = $_POST['user'];

if($name == NULL OR $passid == NULL OR $uemail == NULL OR $pass2 == NULL OR $user == NULL)
{
$report = "Please complete the form below.";

}else{
if(strlen($name) <= 2){
$report = "Your Name must be atleast 3 characters.";
}else{
$check_members = mysql_query("SELECT * FROM `code` WHERE `username` = '$user'");   
if(mysql_num_rows($check_members) != 0){
$report = "This username is already Registered";

}else{ 
if(strlen($passid) <= 2){
$report = "Password must be atleast 3 characters.";

}else{
if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $uemail)){ 
$report = "email address not valid.";

}else{
if(!preg_match("/^[7-9][0-9]{9}$/i",$utele)){
$report = "enter valid mobile number.";

}else
if($passid != $pass2)
{
$report = "Passwords do not match.";

}else
{
$tbl_name='code';
$sql="INSERT INTO $tbl_name(name, email, phone, level, username, password)VALUES('$name', '$uemail', '$utele', 1, '$user', '$passid')";
$result=mysql_query($sql);
if($result)
{
$report = "Registration Successful. Please Proceed to login";
header( "refresh:2;url=index.php" );
}
}}}}}}}
include_once"header.php";
?> 
<center><h2>Register Here</h2></center>

                 <form method = "post">
                    
                   <table width="384" align="center" border="0"> <h5><? echo "<tr><td colspan='2' align = 'center'><font color = 'yellow'>".$report."</font></td></tr><tr>";?></h5>
				   <tr><td>
                    <label>Name:</label></td><td><input type="text" name="name" class="contact_input" />
                                        </td></tr><tr><td>
					<label>Email:</label></td><td><input type="text" name="uemail" class="contact_input" />
                                        
                    </td></tr>
					<tr><td>
					<label>Username:</label></td><td><input type="text" name="user" class="contact_input" />
                                        
                    </td></tr>
					<tr><td>
                     
                    <label>Password:</label></td><td><input type="password" name="passid" class="contact_input" />
                                      
                  </td></tr><tr><td>
					
					<label>ReType Password:</label></td><td><input type="password" name="pass2" class="contact_input" />
                                      
                     </td></tr><tr><td>
					
					<label>Mobile:</label></td><td><input type="text" name="utele" class="contact_input" />
                                      
                     </td></tr><tr><td align = center>
                    <input type = "reset" value = "Reset"/>
</td><td  align = center>
					<input type = "submit" value = "Submit" name = "register" class="send" />
             </td></tr></table>
                </form>
<p><a href = "index.php">Goto Login Page</a></p>			
				</body>
</html>