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
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>

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
                                    <h4 class="page-title">Event Detail Listing</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">JIVVE</a></li>
                                        <li class="breadcrumb-item"><a href="#">Events</a></li>
                                        <li class="breadcrumb-item active">Listings</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <div class="text-center mb-4">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box bg-secondary text-white">
                                                    <i class="fi-tag"></i>
                                                    <h3 class="m-b-10">100</h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-weight-medium">Max tickets</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box bg-primary text-white">
                                                    <i class="fi-archive"></i>
                                                    <h3 class="m-b-10">72</h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-weight-medium">Sold Tickets</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box bg-success text-white">
                                                    <i class="fi-help"></i>
                                                    <h3 class="m-b-10">18</h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-weight-medium">Available Tickets</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box bg-danger text-white">
                                                    <i class="fi-delete"></i>
                                                    <h3 class="m-b-10">0</h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-weight-medium">Returned Tickets</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <table class="table table-hover m-0 table-centered dt-responsive nowrap" cellspacing="0" width="100%" id="datatable">
                                        <thead class="bg-inverse">
                                        <tr>
                                            <th class="font-weight-medium">ID</th>
                                            <th class="font-weight-medium">Guest</th>
                                            <th class="font-weight-medium">Event</th>
                                            <th class="font-weight-medium">Sold By</th>
                                            <th class="font-weight-medium">Type</th>
                                            <th class="font-weight-medium">Status</th>
                                            <th class="font-weight-medium">Sold Date</th>
                                            <th class="font-weight-medium">Event Date</th>
                                            <th class="font-weight-medium">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody class="font-14">
                                            <tr>
                                                <td><b>#1256</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">George A. Lianes</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Support for theme
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);">
                                                        <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">General Admission</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-success">Open</span>
                                                </td>

                                                <td>
                                                    2017/04/28
                                                </td>

                                                <td>
                                                    2017/04/28
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#2542</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Jose D. Delacruz</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    New submission on your website
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);">
                                                        <img src="assets/images/users/avatar-9.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-warning">Box</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">Closed</span>
                                                </td>

                                                <td>
                                                    2008/04/25
                                                </td>

                                                <td>
                                                    2008/04/25
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#320</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Phyllis K. Maciel</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Verify your new email address!
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);">
                                                        <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-danger">VIP</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-success">Open</span>
                                                </td>

                                                <td>
                                                    2017/04/20
                                                </td>

                                                <td>
                                                    2017/04/25
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#1254</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="assets/images/users/avatar-8.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Margeret V. Ligon</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Your application has been received!
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);">
                                                        <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-danger">VIP</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">Closed</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    21/05/2017
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#1020</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="assets/images/users/avatar-9.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Erwin E. Brown</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    A new rating has been received
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-warning">Box</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">Closed</span>
                                                </td>

                                                <td>
                                                    2013/08/11
                                                </td>

                                                <td>
                                                    2013/08/30
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#854</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">William L. Trent</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Your Profile has been accepted
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);">
                                                        <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-danger">VIP</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-success">Open</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    21/05/2017
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#9501</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Amy R. Barnaby</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Homeworth for your property increased
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">General Admission</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-success">Open</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    21/05/2017
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#3652</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Jessica T. Phillips</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Item Support Message sent
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);">
                                                        <img src="assets/images/users/avatar-9.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-warning">Box</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">Closed</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    21/05/2017
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#9852</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Debra J. Wilson</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Your item has been updated!
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);">
                                                        <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-danger">VIP</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-success">Open</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    21/05/2017
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#3652</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Luke J. Sain</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Your password has been reset
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);">
                                                        <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">General Admission</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-success">Open</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    21/05/2017
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#1352</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Karen R. Doyle</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Question regarding your Bootstrap Theme
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);">
                                                        <img src="assets/images/users/avatar-8.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-danger">VIP</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-success">Open</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    21/05/2017
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#3562</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="assets/images/users/avatar-8.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Freddie J. Plourde</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Security alert for my account
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">General Admission</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-success">Open</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    21/05/2017
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#3658</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="assets/images/users/avatar-9.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Darrell J. Cook</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Christopher S. Ahmad
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);">
                                                        <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-warning">Box</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">Closed</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    21/05/2017
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#2251</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="assets/images/users/avatar-8.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Mark C. Diaz</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Verify your new email address!
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);">
                                                        <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-danger">VIP</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-success">Open</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    21/05/2017
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#3654</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Robert K. Joseph</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Support for theme
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);">
                                                        <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">General Admission</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-success">Open</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    21/05/2017
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- end col -->
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

        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
            });
        </script>

    </body>
</html>