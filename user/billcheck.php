<?php
session_start();
if (empty($_SESSION['cart'])){
        echo"<script>
        alert('Your Cart is Empty.');
        window.location.href='index.php';
        </script>";
}
else{
    header("location:billing.php");
}
?>