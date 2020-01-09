<!-- FILE CONTAINS SIGN UP FORM. SHOULD SUBMIT NEW USER INFO 
AND NAVIGATE BACK TO lOGIN AFTER REGISTRATION -->

<html>
<title>Tangled Web -- Crossword Puzzle</title>
<body>

</body>

<form action="./login.php" method="post">
  <table>
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Sign up</h3></td>
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
      <td><input name="Submit" type="submit" value="Sign up"></td>
    </tr>
  </table>

</html>