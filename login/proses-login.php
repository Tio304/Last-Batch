<?php
session_start();
include '../koneksi.php';

if(isset($_POST['btnlogin']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id_petugas, Nama_petugas FROM petugas 
            WHERE username='$username' AND Password='$password'";
    $res = mysqli_query($koneksi, $sql);

    $count = mysqli_affected_rows($koneksi);

    if($count == 1)
    {
        $data_login = mysqli_fetch_assoc($res);
        
        $_SESSION['id_petugas'] = $data_login['id_petugas']; 
        //nilainya digunakan waktu insert peminjaman
        
        $_SESSION['Nama_petugas'] = $data_login['nama']; 
        //nilainya bisa digunakan di navbar, mis. 'Hai, [Nama_petugas]'

        header("Location: http://localhost/CORONA/index.php");
    }
    else
    {   
        header("Location: http://localhost/CORONA/login/index.php");
    }
}
?>