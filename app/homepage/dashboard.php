<?php
    include_once("../db/dbconnect.php");

    $sql = "SELECT * FROM `record`;";

    try{
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			while($rows = mysqli_fetch_assoc($result)){
				echo $rows["Product"] . "<br>";
			}
		}
	}catch(mysqli_sql_exception $ex){
        echo "An Error Occured";
    }
?>