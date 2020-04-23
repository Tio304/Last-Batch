<?php

include 'koneksi.php';

if(isset($_POST['simpan']))
{
  $KTP_KK = $_POST['KTP_KK'];
        $Nama = $_POST['Nama'];
        $Tempat_tinggal = $_POST['Tempat_tinggal'];
        $Kelamin = $_POST['Kelamin'];
        $Goldarah = $_POST['Goldarah'];
        $Tinggi_Badan = $_POST['Tinggi_Badan'];
        $Berat_badan = $_POST['Berat_Badan'];
        $NoTelp = $_POST['NoTelp'];
        $SH_1 = $_POST['SH_1'];
        $SH_2 = $_POST['SH_2'];
        $SH_3 = $_POST['SH_3'];


        $jml=$SH_1+$SH_2+$SH_3;
        $Rata_Rata=$jml/3;
        if($Rata_Rata >= 40 )
        {
            $Predikat ="Bahaya";
            $Keterangan ="Segeralah Menyerahkan diri Ke rumah sakit";
        }
        else if($Rata_Rata = 39 )
        {
            $Predikat ="ODP";
            $Keterangan ="Anda Dalam Pengawasan";
        }
        else if($Rata_Rata = 38 )
        {
            $Predikat ="ODP";
            $Keterangan ="Anda Dalam Pengawasan";
        }
        else if($Rata_Rata = 37 )
        {
            $Predikat ="DM";
            $Keterangan ="Waspada";
        }
        else if ($Rata_Rata = 36 )
        {
            $Predikat ="N";
            $Keterangan ="Normal";
        }
     
 $sql = "INSERT INTO pasien (KTP_KK, Nama, Tempat_tinggal, Kelamin, Goldarah, Tinggi_Badan, Berat_Badan, NoTelp, SH_1, SH_2, SH_3, Rata_Rata, Predikat, Keterangan) 
        VALUES ('$KTP_KK', '$Nama', '$Tempat_tinggal','$Kelamin','$Goldarah','$Tinggi_Badan','$Berat_badan','$NoTelp','$SH_1','$SH_2','$SH_3','$Rata_Rata','$Predikat','$Keterangan')";
$res = mysqli_query($koneksi, $sql);

$count = mysqli_affected_rows($koneksi);

if($count == 1)
{
   header("Location: index.php");
}
else
{
   header("Location: tambah.php");
}
}
else
{
    header("Location: index.php");
}

?>
