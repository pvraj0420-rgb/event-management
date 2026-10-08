@include('admin.header')

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
	<meta name="author" content="Coderthemes">

	<title>Event Manage - Responsive Admin Dashboard Template</title>

</head>

<body>

	<div class="account-pages"></div>
	<div class="clearfix"></div>

	<div class="wrapper-page">
		<div class="card-box">

			<div class="panel-heading">
				<h3 class="text-center">
					Sign Up to <strong class="text-custom">Event Manage</strong>
				</h3>
			</div>

			<div class="panel-body">
				<form class="form-horizontal m-t-20" method="POST" action="{{route('admin.adddata')}}">
					@csrf

					<div class="form-group">
						<div class="col-xs-12">
							<input class="form-control" type="email" name="email" required placeholder="Email">
						</div>
					</div>

					<div class="form-group">
						<div class="col-xs-12">
							<input class="form-control" type="text" name="username" required placeholder="Username">
						</div>
					</div>

					<div class="form-group">
						<div class="col-xs-12">
							<input class="form-control" type="password" name="password" required placeholder="Password">
						</div>
					</div>

					<div class="form-group">
						<div class="col-xs-12">
							<div class="checkbox checkbox-primary">
								<input id="checkbox-signup" type="checkbox" checked>
								<label for="checkbox-signup">
									I accept <a href="#">Terms and Conditions</a>
								</label>
							</div>
						</div>
					</div>

					<div class="form-group text-center m-t-40">
						<div class="col-xs-12">
							<button class="btn btn-info btn-block text-uppercase waves-effect waves-light">
								Register
							</button>
						</div>
					</div>

				</form>

			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 text-center">
				<p>
					Already have account?
					<a href="{{route('admin.login') }}" class="text-primary m-l-5">
						<b>Sign In</b>
					</a>
				</p>
			</div>
		</div>

	</div>

	@include('admin.footer')

</body>

</html>