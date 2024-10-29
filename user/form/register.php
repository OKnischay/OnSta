<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('bg4.jpg') center/cover no-repeat fixed;
        }

        .container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background-color: #61f4de;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border: 1px solid #17a2b8;
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
            background-color: #65cbe9;
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

        .register-btn {
            background-color: #f1ffc4;
            color: darkslategray;
            font-size: 18px;
            font-weight: bold;
            padding: 10px;
            width: 100%;
            text-decoration: none;
            display: block;
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
            <p class="login-heading">User Register</p>
            <form action="insert.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Username:</label>
                    <input type="text" name="name" placeholder="Enter Username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" name="email" placeholder="Enter Your Email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Phone Number:</label>
                    <input type="number" name="number" placeholder="Enter Your Number" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" name="password" placeholder="Enter Password" class="form-control">
                </div>

                <div class="mb-3">
                    <button name="submit" class="login-btn">REGISTER</button>
                </div>

                <div class="mb-3">
                    <a href="login.php" class="register-btn">ALREADY HAVE AN ACCOUNT</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
