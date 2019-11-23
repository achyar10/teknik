<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Kami Menjual Hydraulic Tools, Hand Tools, Air Tools, Tubing Tools, Screwdrivers, Power Tools, Generator, Air Compressor, Pompa Air, Safety Equipment">
    <title>Bakat Teknik Mandiri | <?php echo $title; ?></title>
    <link rel="shortcut icon" href="<?php echo media_url() ?>/images/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo media_url() ?>/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo media_url() ?>/css/frontend.css"">
    <link rel=" stylesheet" href="<?php echo media_url() ?>/css/infinite-slider.css"">
    <link href=" <?php echo media_url() ?>css/toastr.min.css" rel="stylesheet" type="text/css" />
    <link href=" <?php echo media_url() ?>css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class=" sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                    <a class="nav-item nav-link mr-3 <?= ($this->uri->segment(2) == 'contact') ? 'active' : '' ?>" href="<?= site_url('pages/contact') ?>">Hubungi Kami</a>
                    <a class="nav-item nav-link mr-3" href="<?= site_url('auth/log') ?>"><i class="mdi mdi-account"></i> Login</a>
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
    <h4 class="middle"><span>Partner Kami</span></h4>
    <div class="customer-logos">
        <?php foreach ($partner as $row) : ?>
            <div class="slide">
                <img src="<?php echo upload_url('client/' . $row->client_logo) ?>">
            </div>
        <?php endforeach; ?>

    </div>
    <footer class="page-footer font-small footer pt-4 mt-3">
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-9 mt-md-0 mt-3">
                    <h5 class="text-uppercase"><?php echo $footer->title; ?></h5>
                    <p><?php echo $footer->address; ?> <br>
                        <?php echo $footer->phone; ?> <br>
                        <?php echo $footer->email; ?></p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3 d-none d-sm-block d-sm-none d-md-block">
                    <h5 class="text-uppercase">Links</h5>
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
        <div class="footer-copyright text-center py-3">© <?php echo date('Y'); ?> Copyright
            <a href="<? site_url('/') ?>"> bakatteknikmandiri.com</a>
        </div>
    </footer>

    <script src="<?php echo media_url() ?>/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo media_url() ?>/js/slick.js"></script>
    <script src="<?php echo media_url() ?>/frontend/js/bootstrap.min.js"></script>
    <script src="<?php echo media_url() ?>js/toastr.min.js"></script>
    <script src="<?php echo media_url() ?>js/imgLiquid.js"></script>
    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "+62<?php echo substr($footer->whatsapp, 1) ?>", // WhatsApp number
                call_to_action: "Chat Kami", // Call to action
                position: "right", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
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