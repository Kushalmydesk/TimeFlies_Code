<?php
   require 'includes/dbh.inc.php';
   require 'includes/functions.inc.php';
   if(isset( $_SESSION['Admin_Login']) && $_SESSION['Admin_Login']!=''){
      
   }
   else{
      header("Location:admin_login.php");
      die();
   }


?>

<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Admin Panel</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <li class="menu-item-has-children dropdown">
                     <a href="admin_panel.php" > Manage Categories</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="product.php" >Manage Products</a>
                  </li>
				      <li class="menu-item-has-children dropdown">
                     <a href="orders.php" >Manage Orders</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="users.php" >Manage Users</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="contact_us.php">Manage Contact Us</a>
                  </li>
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="admin_panel.php">
                     <img src="images/Head Icon.jpg" width="40px" height="40px"alt="Logo">
                  </a>
                  <a class="navbar-brand hidden" href="index.html"><
                     <img src="images/logo2.png" alt="Logo">
                  </a>
                  <a id="menuToggle" class="menutoggle">
                     <i class="fa fa-bars"></i>
                  </a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome Admin</a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="admin_logout.php"><i class="fa fa-power-off"></i>Logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>