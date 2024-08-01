@extends('layouts.app')

@section('content')
<<<<<<< HEAD
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
                            </div><div id="solidres" class="bs5 reservation_asset_default">
                                <div class="reservation_asset_item clearfix">
                                    <div class="row">
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
                                        <div class="col-md-3">
                                        </div>
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
                                        <i class="fa fa-sign-in"></i> Are you a member? If yes please <a id="toggle_login_form" href="javascript:void(0)">click here to login</a>.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <a id="book-form"></a>
                                    <div class="wizard wizard-default">
                                        <ul class="steps">
                                            <li data-target="#step1" class="list-inline-item active reservation-tab reservation-tab-room">
                                                <span class="badge badge-info">1</span> Room &amp; Rates <span class="chevron">›</span>
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
                                                     
                            
        
=======
<div class="page-content" style="transform: none;">
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">

            <div class="col-lg-4 col-xl-3 theiaStickySidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                    <div class="user-sidebar">
                        <div class="user-head">
                            <span class="flex-shrink-0">
                                <img src="https://dreamgigs.dreamstechnologies.com/html/template/assets/img/blog/blog-large-01.jpg" class="img-fluid" alt="img">
                            </span>
                            <div class="user-information">
                                <div>
                                    <h6>Cape Town Shared Workspace Desk</h6>
                                    <!-- <ul>
                                        <li>USA</li>
                                        <li><i class="fa-solid fa-star"></i> 5.0 (45)</li>
                                    </ul> -->
                                </div>
                                <a href="user-profile.html" class="user-edit"><i class="fa-solid fa-user-pen"></i></a>
                            </div>
                        </div>
                        <div class="user-body">
                        <ul>
    <li>
        <a href="user-dashboard.html">
            <span style="font-weight: bold; margin-right: 10px;">1</span> Room & Rates
        </a>
    </li>
    <li>
        <a href="user-gigs.html">
            <span style="font-weight: bold; margin-right: 10px;">2</span> Guest Info & Payment
        </a>
    </li>
    <li>
        <a href="user-gigs.html">
            <span style="font-weight: bold; margin-right: 10px;">3</span> Confirm
        </a>
    </li>
</ul>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-9 col-lg-8">
                <div class="dashboard-header">
                    <div class="main-title">
                        <h3>1 Desk</h3>
                        <div id="tableinfo">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Single desk in shared Workspace</div>
                        </div>
                    </div>
                    <div class="head-info">
                        <p>Starting from ZAR50.00 / room / 1 day <span class="text-primary">(17)</span></p>
                        <div class="form-group mb-0">
<button type="submit" class="btn btn-primary">Select</button>
</div>
                    </div>
                </div>
                <div class="table-filter">
                    <ul class="filter-item">
                        <li>
                            <p>Calender</p>
                        </li>
                        <li>
                            <div class="form-sort form-wrap">
                                <span class="form-icon">
                                    <img src="assets/img/icons/calendar-icon.svg" alt="icon">
                                </span>
                                <input type="text" class="form-control datetimepicker" placeholder="From Date">
                            </div>
                        </li>
                        <li>
                            <div class="form-sort form-wrap">
                                <span class="form-icon">
                                    <img src="assets/img/icons/calendar-icon.svg" alt="icon">
                                </span>
                                <input type="text" class="form-control datetimepicker" placeholder="To Date">
                            </div>
                        </li>
                        <li>
                            <!-- <div class="form-sort form-wrap">
                                <span class="form-icon">
                                    <img src="assets/img/icons/status-icon.svg" alt="icon">
                                </span>
                                <!-- <select class="select select2-hidden-accessible" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="6">By Status</option>
                                    <option>New</option>
                                    <option>Pending</option>
                                    <option>Processing</option>
                                </select> -->
                                <!-- <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-24r7-container">
                                            <span class="select2-selection__rendered" id="select2-24r7-container" role="textbox" aria-readonly="true" title="By Status">By Status</span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                </span> -->
                            <!-- </div> --> -->
                        </li>
                        <li>
                            <!-- <div class="form-sort form-wrap">
                                <span class="form-icon">
                                    <img src="assets/img/icons/user-heart.svg" alt="icon">
                                </span>
                                <select class="select select2-hidden-accessible" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="9">Seller</option>
                                    <option>Jones</option>
                                    <option>Andrea</option>
                                    <option>Martin</option>
                                </select>
                                <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 100%;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-0c7n-container">
                                            <span class="select2-selection__rendered" id="select2-0c7n-container" role="textbox" aria-readonly="true" title="Seller">Seller</span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                </span>
                            </div> -->
                        </li>
                    </ul>
                    <!-- <div id="tablefilter">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                            <label>
                                <input type="search" class="form-control form-control-sm" placeholder="Search" aria-controls="DataTables_Table_0">
                            </label>
                        </div>
                    </div> -->
                </div>
                <div class="table-responsive custom-table">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                            <div class="blog-detail-img">
