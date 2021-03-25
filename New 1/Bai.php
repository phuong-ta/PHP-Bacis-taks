<?php 
            $result = '';
            if (isset ($_POST["calculate"]))
            {
                $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
                $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';
                if($a ==""){
                    $result = "Please put number a";
                }
                elseif ($b =="") {
                    $result = "Please put number b";
                }
                elseif ($a== 0) {
                    $result = "A number can not be 0"; }

                else {
                    $result = -($b) / $a;
                    $result = $c /$a;
                }
            }

            echo "Tulos on $result";
        ?>