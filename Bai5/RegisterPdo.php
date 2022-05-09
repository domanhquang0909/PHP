<?php
session_start();
$conn = mysqli_connect('localhost','root','','quang');

$err =[];

if(isset($_POST['submit'])){
    $mail = $_POST['mail'];
    $name =$_POST['name'];
    $password=$_POST['password'];
    $password_confirm=$_POST['password_confirm'];
    $address = $_POST['address'];
    $phone =$_POST['phone'];
    if(empty($mail) || strlen($mail) >255 ){
        $err['mail'] = 'email không được bỏ trống và nhỏ hơn 255 ký tự';

    }
    if(empty($name) || strlen($name) < 6 || strlen($name) >200){
        $err['name'] = 'name không được bỏ trống và có từ 6 đến 200 ký tự';

    }
    if(empty($password) || strlen($password) < 6 || strlen($password) >100 ){
        $err['password'] ='password từ 6 đến 100 ký tự';

    }
      if($password_confirm != $password){
        $err['password_confirm'] ='mật khẩu nhập lại không đúng';

    }
       if(empty($phone) || strlen($phone)<10 || strlen($phone) >20){
        $err['phone'] ='phone có từ 10 đến 20 ký tự';

    }
    if(empty($address)){
        $err['address'] = 'địa chỉ không được bỏ trống';
    }
    //var_dump(empty($err));die();
    if(empty($err) !== false){
    $pass = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(mail, name, password, phone, address) VALUES('$mail','$name','$pass','$phone','$address')";
    $query = mysqli_query($conn,$sql);
    if($query){
        header('location: LoginPdo.php ');
    }
  }
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
    <style>
        .form-error{
            color: red;
        }
    </style>    
</head>
<body>
    <div class="container" style="margin-left: 400px;">
        <div class="row">
            
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
              <form action="" method="post">
              <div class="panel panel-primary">
                    <div class="panel-heading">
                          <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                            <label for="">Email:</label>
                            <input type="email" class="form-control" name="mail" id="" aria-describedby="emailHelpId" placeholder="">
                            <div class="form-error">
                        <span><?php echo(isset($err['mail']))?$err['mail']:'' ?></span>
                    </div>
                        </div>
                   
                    <div class="panel-body">
                            <label for="">Name:</label>
                            <input type="text" class="form-control" name="name" id="" aria-describedby="emailHelpId" placeholder="">
                            <div class="form-error">
                        <span><?php echo(isset($err['name']))?$err['name']:'' ?></span>
                    </div>
                        </div>
                    
                    <div class="panel-body">
                            <label for="">Password:</label>
                            <input type="password" class="form-control" name="password" id="" aria-describedby="emailHelpId" placeholder="">
                            <div class="form-error">
                        <span><?php echo(isset($err['password']))?$err['password']:'' ?></span>
                    </div>  
                        </div>
                   
                    <div class="panel-body">
                            <label for="">Password confirm:</label>
                            <input type="password" class="form-control" name="password_confirm" id="" aria-describedby="emailHelpId" placeholder="">
                            <div class="form-error">
                        <span><?php echo(isset($err['password_confirm']))?$err['password_confirm']:'' ?></span>
                    </div>
                        </div>
                    
                    <div class="panel-body">
                            <label for="">Address:</label>
                            <input type="text" class="form-control" name="address" id="" aria-describedby="emailHelpId" placeholder="">
                            <div class="form-error">
                        <span><?php echo(isset($err['address']))?$err['address']:'' ?></span>
                    </div>
                        </div>
                    
                    <div class="panel-body">
                            <label for="">Phone:</label>
                            <input type="number" class="form-control" name="phone" id="" aria-describedby="emailHelpId" placeholder="">
                            <div class="form-error">
                        <span><?php echo(isset($err['phone']))?$err['phone']:'' ?></span>
                    </div>
                        </div>
                    <div class="panel-body">
                            
                            <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
                            
                          </div>
              </div>
              </form>
            </div>
        </div>
    </div>
</body>
</html>