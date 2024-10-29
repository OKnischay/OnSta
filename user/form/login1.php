<?php


$Name = $_POST['name'];
$Password = $_POST['password'];

$Con = mysqli_connect('localhost', 'root', '', 'stationary');
$result = mysqli_query($Con,"SELECT * FROM `tbluser` WHERE (UserName = '$Name' OR Email = '$Name') AND Password = '$Password' ");

session_start();
if (empty($Name) || empty($Password)){
    echo"<script>alert('The Required Field is Empty')
        window.location.href='login.php';
        </script>";
}
if(mysqli_num_rows($result)){

    $_SESSION['user'] = $Name ;


    echo "
    <script>
alert('Succesfully Login');
window.location.href='../index.php';
</script>   
";
}
else{
    echo "
    <script>
alert('Incorrect Username/Email or Password');
window.location.href='login.php';
</script>   
";
}

