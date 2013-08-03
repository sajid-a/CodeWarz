<? 


include_once"config.php";;
session_unset('username');
session_unset('password');
session_destroy();
echo "<meta http-equiv='Refresh' content='2; URL=index.php'/>";
include_once"header.php";
?> 


<br><br><br><br><br>
<center><h2>You are now logging out..</h2></center>
<center><h2>Thank you for joining us for Code Warz</h2></center>
</body>
</html>
