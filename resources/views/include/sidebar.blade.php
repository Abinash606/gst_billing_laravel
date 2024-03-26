<div class="left-side-menu">
    <div class="h-100" data-simplebar>
      <!-- User box -->
      <div class="user-box text-center">
        <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md" />
        <p class="text-muted mt-2">Admin Head</p>
      </div>

      <!--- Sidemenu -->
      <div id="sidebar-menu">
        <ul id="side-menu">
          <a href="{{ url('/') }}"><li class="menu-title mt-2">DashBord</li></a>
          <li>
            <a href="" data-toggle="collapse">
              <a href="{{ route('add_party') }}"><span> New Client </span></a>
            </a>
            <div class="collapse" id="sidebarEcommerce">
              <ul class="nav-second-level">
                <li>
                  <i data-feather="plus" class="pr-0 mr-1"></i>
                </li>
                <li>
                  <a href="manageParties.html"><i data-feather="list" class="pr-0 mr-1"></i>Manage
                    Parties</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
             <a href="{{ route('gstBill') }}"> <span> GST Billing </span> </a>
            </a>
            <div>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <!-- End Sidebar -->

      <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
  </div>