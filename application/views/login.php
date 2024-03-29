<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>WEB | <?php echo $title ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Achyar" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="<?php echo media_url() ?>/images/favicon.png">

  <!-- App css -->
  <link href="<?php echo media_url() ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo media_url() ?>/css/icons.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo media_url() ?>/css/app.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo media_url() ?>css/toastr.min.css" rel="stylesheet" type="text/css" />

  <style>
    .error {
      color: red;
    }

    body {
      background-color: #eee;
      background-size: 100%;
    }

    .card {
      background-color: rgba(255, 255, 255, 0.8);
    }
  </style>

</head>

<body class="">
  <div class="account-pages">
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
          <div class="card">
            <div class="card-body p-4">
              <div class="text-center mb-4">
                <h4 class="text-uppercase mt-0">WEB ADMIN PANEL</h4>
              </div>
              <div class="error-log"></div>
              <form id="logform" action="<?php echo site_url('auth/login') ?>" method="POST">
                <div class="form-group mb-2">
                  <label for="email">Email</label>
                  <input name="email" autocomplete="off" class="form-control" type="email" id="email" placeholder="Masukan email anda" autofocus="">
                </div>

                <div class="form-group mb-3">
                  <label for="password">Password</label>
                  <input name="password" class="form-control" type="password" id="password" placeholder="Masukan password anda">
                </div>

                <div class="form-group mb-0 text-center">
                  <button class="btn btn-primary btn-block" id="btn-login" type="submit"> Sign In </button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo media_url() ?>/js/vendor.min.js"></script>
  <script src="<?php echo media_url() ?>/js/app.min.js"></script>
  <script src="<?php echo media_url() ?>/js/jquery.validate.min.js"></script>
  <script src="<?php echo media_url() ?>js/toastr.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {

      $("#logform").validate({
        rules: {
          email: 'required',
          password: 'required'
        },
        messages: {
          email: 'email tidak boleh kosong',
          password: 'Password tidak boleh kosong'
        },
        submitHandler: submitLogin
      });

      function submitLogin() {
        var data = $("#logform").serialize();
        $('#loading_login').show();
        $.ajax({
          type: 'POST',
          url: "<?php echo site_url('auth/login') ?>",
          data: data,
          dataType: 'json',
          beforeSend: function() {
            $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Proses Autentikasi...');
          },
          success: function(response) {
            console.log(response);

            if (response.kode == 2 || response.kode == 0 || response.kode == 3) {
              $(".error-log").html(message_alert(response.pesan));
              $("#btn-login").html('LOGIN');
            } else {
              $(".error-log").remove();
              $("#btn-login").html('Sedang Memuat...');
              setTimeout(function() {
                window.location.href = "<?= site_url($redirect); ?>"
              }, 1000);

            }
          }
        }).always(function() {
          $('#loading_login').hide();
        });

        return false;
      }

      function message_alert(message) {
        return "<div role='alert' class='alert alert-danger alert-border-color alert-dismissible'><div class='icon'><span class='fa fa-exclamation-triangle'></span> " + message + "</div><div class='message'><button type='button' data-dismiss='alert' aria-label='Close' class='close'><span aria-hidden='true' class='fa fa-times'></span></button></div></div>";
      }
    });
  </script>

</body>

</html>