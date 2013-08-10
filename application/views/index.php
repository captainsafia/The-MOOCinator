<!DOCTYPE html>
<html>
<head>
	<title>The MOOCinator</title>
	<?php echo HTML::style('media/css/bootstrap.css'); ?>
	<?php echo HTML::style('media/css/style.css'); ?>
</head>
<body>
<div class="container well">
		<div class="row-fluid">
		<h2>The Moocinator</h2>
			<div class="span12">
				<div class="span6">
					<div class="area">
						<form class="form-horizontal">
							<div class="heading">
								<h4 class="form-heading">Sign In</h4>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputUsername">Username</label>
								<div class="controls">
									<input type="text" id="inputUsername" placeholder="alanturing">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputPassword">Password</label>
								<div class="controls">
									<input type="password" id="inputPassword" placeholder="theenigma">
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<button type="submit" class="btn btn-success">Sign In</button>
								</div>
							</div>	
						</form>	
					</div>                           
				</div>
				<div class="span6">
					<div class="area">
						<form class="form-horizontal">
							<div class="heading">
								<h4 class="form-heading">Sign Up</h4>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputFirst">First Name</label>
								<div class="controls">
									<input type="text" id="inputFirst" placeholder="Alan">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputLast">Last Name</label>
								<div class="controls">
									<input type="text" id="inputLast" placeholder="Turing">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputEmail">Email</label>
								<div class="controls">
									<input type="text" id="inputEmail" placeholder="alan@gmail.com">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputUser">Username</label>
								<div class="controls">
									<input type="text" id="inputUser" placeholder="alanturing">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputPassword">Password</label>
								<div class="controls">
									<input type="password" id="inputPassword" placeholder="theenigma">
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<button type="submit" class="btn btn-success">Sign Up</button>
								</div>
							</div>	
						</form>	
					</div>                            
				</div>
			</div>			
		</div>
	</div>
	<?php echo HTML::script('media/js/jquery.js'); ?>
	<?php echo HTML::script('media/js/script.js'); ?>
</body>
</html>