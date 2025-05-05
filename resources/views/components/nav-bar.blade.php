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
                <a href="{{ route('home') }}" class="navbar-brand logo">
                    <img src="{{ asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
                </a>
                {{-- Application Name Logo Style --}}
                <a href="{{ route('home') }}" class="navbar-brand logo-small">
                    <img src="{{ asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
                </a>
            </div>

            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{ route('home') }}" class="menu-logo">
                        <img src="{{ asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" onclick="closeMenu()">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>

                <ul class="main-nav navbar-nav" id="scroll-nav">
                    <li class="has-submenu">
                        <a href="{{ route('news-feed') }}">Newsfeed<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></a>
                        <ul class="submenu">
                            <li><a href="{{ route('inews') }}">News</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('colab') }}" class="nav-link">CoLab</a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{ route('codesk') }}">CoDesk<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></a>
                        <ul class="submenu">
                            <li><a href="#">Cape Town</a></li>
                            <li><a href="#">Sandton</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cowork') }}" class="nav-link">CoWork</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tools') }}" class="news-feed">Tools</a>
                    </li>
                </ul>
            </div>

            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-secondary" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
