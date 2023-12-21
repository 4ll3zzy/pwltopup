
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    
    
    <title>Order!</title>
</head>

<header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-custom shadow-sm p-3 mb-5 bg-white">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="<?= "assets/vendor/template" ?>/assets/images/svmmer.png" width="160px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " href="/">
                            <i class="fa fa-home"></i>
                            Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/status.html">
                                <i class="fa fa-search"></i>
                                Cek Pesanan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <body>
            <br><br><br><br>
            
            <div class="container">
                <div class="row mt-4" style="margin:0px">
                    <div class="col-md-12 col-sm-12 col-lg-4">
                        <div class="text-center text-md-left mb-2">
                            <img src="<?= "assets/vendor/template" ?>//assets/images/ml.png" 
                            class="img-responsive shadow rounded mb-2" width="200px" height="200px">
                        </div>
                        <h5>Mobile Legends</h5>
                        <span class="strip-primary"></span>
                        <p class="mt-4 pr-4">Cukup masukan ID, pilih nominal yang diinginkan, lakukan pembayaran, lalu Diamonds / Starlight Member / Twilight Pass. Tunggu 5-15 menit akan bertambah langsung ke akun Mobile Legends Anda setelah pembayaran berhasil.</p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-8">
                        <form class="contact-form" id="orderform" method="POST" autocomplete="off">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-white text-center position-absolute circle-primary">1</div>
                                            <h5 class="ml-5">Lengkapi data</h5>
                                            <hr><div class="form-row mt-4">
                                                <div class="col">
                                                    <input type="number" class="form-control" name="data" placeholder="Masukan UserID" required="">
                                                </div>
                                                <div class="col">
                                                    <input type="number" class="form-control" name="zoneid" placeholder="Masukan ServerID" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" required="">
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <button type="button" class="btn btn-original btn-sm" data-toggle="modal" data-target="#exampleModal">Petunjuk</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="pt-2 pr-3">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="<?= "assets/vendor/template" ?>//assets/images/t1.png">
                                                    <img class="img-fluid" src="<?= "assets/vendor/template" ?>//assets/images/t2.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="note"></div>
                                <div class="col-12 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-white text-center position-absolute circle-primary">2</div>
                                            <h5 class="ml-5">Pilih nominal</h5>
                                            <hr>
                                            <div class="mt-4">
                                                <div class="panel-topup">
                                                <?php
                                                foreach($mobile_legends as $ml) : ?>
                                                    <input type="radio" id="service12" name="service" value="24"><label for="service12"><?= $ml->nominal ?></label>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-white text-center position-absolute circle-primary">3</div>
                                            <h5 class="ml-5">Pilih metode pembayaran</h5>
                                            <hr>
                                            <div class="mt-4">
                                                <div class="methods">
                                                    <input class="mtdbtn" type="radio" id="method0" name="method" value="Bank BCA">
                                                    <label class="mtdlabel" for="method0"><img src="<?= "assets/vendor/template" ?>//assets/images/bca.png" class="img-fluid">
                                                        <p class="float-right">
                                                            <span class="badge badge-success" id="Bank_BCA">Rp 3.900.000</span>
                                                        </p>
                                                    </label><input class="mtdbtn" type="radio" id="method1" name="method" value="QRIS">
                                                    <label class="mtdlabel" for="method1"><img src="<?= "assets/vendor/template" ?>//assets/images/qris.png" class="img-fluid">
                                                        <p class="float-right">
                                                            <span class="badge badge-success" id="QRIS">Rp 3.928.200</span>
                                                        </p>
                                                    </label><input class="mtdbtn" type="radio" id="method2" name="method" value="VA Mandiri">
                                                    <label class="mtdlabel" for="method2"><img src="<?= "assets/vendor/template" ?>//assets/images/mandiri.png" class="img-fluid">
                                                        <p class="float-right">
                                                            <span class="badge badge-success" id="VA_Mandiri">Rp 3.905.000</span>
                                                        </p>
                                                    </label><input class="mtdbtn" type="radio" id="method3" name="method" value="VA BNI">
                                                    <label class="mtdlabel" for="method3"><img src="<?= "assets/vendor/template" ?>//assets/images/bni.png" class="img-fluid">
                                                        <p class="float-right">
                                                            <span class="badge badge-success" id="VA_BNI">Rp 3.904.500</span>
                                                        </p>
                                                    </label><input class="mtdbtn" type="radio" id="method4" name="method" value="Alfamart">
                                                    <label class="mtdlabel" for="method4"><img src="<?= "assets/vendor/template" ?>//assets/images/alfamart.png" class="img-fluid">
                                                        <p class="float-right">
                                                            <span class="badge badge-success" id="Alfamart">Rp 3.905.000</span>
                                                        </p>
                                                    </label>                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-white text-center position-absolute circle-primary">4</div>
                                                <h5 class="ml-5">Masukkan nomor Whatsapp</h5>
                                                <hr>
                                                <div class="mt-4">
                                                    <input type="number" class="form-control" name="nohp" placeholder="08xxxxxxxxx" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        
                                        *Dengan mengklik tombol order anda telah menyetujui <a href="terms-services" target="_blank" rel="noopener noreferrer">Syarat & Ketentuan</a>  yang berlaku
                                        
                                        
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="button" value="Order!" id="orderbtn" class="btn btn-original">
                                        <input type="hidden" name="cid" value="1">
                                        
                                    </div>
                                    <div id="ordermodal" class="modal fade" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div id="orderdetail"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </footer>
            
            
            <!-- Optional JavaScript; choose one of the two! -->
            
            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
            
            <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
            -->
        </body>
        </html>