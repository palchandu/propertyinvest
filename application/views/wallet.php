<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include("header.php");
?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="wrapper">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h4 class="m-t-20 m-b-20">Wallet</h4>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="card m-b-20">
                                <h6 class="card-header  text-white text-capitalize" style="background:#A1DDEE">Withdraw  Currency</h6>
                                <div class="card-body">
                                    <div class=" tilebox-three">
                                        <div class="h1 float-left text-white rounded-circle bg-icon bg-info">
                                            <i class="fa fa-arrow-down text-white"></i>
                                        </div>
                                        <div class="text-right">
                                            <h5 class=" text-capitalize m-b-15 m-t-10">Make your first deposit</h5>
                                            <p class="text-muted">Make your deposit to start trading and fully use CoinFalcon</p>
                                            <button type="button" class="btn btn-info waves-effect waves-light w-lg"><a href="<?php echo base_url();?>deposit">Deposit</a></button>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card-box tilebox-two mt-3">
                                            <i class="fa fa-btc float-right text-muted"></i>
                                            <h6 class="text-primary text-uppercase m-b-15 m-t-10">BTC Withdraw Address</h6>
                                            <p class="m-b-10">Paste your withdraw address here..</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="card-box m-b-20 tilebox-two bg-white ">
                                            <h6 class="d-inline">Amount</h6>
                                            <p class="d-inline float-right text-info">0.0000000</p>
                                        </div>
                                    </div>
                                     <div class="col-xs-12">
                                        <div class="card-box m-b-20 tilebox-two bg-white border border-danger" style="border-style:dashed!important">
                                            <h6 class="d-inline">Fee</h6>
                                            <p class="d-inline float-right text-info">0.006 BTC</p>
                                        </div>
                                    </div>
                                </div>
                            <a href="#" class="btn btn-info btn-lg btn-block">Widthdraw</a></div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="card m-b-20">
                                <h6 class="card-header  text-white text-capitalize" style="background:#A1DDEE">Information</h6>
                                <div class="card-body">
                                    <div class=" tilebox-three">
                                        <div class="h1 float-left text-white rounded-circle bg-icon" style="background:#A1DDEE">
                                            <i class="fa fa-btc  text-white"></i>
                                        </div>
                                        <div class="text-right">
                                            <h5 class=" text-capitalize m-b-15 m-t-10">Make your first deposit</h5>
                                            <p class="text-muted">Make your deposit to start trading and fully use CoinFalcon</p>
                                            <button type="button" class="btn btn-info waves-effect waves-light w-lg"><a href="<?php echo base_url();?>deposit">Deposit</a></button>
                                        </div>
                                    </div>
                                </div>
                                <ul class="pb-0 border-top">
                                    <li class="text-secondary pt-4 pr-2"> Do not widthdraw directly to a crowdfund or ICO. We will not credit your account with tokens from that sale.</li>
                                    <li class="list-group-item h6 border-0 mt-2"><i class="fa fa-question-circle-o pr-2"></i>FAQ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->


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

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

</body>

</html>