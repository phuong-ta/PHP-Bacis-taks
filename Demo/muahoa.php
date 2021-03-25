<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html>
    <head></head>

    <body>

        <form action="" method="POST">
            <h4> Transfer</h4>

            <label> ID</label> <input type="text" name="id"> <br>
            <label> Product</label> <input type="text" name="ten"> <br>
            <label> Quantity</label> <input type="text" name="soluong"><br>
            <label> Price</label> <input type="text" name="gia"> <br>
            <input type="submit" name="submit" value="transfer">
        </form>

        
    </body>
</html>

<?php

if (isset($_POST['submit'])) {
    $id =$_POST["id"];
    $product =$_POST["ten"];
    $quantity =$_POST["soluong"];
    $price =$_POST["gia"];

    if (isset ($_SESSION["mua"][$id])) {
        $_SESSION["mua"][$id]= array(
            'product' =>$product,
            "quantity" => $quantity,
            "price" =>$price
        );
    }else {
        $_SESSION["mua"][$id]["quantity"] +=$quantity;
    }
    header ("location:basket.php");
}

?>

<?php
ob_end_flush();
?>