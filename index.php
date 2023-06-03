<?php require_once 'inc/functions.php' ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<!-- Button trigger dal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModallog" aria-expanded="false" aria-controls="#exampleModallog">
  Вход
</button>

<!-- Button registr -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalreg" aria-expanded="false" aria-controls="#exampleModalreg">
  Регистрация
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModalreg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal reg</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

	<div id="wrapper">
			<!-- BEGIN MAIN PAGE CONTENT -->
			
			<div class="login-container">
				<h2>
					<a href="index.html"></a><!-- can use your logo-->
				</h2>
				<!-- BEGIN LOGIN BOX -->
				<div id="login-box" class="login-box visible">					
					<p class="bigger-110">
						<i class="fa fa-key"></i> Please Enter Your Information
					</p>
					
					<div class="hr hr-8 hr-double dotted"></div>
					
					<form method="post" action="index.html">
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-key text-gray"></span>
								<input type="text" class="form-control" placeholder="Username">
                
							</div>
						</div>
						<div class="form-group">
							<div class="input-icon right" id="password1">
								<span class="fa fa-lock text-gray"></span>
								<input type="password" class="form-control" placeholder="your password">
							</div>
						</div>
						<div class="tcb">
							<label>
								<input type="checkbox" class="tc">
								<span class="labels" id="labels"> Remember me</span>
							</label>
							<a id="btn-login" href="#" class="pull-right btn btn-primary btn-login">Login<i class="fa fa-key icon-on-right"></i></a>
							<div class="clearfix"></div>
						</div>				
						
						<div class="social-or-login">
							<span class="text-primary">Or Login Using</span>
						</div>
							
						<div class="space-4"></div>
						
						<div class="text-center">
							<a href="#" class="btn btn-twitter btn-sm btn-circle"><i class="fa fa-twitter icon-only bigger-130"></i></a>
							<a href="#" class="btn btn-googleplus btn-sm btn-circle"> <img src="assets/ico/Google.png" alt=""><i class="fa fa-google-plus icon-only bigger-130"></i></a>
							<a href="#" class="btn btn-facebook btn-sm btn-circle"><i class="fa fa-facebook icon-only bigger-130"></i></a>
						</div>

						<div class="footer-wrap">
							<span class="pull-left">
								<a href="#" onclick="show_box('forgot-box'); return false;"><i class="fa fa-angle-double-left"></i> Forgot password?</a>
							</span>
							
							<span class="pull-right">
								<a href="#" onclick="show_box('registration-box'); return false;">Register here <i class="fa fa-angle-double-right"></i></a>
							</span>
							
							<div class="clearfix"></div>
						</div>							
					</form>
				</div>
				<!-- END LOGIN BOX -->
				
				
			
			<!-- Modal For Terms and Conditions -->
			<div class="modal fade" id="Myterms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
						</div>
						<div class="modal-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-success" data-dismiss="modal">I Agree</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->


			<!-- END MAIN PAGE CONTENT --> 
	</div> 



<!-- Modal -->
<div class="modal fade" id="exampleModallog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal log</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

	<div id="wrapper">
			<!-- BEGIN MAIN PAGE CONTENT -->
			
			<div class="login-container">
				<h2>
					<a href="index.html"></a><!-- can use your logo-->
				</h2>
				<!-- BEGIN LOGIN BOX -->
				<div id="login-box" class="login-box visible">					
					<p class="bigger-110">
						<i class="fa fa-key"></i> Please Enter Your Information
					</p>
					
					<div class="hr hr-8 hr-double dotted"></div>
					
					<form method="post" action="index.html">
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-key text-gray"></span>
								<input type="text" class="form-control" placeholder="Username">
                
							</div>
						</div>
						<div class="form-group">
							<div class="input-icon right" id="password1">
								<span class="fa fa-lock text-gray"></span>
								<input type="password" class="form-control" placeholder="your password">
							</div>
						</div>
						<div class="tcb">
							<label>
								<input type="checkbox" class="tc">
								<span class="labels" id="labels"> Remember me</span>
							</label>
							<a id="btn-login" href="#" class="pull-right btn btn-primary btn-login">Login<i class="fa fa-key icon-on-right"></i></a>
							<div class="clearfix"></div>
						</div>				
						
						<div class="social-or-login">
							<span class="text-primary">Or Login Using</span>
						</div>
							
						<div class="space-4"></div>
						
						<div class="text-center">
							<a href="#" class="btn btn-twitter btn-sm btn-circle"><i class="fa fa-twitter icon-only bigger-130"></i></a>
							<a href="#" class="btn btn-googleplus btn-sm btn-circle"> <img src="assets/ico/Google.png" alt=""><i class="fa fa-google-plus icon-only bigger-130"></i></a>
							<a href="#" class="btn btn-facebook btn-sm btn-circle"><i class="fa fa-facebook icon-only bigger-130"></i></a>
						</div>

						<div class="footer-wrap">
							<span class="pull-left">
								<a href="#" onclick="show_box('forgot-box'); return false;"><i class="fa fa-angle-double-left"></i> Forgot password?</a>
							</span>
							
							<span class="pull-right">
								<a href="#" onclick="show_box('registration-box'); return false;">Register here <i class="fa fa-angle-double-right"></i></a>
							</span>
							
							<div class="clearfix"></div>
						</div>							
					</form>
				</div>
				<!-- END LOGIN BOX -->
				
				
			
			<!-- Modal For Terms and Conditions -->
			<div class="modal fade" id="Myterms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
						</div>
						<div class="modal-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-success" data-dismiss="modal">I Agree</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->


			<!-- END MAIN PAGE CONTENT --> 
	</div> 
	 
    <!-- core JavaScript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/plugins/pace/pace.min.js"></script>
	
	<!-- PAGE LEVEL PLUGINS JS -->
	
    <!-- Themes Core Scripts -->	
	<script src="assets/js/main.js"></script>

	<!-- REQUIRE FOR SPEECH COMMANDS -->
	<script src="assets/js/speech-commands.js"></script>
	<script src="assets/js/plugins/gritter/jquery.gritter.min.js"></script>	
	
	<!-- initial page level scripts for examples -->	
	<script type="text/javascript">
		function show_box(id) {
			jQuery('.login-box.visible').removeClass('visible');
			jQuery('#'+id).addClass('visible');
		}
	</script>
  </body>
</html>
      </div>
    </div>
  </div>
</div>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>