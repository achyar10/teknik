<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="bakatteknikmandiri">
    <meta name="title" content="Bakat Teknik Mandiri">
    <meta name="description" content="Kami Menjual Pembuatan Alat, Mesin, Logam, Stainless, Besi, Alumunium, Galvanis">
    <meta name="keywords" content="TEKNIK, MANDIRI, MESIN, GERINDA, STANLIS, PAGAR, BENGKEL">
    <meta property="og:url" content="http://www.bakatteknikmandiri.com">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Bakat Teknik Mandiri">

    <script type='application/ld+json'>
        {
            "@context": "http://www.schema.org",
            "@type": "AutoPartsStore",
            "name": "Bakat Teknik Mandiri",
            "url": "http://bakatteknikmandiri.com",
            "priceRange": "$",
            "description": "Kami Menjual Pembuatan Alat, Mesin, Logam, Stainless, Besi, Alumunium, Galvanis",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Jl. Cilendek Blok Istiqomah No.42, RT.01/RW.4, Cilendek Tim., Kec. Bogor Bar., Kota Bogor, Jawa Barat 16112",
                "addressRegion": "jawa barat",
                "addressCountry": "indonesia"
            }
        }
    </script>

    <title>Bakat Teknik Mandiri | <?php echo $title; ?></title>
    <link rel="shortcut icon" href="<?php echo media_url() ?>/images/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo media_url() ?>/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo media_url() ?>/css/frontend.css"">
    <link rel=" stylesheet" href="<?php echo media_url() ?>/css/infinite-slider.css"">
    <link href=" <?php echo media_url() ?>css/toastr.min.css" rel="stylesheet" type="text/css" />
    <link href=" <?php echo media_url() ?>css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href=" <?php echo media_url() ?>css/floating-wpp.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="site-header sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?= media_url() ?>/images/logo.png" alt="" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav mr-3">
                        <a class="nav-item nav-link mr-3 <?= ($this->uri->segment(1) == '') ? 'active' : '' ?>" href="<?= site_url() ?>">Beranda <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link mr-3 <?= ($this->uri->segment(2) == 'profile') ? 'active' : '' ?>" href="<?= site_url('pages/profile') ?>">Profil</a>
                        <a class="nav-item nav-link mr-3 <?= ($this->uri->segment(2) == 'product') ? 'active' : '' ?>"" href=" <?= site_url('pages/product') ?>">Katalog Produk</a>
                        <a class="nav-item nav-link mr-3 <?= ($this->uri->segment(2) == 'post') ? 'active' : '' ?>"" href=" <?= site_url('pages/post') ?>">Redaksi</a>
                        <a class="nav-item nav-link mr-3 <?= ($this->uri->segment(2) == 'contact') ? 'active' : '' ?>" href="<?= site_url('pages/contact') ?>">Hubungi Kami</a>
                        <a class="nav-item nav-link mr-3" href="<?= site_url('auth/log') ?>"><i class="mdi mdi-account"></i> Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="mb-3">
        <?php isset($main) ? $this->load->view($main) : '' ?>
    </div>

    <!-- Footer -->
    <?php
    $footer = $this->db->get_where('setting', ['id' => 1])->row();
    $partner = $this->db->get_where('client', ['client_status' => 1])->result();
    ?>
    <div style="margin-top:100px"></div>
    <div class="container">
        <h4 class="middle"><span>Partner Kami</span></h4>
        <div class="customer-logos">
            <?php foreach ($partner as $row) : ?>
                <div class="slide">
                    <img src="<?php echo upload_url('client/' . $row->client_logo) ?>">
                </div>
            <?php endforeach; ?>

        </div>
    </div>
    <footer class="page-footer font-small footer pt-4 mt-3">
        <div class="container text-center text-md-left">
            <div class="row">
                <div class="col-md-9 mt-md-0 mt-3 p-4">
                    <h5 class="text-uppercase"><?php echo $footer->title; ?></h5>
                    <p><?php echo $footer->address; ?> <br>
                        <?php echo $footer->phone; ?> <br>
                        <?php echo $footer->email; ?></p>
                </div>
                <div class="col-md-3 mb-md-0 mb-3 d-none d-sm-block d-sm-none d-md-block p-4">
                    <h5 class=" text-uppercase">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Home</a>
                        </li>
                        <li>
                            <a href="#!">Profile</a>
                        </li>
                        <li>
                            <a href="#!">Produk</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->
            </div>
        </div>
        <footer class="blog-footer">
            <br>
            <p>© <?php echo date('Y'); ?> Copyright <a href="<? site_url('/') ?>"> bakatteknikmandiri.com</a></p>
        </footer>
    </footer>
    <div id="myButton"></div>

    <script src="<?php echo media_url() ?>/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo media_url() ?>/js/slick.js"></script>
    <script src="<?php echo media_url() ?>/frontend/js/bootstrap.min.js"></script>
    <script src="<?php echo media_url() ?>js/toastr.min.js"></script>
    <script src="<?php echo media_url() ?>js/floating-wpp.min.js"></script>
    <script src="<?php echo media_url() ?>js/imgLiquid.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#myButton').floatingWhatsApp({
                phone: '<?php echo $footer->whatsapp; ?>',
                popupMessage: 'Hallo, ada yang bisa kami bantu?',
                message: "Saya mau pesan ....",
                showPopup: true,
                showOnIE: false,
                position: 'right',
                headerTitle: 'Selamat Datang',
                buttonImage: '<img src="<?php echo media_url('images/whatsapp.svg') ?>" />'
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".imgLiquidFill").imgLiquid({
                fill: true,
                horizontalAlign: "center",
                verticalAlign: "top"
            });
            $(".imgLiquidNoFill").imgLiquid({
                fill: false,
                horizontalAlign: "center",
                verticalAlign: "50%"
            });
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
    <?php if ($this->session->flashdata('success')) { ?>
        <script type="text/javascript">
            Command: toastr["success"]("<?php echo $this->session->flashdata('success') ?>")
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        </script>
    <?php } ?>
</body>

</html>