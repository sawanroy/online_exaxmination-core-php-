<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Administrative Login - Online Exam</title>
<link href="../quiz.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/queries.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
</head>

<body>
<?php
include("header.php");
?>
<body background="../image/hero-bg.jpg">
<h1 class="animated fadeInDown"><font size="+4"><center>Adminstrative Login</font></center></h1>&nbsp;

<form name="form1" method="post" action="login.php">
<table width="700" border="0">
    <tr>
    <td width="106"><span class="style2"></span></td>
    <td width="132"><span class="style2"><span class="head1"><img src="../image/keys.png" width="131" height="155"></span></span></td>
    <td width="238"><table width="219" border="0" align="center">
  <tr>
    <td width="163" class="animated fadeInDown">Login ID </td>
    <td width="149"><input name="loginid" type="text" id="loginid"></td>
  </tr>
  <tr>
    <td class="animated fadeInDown">Password</td>
    <td><input name="pass" type="password" id="pass"></td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td><div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <a><input name="submit" type="submit" id="submit" class="learn-more-btn" value="Login"></a>
                  
                </div>
              </div>
         </td>
  </tr>
</table></td>
  </tr>
</table>

</form>

</body>
</html>
