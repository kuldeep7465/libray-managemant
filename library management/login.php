
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
     color:blue;
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
</style>
<body class="image">
   

   <div class="container ">
    <div class="row">
        <div class="col-lg-8">
<form action="login_code.php" method="post" class="border my-4 p-4 bg-white text-dark">
    <p class="text-dark">Studant Login Page</p>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" name="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">pass </label>
    <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
 

   <button class=" my-2" type="submit"   name="submit" class="btn btn-primary">Submit</button>
</form>
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