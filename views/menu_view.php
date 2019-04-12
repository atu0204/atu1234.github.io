<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url();?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url();?>1.css">
</head>
<body>
           
	     <nav class="navbar navbar-light bg-faded">
	          <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
	            &#9776;
	          </button>
	          <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
	            <a class="navbar-brand" href="#">Responsive navbar</a>
	            <ul class="nav navbar-nav">
	              <li class="nav-item active">
	                <a class="nav-link" href="<?= base_url() ?>/json">Xem dữ liệu <span class="sr-only">(current)</span></a>
	              </li>
	              <li class="nav-item">
	                <a class="nav-link" href="<?= base_url() ?>/jsonedit">Sửa dữ liệu</a>
	              </li>
	             
	            </ul>
	          </div>
	    </nav>
	
</body>
</html>