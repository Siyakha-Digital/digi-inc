@extends('layouts.app')

@section('content')
<div class="body-wrapper">
    <div class="body-innerwrapper">
        <div class="sticky-header-placeholder" style="height: 80px;"></div>
        <header id="sp-header" class="header-sticky">
            <div class="container">
                <div class="container-inner">
                    <div class="row" style="position: relative;">
                        <!-- Logo -->
                        <div id="sp-logo" class="col-auto">
                            <div class="sp-column">
                                <div class="logo">
                                    <a href="/digiinc/">
                                        <img class="logo-image d-none d-lg-inline-block" srcset="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png 1x, https://radapps.co.za/digiinc/images/digi-inc-logo-01.png 2x" src="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png" height="60px" alt="My Joomla">
                                        <img class="logo-image-phone d-inline-block d-lg-none" src="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png" alt="My Joomla">
                                    </a>
                </div>
            </div>
        </header>              
        <section id="sp-section-1">
            <div class="row">
                <div id="sp-title" class="col-lg-12">
                    <div class="sp-column"></div>
                </div>
            </div>              
        </section>
        <section id="sp-main-body">
            <div class="container">
                <div class="container-inner">
                    <div class="row">
                        <main id="sp-component" class="col-lg-12">
                            <div class="sp-column">
                                <div id="system-message-container" aria-live="polite">
                                </div>
                            </div>
                            <div class="user-review">
    <ul class="review-lists">
    <li>
    <div class="review-wrap">
    <div>
    <div class="review-user-info">
    <div class="review-img">
    <img src="assets/img/user/user-01.jpg" alt="img">
    </div>
    <div class="reviewer-info">
    <div class="reviewer-loc">
    <h6><a href="javascript:void(0);">Cape Town Shared Space</a></h6>
    </div>
    <div class="reviewer-rating">
    <div class="star-rate">
    <span class="ratings">
    <i class="fa-solid fa-star filled"></i>
    <i class="fa-solid fa-star filled"></i>
    <i class="fa-solid fa-star filled"></i>
    <i class="fa-solid fa-star filled"></i>
    <i class="fa-solid fa-star filled"></i>
    </span>
    <span class="rating-count">5.0 </span>
    </div>
    <p>2 days ago</p>
    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="address_1 reservation_asset_subinfo">
                                                1 long street, Cape Town, South Africa
                                                <a class="show_map cboxElement" href="/digiinc/index.php/codesk/cape-town?task=map.show">
                                                    Show map
                                                </a>
                                            </span>
                            
                                            <span class="social_network reservation_asset_subinfo clearfix">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <style>
                                .rating-wrapper .rating {
                                    color: yellow;
                                }
                            </style>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-info sr-login-form">
                                        <i class="fa fa-sign-in"></i> Are you a member? If yes please <a id="toggle_login_form" href="javascript:void(0)"></a><a href="register.html">click here to login</a>.
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <a id="book-form"></a>
                                    <div class="wizard wizard-default">
                                        <ul class="steps">
                                            <li data-target="#step1" class="list-inline-item active reservation-tab reservation-tab-room">
                                                <span class="badge bg-secondary">1</span> Room &amp; Rates <span class="chevron">›</span>
                                            </li>
                                            <li data-target="#step2" class="list-inline-item reservation-tab reservation-tab-guestinfo">
                                                <span class="badge bg-secondary">2</span> Guest info &amp; Payment <span class="chevron">›</span>
                                            </li>
                                            <li data-target="#step3" class="list-inline-item reservation-tab reservation-tab-confirmation">
                                                <span class="badge bg-secondary">3</span> Confirmation
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
                                                            </span>
                                                            Cape Town Shared Workspace Desk
                                                        </h4>
                            
                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
                                                                    <div class="carousel-inner">
                                                                        <div class="carousel-item active">
                                                                            <a class="sr-photo-2 cboxElement" href="https://radapps.co.za/digiinc/media/com_solidres/assets/images/system/shared desk.jpg">
                                                                                <img src="https://radapps.co.za/digiinc/media/com_solidres/assets/images/system/thumbnails/shared desk_310x250.jpg" alt="Cape Town Shared Workspace Desk">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                            
                                                            <div class="col-md-8">
                                                                <div class="roomtype_desc">
                                                                </div>
                                                                
                                                                <button type="button" class="btn btn-secondary btn-sm toggle_more_desc" data-target="2">
                                                                    <i class="fa fa-eye"></i> More info
                                                                </button>
                            
                                                                <button type="button" data-roomtypeid="2" class="btn btn-secondary btn-sm load-calendar">
                                                                    <i class="fa fa-calendar"></i> View calendar
                                                                </button>
                            
                                                                <div class="unstyled more_desc" id="more_desc_2" style="display: none">
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <div class="availability-calendar" id="availability-calendar-2" style="display: none">
                                                        </div>
                            
                                                        <div id="tariff-holder-2" class="px-2">
                                                            <div class="row">
                                                                <div id="tariff-box-2-2" data-targetcolor="FF981D" class="col-md-12 tariff-box">
                                                                    <div class="row">
                                                                        <div class="col-md-5 tariff-title-desc">
                                                                            <strong>1 Desk</strong>
                                                                            <p>Single desk in shared workspace</p>
                                                                        </div>
                                                                        <div class="col-md-4 tariff-value">
                                                                            <span class="starting_from">Starting from</span>
                                                                            <span class="min_tariff">ZAR50.00</span>
                                                                            <span class="tariff_suffix">/ room / 1 day</span>
                                                                        </div>
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
                                                                </div>
                                                            </div>
   <!-- Main Content Wrapper -->
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <!-- Reservation Form -->
            <form enctype="multipart/form-data" id="sr-reservation-form-room" class="sr-reservation-form" action="https://radapps.co.za/digiinc/index.php?option=com_solidres&amp;task=reservation.process&amp;step=room&amp;format=json" method="POST" novalidate="novalidate">

                <input type="hidden" name="jform[raid]" value="2">
                <input type="hidden" name="jform[next_step]" value="guestinfo">
                <input type="hidden" name="jform[return]" value="aHR0cHM6Ly9yYWRhcHBzLmNvLnphL2RpZ2lpbmMvaW5kZXgucGhwL2NvZGVzay9jYXBlLXRvd24=">
                <input type="hidden" name="f69c572ce30de069587b7afcdd374a6a" value="1">

                <!-- Step 1: Room & Rates -->
                <div class="step-pane active" id="step1">
                    <div class="reservation-single-step-holder room room-default">
                        <!-- Content for Step 1 -->
                    </div>
                </div>
                <!-- End of Step 1 -->

                <!-- Step 2: Guest Info & Payment -->
                <div class="step-pane" id="step2">
                    <div class="reservation-single-step-holder guestinfo nodisplay" id="guestinfo">
                        <!-- Content for Step 2 -->
                    </div>
                </div>
                <!-- End of Step 2 -->

                <!-- Step 3: Confirmation -->
                <div class="step-pane" id="step3">
                    <div class="reservation-single-step-holder confirmation nodisplay">
                        <!-- Content for Step 3 -->
                    </div>
                </div>
                <!-- End of Step 3 -->

            </form>
            <!-- End of Reservation Form -->

        </div> <!-- End of col-md-12 -->
    </div> <!-- End of row -->
</div> <!-- End of container -->

<!-- Footer -->
<footer id="sp-footer">
    <div class="container">
        <div class="container-inner">
            <div class="row">
                <div id="sp-footer1" class="col-lg-6">
                    <div class="sp-column">
                        <span class="sp-copyright">© 2024 Digi.Inc. Developed by Siyakha Digital (Pty) Ltd, and its affiliates | All rights reserved</span>
                    </div>
                </div>
                <div id="sp-footer2" class="col-lg-6">
                    <div class="sp-column">
                        <div class="sp-module">
                            <div class="sp-module-content">
                                <ul class="menu">
                                    <li class="item-158"><a href="/digiinc/index.php/terms-of-service">Terms of Service</a></li>
                                    <li class="item-159"><a href="/digiinc/index.php/privacy-policy">Privacy Policy</a></li>
                                </ul>
                            </div>
        </div> 
    </div> 
</footer> 
</section>
</div>
</div>
@endsection                                      
                            
        
