<?php
include_once ("../db/dbconnect.php");

$sql = "select * from product;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($rows = mysqli_fetch_assoc($result)) {
        ?>
        <div class="product-box">
            <div class="img-box">
                <img src=<?php
                echo $rows['image']
                ?> alt="product" class="product-img">
            </div>
            <div class="product-info">
                <p class="product-name">
                    <?php echo $rows['Name']; ?>
                </p>
                <p class="product-desc">
                    <?php echo $rows['Description']; ?>
                </p>
                <p class="product-price">
                    $<?php echo $rows['Price']; ?>
                </p>
            </div>
        </div>
        <?php
    }
}