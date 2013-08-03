<? 

ob_start();session_start();
$dbhost = "localhost";
$dbname = "coswebin_tatvamoksh";
$dbuser = "coswebin_tatva";
$dbpass = "lol123";

mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname) or die(mysql_error());
 
?>