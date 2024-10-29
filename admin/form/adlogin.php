<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background: url('bg2.jpg') center/cover no-repeat fixed;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background-color: #f1ffc4;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border: 1px solid #dc3545;
            border-radius: 5px;
        }

        .login-heading {
            color: darkslategray;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-label {
            font-size: 20px;
            font-weight: bold;
            color: #343a40;
        }
        .form-control {
            font-size: 16px;
        }

        .login-btn {
            background-color: #61f4de;
            color: darkslategray;
            font-size: 18px;
            font-weight: bold;
            padding: 10px;
            width: 100%;
            display: block;
            text-decoration: none;
            text-align: center;
            margin-top: 10px;
            border: 1px solid black;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-md-6 m-auto login-container">
            <form action="adlogin1.php" method="POST">
                <div class="mb-3">
                    <p class="login-heading">Login:</p>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label"> Name: </label>
                    <input type="text" name="username" class="form-control" placeholder="Enter Username">
                </div>

                <div class="mb-3">
                    <label for="userpassword" class="form-label">Password: </label>
                    <input type="password" name="userpassword" class="form-control" placeholder="Enter Password">
                </div>
                <button class="login-btn">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
