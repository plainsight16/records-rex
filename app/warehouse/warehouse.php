<?php
    include_once("../db/dbconnect.php");

    $sql = "SELECT * FROM `Warehouse_Detail`;";
    try{
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo $row["Warehouse"] ."<br>";
                echo $row["Location"] . "<br>";
                echo $row["Product"] . "<br>";
                echo $row["Total_Quantity"] . "<br>";
                echo $row["Capacity"] . "<br>";
            }
        }
    }catch(mysqli_sql_exception $ex){
        echo "<h1>Connection Error</h1>";
    }
   
?>