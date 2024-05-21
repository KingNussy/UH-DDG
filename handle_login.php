<?php 
include('./koneksi.php');

$email = $_POST['email'];
$password = $_POST['password'];

echo $email . "<br>";
echo $password . "<br>";

$login = $koneksi->query("SELECT * FROM reg WHERE `email` = '$email' && `password` = '$password'");
if($login) {
    session_start();
    $_SESSION['user'] = $login->fetch_assoc();

    header('Location: dashboard.php');
} else {
    echo "Gagal menambahkan data";
}
?>