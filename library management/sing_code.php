<?php
$conn=mysqli_connect("localhost","root","","library");
if($conn)
{
    echo "connetion succesfull";
}
else
{
 echo "connetion faild";   
}
if(isset($_POST['submit']))
{
    $name=$_POST['Name'];
    $institude=$_POST['institut'];
    $email=$_POST['Email'];
    $mobile=$_POST['Mobile'];
    $pass=$_POST['pass'];
    $course=$_POST['course'];
    $semester=$_POST['semester'];
$sql="INSERT INTO `management` ( `name`, `institude`, `email`, `mobile`, `pass`, `course`, `semester`) VALUES ('$name', '$institude', '$email', '$mobile', '$pass', '$course', '$semester')";
$query=mysqli_query($conn,$sql);
if($query)
{
    echo "data insert";
     header("location:./loginkebad/main_page.php");
}
else
{
    echo "data not insert";
}

}
?>