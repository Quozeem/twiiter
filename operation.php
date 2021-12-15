
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
   // $conn=$this->connect();
    $selected=mysqli_query($this->dbh,"SELECT * FROM twits");
    
  return $selected;
  
  }
   //public function saveRecords($name,$email,$dob,$day,$month)
   //{
     // $conn=$this->connect();
    //  $select=mysqli_query($this->dbh,"INSERT INTO twits (name,email,dob,day,month)
     //      VALUES ('$name','$email','$dob','$day','$month')");
    //$smt=mysqli_query($this->connect()->prepare($select));
    //$smt->execute([$name,$email,$dob,$day,$month]);
   // return $select;
   //}
   
  
      }
      
  ?>
  <?php
  //define('DB_SERVER','localhost');
   // define('DB_USER','root');
    //define('DB_PASS' ,'');
   // define('DB_NAME', 'twitted');
  //class db_connect{
    
    // function __construct(){
     // $conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die('localhost connection problem'.mysql_error());
     // mysql_select_db(DB_NAME, $conn);
     
   //}
   //public function saveRecords($name,$email,$dob,$day,$month)
   //{
     // $conn=$this->connect();
    //  $select=mysqli_query("INSERT INTO twits (name,email,dob,day,month)
     //      VALUES ('$name','$email','$dob','$day','$month')");
    //$smt=mysqli_query($this->connect()->prepare($select));
    //$smt->execute([$name,$email,$dob,$day,$month]);
   // return $select;
   //}
     // }
     ?>
     <?php
      require "config.php";
  class insert extends db_connect{
  public function saveRecords($dataarrayseriliz)
  {
   // method of object
   
    $select=mysqli_query($this->dbh,"INSERT INTO twits (name,email,dob,day,month)
         VALUES implode(',','$dataarrayseriliz')");
  
  return $select;
  
  } 
  } 
  $con=mysqli_connect("localhost","root","","twitted");
   function check(){
   if(isset($_POST['Next']))
   {
   //$name=$_POST['name'];
   //$email=$_POST['email'];
   //$dob=$_POST['dob'];
   //$day=$_POST['day'];
   //$month=$_POST['month'];
   $dataarray=array(
     'name'=>($_POST['name']),
     'email'=>($_POST['email']),
     'dob'=>($_POST['dob']),
     'day'=>($_POST['day']),
     'month'=>($_POST['month'])
   );
   $keys=array_keys( $dataarray);
   $count=count($dataarray);
   for($i=0; $i<$dataarray;$i++){
   $input=$keys[$i];
   $val=$dataarray[$keys[$i]];
    }
    $select=mysqli_query($con,"INSERT INTO twits ($input)
    VALUES ('val')");
  }if($select){
    alert("inserted");
  }else{
    alert("failed");
  }
  }
    ?>
     <?php
 

 $con=mysqli_connect("localhost","root","","twitted");
    function check(){
    if(isset($_POST['Next']))
    {
    //$name=$_POST['name'];
    //$email=$_POST['email'];
    //$dob=$_POST['dob'];
    //$day=$_POST['day'];
    //$month=$_POST['month'];
    $dataarray=array(
      'name'=>($_POST['name']),
      'email'=>($_POST['email']),
      'dob'=>($_POST['dob']),
      'day'=>($_POST['day']),
      'month'=>($_POST['month'])
    );
    $REQUEST=array();
    $keys=array_keys( $dataarray);
    $count=count($dataarray);
    $steriliz=serialize($dataarray);
    foreach($dataarray as $key=>$val){
     
    }$vals=implode(',',$val);
    $con=mysqli_connect("localhost","root","","twitted");
    $select=mysqli_query($con,"INSERT INTO twits (name,email,dob,day,month)
     VALUES ('$vals')");
   if($select){
     echo "<script>alert('Data inserted');</script>";
   }else{
     echo "<script>alert('not inserted');</script>";
   
 }}
   }?>