<?php
$db_server ="localhost";
//資料庫名稱
$db_name = "contact";
//資料庫管理者帳號
$db_user = "he790803";
//資料庫管理者密碼
$db_passwd = "he0933152519";
$c = mysqli_connect($db_server, $db_user, $db_passwd,$db_name );
mysqli_query($c,"SET NAMES UTF8");
//資料庫連線採UTF8        
mysqli_select_db($c,$db_name);

//把密碼用md5加密
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="login222.css" ;>
  </head>
  <body>
          <div class="box">
        <i class="fas fa-user-circle avastar"></i>
        <h1>Login</h1>
        <form  action="connect.php" method="post">
            <label for="name">
            <div class="inputBox">
                <input type="text" name="id" required="" value="">
                <label>Username:</label>
            </div>
            <div class="inputBox">
                <input type="password" name="pw" required="" value="">
                <label>Password:</label>
            </div>
                    <input type="submit" name="submit" value="Submit">
                    <a href="joinregister.php">申請帳號</a>
            </label>

        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>