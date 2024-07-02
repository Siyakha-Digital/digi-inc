@php
    // Example Data

    // Blog Posts
    $posts = [
        [
            'id' => '1',
            'title' => 'The Best Way to Find a Job',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.',
            'img' => 'https://dreamgigs.dreamstechnologies.com/html/template/assets/img/blog/blog-01.jpg',
            'date' => '12th May 2021',
            'category' => 'Entrepreneurship',
        ],
        [
            'id' => '2',
            'title' => 'Aligning to your Industry',
            'description' =>
                'A critical success factor for SMMEs is to learn from your peers, network within your industry and collaborate with people you trust to build scale and experience. An excellent way to do this is by j...',
            'img' =>
                'https://radapps.co.za/digiinc/images/Article%20Images/jacques-nel-f0RvpwF-iXE-unsplash-scaled.jpg',
            'date' => '16 October 2023',
            'category' => 'Entrepreneurship',
        ],
        [
            'id' => '3',
            'title' => 'BRICS 2023 South Africa – And Why It Matters for SMMEs',
            'description' =>
                'The meeting of BRICS was held in Johannesburg during the week of the 22 – 24 of August 2023 after much controversy around the attendance of the President of Russia, Vladimir Putin. ...',
            'img' => 'https://radapps.co.za/digiinc/images/Article%20Images/6th%20art.jpg',
            'date' => '28 August 2023',
            'category' => 'Entrepreneurship',
        ],
        [
            'id' => '4',
            'title' => 'Working “on” your business: The key to entrepreneurial growth',
            'description' =>
                'By understanding the difference between working "in" and "on" your business, setting aside dedicated time, delegating tasks, developing efficient systems, continuously learning, seeking outside pers...',
            'img' => 'https://radapps.co.za/digiinc/images/Article%20Images/2nd%20art.png',
            'date' => '24 August 2023',
            'category' => 'Entrepreneurship',
        ],
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
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 4L10 8L6 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            <li class="breadcrumb-item" aria-current="page">
                                Newsfeed
                            </li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title mb-0">
                        News Feed
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- Blog Posts Title Section --}}
    {{-- <section class="home-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="banner-content aos" data-aos="fade-right">
                        <div class="banner-head">
                            <h1>
                                <span> Blog </span> Posts
                            </h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}


    {{-- Main Content --}}
    <div class="page-content" style="transform: none;">
        <div class="container" style="transform: none;">

            <div class="row" style="transform: none;">
                <div class="col-lg-8">
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
                                            <p>{{ Str::limit($post['description'], 100) }}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="#" class="read-more">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        
                        {{-- Pagination --}}
                        {{-- //TODO: Pagination still needs to be implemented, currently, all blogs are listed here. Only 4 should be shown in each page  --}}
                        <div class="pagination">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" class="previous"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
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
                                    <a href="javascript:void(0);" class="next"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>

                {{-- Search Bar & Categories Block --}}
                <div class="col-lg-4 theiaStickySidebar"
                    style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                    <div class="theiaStickySidebar"
                        style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px;">

                        <div class="blog-sidebar mb-0">

                            {{-- Search Bar --}}
                            <div class="card search-widget">
                                <div class="card-header">
                                    <h6>Search</h6>
                                </div>
                                <div class="card-body">
                                    <form action="#">
                                        <div class="form-group search-group mb-0">
                                            <span class="search-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                    height="12" fill="currentColor" class="bi bi-search"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.099zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg></span>
                                            <input type="text" class="form-control" placeholder="Enter Keyword ...">
                                        </div>
                                    </form>
                                </div>
                            </div>


                            {{-- Categories --}}
                            <div class="card category-widget">
                                <div class="card-header">
                                    <h6>Categories</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="categories">
                                        {{-- Display the first four categories directly --}}
                                        @foreach ($categories as $index => $category)
                                            @if ($index < 4)
                                                <li><a
                                                        href="#">{{ $category['name'] }}<span>{{ $category['count'] }}</span></a>
                                                </li>
                                            @else
                                            @break
                                        @endif
                                    @endforeach
                                
                                @if (count($categories) > 4)
                                   
                                <div class="view-content" id="viewall-one" style="display:none;">
                                    
                                        {{-- Display the rest of the categories --}}
                                        @foreach ($categories as $index => $category)
                                            @if ($index >= 4)
                                                <li><a href="#">{{ $category['name'] }} <span>{{ $category['count'] }}</span></a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                    <div class="view-all">
                                        <a href="javascript:void(0);" class="viewall-button-one"
                                            id="viewall-button-one">View All</a>
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>

                    <div class="resize-sensor"
                        style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                        <div class="resize-sensor-expand"
                            style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div
                                style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 864px; height: 1093px;">
                            </div>
                        </div>
                        <div class="resize-sensor-shrink"
                            style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<br>
{{-- Footer Section --}}
@include('components.footer ')

@endsection
