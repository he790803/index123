<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="joinregister.css">
  </head>
  <body>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <div class="inputBox">
         <div class="fullscreen-video-wrap">
            <video src="Dc.mp4" autoplay loop></video>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form name="form" method="post" action="register_finish.php">
                        <div class="textbox">
                            <label>帳號：<input type="text" name="id" /></label><br>
                            <label >密碼：<input type="password" name="pw" /></label><br>
                            <label >再一次輸入密碼：<input type="password" name="pw2"/></label><br>
                            <label >電話：<input type="text" name="telephone" /></label><br>
                            <label >地址：<input type="text" name="address" /></label><br>
                            <label ><div>備註：</div><textarea name="other" cols="45" rows="5"></textarea></label><br> 
                            <button type="submit" class="btn btn-outline-primary">確定</button>
                            <button type="button" class="btn btn-outline-danger"onclick="javascript:location.href='login.php'">取消</button> 
                        </div>
                        <!-- <input type="submit" name="button" value="確定" /> -->
                        <!-- <input type ="button" onclick="javascript:location.href='login.php'" value="取消"></input> -->
                    </form> 
                </div>
            </div>
        </div>
    </div>    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>