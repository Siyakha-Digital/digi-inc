@extends('layouts.app')
@section('content')
@endsection

    <div class="body-wrapper">
        <div class="body-innerwrapper">
            
<div class="sticky-header-placeholder" style="height: inherit;"></div>
<header id="sp-header" class="">
<div class="container">
    <div class="container-inner">
        <div class="row" style="position: relative;">
            <!-- Logo -->
            <div id="sp-logo" class="col-auto">
                <div class="sp-column">
                    <div class="logo"><a href="/digiinc/">
            <img class="logo-image  d-none d-lg-inline-block" srcset="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png 1x, https://radapps.co.za/digiinc/images/digi-inc-logo-01.png 2x" src="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png" height="60px" alt="My Joomla">
            <img class="logo-image-phone d-inline-block d-lg-none" src="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png" alt="My Joomla"></a></div>						
                </div>
            </div>

            <!-- Menu -->
            <div id="sp-menu" class="col-auto flex-auto" style="position: static;">
                <div class="sp-column  d-flex justify-content-end align-items-center">
                    <nav class="sp-megamenu-wrapper d-flex" role="navigation"><ul class="sp-megamenu-parent menu-animation-fade-up d-none d-lg-block"><li class="sp-menu-item"></li><li class="sp-menu-item sp-has-child"><a href="/digiinc/index.php/news-feed">News Feed</a><div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;"><div class="sp-dropdown-inner"><ul class="sp-dropdown-items"><li class="sp-menu-item"><a href="/digiinc/index.php/news-feed/inews">News</a></li></ul></div></div></li><li class="sp-menu-item sp-has-child"><a href="/digiinc/index.php/cowork">CoWork</a><div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;"><div class="sp-dropdown-inner"><ul class="sp-dropdown-items"><li class="sp-menu-item"><a href="/digiinc/index.php/cowork/latest-projects">Opportunities</a></li></ul></div></div></li><li class="sp-menu-item"><a href="/digiinc/index.php/colab">CoLab</a></li><li class="sp-menu-item sp-has-child active"><span class=" sp-menu-separator">CoDesk</span><div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;"><div class="sp-dropdown-inner"><ul class="sp-dropdown-items"><li class="sp-menu-item current-item active"><a aria-current="page" href="/digiinc/index.php/codesk/cape-town">Cape Town</a></li><li class="sp-menu-item"><a href="/digiinc/index.php/codesk/sandton">Sandton</a></li></ul></div></div></li><li class="sp-menu-item"><a href="/digiinc/index.php/tools">Tools</a></li><li class="sp-menu-item"><a href="/digiinc/index.php/register/register">Register</a></li></ul><a id="offcanvas-toggler" aria-label="Menu" class="offcanvas-toggler-right" href="#"><div class="burger-icon" aria-hidden="true"><span></span><span></span><span></span></div></a></nav>						

                    <!-- Related Modules -->
                    <div class="d-none d-lg-flex header-modules align-items-center">
                            
                                                        <div class="sp-module">
<a class="sp-sign-in" href="/digiinc/index.php/component/users/login?Itemid=101"><span class="far fa-user me-1" aria-hidden="true"></span><span class="signin-text d-none d-lg-inline-block">Sign In</span></a>
</div>													</div>
                    
                    <!-- if offcanvas position right -->
                                                <a id="offcanvas-toggler" aria-label="Menu" title="Menu" class="mega_offcanvas offcanvas-toggler-secondary offcanvas-toggler-right d-flex align-items-center" href="#">
                        <div class="burger-icon"><span></span><span></span><span></span></div>
                        </a>
                                        </div>
            </div>
        </div>
    </div>
</div>
</header>				
<section id="sp-section-1">

            

<div class="row">
<div id="sp-title" class="col-lg-12 "><div class="sp-column "></div></div></div>
            
</section>
<section id="sp-main-body">

                                    <div class="container">
                <div class="container-inner">
                    

<div class="row">

<main id="sp-component" class="col-lg-12 ">
<div class="sp-column ">
    <div id="system-message-container" aria-live="polite">
</div>


    
    <div id="session_expiration" role="dialog" tabindex="-1" class="joomla-modal modal fade">
<div class="modal-dialog modal-xl ">
    <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title">Your session is expiring soon.</h3>
            <button type="button" class="btn-close novalidate" data-bs-dismiss="modal" aria-label="Close">
    </button>
</div>
<div class="modal-body">
<div class="countdown"><span class="h">01</span> <span class="m">48</span> <span class="s">08</span></div><button type="button" class="btn btn-default"><i class="fa fa-sync"></i> Renew</button></div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal" data-bs-dismiss="modal" aria-hidden="true">Close</button></div>
    </div>
