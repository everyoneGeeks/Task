<!-- - var menuBorder = true-->
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
    />
    <meta
      name="description"
      content="maoqe3 admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities."
    />
    <meta
      name="keywords"
      content="admin template, maoqe3 admin template, dashboard template, flat admin template, responsive admin template, web app"
    />
    <meta name="author" content="PIXINVENT" />
    <title>{{config('app.name')}}</title>
    <link
      rel="apple-touch-icon"
      href="app-assets/images/ico/apple-icon-120.png"
    />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="https://pixinvent.com/maoqe3-responsive-bootstrap-4-admin-template/app-assets/images/ico/favicon.ico"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/css-rtl/vendors.min.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/vendors/css/forms/icheck/icheck.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/vendors/css/forms/icheck/custom.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/vendors/css/charts/morris.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/vendors/css/extensions/unslider.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/vendors/css/weather-icons/climacons.min.css')}}"
    />
    <!-- END VENDOR CSS-->

    <!-- BEGIN Main CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/css-rtl/app.min.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/css-rtl/custom-rtl.min.css')}}"
    />
    <!-- END Main CSS-->

    <!-- BEGIN Page Level CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.min.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/css-rtl/core/colors/palette-climacon.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/css-rtl/core/colors/palette-gradient.min.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/fonts/simple-line-icons/style.min.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/fonts/meteocons/style.min.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/css-rtl/pages/users.min.css')}}"
    />
    <!-- END Page Level CSS-->
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />



  </head>

  <body
    class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar"
    data-open="click"
    data-menu="vertical-menu"
    data-col="2-columns"
  >
    <!-- Start / fixed-top -->

    <nav
      class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-border"
    >
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none ml-auto">
              <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"
                ><i class="ft-menu font-large-1"></i
              ></a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand" href="index.html"
                ><img
                  class="brand-logo"
                  alt="maoqe3 admin logo"
                  src="{{asset('app-assets/images/logo/maoqe3-logo.png')}}"
                />
                <h2 class="brand-text">Dashboard</h2>
              </a>
            </li>
            <li class="nav-item d-md-none">
              <a
                class="nav-link open-navbar-container"
                data-toggle="collapse"
                data-target="#navbar-mobile"
                ><i class="fa fa-ellipsis-v"></i
              ></a>
            </li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav ml-auto float-right">
              <li class="nav-item d-none d-md-block">
                <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"
                  ><i class="ft-menu"></i
                ></a>
              </li>

            </ul>
            <ul class="nav navbar-nav float-left">


              <li class="dropdown dropdown-user nav-item">
                <a
                  class="dropdown-toggle nav-link dropdown-user-link"
                  href="#"
                  data-toggle="dropdown"
                  ><span class="avatar avatar-online"
                    ><img
                      src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}"
                      alt="avatar" /><i></i></span
                  ><span class="user-name">@if(Auth::guard('admin')->check())
                                            {{Auth::guard('admin')->user()->name}}
                                            @else
                                            {{Auth::guard('supervisor')->user()->username}}


                                            @endif
                  </span></a
                >
                <div class="dropdown-menu dropdown-menu-left">


@if(Auth::guard('admin')->check())
                  <a class="dropdown-item" href="/admin/logout"
                    >
@else

<a class="dropdown-item" href="/supervisor/logout"
  >

@endif
                    <i class="ft-power"></i> Logout</a
                  >

                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
