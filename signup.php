<?php
 require "config.php";
 class insert extends db_connect{
 public function saveRecords($name,$email,$dob,$day,$month)
 {
  // method of object
  
   $select=mysqli_query($this->dbh,"INSERT INTO twits (name,email,dob,day,month)
        VALUES ('$name','$email','$dob','$day','$month')");
 
 return $select;
 
 } 
 } 
 function check(){
  if(isset($_POST['Next']))
  {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $dob=$_POST['dob'];
  $day=$_POST['day'];
  $month=$_POST['month'];
 
  if(empty($name)){
  return "Please fill field";
 }
 elseif(empty($email)){
   return "Please fill field"; 
  } 
  include_once 'config.php';
  $dataBASE = new db_connect();
  
  $res=$dataBASE->select();
  while($row=mysqli_fetch_assoc($res)){
    $named=$row['name'];
   }
   if($named == $name){
     return "name already exist";
   }
   include_once "config.php";
   $inser=new insert();
  $sql=$inser->saveRecords($name,$email,$dob,$day,$month);
  if($sql)
  {
   echo "<script>alert('Data inserted');</script>";
   }
   else
   {
   echo "<script>alert('Data not inserted');</script>";
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
body {
         background-image:url('https://assets.uigarage.net/content/uploads/2019/04/screencapture-twitter-2019-04-21-10_23_36.png'); 
       background-repeat:no-repeat;
        background-size:cover;
          background-attachment:fixed; 
}
#signup  {
         background-color:white;
          width:6%;
         padding:290px;
        margin:3% auto;
     position:relative;
      box-shadow:0px 2px 4px white; 
      border-radius:15px 15px 15px 15px;     
}
.logo  {
       position:absolute;
      top:3%;
        left:50%;

}
.next   {
         position:absolute;
       top:3%;
        left:87%;
        font-size:20px;
       
}
input[type=submit],next{
        background-color:#66b3ff;
            border:1px solid block;
              border-collapse:collapse;
            font-family:helvetica neue,segoe ui;
          border-color:#66b3ff;
         padding:6px 15px;
        border-radius:20px 20px 20px 20px;
          text-decoration:none;
        color:white;
}
.height {
         position:absolute;
          top:10%;
           left:5%;
}
.name  {
     position:absolute;
     left:5%;
     top:23%;
   color:#4d94ff;
   background-color:#ebfafa;
  width:91%;
  height:10%;
 font-size:22px;
  border:none;
border-collapse:collapse;
}
.name:hover   {
        color: #d4d4aa;

 }
input[type=text],name  {
         padding:10px;
       background-color:#ebfafa;
       
border-collapse: collapse;
      font-family:helvetica neue,segoe ui;
     border-color:#ebfafa;
      width:100%;
     border:none;
     outine:none;
      border-bottom:2px solid #4d94ff;
}
input[type=text],select:hover  {
        border-bottom:2px solid #666633;
}
.code   {
        position:absolute;
        top:32%;
         left:87%;
        color:faintblack;
}
.number  {
      position:absolute;
      top:41%;
      left:5%;
      color:#d4d4aa;
   background-color:#ebfafa;
  width:91%;
  height:10%;
 font-size:22px;
    
}
.number:hover   {
        color:#4d94ff;
}
input[type=text],number  {
         padding:10px;
       background-color:#ebfafa;
       display:block;
     border:1px solid #ebfafa;
      font-family:helvetica neue,segoe ui;
     border-color:#ebfafa;
      box-sizing:border-box;
      width:100%;
     border:none;
     outine:none;
      border-bottom:2px solid #4d94ff;
}

.btn {
       position:absolute;
       font-weight: 600;
      top:58%;
      left:5%; 
      border: none;   
      color:#4d94ff;
      font-size: 18px;
      text-decoration: none;
font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", sans-serif;
}
.btn:hover{
    text-decoration: underline;
}
.word   {
      position:absolute;
      top:65%;
      left:5%;   
}
.write  {
        position:absolute;
      top:67%;
      left:4%;
      font-family:Helvetica Neue;
      font-size:17px;  
}
.month {
             position:absolute;
      top:78%;
      left:5%;
      width:12%;
      height:4%;
}
 .day  {      
        position:absolute;
      top:78%;
      left:30%;
        
      height:7%;
}
.year  {
       position:absolute;
      top:78%;
      left:51%;
      width:12%;
      height:8%;
}
input[type=birthday],select{
           padding:10px;
       background-color:#ebfafa;
       display:block;
     border:1px solid #ebfafa;
      font-family:helvetica neue,segoe ui;
     border-color:#ebfafa;
      box-sizing:border-box;
      width:200%;
     border:none;
     outine:none;
      border-bottom:2px solid #4d94ff;
      
}
input[type=birthday],select:hover  {
        border-bottom:2px solid #666633;
}
</style>
 <body>
 <h3><?php echo check();?></h3>
<div id="signup">
<div class="logo">
<img src="images/images (1).png"  width="10%" height="10%" >
</div>

<form method="post" action="">
<div class="next">
 <input type="submit" name="Next" value="Next"><br>
</div>

<div class="height">
<h2>Create your account</h2><br><br>
</div>

<div class="name">
<label>Name</label><br>

<input type="text" name="name">
</div>
<div class="code">
<p style="color:#777"">0/50</p><br>
</div>
<div class="number">
<label>Email</label><br>
<input type="text" name="email" ><br><br>
</div>

<a href="email.php"class="btn">use email instead</a>

<div class="word">
<h3>Date of Birth</h3>
</div>
<div class="write">
<p style="font-family:helvetica neue,segoe ui; color:#777">This will not be shown publicly.Confirm your own age,even if this account is for business,a pet,or somtheing else</p><br>
</div>
<div class="month">
<label style=" color:#777"">Month</label>
<select name="dob" required> 
<option selected="selected"  disabled="disabled"></option>
<option>jan</option>
<option>feb</option>
<option>march</option>
<option>april</option>
<option>jun</option>
<option>july</option>
<option>august</option>
<option>sept</option>
<option>oct</option>
<option>nov</option>
<option>dec</option>
</select>
</div>
<div class="day">
<label style=" color:#777"">Day</label>
<select name="day" required>
<option selected="selected"  disabled="disabled"></option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>
</div>
<div class="year">

<label style=" color:#777"">Year</label>
<select name="month" required>
<option selected="selected" disabled="disabled"></option>
<option>1999</option>
<option>2001</option>
<option>2002</option>
</select>
</form>

</div>
</div>
</body>
</html>