
<?php
session_start();
$email=$_SESSION['Email'];
 
  $id= $_SESSION['id'];
  $institude= $_SESSION['course'];
 $name=$_SESSION['name'];

$conn=mysqli_connect("localhost","root","","library");
if($conn)
{
   // echo "connetion succesfull";
}
else
{
 echo "connetion faild";   
}
if(isset($_POST['submit']))
{
    $Dipartment=$_POST['dipartment'];
    $Book=$_POST['books'];

$sql="INSERT INTO `books` ( `dipartment`, `book_name`, `date`, `user_id`) VALUES ( '$Dipartment', '$Book', current_timestamp(), '$id')";
$query=mysqli_query($conn,$sql);
if($query)
{
    echo "data insert";
    
    }
else
{
    echo "data not insert";
}
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@200&display=swap" rel="stylesheet">
    <title>Libreray managemant</title>
</head>
<style >
  .image
{
    background-image:url(./image/7.jpg) ; 
     background-position: center;
     background-position: top;
     background-position: absolute;
     /* background-position: bottom; */
     color:black;
     width: 100%;
     height: 200px;
     padding-left:20px;
     background-size: cover;
}
.container
{
    padding-left: 200px;
}

.border
{
    padding-right: 10px;
} 
p{
 font-family: 'Be Vietnam Pro', sans-serif;
font-family: 'Fira Sans', sans-serif;
font-family: 'Roboto', sans-serif;
font-family: 'The Nautigal', cursive;
font-size: 26px;
    padding-left: 94px;
}
form{
 font-family: 'Be Vietnam Pro', sans-serif;
font-family: 'Fira Sans', sans-serif;
font-family: 'Roboto', sans-serif;
font-family: 'The Nautigal', cursive;

}
img
{
  height: 100px;
  width: 100px;
}
</style>
<body class="image">
   
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark my-2 mr-4">
      
            <a class="navbar-brand" href="#">Library managemant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">User: <?php echo $name; ?></a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Dpatmant: <?php echo $institude; ?></a>
                    </li>
                    
                    
                </ul>
               
            </div>
        </div>
    </nav>
   
      <div class="row mt-0">
      <div class="col-lg-2">
        <nav class="nav flex-column bg-dark my-4">
  <a class="nav-link active" aria-current="page" data-toggle="modal" data-target="#example" href="#example">Profile</a>
  <a class="nav-link"  data-toggle="modal" data-target="#exampleModal" href="#exampleModal">Book Issue</a>
  <a class="nav-link" href="st_book.php">Add Book</a>
  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
</nav>
</div>

  </div>
  
  
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Studant Add Book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
<form action="" method="post" class=" my-4 p-4 bg-white text-dark">
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dipartment</label>
    <input type="text" name="dipartment" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Books</label>
    <input type="text" name="books" class="form-control" id="exampleInputPassword1">
  </div>
   <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

      </div>
    
    </div>
  </div>
</div>
  


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="example" tabindex="-1" aria-labelledby="example" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Studant Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
<form action="" method="post" class=" p-4 bg-white text-dark">
  
                      <img src="./image/user.jpg">
                      <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="">Studant Name:<?php echo $name; ?></a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="">Studant Email_id:<?php echo $email; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="">Studant Dipartment:<?php echo $institude; ?></a>
                    </li>
</form>

      </div>
    
    </div>
  </div>
</div>
  

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>