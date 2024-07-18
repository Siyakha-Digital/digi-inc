@extends('layouts.app')
@section('content')
<section class="home-banner" id="index">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="banner-content aos" data-aos="fade-up">
                    <div class="banner-head">
                        <h1>
                            Empowering <span>Digital</span>
                            Connections<br>
                        </h1>
                        <p>Whether you are aiming to launch a full-scale freelance platform or a niche job-posting site, DreamGigs is your go-to choice.</p>
                    </div>
                    <!-- <div class="template-technologies">
                        <ul>
                            <li>
                                <a href="https://dreamgigs.dreamstechnologies.com/html/template/index.html" target="_blank">
                                    <img src="assets/img/icons/tech-icon-01.svg" alt>
                                </a>
                            </li>
                            <li>
                                <a href="https://dreamgigs.dreamstechnologies.com/laravel/template/public/" target="_blank">
                                    <img src="assets/img/icons/laravel-icon.svg" alt>
                                </a>
                            </li>
                            <li>
                                <a href="https://dreamgigs.dreamstechnologies.com/vue/template/" target="_blank">
                                    <img src="assets/img/icons/vue-icon.svg" alt>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    <div class="banner-btns d-inline-flex">
                        <a href="" target="_blank" class="btn btn-secondary">
                            Read more  <i class="feather-play ms-2 me-0"></i>
                        </a>
                    </div>
                    <div class="banner-btns d-inline-flex">
                        <a href="{{ route('register') }}" target="_blank" class="btn btn-secondary">
                            Sign Up <i class="feather-play ms-2 me-0"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
            
            <div class="col-lg-7">
                <div class="banner-img">
                    <div class="banner-img-right">
                        <a href="#">
                            <img style="max-width: 350px !important;" src="https://sppagebuilder.com/images/2022/startup-company/hero-img1.png" class="img-fluid" alt="Img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div data-bs-spy="scroll" data-bs-target="#scroll-nav" class="scrollspy-example" tabindex="0">
    <section class="freelancing-platform-sec" id="demo">
        <div class="container">
            <div class="section-header">
                <h5>Unleash the
                    potential
                    of Digi.Inc</h5>
                <h2>All in One Co-Working & Freelancing Platform</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="about-inner-img">
                                <img src="https://dreamgigs.dreamstechnologies.com/html/template/assets/img/aboutus/about-us-01.jpg" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="about-inner-img">
                                        <img src="https://dreamgigs.dreamstechnologies.com/html/template/assets/img/aboutus/about-us-02.jpg" class="img-fluid" alt="img">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="about-inner-img">
                                        <img src="https://dreamgigs.dreamstechnologies.com/html/template/assets/img/aboutus/about-us-03.jpg" class="img-fluid" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-info">
                        <div class="about-us-head">
                            {{-- <h6>About Us</h6>
                            <h2>We Provide Best solutions For Your Business</h2> --}}
                            <p>It connects digital and tech small businesses to Venture Capital Investors, competitions, investments and other opportunities.</p>
                            <h5>Our CoWork</h5>
                            <p>Search hub seamlessly links skilled individuals and digital enterprises with buyers looking for digital solutions for their businesses.
                            </p>

                            <h5>The CoLab marketplace</h5>
                            <p>Allows SMMEs and individuals to find each other, share ideas and experiences, ask questions, and seek support and advice.
                            </p>

                            <p>
                                Whether you are a developer, a branding expert, or are in agrotech, fintech or any other tech space, Digi Inc is your one-stop resource centre.

                                And, thanks to our generous sponsor, all of these service come to you at no cost!
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us-section">
        <div class="container">

        </div>
    </section>
    <section class="product-features-sec" id="inner-page">
        <div class="container">
            <div class="section-header">
                <h5>Programme</h5>
                <h2>Sponsor</h2>
            </div>
            <div class="row aos" data-aos="fade-up">
                <div class="col-xl-2 col-lg-3 d-flex">
                    <div class="features-round text-center flex-fill">
                        <a href="https://themeforest.net/item/dreamgigs-gig-service-selling-marketplace-bootstrap-html-template/51017661" target="_blank">
                            <div class="features-content">
                                <h5>Orange</h5>
                                <div class="features-img">
                                    <img width="200px" height="155px" src="https://radapps.co.za/digiinc/images/programme-partners/orange-business-services.png" alt="Img">
                                </div>
                                <span class="btn buy-btn">View</span>
                            </div>
                        </a>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <br>
    <section class="faq-sec pt-0" id="faq">
        <div class="container aos" data-aos="fade-up">
            <div class="section-header">
                <h5>The Power Of </h5>
                <h2>Digital Collaboration</h2>
            </div>
            <div class="row justify-content-center aos" data-aos="fade-up">
                <div class="col-lg-10">
                    <div class="faq-card aos" data-aos="fade-down" data-aos-delay="600">
                        <h4 class="faq-title">
                            <a data-bs-toggle="collapse" href="#faqOne" aria-expanded="false">Community</a>
                        </h4>
                        <div id="faqOne" class="card-collapse collapse show" data-bs-parent="#accordionExample">
                            <p>Join a discussion group, or create your own – bounce ideas and learn from each other</p>
                        </div>
                    </div>
                    <div class="faq-card aos" data-aos="fade-down">
                        <h4 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqtwo" aria-expanded="false">Newsfeed</a>
                        </h4>
                        <div id="faqtwo" class="card-collapse collapse" data-bs-parent="#accordionExample">
                            <p>Links to the latest technical developments and innovations from around the world – comparing products, conducting technical reviews, and asking questions about product compatibility or preferences.</p>
                        </div>
                    </div>
                    <div class="faq-card aos" data-aos="fade-down">
                        <h4 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqthree" aria-expanded="false">Learning</a>
                        </h4>
                        <div id="faqthree" class="card-collapse collapse" data-bs-parent="#accordionExample">
                            <p>Tap into our expert blogs and opinion pieces, link into training courses at reduced prices

                                Blogs and articles from subject matter experts, technical training at reduced prices for Digi Inc members</p>
                        </div>
                    </div>
                    {{-- <div class="faq-card aos" data-aos="fade-down">
                        <h4 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqfour" aria-expanded="false">What are the other Platforms customize can be done?</a>
                        </h4>
                        <div id="faqfour" class="card-collapse collapse" data-bs-parent="#accordionExample">
                            <p>You can sell and accept payments in many currencies, depending on what payment providers (also known as third party payment processors or payment gateways) you use.</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section">

        <div class="contact-bottom bg-white">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="contact-grid w-100">
                            <div class="contact-content">
                                <div class="contact-icon">
                                    <span>
                                        <img src="https://dreamgigs.dreamstechnologies.com/html/template/assets/img/icons/contact-mail.svg" alt="Icon">
                                    </span>
                                </div>
                                <div class="contact-details">
                                    <h6>Email Address</h6>
                                    <p><a href="javascript:void(0);">info@digiinc.co.za</a></p>
                                    <p><a href="javascript:void(0);">support@digiinc.co.za</a></p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="contact-grid w-100">
                            <div class="contact-content">
                                <div class="contact-icon">
                                    <span>
                                        <img src="https://dreamgigs.dreamstechnologies.com/html/template/assets/img/icons/contact-phone.svg" alt="Icon">
                                    </span>
                                </div>
                                <div class="contact-details">
                                    <h6>Phone Number</h6>
                                    <p>+1 81649 48103</p>
                                    <p>+1 78301 71940</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="contact-grid w-100">
                            <div class="contact-content">
                                <div class="contact-icon">
                                    <span>
                                        <img src="https://dreamgigs.dreamstechnologies.com/html/template/assets/img/icons/contact-map.svg" alt="Icon">
                                    </span>
                                </div>
                                <div class="contact-details contact-details-address">
                                    <h6>Address</h6>
                                    <p>367 Hillcrest Lane, Irvine, California, United Sates</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="contact-top pt-0">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-12 d-flex">
                        <div class="contact-img">
                            <img src="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png" class="img-fluid" alt="img">
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-12 d-flex">
                        <div class="team-form w-100">
                            <div class="team-form-heading">
                                <h3>Get in Touch</h3>
                                <p>Ready to dive into the digital realm? Don’t miss out – join Digi.Inc now!</p>
                            </div>
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        
    </section>
    <br>
   @include('components.footer')
</div>
@endsection
