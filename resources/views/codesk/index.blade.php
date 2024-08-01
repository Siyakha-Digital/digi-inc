@extends('layouts.app')

@section('content')
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
