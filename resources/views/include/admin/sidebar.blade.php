<!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="index.html">
      <img src="{{ asset('assets/images/shoplogo/logo-icon.png') }}" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">
        {{ $user->name }}
      </h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
     <li class="sidebar-header">MAIN NAVIGATION</li>
     <li>
      <a href="{{ url('/superadmin') }}" class="waves-effect">
        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>
     <li>
       <a href="javaScript:void();" class="waves-effect">
         <i class="zmdi zmdi-shopping-cart"></i>
         <span>Shops</span> <i class="fa fa-angle-left pull-right"></i>
       </a>
       <ul class="sidebar-submenu">
       <li><a href="{{ url('/superadmin/addshopform') }}"><i class="zmdi zmdi-star-outline"></i> Add Shop</a></li>
       <li><a href="{{ url('/superadmin/allshops') }}"><i class="zmdi zmdi-star-outline"></i> All Shops</a></li>
       </ul>
     </li>

    </ul>
  
  </div>
  <!--End sidebar-wrapper-->