</div>
</div>
<div id="solidres_user_login_form" role="dialog" tabindex="-1" class="joomla-modal modal fade">
<div class="modal-dialog modal-xl ">
    <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title">Login form</h3>
            <button type="button" class="btn-close novalidate" data-bs-dismiss="modal" aria-label="Close">
    </button>
</div>
<div class="modal-body">
<form action="/digiinc/index.php/codesk/cape-town" method="post" id="login-form">

<div id="form-login-username" class="mb-3">
                <div class="input-group">
            <span class="input-group-text" aria-label="Username"><span class="fas fa-user"></span></span>
            <input id="modlgn-username" type="text" name="username" class="form-control" tabindex="0" size="18" placeholder="Username">
        </div>
        </div>

<div id="form-login-password" class="mb-3">
                <div class="input-group">
                <span class="input-group-text" aria-label="Password"><span class="fas fa-lock" aria-hidden="true"></span></span>
            <input id="modlgn-passwd" type="password" name="password" class="form-control" tabindex="0" size="18" placeholder="Password">
        </div>
        </div>
    
        <div id="form-login-remember" class="mb-3 form-check">
        <input id="modlgn-remember" type="checkbox" name="remember" class="form-check-input" value="yes">
        <label for="modlgn-remember" class="control-label">Remember Me</label>
    </div>

<div id="form-login-submit" class="mb-3">
    <button type="submit" tabindex="0" name="Submit" class="btn btn-primary login-button">Log in</button>
</div>

    <ul class="unstyled">
                <li>
            <a href="/digiinc/index.php/signup">
            Create an account <span class="icon-arrow-right"></span></a>
        </li>
            <li>
        <a href="/digiinc/index.php/component/users/remind?Itemid=101">
        Forgot your username?</a>
    </li>
    <li>
        <a href="/digiinc/index.php/component/users/reset?Itemid=101">
        Forgot your password?</a>
    </li>
</ul>

<input type="hidden" name="option" value="com_users">
<input type="hidden" name="task" value="user.login">
<input type="hidden" name="return" value="aHR0cHM6Ly9yYWRhcHBzLmNvLnphL2RpZ2lpbmMvaW5kZXgucGhwL2NvZGVzay9jYXBlLXRvd24=">
<input type="hidden" name="f69c572ce30de069587b7afcdd374a6a" value="1">

</form>
</div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">The Digi Inc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">News Feed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CoWork</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CoLab</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CoDesk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tools</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <div id="solidres" class="bs5 reservation_asset_default">
            <div class="reservation_asset_item clearfix">
                <div class="row mb-3">
                    <div class="col-md-9">
                        <h1>
                            Cape Town Shared Space
                            <span class="rating-wrapper">
                                <i class="rating fa fa-star"></i>
                                <i class="rating fa fa-star"></i>
                                <i class="rating fa fa-star"></i>
                                <i class="rating fa fa-star"></i>
                                <i class="rating fa fa-star"></i>
                            </span>
                        </h1>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <span class="address_1 reservation_asset_subinfo">
                            1 long street, Cape Town, South Africa
                            <a class="show_map cboxElement" href="#">
                                Show map
                            </a>
                        </span>
                    </div>
                </div>
    
    <div class="row">
        <div class="col-md-12">
            
<a id="book-form"></a>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <div class="container">
        <div class="wizard wizard-default">
            <ul class="row steps list-inline">
                <li data-target="#step1" class="list-inline-item active reservation-tab reservation-tab-room col-md-4">
                    <span class="badge badge-info">1</span>Room &amp; Rates<span class="chevron"></span>
                </li>
                <li data-target="#step2" class="list-inline-item reservation-tab reservation-tab-guestinfo col-md-4">
                    <span class="badge bg-secondary">2</span>Guest info &amp; Payment<span class="chevron"></span>
                </li>
                <li data-target="#step3" class="list-inline-item reservation-tab reservation-tab-confirmation col-md-4">
                    <span class="badge bg-secondary">3</span>Confirmation
                </li>
            </ul>
        </div>

        <div class="step-content">
            <div class="step-pane active" id="step1">
                <!-- Tab 1 -->
                <div class="reservation-single-step-holder room room-default">
                    <form id="sr-checkavailability-form-component" action="/digiinc/index.php/codesk/cape-town" method="GET">
                        <input type="hidden" name="checkin" value="22-07-2024">
                        <input type="hidden" name="checkout" value="23-07-2024">
                        <input type="hidden" name="Itemid" value="228">
                        <input type="hidden" name="id" value="2">
                        <input type="hidden" name="view" value="reservationasset">
                        <input type="hidden" name="option" value="com_solidres">
                        <input type="hidden" name="ts" value="">
                        <input type="hidden" name="f69c572ce30de069587b7afcdd374a6a" value="1">
                    </form>
                    <form enctype="multipart/form-data" id="sr-reservation-form-room" class="sr-reservation-form" action="https://radapps.co.za/digiinc/index.php?option=com_solidres&amp;task=reservation.process&amp;step=room&amp;format=json" method="POST" novalidate="novalidate">
                        <div class="even room_type_row px-3 py-3" id="room_type_row_2">
                            <h4 class="roomtype_name" id="srt_2">
                                <span class="badge bg-secondary">
                                    1 <i class="fa fa-user"></i>
                                </span> Cape Town Shared Workspace Desk													                            </h4>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                
