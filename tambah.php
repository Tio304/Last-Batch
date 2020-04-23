<?php 
    include 'aset/header.php';
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
    thead{
        background-color: grey;
        color: white;
    }
    tbody{
        background-color: darkslategrey;
        color: white;
    }
</style>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Tambah Data Pasien</h2>
                </div>
                <div class="card-body">
                <form method="post" action="proses-tambah.php">
                        <div class="form-group">
                            <label for="KTP_KK">KTP/KK</label>
                            <input type="text" class="form-control" name="KTP_KK" id="KTP_KK" placeholder="Masukkan No KTP/KK">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Masukkan Nama">
                            
                        </div>
                        <div class="form-group">
                            <label for="Tempat_tinggal">Alamat</label>
                            <input type="text" class="form-control" name="Tempat_tinggal" id="Tempat_tinggal" placeholder="Masukkan Alamat">
                           
                        </div>
                        <div class="form-group">
                            <label class="label">Jenis Kelamin</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="Kelamin" class="form-control">
                                    <option disabled="disabled" selected="selected">Pilih Gender Anda</option>
                                    <option value="Pria"> Pria </option>
                                    <option value="Wanita"> Wanita </option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label">Golongan Darah</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="Goldarah" class="form-control">
                                    <option disabled="disabled" selected="selected">Pilih Golongan Darah Anda</option>
                                    <option value="A"> A</option>
                                    <option value="B"> B</option>
                                    <option value="O"> O </option>
                                    <option value="AB"> AB </option>

                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Tinggi_Badan">Tinggi Badan </label>
                            <input type="text" class="form-control" name="Tinggi_Badan" id="Tinggi_Badan" placeholder="Masukkan Tinggi Badan">
                            
                        </div>
                        <div class="form-group">
                            <label for="Berat_Badan">Berat Badan</label>
                            <input type="text" class="form-control" name="Berat_Badan" id="Berat_Badan" placeholder="Masukkan Berat Badan">
                            
                        </div>
                        <div class="form-group">
                            <label for="NoTelp">No.telp</label>
                            <input type="text" class="form-control" name="NoTelp" id="NoTelp" placeholder="Masukkan No.Telp">
                           
                        </div>
                       
                        <div class="form-group">
                            <label for="SH_1">Suhu Tubuh Hari ke 1</label>
                            <input type="text" class="form-control" name="SH_1" id="SH_1" placeholder="Masukkan Suhu Tubuh Pasien">

                        </div>
                        <div class="form-group">
                            <label for="SH_2">Suhu Tubuh Hari ke 2</label>
                            <input type="text" class="form-control" name="SH_2" id="SH_2" placeholder="Masukkan Suhu Tubuh Pasien">
                            
                        </div>
                        <div class="form-group">
                            <label for="SH_3">Suhu Tubuh Hari ke 3</label>
                            <input type="text" class="form-control" name="SH_3" id="SH_3" placeholder="Masukkan Suhu Tubuh Pasien">
                            
                        </div>
                        
                        
                       <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include 'aset/footer.php';
?>