<?php
session_start();

$conn = mysqli_connect('localhost','root','','quang');

$err=[];

if(isset($_POST['login'])){
    $mail = $_POST['mail'];
    $password = $_POST['password'];

if(empty($mail) || strlen($mail) > 255 ){
  $err['mail'] = 'Email không được bỏ trống và nhỏ hơn 255 ký tự';

}
if(empty($password) || strlen($password) < 6 || strlen($password)>50){
  $err['password'] = 'Password từ 6 đến 50 ký tự';
}

$sql = "SELECT * FROM users WHERE mail='$mail'";
$query = mysqli_query($conn,$sql);

$data = mysqli_fetch_row($query);


$checkMail = mysqli_num_rows($query);




if($checkMail != 0){
 
  $checkPass=password_verify($password , $data['password']);
  $checkPass=md5($checkPass);
  if($checkPass){
    $_SESSION['user'] = $data;
    header('location: LoginSuccessPdo.php');
  }else{
      $err['checkPass']= 'Sai mật khẩu';
  }
}else {
  $err['checkMail']= 'Sai Email';
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
     
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
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
                <form action="" method="post" enctype="multipart/form-data">
                <div class="form-error">
                        <span><?php echo(isset($err['checkMail']))?$err['checkMail']:'' ?></span>
                    </div>
                    <div class="form-error">
                        <span><?php echo(isset($err['checkPass']))?$err['checkPass']:'' ?></span>
                    </div>
                    <div class="panel panel-primary">
                          <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                          </div>
                          <div class="panel-body">
                                <label for="">Email:</label>
                                
                                <input type="email" name="mail" id="input" class="form-control" value="" required="required" title="">
                                <div class="form-error">
                        <span><?php echo(isset($err['mail']))?$err['mail']:'' ?></span>
                    </div>
                          </div>
                          <div class="panel-body">
                                <label for="">Password:</label>
                                
                                <input type="password" name="password" id="input" class="form-control" value="" required="required" title="">
                                <div class="form-error">
                        <span><?php echo(isset($err['password']))?$err['password']:'' ?></span>
                    </div>
                          </div>
                          <div class="panel-body">
                                        <input type="checkbox" name="remember" value="">
                                        Rememberme
                          </div>
                          <div class="panel-body">
                                 
                                 <button type="submit" name="login" class="btn btn-primary">Submit</button>
                                 
                          </div>
                    </div>
                    
                </form>
            </div>
        </div>
        
    </div>
    
</body>
</html>