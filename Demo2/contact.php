<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <?php include 'view/layout.php';?>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">

<h3 class="text-center">Contact us</h3><br />

<div class="row">
  <div class="col-md-8">
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        <input class="form-control" name="name" placeholder="Name..." /><br />
        <input class="form-control" name="phone" placeholder="Phone..." /><br />
        <input class="form-control" name="email" placeholder="E-mail..." /><br />
        <textarea class="form-control" name="text" placeholder="How can we help you?" style="height:150px;"></textarea><br />
        <input class="btn btn-primary" type="submit" name="send" value="Send" /><br /><br />
      </form>
  </div>
  <div class="col-md-4">
    <b>Customer service:</b> <br />
    Phone: +1 129 209 291<br />
    E-mail: <a href="mailto:support@mysite.com">support@mysite.com</a><br />
    <br /><br />
    <b>Headquarter:</b>
    Company Inc, <br />
    Las vegas street 201<br />
    55001 Nevada, USA<br />
    Phone: +1 145 000 101<br />
    <a href="mailto:usa@mysite.com">usa@mysite.com</a>


    <br /><br />
    <b>Hong kong:</b><br />
    Company HK Litd, <br />
    25/F.168 Queen<br />
    Wan Chai District, Hong Kong<br />
    Phone: +852 129 209 291<br />
    <a href="mailto:hk@mysite.com">hk@mysite.com</a><br />

  </div>
</div>

</div>
    </body>
</html>

<?php

$conn = mysqli_connect("localhost", "root", "", "ravintola");

if (isset($_POST["submit"])) {

    if (empty ($_POST["name"] and $_POST["phone"] and $_POST["email"] and $_GET["text"])) {
        echo " Please fill required information";
    }else {
    
    
        $a = $_POST ["name"];
        $b = $_POST ["phone"];
        $c = $_POST ["email"];
        $d = $_POST ["text"];


        $sql = "INSERT INTO feedback (name, Phone, Email, content)
                VALUE ('$a', '$b', '$c', '$d')";

        $res = mysqli_query ($conn, $sql);

        if ($res) {
            echo "Bạn đã đăng ký thành công! <br>"; 
            echo" Tài khoản của bạn là $b, và mật khẩu là $c.<br>";
            echo "";
        } else {
            echo "Đăng ký lỗi. Hãy kiểm tra lại thông tin bạn đăng ký.";
        }
    }
}
?>

