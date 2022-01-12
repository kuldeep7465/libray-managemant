<?php

$conn=mysqli_connect("localhost","root","","library");

if (isset($_POST['submit'])) {
   # code...
   if ($conn) {
    # code...
echo "connetion sucessfull<br>";
}
else {
    
    echo "connetion faild";
}
   $email=$_POST['Email'];
$pass=$_POST['password'];
session_start();
$_SESSION['Email']=$email;
$sql="SELECT * FROM `management` WHERE `email` LIKE '$email' AND `pass` LIKE '$pass'";
$quary=mysqli_query($conn,$sql);
$num=mysqli_num_rows($quary);
if ($num==1) {
   # code...
	while ($result=mysqli_fetch_assoc($quary))
	{
     $id=$result['id'];
     $name=$result['name'];
     $institude=$result['course'];
     
$_SESSION['id']=$id;

$_SESSION['name']=$name;

$_SESSION['course']=$institude;
  

	}
	

   echo "login succesfull";
header("location:welcome.php");
  // header("location:./loginkebad/card.php");
 

}
else {
   
   echo "login faild";
}
}

?>