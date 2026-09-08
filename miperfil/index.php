<?php
//sesiones
session_start();
setlocale(LC_TIME, "es_EC.UTF-8", "es_EC", "esp");
date_default_timezone_set('America/Guayaquil');

//includes
include './controlador/conexion.php';
include './sesiones/abrir.php';
require './funciones/fn-menu.php';

//opcion
$opc = "-1";

//instanciar
$m = new Fn_menu();
$con = new Conecciones();
$conecta = $con->crearConexion();

/*
  if (isset($_GET['opc'])) {
  $opc = mysqli_real_escape_string($conecta,htmlentities( $_GET['opc']));
  }
 */

if (isset($_GET['opc'])) {
    $opc = $_GET['opc'];
}

if (!isset($_SESSION['sesiongonzanama'])) {
    header('Location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Cooperativa de Ahorro y Crédito 15 de Agosto - Dashboard User </title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
        <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
        <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
        <!-- Datatable -->
        <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
        <!-- Sweetalert -->
        <link href="vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
        <!-- Fileinput -->
        <link href="js/fileup-v2/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
        <link href="js/fileup-v2/themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css"/>
        <!-- Summernote -->
        <link href="vendor/summernote/summernote.css" rel="stylesheet">
        <!-- Material color picker -->
        <link href="vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <!-- Pick date -->
        <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
        <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">
        <link rel="stylesheet" href="vendor/css/custom.css">
        <link href="js/DataTables/datatables.min.css" rel="stylesheet">

    </head>
    <body>
        <div id="i_loadingglobal" style="display: none; position: fixed; z-index: 9999; background-color: black; width: 100%; height: 100%; opacity: 0.3">
            <img src="./images/cargando.gif" width="50" style="margin-left: 50%; margin-top: 20%;">
        </div>
        <!--*******************
            Preloader start
        ********************-->
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <!--*******************
            Preloader end
        ********************-->

        <!--**********************************
            Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

            <!--**********************************
                Nav header start
            ***********************************-->
            <div class="nav-header">
                <a href="../index.php" class="brand-logo">
                    <img class="logo-abbr" src="../assets/img/favicon-coop.png" alt="" style="width: 45%">
                    <img class="logo-compact" src="../assets/img/logo3.png" alt="">
                    <img class="brand-title" src="../assets/img/logo3.png" alt="">
                </a>

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
            </div>
            <!--**********************************
                Nav header end
            ***********************************-->

            <!--**********************************
        Chat box start
    ***********************************-->
            <div class="chatbox">
                <div class="chatbox-close"></div>
                <div class="custom-tab-1">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#alerts">Notificaciones</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="alerts" role="tabpanel">
                            <div class="card mb-sm-3 mb-md-0 contacts_card">
                                <div class="card-header chat-list-header text-center">
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                                    <div>
                                        <h6 class="mb-1">Notificaciones</h6>
                                        <p class="mb-0">Ver todas</p>
                                    </div>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
                                </div>
                                <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
                                    <ul class="contacts">


                                    </ul>
                                </div>
                                <div class="card-footer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--**********************************
        Chat box End
    ***********************************-->

            <!--**********************************
        Sidebar Fixed
    ***********************************-->
            <div class="fixed-content-box">
                <div class="head-name">
                    <img src="../assets/img/logo3.png" style="width: 75%;" >
                    <span class="close-fixed-content fa-left d-lg-none">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
                    </span>
                </div>
                <div class="fixed-content-body dz-scroll" id="DZ_W_Fixed_Contant">
                    <div class="tab-content" id="menu">
                        <?php include './menu.php'; ?>
                    </div>
                </div>
            </div>
            <!--**********************************
        Sidebar End
    ***********************************-->


            <!--**********************************
                Header start
            ***********************************-->
            <div class="header">
                <div class="header-content">
                    <?php include './header.php'; ?>
                </div>
            </div>
            <!--**********************************
                Header end ti-comment-alt
            ***********************************-->

            <!--**********************************
                Sidebar start
            ***********************************-->
            <div class="deznav">
                <?php include './deznav.php'; ?>
            </div>
            <!--**********************************
                Sidebar end
            ***********************************-->

            <!--**********************************
        Content body start
    ***********************************-->
            <div class="content-body">
                <!-- row -->
                <?php include './opc/opc-' . $opc . '.php'; ?>
            </div>
            <!--**********************************
                Content body end
            ***********************************-->

            <!--**********************************
                Footer start
            ***********************************-->
            <div class="footer">
                <!--                <div class="copyright">
                                    <p>Copyright © Designed &amp; Developed by <a href="http://dexignlab.com/" target="_blank">DexignLab</a> 2020</p>
                                </div>-->
            </div>
            <!--**********************************
                Footer end
            ***********************************-->

            <!--**********************************
       Support ticket button start
    ***********************************-->

            <!--**********************************
               Support ticket button end
            ***********************************-->


        </div>
        <!--**********************************
            Main wrapper end
        ***********************************-->

        <!--**********************************
            Scripts
        ***********************************-->
        <!-- Required vendors -->
        <script src="vendor/global/global.min.js"></script>
        <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="vendor/chart.js/Chart.bundle.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/deznav-init.js"></script>
        <!-- Apex Chart -->
        <script src="vendor/apexchart/apexchart.js"></script>

        <!-- Vectormap -->
        <!-- Chart piety plugin files -->
        <script src="vendor/peity/jquery.peity.min.js"></script>

        <!-- Chartist -->
        <script src="vendor/chartist/js/chartist.min.js"></script>

        <!-- Dashboard 1 -->
        <script src="js/dashboard/dashboard-1.js"></script>
        <!-- Svganimation scripts -->
        <script src="vendor/svganimation/vivus.min.js"></script>
        <script src="vendor/svganimation/svg.animation.js"></script>
        <!-- Datatable -->
        <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="js/plugins-init/datatables.init.js"></script>
        <!-- Sweetalert -->
        <script src="vendor/sweetalert2/dist/sweetalert2.min.js"></script>
        <script src="js/plugins-init/sweetalert.init.js"></script>
        <!-- Fileinput -->
        <script src="js/fileup-v2/js/plugins/piexif.js" type="text/javascript"></script>
        <script src="js/fileup-v2/js/plugins/sortable.js" type="text/javascript"></script>
        <script src="js/fileup-v2/js/fileinput.js" type="text/javascript"></script>
        <script src="js/fileup-v2/js/locales/fr.js" type="text/javascript"></script>
        <script src="js/fileup-v2/js/locales/es.js" type="text/javascript"></script>
        <script src="js/fileup-v2/themes/fas/theme.js" type="text/javascript"></script>
        <script src="js/fileup-v2/themes/explorer-fas/theme.js" type="text/javascript"></script>
        <!-- Summernote -->
        <script src="vendor/summernote/js/summernote.min.js"></script>
        <!-- Summernote init -->
        <script src="js/plugins-init/summernote-init.js"></script>
        <!-- Material color picker -->
        <script src="vendor/moment/moment.min.js"></script>
        <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
        <script src="js/plugins-init/material-date-picker-init.js"></script>
        <script src="js/DataTables/datatables.min.js"></script>
        <script type="text/javascript">
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                ]
            });

            function loading_start() {
                var div = document.getElementById("i_loadingglobal");
                if (div.style.display != "none") {
                    div.style.display = "none";
                } else {
                    div.style.display = "block";
                }
            }
        </script>
    </body>

</html>