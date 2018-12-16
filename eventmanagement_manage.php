<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Jivve</title>

        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Multi Item Selection examples -->
        <link href="assets/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <?php include "functions/layout/header.php"; ?>
            <?php include "functions/layout/sidebar.php"; ?>




            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Manage Events</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Jivve</a></li>
                                        <li class="breadcrumb-item"><a href="#">Event Management</a></li>
                                        <li class="breadcrumb-item active">Manage Events</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">All Upcomming Events Listed Below</h4>
                                    <p class="text-muted font-14 m-b-30">
                                        The following grid contains all the Events that have not yet have been completed.
                                        Past events cannot be modified.
                                    </p>

                                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Event ID</th>
                                            <th>Event Name</th>
                                            <th>Event Date</th>
                                            <th>Category</th>
                                            <th># of Tickets</th>
                                            <th># Tickets Sold</th>
                                            <th>Employee Assigned</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <tr>
                                            <td>1034</td>
                                            <td>AM Yoga</td>
                                            <td>1/1/2018</td>
                                            <td>Yoga</td>
                                            <td>25</td>
                                            <td>13</td>
                                            <td>Mary Flexible</td>
                                        </tr>
                                        <tr>
                                            <td>1035</td>
                                            <td>AM Yoga</td>
                                            <td>1/2/2018</td>
                                            <td>Yoga</td>
                                            <td>25</td>
                                            <td>0</td>
                                            <td>Mary Flexible</td>
                                        </tr>
                                        <tr>
                                            <td>1036</td>
                                            <td>AM Yoga</td>
                                            <td>1/3/2018</td>
                                            <td>Yoga</td>
                                            <td>25</td>
                                            <td>0</td>
                                            <td>Mary Flexible</td>
                                        </tr>
                                        <tr>
                                            <td>1037</td>
                                            <td>AM Yoga</td>
                                            <td>1/4/2018</td>
                                            <td>Yoga</td>
                                            <td>25</td>
                                            <td>0</td>
                                            <td>Mary Flexible</td>
                                        </tr>
                                        <tr>
                                            <td>1038</td>
                                            <td>AM Yoga</td>
                                            <td>1/5/2018</td>
                                            <td>Yoga</td>
                                            <td>25</td>
                                            <td>0</td>
                                            <td>Mary Flexible</td>
                                        </tr>
                                        <tr>
                                            <td>1034</td>
                                            <td>PM Yoga</td>
                                            <td>1/1/2018</td>
                                            <td>Yoga</td>
                                            <td>25</td>
                                            <td>13</td>
                                            <td>Mary Flexible</td>
                                        </tr>
                                        <tr>
                                            <td>1035</td>
                                            <td>PM Yoga</td>
                                            <td>1/2/2018</td>
                                            <td>Yoga</td>
                                            <td>25</td>
                                            <td>0</td>
                                            <td>Mary Flexible</td>
                                        </tr>
                                        <tr>
                                            <td>1036</td>
                                            <td>PM Yoga</td>
                                            <td>1/3/2018</td>
                                            <td>Yoga</td>
                                            <td>25</td>
                                            <td>0</td>
                                            <td>Mary Flexible</td>
                                        </tr>
                                        <tr>
                                            <td>1037</td>
                                            <td>PM Yoga</td>
                                            <td>1/4/2018</td>
                                            <td>Yoga</td>
                                            <td>25</td>
                                            <td>0</td>
                                            <td>Mary Flexible</td>
                                        </tr>
                                        <tr>
                                            <td>1038</td>
                                            <td>PM Yoga</td>
                                            <td>1/5/2018</td>
                                            <td>Yoga</td>
                                            <td>25</td>
                                            <td>0</td>
                                            <td>Mary Flexible</td>
                                        </tr>
                                        <tr>
                                            <td>1034</td>
                                            <td>Wine Tasting - Taste of Spain</td>
                                            <td>1/1/2018</td>
                                            <td>Wine Tasting</td>
                                            <td>25</td>
                                            <td>13</td>
                                            <td>Bobby Imbiber</td>
                                        </tr>
                                        <tr>
                                            <td>1035</td>
                                            <td>Wine Tasting - Taste of Spain</td>
                                            <td>1/2/2018</td>
                                            <td>Wine Tasting</td>
                                            <td>25</td>
                                            <td>0</td>
                                            <td>Bobby Imbiber</td>
                                        </tr>
                                        <tr>
                                            <td>1036</td>
                                            <td>Wine Tasting - Taste of Spain</td>
                                            <td>1/3/2018</td>
                                            <td>Wine Tasting</td>
                                            <td>25</td>
                                            <td>0</td>
                                            <td>Bobby Imbiber</td>
                                        </tr>
                                        <tr>
                                            <td>1037</td>
                                            <td>Wine Tasting - Taste of Spain</td>
                                            <td>1/4/2018</td>
                                            <td>Wine Tasting</td>
                                            <td>25</td>
                                            <td>0</td>
                                            <td>Bobby Imbiber</td>
                                        </tr>
                                        <tr>
                                            <td>1038</td>
                                            <td>Wine Tasting - Taste of Spain</td>
                                            <td>1/5/2018</td>
                                            <td>Wine Tasting</td>
                                            <td>25</td>
                                            <td>0</td>
                                            <td>Bobby Imbiber</td>
                                        </tr>
                                        <tr>
                                            <td>1034</td>
                                            <td>Wine Tasting - Taste of France</td>
                                            <td>1/1/2018</td>
                                            <td>Wine Tasting</td>
                                            <td>25</td>
                                            <td>13</td>
                                            <td>Bobby Imbiber</td>
                                        </tr>
                                        <tr>
                                            <td>1035</td>
                                            <td>Wine Tasting - Taste of France</td>
                                            <td>1/2/2018</td>
                                            <td>Wine Tasting</td>
                                            <td>25</td>
                                            <td>0</td>
                                            <td>Bobby Imbiber</td>
                                        </tr>
                                        <tr>
                                            <td>1036</td>
                                            <td>Wine Tasting - Taste of France</td>
                                            <td>1/3/2018</td>
                                            <td>Wine Tasting</td>
                                            <td>25</td>
                                            <td>0</td>
                                            <td>Bobby Imbiber</td>
                                        </tr>
                                        <tr>
                                            <td>1037</td>
                                            <td>Wine Tasting - Taste of France</td>
                                            <td>1/4/2018</td>
                                            <td>Wine Tasting</td>
                                            <td>25</td>
                                            <td>0</td>
                                            <td>Bobby Imbiber</td>
                                        </tr>
                                        <tr>
                                            <td>1038</td>
                                            <td>Wine Tasting - Taste of France</td>
                                            <td>1/5/2018</td>
                                            <td>Wine Tasting</td>
                                            <td>25</td>
                                            <td>0</td>
                                            <td>Bobby Imbiber</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>  
                        </div>    

                    </div>
                    <!-- end container -->
                </div>
                <!-- end content -->

                <?php include "functions/layout/footer.php"; ?>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>


        <!-- Data Tables JS -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>

        <!-- Custom main Js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                //$('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable').DataTable({
                    lengthChange: true,
                    buttons: ['copy', 'excel', 'pdf']
                });
                table.buttons().container()
                        .appendTo('#datatable_wrapper .col-md-6:eq(0)');

            });
        </script>

    </body>
</html>