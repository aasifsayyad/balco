<?php include('includes/header-top.php');?>
<body class="fix-header fix-sidebar">
   <?php include('includes/preloader.php');?>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <?php include('includes/header.php');?>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
           <?php //include('includes/sidebar.php');?>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
           <?php include('includes/titlebar.php');?>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->                
                <div class="row">
                    <div class="col-12">
                         <div class="card mydata">
                            <div class="card-body">
                        <div class="text-center">
                            <h1 style="font-size:80px;font-weight: bold">404</h1><br><br>
                            <h1 class="text-uppercase">Page not found </h1>
                            <a class="btn btn-info btn-rounded waves-effect waves-light m-b-40" href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a> 
                        </div>
                            </div>
                         </div>
                    </div>                    
                </div>                
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <?php include('includes/footer.php');?>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <?php include('includes/footer-min.php');?>
     <!-- Styles -->
</body>
</html>