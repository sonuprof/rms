<ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item  {{ request()->is('dashboard') ? 'active' : '' }}">
              <a href="" class="menu-link">
                <i class="menu-icon  bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
            @if(session()->has('role') && session('role') == 'Admin')
    <li class="menu-item">
        <a href="{{ route('add-user') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-user"></i>
            <div data-i18n="Analytics">Add User</div>
        </a>
    </li>
@endif


<li class="menu-item ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Layouts">Complaint</div>
              </a>

              <ul class="menu-sub">
                  <li class="menu-item  ">
                  <a href="{{route('add-complaint')}}" class="menu-link">
                    <div data-i18n="Without menu">Add Complaint</div>
                  </a>
                </li>
                   
               
                <li class="menu-item  ">
                  <a href="{{route('view-complaint')}}" class="menu-link">
                    <div data-i18n="Without menu">View Complaint</div>
                  </a>
                </li>
         
              </ul>
            </li>
            <!-- <li class="menu-item">
              <a href="{{'view-survey'}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-plus"></i>
                <div data-i18n="Analytics">View Survey</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{'view-survey'}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Analytics">View Survey</div>
              </a>
            </li> -->
          
               <li class="menu-item">
              <a href="{{'logout'}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-power-off"></i>
                <div data-i18n="Analytics">Log Out</div>
              </a>
            </li>

          </ul>
          </aside>