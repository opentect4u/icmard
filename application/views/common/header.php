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
	<div class="float-left logo"><img src="<?=base_url()?>assets/images/logo1.png" alt="" height="50" width="50"/></div>
	<div class="float-left navRightSec">
		
		<ul class="topDate">
  <!-- <li>Branch Name: Head Office</li> <li>KMS Year: 2020-21</li> <li>User: synergic</li> <li>Module: Paddy Procurement</li> -->
</ul>
<!--
	<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fa fa-bars"></span>
		

      </button>
-->
		
	</div>
</nav>
	
<div class="page-body-wrapper">
	<nav class="sidebar sidebar-offcanvas" id="sidebar">
		
		<ul id="accordion" class="accordion">
	  <li>
		<div class="link"><a href="<?=base_url()?>index.php/auth/dashboard"><i class="fa fa-tachometer"></i>Dashboard</a></div>
	  </li>
	  <li>
		<div class="link"><i class="fa fa-mobile"></i>Master<i class="fa fa-chevron-down"></i></div>
		<ul class="submenu">
		  <li><a href="<?=base_url()?>index.php/adm">Item</a></li>
		  <li><a href="<?=base_url()?>index.php/adm/cust_list">Customer</a></li>
		 
		</ul>
     </li>
    <!-- <li>
    <div class="link"><a href="publisher_management.html"><i class="fa fa-code"></i>Publisher Management </a></div>
    </li>
	
	<li>
	<div class="link"><a href="user_management.html"><i class="fa fa-code"></i>User Management </a></div>
	</li>

	<li>
	<div class="link"><a href="category.html"><i class="fa fa-code"></i>Category</a></div>
	</li>

	<li>
	<div class="link"><a href="sub_category.html"><i class="fa fa-code"></i>Sub-Category </a></div>
	</li>
			
	<li>
	<div class="link"><a href="all_books.html"><i class="fa fa-code"></i>All Books </a></div>
	</li>  -->

	<li>
	<div class="link"><a href="<?=base_url()?>index.php/auth/logout"><i class="fa fa-sign-out"></i>Log out</a></div>
	</li> 
			
			
			
  
     <!--   <li>
			<div class="link"><i class="fa fa-globe"></i>Dropdown 2<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
			  <li><a href="#">Menu 1</a></li>
			  <li><a href="#">Menu 2</a></li>
			  <li><a href="#">Menu 3</a></li>
			</ul>
		  </li>  -->
		</ul>
		
  
		
		
      </nav>