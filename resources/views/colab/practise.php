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
                                        <img class="logo-image d-none d-lg-inline-block" src="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png" height="60px" alt="Digi Inc Logo">
                                        <img class="logo-image-phone d-inline-block d-lg-none" src="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png" alt="Digi Inc Logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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

        <link rel="stylesheet" href="css/styles.css">
        <style>
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                color: #333;
                background-color: #fff;
            }

            header, footer {
                background-color: #000; /* Black */
                color: #fff; /* White */
                padding: 15px 20px;
                text-align: center;
            }

            .logo img {
                width: 150px;
            }

            nav button {
                margin: 0 5px;
                padding: 8px 16px;
                border: none;
                border-radius: 5px;
                background-color: #000; /* Black */
                color: #fff; /* White */
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            nav button:hover {
                background-color: #333; /* Darker Gray */
            }

            .hero {
                text-align: center;
                background: linear-gradient(to right, #000, #333); /* Black to Gray Gradient */
                color: white;
                padding: 60px 20px;
                border-radius: 0 0 15px 15px;
            }

            .hero h1 {
                font-size: 2.5rem;
                margin-bottom: 20px;
            }

            .hero p {
                font-size: 1.2rem;
                margin-bottom: 30px;
            }

            .hero button {
                background-color: #fff;
                color: #000; /* Black */
                border: none;
                padding: 10px 20px;
                font-size: 1rem;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .hero button:hover {
                background-color: #e6e6e6; /* Light Gray */
            }

            .login-form {
                max-width: 500px;
                margin: 40px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .login-form h2 {
                text-align: center;
                margin-bottom: 20px;
                color: #000; /* Black */
            }

            .login-form input, .login-form button {
                display: block;
                width: calc(100% - 20px);
                margin: 10px auto;
                padding: 12px;
                border-radius: 5px;
                border: 1px solid #ccc;
                font-size: 1rem;
            }

            .login-form input:focus {
                border-color: #000; /* Black */
                outline: none;
            }

            .login-form button {
                background-color: #000; /* Black */
                color: white;
                border: none;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .login-form button:hover {
                background-color: #333; /* Darker Gray */
            }

            .login-form div {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .login-form a {
                color: #000; /* Black */
                text-decoration: none;
                font-size: 0.9rem;
            }

            .login-form a:hover {
                text-decoration: underline;
            }

            .events {
                max-width: 900px;
                margin: 40px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .events h2 {
                color: #000; /* Black */
                font-size: 2rem;
                margin-bottom: 15px;
            }

            .events p {
                font-size: 1rem;
                line-height: 1.6;
                margin-bottom: 15px;
            }

            .events img {
                width: 100%;
                border-radius: 8px;
                margin-bottom: 15px;
            }

            .events .details {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                margin-bottom: 20px;
            }

            .events .details div {
                flex: 1;
                min-width: 200px;
                background-color: #000; /* Black */
                color: white;
                padding: 10px;
                border-radius: 8px;
            }

            .events .details div h4 {
                margin: 0;
                font-size: 1.2rem;
            }
        </style>

        <div class="joms-body">
            <div class="joms-sidebar"></div>

            <div class="joms-main-content">
                <div class="joms-tab-bar">
                    <a href="#joms-app--129" class="active">JS Members</a>
                </div>

                <div id="joms-app--129" class="joms-tab-content">
                    <div class="joms-module">
                        <div class="joms-member-module">
                            <div class="joms-gap"></div>
                            <ul class="joms-list-thumbnail">
                                <!-- Member Thumbnails -->
                                <li class="joms-list-item">
                                    <a href="/digiinc/index.php/cowork/profile/edit-profile/119-siyabonga" class="joms-avatar">
                                        <img src="https://radapps.co.za/digiinc/images/avatar/thumb_3fdff448767f45551b3a2996.jpg" alt="Siyabonga" title="Siyabonga">
                                    </a>
                                </li>
                                <!-- Repeat other list items -->
                            </ul>
                            <div class="joms-gap"></div>
                            <a href="/digiinc/index.php/colab/search/browse" class="joms-view-all">
                                <small>View All (17)</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
    <div class="joms-tab__bar">
        <a class="active" href="#joms-app--136">JS Photos</a>
        <a href="#joms-app--142">JS Videos</a>
    </div>

    <div id="joms-app--136" class="joms-tab__content active">
        <div class="joms-module">
            <ul class="joms-list--thumbnail">
                <li class="joms-list__item">
                    <a href="javascript:void(0);" onclick="joms.api.photoOpen('40', '6');">
                        <img title="Uploaded by Siyabonga" src="https://radapps.co.za/digiinc/images/avatar/thumb_a45a72dd30f336eed66ded609c40aa18.jpg" alt="Siyabonga">
                    </a>
                </li>
                <li class="joms-list__item">
                    <a href="javascript:void(0);" onclick="joms.api.photoOpen('32', '5');">
                        <img title="Uploaded by Flamingo" src="https://radapps.co.za/digiinc/images/avatar/thumb_7afd0eceea70c74f9c75fb4a950b98fd.png" alt="Flamingo">
                    </a>
                </li>
                <li class="joms-list__item">
                    <a href="javascript:void(0);" onclick="joms.api.photoOpen('29', '4');">
                        <img title="Uploaded by Zero" src="https://radapps.co.za/digiinc/images/avatar/thumb_910a7762056ff0a32502045b33641ebd.jpg" alt="Zero">
                    </a>
                </li>
                <li class="joms-list__item">
                    <a href="javascript:void(0);" onclick="joms.api.photoOpen('20', '3');">
                        <img title="Uploaded by Kamogelo Ngwenya" src="https://radapps.co.za/digiinc/images/avatar/thumb_d8b16c807d47ef139802a298f7658ce9.jpg" alt="Kamogelo Ngwenya">
                    </a>
                </li>
                <li class="joms-list__item">
                    <a href="javascript:void(0);" onclick="joms.api.photoOpen('10', '2');">
                        <img title="Uploaded by Mathapelo" src="https://radapps.co.za/digiinc/images/avatar/thumb_0ff8dc39d41e9ed2eff5f04941374840.png" alt="Mathapelo">
                    </a>
                </li>
                <li class="joms-list__item">
                    <a href="javascript:void(0);" onclick="joms.api.photoOpen('2', '1');">
                        <img title="Uploaded by Taks the Dev" src="https://radapps.co.za/digiinc/images/avatar/thumb_a0f6fb3384b99f1f835911df865ac010.png" alt="Taks the Dev">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div id="joms-app--142" class="joms-tab__content">
        <div class="joms-module">
            <div class="joms-blankslate">No public videos available.</div>
            <a href="/digiinc/index.php/colab/videos" class="joms-button--link">
                <small>View all videos</small>
            </a>
        </div>
    </div>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    .container {
        max-width: 800px;
        margin: auto;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .joms-tab__bar {
        display: flex;
        background: #333;
        color: #fff;
    }

    .joms-tab__bar a {
        flex: 1;
        padding: 15px;
        text-align: center;
        text-decoration: none;
        color: #fff;
        transition: background 0.3s;
    }

    .joms-tab__bar a:hover,
    .joms-tab__bar a.active {
        background: #555;
    }

    .joms-tab__content {
        display: none;
        padding: 20px;
    }

    .joms-tab__content.active {
        display: block;
    }

    .joms-blankslate {
        color: #888;
        text-align: center;
        margin-top: 20px;
    }

    .joms-button--link {
        display: inline-block;
        margin-top: 10px;
        color: #333;
        text-decoration: none;
        border: 1px solid #333;
        padding: 5px 10px;
        border-radius: 4px;
        transition: background 0.3s, color 0.3s;
    }

    .joms-button--link:hover {
        background: #333;
        color: #fff;
    }

    .joms-list--thumbnail {
        list-style: none;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
    }

    .joms-list__item {
        margin: 10px;
        width: calc(33.333% - 20px);
    }

    .joms-list__item img {
        max-width: 100%;
        border-radius: 8px;
        transition: transform 0.3s;
    }

    .joms-list__item img:hover {
        transform: scale(1.05);
    }
</style>

<script>
    document.querySelectorAll('.joms-tab__bar a').forEach(tab => {
        tab.addEventListener('click', function(event) {
            event.preventDefault();
            document.querySelectorAll('.joms-tab__bar a').forEach(link => link.classList.remove('active'));
            document.querySelectorAll('.joms-tab__content').forEach(content => content.classList.remove('active'));
            
            this.classList.add('active');
            document.querySelector(this.getAttribute('href')).classList.add('active');
        });
    });
</script>

<section class="events">
    <h2>Women in Tech Experience 2023</h2>
    <img src="https://radapps.co.za/digiinc/components/com_community/assets/cover-event.png" alt="Women in Tech Experience 2023">
    <p>This year, the unique event calls on women from all corners of the tech world to unite and join the SHEvolution movement.</p>
    <div class="details">
        <div>
            <h4>Date</h4>
            <p>18 October 2023</p>
        </div>
        <div>
            <h4>Location</h4>
            <p>Johannesburg, South Africa</p>
        </div>
    </div>
    <p>Join us for an inspiring event that brings together women in tech to share their experiences, network, and empower each other.</p>
    <section>

<style>
    .container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .joms-stream__header, .joms-stream__body, .joms-stream__actions, .joms-stream__status {
        margin-bottom: 20px;
    }
    .joms-avatar--stream {
        display: inline-block;
        vertical-align: top;
    }
    .joms-avatar--stream img {
        border-radius: 50%;
        width: 50px;
        height: 50px;
    }
    .joms-stream__meta {
        display: inline-block;
        margin-left: 10px;
        vertical-align: top;
    }
    .joms-stream__meta a {
        text-decoration: none;
        color: #333;
    }
    .joms-stream__body h4 {
        margin: 10px 0;
    }
    .joms-list__item {
        list-style: none;
        margin: 5px 0;
    }
    .joms-icon {
        width: 16px;
        height: 16px;
        vertical-align: middle;
        margin-right: 5px;
    }
    .joms-reactions__list {
        display: inline-block;
        padding: 0;
        margin: 0;
    }
    .joms-reactions__item {
        display: inline-block;
        margin-right: 5px;
        cursor: pointer;
    }
    .joms-comment {
        border-top: 1px solid #ddd;
        padding-top: 10px;
    }
</style>

<div class="container">
    <div class="joms-stream__header">
        <div class="joms-avatar--stream">
            <a href="/digiinc/index.php/cowork/profile/edit-profile/103-administrator">
                <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" alt="Digi Inc">
            </a>
        </div>
        <div class="joms-stream__meta">
            <a href="/digiinc/index.php/cowork/profile/edit-profile/103-administrator" class="joms-stream__user">Digi Inc</a>
            added a new event
            <span class="joms-stream__time"><small>10 months ago</small></span>
        </div>
    </div>
    <div class="joms-stream__body">
        <div class="joms-media">
            <h4 class="joms-text--title"><a href="/digiinc/index.php/colab/events/viewevent/1-women-in-tech-experience-2023">Women in Tech Experience 2023</a></h4>
            <p>This year, the unique event calls on women from all corners of the tech world to unite and join the SHEvolution movement, envisioning a world where...</p>
            <ul class="joms-list">
                <li class="joms-list__item">
                    <svg viewBox="0 0 16 18" class="joms-icon">
                        <use xlink:href="#joms-icon-calendar"></use>
                    </svg>
                    Wednesday, 18 October 2023 09:00 AM
                </li>
                <li class="joms-list__item">
                    <svg viewBox="0 0 16 16" class="joms-icon">
                        <use xlink:href="#joms-icon-location"></use>
                    </svg>
                    Johannesburg, South Africa
                </li>
            </ul>
        </div>
    </div>
    <div class="joms-stream__actions"></div>
    <div class="joms-stream__status">
        <div class="joms-stream__reactions">
            <ul class="joms-reactions__list">
                <li style="z-index: 100;">
                    <div class="joms-reactions__item reaction-like" title="1 people" data-count="1" data-reactid="1" data-uid="1">
                        👍
                    </div>
                </li>
            </ul>
            <a class="joms-stream__reactions-text" href="#">
                Taks the Dev
            </a>
        </div>
    </div>
    <div class="joms-comment joms-js--comments joms-js--comments-6" data-id="6"></div>
</div> 
</section>

<div class="blog-pagination">
<div class="row">
<div class="col-sm-6">
<div class="page-previous page-link">
<a href="#"><i class="feather-chevron-left"></i>Previous Post</a>
<p>The Future of Remote Work: Trends and Predictions</p>
</div>
</div>
<div class="col-sm-6 text-sm-end">
<div class="page-next page-link">
<a href="#" class="justify-content-sm-end">Next Post<i class="feather-chevron-right"></i></a>
<p>Top 10 In-Demand Skills in the Gig Economy for 2024</p>
</div>
</div>
</div>
</div>
<div class="review-widget">
    <div class="review-title sort-search-gigs">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h3>Discussion Forum (10)</h3>
            </div>
            <div class="col-sm-6">
                <div class="search-filter-selected">
                    <div class="form-group mb-0">
                        <span class="sort-text">Sort By</span>
                        <select class="select">
                            <option>Recommended</option>
                            <option>Date</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="review-lists">
        <li>
            <div class="review-wrap">
                <div class="review-content">
                    <p>Taks the Dev is friends with Mathapelo</p>
                </div>
            </div>
        </li>
        <li>
            <div class="review-wrap">
                <div class="review-content">
                    <p>Taks the Dev <br> 10 months ago <br> I need help editing pictures.</p>
                </div>
            </div>
        </li>
        <li>
            <div class="review-wrap">
                <div class="review-content">
                    <p>Taks the Dev <br> 10 months ago <br> I need help with include(); function. It's not returning the correct values</p>
                </div>
            </div>
        </li>
        <li>
            <div class="review-wrap">
                <div class="review-content">
                    <p>Digi Inc <br> 10 months ago <br> Have you tried clearing the cache?</p>
                </div>
            </div>
        </li>
        <li>
            <div class="review-wrap">
                <div class="review-content">
                    <p>Taks the Dev <br> 10 months ago <br> oh thanks!!!! I'll try just now.</p>
                </div>
            </div>
        </li>
        <li>
            <div class="review-wrap">
                <div class="review-content">
                    <p>Taks the Dev <br> 10 months ago <br> created a new group: PHP Development <br> A discussion group about PHP</p>
                </div>
            </div>
        </li>
        <li>
            <div class="review-wrap">
                <div class="review-content">
                    <p>Taks the Dev <br> 10 months ago <br> I need help with PHP</p>
                </div>
            </div>
        </li>
    </ul>
    <div class="pagination justify-content-center">
        <ul>
            <li>
                <a href="javascript:void(0);" class="previous"><i class="fa-solid fa-chevron-left"></i></a>
            </li>
            <li>
                <a href="javascript:void(0);" class="active">1</a>
            </li>
            <li>
                <a href="javascript:void(0);">2</a>
            </li>
            <li>
                <a href="javascript:void(0);">3</a>
            </li>
            <li>
                <a href="javascript:void(0);">4</a>
            </li>
            <li>
                <a href="javascript:void(0);">5</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="next"><i class="fa-solid fa-chevron-right"></i></a>
            </li>
        </ul>
    </div>
</div>

<div class="service-wrap tags-widget">
    <h3>Related Tags</h3>
    <ul class="tags">
        <li><a href="javascript:void(0);">PHP Development</a></li>
        <li><a href="javascript:void(0);">Defects on App</a></li>
        <li><a href="javascript:void(0);">Project Management</a></li>
    </ul>
</div>

<div class="comment-section">
    <h3>Leave a Comment</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="form-wrap">
                <input type="text" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-wrap">
                <input type="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-wrap">
                <textarea class="form-control" rows="5" placeholder="Enter Your Comments"></textarea>
            </div>
            <div class="form-wrap">
                <label class="custom_check mb-0">Save my name & email in this browser for the next time I comment
                    <input type="checkbox" name="remember">
                    <span class="checkmark"></span>
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>

<div class="relate-post-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Related Posts</h3>
                <div class="relate-slider owl-carousel">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-01.jpg" class="img-fluid" alt="img"></a>
                            <div class="fav-selection">
                                <a href="javascript:void(0);" class="fav-icon"><i class="feather-heart"></i></a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="user-head">
                                <div class="user-info">
                                    <a href="blog-details.html"><img src="assets/img/user/user-06.jpg" alt="img"></a>
                                    <h6><a href>Robert Hollenbeck</a><span>Jan 20, 2024</span></h6>
                                </div>
                                <div class="badge-text">
                                    <a href="javascript:void(0);" class="badge bg-primary-light">Freelancing</a>
                                </div>
                            </div>
                            <div class="blog-title">
                                <h3><a href="blog-details.html">How to Choose the Right Freelancer for Your Project</a></h3>
                            </div>
                            <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                <p><span><i class="feather-clock"></i></span>10 - 15 mins read</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-grid">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-02.jpg" class="img-fluid" alt="img"></a>
                            <div class="fav-selection">
                                <a href="javascript:void(0);" class="fav-icon"><i class="feather-heart"></i></a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="user-head">
                                <div class="user-info">
                                    <a href="javascript:void(0);"><img src="assets/img/user/user-10.jpg" alt="img"></a>
                                    <h6><a href="javascript:void(0);">Abigail Garett</a><span>Jan 21, 2024</span></h6>
                                </div>
                                <div class="badge-text">
                                    <a href="javascript:void(0);" class="badge bg-primary-light">In-Demand Skills</a>
                                </div>
                            </div>
                            <div class="blog-title">
                                <h3><a href="blog-details.html">Top 10 In-Demand Skills in the Gig Economy for 2024</a></h3>
                            </div>
                            <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                <p><span><i class="feather-clock"></i></span>05 - 10 mins read</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-grid">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-03.jpg" class="img-fluid" alt="img"></a>
                            <div class="fav-selection">
                                <a href="javascript:void(0);" class="fav-icon"><i class="feather-heart"></i></a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="user-head">
                                <div class="user-info">
                                    <a href="javascript:void(0);"><img src="assets/img/user/user-11.jpg" alt="img"></a>
                                    <h6><a href="javascript:void(0);">David Shorey</a><span>Jan 23, 2024</span></h6>
                                </div>
                                <div class="badge-text">
                                    <a href class="badge bg-primary-light">User Guide</a>
                                </div>
                            </div>
                            <div class="blog-title">
                                <h3><a href="blog-details.html">Understanding Service Marketplace Fees: A Guide for New Users</a></h3>
                            </div>
                            <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                <p><span><i class="feather-clock"></i></span>10 - 15 mins read</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                </div>
            </div> <!-- Close .row -->
        </div> <!-- Close .container-inner -->
    </div> <!-- Close .container -->
</footer> 

</section> <!-- Close the previous section -->
</div> <!-- Close the previous .container or .wrapper -->
</div> <!-- Close the previous .container or .wrapper -->

@endsection
