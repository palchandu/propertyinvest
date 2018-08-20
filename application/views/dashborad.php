<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include("header.php");
?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="wrapper">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="btn-group pull-right m-t-15">
                        <!-- <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings
                            <span class="m-l-5">
                                <i class="fa fa-cog"></i>
                            </span>
                        </button> -->
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>

                    </div>

                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-box">
                                <div class=" tilebox-one">
                                    <i class="icon-layers float-right text-info"></i>
                                    <h6 class="text-muted text-uppercase m-b-20 text-info">Estimated Portfolio Value</h6>
                                    <div>
                                        <h2 class="m-b-20 d-inline" data-plugin="counterup">0.000</h2>
                                        <h2 class="m-b-20 d-inline">$</h2>
                                    </div>
                                    <span class="text-muted p-t-20 d-inline">0.000000000 BTC</span>
                                    </div>
                                    <?php foreach ($data as $key => $value) { ?>
                                    <div class="tilebox-one border-top  mt-3 pt-3">
                                        <img src="<?php  echo $value['image']?>" witdth="60" height="60" style="margin-right: -19px;margin-top: -2%" class=" float-right">
                                    <h6 class="text-muted text-uppercase m-b-20 text-warning"><?php echo $value['fullname'];?></h6>
                                        <a href="<?php echo base_url();?>wallet/viewWallet/<?php echo  base64_encode($value['curr']);?>" class="btn btn-info waves-effect waves-light w-sm d-inline btn-sm mb-2">Wallet</a>
                                        <div>
                                            <h4 class="m-b-20 d-inline" data-plugin="counterup"><?php echo $value['balance'];?></h2>
                                                <h5 class="m-b-20 d-inline "><?php echo $value['curr'];?></h2>
                                      </div>
                                    </div>
                                   <?php } ?>
                                    
                                    <!-- <div class="tilebox-one border-top mt-3 pt-3">
                                        <img src="./assets/images/pincode.png" witdth="60" height="60" style="margin-right: -9px;width: 11%;height: 2%;" class=" float-right">
                                        <h6 class="text-muted text-uppercase m-b-20 text-success">Pin</h6>
                                        <button type="button" class="btn btn-info waves-effect waves-light w-sm d-inline btn-sm  mb-2">View</button>
                                        <div>
                                            <h4 class="m-b-20 d-inline" data-plugin="counterup">0.00000000</h2>
                                                <h5 class="m-b-20 d-inline">BTC</h2>
                                        </div>
                                    </div>
                                    <div class="tilebox-one border-top mt-3 pt-3">
                                        <img src="./assets/images/ehterium.png" witdth="60" height="60" style="margin-right: -19px;margin-top: -2%" class=" float-right">
                                        <h6 class="text-muted text-uppercase m-b-20 text-pink">Etherium</h6>
                                        <button type="button" class="btn btn-info waves-effect waves-light w-sm d-inline btn-sm  mb-2">View</button>
                                        <div>
                                            <h4 class="m-b-20 d-inline" data-plugin="counterup">0.00000000</h2>
                                                <h5 class="m-b-20 d-inline">ETH</h5>
                                        </div>
                                    </div> -->
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <!-- data table for properties -->
                    <div class="row">
                        <!-- data table1 for properties -->
                        <div class="col-12">
                            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title">Invested Property by Name</h4>
                                <p class="text-muted font-14 m-b-30">

                                </p>

                                <table id="datatable" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- data table2 for properties -->
                       <!--  <div class="col-12">
                            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title">My Property</h4>
                                <p class="text-muted font-14 m-b-30">

                                </p>

                                <table id="responsive-datatable" class="table table-bordered dt-responsive">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div> -->
                    </div>
                    <!-- end row -->
                   
                    <div class="row">
                        <!-- data table3 for properties -->
                        <div class="col-12">

                            <div class="card-box table-responsive">
                                 <h4 class="page-title">Last Transaction</h4>
                                <table id="key-table" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Time</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>02/10/1970 01:17:34</td>
                                            <td>Assests Issue</td>
                                            <td>Amount</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>



        </div>
        <!-- container -->


        <!-- Footer -->
        <footer class="footer">
            2016 - 2018 © Uplon.
        </footer>
        <!-- End Footer -->



        <!-- Right Sidebar -->
        <div class="side-bar right-bar">
            <div class="nicescroll">
                <ul class="nav nav-pills nav-justified text-xs-center">
                    <li class="nav-item">
                        <a href="#home-2" class="nav-link active" data-toggle="tab" aria-expanded="false">
                            Activity
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                            Settings
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade active show" id="home-2">
                        <div class="timeline-2">
                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">5 minutes ago</small>
                                    <p>
                                        <strong>
                                            <a href="#" class="text-info">John Doe</a>
                                        </strong> Uploaded a photo
                                        <strong>"DSC000586.jpg"</strong>
                                    </p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">30 minutes ago</small>
                                    <p>
                                        <a href="" class="text-info">Lorem</a> commented your post.</p>
                                    <p>
                                        <em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus
                                            ut tincidunt euismod. "</em>
                                    </p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">59 minutes ago</small>
                                    <p>
                                        <a href="" class="text-info">Jessi</a> attended a meeting with
                                        <a href="#" class="text-success">John Doe</a>.</p>
                                    <p>
                                        <em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus
                                            ut tincidunt euismod. "</em>
                                    </p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">1 hour ago</small>
                                    <p>
                                        <strong>
                                            <a href="#" class="text-info">John Doe</a>
                                        </strong>Uploaded 2 new photos</p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">3 hours ago</small>
                                    <p>
                                        <a href="" class="text-info">Lorem</a> commented your post.</p>
                                    <p>
                                        <em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus
                                            ut tincidunt euismod. "</em>
                                    </p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">5 hours ago</small>
                                    <p>
                                        <a href="" class="text-info">Jessi</a> attended a meeting with
                                        <a href="#" class="text-success">John Doe</a>.</p>
                                    <p>
                                        <em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus
                                            ut tincidunt euismod. "</em>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="messages-2">

                        <div class="row m-t-10">
                            <div class="col-8">
                                <h5 class="m-0">Notifications</h5>
                                <p class="text-muted m-b-0">
                                    <small>Do you need them?</small>
                                </p>
                            </div>
                            <div class="col-4 text-right">
                                <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small" />
                            </div>
                        </div>

                        <div class="row m-t-10">
                            <div class="col-8">
                                <h5 class="m-0">API Access</h5>
                                <p class="m-b-0 text-muted">
                                    <small>Enable/Disable access</small>
                                </p>
                            </div>
                            <div class="col-4 text-right">
                                <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small" />
                            </div>
                        </div>

                        <div class="row m-t-10">
                            <div class="col-8">
                                <h5 class="m-0">Auto Updates</h5>
                                <p class="m-b-0 text-muted">
                                    <small>Keep up to date</small>
                                </p>
                            </div>
                            <div class="col-4 text-right">
                                <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small" />
                            </div>
                        </div>

                        <div class="row m-t-10">
                            <div class="col-8">
                                <h5 class="m-0">Online Status</h5>
                                <p class="m-b-0 text-muted">
                                    <small>Show your status to all</small>
                                </p>
                            </div>
                            <div class="col-4 text-right">
                                <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end nicescroll -->
        </div>
        <!-- /Right-bar -->



    </div>
    <!-- End wrapper -->






    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!-- Tether for Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/plugins/switchery/switchery.min.js"></script>

    <!-- Required datatable js -->
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

    <!-- Key Tables -->
    <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>

    <!-- Responsive examples -->
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Selection table -->
    <script src="assets/plugins/datatables/dataTables.select.min.js"></script>

    <!-- Counter Up  -->
    <script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>


    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            // Default Datatable
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf']
            });

            // Key Tables

            $('#key-table').DataTable({
                keys: true
            });

            // Responsive Datatable
            $('#responsive-datatable').DataTable();

            // Multi Selection Datatable
            $('#selection-datatable').DataTable({
                select: {
                    style: 'multi'
                }
            });

            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        });
    </script>

</body>

</html>