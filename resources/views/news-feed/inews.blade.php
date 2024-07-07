@php
    // Example Data
    // Blog Posts
    $posts = [
        [
            'id' => '1',
            'title' => 'The Best Way to Find a Job',
            'img' => 'https://dreamgigs.dreamstechnologies.com/html/template/assets/img/blog/blog-01.jpg',
            'date' => '12th May 2021',
            'category' => 'Entrepreneurship',
        ],
        [
            'id' => '2',
            'title' => 'Aligning to your Industry',
            'img' =>
                'https://radapps.co.za/digiinc/images/Article%20Images/jacques-nel-f0RvpwF-iXE-unsplash-scaled.jpg',
            'date' => '16 October 2023',
            'category' => 'Entrepreneurship',
        ],
        [
            'id' => '3',
            'title' => 'BRICS 2023 South Africa – And Why It Matters for SMMEs',
            'img' => 'https://radapps.co.za/digiinc/images/Article%20Images/6th%20art.jpg',
            'date' => '28 August 2023',
            'category' => 'Entrepreneurship',
        ],
        [
            'id' => '4',
            'title' => 'Working “on” your business: The key to entrepreneurial growth',
            'img' => 'https://radapps.co.za/digiinc/images/Article%20Images/2nd%20art.png',
            'date' => '24 August 2023',
            'category' => 'Entrepreneurship',
        ],
        [
            'id' => '5',
            'title' => 'The right time to grow: A guide for entrepreneurs',
            'img' => 'https://radapps.co.za/digiinc/images/Article%20Images/7th%20art.jpg',
            'date' => '22 August 2023',
            'category' => 'Entrepreneurship',
        ],
        [
            'id' => '6',
            'title' => 'Understanding the distinction: Entrepreneur vs sole proprietor',
            'img' => 'https://radapps.co.za/digiinc/images/Article%20Images/8th%20art.jpg',
            'date' => '21 August 2023',
            'category' => 'Entrepreneurship',
        ],
        // [
        //     'id' => '7',
        //     'title' => 'Moving from the development to excellence phase: A journey towards entrepreneurial success',
        //     'img' => 'https://radapps.co.za/digiinc/images/Article%20Images/9th%20art.jpg',
        //     'date' => '18 August 2023',
        //     'category' => 'Entrepreneurship',
        // ],
        // [
        //     'id' => '8',
        //     'title' => 'Mastering the art of interviewing potential employees: A guide for entrepreneurs',
        //     'img' => 'https://radapps.co.za/digiinc/images/Article%20Images/10th%20art.jpg',
        //     'date' => '16 August 2023',
        //     'category' => 'Management',
        // ],
        // [
        //     'id' => '9',
        //     'title' => 'Recognising the signs: When to know your entrepreneurial journey is over',
        //     'img' => 'https://radapps.co.za/digiinc/images/Article%20Images/11th%20art.jpg',
        //     'date' => '14 August 2023',
        //     'category' => 'Entrepreneurship',
        // ],
        // [
        //     'id' => '10',
        //     'title' => 'Creating an environment for entrepreneurial success: key ingredients for growth',
        //     'img' => 'https://radapps.co.za/digiinc/images/Article%20Images/12th%20art.jpg',
        //     'date' => '13 August 2023',
        //     'category' => 'Entrepreneurship',
        // ],
    ];

    // Blog Categories
    $categories = [
        [
            'id' => '1',
            'name' => 'Entrepreneurship',
            'count' => '12',
        ],
        [
            'id' => '2',
            'name' => 'Funding',
            'count' => '05',
        ],
        [
            'id' => '3',
            'name' => 'Management',
            'count' => '04',
        ],
        [
            'id' => '4',
            'name' => 'Marketing & Sales',
            'count' => '05',
        ],
        [
            'id' => '5',
            'name' => 'Personal Growth',
            'count' => '01',
        ],
        [
            'id' => '6',
            'name' => 'Finance',
            'count' => '08',
        ],
        [
            'id' => '7',
            'name' => 'Customer Service',
            'count' => '02',
        ],
    ];

@endphp

@extends('layouts.app')
@section('content')
    {{-- Page Title Section --}}
    <div class="breadcrumb-bar breadcrumb-bar-info">

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('news-feed') }}">News Feed</a>
                            </li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 4L10 8L6 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <li class="breadcrumb-item" aria-current="page">
                                News
                            </li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title mb-0">
                        News
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- //TODO: Implement filter by cateogory and search bar to search for specific article. 
    See filter template here:  https://dreamgigs.dreamstechnologies.com/html/template/user-purchase.html--}}
    <div class="table-filter" data-select2-id="14">
        <ul class="filter-item" data-select2-id="13">
            <li>
                <p>Filter</p>
            </li>
            <li data-select2-id="27">
                <div class="form-sort form-wrap" data-select2-id="26">
                    <span class="form-icon">
                        <img src="assets/img/icons/status-icon.svg" alt="icon">
                    </span>
                    <select class="select select2-hidden-accessible" data-select2-id="4" tabindex="-1" aria-hidden="true">
                        <option data-select2-id="6">By Category</option>
                        <option data-select2-id="28">New</option>
                        <option data-select2-id="29">Pending</option>
                        <option data-select2-id="30">Processing</option>
                    </select><span class="select2 select2-container select2-container--default select2-container--below"
                        dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                                aria-expanded="false" tabindex="0" aria-disabled="false"
                                aria-labelledby="select2-87ow-container"><span class="select2-selection__rendered"
                                    id="select2-87ow-container" role="textbox" aria-readonly="true" title="By Status">By
                                    Status</span><span class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
            </li>
        </ul>
        <div id="tablefilter">
            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label> <input type="search"
                        class="form-control form-control-sm" placeholder="Search"
                        aria-controls="DataTables_Table_0"></label></div>
        </div>
    </div>

    {{-- Main Content --}}
    <div class="page-content">
        <div class="container">


            <div class="blog">
                <div class="row">


                    {{-- Blog Cards --}}

                    {{-- foreach post --}}
                    @foreach ($posts as $post)
                        <div class="col-lg-6">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <a href="blog-details.html"><img src="{{ $post['img'] }}" alt="img"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="user-head">
                                        <div class="user-info">
                                            <h6><a href="javascript:void(0);">Digi
                                                    Inc</a><span>{{ $post['date'] }}</span></h6>
                                        </div>
                                        <div class="badge-text">
                                            <a href="javascript:void(0);"
                                                class="badge bg-primary-light">{{ $post['category'] }}</a>
                                        </div>
                                    </div>
                                    <div class="blog-title">
                                        <h3>{{ $post['title'] }}</h3>
                                    </div>
                                    {{-- <p>{{ Str::limit($post['description'], 100) }}</p> --}}
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                {{-- Show only 6 articles per page, paginate others --}}
                {{-- Pagination --}}
                <div class="pagination">
                    <ul>
                        <li>
                            <a href="javascript:void(0);" class="previous"> <svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></a>
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
                            <a href="javascript:void(0);" class="next"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></a>
                        </li>
                    </ul>
                </div>

            </div>




        </div>
    </div>




    <br>
    {{-- Footer Section --}}
    @include('components.footer ')
@endsection
