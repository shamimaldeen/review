<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
	<div class="small-dialog-header">
		<h3>Company Sign In</h3>
	</div>
	<form method="POST" action="{{ url('/company/login') }}">
		{{ csrf_field() }}
		<div class="sign-in-wrapper">
				{{-- <a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div> --}}
				<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
					<label>Email</label>
					<input type="email" class="form-control"  name="email" value="{{ old('email') }}" autofocus>
					@if ($errors->has('email'))
					<span class="help-block" style="color: red;">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
					<label>Password</label>
					<input type="password" class="form-control"  name="password" id="password" placeholder="Password">
					@if ($errors->has('password'))
					<span class="help-block" style="color: red;">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
					@endif
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
							<input type="checkbox">
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Don’t have an account? <a href="{{ url('company/register') }}">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>