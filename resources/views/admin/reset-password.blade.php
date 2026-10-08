@include('admin.header')

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <title>Event Manage - Reset Password</title>
    </head>

    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>

        <div class="wrapper-page">
            <div class="card-box">

                <div class="panel-heading">
                    <h3 class="text-center">
                        Reset <strong class="text-custom">Password</strong>
                    </h3>
                </div>

                <div class="panel-body">

                    @if(session('email'))
                    <form class="form-horizontal m-t-20" method="POST" action="/admin/update-password">
                        @csrf

                        <!-- SUCCESS / INFO -->
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="alert alert-info alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    Enter your <b>new password</b> to update your account.
                                </div>
                            </div>
                        </div>

                        <!-- HIDDEN EMAIL -->
                        <input type="hidden" name="email" value="{{ session('email') }}">

                        <!-- NEW PASSWORD -->
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" placeholder="New Password" required>
                            </div>
                        </div>

                        <!-- CONFIRM PASSWORD -->
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                        </div>

                        <!-- BUTTON -->
                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-block text-uppercase waves-effect waves-light">
                                    Update Password
                                </button>
                            </div>
                        </div>

                    </form>
                    @else
                        <p style="color:red; text-align:center;">
                            Invalid Request. Please go back and try again.
                        </p>
                    @endif

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>
                        Back to 
                        <a href="{{route('admin.login')}}" class="text-primary m-l-5">
                            <b>Login</b>
                        </a>
                    </p>
                </div>
            </div>

        </div>

        @include('admin.footer')

    </body>
</html>