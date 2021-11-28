<!doctype html>
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

    <title>Electric Price - Cita</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <form action="prosesbiaya.php" method="post">
                <center>
                    <h3 class="text-dark" style="font-weight: 800;">Hitung Total Bayar Listrik Online</h3><br>
                </center>
                <!-- content for data form -->
                <div class="form-content bg-light rounded shadow">
                    <!-- input kwh -->
                    <label class="form-label">
                        <div class="row">
                            <div class="col-md-1"><span class="material-icons" style="color: black;">offline_bolt</span></div>
                            <div class="col-md-11">Nilai KWH H :</div>
                        </div>
                    </label>
                    <input type="number" class="form-control" name="kwh" id="kwh" onchange="datakwh();" placeholder="Masukan nilai KWH anda">
                    <!-- input denda -->
                    <label class="form-label">
                        <div class="row">
                            <div class="col-md-1"><span class="material-icons" style="color: black;">paid</span></div>
                            <div class="col-md-11">Jumlah Denda :</div>
                        </div>
                    </label>
                    <input type="number" class="form-control" name="denda" id="denda" onchange="datadenda();" placeholder="Masukan jumlah denda anda (Rp)">
                    <!-- biaya admin -->
                    <label class="form-label">
                        <div class="row">
                            <div class="col-md-1"><span class="material-icons">price_check</span></div>
                            <div class="col-md-11">Biaya Admin :</div>
                        </div>
                    </label>
                    <input type="number" class="form-control" name="admin" id="admin" value="10000" readonly>
                </div>
                <!-- content for verification data -->
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
                            <div class="col-md-6"><span id="harga-kwh">0</span></div>
                        </div>
                        <!-- jumlah denda -->
                        <div class="row">
                            <div class="col-md-5">Jumlah Denda</div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-6"><span id="jumlah-denda">0</span></div>
                        </div>
                        <!-- biaya admin -->
                        <div class="row">
                            <div class="col-md-5">Biaya Admin</div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-6"><span id="biaya-adm">10000</span></div>
                        </div>
                    </label><br><br>
                    <button type="submit" name="submit" id="submit" class="btn btn-secondary shadow-sm" style="font-weight: bold;">Submit</button>
                </div>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>