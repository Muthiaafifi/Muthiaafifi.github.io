<?php
include "koneksi.php";
$pass = $_POST['password'];
$user = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $pass);
$level = mysqli_escape_string($koneksi, $_POST['level']);

//cek username
$cek=mysqli_query($koneksi, "SELECT * FROM registrasi WHERE username='$user' and level='$level'");
$user_valid=mysqli_fetch_array($cek);

//uji jika username terdaftar
if($user_valid){
    if($password ==$user_valid['password']){
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['nama'] = $user_valid['nama'];
        $_SESSION['level'] = $user_valid['level'];

        //uji level user
        if($level=="admin"){
            header('location:tampil_admin.php');
        }elseif ($level=="user"){
            header('location:tampil_user.php');
        }
        } else{
            echo "<script>alert('Maaf, Login Gagal, Password anda tidak sesuai!');
            document.location='login.php'</script>";
        }        
}else{
    echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!');
    document.location='login.php'</script>";
}

