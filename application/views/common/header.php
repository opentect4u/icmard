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
<!--<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>-->
	
<!--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
<!--font-family: 'Roboto', sans-serif;-->
	
<link href="https://fonts.googleapis.com/css2?family=Gorditas:wght@400;700&display=swap" rel="stylesheet"> 
<!--font-family: 'Gorditas', cursive;-->
	

	
</head>

<body>
<nav class="navBar fixed-top">
	<div class="float-left logo"><img src="<?=base_url()?>assets/images/logo.png" alt="" height="40" width="50" /></div>
	<div class="float-left navRightSec">
		
		<ul class="topDate">
 <!-- <li>Branch Name: Head Office</li> <li>KMS Year: 2020-21</li> <li>User: synergic</li> <li>Module: Paddy Procurement</li>  -->
</ul>
		
<!--
		<ul class="topDateRoght">
 <li>User: synergic</li> <li>Module: Paddy Procurement</li>
</ul>
-->
		
		<ul class="nav topDateRight">
			<li class="nav-item dropdown">
                    <a href="#" class="nav-link"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
                    
                </li>
			<!-- <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Main Menu 1</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Dropdown Menu 1</a>
                        <a href="#" class="dropdown-item">Dropdown Menu 2</a>
						<a href="#" class="dropdown-item">Dropdown Menu 3</a>
						<a href="#" class="dropdown-item">Dropdown Menu 4</a>

                    </div>
                </li> -->
 
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link"><i class="fa fa-bell" aria-hidden="true"></i> Notification</a>
                    
                </li>
            </ul>
		
</div>

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
		
		<ul id="accordion" class="accordion">
		
		<li>
		<div class="link"><a href="<?=base_url()?>index.php/auth/dashboard"><i class="fa fa-tachometer"></i>Dashboard</a></div>
	  </li>
	  
	  <li>
		<div class="link"><i class="fa fa-mobile"></i>Master<i class="fa fa-chevron-down"></i></div>
		<ul class="submenu">
    <li><a href="<?=base_url()?>index.php/adm/itemcatg_list">Item Category</a></li>
		  <li><a href="<?=base_url()?>index.php/adm">Item</a></li>
      <li><a href="<?=base_url()?>index.php/adm/stkitem_list">Stock Item</a></li>
		  <li><a href="<?=base_url()?>index.php/adm/cust_list">Stakeholders</a></li>
      <!-- <li><a href="<?=base_url()?>index.php/adm/tenant_list">Tenant</a></li> -->
		</ul>
     </li>
			<li>
      <div class="link"><i class="fa fa-mobile"></i>Operations<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
		  
      <li><a href="<?=base_url()?>index.php/adm/tenant_list">Tenant</a></li>
      <li><a href="<?=base_url()?>index.php/adm/amc_list">AMC</a></li>
      <li><a href="<?=base_url()?>index.php/adm/lic_list">Licence</a></li>
      <li><a href="<?=base_url()?>index.php/adm/insu_list">Insurance</a></li>
		</ul>
      </li>
  
      </li>
      <li>
      <div class="link"><i class="fa fa-mobile"></i>Reports<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
		  
      <li><a href="<?=base_url()?>index.php/report/stk_stmt">Tenant Details</a></li>
      <li><a href="<?=base_url()?>index.php/report/amc_stmt">AMC Details</a></li>
		</ul>
      </li>
      
		<li>
    
	<div class="link"><a href="<?=base_url()?>index.php/auth/logout"><i class="fa fa-sign-out"></i>Log out</a></div>
	</li> 	
			
  
		<!--  <li>
			<div class="link"><i class="fa fa-globe"></i>Dropdown 2<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
			  <li><a href="#">Menu 1</a></li>
			  <li><a href="#">Menu 2</a></li>
			  <li><a href="#">Menu 3</a></li>
			</ul>
		  </li>   -->
</ul>
		
        <!--<ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">
              <i class="fa fa-tachometer" aria-hidden="true"></i>
              <span class="menu-title">Dashboard</span>
				<i class="fa fa-chevron-right arowRight" aria-hidden="true"></i>

            </a>
          </li>
			
          <li class="nav-item">
            <a class="nav-link" href="publisher_management.html">
              <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
              <span class="menu-title">Publisher Management</span>
				<i class="fa fa-chevron-right arowRight" aria-hidden="true"></i>
            </a>
          </li>
			<li class="nav-item">
            <a class="nav-link" href="user_management.html">
              <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
              <span class="menu-title">User Management</span>
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
            <a class="nav-link" href="#">
              <i class="fa fa-sign-out" aria-hidden="true"></i>
              <span class="menu-title">Log out</span>
              <i class="fa fa-chevron-right arowRight" aria-hidden="true"></i>
            </a>
			</li>
        </ul>-->
		
		
      </nav>