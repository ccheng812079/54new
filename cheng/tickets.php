<?php
session_start();
$_SESSION['login'] = '';

$name = $_POST['name'];
$pd = $_POST['pd'];
$num = $_POST['num'];

if($name <> 'admin'){
    echo "<script>alert('帳號錯誤'); document.location.href = 'login.php'; </script>";
} else if($pd <> '1234'){
     echo "<script>
        alert('密碼錯誤');document.location.href = 'login.php'; </script>";
} else if($num <> $_SESSION['num']){
 echo "<script>alert('驗證碼錯誤'); document.location.href = 'login.php'; </script>";
} else {
    $_SESSION['login'] = 1;
    echo "<script>
        document.location.href = 'out.php';
    </script>";
}

?>