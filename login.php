<?php session_start(); /* Starts the session */

	/* FILE CONTAINING LOGIN FORM. NAVIGATES TO CROSSWORD AFTER SUCCESSFUL SUBMISSION*/


	/* Check Login form submitted */	
	if(isset($_POST['Login-submit'])){
		/* Define username and associated password array */
		$logins = array('Jaiana' => '123','Cynthia' => '123','Egill' => '123');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username'] = $logins[$Username];
			header("location:crossword.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Incorrect login</span>";
		}
	}
?>

<html>
<head>
<meta charset="utf-8">
	<title>Tangled Web -- Crossword Puzzle</title>
</head>
<body>
<form action="" method="post">
  <table>
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Login-submit" type="submit" value="Login"></td>
    </tr>
  </table>
</form>
</body>
</html>