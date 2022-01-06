<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="maoqe3 admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, maoqe3 admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login </title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/maoqe3-responsive-bootstrap-4-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/custom.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN maoqe3 CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/app.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/custom-rtl.min.css')}}">
    <!-- END maoqe3 CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/pages/login-register.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-rtl.css')}}">
    <!-- END Custom CSS-->
  </head>

<body class="vertical-layout vertical-menu 1-column  bg-full-screen-image menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content" style="margin-left:0px">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body"><section class="flexbox-container">
  <div class="col-12 d-flex align-items-center justify-content-center">
      <div class="col-md-4 col-10 box-shadow-2 p-0">
          <div class="card border-grey border-lighten-3 px-1 py-1 m-0">

              <div class="card-content">

                  <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>welcom user!</span></p>
                  <div class="card-body">
                    <form method="POST" class="form-horizontal" action="{{ route('supervisor.login') }}">
  @csrf
                          <fieldset class="form-group position-relative has-icon-left">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                              <div class="form-control-position">
                                  <i class="ft-user"></i>
                              </div>
                              @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                          </fieldset>
                          <fieldset class="form-group position-relative has-icon-left">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>                              <div class="form-control-position">
                                  <i class="fa fa-key"></i>
                              </div>
                          </fieldset>

                          <button type="submit" class="btn btn-outline-primary btn-block"><i class="ft-unlock"></i> Login</button>
                      </form>
                  </div>

              </div>
          </div>
      </div>
  </div>
</section>

      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->


<h5 class="mt-1 mb-1 text-bold-500">Menu Color Options</h5>
<div class="form-group">
  <!-- Outline Button group -->
  <div class="btn-group customizer-sidebar-options" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-outline-info" data-sidebar="menu-light">Light Menu</button>
    <button type="button" class="btn btn-outline-info" data-sidebar="menu-dark">Dark Menu</button>
  </div>
</div>
</div>
  </div>
  <!-- BEGIN VENDOR JS-->
  <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN maoqe3 JS-->
  <script src="app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.min.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
  <!-- END maoqe3 JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="app-assets/js/scripts/forms/form-login-register.min.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>

<!-- Islam Khairy/vertical-menu-template-light/login-with-bg-image.html  Fri, 13 Apr 2018 09:13:07 GMT -->
</html>
