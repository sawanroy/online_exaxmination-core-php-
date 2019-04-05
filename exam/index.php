<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Welcome to codematrix</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
  <link href="css/styles.css" rel="stylesheet">
    <link href="css/queries.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
</head>

<body>
<body background="image/hero-bg.jpg">
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1 class='animated fadeInDown' align=center>Welcome to Codematrix</h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="animated fadeInDown"><font color="#00000">Subject for MCQ </font></a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="animated fadeInDown"><font color="#00000">Result </font></a></td>
  </tr>
</table>';
   
		exit;
		

}


?>
<table width="100%" border="0">
  <tr>
    <td width="70%" height="89"><h1 class="animated fadeInDown"><center><font size="+3"> WELCOME TO CODEMATRIX</font></center></h1></td>
    <td width="1%" rowspan="2" bgcolor=""><span class="style6"></span></td>
    <td width="29%" bgcolor=""><div align="center" class="style1">
      <p>&nbsp;</p>
      <p><font color="#000000" size="+2">User Login </font></p>
    </div></td>
  </tr>
  <tr>
    <td height="296" valign="top"><div align="center">
        <h1 class="animated fadeInDown">&nbsp;</h1>
      <span class="style5"><img src="images/HTML5.jpg" width="129" height="100"><span class="style7"><img src="images/CPlusPlus.jpg"width="129" height="100"><img src="images/javalogo.png" width="129" height="100"></span>        </span>
        <param name="movie" value="english theams two brothers.dat">
        <param name="quality" value="high">
        <param name="movie" value="Drag to a file to choose it.">
        <param name="quality" value="high">
        <param name="BGCOLOR" value="#FFFFFF">
<p align="left" class="style5">&nbsp;</p>
      <blockquote>
          <p align="left" class="style5"><span class="style7"></span></p>
      </blockquote>
    </div></td>
    <td valign="top"><form name="form1" method="post" action="">
      <table width="200" border="0">
        <tr>
          <td><span class="style2">Login ID </span></td>
          <td>&nbsp;
            <input name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span class="style2">Password</span></td>
          <td><input name="pass" type="password" id="pass2">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <input name="submit" type="submit" id="submit" class="learn-more-btn" value="Login">
                  
                </div>
              </div>		  </td>
        </tr>
        <tr>
          <td height="72" colspan="2" bgcolor=""><div align="center"><span class="style4">New User ? <a href="signup.php">Signup</a></span></div></td>
          </tr>
      </table>
      <div align="center">
        </div>
    </form></td>
  </tr>
</table>

</body>
</html>
