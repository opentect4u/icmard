<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
	
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">	
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/font-awesome.css">
	
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/apps.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/apps_inner.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/res.css">
	
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
	
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
<!--font-family: 'Roboto', sans-serif;-->
	
<link href="https://fonts.googleapis.com/css2?family=Gorditas:wght@400;700&display=swap" rel="stylesheet"> 
<!--font-family: 'Gorditas', cursive;-->
	

	
</head>

<body>
<nav class="navBar fixed-top">
	<div class="float-left logo"><img src="<?//=base_url()?>assets/images/logo.png" alt=""/>ICMARD</div>
	<div class="float-left navRightSec">
<!--
	<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fa fa-bars"></span>
		

      </button>
-->
		
<!--
	<ul class="navbar-nav navbar-nav-right">
        <li class="nav-item msgNav">
          <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </a>
          
        </li>
        <li class="nav-item notifiNav">
          <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="fa fa-bell" aria-hidden="true"></i>
          </a>
          
        </li>
        <li class="nav-item nav-profile dropdown mr-0 mr-sm-2">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown" aria-expanded="false">
            <img src="images/40x40.png" alt="profile">
            <span class="nav-profile-name">Don Richards</span>
          </a>
          
        </li>
      </ul>
-->
		
	</div>
</nav>
	
<div class="page-body-wrapper">
	<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">
              <i class="fa fa-tachometer" aria-hidden="true"></i>
              <span class="menu-title">Dashboard</span>
				<i class="fa fa-chevron-right arowRight" aria-hidden="true"></i>
            </a>
          </li>
			
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>index.php/adm">
              <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
              <span class="menu-title">Item</span>
				<i class="fa fa-chevron-right arowRight" aria-hidden="true"></i>
            </a>
          </li>
			<li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>index.php/adm/cust_list">
              <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
              <span class="menu-title">Customer</span>
				<i class="fa fa-chevron-right arowRight" aria-hidden="true"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.html">
              <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
              <span class="menu-title">Category</span>
              <i class="fa fa-chevron-right arowRight" aria-hidden="true"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sub_category.html">
              <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
              <span class="menu-title">Sub-Category</span>
              <i class="fa fa-chevron-right arowRight" aria-hidden="true"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="all_books.html">
              <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
              <span class="menu-title">All Books</span>
              <i class="fa fa-chevron-right arowRight" aria-hidden="true"></i>
            </a>
			</li>
			<li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>index.php/auth/logout">
              <i class="fa fa-sign-out" aria-hidden="true"></i>
              <span class="menu-title">Log out</span>
              <i class="fa fa-chevron-right arowRight" aria-hidden="true"></i>
            </a>
			</li>
        </ul>
      </nav>