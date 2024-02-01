<body class="hold-transition sidebar-mini layout-fixed ">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navBack  text-center" style="margin-left: 0% !important; height: 70px !important;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item menIcon">
          <a class="nav-link robot" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li><img src="./images/logo.png" style="height: 40px;"></li>
        <li class="nav-item d-none d-sm-inline-block pt-1 bord">
          <a href="" class="nav-link robot  "><span><i class=" fa fa-home mr-1" aria-hidden="true"></i>
              </i></span> My Plant</a>

          <div class="bottomDown"></div>
        </li>
        <li class="nav-item d-none d-sm-inline-block pt-1 clicking">
          <a href="#" class="nav-link robot"><span><i class="fas fa-th-large mr-1"></i></span> Function</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto navRight">


        <li class="nav-item dropdown ">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-book" aria-hidden="true" aria-hidden="true" style="color: #d6d6d6; padding: 6px;"></i><span class="ml-2 robot">User Manual</span>
          </a>
        </li>

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown ">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell" style="color: #d6d6d6;"></i>
          </a>
        </li>

        <li class="nav-item dropdown ">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <p class="robot">English <span><i class="fa fa-angle-down" style="font-size:14px !important; color: #d6d6d6 !important; font-weight: 800 !important;"></i></span>
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- Addd menu item  -->
          </div>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-user" aria-hidden="true" style="color: #d6d6d6; background-color: #BDBDBF; border-radius: 50%; padding: 6px;"></i><span class="ml-2 robot">{{ session('login') }}</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <ul>
              <li class="listIt">
                <a class="nav-link listIt" aria-current="page" href="#" style="color: #212328 !important;"><span>
                    <i class="fa fa-user mr-2" aria-hidden="true"></i></span> Me</a>
                <a class="nav-link listIt" aria-current="page" href="#" style="color: #212328 !important;"><span>
                    <img class="mr-2" src="./images/shield-plus.svg" style="width: 20px;height: 20px; margin-left: -5px;"></span>Account</a>
                <a class="nav-link listIt" aria-current="page" href="#" style="color: #212328 !important;"><span>
                    <img class="mr-2" src="./images/setting.png" style="width: 20px;height: 20px; margin-left: -5px;"></span>General</a>
                <!--  <i class='fa fa-gear mr-2' aria-hidden="true"></i></span> General</a> -->
                <a class="nav-link listIt" aria-current="page" href="#" style="color: #212328 !important;"><span>
                    <img class="mr-2" src="./images/bell.png" style="width: 20px;height: 20px; margin-left: -5px;"></span>
                  Message</a>
                <a class="nav-link listIt" aria-current="page" href="#" style="color: #212328 !important;"><span>
                    <img class="mr-2" src="./images/notes.png" style="width: 20px;height: 20px; margin-left: -5px;"></span>
                  Feedback</a>
                <a class="nav-link listIt" aria-current="page" href="#" style="color: #212328 !important;"><span>
                    <img class="mr-2" src="./images/customer.jpg" style="width: 20px;height: 20px; margin-left: -5px;"></span>Online
                  Service</a>
                <!-- <i class="fa fa-user mr-2" aria-hidden="true"></i></span> Online Service</a> -->
                <a class="nav-link listIt" aria-current="page" href="#" style="color: #212328 !important;"><span>
                    <i class="fa fa-columns mr-2" aria-hidden="true" style=" font-size: 19px; margin-left: -5px;"></i></span> User
                  Manual</a>

                <hr style="color: 1px solid #212328; width: 100%;">
                <a class="nav-link listIt" aria-current="page" href="{{route('logout')}}" style="color: #212328 !important;"><span>
                    <i class="fa fa-power-off mr-2" aria-hidden="true" style="font-size: 19px; margin-left: -5px;"></i></span>
                  Logout</a>
              </li>

            </ul>
          </div>
        </li>


      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="top:69px !important; background-color: #3c4455 !important;">
      <!-- Sidebar -->
      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item mt-4 mb-3 p-2">
              <a href="#" class="nav-link text-center clicking" style="width: 100% !important; background-color: white; color: black;"> Create a Plan
              </a>
            </li>
            <hr style="width: 100%; ">
            <div class="m-2 pl-3 pr-3" style="background-color: #4B566d;">
              <img src="./images/solar.avif" style="width: 100%; height: 50px;">
              <p style="height: auto; width: 90%; text-wrap: wrap; color: white; ">
                {{ session('plantName') }}
              </p>
            </div>
            <li class="nav-item mt-4 clicking">
              <a href="#" class="nav-link listfont">
                <i class="fa fa-plus-square nav-icon"></i>
                <p class="listfont">
                  Add a Logger
                </p>
              </a>
            </li>
            <li class="nav-item mt-1 {{ request()->routeIs('overview') ? 'active sideActive' : '' }}">
              <a href="{{route('overview')}}" class="nav-link listfont ">
                <i class="nav-icon fa fa-info-circle"></i>
                <p class="listfont">
                  Overview
                </p>
              </a>
            </li>
            <li class="nav-item  mt-1 clicking">
              <a href="#" class="nav-link listfont">
                <i class="nav-icon fas fa-bezier-curve"></i>
                <p class="listfont">
                  Layout
                </p>
              </a>
            </li>

            <li class="nav-item  mt-1 {{ request()->routeIs('device') ? 'active sideActive' : '' }}">

              <a href="{{route('device')}}" class="nav-link listfont">
                <i class="nav-icon fa fa-bars"></i>

                <p class="listfont">
                  Device
                </p>
              </a>
            </li>

            <li class="nav-item  mt-1 clicking">
              <a href="#" class="nav-link listfont">
                <i class="nav-icon fa fa-check-square"></i>
                <p class="listfont">
                  Authorization
                </p>
              </a>
            </li>
            <li class="nav-item  mt-1 clicking">
              <a href="#" class="nav-link listfont">
                <i class="nav-icon fas fa-radiation"></i>
                <p class="listfont">
                  Alerts
                </p>
              </a>
            </li>
            <li class="nav-item mt-1 {{ request()->routeIs('plantdetail') ? 'active sideActive' : '' }}">
              <a href="{{route('plantdetail')}}" class="nav-link listfont ">
                <i class="fa fa-folder-open-o nav-icon iconmenu"></i>
                <p class="listfont">
                  Plant Details
                </p>
              </a>
            </li>
            <li class="nav-item mt-1 {{ request()->routeIs('export') ? 'active sideActive' : '' }}">
              <a href="{{route('export')}}" class="nav-link listfont ">
                <i class='fas fa-file-export nav-icon iconmenu'></i>
                <p class="listfont">
                  Export
                </p>
              </a>
            </li>
            <li class="nav-item  mt-1 ">
              <a href="#" class="nav-link listfont">
                <i class="fa fa-gear nav-icon iconmenu" aria-hidden="true"></i>
                <p class="listfont">
                  Plant Setting
                </p>
              </a>
            </li>
            <li class="nav-item  mt-1 clicking">
              <a href="" class="nav-link listfont">
                <p class="listfont">
                </p>
              </a>
            </li>
          </ul>
        </nav>

      </div>
    </aside>