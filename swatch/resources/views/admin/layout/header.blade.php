
   <header class="main-header">

    <!-- Logo -->
    <a href="/admin" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>SW</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Swatch</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <!-- Tasks Menu -->
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{ URL::asset('dist/img/user/'.Auth::user()->avatar)}}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">  {{Auth::user()->username}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{ URL::asset('dist/img/user/'.Auth::user()->avatar)}}" class="img-circle" alt="User Image">

                <p>
                 {{Auth::user()->username}}
                  <small>{{Auth::user()->created_at}}</small>
                </p>
              </li>
              <!-- Menu Body -->
            
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/admin/profile" class="btn btn-default btn-flat">Tài khoản</a>
                </div>
                <div class="pull-right">
                  <a href="/logout" class="btn btn-default btn-flat">Đăng xuất</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>