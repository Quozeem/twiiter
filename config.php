
<?php
  
  class db_connect{
     private $host="localhost";
     private $username="root";
     private $pass="";
     private $db="twitted";
  
     function __construct(){
    $con = mysqli_connect($this->host,$this->username,$this->pass,$this->db)
     or die("failed to connect").mysqli_connect_error();
    //mysqli_select_db($this->db, $con);
    //return $con;
    $this->dbh=$con;
   }
   
  public function select()
  {
   // method
    $selected=mysqli_query($this->dbh,"SELECT * FROM twits");
    
  return $selected;
  }
  public function login($uname,$password){

$qery=mysqli_query($this->dbh,"SELECT * FROM twits WHERE name='$uname' AND email='$password'");
 return $qery;
  }public function fetchout(){
     
$qery=mysqli_query($this->dbh,"SELECT * FROM twits");
return $qery;

  }
  public
  function session(){
      if(isset($_SESSION['login'])){
        return $_SESSION['login'];
      }

  }
  ///https://www.c-sharpcorner.com/UploadFile/0870a0/registration-and-login-form-in-php-using-oop/
   
  
      }
      
  ?>