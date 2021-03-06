<?php
  require_once('../model/lot.php');
  $lots = Lot::getAllLot();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vendre un lot</title>
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
  <link rel="stylesheet" href="../bootstrap-select/css/bootstrap-multiselect.css">
  <!-- Latest compiled and minified CSS -->
  <!-- jQuery 2.2.3 -->
  <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>

  <script src="../bootstrap-select/js/jquery.validate.min.js"></script>

  <script src="../bootstrap-select/js/bootstrap-multiselect.js"></script>

  <!-- Bootstrap 3.3.6 -->
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/app.min.js"></script>
  <!-- <link rel="stylesheet" href="/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />
  <script src="/vendor/bootstrap-multiselect/js/bootstrap-multiselect.js"></script> -->


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="../https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

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
        Vente de lots
        <small>Modifiez avec précaution</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.html"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Saisie numéro lot</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Form Element sizes -->
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Veuillez saisir le numéro du lot</h3>
          </div>
          <form id="numeroLotForm" method="POST" action="../controller/controllerRechercheLot.php" class="form-horizontal">
            <div class="box-body">
              <input class="form-control input-lg" name="numeroLot" id="numeroLot" type="text" placeholder="Numéro lot" onkeyup="verifStatut()">
              <input class="form-control input-lg" name="formEnvoie" id="formEnvoie" type="hidden" value="vente">
              <span id="NumLotInnexact"></span>
              <div class="box-footer">
                <button type="submit" value="Submit" id="buttonValider" class="btn btn-info center-block">Vendre</button>
              </div>
            </div>
          </form>
        </div>

        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title"></h3>
          </div>
          <form id="multiselectForm" method="post" action="../controller/controllerRechercheLotPourVenteMultiple.php" class="form-horizontal">
            <div class="box-body">
                <label class="col-xs-3 control-label">Lots disponible</label>
                <div class="col-xs-5">
                    <select class="form-control" name="lotsDisponible[]" multiple>
                      <?php foreach ($lots as $key => $lot) {
                              if($lot->getCouponNoIncr() != -1 && $lot->getStatut()==="En vente"){ ?>
                        <option value="<?php echo $lot->getCouponNoIncr(); ?>"><?php echo $lot->getCouponNoIncr(); ?></option>
                        <?php
                              }
                            } ?>
                    </select>
                </div>
            </div>

            <div class="box-footer">
                <div class="col-xs-5 col-xs-offset-3">
                    <button type="submit" class="btn btn-default">Vendre</button>
                </div>
            </div>
          </form>
        </div>
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="https://clubsthilair.wordpress.com/">Club Hilaire</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script>
$(document).ready(function() {
    $('#multiselectForm')
        .find('[name="lotsDisponible[]"]')
            .multiselect({
            includeSelectAllOption: true,
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        filterPlaceholder: "Trouvez un lot",
        maxHeight: 200,
        nonSelectedText: "Selectionnez un lot",
        allSelectedText: "Vous avez tous selectionné",
        selectAllText: "Tous les lots",
        numberDisplayed: 10,
                // Re-validate the multiselect field when it is changed
                onChange: function(element, checked) {
                    $('#multiselectForm').validate('revalidateField', 'lotsDisponible[]');
                    // adjustByScrollHeight();
                },
                onDropdownShown: function(e) {
                    // adjustByScrollHeight();
                },
                onDropdownHidden: function(e) {
                    // adjustByHeight();
                }
            })
            .end()
        .validate({
            framework: 'bootstrap',
            // Exclude only disabled fields
            // The invisible fields set by Bootstrap Multiselect must be validated
            excluded: ':disabled',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                browsers: {
                    validators: {
                        callback: {
                            message: 'Selectionnez au moins 2 lots',
                            callback: function(value, validator, $field) {
                                // Get the selected options
                                var options = validator.getFieldElements('lotsDisponible[]').val();
                                return (options != null
                                        && options.length >= 2 && options.length <= 3);
                            }
                        }
                    }
                }
            }
        });
});
</script>
<script type="text/javascript">
  console.log("ok");
  var f=document.forms["numeroLotForm"].elements;

  function verifStatut(){
  	var regNumLot = new RegExp('^[0-9]+$','i');
    var identifiant= f['numeroLot'].value;
    if (!regNumLot.test(f['numeroLot'].value)){
	     document.getElementById("NumLotInnexact").innerHTML = "Numéro de coupon invalide ! Exemple valide : 12";
       document.getElementById("buttonValider").disabled = true;
    }
    else if(numeroLot != ''){
       $.post('../controller/checkStatutVente.php',{ identifiant: identifiant}, function(data) {
       $('#NumLotInnexact').text(data);
       if(document.getElementById("NumLotInnexact").innerHTML == 'Cliquez sur Vendre pour vendre le lot') {
         document.getElementById("buttonValider").disabled = false;
       }
       else {
         document.getElementById("buttonValider").disabled = true;
       }
       });
    }
  }
</script>
</body>
</html>
