<?php
$conn=mysqli_connect("localhost","root","","library");


   # code...
   if ($conn) {
    # code...
echo "connetion sucessfull<br>";
}
else {
    
    echo "connetion faild";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type ="text/css" href ="h.css">
    <title>Studant_Managemant</title>
<table class="table table-bordered table-primary" id="example"> 
<thead>
    <tr>
    <th scope="col">id</th>
    <th scope="col">dipartment</th>
    
    <th scope="col">book_namel</th>
    <th scope="col">date</th>
   
    
   
    </tr>
    </thead>
    <tbody>
    	<?php
    	session_start();

 
  $id= $_SESSION['id'];
  
$sql="SELECT * FROM `books` WHERE `user_id` = $id";

$quary=mysqli_query($conn,$sql);
while ($result=mysqli_fetch_assoc($quary)) {
    # code...
    echo "<tr>
   
    <th scope='row'>".$result['id']."</th>
    <td scope='row'>".$result['dipartment']."</td>
   
    <td scope='row'>".$result['book_name']."</td>
    <td scope='row'>".$result['date']."</td>
 
    </tr> " ;
   
    
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script> 
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
+
   </tbody>
</table>
</body>
</html>