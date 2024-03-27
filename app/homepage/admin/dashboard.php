<?php
include_once ("../../db/dbconnect.php");
$sql = "SELECT * FROM `record`;";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($rows = mysqli_fetch_assoc($result)) {
        ?>
        <tr class="record">
            <td>
                <?php echo $rows['OrderDate']; ?>
            </td>
            <td>
                <?php echo $rows['Handled_by']; ?>
            </td>
            <td>
                <?php echo $rows['Product']; ?>
            </td>
            <td>
                <?php echo $rows['Description']; ?>
            </td>
            <td>
                <?php echo $rows['Warehouse']; ?>
            </td>
            <td>
                <?php echo $rows['Customer']; ?>
            </td>
            <td>
                <?php echo $rows['Price']; ?>
            </td>
            <td>
                <?php echo $rows['Quantity']; ?>
            </td>
            <td><a href="editform.php?id=<?php echo $row['id']; ?>"> Edit </a> | <a href="#" id="<?php echo $row['id']; ?>"
                    class="delbutton" title="Click To Delete">Delete</a>
            </td>
        </tr>
        <?php
    }
}
?>
