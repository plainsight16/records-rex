<?php
    include_once("../db/dbconnect.php");


    $sql = "select * from product;";

    try{
        $result = mysqli_query($conn, $sql);  
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo $row["Name"] . "<br>";
                echo $row["Description"] . "<br>";
                echo $row["Price"] . "<br>";
            }
            
        }

    }catch(mysqli_sql_exception $ex){
        echo "Can't retrieve products";
    }
?>