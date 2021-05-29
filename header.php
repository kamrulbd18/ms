<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Grocery Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="">    

     <link rel="icon" href="favicon.png" type="image/png" sizes="16x16"> 
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/zoomit.css">
    <link href="main.css" rel="stylesheet">   
    <link rel="stylesheet" href="assets/css/cart.css"> 
    <!-- flexslider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/flexslider.css" >
</head>
<body>
 

    <!-- End Shopping Bag --> 
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow bg-success header-text-dark">
            <div class="app-header__logo">
                <div class="logo-src">
                    <a href="index.php"><img src="assets/images/logo.png" width="160px" height="31px"></a>
                </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>                    
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <a href="index.php"><img class="ml-4" src="assets/images/logo.png" width="160px" height="31px"></a>
            </div>                    
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="how-to-order.php" class="nav-link">
                                <i class="nav-link-icon fa fa-plug"> </i>
                                How to order
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="faq.php" class="nav-link">
                                <i class="nav-link-icon fa fa-question-circle"></i>
                                FAQ
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="contact.php" class="nav-link">
                                <i class="nav-link-icon fa fa-envelope-open"></i>
                                Contact us
                            </a>
                        </li>
                    </ul>        
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div role="group" class="btn-group-sm btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-primary active text-white">
                                            <input type="radio" name="options" id="option1" autocomplete="off" checked="">
                                            EN
                                        </label>
                                        <label class="btn btn-primary text-white">
                                            <input type="radio" name="options" id="option2" autocomplete="off">
                                             বাং
                                        </label>
                                    </div>
                                    <button type="button" class="btn btn-sm ml-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">SIGN IN</button>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header" style="padding:10px 1rem">
                <h6 class="modal-title" id="exampleModalTitle">LOGIN</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                  <a href="" class="mb-2 btn bg-arielle-smile btn-lg btn-block font-weight-bold">
                      <img src="assets/images/fb.png" style="display: inline">
                      Sign up or Login with Facebook
                  </a>
                <div class="login-hr"></div>
                <div class="loginMessage text-center">Enter your mobile no</div>
                <form action="" method="post">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">+88</span>
                        </div>
                        <input placeholder="01XXXXXXXXX" type="text" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-lg btn-block">SIGN UP / LOGIN</button>
            </div>
        </div>
    </div>
</div>
        <div class="app-main">
 
            <?php include('sidebar.php'); ?>

