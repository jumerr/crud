<?php



include 'connect.php';
$idcurd=$_GET['updateid'];
$sql="select * from `crud.` where idcrud=$idcurd";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if (isset($_POST ['submit-form'])) {
    echo  'hello i am here and button is yet not pressed ';

    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $mobile = $_POST ['mobile'];
    $password = $_POST ['password'];

    

    $sql="update `crud.` set idcrud='$idcurd',name='$name',
    mobile='$mobile',password='$password'
    where idcrud='$idcurd'";
    
  $result=mysqli_query($conn,$sql);
    if($result){
      echo "Data insert successfully";
      //header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
    

  
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
</head>
<body   >
    <div class="container my-5">
        <form method="post" >
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" 
                placeholder="Enter your name" 
                name="name" autocomplete="off" value=<?php
                echo $name;?>>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" 
                placeholder="Enter your email" 
                name="email"autocomplete="off" value=<?php
                echo $email;?>>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" 
                placeholder="Enter your Mobile" 
                name="mobile" autocomplete="off" value=<?php
                echo $mobile;?>>
             </div>
             <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" 
                placeholder="Enter your password" 
                name="password" autocomplete="off" value=<?php
                echo $password;?>>
            </div>
            


             <button type="submit" class="btn btn-primary"  name="submit-form">
                ubdate
            </button>
        </form>
    </div>
</body>
</html>