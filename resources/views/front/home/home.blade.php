@extends('front.layouts.app')
@section('title')
    {{ getAppName() }}
@endsection
@section('content')
    <!-- start hero section -->
    <section class="hero-section padding-b-100px" id="frontHomeTab">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-lg-row">
                <div class="slideshow-section position-relative">
                        <div class="slideshow-active activate-slider banner-slider activate-slider">
                            <div class="slide-item slide-item-bag position-relative banner-slide">
                                <img src="{{ isset($setting['home_page_banner']) ? $setting['home_page_banner'] : asset('front/images/hero.png') }}"
                                    alt="Vcard" class="img-fluid image-object-fit-cover"/>
                                <div class="content-absolute content-slide">
                                    <div class="container height-inherit d-flex align-items-center justify-content-end">
                                        <div class="content-box slide-content slide-content-1 py-4 hero-content mt-5 mt-lg-0">
                                            <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp text-success"
                                                data-animation="animate__animated animate__fadeInUp">
                                                {{ $setting['home_page_title'] }}
                                            </h2>
                                            <p class="slide-subheading heading_24 animate__animated animate__fadeInUp text-secondary fs-5 mb-5"
                                                data-animation="animate__animated animate__fadeInUp">
                                                {{ $setting['sub_text'] ?? '' }}
                                            </p>
                                            <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                                href="collection-left-sidebar.html"
                                                data-animation="animate__animated animate__fadeInUp">SHOP
                                                NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item slide-item-bag position-relative banner-slide">
                                <img src="{{ isset($setting['home_page_banner']) ? $setting['home_page_banner'] : asset('front/images/hero.png') }}"
                                    alt="Vcard" class="img-fluid image-object-fit-cover"/>
                                <div class="content-absolute content-slide">
                                    <div class="container height-inherit d-flex align-items-center justify-content-end">
                                        <div class="content-box slide-content slide-content-1 py-4 text-center hero-content mt-5 mt-lg-0">
                                            <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp text-success"
                                                data-animation="animate__animated animate__fadeInUp">
                                                {{ $setting['home_page_title'] }}
                                            </h2>
                                            <p class="slide-subheading heading_24 animate__animated animate__fadeInUp text-secondary fs-5 mb-5"
                                                data-animation="animate__animated animate__fadeInUp">
                                                {{ $setting['sub_text'] ?? '' }}
                                            </p>
                                            <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                                href="collection-left-sidebar.html"
                                                data-animation="animate__animated animate__fadeInUp">SHOP
                                                NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function(){
                                $('.banner-slider').slick({
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    dots: true,
                                    arrows: true,
                                    responsive: [
                                        {
                                            breakpoint: 768,
                                            settings: {
                                                arrows: false
                                            }
                                        }
                                    ]
                                });
                            });
                        </script>
                    <div class="activate-arrows"></div>
                    <div class="activate-dots dot-tools"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end hero section -->

    <!-- trusted badge start -->
    <div class="trusted-section mt-100 overflow-hidden">
                <div class="trusted-section-inner">
                    <div class="container">
                        <div class="row justify-content-center trusted-row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="trusted-badge rounded p-0">
                                    <div class="trusted-icon">
                                        <img class="icon-trusted" src="{{asset('assets/images/1.png')}}" alt="icon-1">
                                    </div>
                                    <div class="trusted-content">
                                        <h2 class="heading_18 trusted-heading">Free Shipping & Return</h2>
                                        <p class="text_16 trusted-subheading trusted-subheading-2">On all order over
                                            $99.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="trusted-badge rounded p-0">
                                    <div class="trusted-icon">
                                        <img class="icon-trusted" src="{{asset('assets/images/2.png')}}" alt="icon-2">
                                    </div>
                                    <div class="trusted-content">
                                        <h2 class="heading_18 trusted-heading">Customer Support 24/7</h2>
                                        <p class="text_16 trusted-subheading trusted-subheading-2">Instant access to
                                            support</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="trusted-badge rounded p-0">
                                    <div class="trusted-icon">
                                        <img class="icon-trusted" src="{{asset('assets/images/3.png')}}" alt="icon-3">
                                    </div>
                                    <div class="trusted-content">
                                        <h2 class="heading_18 trusted-heading">100% Secure Payment</h2>
                                        <p class="text_16 trusted-subheading trusted-subheading-2">We ensure secure
                                            payment!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- trusted badge end -->

             <!-- banner start -->
             <div class="grid-banner mt-100 overflow-hidden">
                <div class="collection-tab-inner mt-0">
                    <div class="container">
                        <div class="grid-container-2">
                            <a class="grid-item grid-item-1 position-relative rounded mt-0 d-flex" href="collection-left-sidebar.html"
                                data-aos="fade-right" data-aos-duration="700">
                                <img class="banner-img rounded" src="{{asset('assets/images/f1.jpg')}}" alt="banner-1">
                                <div class="content-absolute content-slide">
                                    <div class="container height-inherit d-flex">
                                        <div class="content-box banner-content p-4">
                                            <h2 class="heading_34 primary-color">20% Off On <br>New Chair</h2>
                                            <p class="text_14 mt-2 primary-color">Get Instant Cashback</p>
                                            <span class="text_12 mt-4 link-underline d-block primary-color">
                                                VIEW MORE
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="grid-item grid-item-2 position-relative rounded mt-0 d-flex" href="collection-left-sidebar.html"
                                data-aos="fade-right" data-aos-duration="700">
                                <img class="banner-img rounded" src="{{asset('assets/images/f3.jpg')}}" alt="banner-1">
                                <div class="content-absolute content-slide">
                                    <div class="container height-inherit d-flex justify-content-end">
                                        <div class="content-box banner-content p-4 text-end">
                                            <h2 class="heading_34 primary-color">Let’s buy <br>New Chair</h2>
                                            <p class="text_14 mt-2 primary-color">Get Instant Cashback</p>
                                            <span class="text_12 mt-4 link-underline d-block primary-color">
                                                VIEW MORE
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="grid-item grid-item-3 position-relative rounded mt-0 d-flex" href="collection-left-sidebar.html"
                                data-aos="fade-left" data-aos-duration="700">
                                <img class="banner-img rounded" src="{{asset('assets/images/f2.jpg')}}" alt="banner-1">
                                <div class="content-absolute content-slide">
                                    <div class="container height-inherit d-flex">
                                        <div class="content-box banner-content p-4">
                                            <h2 class="heading_34 primary-color">Let’s buy <br>New Chair</h2>
                                            <p class="text_14 mt-2 primary-color">Get Instant Cashback</p>
                                            <span class="text_12 mt-4 link-underline d-block primary-color">
                                                VIEW MORE
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner end -->

    <!-- start features section -->
    <section class="features-section" id="frontFeatureTab">
    <div class="featured-collection mt-100 overflow-hidden">
                <div class="collection-tab-inner">
                    <div class="container">
                        <div class="section-header text-center">
                            <h2 class="section-heading primary-color">Featured Products</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img" src="{{asset('assets/images/1-2.png')}}"
                                                alt="product-img">
                                            <img class="primary-img" src="{{asset('assets/images/22.png')}}"
                                                alt="product-img">
                                        </a>

                                        <div class="product-badge">
                                            <span class="badge-label badge-percentage rounded">-44%</span>
                                        </div>

                                        <div class="product-card-action product-card-action-2 justify-content-center">
                                            <a href="#quickview-modal" class="action-card action-quickview"
                                                data-bs-toggle="modal">
                                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>

                                            <a href="#" class="action-card action-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>

                                            <a href="#" class="action-card action-addtocart">
                                                <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-card-details">
                                        <ul class="color-lists list-unstyled d-flex align-items-center">
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-black active"></a></li>
                                            <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                            <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                            </li>
                                        </ul>
                                        <h3 class="product-card-title">
                                            <a href="collection-left-sidebar.html">best wood furniture</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$1529</span>
                                            <span class="card-price-compare text-decoration-line-through">$1759</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img" src="{{asset('assets/images/1-2.png')}}"
                                                alt="product-img">
                                            <img class="primary-img" src="{{asset('assets/images/22.png')}}"
                                                alt="product-img">
                                        </a>

                                        <div class="product-card-action product-card-action-2 justify-content-center">
                                            <a href="#quickview-modal" class="action-card action-quickview"
                                                data-bs-toggle="modal">
                                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>

                                            <a href="#" class="action-card action-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>

                                            <a href="#" class="action-card action-addtocart">
                                                <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-card-details">
                                        <ul class="color-lists list-unstyled d-flex align-items-center">
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-black active"></a></li>
                                            <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                            <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                            </li>
                                        </ul>
                                        <h3 class="product-card-title">
                                            <a href="collection-left-sidebar.html">Vita Lounge Chair</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$1529</span>
                                            <span class="card-price-compare text-decoration-line-through">$1759</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img" src="{{asset('assets/images/1-2.png')}}"
                                                alt="product-img">
                                            <img class="primary-img" src="{{asset('assets/images/22.png')}}"
                                                alt="product-img">
                                        </a>

                                        <div class="product-badge">
                                            <span class="badge-label badge-new rounded">New</span>
                                        </div>

                                        <div class="product-card-action product-card-action-2 justify-content-center">
                                            <a href="#quickview-modal" class="action-card action-quickview"
                                                data-bs-toggle="modal">
                                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>

                                            <a href="#" class="action-card action-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>

                                            <a href="#" class="action-card action-addtocart">
                                                <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-card-details">
                                        <ul class="color-lists list-unstyled d-flex align-items-center">
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-black active"></a></li>
                                            <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                            <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                            </li>
                                        </ul>
                                        <h3 class="product-card-title">
                                            <a href="collection-left-sidebar.html">Sarno Dining Chair</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$1529</span>
                                            <span class="card-price-compare text-decoration-line-through">$1759</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img" src="{{asset('assets/images/1-2.png')}}"
                                                alt="product-img">
                                            <img class="primary-img" src="{{asset('assets/images/22.png')}}"
                                                alt="product-img">
                                        </a>

                                        <div class="product-card-action product-card-action-2 justify-content-center">
                                            <a href="#quickview-modal" class="action-card action-quickview"
                                                data-bs-toggle="modal">
                                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>

                                            <a href="#" class="action-card action-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>

                                            <a href="#" class="action-card action-addtocart">
                                                <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-card-details">
                                        <ul class="color-lists list-unstyled d-flex align-items-center">
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-black active"></a></li>
                                            <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                            <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                            </li>
                                        </ul>
                                        <h3 class="product-card-title">
                                            <a href="collection-left-sidebar.html">bisum tea table</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$1529</span>
                                            <span class="card-price-compare text-decoration-line-through">$1759</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="view-all text-center" data-aos="fade-up" data-aos-duration="700">
                            <a class="btn-primary" href="#">VIEW ALL</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- end features section -->

    <!-- video start -->
    <div class="video-section mt-100 overflow-hidden">
                <div class="overlay-furniture section-spacing"
                    style="background: url('./assets/img/video/video-furniture.jpg') no-repeat fixed bottom center/cover">
                    <div class="container video-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="video-tools d-flex align-items-center justify-content-center">
                                    <div class="video-button-area">
                                        <a class="video-button" href="#video-modal" data-bs-toggle="modal">
                                            <svg width="22" height="26" viewBox="0 0 22 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21.5 12.134C22.1667 12.5189 22.1667 13.4811 21.5 13.866L2 25.1244C1.33333 25.5093 0.499999 25.0281 0.499999 24.2583L0.5 1.74167C0.5 0.971867 1.33333 0.490743 2 0.875643L21.5 12.134Z"
                                                    fill="#FEFEFE" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" tabindex="-1" id="video-modal">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe height="600" src="https://www.youtube.com/embed/tvPnrfQCiCo"
                                    title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- video end -->

            <!-- testimonial start -->
            <div class="testimonial-section mt-100 overflow-hidden home-section">
                <div class="testimonial-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-12" data-aos="fade-right" data-aos-duration="700">
                                <div class="section-header">
                                    <h2 class="section-heading primary-color">What customer say</h2>
                                    <p class="section-subheading">
                                        The services provided by the officials was smooth and satisfactory. Products and
                                        goods delivered were up to satisfaction.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1 col-md-12 col-12" data-aos="fade-left"
                            data-aos-duration="700">
                            <div class="testimonial-container position-relative">
                                    <div class="testimonial-slideshow common-slider">
                                        @foreach($features as $feature)
                                        <div class="testimonial-item">
                                            <div class="testimonial-icon-wrap d-flex align-items-center">
                                                <div class="testimonial-icon-quote">
                                                    <svg width="40" height="29" viewBox="0 0 40 29" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0 28.99L11.7 0H19.5L12.22 28.99H0ZM20.28 28.99L32.11 0H39.91L32.5 28.99H20.28Z"
                                                            fill="#00234D" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <p class="testimonial-review my-4 text_16">
                                            {!! $feature->description !!}
                                            </p>
                                            <div class="testimonial-reviewer d-flex align-items-center">
                                                <div class="reviewer-img">
                                                    <img src="{{ $feature->profile_image }}" alt="img" class="feature-image feature-image-card image-object-fit-cover">
                                                </div>
                                                <div class="reviewer-info ms-4">
                                                    <h4 class="reviewer-name heading_18 mb-2 primary-color">{{ $feature->name }}
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-item">
                                            <div class="testimonial-icon-wrap d-flex align-items-center">
                                                <div class="testimonial-icon-quote">
                                                    <svg width="40" height="29" viewBox="0 0 40 29" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0 28.99L11.7 0H19.5L12.22 28.99H0ZM20.28 28.99L32.11 0H39.91L32.5 28.99H20.28Z"
                                                            fill="#00234D" />
                                                    </svg>
                                                </div>
                                                <div class="testimonial-icon-star d-flex align-items-center ms-3">
                                                    <img src="assets/img/icon/star.png" alt="img">
                                                    <img src="assets/img/icon/star.png" alt="img">
                                                    <img src="assets/img/icon/star.png" alt="img">
                                                    <img src="assets/img/icon/star.png" alt="img">
                                                    <img src="assets/img/icon/star.png" alt="img">
                                                </div>
                                            </div>
                                            <p class="testimonial-review my-4 text_16">
                                                “ I am purchasing furniture from Bisum since the last 6 years. I love
                                                their
                                                prompt service and so far I have faced no complaints with their
                                                furniture.”
                                            </p>
                                            <div class="testimonial-reviewer d-flex align-items-center">
                                                <div class="reviewer-img">
                                                    <img src="assets/img/testimonial/john.jpg" alt="img">
                                                </div>
                                                <div class="reviewer-info ms-4">
                                                    <h4 class="reviewer-name heading_18 mb-2 primary-color">Floyd Miles
                                                    </h4>
                                                    <p class="reviewer-desig text_14 m-0">Executive, Hypebeast</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-item">
                                            <div class="testimonial-icon-wrap d-flex align-items-center">
                                                <div class="testimonial-icon-quote">
                                                    <svg width="40" height="29" viewBox="0 0 40 29" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0 28.99L11.7 0H19.5L12.22 28.99H0ZM20.28 28.99L32.11 0H39.91L32.5 28.99H20.28Z"
                                                            fill="#00234D" />
                                                    </svg>
                                                </div>
                                                <div class="testimonial-icon-star d-flex align-items-center ms-3">
                                                    <img src="assets/img/icon/star.png" alt="img">
                                                    <img src="assets/img/icon/star.png" alt="img">
                                                    <img src="assets/img/icon/star.png" alt="img">
                                                    <img src="assets/img/icon/star.png" alt="img">
                                                    <img src="assets/img/icon/star.png" alt="img">
                                                </div>
                                            </div>
                                            <p class="testimonial-review my-4 text_16">
                                                “ I am purchasing furniture from Bisum since the last 6 years. I love
                                                their
                                                prompt service and so far I have faced no complaints with their
                                                furniture.”
                                            </p>
                                            <div class="testimonial-reviewer d-flex align-items-center">
                                                <div class="reviewer-img">
                                                    <img src="assets/img/testimonial/john.jpg" alt="img">
                                                </div>
                                                <div class="reviewer-info ms-4">
                                                    <h4 class="reviewer-name heading_18 mb-2 primary-color">Floyd Miles
                                                    </h4>
                                                    <p class="reviewer-desig text_14 m-0">Executive, Hypebeast</p>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function(){
                                                $('.banner-slider').slick({
                                                    slidesToShow: 1,
                                                    slidesToScroll: 1,
                                                    dots: true,
                                                    arrows: true,
                                                    responsive: [
                                                        {
                                                            breakpoint: 768,
                                                            settings: {
                                                                arrows: false
                                                            }
                                                        }
                                                    ]
                                                });
                                            });
                                        </script>
                                    </div>
                                    @endforeach
                                    <div class="activate-arrows show-arrows-always article-arrows arrows-white"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonial end -->

    <!-- start pricing section -->
    <section class="pricing-plan-section padding-t-100px padding-b-100px" id="frontPricingTab">
        <div class="container">
            <h2 class="heading text-success text-center margin-b-100px">
                {{__("auth.choose_a_plan_that's_right_for_you")}}
            </h2>
            <div class="pricing-carousel">
                @foreach($plans as $plan)
                    <div class="pricing-plan-card card rounded-20">
                        <div class="card-body text-center">
                            <h3 class="mb-1 mt-3 ">{{ $plan->name }}</h3>
                            <label class="fs-18">{{__('messages.plan.no_of_vcards')}}
                                : {{$plan->no_of_vcards }}</label>
                            <div class="d-flex justify-content-center my-3">
                                <h4 class="text-center mb-6 mt-2 pricing">
                                    <span class="fs-1">{{ $plan->currency->currency_icon }}{{ number_format($plan->price) }}</span>
                                    @if($plan->frequency == 1)
                                        <span class="fs-5 fw-light ml-2">/ {{__('messages.plan.monthly')}}</span>
                                    @elseif($plan->frequency == 2)
                                        <span class="fs-5 fw-light ml-2">/ {{__('messages.plan.yearly')}}</span>
                                    @endif
                                </h4>
                            </div>
                            <ul class="pricing-plan-features text-secondary text-start mx-auto fs-6">
                                @foreach(getPlanFeature($plan) as $feature => $value)
                                    <li class="{{ $value == 1 ? 'active-check' : 'unactive-check' }}"><span
                                                class="check-box"><i
                                            class="fa-solid fa-check"></i></span>{{ __('messages.feature.'.$feature) }}</li>
                            @endforeach
                        </ul>
            {{--(getLoggedInUserRoleId() != getSuperAdminRoleId())--}}
                            @if(getLoggedInUserRoleId() != getSuperAdminRoleId())
                        @if(getLogInUser() && getLoggedInUserRoleId() != getSuperAdminRoleId())
                            <div class="mx-auto">
                                
                                @if(!empty(getCurrentSubscription()) && $plan->id == getCurrentSubscription()->plan_id && !getCurrentSubscription()->isExpired())
                                    @if($plan->price != 0)
                                        <button type="button"
                                                class="btn btn-success rounded-pill mx-auto d-block cursor-remove-plan pricing-plan-button-active"
                                                data-id="{{ $plan->id }}"
                                                data-turbo="false">
                                            {{ __('messages.subscription.currently_active') }}</button>
                                    @else
                                        <button type="button"
                                                class="btn btn-info rounded-pill mx-auto d-block cursor-remove-plan" data-turbo="false">
                                            {{ __('messages.subscription.renew_free_plan') }}
                                        </button>
                                    @endif
                                @else
                                    @if(!empty(getCurrentSubscription()) && !getCurrentSubscription()->isExpired() && ($plan->price == 0 || $plan->price != 0))
                                        @if($plan->hasZeroPlan->count() == 0)
                                            <a href="{{ $plan->price != 0 ? route('choose.payment.type', $plan->id) : 'javascript:void(0)' }}"
                                               class="btn btn-primary rounded-pill mx-auto {{ $plan->price == 0 ? 'freePayment' : ''}}"
                                               data-id="{{ $plan->id }}"
                                               data-plan-price="{{ $plan->price }}"
                                               data-turbo="false">
                                                {{ __('messages.subscription.switch_plan') }}</a>
                                        @else
                                            <button type="button"
                                                    class="btn btn-info rounded-pill mx-auto d-block cursor-remove-plan" data-turbo="false">
                                                {{ __('messages.subscription.renew_free_plan') }}
                                            </button>
                                        @endif
                                    @else
                                        @if($plan->hasZeroPlan->count() == 0)
                                            <a href="{{ $plan->price != 0 ? route('choose.payment.type', $plan->id) : 'javascript:void(0)' }}"
                                               class="btn btn-primary rounded-pill mx-auto  {{ $plan->price == 0 ? 'freePayment' : ''}}"
                                               data-id="{{ $plan->id }}"
                                               data-plan-price="{{ $plan->price }}"
                                               data-turbo="false">
                                                {{ __('messages.subscription.choose_plan') }}</a>
                                        @else
                                            <button type="button" class="btn btn-info rounded-pill mx-auto d-block cursor-remove-plan" data-turbo="false">
                                                {{ __('messages.subscription.renew_free_plan') }}
                                            </button>
                                        @endif
                                    @endif
                                @endif
                            </div>
                        @else
                            <div class="mx-auto">
                                @if($plan->hasZeroPlan->count() == 0)
                                    <a href="{{ $plan->price != 0 ? route('choose.payment.type', $plan->id) : 'javascript:void(0)' }}"
                                       class="btn btn-primary rounded-pill mx-auto  {{ $plan->price == 0 ? 'freePayment' : ''}}"
                                       data-id="{{ $plan->id }}"
                                       data-plan-price="{{ $plan->price }}"
                                       data-turbo="false">
                                        {{ __('messages.subscription.choose_plan') }}</a>
                                @else
                                    <button type="button" class="btn btn-info rounded-pill mx-auto d-block cursor-remove-plan" data-turbo="false">
                                        {{ __('messages.subscription.renew_free_plan') }}
                                    </button>
                                @endif
                            </div>
                        @endif
                                @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end pricing section -->

