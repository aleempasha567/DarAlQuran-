<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/main.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.js');?>" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</head>

<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h1 class="mr-2">دار القرآن</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li> -->
                <!--ACCESS MENUS FOR ADMIN-->
                <?php if($this->session->userdata('level')==='1'):?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Books
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a href="<?php echo site_url('admin/bookauthor');?>" class="dropdown-item" href="#">Authors</a>
                        <a class="dropdown-item" href="#">Categories</a>
                        <a class="dropdown-item" href="#">Type</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Quran
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a href="<?php echo site_url('admin/quranreciters');?>" class="dropdown-item" href="#">Reciter</a>
                        <a class="dropdown-item" href="<?php echo site_url('admin/quranrecitationtypes');?>">Recitations type</a>
                        <a class="dropdown-item" href="<?php echo site_url('admin/quranriways');?>">Riwaya</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      FATWA
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">The Mufti</a>
                        <a class="dropdown-item" href="#">Categories</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Islamic program
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Program</a>
                        <a class="dropdown-item" href="#">Categories</a>
                        <a class="dropdown-item" href="#">Type</a>
                    </div>
                </li>
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <?php else:?>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                <?php endif;?>
            </ul>
            <span class="navbar-text">
              Welcome Back! <b><?php echo $this->session->userdata('username');?> </b> &nbsp; &nbsp;
            </span>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-primary btn-sm" href="<?php echo site_url('admin/login/logout');?>" role="button">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
