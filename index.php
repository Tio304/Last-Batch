<?php
include 'aset/header.php';
include 'koneksi.php';

$sql = "SELECT * FROM pasien";

$res = mysqli_query($koneksi,$sql);
$pasien = array();

while ($data = mysqli_fetch_assoc($res)){
    $pasien[] = $data;
}
?>

<head>
 <script type="text/javascript" src="latjs1.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website COVID-19</title>
    <link rel="stylesheet" href="http://localhost/CORONA/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/CORONA/aset/fontawesome/css/all.min.css">

    <script src="http://localhost/CORONA/aset/jquery.js"></script>
   <script src="http://localhost/CORONA/aset/bootstrap/js/bootstrap.min.js"></script>
</head>
<style>
body{
    background-image :url("https://wanderingdp.com/wp-content/uploads/2014/12/31.jpg");
    background-repeat: no-repeat;
}
    thead{
        background-color: grey;
        color: white;
    }
    tbody{
        background-color: darkslategrey;
        color: white;
    }
</style>
<body style="background-image:linear-gradient(bottom, #2c003e, #00bcd4);">
<div class="container">
    <div class="row mt-6">
        <div class="col-md">
            <div class="card bg-dark">
                <div class="card-header">
                    <h2 class="card-title text-white"><i class="fas fa-edit"></i>Data Pasien</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                                <th scope="col">KTP_KK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tempat tinggal</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Goldar</th>
                                <th scope="col">Tinggi_Badan</th>
                                <th scope="col">Berat Badan</th>
                                <th scope="col">NoTelp</th>
                                <th scope="col">Suhu Tubuh Hari 1</th>
                                <th scope="col">Suhu Tubuh Hari 2</th>
                                <th scope="col">Suhu Tubuh Hari 3</th>
                                <th scope="col">Predikat</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                            
                                
                                

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach ($pasien as $p ) { ?>
                                <tr>
                                    <th scope="row"><?= $no ?></th>
                                     <td><?= $p['KTP_KK'] ?></td>
                                     <td><?= $p['Nama'] ?></th>
                                     <td><?= $p['Tempat_tinggal'] ?></th>
                                     <td><?= $p['Kelamin'] ?></th>
                                     <td><?= $p['Goldarah'] ?></th>
                                     <td><?= $p['Tinggi_Badan'] ?></th>
                                     <td><?= $p['Berat_Badan'] ?></th>
                                     <td><?= $p['NoTelp'] ?></th>
                                     <td><?= $p['SH_1'] ?></th>
                                     <td><?= $p['SH_2'] ?></th>
                                     <td><?= $p['SH_3'] ?></th>
                                     <td><?= $p['Predikat'] ?></th>
                                     <td><?= $p['Keterangan'] ?></th>
                                     
                                     <td><a href="http://localhost/CORONA/detail.php" class="badge badge-primary">DETAIL</a>
                                     <a href="#" class="badge badge-success">EDIT</a>
                                     <a href="#" class="badge badge-danger">HAPUS</a></th>
  </th>
                                </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                    <a href="http://localhost/CORONA/tambah.php"><button type="submit" class="btn btn-success" >Isi Data</button></a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include 'aset/footer.php';
?>