<!--trending products start-->


<!--trending products start-->



    <!-- start testimonial section -->
    @if(!$testimonials->isEmpty())
    <section class="testimonial-section padding-t-100px">
        <div class="container">
            <h2 class="heading text-success text-center margin-b-80px">
                {{__('auth.stories_from_our_customers')}}
            </h2>
            <div class="testimonial-section__testimonial-block mx-auto">
                <div class="testimonial-carousel">
                    @foreach($testimonials as $testimonial)
                    <div class="testimonial-section__testimonial-card border rounded-20 position-relative {{$loop->iteration == 1 ? 'active' : ''}}">
                        <div class="quotation-mark">
                            <img src="{{ asset('front/images/quotation.png') }}" alt="Quotation Mark">
                        </div>
                        <p class="text-gray-100 fs-18 mb-4 pb-2">
                            {!! $testimonial->description !!}
                        </p>
                        <div class="d-flex profile-box align-items-center">
                            <img src="{{ $testimonial->testimonial_url }}" alt="profile" class="profile-img rounded-circle img-fluid image-object-fit-cover">
                            <span class="ms-3">
                                <h3 class="profile-name mb-md-2 mb-1">{{ $testimonial->name }}</h3>
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- end testimonial section -->

    <!-- start contact section -->
    <section class="contact-section padding-t-100px padding-b-100px" id="frontContactTab">
        <h2 class="heading text-success text-center margin-b-80px">
            {{__('messages.contact_us.contact')}}
        </h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="d-flex align-items-center contact-info__block">
                            <div class="contact-info__contact-icon text-white fs-2 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <a href="mailto:{{ $setting['email'] }}"
                               class="text-decoration-none text-secondary contact-info__contact-label">{{ $setting['email'] }}</a>
                        </div>
                        <div class="d-flex align-items-center contact-info__block">
                            <div class="contact-info__contact-icon text-white fs-2 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <a href=" tel:{{ $setting['phone'] }}"
                               class="text-decoration-none text-secondary contact-info__contact-label">{{"+".$setting['prefix_code']." ".$setting['phone'] }}</a>
                        </div>
                        <div class="d-flex align-items-center contact-info__block">
                            <div class="contact-info__contact-icon text-white fs-2 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <p class="text-secondary contact-info__contact-label mb-0">
                                {{ $setting['address'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="contact-form" id="myForm">
                        @csrf
                        <div id="contactError" class="alert alert-danger d-none"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-form__input-block">
                                    <input name="name" id="name" type="text" class="form-control"
                                           placeholder="{{ __('messages.front.enter_your_name') }}*" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-form__input-block">
                                    <input name="email" id="email" type="email" class="form-control"
                                           placeholder="{{ __('messages.front.enter_your_email') }}*" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-form__input-block">
                                    <input name="subject" id="subject" type="text" class="form-control"
                                           placeholder="{{ __('messages.common.subject') }}*" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-form__input-block">
                                    <textarea name="message" id="message" rows="4" class="form-control form-textarea"
                                              placeholder="{{ __('messages.front.enter_your_message') }}*" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 text-end">
                                <input type="submit" id="submit" name="send" class="btn btn-primary"
                                       value="{{ __('messages.contact_us.send_message') }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

@endsection
