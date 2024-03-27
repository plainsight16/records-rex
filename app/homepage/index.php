<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <title>Dashboard</title>
</head>

<body>
    <main class="main-page">

        <aside>
            <div class="logo-title">
                <p>R</p>
            </div>
            <div class="nav-pages">
                <ul>
                    <li>homepage</li>
                    <li>Warehouse</li>
                    <li>Products</li>
                </ul>

                <div class="logout">
                    <p>Log out</p>
                    <div class="logout-icon">
                        <svg width="100%" height="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            fill="none">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path stroke="#4E9436" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 12h-9.5m7.5 3l3-3-3-3m-5-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2h5a2 2 0 002-2v-1">
                                </path>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </aside>
        <section class="table-main">
            <nav class="nav-body">
                <div>
                    <p class="nav-title">Records</p>
                </div>
                <div class="user-info">
                    <p>Administrator, </p>
                    <p>John Doe</p>
                    <div class="svg-box">
                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                stroke="#4E9436" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="#4E9436"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                </div>
            </nav>
            <section>
                <div class="search-section">
                    <input type="text" name="search" class="search-opt" placeholder="Search">
                    <div>
                        <button class="search-btn" type="submit">Go</button>
                    </div>

                </div>
                <table class="blueTable">
                    <thead>
                        <tr>
                            <th>Ordered At</th>
                            <th>Handled By</th>
                            <th>Product</th>
                            <th>Description</th>
                            <th>Warehouse</th>
                            <th>Customer</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include_once ("../db/dbconnect.php");
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
                                    <td><a href="editform.php?id=<?php echo $row['id']; ?>"> Edit </a> | <a href="#"
                                            id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete">Delete</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </section>

        </section>
    </main>

</body>

</html>