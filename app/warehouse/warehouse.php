<?php
include_once ("../db/dbconnect.php");

$sql = "SELECT * FROM `Warehouse_Detail`;";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($rows = mysqli_fetch_assoc($result)) {
        ?>
        <tr class="record">
            <td>
                <?php echo $rows['Warehouse']; ?>
            </td>
            <td>
                <?php echo $rows['Location']; ?>
            </td>
            <td>
                <?php echo $rows['Product']; ?>
            </td>
            <td>
                <?php echo $rows['Total_Quantity']; ?>
            </td>
            <td>
                <?php echo $rows['Capacity']; ?>
            </td>
        </tr>
        <?php
    }
}
?>


<!-- // echo $row["Warehouse"] . "<br>";
//             echo $row["Location"] . "<br>";
//             echo $row["Product"] . "<br>";
//             echo $row["Total_Quantity"] . "<br>";
//             echo $row["Capacity"] . "<br>"; -->