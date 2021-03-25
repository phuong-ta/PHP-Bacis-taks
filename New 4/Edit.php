<?php

        $conn = mysqli_connect("localhost", "root", "", "test");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        
        $sql = "SELECT * FROM mess;";
        $tulos = mysqli_query ($conn, $sql); }

        $sql = "SELECT * FROM mess;";
                $tulos = mysqli_query ($conn, $sql);
        ?>