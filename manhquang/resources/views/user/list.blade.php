<!doctype html>
<html lang="en">
  <head>
    <title>Trang đăng ký</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-left: 400px;">
        <div class="row">

            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
              <form action="" method="post">
              <div class="panel panel-primary">
                    <div class="panel-heading">
                          <h3 class="panel-title">Đăng ký</h3>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
