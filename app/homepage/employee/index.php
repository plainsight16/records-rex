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
                    <li><a href="">Records</a></li>
                    <li><a href="../../warehouse">Warehouse</a></li>
                    <li><a href="../../product">Products</a></li>
                    <!-- <li><a href="../../register_employee">Register Employee</a></li> -->
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
                    <?php
                    session_start();
                    $role = $_SESSION['role'];
                    echo $role;
                    if ($role == 2) {
                        echo "Employee, ";
                    } else {
                        echo "Admin, ";
                    }
                    echo $_SESSION["user_first_name"] . " " . $_SESSION["user_last_name"];
                    ?>
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
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include_once ('dashboard.php');
                        ?>
                    </tbody>
                </table>
            </section>

        </section>
    </main>

</body>

</html>