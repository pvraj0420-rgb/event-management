@include('admin.header')

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
	<meta name="author" content="Coderthemes">

	<title>Event Manage - Forgot Password</title>

</head>

<body>

	<div class="account-pages"></div>
	<div class="clearfix"></div>

	<div class="wrapper-page">
		<div class="card-box">

			<div class="panel-heading">
				<h3 class="text-center">
					Forgot <strong class="text-custom">Password</strong>
				</h3>
			</div>

			<div class="panel-body">

				<form class="form-horizontal m-t-20" method="POST" action="/admin/forgot-password">
					@csrf

					<!-- INFO -->
					<div class="form-group">
						<div class="col-xs-12">
							<div class="alert alert-info alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								Enter your <b>Email</b> and we will check your account.
							</div>
						</div>
					</div>

					<!-- ERROR -->
					@if(session('error'))
					<div class="form-group">
						<div class="col-xs-12">
							<p style="color:red; text-align:center;">
								{{ session('error') }}
							</p>
						</div>
					</div>
					@endif

					<!-- EMAIL -->
					<div class="form-group">
						<div class="col-xs-12">
							<input class="form-control" type="email" name="email" required placeholder="Enter Email">
						</div>
					</div>

					<!-- BUTTON -->
					<div class="form-group text-center m-t-40">
						<div class="col-xs-12">
							<button class="btn btn-purple btn-block text-uppercase waves-effect waves-light">
								Submit
							</button>
						</div>
					</div>

				</form>

			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 text-center">
				<p>
					Remember password?
					<a href="{{ route('admin.login') }}" class="text-primary m-l-5">
						<b>Sign In</b>
					</a>
				</p>
			</div>
		</div>

	</div>

	@include('admin.footer')

</body>

</html>