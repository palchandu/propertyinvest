<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/iofrm-theme9.css">
</head>
<body>
    <div class="form-body" class="container-fluid">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>Get more things done with Loggin platform.</h3>
                    <p>Access to the most powerfull tool in the entire design and web industry.</p>
                    <img src="images/graphic5.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="images/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="page-links">
                            <a href="<?php echo base_url();?>login">Login</a><a href="<?php echo base_url();?>register" class="active">Register</a>
                        </div>

                        <?php if($this->session->flashdata('success')){ ?>
                      <div class="alert alert-block alert-success">
                          <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
                          <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                      </div>
                      <?php }else if($this->session->flashdata('error')){  ?>
                          <div class="alert alert-block alert-danger">
                              <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
                              <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                         </div>
                      <?php } ?>
                      <?php if (isset($createaccount)) {echo $createaccount;}  ?>
                        <form method="POST" action="<?php echo base_url().'register/createaccount'?>">
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <input class="form-control" type="text" name="mobile" placeholder="Mobile Number" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>