<img src="	https://dreamgigs.dreamstechnologies.com/html/template/assets/img/blog/blog-large-01.jpg" class="img-fluid" alt="img">
</div>
                                <!-- <table class="table table-striped datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead class="thead-light">
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 33.1406px;">ID</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 186.234px;">Title</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 88.7656px;">Delivery On</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 80.4688px;">Seller</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 66.1094px;">Feedback</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 49.6094px;">Cancel</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 53.4062px;">Amount</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 59.3594px;">Payment</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 96.5938px;">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td>#145</td>
                                            <td class="text-dark">Designing and developing...</td>
                                            <td>22 May 2023</td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="user-profile.html" class="avatar">
                                                        <img src="assets/img/user/user-01.jpg" alt="User Image">
                                                    </a>
                                                    <a href="user-profile.html">Jones</a>
                                                </h2>
                                            </td>
                                            <td>Pending</td>
                                            <td>
                                                <a href="#" class="cancel" data-bs-toggle="modal" data-bs-target="#cancel-order"><i class="fa-solid fa-xmark"></i></a>
                                            </td>
                                            <td>+3.5k</td>
                                            <td><span class="pending">Pending</span></td>
                                            <td><span class="badge bg-info-light">Delivered</span></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>#124</td>
                                            <td class="text-dark">Designing and developing...</td>
                                            <td>15 Apr 2023</td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="user-profile.html" class="avatar">
                                                        <img src="assets/img/user/user-02.jpg" alt="User Image">
                                                    </a>
                                                    <a href="user-profile.html">Jones</a>
                                                </h2>
                                            </td>
                                            <td>Pending</td>
                                            <td>
                                                <a href="#" class="cancel" data-bs-toggle="modal" data-bs-target="#cancel-order"><i class="fa-solid fa-xmark"></i></a>
                                            </td>
                                            <td>+2.0k</td>
                                            <td><span class="pending">Pending</span></td>
                                            <td><span class="badge bg-info-light">Delivered</span></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>#153</td>
                                            <td class="text-dark">Designing and developing...</td>
                                            <td>22 May 2023</td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="user-profile.html" class="avatar">
                                                        <img src="assets/img/user/user-01.jpg" alt="User Image">
                                                    </a>
                                                    <a href="user-profile.html">Jones</a>
                                                </h2>
                                            </td>
                                            <td>Pending</td>
                                            <td>
                                                <a href="#" class="cancel" data-bs-toggle="modal" data-bs-target="#cancel-order"><i class="fa-solid fa-xmark"></i></a>
                                            </td>
                                            <td>+3.5k</td>
                                            <td><span class="pending">Pending</span></td>
                                            <td><span class="badge bg-info-light">Delivered</span></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>#136</td>
                                            <td class="text-dark">Designing and developing...</td>
                                            <td>15 Apr 2023</td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="user-profile.html" class="avatar">
                                                        <img src="assets/img/user/user-02.jpg" alt="User Image">
                                                    </a>
                                                    <a href="user-profile.html">Jones</a>
                                                </h2>
                                            </td>
                                            <td>Pending</td>
                                            <td>
                                                <a href="#" class="cancel" data-bs-toggle="modal" data-bs-target="#cancel-order"><i class="fa-solid fa-xmark"></i></a>
                                            </td>
                                            <td>+2.0k</td>
                                            <td><span class="pending">Pending</span></td>
                                            <td><span class="badge bg-info-light">Delivered</span></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>#115</td>
                                            <td class="text-dark">Designing and developing...</td>
                                            <td>22 May 2023</td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="user-profile.html" class="avatar">
                                                        <img src="assets/img/user/user-01.jpg" alt="User Image">
                                                    </a>
                                                    <a href="user-profile.html">Jones</a>
                                                </h2>
                                            </td>
                                            <td>Pending</td>
                                            <td>
                                                <a href="#" class="cancel" data-bs-toggle="modal" data-bs-target="#cancel-order"><i class="fa-solid fa-xmark"></i></a>
                                            </td>
                                            <td>+3.5k</td>
                                            <td><span class="pending">Pending</span></td>
                                            <td><span class="badge bg-info-light">Delivered</span></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>#109</td>
                                            <td class="text-dark">Designing and developing...</td>
                                            <td>15 Apr 2023</td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="user-profile.html" class="avatar">
                                                        <img src="assets/img/user/user-02.jpg" alt="User Image">
                                                    </a>
                                                    <a href="user-profile.html">Jones</a>
                                                </h2>
                                            </td>
                                            <td>Pending</td>
                                            <td>
                                                <a href="#" class="cancel" data-bs-toggle="modal" data-bs-target="#cancel-order"><i class="fa-solid fa-xmark"></i></a>
                                            </td>
                                            <td>+2.0k</td>
                                            <td><span class="pending">Pending</span></td>
                                            <td><span class="badge bg-info-light">Delivered</span></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>#158</td>
                                            <td class="text-dark">Designing and developing...</td>
                                            <td>22 May 2023</td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="user-profile.html" class="avatar">
                                                        <img src="assets/img/user/user-01.jpg" alt="User Image">
                                                    </a>
                                                    <a href="user-profile.html">Jones</a>
                                                </h2>
                                            </td>
                                            <td>Pending</td>
                                            <td>
                                                <a href="#" class="cancel" data-bs-toggle="modal" data-bs-target="#cancel-order"><i class="fa-solid fa-xmark"></i></a>
                                            </td>
                                            <td>+3.5k</td>
                                            <td><span class="pending">Pending</span></td>
                                            <td><span class="badge bg-info-light">Delivered</span></td>
                                        </tr>
                                    </tbody>
                                </table> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <!-- <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 7 of 7 entries</div> -->
                            </div>
                            <!-- <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                        </li>
                                        <li class="paginate_button page-item active">
                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                        </li>
                                        <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="pagination-box">
                        <nav class="page-navigation">
                            <!-- <ul class="pagination">
                                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul> -->
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
>>>>>>> karaboMolepo
