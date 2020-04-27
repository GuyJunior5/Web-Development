<?php
session_start();
error_reporting(0);
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Painting Genre</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		

		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
    <body class="cnt-home">
	
<header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
<?php include('includes/top-header.php');?>
<!-- ============================================== TOP MENU : END ============================================== -->
<?php include('includes/main-header.php');?>
	<!-- ============================================== NAVBAR ============================================== -->
<?php include('includes/menu-bar.php');?>
<!-- ============================================== NAVBAR : END ============================================== -->

</header>
<!-- ============================================== HEADER : END ============================================== -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row outer-bottom-sm'>
			<div class='col-md-3 sidebar'>
	            
     
<!-- /.side-menu -->
           <div class="sidebar-module-container">
	            	<h3 class="section-title">shop by</h3>
	            	<div class="sidebar-filter">
<!-- ============================================== SIDEBAR CATEGORY ============================================== -->
<div class="sidebar-widget wow fadeInUp outer-bottom-xs ">
	
	<div class="sidebar-widget-body m-t-10">
	
		<div class="accordion">
	    	<div class="accordion-group">
	            <div class="accordion-heading">
	                <?php include('includes/side-menu.php');?>	
	            </div>  
	        </div>
	    </div>
	   
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->

	            	</div><!-- /.sidebar-filter -->
	            </div><!-- /.sidebar-module-container -->
            </div><!-- /.sidebar -->
			<div class='col-md-9'>

	<div id="category" class="category-carousel hidden-xs">
		<div class="item">	
			<div class="image">
				<img src="assets/images/banners/cat-banner-1.jpg" alt="" class="img-responsive">
			</div>
			<div class="container-fluid">
				<div class="caption vertical-top text-left">
					<div class="big-text">
						<br />
					</div>
					
					<div class="excerpt hidden-sm hidden-md">
					<?php
            
			mysqli_select_db($con, $database);
			$query = "SELECT id, genreName FROM genre";
			$result = mysqli_query($con,$query);
			if (!$result) {
			   printf("Error: %s\n", mysqli_error($con));
			   exit();
		   }
		 
			//$row = mysqli_fetch_array($result);
			if ($result->num_rows > 0) {
			   // output data of each row
			   while($row = $result->fetch_assoc()) {
				   if($_GET["genre"] == $row["id"])
				   echo $row["genreName"];
			   }
		   } else {
			   echo "0 results";
		   }
		  
		   ?>
					</div>
			
				</div><!-- /.caption -->
			</div><!-- /.container-fluid -->
		</div>
</div>

				<div class="search-result-container">
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane active " id="grid-container">
							<div class="category-product  inner-top-vs">
								<div class="row">									
					
		
		
			<?php
            
			
			$query = "SELECT * FROM paintings";
			$result1 = mysqli_query($con,$query);
			if (!$result1) {
			   printf("Error: %s\n", mysqli_error($con));
			   exit();
		   }
		 
			//$row = mysqli_fetch_array($result);
			if ($result1->num_rows > 0) {
			   // output data of each row
			   while($row = $result1->fetch_assoc()) {
				   if($_GET["genre"] == $row["genreID"]){
				   echo '<div class="col-sm-6 col-md-4 wow fadeInUp">
				   <div class="products">				
		   <div class="product">		
			   <div class="product-image"><div class="image"><img src="admin\paintingImages\\'.$row["paintingImage"] .'"></div><!-- /.image -->	</div><!-- /.painting-image -->';
		
		  
		   ?>
					                      		   
		
			
		
		
			 
			<?php
			
						echo '<div class="product-info text-left"> <h3 class="name">'.$row["paintingTitle"].'</h3>' ;
				
			      echo'<h3 class="name"> Artist: '.$row["artistName"].'</h3>';
			
           ?>
			
				
				<?php
					echo'<div class="product-price">	<span class="price">$ '.$row["paintingPrice"].'</span>	</div><!-- /.product-price -->
			
					</div><!-- /.product-info -->';
				       
			    ?>							     
									
		
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
												
							<?php
							$_SESSION["pid"] = $row["pid"];
							echo'<li class="add-cart-button btn-group">	<button class="btn btn-primary" type="button" onclick= \'window.location.href ="my-cart.php?genres='.$row["pid"].'"\'>Add to cart</button></li> 	</ul>
							</div><!-- /.action -->
						</div><!-- /.cart -->
						</div>
						</div>
					</div>  ';
							//echo'<button class="btn btn-primary" type="button" ><a href = "my-cart.php">Add to cart</a></button>';
						}
					}
				  } else {
			  echo "0 results";
			 }
							?>						
						              
		               						
						
			
										</div><!-- /.row -->
							</div><!-- /.category-painting -->
						
						</div><!-- /.tab-pane -->
						
				

				

			</div><!-- /.col -->
		</div></div>
		
</div>
</div>
<?php include('includes/footer.php');?>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
		

</body>
</html>