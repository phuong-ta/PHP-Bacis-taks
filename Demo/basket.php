<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <table border="1">
            <tr>
                <th> Product</th>
                <th> Quantity</th>
                <th> Price</th>
                <th> Total</th>
            </tr>

            <?php
                if ($_SESSION["mua"]) {
                    header ("lacation:muahoa.php");
                }

                $tongTien = 0;
                foreach ($_SESSION["mua"] as $hoa) {
                    $thanhtien =$hoa["price"]*$hoa["quantity"];
                    $tongTien +=$thanhtien;
                }
            ?>

            <tr>
                <td> <?php echo " $hoa[product]";  ?> </td>
            </tr>

        </table>
        <a href="muahoa.php">Back</a>

    </body>
</html>


<?php
ob_end_flush();
?>