<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset ('admin_mat/assets/images/whitelogo.png')}}" alt="logo" / style="height: 60px; width:80px; margin-left:30px"></a>
      {{-- <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a> --}}
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal" style="text-transform: capitalize">{{session('admin_name')}}</h5>
              <span>Admin Member</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar-today text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="adminDashboard">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#manage-user" aria-expanded="false" aria-controls="manage-user">
          <span class="menu-icon">
            <i class="mdi mdi-account"></i>
          </span>
          <span class="menu-title">Manage User</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="manage-user">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/Myadmin/allUser">All User</a></li>
            <li class="nav-item"> <a class="nav-link" href="/Myadmin/userBlock">Block User</a></li>
            <li class="nav-item"> <a class="nav-link" href="/Myadmin/userReport">User Report</a></li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#manage-agencies" aria-expanded="false" aria-controls="manage-agencies">
          <span class="menu-icon">
            <i class="mdi mdi-domain"></i>
          </span>
          <span class="menu-title">Manage Agencies</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="manage-agencies">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/Myadmin/accept_reject_Company">Approve / Reject Accounts</a></li>
            <li class="nav-item"> <a class="nav-link" href="/Myadmin/manageJobListing">Manage Job Listing</a></li>
            <li class="nav-item"> <a class="nav-link" href="/Myadmin/allCompany">All Companies</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#manage-job" aria-expanded="false" aria-controls="manage-">
          <span class="menu-icon">
            <i class="mdi mdi-briefcase-search"></i>
          </span>
          <span class="menu-title">Job Category</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="manage-job">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/Myadmin/addJob">Add</a></li>
            <li class="nav-item"> <a class="nav-link" href="/Myadmin/allJob">View All</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#manage-job-cata" aria-expanded="false" aria-controls="manage-">
          <span class="menu-icon">
            <i class="mdi mdi-factory"></i>
          </span>
          <span class="menu-title">Job SubCategory</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="manage-job-cata">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/Myadmin/addSubJob">Add</a></li>
            <li class="nav-item"> <a class="nav-link" href="/Myadmin/allSubJob">View All</a></li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item menu-items">
        <a class="nav-link" href="/Myadmin/feedback">
          <span class="menu-icon">
            <i class="mdi mdi-message-text"></i>
          </span>
          <span class="menu-title">View Feedback</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/Myadmin/inquiry">
          <span class="menu-icon">
            <i class="mdi mdi-comment"></i>
          </span>
          <span class="menu-title">Inquiry</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/Myadmin/reportAndAna">
          <span class="menu-icon">
            <i class="mdi mdi-file-chart"></i>
          </span>
          <span class="menu-title">Report and Analytics</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/Myadmin/resumeTemplate">
          <span class="menu-icon">
            <i class="mdi mdi-clipboard-account"></i>
          </span>
          <span class="menu-title">Resume Templates</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="/Myadmin/settings">
          <span class="menu-icon">
            <i class="mdi mdi-wrench"></i>
          </span>
          <span class="menu-title">Settings</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="/Myadmin/logout">
          <span class="menu-icon">
            <i class="mdi mdi-logout"></i>
          </span>
          <span class="menu-title">Logout</span>
        </a>
      </li>
      {{-- <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title"></span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{asset ('admin_mat/pages/samples/blank-page.html')}}"> Blank Page </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{asset ('admin_mat/pages/samples/error-404.html')}}"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{asset ('admin_mat/pages/samples/error-500.html')}}"> 500 </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{asset ('admin_mat/pages/samples/login.html')}}"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{asset ('admin_mat/pages/samples/register.html')}}"> Register </a></li>
          </ul>
        </div>
      </li> --}}
      <li class="nav-item menu-items">
        <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Documentation</span>
        </a>
      </li>
    </ul>
  </nav>