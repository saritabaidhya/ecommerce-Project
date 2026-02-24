    <div class="sidebar">
      <div class="sidebar-header">
        <a href="/dashboards" class="sidebar-logos"> <img src="{{ asset('storage/images/' . $settings->first()->path) }}" alt="Current Image" class="img-fluid mt-3" ></a>
      </div><!-- sidebar-header -->
      <div id="sidebarMenu" class="sidebar-body">
        <div class="nav-group show">
          <a href="#" class="nav-label">Dashboard</a>
          <ul class="nav nav-sidebar">
            <li class="nav-item">
              <a href="/dashboards" class="nav-link"><i class="ri-bar-chart-line"></i> <span>Analytics</span></a>
            </li>
          </ul>
        </div><!-- nav-group -->
        <div class="nav-group show">
          <a href="#" class="nav-label">Applications</a>
          <ul class="nav nav-sidebar">
           <li class="nav-item">
              <a href="/sliders" class="nav-link"><i class="ri-slideshow-line"></i> <span>Sliders</span></a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link has-sub"><i class="ri-hand-heart-line"></i> <span>Services</span></a>
              <nav class="nav nav-sub">
                  <a href="/utilitytypes" class="nav-sub-link">Service Category</a>
                  <a href="/utilitysubtypes" class="nav-sub-link">Service Subcategory</a>
                  <a href="/utilities" class="nav-sub-link">Service List</a>
                  <a href="/packages" class="nav-sub-link">Packages</a>
                  <a href="/offerings" class="nav-sub-link">Offerings</a>
              </nav>
          </li>
          
           <li class="nav-item">
              <a href="/grants" class="nav-link"><i class="ri-bar-chart-2-line"></i> <span>Offers</span></a>
          </li>

          <li class="nav-item">
              <a href="/approaches" class="nav-link"><i class="ri-coin-line"></i> <span>Approaches</span></a>
          </li>

          <li class="nav-item">
              <a href="/markets" class="nav-link"><i class="ri-store-line"></i> <span>MarketPlace</span></a>
          </li>
          <li class="nav-item">
              <a href="/squads" class="nav-link"><i class="ri-team-line"></i> <span>Astrologers & Pandits</span></a>
          </li>
                    <li class="nav-item">
              <a href="/reviews" class="nav-link"><i class="ri-chat-follow-up-line"></i> <span>Testimonials</span></a>
          </li>
         

          <li class="nav-item">
              <a href="/journals" class="nav-link"><i class="ri-file-paper-line"></i> <span>Blogs</span></a>
          </li>
          <li class="nav-item">
              <a href="/queries" class="nav-link"><i class="ri-question-line"></i> <span>Faqs</span></a>
          </li>
          <li class="nav-item">
              <a href="/associates" class="nav-link"><i class="ri-group-2-line"></i> <span>Partners</span></a>
          </li>


          <li class="nav-item">
              <a href="/studios" class="nav-link"><i class="ri-gallery-upload-line"></i> <span>Gallery</span></a>
          </li>
          <li class="nav-item">
              <a href="/popups" class="nav-link"><i class="ri-crop-2-fill"></i> <span>Popups</span></a>
          </li>
          <li class="nav-item">
              <a href="/medias" class="nav-link"><i class="ri-gallery-line"></i> <span>Media</span></a>
          </li>

          </ul>
        </div><!-- nav-group -->
        <div class="nav-group show">
          <a href="#" class="nav-label">Pages</a>
          <ul class="nav nav-sidebar">
            <li class="nav-item ">
              <a href="#" class="nav-link has-sub "><i class="ri-pages-line"></i> <span>Pages</span></a>
              <nav class="nav nav-sub">
                <a href="/stories" class="nav-sub-link ">About Us</a>
                 <a href="/pages" class="nav-sub-link" >Inner Pages</a>
                <a href="/policies" class="nav-sub-link ">Privacy Policy</a>
                <a href="/conditions" class="nav-sub-link ">Terms & Conditions</a>
              </nav>
            </li>
            
          

            <li class="nav-item">
                <a href="/connects" class="nav-link "><i class="ri-contacts-book-2-line"></i> <span>Contact Request</span></a>
              </li>

              <li class="nav-item">
                <a href="/grievances" class="nav-link"><i class="ri-chat-quote-line"></i> <span>Enquiry Request</span></a>
              </li>

              <li class="nav-item">
                <a href="/endorses" class="nav-link "><i class="ri-file-list-2-line"></i> <span>Subscribed User</span></a>
              </li>

              <li class="nav-item">
                <a href="/settings" class="nav-link "><i class="ri-settings-3-line"></i> <span>Site Settings</span></a>
              </li>
           
          </ul>
        </div><!-- nav-group -->
        
      </div><!-- sidebar-body -->
      
    </div><!-- sidebar -->

    <div class="header-main px-3 px-lg-4">
      <a id="menuSidebar" href="#" class="menu-link me-3 me-lg-4"><i class="ri-menu-2-fill"></i></a>

      <div class="form-search me-auto">
        <input type="text" class="form-control" placeholder="Search">
        <i class="ri-search-line"></i>
      </div><!-- form-search -->
     <div class="dropdown dropdown-notification ">
        <a href="/" class="dropdown-link" ><i class="ri-earth-line"></i></a>
        
      </div><!-- dropdown -->
      <div class="dropdown dropdown-skin ms-3">
        <a href="#" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i class="ri-settings-3-line"></i></a>
        <div class="dropdown-menu dropdown-menu-end mt-10-f">
          <label>Skin Mode</label>
          <nav id="skinMode" class="nav nav-skin">
            <a href="#" class="nav-link active">Light</a>
            <a href="#" class="nav-link">Dark</a>
          </nav>
          <hr>
          <label>Sidebar Skin</label>
          <nav id="sidebarSkin" class="nav nav-skin">
            <a href="#" class="nav-link active">Default</a>
            <a href="#" class="nav-link">Prime</a>
            <a href="#" class="nav-link">Dark</a>
          </nav>
         
        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
      

      <div class="dropdown dropdown-notification ms-3 ms-xl-4">
        <a href="#" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside"><small>3</small><i class="ri-notification-3-line"></i></a>
        <div class="dropdown-menu dropdown-menu-end mt-10-f me--10-f">
          <div class="dropdown-menu-header">
            <h6 class="dropdown-menu-title">Notifications</h6>
          </div><!-- dropdown-menu-header -->
          <ul class="list-group">
            
            @foreach ($notifications as $notification)
            <li class="list-group-item">
              <div class="avatar"><span class="avatar-initial bg-primary">a</span></div>
              <div class="list-group-body">
                <p>{{$notification->detail}} <strong>{{$notification->name}}</strong></p>
                <span>Aug 15 08:10pm</span>
              </div><!-- list-group-body -->
            </li>
            @endforeach
           
          </ul>
          <div class="dropdown-menu-footer"><a href="#">Show all Notifications</a></div>
        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
      <div class="dropdown dropdown-profile ms-3 ms-xl-4">
          <a href="#" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside"><div class="avatar online"><img src="https://tradiequote.com.au/storage/images/SgkWkOdMkTHetE1uHdHgnqUF0KDCsdqTrslXApe9.svg" alt=""></div></a>
          <div class="dropdown-menu dropdown-menu-end mt-10-f">
            <div class="dropdown-menu-body">
              <h5 class="mb-1 text-dark fw-semibold">{{ Auth::user()->name }}</h5>
              <p class="fs-sm text-secondary">Super Admin</p>

              <nav class="nav">
                <a href="/profile"><i class="ri-profile-line"></i> View Profile</a>
              </nav>
              <hr>
              <nav class="nav">
                <a href="#"><i class="ri-question-line"></i> Help Center</a>
                <a href="#"><i class="ri-user-settings-line"></i> Account Settings</a>
                <a href="{{ route('signout') }}"><i class="ri-logout-box-r-line"></i> Log Out</a>
              </nav>
            </div><!-- dropdown-menu-body -->
          </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
    </div><!-- header-main -->