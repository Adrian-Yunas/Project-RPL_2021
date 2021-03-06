<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Dashboard Admin - M-oneklik
  </title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo base_url('assets/js/plugins/nucleo/css/nucleo.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url('assets/css/argon-dashboard.css?v=1.1.0') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/chat-admin.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/css/lightbox.css') ?>" rel="stylesheet">
  <!-- Javascript -->
  <script src="<?php echo base_url('assets/js/plugins/jquery/dist/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script>
  <script src="<?= base_url('assets/js/lightbox.js') ?>"></script>
</head>

<body style="overflow-x: hidden;">

  <!--   Core   -->

  <script src="<?php echo base_url('assets/js/plugins/script.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
  <!--   Optional JS   -->
  <script src="<?php echo base_url('assets/js/plugins/chart.js/dist/Chart.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/chart.js/dist/Chart.extension.js') ?>"></script>
  <!--   Argon JS   -->
  <script src="<?php echo base_url('assets/js/argon-dashboard.min.js?v=1.1.0') ?>"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
  <script>
    $('.nav-link').on('click', function() {
      $('.nav-link').removeClass('active');
      $(this).addClass('active');
    });
  </script>
</body>

</html>