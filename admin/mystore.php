<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
        crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6b8867038c.js" crossorigin="anonymous"></script>

    <style>
        body {
            background: url('dash.jpg') center/cover no-repeat fixed;
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background-color: #e2e2e2;
            color: white;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: darkslategray;
        }

        .navbar-text {
            margin-right: 20px;
            color: darkslategray;
        }

        .dashboard-container {
            margin-top: 30px;
            text-align: center;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin-top: 30px;
        }

        .action-button {
            display: block;
            padding: 15px 30px;
            font-size: 1.4rem;
            font-weight: bold;
            text-decoration: none;
            color: white;
            background-color: darkslategray;
            border: 2px solid #dc3545;
            border-radius: 8px;
            transition: background-color 0.3s, color 0.3s;
        }

        .action-button:hover {
            background-color: #c82333;
            color: #fff;
        }
    </style>
</head>

<body>

    <?php
    session_start();

    if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
        header("location:form/adlogin.php");
        exit;
    }
    ?>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand">Online Stationary</a>
            <div class="navbar-text">
                <i class="fas fa-user-secret"></i>
                Hello, <?php echo $_SESSION['admin'];?>
            </div>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-secondary" href="mystore.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-secondary" href="form/adlogout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dashboard -->
    <div class="dashboard-container">
        <h2>Dashboard</h2>
        <div class="action-buttons">
            <a href="product/index.php" class="action-button">Add Products</a>
            <a href="user.php" class="action-button">Users</a>
            <a href="orderlist.php" class="action-button">Orders</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-rbsM6QXtUQkC2QDbz5NuW6CA8HEehjzFz/GOPIVAl/jkF2pVjZc6c2iOJDHUz2x1"
        crossorigin="anonymous"></script>
</body>

</html>
