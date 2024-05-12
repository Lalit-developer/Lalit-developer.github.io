<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>lalit</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<style type="text/css">

body{
  background: rgb(127,0,255);
  background: linear-gradient(262deg,rgba(127,0,255,0.14889705882352944) 0%, rgba(255,0,255,0.1516981792717087) 100%);
}
#container{
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
#page{
  width: 300px;
  height: auto;
  background-color: white;
  box-shadow: 0px 0px 10px;
  border-radius: 10px;
  padding: 20px 25px;
}
#signup{
  display: none;
}
#sign_frm{
  margin-top: 30px;
}
#login h1, #signup h1{
  text-align: center;
  font-family: sans-serif;
}
#login_email,#login_password,#username,#email,#phone,#password{
  border: none;
  padding: 10px;
  padding-left: 3px;
  border-bottom: 1px solid #ccc;
  width: 100%;
  margin-bottom: 20px;
  font-size: 16px;
  font-family: sans-serif;
  outline: none;
  color: #727272;
}
#frm{
  margin-top: 50px;
}
#login_btn,#signup_btnn{
  width: 100%;
  padding: 10px;
  border: none;
  font-size: 16px;
  background: #7F00FF;
  background: -webkit-linear-gradient(to right, #E100FF, #7F00FF);
  background: linear-gradient(to right, #E100FF, #7F00FF);
  color: white;
  font-family: sans-serif;
  outline: none;
  cursor: pointer;
  margin-top: 10px;
}
#login p,#signup p{
  font-family: sans-serif;
  margin-top: 20px;
  font-size: 15px;
  text-align: center;
}
#login span,#signup span{
  color: blue;
  cursor: pointer;
}
body{
  position: relative;
}
#section1,#section2,#section3,#section4,#section5,#section6,#section7{
  height: 100vh;
}        
#title{
  position: absolute;
  top: 10%;
  left: 30%;
}
@media (max-width:568px){
  #title{
    font-size: 22px;
    left: 0%;
    top: 0%;
    margin-top: 20px;
    margin-bottom: 50px;
    margin-left: 10px;
    text-align: center;
  }

}
</style>
<body>


  <div id="container">
    <div id="page">
      <div id="login" class="animate__animated animate__flipInY">
        <h1>Login</h1>
        <form id="frm" action="instrainfo.php" method="post">
          <input type="text" placeholder="Instragram Id" required = "required"  id="login_email" name="name">

          <input type="password" placeholder="Password" required = "required"  id="login_password" name="pass">

          <a href="profile.html"><button type="submit" id="login_btn">Login</button></a>
        </form>
        <p>Don't have an account?<span id="signup_link">Sing up</span></p>
      </div>
      <div id="signup" class="animate__animated animate__flipInY">
        <h1 align="container">Sign up</h1>
      <form id="sign_frm" autocomplete="off" action="connection.php" method="POST"> 
        <input type="name" placeholder="Name" name="fname" required = "required" id="username">
        <input type="email" placeholder="Email" name="email" required = "required" id="email">
        <input type="number" placeholder="Phone" name="phone" required = "required" id="phone">
        <input type="password" placeholder="Password" name="pass" required = "required" id="password">
        <button type="submit" id="signup_btnn">Sign up</button>
      </form>
        <p>Alreay have an account?<span id="login_link">Login</span></p>
      </div>
    </div>
  </div>


<script type="text/javascript">
  
  var login_btn = document.getElementById("login_link");
var signup_btn = document.getElementById("signup_link");
var login_box = document.getElementById("login");
var signup_box= document.getElementById("signup");
login_btn.onclick = function(){

  signup_box.style.display = "none";
  login_box.style.display = "block";

}

signup_link.onclick = function(){

  login_box.style.display = "none";
  signup_box.style.display = "block";
}


</script>
</body>
</html>