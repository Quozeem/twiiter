<?php 
session_start();

function validate(){
  if(isset($_POST['login'])){
    $uname=$_POST['name'];
    $password=$_POST['password'];
    include "config.php";
    $logged=new db_connect();
    $querry=$logged->login($uname,$password);
    while($row=mysqli_fetch_assoc($querry)){
      $named=$row['name'];
      $pass=$row['email'];
     }if($named == $uname &&  $pass == $password){
       $_SESSION['login']=true;
      header("location:welcome.php");
     }
  else{
   return "incorrect parameters";
  }
}
}
?>
<!DOCTYPE HTML>
<html>
<head>
 <title>Twitter.Its what's happening/Twitter</title>
        <meta charset="UTF-8>
        <meta name="viewport" content="width=device-width",intial-scale="1">
     <link rel="stylesheet" href="mobil.css">
     <link rel="shortcut icon" href="images/images (1).png">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

#logo {
       position:absolute;
       margin:1% 13%;
       width:70%;
       height:50%;
    
     font-size:20px;
    font-family:helvetica neue,segoe ui;
}
.logoo img  {
          position:absolute;
         top:2%;
           left:50%;
}
.logoo   {
           text-align:center;
}

.tter   {
        postion:absolute;
            color:#d4d4aa;
   background-color:#ebfafa;
  width:60%;
  height:15%;
        margin:auto 190px;
     
}
.tter:hover   {
        color:#4d94ff;
}
input[type=text],select {
                  
         padding:11px;
       background-color:#ebfafa;
       display:block;
     border:1px solid #ebfafa;
      font-family:helvetica neue,segoe ui;
     border-color:#ebfafa;
      box-sizing:border-box;
      width:100%;
     border:none;
     outine:none;
      border-bottom:2px solid #666633;

}
input[type=text]:hover  {
         border-bottom:2px solid  #4d94ff;
}
.cext  {
        postion:absolute;
            color:#d4d4aa;
   background-color:#ebfafa;
  width:60%;
  height:15%;
        margin:6% 190px;
     
}
.cext:hover   {
        color:#4d94ff;
}
input[type=password],select {
                  
         padding:11px;
       background-color:#ebfafa;
       display:block;
     border:1px solid #ebfafa;
      font-family:helvetica neue,segoe ui;
     border-color:#ebfafa;
      box-sizing:border-box;
      width:100%;
     border:none;
     outine:none;
      border-bottom:2px solid #666633;

}
input[type=password]:hover  {
         border-bottom:2px solid #4d94ff;
         
}
.aa {
      position:absolute;
      width:75%;
      height:15%;
        margin:auto 190px;
      
}
input[type=submit],aa   {
                  
         padding:15px;
       background-color: #80b3ff;
       display:block;
     border:1px solid #ebfafa;
      font-family:helvetica neue,segoe ui;
     font-size:15px;
      box-sizing:border-box;
      width:80%;
     border-radius:25px 25px 25px 25px;
     color:white;
     font-weight: 600;
}
.paaa {
        position:absolute;
        margin:7% 322px;
        text-align:center;
        font-size:15px;
      font-family:helvetica neue,segoe ui;
   text-decoration:none;
 border:none;
}
</style>
<body>
<h3><?php echo validate() ;?></h3>
<div id="logo">
<div class="logoo">
<img src="images/images (1).png" width="4%" height="10%"><br><br>
<h2>Log in to Twitter</h2><br>
</div>
<form action="" method="post">
<div class="tter">
<label>Phone,email,or username</label><br>
<input type="text" name="name"><br>
</div>
<div class="cext">
<label>Password</label><br>
<input type="password" name="password"><br>
</div>
<div class="aa">
<input type="submit" name="login" value="Log in"><br>
</div>
<div class="paaa">
<a href="#" style="color:#1aa3ff";>Forgot password?</a>
<a href="#" style="color:#1aa3ff";>.Sign up for Twitter</a>
</div>
</form>


</div>

</body>

</html>