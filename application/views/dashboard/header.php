<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php echo "Dashboard"; ?> ||
        <?php if(isset($title)) echo $title; ?>
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/bootstrap.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/style.default.css" id="theme-stylesheet">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <!--CK editor -->
    <script src="https://cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script>


    <script src="<?php echo base_url(); ?>assets/dashboard/js/jquery-2.2.4.js"></script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <style>
        .results tr[visible='false'],
        .no-result {
            display: none;
        }

        .results tr[visible='true'] {
            display: table-row;
        }

        .counter {
            padding: 8px;
            color: #ccc;
        }
        .starter-template {
        padding: 40px 15px;
        text-align: center;
        }
    </style>
</head>

<body>
    <!-- Side Navbar -->

    <nav class="side-navbar">
        <div class="side-navbar-wrapper">
            <div class="sidenav-header d-flex align-items-center justify-content-center">
            <?php foreach($admin_avatar as $av): ?>
                <div class="sidenav-header-inner text-center"><img src="<?php echo site_url($av ->admin_avatar);?>" alt="person" class="img-fluid rounded-circle">
            <?php endforeach; ?>    
                    <h2 class="h5 text-uppercase">
                        <?php echo $this->session->userdata('current_admin_name') ?>
                    </h2><span class="text-uppercase"><?php echo $this->session->userdata('session_role') ?></span>
                    <hr>
                    <?php $admin_id = $this->session->userdata('current_admin_id') ?>
                    <a class="btn btn-success" href="<?php echo site_url('Dashboard/edit_admin/'.$admin_id); ?>" value="">Edit Details</a>


                </div>
                <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
            </div>
            <div class="main-menu">
                <ul id="side-main-menu" class="side-menu list-unstyled">
                    <li class="active"><a href="<?php echo site_url('dashboard');?>"> <i class="icon-home"></i><span>Home</span></a></li>
                    <div class="admin-menu">
                        <!-- <ul id="side-admin-menu" class="side-menu list-unstyled">
                            <li> <a href="#pages-nav-list" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Manage Pages</span>
                        <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
                                <ul id="pages-nav-list" class="collapse list-unstyled">
                                    <li> <a href="<?php echo site_url('dashboard/contact'); ?>">Contact</a></li>

                                    <li> <a href="#">Page 3</a></li>
                                    <li> <a href="#">Page 4</a></li>
                                </ul> -->
                              
                                <?php if($this->session->userdata('session_power') == 'super'): ?>
                                <li> <a href="#pages-nav-list1" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Admin Management</span>
                        <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
                                    <ul id="pages-nav-list1" class="collapse list-unstyled">
                                        <li> <a href="<?php echo site_url('Creation/CreateAdmin'); ?>">Create Admin</a></li>
                                        <li> <a href="<?php echo site_url('Creation/AdminList'); ?>">Admin List</a></li>
                                       
                                    </ul>
                                </li>
                                <?php endif; ?>
                              
                                <div class="badge badge-info">Special</div>
                                </a>
                            </li>
                            <li> <a href="#pages-nav-list3" data-toggle="collapse" aria-expanded="false"><i class="fa fa-car" aria-hidden="true"></i><span>Vehicle Management</span>
                        <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
                                <ul id="pages-nav-list3" class="collapse list-unstyled">
                                    <li> <a href="<?php echo site_url('Dashboard/CreateVehicle'); ?>">Insert Vehicle Details</a></li>
                                    <li> <a href="<?php echo site_url('Dashboard/VehicleList'); ?>">Vehicle List</a></li>
                                   
                                </ul>
                            </li>

                            <li> <a href="#pages-nav-list4" data-toggle="collapse" aria-expanded="false"><i class="fa fa-car" aria-hidden="true"></i><span>Orders</span>
                        <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
                                <ul id="pages-nav-list4" class="collapse list-unstyled">
                                    <li> <a href="<?php echo site_url('Orders/NewOrders'); ?>">New Orders</a></li>
                                    <li> <a href="<?php echo site_url('Orders/ConfirmedOrders'); ?>">Confrimed Orders</a></li>
                                    <li> <a href="<?php echo site_url('Orders/NewOrders'); ?>">Pending Orders</a></li>
                                    <li> <a href="<?php echo site_url('Orders/CanceledOrders'); ?>">Canceled Orders</a></li>
                                </ul>
                            </li>



                            <!-- <li> <a href="<?php //echo site_url('Dashboard/ReservationList'); ?>"> <i class="fa fa-list-alt"> </i><span>Reservation List</span></a></li> -->
                            <!-- <li> <a href="<?php //echo site_url('Orders'); ?>"> <i class="icon-picture"> </i><span>Orders</span></a></li> -->

                        </ul>
                    </div>
                    <!-- <li> <a href="Dashboard/settings"><i class="icon-form"></i><span>Settings</span></a></li> -->
                    <!-- <li> <a href="charts.html"><i class="icon-presentation"></i><span>Charts</span></a></li>
            <li> <a href="tables.html"> <i class="icon-grid"> </i><span>Tables</span></a></li>
            <li> <a href="login.html"> <i class="icon-interface-windows"></i><span>Login page</span></a></li>
            <li> <a href="#"> <i class="icon-mail"></i><span>Demo</span> -->

                </ul>
            </div>
        </div>
    </nav>
    <div class="page home-page">
        <!-- navbar-->
        <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="" class="navbar-brand">
                  <div class="brand-text hidden-sm-down"><span>Admin </span><strong class="text-primary">Dashboard</strong></div></a></div>
              		<ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
               			 
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info"><?php if(isset($countorders)) echo $countorders ?></span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <?php foreach($getOrder as $GO) : ?>  
                        <li>
                            <a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                            <div class="msg-body">
                            <a href='<?php echo site_url('Orders/ViewInvoice/'.$GO->order_master_id.'/'.$GO->order_id.'/'.$GO->profile_id)?>'>
                              <h3 class="h5"><?php echo $GO->first_name; ?></h3><span><?php echo "Reference: ".$GO->reference_no; ?></span><small></small>
                              <span><?php echo "Amount: ". $GO->grand_total; ?></span><small><?php echo date("d F, Y", strtotime($GO->order_date_time)) ?></small>
                              </a>
                            </div>
                          </a>
                        </li>
                    <?php endforeach; ?>   
                    <li><a rel="nofollow" href="<?php echo site_url('Orders/index')?>" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul>
                </li>
                <li class="nav-item"><a href="<?php echo base_url(); ?>login/logout" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
        <!-- Counts Section -->










       
        <script>
            $(document).ready(function() {

                $('#admineditbtn').click(function() {

                    $('#myModal').modal('show');

                });

            });
        </script>