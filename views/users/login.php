<div class="container-fluid login parallax-window" data-parallax="scroll" data-image-src="moon2cropped.png">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-login" id="blackpanel1">
				<div class="panel-heading" id="blackpanel2">
					<div class="row">
						<div class="col-xs-6">
							<a href="#"  style="color: green;" id="login-form-link">LogIn</a>
						</div>
						<div class="col-xs-6">
							<a href="#" style="color: green;" id="register-form-link">Register</a>
						</div>
					</div>
					<hr>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form id="login-form" action="" method="post" role="form" style="display: block;">
								<div class="form-group">
									<input style="border: none;" type="text" name="username" id="username" tabindex="1" class="form-control greenInput" placeholder="Username" value="">
								</div>
								<div class="form-group">
									<input style="border: none;" type="password" name="password" id="password" tabindex="2" class="form-control greenInput" placeholder="Password">
								</div>
								<div class="form-group text-center">
									<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
									<label id="remember" for="remember"> Remember Me</label>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="LogIn">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-lg-12">
											<div class="text-center">
												<a style="color: green;" href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
											</div>
										</div>
									</div>
								</div>
							</form>
							<form id="register-form" action="http://phpoll.com/register/process" method="post" role="form" style="display: none;">
								<div class="form-group">
									<input style="border: none;" type="text" name="username" id="username" tabindex="1" class="form-control greenInput" placeholder="Username" value="">
								</div>
								<div class="form-group">
									<input style="border: none;" type="email" name="email" id="email" tabindex="1" class="form-control greenInput" placeholder="Email Address" value="">
								</div>
								<div class="form-group">
									<input style="border: none;" type="password" name="password" id="password" tabindex="2" class="form-control greenInput" placeholder="Password">
								</div>
								<div class="form-group">
									<input style="border: none;" type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control greenInput" placeholder="Confirm Password">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>