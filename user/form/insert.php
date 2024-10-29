<?php

$Con = mysqli_connect('localhost', 'root', '', 'stationary');

if (isset($_POST['submit']) ) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Number = $_POST['number'];
    $Password = $_POST['password'];

    if (empty($Name) || empty($Email) || empty($Number) || empty($Password)){
        echo"<script>alert('Please Enter All The Field')
        window.location.href='register.php';
        </script>";
    }

    $Dup_Email = mysqli_query($Con, "SELECT * FROM `tbluser` WHERE Email = '$Email' ");
    $Dup_username = mysqli_query($Con, "SELECT * FROM `tbluser` WHERE UserName = '$Name' ");
    if (mysqli_num_rows($Dup_Email)) { //to check duplicate data
        echo "
<script>
alert('This Email is already taken');
window.location.href='register.php';
</script>
";
    }
    if (mysqli_num_rows($Dup_username)) { //to check duplicate data
        echo "
    <script>
    alert('This Username is already taken');
    window.location.href='register.php';
    </script>
    ";
    } else {
        mysqli_query($Con, "INSERT INTO `tbluser`(`UserName`, `Email`, `Number`, `Password`) VALUES ('$Name','$Email','$Number','$Password')");
        echo "
        <script>
    alert('Account Created Succesfully');
    window.location.href='login.php';
    </script>   
    ";
    }
}


?>