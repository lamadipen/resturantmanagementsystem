<!doctype html>
<html lang="en">
	<!-- Mirrored from themes-pixeden.com/demos/levo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jun 2015 10:19:56 GMT -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-tap-highlight" content="no">
		<meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
		<meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
		<title>
			Materialize - Material Design Admin Template
		</title>
		<!-- Favicons-->
		<link rel="icon" href="<?php echo base_url(); ?>resource/admin_assets/images/favicon/favicon-32x32.png" sizes="32x32">
		<!-- Favicons-->
		<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>resource/admin_assets/images/favicon/apple-touch-icon-152x152.png">
		<!-- For iPhone -->
		<meta name="msapplication-TileColor" content="#00bcd4">
		<meta name="msapplication-TileImage" content="<?php echo base_url(); ?>resource/admin_assets/images/favicon/mstile-144x144.png">
		<!-- For Windows Phone -->
		<!-- CORE CSS-->
		<link href="<?php echo base_url(); ?>resource/admin_assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>resource/admin_assets/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
		<!-- Custome CSS-->
		<link href="<?php echo base_url(); ?>resource/admin_assets/css/custom/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
		<!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
		<link href="<?php echo base_url(); ?>resource/admin_assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>resource/admin_assets/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>resource/admin_assets/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
	</head>
	<body>
		<!-- Here is where top bar (header) section lies -->
		<?php $this->
			load->view($header_template); ?>
			<!-- Here is where top bar (header) section lies -->
			<div class="wrapper">
				<!-- START MAIN -->
				<div id="main">
					<!-- START WRAPPER -->
					<div class="wrapper">
						<!-- Here is where main-nav (leftnav ) section lies -->
						<?php $this->
							load->view($left_nav_template); ?>
							<!-- Here is where main-nav (leftnav ) section lies -->
							<!-- Here is where content section lies -->
							<?php $this->
								load->view($body_template); ?>
								<!-- Here is where content section lies -->
                            <!-- Here is where right nav lies -->
							<?php $this->load->view($right_nav_template); ?>
								<!-- Here is where right nav lies -->
							
					</div>
				</div>
				<!-- END WRAPPER -->
			</div>
			<!-- END MAIN -->
			<!-- Here is where foooter content section lies -->
			<?php $this->
				load->view($footer_template); ?>
				<!-- Here is where foooter content section lies -->
				</div>
				<!-- /wrapper -->
				<!--================================================Scripts================================================-->
				<!-- jQuery Library -->
				<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/plugins/jquery-1.11.2.min.js">
					
					
				</script>
				<!--materialize js-->
				<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/materialize.min.js">
					
					
				</script>
				<!--scrollbar-->
				<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js">
					
					
				</script>
				<!-- chartist -->
				<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/plugins/chartist-js/chartist.min.js">
					
					
				</script>
				<!-- chartjs -->
				<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/plugins/chartjs/chart.min.js">
					
					
				</script>
				<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/plugins/chartjs/chart-script.js">
					
					
				</script>
				<!-- sparkline -->
				<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/plugins/sparkline/jquery.sparkline.min.js">
					
					
				</script>
				<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/plugins/sparkline/sparkline-script.js">
					
					
				</script>
				<!-- google map api -->
				<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek">
					
					
				</script>
				<!--jvectormap-->
				<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js">
					
					
				</script>
				<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js">
					
					
				</script>
				<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/plugins/jvectormap/vectormap-script.js">
					
					
				</script>
				<!--google map-->
				<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/plugins/google-map/google-map-script.js">
					
					
				</script>
				<!--plugins.js - Some Specific JS codes for Plugin Settings-->
				<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/plugins.min.js">
					
					
				</script>
				<!--custom-script.js - Add your own theme custom JS-->
				<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/custom-script.js">
					
					
				</script>
				<!-- Toast Notification -->
				<script type="text/javascript">
					
						
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
        }, 100);
        setTimeout(function() {
            Materialize.toast('<span>You can swipe me too!</span>', 3000);
        }, 150);
        setTimeout(function() {
            Materialize.toast('<span>You have new order.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
        }, 200);
    });
    
					
				</script>
	</body>
	<!-- Mirrored from themes-pixeden.com/demos/levo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jun 2015 10:20:39 GMT -->

</html>