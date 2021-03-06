<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Restituer un lot</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="../ionicons-2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">

  <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="../https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="../https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="../index.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>ST</b>H</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>St</b>Hilaire</span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->

      <!-- jQuery 2.2.3 -->
      <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
      <script>
      $(document).ready(function() {
        $('#menu').load("common/sidebar.html");
      });
      </script>
      <!-- Sidebar Menu -->
      <div id='menu' class="sidebar-menu"/>
      <!-- /.sidebar-menu -->


    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Vous avez restitué des lots
          <small>Récapitulatif</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="../index.html"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="Resititution.html"><i class="fa fa-dashboard"></i> Restitution</a></li>
          <li class="active">Lot restitué</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <?php if(isset($_GET['lot'])){ ?>
          <div class="callout callout-warning">
            <h4>Vous venez de restituer le lot numéro <?php echo $_GET['lot'];
            if(isset($_GET['prixpaye'])){
              echo ". Et avez donné au vendeur la somme de " .$_GET['prixpaye'];
            } ?> !</h4>
          </div>
          <?php } ?>
          <?php if(isset($_GET['lots'])){ ?>
            <div class="callout callout-warning">
              <h4>Vous venez de restituer les lots numéro <?php
              foreach ($_GET['lots'] as $numLots) {


                echo $numLots;
                if(isset($_GET['prixpaye'])){
                  echo ". Et avez donné au vendeur la somme de " .$_GET['prixpaye'];
                }
              }  ?> !</h4>
            </div>
            <?php } ?>
          </section>
          <!-- /.content -->
        </div>
        <footer class="main-footer">
          <!-- To the right -->
          <div class="pull-right hidden-xs">
            Anything you want
          </div>
          <!-- Default to the left -->
          <strong>Copyright &copy; 2016 <a href="https://clubsthilair.wordpress.com/">Club Hilaire</a>.</strong> All rights reserved.
        </footer>

        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.2.3 -->
        <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/app.min.js"></script>

        <!-- jQuery 2.2.3 -->
        <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="../plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../dist/js/demo.js"></script>
      </body>
      </html>
