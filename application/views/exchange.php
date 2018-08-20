<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include("header.php");

?>

 <div class="wrapper">
        <div class="container">

            <!-- Page-Title -->

            <h4 class="page-title">Navs</h4>

            <!-- end row -->


            <div class="row">
                <div class="col-6">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-md-12 col-xs-12 m-t-sm-40 m-t-20">
                                <ul class="nav nav-pills m-b-10 border-bottom" id="myTabalt" role="tablist">
                                    <li class="nav-item btn btn-block w-50">
                                        <a class="nav-link active show" id="buy-tab1" data-toggle="tab" href="#buy1" role="tab" aria-controls="buy" aria-expanded="true"
                                            aria-selected="true">BUY</a>
                                    </li>
                                    <li class="nav-item btn btn-block w-50">
                                        <a class="nav-link" id="sell-tab1" data-toggle="tab" href="#sell1" role="tab" aria-controls="sell" aria-selected="false">SELL</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabaltContent">
                                    <div role="tabpanel" class="tab-pane fade in active show pr-4" id="buy1" aria-labelledb="buy-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>
                                                    <i class="fab fa-btc  pr-2 text-muted"></i>Bitcoins</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-right">
                                                    <p class="d-inline-block">0.000000
                                                        <input type="text" class="form-control ml-2 d-inline-block w-50 text-center " placeholder="0">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>
                                                    <img src="./assets/images/pincode.png" witdth="60" height="60" style="margin-right: 10px;width: 8%;height: 2%;">Pin</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-right">
                                                    <p class="d-inline-block">0.000000
                                                        <input type="text" class="form-control ml-2 d-inline-block w-50 text-center " placeholder="0">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>
                                                    <i class="fab fa-ethereum  pr-2 text-muted"></i>Ethereum</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-right">
                                                    <p class="d-inline-block">0.000000
                                                        <input type="text" class="form-control ml-2 d-inline-block w-50 text-center " placeholder="0">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sell1" role="tabpanel" aria-labell="sell-tab">
                                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                            squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                            anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress,
                                            commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR.
                                            Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar
                                            helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny
                                            pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical
                                            culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher
                                            vero sint qui sapiente accusamus tattooed echo park.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="card m-4">
                            <div class="card-body p-2">
                                <div class=" tilebox-three">
                                    <div class="h3 float-left text-white pt-2  mb-0 pl-4 pr-4">
                                        <i class="fab fa-btc  text-warning h1 mb-0"></i>
                                    </div>
                                    <div class="text-left position-relative">
                                        <h6>BUYING</h6>
                                        <p class="text-dark p-0 mb-0">Bitcoin</p>
                                        <small class=" text-capitalize mt-5 text-muted">Balance 0 btc</small>
                                        <div class="text-right position-absolute" style="top: 6px;right: 6px;">
                                            <input type="text" class="form-control ml-2 d-inline-block w-75 text-center mt-2" placeholder="0">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-4">
                            <div class="card-body p-2">
                                <div class=" tilebox-three">
                                    <div class="h3 float-left text-white pt-2  mb-0 pl-4 pr-4">
                                        <i class="fab fa-ethereum  text-info h1 mb-0"></i>
                                    </div>
                                    <div class="text-left position-relative">
                                        <h6>PAYING</h6>
                                        <p class="text-dark p-0 mb-0">with</p>
                                            <form>
                                                <fieldset>
                                                    <select class="custom-select mb-3 w-auto d-inline">
                                                        <option selected="">Ethereum</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </fieldset>
                                            </form>
                                        <small class=" text-capitalize mt-5 pl-5 text-muted">Balance 0.0000000 ETH</small>
                                        <div class="text-right position-absolute" style="top: 6px;right: 6px;">
                                            <input type="text" class="form-control ml-2 d-inline-block w-75 text-center mt-2" placeholder="0">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6">
                        <div class="card m-b-20 card-body text-center">
                            <i class="fab fa-btc h1  pr-2 text-warning"></i>
                            <p class="card-text text-muted">You are buying</p>
                            <h4 class="card-title">0.000000004 BTC</h4>
                            <p class="card-text text-muted">And will pay 0.00 ETH</p>
                            <br>
                            <p class="card-text text-muted">At <span class="font-weight-bold text-dark">0.4611420</span> per 1 BTC</p>
                            <br>
                            <hr class="ml-4 mr-4" style="border: 2px dashed #ccc;border-style: dashed;">
                           <div class="card-body">
                                    <div class="col-xs-12">
                                        <div class="card-box m-b-20 tilebox-two bg-white float-left w-100">
                                            <h6 class="d-inline text-left float-left mb-0">Amount</h6>
                                            <p class="d-inline float-right text-dark mb-0">0.0000000</p>
                                        </div>
                                    </div>
                                     <div class="col-xs-12">
                                        <div class="card-box m-b-20 tilebox-two bg-white  float-left w-100">
                                            <h6 class="d-inline float-left mb-0">Fee</h6>
                                            <p class="d-inline float-right text-dark mb-0">0.006 BTC</p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <a href="#" class="btn btn-info btn-block">Buy Pin</a>
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