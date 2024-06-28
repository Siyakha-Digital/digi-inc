<header class="header">
  <div class="container">
      <nav class="navbar navbar-expand-lg header-nav">
          <div class="navbar-header">
              <a id="mobile_btn" href="#">
                  <span class="bar-icon">
                      <span></span>
                      <span></span>
                      <span></span>
                  </span>
              </a>

              {{-- Application Logo --}}
              <a href="{{route('home')}}" class="navbar-brand logo">
                  <img src="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png" class="img-fluid" alt="Logo">
              </a>
              {{-- Application Name Logo Style --}}
              <a href="{{route('home')}}" class="navbar-brand logo-small">
                  <img src="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png" class="img-fluid" alt="Logo">
              </a>
          </div>
          
      {{-- Nav Bar with menu & nav items --}}
          <div class="main-menu-wrapper">
              <div class="menu-header">
                  <a href="index.html" class="menu-logo">
                      <img src="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png" class="img-fluid" alt="Logo">
                  </a>
                  <a id="menu_close" class="menu-close" href="{{route('home')}}">
                      <i class="fas fa-times">
                      </i>
                  </a>
              </div>
              
              <ul class="main-nav navbar-nav" id="scroll-nav">
                  <li class="has-submenu">
                      <a href="{{route('news-feed')}}">Newsfeed<i class="fas fa-chevron-down"></i></a>
                      <ul class="submenu">
                          <li><a href="#">News</a></li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('colab')}}" class="nav-link">CoLab</a>
                  </li>
                  <li class="has-submenu">
                      <a href="{{route('codesk')}}">CoDesk<i class="fas fa-chevron-down"></i></a>
                      <ul class="submenu">
                          <li><a href="#">Cape Town</a></li>
                          <li><a href="#">Sandton</a></li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('cowork')}}" class="nav-link">CoWork</a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('tools')}}" class="news-feed">Tools</a>
                  </li>
                  {{-- Menu Items with submenu --}}
                  {{-- <li class="has-submenu">
                      <a href="javascript:void(0);">Tools<i class="fas fa-chevron-down"></i></a>
                      <ul class="submenu">
                          <li><a href="service.html">Gigs Grid</a></li>
                          <li><a href="service-grid-sidebar.html">Gig Left Sidebar</a></li>
                          <li><a href="service-details.html">Gig Details</a></li>
                          <li><a href="categories.html">Gig Category</a></li>
                          <li><a href="categories-2.html">Gig Category 2</a></li>
                          <li><a href="service-sub-category.html">Gig Subcategory</a></li>
                          <li><a href="add-gigs.html">Create a Gig</a></li>
                      </ul> --}}
                  {{-- </li>
                  <li class="nav-item responsive-link">
                      <a href="javascript:void(0);" class="nav-link">Buy Template</a>
                  </li>
                  <li class="nav-item responsive-link">
                      <a href="html/template/index.html" target="_blank" class="nav-link">Live Demo</a>
                  </li> --}}
              </ul>
          </div>

          <ul class="nav header-navbar-rht">
              <li class="nav-item">
                  <a class="btn btn-primary" href="https://themeforest.net/item/dreamgigs-gig-service-selling-marketplace-bootstrap-html-template/51017661?" target="_blank">Register</a>
              </li>
              <li class="nav-item">
                  <a class="btn btn-secondary" href="html/template/index.html" target="_blank">Login</a>
              </li>
          </ul>
      </nav>
  </div>
</header>