<div id="carousel2" class="carousel slide " data-bs-ride="carousel">
<div class="carousel-inner">
        <div class="carousel-item active">
                    <a class="sr-photo-2 cboxElement" href="https://radapps.co.za/digiinc/media/com_solidres/assets/images/system/shared desk.jpg">
                        <img src="https://radapps.co.za/digiinc/media/com_solidres/assets/images/system/thumbnails/shared desk_310x250.jpg" alt="Cape Town Shared Workspace Desk">

                    </a>
                </div>
        </div>


</div>                                </div>

                            <div class="col-md-8">
                                <div class="roomtype_desc">
                                                                        </div>
                                
<button type="button" class="btn btn-secondary btn-sm toggle_more_desc" data-target="2">
    <i class="fa fa-eye"></i>
    More info    </button>

<button type="button" data-roomtypeid="2" class="btn btn-secondary btn-sm load-calendar">
    <i class="fa fa-calendar"></i> View calendar    </button>



                                <div class="unstyled more_desc" id="more_desc_2" style="display: none">
                                                                        </div>
                            </div>
                        </div>

                                                        <div class="availability-calendar" id="availability-calendar-2" style="display: none">
                            </div>
                        
                        <div id="tariff-holder-2" class="px-2" style="">

<div class="row">
<div id="tariff-box-2-2" data-targetcolor="FF981D" class="col-md-12 tariff-box ">
    <div class="row">
        <div class="col-md-5 tariff-title-desc">
            <strong>1 Desk</strong>
            <p>Single desk in shared workspace</p>
        </div>
        <div class="col-md-4 tariff-value ">
            <span class="starting_from">Starting from</span><span class="min_tariff">ZAR50.00</span><span class="tariff_suffix">/ room / 1 day</span>            </div>
                        <div class="col-md-3">
                <div class="inner d-grid gap-2">
                    <button class="btn btn-secondary btn-block trigger_checkinoutform" type="button" data-roomtypeid="2" data-itemid="228" data-assetid="2" data-tariffid="2">Select</button>
                </div>
            </div>
                </div>

    <!-- check in form -->
    <div class="row">
        <div class="col-md-12 checkinoutform" id="checkinoutform-2-2" style="display: none">

        </div>
    </div>
    <!-- /check in form -->

    <div class="row">
        <div class="col-md-12 room-form room-form-2-2" id="room-form-2-2" style="display: none">

        </div>
    </div>
</div> <!-- end of span12 -->
</div>
<!-- end of row-fluid -->
</div>
                    </div>
                    
            <input type="hidden" name="jform[raid]" value="2">
            <input type="hidden" name="jform[next_step]" value="guestinfo">
            <input type="hidden" name="jform[return]" value="aHR0cHM6Ly9yYWRhcHBzLmNvLnphL2RpZ2lpbmMvaW5kZXgucGhwL2NvZGVzay9jYXBlLXRvd24=">

            <input type="hidden" name="f69c572ce30de069587b7afcdd374a6a" value="1">            </form>
    </div>
    <!-- /Tab 1 -->

</div>

<div class="step-pane" id="step2">
    <!-- Tab 2 -->
    <div class="reservation-single-step-holder guestinfo nodisplay" id="guestinfo"></div>
    <!-- /Tab 2 -->
</div>

<div class="step-pane" id="step3">
    <!-- Tab 3 -->
    <div class="reservation-single-step-holder confirmation nodisplay"></div>
    <!-- /Tab 3 -->
</div>

</div>            </div>
    </div>

            <div class="row">
        <div class="col-md-12">
            
        </div>
    </div>


</main>
</div>
                                        </div>
            </div>
                    
</section>
<footer id="sp-footer">

                    <div class="container">
            <div class="container-inner">
        

<div class="row">
<div id="sp-footer1" class="col-lg-6 "><div class="sp-column "><span class="sp-copyright">© 2024 Digi.Inc. Developed by Siyakha Digital (Pty) Ltd, and its affiliates | All rights reserved</span></div></div><div id="sp-footer2" class="col-lg-6 "><div class="sp-column "><div class="sp-module "><div class="sp-module-content"><ul class="menu">
<li class="item-158"><a href="/digiinc/index.php/terms-of-service">Terms of Service</a></li><li class="item-159"><a href="/digiinc/index.php/privacy-policy">Privacy Policy</a></li></ul>
</div></div></div></div></div>
                        </div>
        </div>
        
</footer>			</div>