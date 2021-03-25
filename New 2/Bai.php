<!DOCTYPE html>
<html>
<head></head>
<body> 
<?php 
$result1 = "";
if (isset($_POST ["calculate"]))
{
    $a =isset ($_POST ["a"]) ? (float)trim ($_POST["a"]) : "";
    $b =isset ($_POST ["b"]) ? (float)trim ($_POST["b"]) : "";

if ($a =="" and $b=="" ){
    $result1 = "";
}

elseif ($a ==0) {
    $result1 = "A can not be 0";
}

else {
    $result1 =  -($b)/($a);
}
}
?>
A: <?php 
    if ($result1 == 0 or $result1 != 0 ) {
    echo  "$a x - $b = 0 ==> x = $result1";
    }
    else {
   echo "";
    }
?> <br/>

<?php
$result2 = "";
if (isset($_POST ["calculate"]))
{
    $c =isset ($_POST ["c"]) ? (float)trim ($_POST["c"]) : "";
    $d =isset ($_POST ["d"]) ? (float)trim ($_POST["d"]) : "";

if ($c =="" and $d=="" ){
    $result2 = "";
}

elseif ($c ==0) {
    $result2 = "C can not be 0";
}

else {
    $result2 = ($d)/($c);
}
}
?>

B: <?php 
    if ($result2 == 0 and $result2 != 0 ) {
        echo  "$c x - $d = 0 ==> x = $result2";
    }
   else {
       echo "";
   }
 ?> <br/>

</body>
</html>