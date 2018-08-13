<?php session_start();?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="member.css"
  </head>
  <body>

      <?php
        include("mysql_connect.inc.php");
        echo '
    <div class="container">
        <div class="row">
            <div class="col-md-3 offset-md-11">
                <p class="logoutText"><a href="logout.php">登出</a> <br><br></p>
            </div>
        </div>
    </div> ';
        //此判斷為判定觀看此頁有沒有權限
        //說不定是路人或不相關的使用者
        //因此要給予排除
        $sessionid = $_SESSION['id'];
        //存取登入帳號
        if($_SESSION['username'] != null)
            {
                echo '
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <p class="modifyText">
                                <a href="joinregister.php">新增</a> 
                                <a href="update.php">修改</a>
                                <a href="delete.php">刪除</a></p>
                        </div>
                    </div>
                </div>';
    
                //將資料庫裡的所有會員資料顯示在畫面上
                $sql = "SELECT * FROM contact WHERE username = '$sessionid'";
                $result = mysqli_query($c,$sql);
                while($row = mysqli_fetch_row($result))
                {
                 echo '
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <p class="modifyText">'.
                                "會員編號:$row[0] - 名字(帳號)：$row[1],電話：$row[3], 地址：$row[4], "."<br>".
                                 "備註：$row[5]<br>";
                        '</div>
                    </div>
                </div>';
                }
            }else
            {
                echo '您無權限觀看此頁面!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
            }
        ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>
