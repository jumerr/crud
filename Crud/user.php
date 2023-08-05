<?php



include 'connect.php';
if (isset($_POST ['submit-form'])) {
    echo  'hello i am here and button is yet not pressed ';

    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $mobile = $_POST ['mobile'];
    $password = $_POST ['password'];

    


    $sql="INSERT INTO `crud.` (name,email,mobile,password) 
    VALUES('$name', '$email', '$mobile', '$password')";
    
    echo $sql;

    $result=mysqli_query($conn,$sql);
    if($result){
      // echo "Data insert successfully";
      header('location:display.php');
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
                name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" 
                placeholder="Enter your email" 
                name="email"autocomplete="off">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" 
                placeholder="Enter your Mobile" 
                name="mobile" autocomplete="off">
             </div>
             <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" 
                placeholder="Enter your password" 
                name="password" autocomplete="off">
            </div>


             <button type="submit" class="btn btn-primary"  name="submit-form">
                submit
            </button>
        </form>
    </div>
</body>
</html>