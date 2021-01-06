<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Dashboard - Brand</title>
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" />
    <link rel="stylesheet" type="text/css" href="/css/Login-Form-Clean.css" />
    <link rel="stylesheet" type="text/css" href="/css/Map-Clean.css" />
    <link rel="stylesheet" type="text/css" href="/css/Registration-Form-with-Photo.css" />
    <link rel="stylesheet" type="text/css" href="css/Team-Boxed.css" />
</head>

<body id="page-top">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="bg-white rounded-lg shadow-sm p-5">
                    <ul class="nav nav-pills nav mb-3">
                        <li class="nav-item">
                            <a href="/Pages/where" data-toggle="pill" class="nav-link active">
                                <i class="fas fa-backward"></i> Cart
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div id="nav-tab-card" class="tab-pane fade show active">
                            <p class="alert alert-warning ">Bayar sebelum tanggal jatuh tempo  !!</p>
                            <form action="/Pages/where" method="post">
                                <div class="form-group">
                                    <label for="username">Virtual Code</label><br>
                                    <!-- <input type="text" name="username" placeholder="" required class="form-control" /> -->
                                   <!--  < --><!-- SELECT class="form-control">
                                    <option>BNI</option>
                                    <option>BCA</option>
                                    <option>MANDIRI</option>
                                    </SELECT> -->
                                    <input class="form-control" readonly value="XXXXXXXXXXXX" name="">
                                </div>
                                <div class="form-group"><label for="cardNumber">Alamat</label>
                                    <div class="input-group">
                                        <input type="text" name="cardNumber" placeholder="Alamat" class="form-control" required value="Bandung" readonly />
                                        <div class="input-group-append"><span class="input-group-text text-muted"><i class="fa fa-cc-visa mx-1"></i><i class="fa fa-cc-amex mx-1"></i><i class="fa fa-cc-mastercard mx-1"></i></span></div>
                                    </div>
                                </div>
                                 <div class="row"> 
                                     <div class="col-sm-4"> 
                                        <div class="form-group">
                                            <label data-toggle="tooltip" title="Three-digits code on the back of your card">
                                                Due Date
                                                <i class="fa fa-question-circle"></i></label>
                                                <input type="text" readonly class="form-control" value="<?php echo date("d M Y", time()+ (3600*24*2)); ?>" /></div>
                                    </div> 
                                    <button disabled type="button" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm" class="fa fa-trash">Detail</button>
                                </div> 
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>