<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Jivve</title>

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
                                    <h4 class="page-title">Event: Wine Tasting Task List</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Jivve</a></li>
                                        <li class="breadcrumb-item"><a href="#">Event Management</a></li>
                                        <li class="breadcrumb-item active">Task Lists</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="text-dark header-title m-t-0">Event Setup</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        All tasks required to be complete before the event
                                    </p>

                                    <ul class="sortable-list taskList list-unstyled" id="upcoming">
                                        <li class="task-warning" id="task1">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            Clean floor in event room
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="mb-0 float-right">
                                                    <a href="" class="text-muted">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle">
                                                    </a> 
                                                </p>
                                                <p class="mb-0">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="task-success" id="task2">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            Setup seating and tables
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="float-right mb-0">
                                                    <a href="" class="text-muted">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle">
                                                    </a> 
                                                </p>
                                                <p class="mb-0">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                            </div>
                                        </li>
                                        <li id="task3">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            Chill the wine
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="float-right mb-0">
                                                    <a href="" class="text-muted">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </a> 
                                                </p>
                                                <p class="mb-0">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="task-info" id="task4">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            Clean the wine glasses and set them up on the presentation table
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="float-right mb-0">
                                                    <a href="" class="text-muted">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                        <img src="assets/images/users/avatar-6.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </a> 
                                                </p>
                                                <p class="mb-0">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="task-danger" id="task5">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            Setup sinage promoting the event
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="float-right mb-0">
                                                    <a href="" class="text-muted">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </a> 
                                                </p>
                                                <p class="mb-0">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-primary btn-block mt-3 waves-effect waves-light"><i class="mdi mdi-plus-circle"></i> Add New</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="text-dark header-title m-t-0">Event In Progress</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        All tasks that are required to be performed during the event
                                    </p>

                                    <ul class="sortable-list taskList list-unstyled" id="inprogress">
                                        <li id="task6">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            Uncorking the wine
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="float-right mb-0">
                                                    <a href="" class="text-muted">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </a> 
                                                </p>
                                                <p class="mb-0">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="task-info" id="task7">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            Serving the wine
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="float-right mb-0">
                                                    <a href="" class="text-muted">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                        <img src="assets/images/users/avatar-6.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </a> 
                                                </p>
                                                <p class="mb-0">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="task-danger" id="task8">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            Regail the customers about the origin and process of making the wine
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="float-right mb-0">
                                                    <a href="" class="text-muted">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </a> 
                                                </p>
                                                <p class="mb-0">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="task-warning" id="task9">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            Collect customer reviews of the wine and the event
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="mb-0 float-right">
                                                    <a href="" class="text-muted">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle">
                                                    </a> 
                                                </p>
                                                <p class="mb-0">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-primary btn-block mt-3 waves-effect waves-light"><i class="mdi mdi-plus-circle"></i> Add New</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="text-dark header-title m-t-0">Event Teardown</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        All tasks required after the completion of the event.
                                    </p>

                                    <ul class="sortable-list taskList list-unstyled" id="completed">
                                        <li class="task-warning" id="task10">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            Clean tables and chairs
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="mb-0 float-right">
                                                    <a href="" class="text-muted">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle">
                                                    </a> 
                                                </p>
                                                <p class="mb-0">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="task-success" id="task11">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            Clean-up of glassware 
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="float-right mb-0">
                                                    <a href="" class="text-muted">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle">
                                                    </a> 
                                                </p>
                                                <p class="mb-0">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                            </div>
                                        </li>
                                        <li id="task12">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            Restocking of wine
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="float-right mb-0">
                                                    <a href="" class="text-muted">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </a> 
                                                </p>
                                                <p class="mb-0">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="task-info" id="task13">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            Inventory of wine
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="float-right mb-0">
                                                    <a href="" class="text-muted">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                        <img src="assets/images/users/avatar-6.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </a> 
                                                </p>
                                                <p class="mb-0">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="task-danger" id="task14">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            Removal of sinage and restoration of event room to baseline
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="float-right mb-0">
                                                    <a href="" class="text-muted">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </a> 
                                                </p>
                                                <p class="mb-0">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-primary btn-block mt-3 waves-effect waves-light"><i class="mdi mdi-plus-circle"></i> Add New</a>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

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

        <!-- Custom main Js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>