<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Kami Menjual Hydraulic Tools, Hand Tools, Air Tools, Tubing Tools, Screwdrivers, Power Tools, Generator, Air Compressor, Pompa Air, Safety Equipment">
    <title>Bakat Teknik Mandiri | <?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo media_url() ?>/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo media_url() ?>/css/frontend.css"">
</head>

<body>
    <div class=" sticky-top">
    <nav class="navbar navbar-expand-lg nav-tek">
        <a class="navbar-brand" href="#">Bakat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav mr-3">
                <a class="nav-item nav-link mr-3 active" href="#">Beranda <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link mr-3" href="#">Profil</a>
                <a class="nav-item nav-link mr-3" href="#">Katalog Produk</a>
                <a class="nav-item nav-link mr-3" href="#">Partner</a>
                <a class="nav-item nav-link mr-3" href="#">Galeri</a>
                <a class="nav-item nav-link mr-3" href="#">Hubungi Kami</a>
            </div>
        </div>
    </nav>
    </div>
    <div class="mb-3">
        <?php isset($main) ? $this->load->view($main) : '' ?>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small footer pt-4 mt-3">
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-9 mt-md-0 mt-3">
                    <h5 class="text-uppercase">Bakat Teknik Mandiri</h5>
                    <p>Here you can use rows and columns to organize your footer content.</p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->
            </div>
        </div>
        <div class="footer-copyright text-center py-3">© <?php echo date('Y'); ?> Copyright:
            <a href="<? site_url('/') ?>"> bakatteknikmandiri.com</a>
        </div>
    </footer>

    <script src="<?php echo media_url() ?>/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo media_url() ?>/frontend/js/bootstrap.min.js"></script>
    </body>

</html>