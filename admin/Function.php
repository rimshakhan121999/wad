<?php
    require "db_connection.php";
    function getCats(){
        global $con;
        $getCatQuery = "select * from categories";
        $getCatResult = mysqli_query($con,$getCatQuery);
        while ($row  = mysqli_fetch_asoc($getCatResult)){
            $title = $row['cat_title'];
            echo "<li> <a class = 'nav-link' href = '#' $title</a></li>";
        }
    }
