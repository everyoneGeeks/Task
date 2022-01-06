<!-- End Content / App Content -->

<footer class="footer footer-static footer-light navbar-border">
  <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
  
  </p>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="{{asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('app-assets/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/extensions/unslider-min.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->


<script src="{{asset('app-assets/vendors/js/ui/prism.min.js')}}" type="text/javascript"></script>


<!-- BEGIN maoqe3 JS-->
<script src="{{asset('app-assets/js/core/app-menu.min.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/js/core/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/js/scripts/customizer.min.js')}}" type="text/javascript"></script>
<!-- END maoqe3 JS-->
<!-- BEGIN PAGE LEVEL JS-->


<!-- END PAGE LEVEL JS-->
{!! Notify::render() !!}
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

@yield('javascript')
</body>
</html>
