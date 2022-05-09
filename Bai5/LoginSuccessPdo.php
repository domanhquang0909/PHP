<?php

session_start();

if(isset($_POST['success'])){
    session_destroy();
   header('location: LoginPdo.php');
   die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    
</head>
<body>

 <font style="color:blue; text-align: center;"><h1>Dăng nhập thành công<h1></font>
 <div class="container">
        <div class="text-center">
            <h1>Quản Lý Sinh Viên</h1>
            <hr/>
        </div>
        <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row mt-15">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">STT</th>
                                    <th class="text-center">Tên</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Địa chỉ</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>1</td>
                                    <td>Quang</td>
                                    <td>admin@gmail.com</td>
                                    <td>Vĩnh Phúc</td>
                                    <td>0326032081</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-warning">
                                            <span class="fa fa-pencil mr-5"></span>Sửa
                                        </button>
                                        &nbsp;
                                        <button type="button" class="btn btn-danger">
                                            <span class="fa fa-trash mr-5"></span>Xóa
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <form action="" method="post"><div><button name="success" >logout</a></button></div>
</form>
</body>
</html>