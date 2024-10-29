<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Product Page</title>

    <style>
        body {
            background-color: #a0ced9; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .form-container {
            border: 2px solid #333333; 
            padding: 20px;
            border-radius: 10px;
            background-color: #65cbe9; 
        }

        .form-container p {
            text-align: center;
            font-weight: bold;
            font-size: 1.5rem;
            color: #333333; /* Dark Gray */
        }

        .form-container label {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .form-container input,
        .form-container select {
            margin-bottom: 15px;
            background-color: #f5f5f5; 
        }

        .form-container button {
            background-color: #f1ffc4;
            color: darkgoldenrod;
            font-size: 1.2rem;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #2980b9; 
            color:aqua;
        }

        .table-container {
            margin-top: 50px;
            
        }

        .table-container table {
            border: 2px solid #e0e0e0; /* Light Gray */
            background-color: #ffffff; /* White */
        }

        .table-container th,
        .table-container td {
            border: 1px solid #e0e0e0; /* Light Gray */
            text-align: center;
            padding: 15px;
        }

        .table-container th {
            background-color: #333333; 
            color: white;
            font-size: 1.2rem;
        }

        .table-container img {
            max-height: 100px;
            max-width: 200px;
        }

        .table-container a {
            text-decoration: none;
        }

        .table-container .btn-danger,
        .table-container .btn-info{
            font-size: 1rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
<div style="display: flex; justify-content: space-between; margin: 20px;">
    <div style="background-color: #3498db; padding: 20px; margin-right: 20px;">
        <a href="../mystore.php" class="text-decoration-none text-white fs-4 fw-bold">Home</a>
    </div>
    <div style="background-color: #f1ffc4 ; padding: 20px; margin-right: 20px;">
        <a href="../form/adlogout.php" class="text-decoration-none  fs-4 fw-bold">Logout</a>
    </div>
</div>
    <div class="container">
    
        <div class="row">
            <div class="col-md-6 m-auto form-container">
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center">Product Details</p>
                    </div>
                    <div class="mb-3">
                        <label for="productName" class="form-label">Name: </label>
                        <input type="text" name="Pname" class="form-control" id="productName"
                            placeholder="Enter Product Name" required>
                    </div>

                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Price: </label>
                        <input type="text" name="Pprice" class="form-control" id="productPrice"
                            placeholder="Enter Product Price" required>
                    </div>

                    <div class="mb-3">
                        <label for="productImage" class="form-label">Image:</label>
                        <input type="file" name="Pimage" class="form-control" id="productImage" required>
                    </div>

                    <div class="mb-3">
                        <label for="productCategory" class="form-label">Category:</label>
                        <select class="form-select" name="Pages" id="productCategory" required>
                            <option value="Home">Home</option>
                            <option value="Notebooks">Notebooks</option>
                            <option value="Pens">Pens</option>
                            <option value="Pencils">Pencils</option>
                            <option value="Pencil Cases & Boxes">Pencil Cases and Boxes</option>
                        </select>
                    </div>
                    <button name="submit" class="form-control">Upload</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Fetch Data -->
    <div class="container table-container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <table class="table table-hover">
                    <thead class="bg-dark text-white">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </thead>
                    <tbody>
                        <?php
                        include 'conn.php';
                        $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");

                        while ($row = mysqli_fetch_array($Record))
                            echo "
                            <tr>
                            <td>$row[Id]</td>
                            <td>$row[PName]</td>
                            <td>$row[PPrice]</td>
                            <td><img src='$row[Image]' alt='product-image'></td>
                            <td>$row[PCategory]</td>
                            <td><a href='delete.php?ID=$row[Id]' class='btn btn-danger'>Delete</a></td>
                            <td><a href='update.php?ID=$row[Id]' class='btn btn-info'>Update</a></td>
                            </tr>
                            ";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
