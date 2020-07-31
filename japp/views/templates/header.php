<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <base href="<?php echo base_url(); ?>" />

  <title><?php echo $title; ?></title>

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css">
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <!--==========================
  Header
  ============================-->
      <header id="header">
        <div class="container">

          <div class="row">
            <div class="col-md-2 logo">
              <img src="<?php echo base_url(); ?>assets/gallery/gcgLogo.png" alt="" title="" /></img>
            </div>
            <div class="col-md-8">
              <h1 class="left">Academic Vision</h1>
              <h4 class="left">(A Refereed Journal of Humanities and Social Sciences)</h4>
              <h3 class="left scroll-hide">Bi-Annual e-Journal Published by P G College, Sec 99, Chandigarh</h3>
            </div>
            <div class="col-md-2 right">
              <!--<h4>UGC Approval Pending</h4>-->
            </div>
          </div>



        </div>



      </header><!-- #header -->

      <div id="main" class="container">
        <div class="row">
          <div class="col-md-3 nav-menu-section">
            <?php
            if (!isset($page)) $page = 'home';
            ?>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li <?php if ($page == 'home') echo 'class="menu-active"'; ?>><a href="<?php echo base_url(); ?>">Home</a></li>
                <li <?php if ($page == 'journals') echo 'class="menu-active"'; ?>><a href="<?php echo base_url(); ?>pages/view/journals">Journals</a></li>
                <li <?php if ($page == 'articles') echo 'class="menu-active"'; ?>><a href="<?php echo base_url(); ?>articles">Submit Article</a></li>
                <li <?php if ($page == 'editorialboard') echo 'class="menu-active"'; ?>><a href="<?php echo base_url(); ?>pages/view/editorialboard">Editorial Board</a></li>
                <li <?php if ($page == 'e-policy') echo 'class="menu-active"'; ?>><a href="<?php echo base_url(); ?>pages/view/e-policy">Ethical Policy</a></li>
                <li <?php if ($page == 'p-policy') echo 'class="menu-active"'; ?>><a href="<?php echo base_url(); ?>pages/view/p-policy">Publication Policy</a></li>
                <li <?php if ($page == 'guidelines') echo 'class="menu-active"'; ?>><a href="<?php echo base_url(); ?>pages/view/guidelines">Guidelines for Authors</a></li>
                <li <?php if ($page == 'disclaimer') echo 'class="menu-active"'; ?>><a href="<?php echo base_url(); ?>pages/view/disclaimer">Disclaimer</a></li>
                <li <?php if ($page == 'contact') echo 'class="menu-active"'; ?>><a href="<?php echo base_url(); ?>pages/view/contact">Contact Us</a></li>
              </ul>
            </nav><!-- #nav-menu-container -->

          </div>
          <div class="col-md-9 two-col-right">