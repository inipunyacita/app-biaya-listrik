<?php

if (isset($_POST['submit'])) {
    $kwh = $_POST['kwh'];
    $denda = $_POST['denda'];
    $adm = $_POST['admin'];

    if ($kwh == null || $denda == null) {
        echo "<script>
            alert('Mohon isi data dengan lengkap');
            window.location.href = '../task/index.php';
        </script>";
    }

    $biayakwh = $kwh * 1000;
    $totalbiaya = $biayakwh + $denda + $adm;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- icons & fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hasil Biaya</title>
</head>

<body>
    <div class="container" id="containerbiaya">
        <div class="content d-flex align-items-center">
            <div class="detail-content bg-light rounded shadow">
                <label class="form-label text-dark">
                    <div class="row">
                        <div class="col-md-1"><span class="material-icons">point_of_sale</span></div>
                        <div class="col-md-11" style="font-weight: 800;">
                            Detail Pembayaran<br><br>
                        </div>
                    </div>
                    <!-- harga kwh -->
                    <div class="row">
                        <div class="col-md-5">Harga KWH</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-6"><span id="harga-kwh"><?= $biayakwh ?></span></div>
                    </div>
                    <!-- jumlah denda -->
                    <div class="row">
                        <div class="col-md-5">Denda</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-6"><span id="jumlah-denda"><?= $denda ?></span></div>
                    </div>
                    <!-- biaya admin -->
                    <div class="row">
                        <div class="col-md-5">Biaya Admin</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-6"><span id="biaya-adm"><?= $adm ?></span></div>
                    </div>
                    <!-- total bayar -->
                    <div class="row" id="totalbayar">
                        <div class="col-md-5">Total Bayar</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-6"><span id="biaya-adm"><?= $totalbiaya ?></span></div>
                    </div>
                </label><br><br>
                <button type="back" name="back" id="back" class="btn btn-secondary shadow-sm" style="font-weight: bold;">Kembali</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>