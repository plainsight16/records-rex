<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
    </head>
    <body>
        <h1>Welcome to the dashboard</h1>

        <table cellspacing="0" cellpadding="2" id="resultTable">
            <thead>
                <tr>
                    <th width="5%">OrderDate</th>
                    <th width="7%">Handled_by</th>
                    <th width="10%"> Product </th>
                    <th width="10%"> Description </th>
                    <th width="23%"> Warehouse </th>
                    <th width="10%"> Customer </th>
                    <th width="5%"> Price </th>
                    <th width="10%"> Quantity </th>
                    <th width="10%"> Action </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once("../db/dbconnect.php");	
                    $sql = "SELECT * FROM `record`;";

                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($rows = mysqli_fetch_assoc($result)){
                ?>
                <tr class="record">
                    <td><?php echo $rows['OrderDate']; ?></td>
                    <td><?php echo $rows['Handled_by']; ?></td>
                    <td><?php echo $rows['Product']; ?></td>
                    <td><?php echo $rows['Description']; ?></td>
                    <td><?php echo $rows['Warehouse']; ?></td>
                    <td><?php echo $rows['Customer']; ?></td>
                    <td><?php echo $rows['Price']; ?></td>
                    <td><?php echo $rows['Quantity']; ?></td>
                    <td><a href="editform.php?id=<?php echo $row['id']; ?>"> Edit </a> | <a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete">Delete</a></td>
                </tr>
                <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>