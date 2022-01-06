<!-- Start / Sidebar-left -->

<div
  class="main-menu menu-fixed menu-light menu-accordion"
  data-scroll-to-active="true"
>
  <div class="main-menu-content">
    <ul
      class="navigation navigation-main"
      id="main-menu-navigation"
      data-menu="menu-navigation"
    >
      <li class="navigation-header">
        <span>welcome @if(Auth::guard('admin')->check())
                                  {{Auth::guard('admin')->user()->name}}
                                  @else
                                  {{Auth::guard('supervisor')->user()->username}}


                                  @endif !</span
        ><i
          class="ft-minus"
          data-toggle="tooltip"
          data-placement="left"
          data-original-title="General"
        ></i>
      </li>
      @auth('admin')

      <li class="nav-item">
        <a href="/supervisors"
          ><i class="ft-home"></i>
          <span>Supervisor</span>
          </a>
      </li>
      @endauth


          @auth('supervisor')

      <li class="nav-item">
        <a href="/categories"><i class="ft-home"></i>
          <span>category</span>
          </a>
      </li>



      <li class="nav-item">
        <a href="/products"
          ><i class="ft-home"></i>
          <span>product</span>
          </a>
      </li>
      @endauth
    </ul>
  </div>
</div>

<!-- End / Sidebar-left-->
