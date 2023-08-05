<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
</head>
<body>
   <div class="container">
     <button class="btn btn-primary my-5"><a href="user.php"
     class="text-light">Add user</a>
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">sI no</th>
      <th scope="col">First</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Operation</th>
      
    </tr>
  </thead>
  <tbody>

  <?php
  $sql="select * from `crud.` order by 1 desc";
  $result=mysqli_query($conn,$sql);
  if ($result) {
    while ($row = mysqli_fetch_assoc($result)){
        $idcrud = $row['idcrud']; 
        $name = $row['name'];
        $mobile = $row['mobile'];
        $email = $row['email'];
        //$password = $row['password'];
        if($name){
        echo '<tr>
           <th scope="row">'.$idcrud.'</th>
           <td>'.$name.'</td>
           <td>'.$mobile.'</td>
           <td>'.$email.'</td>
           <td>
        <button class="btn btn-primary">
        <a href="update.php?updateid='.$idcrud.'" class="text-light">update</a>
        </button>
        <button class="btn btn-danger">
            <a href="delete.php?deleteid='.$idcrud.'" class="text-light">delete</a>
        </button>
     </td>
         </tr>';
        }
    }
}
  ?>

    
  </tbody>
</table>
   </div>
</body>
</html>