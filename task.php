<? 
include_once"config.php";

include_once"header.php";

if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
	header("Location: index.php");
}else{

$fetch_users_data = mysql_fetch_object(mysql_query("SELECT * FROM `code` WHERE username='".$_SESSION['username']."'"));
$username = $_SESSION['username'];
$user = $_COOKIE["user"];
if (isset($_COOKIE["user"]))
  ?><h2><?php echo "Welcome $user!<br />"; ?></h2><?
}

if (isset($_POST['login']) && $_FILES["file"]["error"] == 0)
{


if ($_FILES["file"]["error"] > 0)
    {
    echo "No File attached<br />";
    }
  else
    {
   
    if (file_exists("solutions/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "solutions/" . $_FILES["file"]["name"]);
      }
    }
	
}

if (isset($_POST['login']) && $_FILES["file"]["error"] > 0)
{

echo "<script>alert('Please check file that has been attached. There appears to be some error in it.');";
}

?>

<link rel="stylesheet" href="reveal.css">	
	  	
		<!-- Attach necessary scripts -->
		<!-- <script type="text/javascript" src="jquery-1.4.4.min.js"></script> -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
		<script type="text/javascript" src="jquery.reveal.js"></script>


<center><h3>Questions</h3></center>

<center>
<table width="384" align="center" border="2" cellspacing = 2 cellpadding = 5>


  <tr> 
    <th>Question Name</th> 
    <th>Upload Answer</th> 
  </tr>
  <tr>  <form method = "post" enctype="multipart/form-data">
    <th><a href = "Bingo.pdf">Bingo</a></th> 
    <td><input type="file" name="file" id = "file" /></td> 
  </tr> <tr><td colspan = 2 align = center><input type = "submit" value = "Submit" name = "login" class="send" /></td></tr>
					</table>
            
                </form>
</table>
</center>

<p><a href="#" data-reveal-id="myModal">View Rules</a></p>
<p><a href = "logout.php">Logout</a></p>
</font>
		<div id="myModal" class="reveal-modal">
			<h1>Rules</h1>
			<p>1. This event is spread over 3 days, 13 - 15 February, 2013.<br />
			2. The winners will be declared at the end of the duration of the event.<br />
			3. 3 Questions will be uploaded on this page. 1 each day. Marks allotted to the questions are 5, 10 and 15 respectively.<br />
			4. Click on the Question Name to view the complete question.<br />
			5. The language to be used is java only. Only a single solution can be uploaded.<br />
			6. The naming scheme of the file is (username)_(question_name).java<br />
			7. Solutions submitted in any other name will not be considered even if the solution is right.<br />
			8. Judging Criteria is based on the accuracy of the code, the size of the code and the time required for the code to run.<br />
			9. Remember, the shorter and faster the code is, higher is the score you will receive.<br />
			10. No copying allowed. Any person submitting a copied code will be disqualified.<br />
			11. If 2 persons submit the same code, both will be disqualified.<br />
			12. The decision of the event head is final.<br />
			13. Your scores will be updated and notified to you as soon as your solution is evaluated.<br />
			</p>
			<p>For any other queries, send an email at sajid.abdulla.91@gmail.com</p>
			<a class="close-reveal-modal">&#215;</a>
		</div>
</body>
</html>