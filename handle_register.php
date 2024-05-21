<?php 
include('./koneksi.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

echo $username . "<br>";
echo $email . "<br>";
echo $password  . "<br>";

$simpanData = $koneksi->query("INSERT INTO reg(`username`,`email`,`password`) VALUES ('$username','$email','$password')");
if($simpanData) {
    header("Location: index.php");
} else {
    echo "Gagal mengupload data";
}
?>