<?php include('includes/header-top.php');?>
<style>
    .card-body {
    padding: 0;
    margin: 5px;
}
thead tr{
        background-color: #2083e4;
}
#dateTime, #time{
        height: 40px;
}
</style>
<body class="fix-header fix-sidebar">
   <?php include('includes/preloader.php');?>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <?php include('includes/header.php');?>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
                
            <!-- Sidebar scroll-->
           <?php include('includes/sidebar.php');?>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
           <?php include('includes/titlebar.php');?>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="lobibox-notify-wrapper top right"></div>
            <div class="container-fluid">
                    
                <!-- Start Page Content -->
                <div class="row"> 
                        <div class="col-lg-3 newcard">
                           <div class="datetimeDiv">
                                        <h4 class="datediv">Select Date: </h4>
                           </div>
                        </div>
                        <div class="col-lg-3 newcard">
                           <div class="datetimeDiv">
                                   <input type="text" class="dateTime form-control" autocomplete="off" data-date-format='yy-mm-dd'  id="dateTime"  placeholder="Date Time">
                                
                           </div>
                        </div>
                        <div class="col-lg-3 newcard">
                           <div class="datetimeDiv">
                                      <h4 class="datediv">Select Time: </h4>
                              
                           </div>
                        </div>
                        <div class="col-lg-3 newcard">
                           <div class="datetimeDiv">
                                <input type="time" name="time" id="time" autocomplete="off"  step="2" style="" class="time form-control">
                              
                           </div>
                        </div>
                    <div class="col-lg-12">
                        <div class="card mydata">
                            <div class="card-body"> 
                                     <button style="float:right;margin-bottom: 5px;" class="btn btn-primary" id="sendToPi"><i class="fa fa-database"></i> Send Data to PI <i class="fa fa-send"></i></button>
                                    
                                    <table id="ipp600" class="display nowrap table table-striped  table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                           <tr>
                                            <!--<th style="width: 10% !important;">Sr.No.</th>-->
                                            <th style="width: 35% !important;">IPP600 Parameters</th>
                                            <th style="width: 20% !important;">Name</th>
                                            <th style="width: 10% !important;">UOM</th>
                                            <th style="width: 15% !important;">Value</th>
                                            <th style="width: 20% !important;">Status</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                            </div>
                                 <div class="card-body">   
                                    <table id="cpp600" class="display nowrap table table-striped  table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                           <tr>
                                           <!--<th style="width: 10% !important;">Sr.No.</th>-->
                                            <th style="width: 35% !important;">CPP600  Parameters</th>
                                            <th style="width: 20% !important;">Name</th>
                                            <th style="width: 10% !important;">UOM</th>
                                            <th style="width: 15% !important;">Value</th>
                                            <th style="width: 20% !important;">Status</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
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
    <script src="<?php echo base_url();?>piadmin/js/manual_pptwelveHCA.js" type="text/javascript"></script>   
     <!-- Styles -->
</body>
</html>