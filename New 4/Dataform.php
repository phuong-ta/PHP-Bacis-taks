<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>


    <body>
    <table border="2">
        <thead>
        <th> Fullname</th>
        <th> Email</th>
        <th> Phone</th>
        <th> Message</th>
        </thead>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "test");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        
        $sql = "SELECT * FROM mess;";
        $tulos = mysqli_query ($conn, $sql); }

        $sql = "SELECT * FROM mess;";
                $tulos = mysqli_query ($conn, $sql);
        ?>

        <tbody>
            <?php while ($row = mysqli_fetch_array ($tulos)) {
                echo "<tr>". 
                "<td>". $row["Fullname"]. "</td>". 
                "<td>". $row[1]. "</td>".
                "<td>". $row[2]. "</td>".
                "<td>". $row[3]. "</td>".
                "</tr>"; }
            ?>
        </tbody>

        
    </table>    
    </body>
</html>