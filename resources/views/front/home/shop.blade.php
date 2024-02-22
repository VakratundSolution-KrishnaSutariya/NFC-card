@extends('front.layouts.app')
@section('title')
    {{ getAppName() }}
@endsection
@section('content')   
   <div class="body-wrapper">


      <!-- breadcrumb start -->
      <div class="breadcrumb">
            <div class="container">
                <ul class="list-unstyled d-flex align-items-center m-0">
                    <li><a href="/">Home</a></li>
                    <li>
                        <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.4">
                                <path
                                    d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                    fill="#000" />
                            </g>
                        </svg>
                    </li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- main content start -->
        <main id="MainContent" class="content-for-layout">
            <div class="collection mt-100">
                <div class="container">
                    <div class="row">
                        <!-- product area start -->
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="filter-sort-wrapper d-flex justify-content-between flex-wrap">
                                <div class="collection-title-wrap d-flex align-items-end">
                                    <h2 class="collection-title heading_24 mb-0">All products</h2>
                                    <p class="collection-counter text_16 mb-0 ms-2">(237 items)</p>
                                </div>
                                <div class="filter-sorting">
                                    <div class="collection-sorting position-relative d-none d-lg-block">
                                        <div
                                            class="sorting-header text_16 d-flex align-items-center justify-content-end">
                                            <span class="sorting-title me-2">Sort by:</span>
                                            <span class="active-sorting">Featured</span>
                                            <span class="sorting-icon">
                                                <svg class="icon icon-down" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </span>
                                        </div>
                                        <ul class="sorting-lists list-unstyled m-0">
                                            <li><a href="#" class="text_14">Featured</a></li>
                                            <li><a href="#" class="text_14">Best Selling</a></li>
                                            <li><a href="#" class="text_14">Alphabetically, A-Z</a></li>
                                            <li><a href="#" class="text_14">Alphabetically, Z-A</a></li>
                                            <li><a href="#" class="text_14">Price, low to high</a></li>
                                            <li><a href="#" class="text_14">Price, high to low</a></li>
                                            <li><a href="#" class="text_14">Date, old to new</a></li>
                                            <li><a href="#" class="text_14">Date, new to old</a></li>
                                        </ul>
                                    </div>
                                    <div class="filter-drawer-trigger mobile-filter d-flex align-items-center d-lg-none">
                                        <span class="mobile-filter-icon me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="icon icon-filter">
                                                <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                            </svg>
                                        </span>
                                        <span class="mobile-filter-heading">Sorting</span>
                                    </div>
                                </div>
                            </div>
                            <div class="collection-product-container">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                <a class="hover-switch" href="collection-left-sidebar.html">
                                                    <img class="secondary-img" src="{{asset('assets/images/22.png')}}"
                                                        alt="product-img">
                                                    <img class="primary-img" src="{{asset('assets/images/22.png')}}"
                                                        alt="product-img">
                                                </a>

                                                <div class="product-badge">
                                                    <span class="badge-label badge-percentage rounded">-44%</span>
                                                </div>

                                                <div
                                                    class="product-card-action product-card-action-2 justify-content-center">
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
                                                            viewBox="0 0 26 22" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                                fill="#00234D" />
                                                        </svg>
                                                    </a>

                                                    <a href="#" class="action-card action-addtocart">
                                                        <svg class="icon icon-cart" width="24" height="26"
                                                            viewBox="0 0 24 26" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
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
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-cyan"></a></li>
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-purple"></a>
                                                    </li>
                                                </ul>
                                                <h3 class="product-card-title">
                                                    <a href="collection-left-sidebar.html">best wood furniture</a>
                                                </h3>
                                                <div class="product-card-price">
                                                    <span class="card-price-regular">$1529</span>
                                                    <span
                                                        class="card-price-compare text-decoration-line-through">$1759</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                <a class="hover-switch" href="collection-left-sidebar.html">
                                                    <img class="secondary-img"
                                                        src="assets/img/products/furniture/10.jpg" alt="product-img">
                                                    <img class="primary-img" src="{{asset('assets/images/22.png')}}"
                                                        alt="product-img">
                                                </a>

                                                <div
                                                    class="product-card-action product-card-action-2 justify-content-center">
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
                                                            viewBox="0 0 26 22" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                                fill="#00234D" />
                                                        </svg>
                                                    </a>

                                                    <a href="#" class="action-card action-addtocart">
                                                        <svg class="icon icon-cart" width="24" height="26"
                                                            viewBox="0 0 24 26" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
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
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-cyan"></a></li>
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-purple"></a>
                                                    </li>
                                                </ul>
                                                <h3 class="product-card-title">
                                                    <a href="collection-left-sidebar.html">Vita Lounge Chair</a>
                                                </h3>
                                                <div class="product-card-price">
                                                    <span class="card-price-regular">$1529</span>
                                                    <span
                                                        class="card-price-compare text-decoration-line-through">$1759</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                <a class="hover-switch" href="collection-left-sidebar.html">
                                                    <img class="secondary-img"
                                                        src="assets/img/products/furniture/11.jpg" alt="product-img">
                                                    <img class="primary-img" src="{{asset('assets/images/22.png')}}"
                                                        alt="product-img">
                                                </a>

                                                <div class="product-badge">
                                                    <span class="badge-label badge-new rounded">New</span>
                                                </div>

                                                <div
                                                    class="product-card-action product-card-action-2 justify-content-center">
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
                                                            viewBox="0 0 26 22" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                                fill="#00234D" />
                                                        </svg>
                                                    </a>

                                                    <a href="#" class="action-card action-addtocart">
                                                        <svg class="icon icon-cart" width="24" height="26"
                                                            viewBox="0 0 24 26" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
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
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-cyan"></a></li>
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-purple"></a>
                                                    </li>
                                                </ul>
                                                <h3 class="product-card-title">
                                                    <a href="collection-left-sidebar.html">Sarno Dining Chair</a>
                                                </h3>
                                                <div class="product-card-price">
                                                    <span class="card-price-regular">$1529</span>
                                                    <span
                                                        class="card-price-compare text-decoration-line-through">$1759</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                <a class="hover-switch" href="collection-left-sidebar.html">
                                                    <img class="secondary-img"
                                                        src="assets/img/products/furniture/14.jpg" alt="product-img">
                                                    <img class="primary-img" src="{{asset('assets/images/22.png')}}"
                                                        alt="product-img">
                                                </a>

                                                <div
                                                    class="product-card-action product-card-action-2 justify-content-center">
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
                                                            viewBox="0 0 26 22" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                                fill="#00234D" />
                                                        </svg>
                                                    </a>

                                                    <a href="#" class="action-card action-addtocart">
                                                        <svg class="icon icon-cart" width="24" height="26"
                                                            viewBox="0 0 24 26" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
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
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-cyan"></a></li>
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-purple"></a>
                                                    </li>
                                                </ul>
                                                <h3 class="product-card-title">
                                                    <a href="collection-left-sidebar.html">bisum tea table</a>
                                                </h3>
                                                <div class="product-card-price">
                                                    <span class="card-price-regular">$1529</span>
                                                    <span
                                                        class="card-price-compare text-decoration-line-through">$1759</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                <a class="hover-switch" href="collection-left-sidebar.html">
                                                    <img class="secondary-img"
                                                        src="assets/img/products/furniture/15.jpg" alt="product-img">
                                                    <img class="primary-img" src="{{asset('assets/images/22.png')}}"
                                                        alt="product-img">
                                                </a>

                                                <div
                                                    class="product-card-action product-card-action-2 justify-content-center">
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
                                                            viewBox="0 0 26 22" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                                fill="#00234D" />
                                                        </svg>
                                                    </a>

                                                    <a href="#" class="action-card action-addtocart">
                                                        <svg class="icon icon-cart" width="24" height="26"
                                                            viewBox="0 0 24 26" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
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
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-cyan"></a></li>
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-purple"></a>
                                                    </li>
                                                </ul>
                                                <h3 class="product-card-title">
                                                    <a href="collection-left-sidebar.html">Eliot Reversible tool</a>
                                                </h3>
                                                <div class="product-card-price">
                                                    <span class="card-price-regular">$1529</span>
                                                    <span
                                                        class="card-price-compare text-decoration-line-through">$1759</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                <a class="hover-switch" href="collection-left-sidebar.html">
                                                    <img class="secondary-img"
                                                        src="assets/img/products/furniture/16.jpg" alt="product-img">
                                                    <img class="primary-img" src="{{asset('assets/images/22.png')}}"
                                                        alt="product-img">
                                                </a>

                                                <div
                                                    class="product-card-action product-card-action-2 justify-content-center">
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
                                                            viewBox="0 0 26 22" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                                fill="#00234D" />
                                                        </svg>
                                                    </a>

                                                    <a href="#" class="action-card action-addtocart">
                                                        <svg class="icon icon-cart" width="24" height="26"
                                                            viewBox="0 0 24 26" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
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
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-cyan"></a></li>
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-purple"></a>
                                                    </li>
                                                </ul>
                                                <h3 class="product-card-title">
                                                    <a href="collection-left-sidebar.html">Vita Lounge wardrobe</a>
                                                </h3>
                                                <div class="product-card-price">
                                                    <span class="card-price-regular">$1529</span>
                                                    <span
                                                        class="card-price-compare text-decoration-line-through">$1759</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                <a class="hover-switch" href="collection-left-sidebar.html">
                                                    <img class="secondary-img"
                                                        src="assets/img/products/furniture/17.jpg" alt="product-img">
                                                    <img class="primary-img" src="{{asset('assets/images/22.png')}}"
                                                        alt="product-img">
                                                </a>

                                                <div
                                                    class="product-card-action product-card-action-2 justify-content-center">
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
                                                            viewBox="0 0 26 22" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                                fill="#00234D" />
                                                        </svg>
                                                    </a>

                                                    <a href="#" class="action-card action-addtocart">
                                                        <svg class="icon icon-cart" width="24" height="26"
                                                            viewBox="0 0 24 26" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
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
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-cyan"></a></li>
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-purple"></a>
                                                    </li>
                                                </ul>
                                                <h3 class="product-card-title">
                                                    <a href="collection-left-sidebar.html">Sarno Dining Chair</a>
                                                </h3>
                                                <div class="product-card-price">
                                                    <span class="card-price-regular">$1529</span>
                                                    <span
                                                        class="card-price-compare text-decoration-line-through">$1759</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                <a class="hover-switch" href="collection-left-sidebar.html">
                                                    <img class="secondary-img"
                                                        src="assets/img/products/furniture/19.jpg" alt="product-img">
                                                    <img class="primary-img" src="{{asset('assets/images/22.png')}}"
                                                        alt="product-img">
                                                </a>

                                                <div
                                                    class="product-card-action product-card-action-2 justify-content-center">
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
                                                            viewBox="0 0 26 22" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                                fill="#00234D" />
                                                        </svg>
                                                    </a>

                                                    <a href="#" class="action-card action-addtocart">
                                                        <svg class="icon icon-cart" width="24" height="26"
                                                            viewBox="0 0 24 26" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
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
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-cyan"></a></li>
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-purple"></a>
                                                    </li>
                                                </ul>
                                                <h3 class="product-card-title">
                                                    <a href="collection-left-sidebar.html">Vita Lounge Chair</a>
                                                </h3>
                                                <div class="product-card-price">
                                                    <span class="card-price-regular">$1529</span>
                                                    <span
                                                        class="card-price-compare text-decoration-line-through">$1759</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                <a class="hover-switch" href="collection-left-sidebar.html">
                                                    <img class="secondary-img"
                                                        src="assets/img/products/furniture/29.jpg" alt="product-img">
                                                    <img class="primary-img" src="{{asset('assets/images/22.png')}}"
                                                        alt="product-img">
                                                </a>

                                                <div
                                                    class="product-card-action product-card-action-2 justify-content-center">
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
                                                            viewBox="0 0 26 22" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                                fill="#00234D" />
                                                        </svg>
                                                    </a>

                                                    <a href="#" class="action-card action-addtocart">
                                                        <svg class="icon icon-cart" width="24" height="26"
                                                            viewBox="0 0 24 26" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
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
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-cyan"></a></li>
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-purple"></a>
                                                    </li>
                                                </ul>
                                                <h3 class="product-card-title">
                                                    <a href="collection-left-sidebar.html">Vita Lounge Chair</a>
                                                </h3>
                                                <div class="product-card-price">
                                                    <span class="card-price-regular">$1529</span>
                                                    <span
                                                        class="card-price-compare text-decoration-line-through">$1759</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                <a class="hover-switch" href="collection-left-sidebar.html">
                                                    <img class="secondary-img"
                                                        src="assets/img/products/furniture/21.jpg" alt="product-img">
                                                    <img class="primary-img" src="{{asset('assets/images/22.png')}}"
                                                        alt="product-img">
                                                </a>

                                                <div
                                                    class="product-card-action product-card-action-2 justify-content-center">
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
                                                            viewBox="0 0 26 22" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                                fill="#00234D" />
                                                        </svg>
                                                    </a>

                                                    <a href="#" class="action-card action-addtocart">
                                                        <svg class="icon icon-cart" width="24" height="26"
                                                            viewBox="0 0 24 26" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
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
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-cyan"></a></li>
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-purple"></a>
                                                    </li>
                                                </ul>
                                                <h3 class="product-card-title">
                                                    <a href="collection-left-sidebar.html">Sarno Dining Chair</a>
                                                </h3>
                                                <div class="product-card-price">
                                                    <span class="card-price-regular">$1529</span>
                                                    <span
                                                        class="card-price-compare text-decoration-line-through">$1759</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                <a class="hover-switch" href="collection-left-sidebar.html">
                                                    <img class="secondary-img"
                                                        src="assets/img/products/furniture/22.jpg" alt="product-img">
                                                    <img class="primary-img" src="{{asset('assets/images/22.png')}}"
                                                        alt="product-img">
                                                </a>

                                                <div
                                                    class="product-card-action product-card-action-2 justify-content-center">
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
                                                            viewBox="0 0 26 22" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                                fill="#00234D" />
                                                        </svg>
                                                    </a>

                                                    <a href="#" class="action-card action-addtocart">
                                                        <svg class="icon icon-cart" width="24" height="26"
                                                            viewBox="0 0 24 26" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
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
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-cyan"></a></li>
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-purple"></a>
                                                    </li>
                                                </ul>
                                                <h3 class="product-card-title">
                                                    <a href="collection-left-sidebar.html">Vita Lounge Chair</a>
                                                </h3>
                                                <div class="product-card-price">
                                                    <span class="card-price-regular">$1529</span>
                                                    <span
                                                        class="card-price-compare text-decoration-line-through">$1759</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                <a class="hover-switch" href="collection-left-sidebar.html">
                                                    <img class="secondary-img"
                                                        src="assets/img/products/furniture/29.jpg" alt="product-img">
                                                    <img class="primary-img" src="{{asset('assets/images/22.png')}}"
                                                        alt="product-img">
                                                </a>

                                                <div
                                                    class="product-card-action product-card-action-2 justify-content-center">
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
                                                            viewBox="0 0 26 22" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                                fill="#00234D" />
                                                        </svg>
                                                    </a>

                                                    <a href="#" class="action-card action-addtocart">
                                                        <svg class="icon icon-cart" width="24" height="26"
                                                            viewBox="0 0 24 26" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
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
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-cyan"></a></li>
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-purple"></a>
                                                    </li>
                                                </ul>
                                                <h3 class="product-card-title">
                                                    <a href="collection-left-sidebar.html">Vita Lounge Chair</a>
                                                </h3>
                                                <div class="product-card-price">
                                                    <span class="card-price-regular">$1529</span>
                                                    <span
                                                        class="card-price-compare text-decoration-line-through">$1759</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination justify-content-center mt-100">
                                <nav>
                                    <ul class="pagination m-0 d-flex align-items-center">
                                        <li class="item disabled">
                                            <a class="link">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-left">
                                                    <polyline points="15 18 9 12 15 6"></polyline>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="item"><a class="link" href="#">1</a></li>
                                        <li class="item active"><a class="link" href="#">2</a></li>
                                        <li class="item"><a class="link" href="#">3</a></li>
                                        <li class="item"><a class="link" href="#">4</a></li>
                                        <li class="item">
                                            <a class="link" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-right">
                                                    <polyline points="9 18 15 12 9 6"></polyline>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- product area end -->

                        <!-- sidebar start -->
                        <div class="col-lg-3 col-md-12 col-12">
                            <div class="collection-filter filter-drawer">
                                <div class="filter-widget d-lg-none d-flex align-items-center justify-content-between">
                                    <h5 class="heading_24">Sorting By</h4>
                                    <button type="button" class="btn-close text-reset filter-drawer-trigger d-lg-none"></button>
                                </div>

                                <div class="filter-widget d-lg-none">
                                    <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                        data-bs-toggle="collapse" data-bs-target="#filter-mobile-sort">
                                        <span>
                                            <span class="sorting-title me-2">Sort by:</span>
                                            <span class="active-sorting">Featured</span>
                                        </span>
                                        <span class="faq-heading-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </div>
                                    <div id="filter-mobile-sort" class="accordion-collapse collapse show">
                                        <ul class="sorting-lists-mobile list-unstyled m-0">
                                            <li><a href="#" class="text_14">Featured</a></li>
                                            <li><a href="#" class="text_14">Best Selling</a></li>
                                            <li><a href="#" class="text_14">Alphabetically, A-Z</a></li>
                                            <li><a href="#" class="text_14">Alphabetically, Z-A</a></li>
                                            <li><a href="#" class="text_14">Price, low to high</a></li>
                                            <li><a href="#" class="text_14">Price, high to low</a></li>
                                            <li><a href="#" class="text_14">Date, old to new</a></li>
                                            <li><a href="#" class="text_14">Date, new to old</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- sidebar end -->
                    </div>
                </div>
            </div>
        </main>

        <!-- main content end -->

        
        <!-- footer start -->
       
        <!-- footer end -->
        
        <!-- scrollup start -->
        <button id="scrollup">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>  
        </button>
        <!-- scrollup end -->

        <!-- drawer menu start -->
        <div class="offcanvas offcanvas-start d-flex d-lg-none" tabindex="-1" id="drawer-menu">
            <div class="offcanvas-wrapper">
                <div class="offcanvas-header border-btm-black">
                    <h5 class="drawer-heading">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0 d-flex flex-column justify-content-between">
                    <nav class="site-navigation">
                        <ul class="main-menu list-unstyled">
                            <li class="menu-list-item nav-item has-dropdown active">
                                <div class="mega-menu-header">
                                    <a class="nav-link active" href="index.html">
                                        Home
                                    </a>
                                    <span class="open-submenu">
                                        <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            >
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div class="submenu-transform submenu-transform-desktop">
                                    <div class="offcanvas-header border-btm-black">
                                        <h5 class="drawer-heading btn-menu-back d-flex align-items-center">
                                            <svg class="icon icon-menu-back" xmlns="http://www.w3.org/2000/svg"
                                                width="40" height="40" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" >
                                                <polyline points="15 18 9 12 15 6"></polyline>
                                            </svg>
                                            <span class="menu-back-text">Home</span>
                                        </h5>
                                    </div>
                                    <ul class="submenu list-unstyled">
                                        <li class="menu-list-item nav-item-sub"><a class="nav-link-sub nav-text-sub"
                                                href="index.html">Home
                                                1</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub"><a class="nav-link-sub nav-text-sub"
                                                href="index-shoe.html">Home
                                                2</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub"><a class="nav-link-sub nav-text-sub"
                                                href="index-bag.html">Home
                                                3</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub"><a class="nav-link-sub nav-text-sub"
                                                href="index-tools.html">Home
                                                4</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-list-item nav-item has-megamenu">
                                <div class="mega-menu-header">
                                    <a class="nav-link" href="collection-left-sidebar.html">
                                        Shop
                                    </a>
                                    <span class="open-submenu">
                                        <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            >
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div class="submenu-transform submenu-transform-desktop">
                                    <div class="container">
                                        <div class="offcanvas-header border-btm-black">
                                            <h5 class="drawer-heading btn-menu-back d-flex align-items-center">
                                                <svg class="icon icon-menu-back" xmlns="http://www.w3.org/2000/svg"
                                                    width="40" height="40" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" >
                                                    <polyline points="15 18 9 12 15 6"></polyline>
                                                </svg>
                                                <span class="menu-back-text">Shop</span>
                                            </h5>
                                        </div>
                                        <ul class="submenu megamenu-container list-unstyled">
                                            <li class="menu-list-item nav-item-sub">
                                                <div class="mega-menu-header">
                                                    <a class="nav-link-sub nav-text-sub megamenu-heading"
                                                        href="collection-left-sidebar.html">
                                                        Category Pages
                                                    </a>
                                                    <span class="open-submenu">
                                                        <svg class="icon icon-dropdown"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            >
                                                            <polyline points="9 18 15 12 9 6"></polyline>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="submenu-transform">
                                                    <div class="offcanvas-header border-btm-black">
                                                        <h5
                                                            class="drawer-heading btn-menu-back d-flex align-items-center">
                                                            <svg class="icon icon-menu-back"
                                                                xmlns="http://www.w3.org/2000/svg" width="40"
                                                                height="40" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                >
                                                                <polyline points="15 18 9 12 15 6"></polyline>
                                                            </svg>
                                                            <span class="menu-back-text">Category Pages</span>
                                                        </h5>
                                                    </div>
                                                    <ul class="megamenu list-unstyled megamenu-container">
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="collection-left-sidebar.html">With Left
                                                                Sidebar</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="collection-right-sidebar.html">With Right
                                                                Sidebar</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="collection-left-sidebar.html">3 Column
                                                                Layout</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="collection-without-sidebar.html">4 Column
                                                                Layout</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="collection-without-sidebar.html">Without
                                                                Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-list-item nav-item-sub">
                                                <div class="mega-menu-header">
                                                    <a class="nav-link-sub nav-text-sub megamenu-heading"
                                                        href="index.html">
                                                        Product Pages
                                                    </a>
                                                    <span class="open-submenu">
                                                        <svg class="icon icon-dropdown"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            >
                                                            <polyline points="9 18 15 12 9 6"></polyline>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="submenu-transform">
                                                    <div class="offcanvas-header border-btm-black">
                                                        <h5
                                                            class="drawer-heading btn-menu-back d-flex align-items-center">
                                                            <svg class="icon icon-menu-back"
                                                                xmlns="http://www.w3.org/2000/svg" width="40"
                                                                height="40" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                >
                                                                <polyline points="15 18 9 12 15 6"></polyline>
                                                            </svg>
                                                            <span class="menu-back-text">Product Pages</span>
                                                        </h5>
                                                    </div>
                                                    <ul class="megamenu list-unstyled">
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Simple Product</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Variable Product</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Sale Product</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Featured & On Sale</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub" href="product-2.html">Tab
                                                                Inside</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-list-item nav-item-sub">
                                                <div class="mega-menu-header">
                                                    <a class="nav-link-sub nav-text-sub megamenu-heading"
                                                        href="index.html">
                                                        Product Layouts
                                                    </a>
                                                    <span class="open-submenu">
                                                        <svg class="icon icon-dropdown"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            >
                                                            <polyline points="9 18 15 12 9 6"></polyline>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="submenu-transform">
                                                    <div class="offcanvas-header border-btm-black">
                                                        <h5
                                                            class="drawer-heading btn-menu-back d-flex align-items-center">
                                                            <svg class="icon icon-menu-back"
                                                                xmlns="http://www.w3.org/2000/svg" width="40"
                                                                height="40" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                >
                                                                <polyline points="15 18 9 12 15 6"></polyline>
                                                            </svg>
                                                            <span class="menu-back-text">Product Layouts</span>
                                                        </h5>
                                                    </div>
                                                    <ul class="megamenu list-unstyled">
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product-2.html">Grid Images</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Vertical Thumb</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Gallery Type</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Product Width Layout</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Sticky Gallery</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-list-item nav-item-sub">
                                                <div class="mega-menu-header">
                                                    <a class="nav-link-sub nav-text-sub megamenu-heading"
                                                        href="collection-left-sidebar.html">
                                                        Featured Collection
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-list-item nav-item">
                                <a class="nav-link" href="blog.html">Blog</a>
                            </li>
                            <li class="menu-list-item nav-item has-dropdown">
                                <div class="mega-menu-header">
                                    <a class="nav-link active" href="about-us.html">
                                        Pages
                                    </a>
                                    <span class="open-submenu">
                                        <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            >
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div class="submenu-transform submenu-transform-desktop">
                                    <div class="offcanvas-header border-btm-black">
                                        <h5 class="drawer-heading btn-menu-back d-flex align-items-center">
                                            <svg class="icon icon-menu-back" xmlns="http://www.w3.org/2000/svg"
                                                width="40" height="40" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" >
                                                <polyline points="15 18 9 12 15 6"></polyline>
                                            </svg>
                                            <span class="menu-back-text">Pages</span>
                                        </h5>
                                    </div>
                                    <ul class="submenu list-unstyled">
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="about-us.html">About Us</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="contact.html">Contact</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="faq.html">FAQ</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="404.html">404 page</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="login.html">Login</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="register.html">Register</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="wishlist.html">Wishlist</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="cart.html">Cart</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="checkout.html">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-list-item nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <ul class="utility-menu list-unstyled">
                        <li class="utilty-menu-item">
                            <a class="announcement-text" href="tel:+1-078-2376">
                                <span class="utilty-icon-wrapper">
                                    <svg class="icon icon-phone" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                </span>
                                Call: +1 078 2376
                            </a>
                        </li>
                        <li class="utilty-menu-item">
                            <a class="announcement-login announcement-text" href="login.html">
                                <span class="utilty-icon-wrapper">
                                    <svg class="icon icon-user" width="24" height="24" viewBox="0 0 10 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5 0C3.07227 0 1.5 1.57227 1.5 3.5C1.5 4.70508 2.11523 5.77539 3.04688 6.40625C1.26367 7.17188 0 8.94141 0 11H1C1 8.78516 2.78516 7 5 7C7.21484 7 9 8.78516 9 11H10C10 8.94141 8.73633 7.17188 6.95312 6.40625C7.88477 5.77539 8.5 4.70508 8.5 3.5C8.5 1.57227 6.92773 0 5 0ZM5 1C6.38672 1 7.5 2.11328 7.5 3.5C7.5 4.88672 6.38672 6 5 6C3.61328 6 2.5 4.88672 2.5 3.5C2.5 2.11328 3.61328 1 5 1Z"
                                            fill="#000" />
                                    </svg>
                                </span>
                                <span>Login</span>
                            </a>
                        </li>
                        <li class="utilty-menu-item">
                            <a class="header-action-item header-wishlist" href="wishlist.html">
                                <span class="utilty-icon-wrapper">
                                    <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22"
                                        fill="#000" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                            fill="#000" />
                                    </svg>
                                </span>
                                <span>My wishlist</span>
                            </a>
                        </li>
                        <li class="utilty-menu-item">
                            <button type="button" class="currency-btn btn-reset" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img class="flag" src="assets/img/flag/usd.jpg" alt="img">
                                <span>USD</span>
                                <span class="utilty-icon-wrapper">
                                    <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </button>

                            <ul class="currency-list dropdown-menu dropdown-menu-end px-2">
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="USD">
                                        <img class="flag" src="assets/img/flag/usd.jpg" alt="img">
                                        <span>USD</span>
                                    </a>
                                </li>
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="CAD">
                                        <img class="flag" src="assets/img/flag/cad.jpg" alt="img">
                                        <span>CAD</span>
                                    </a>
                                </li>
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="EUR">
                                        <img class="flag" src="assets/img/flag/eur.jpg" alt="img">
                                        <span>EUR</span>
                                    </a>
                                </li>
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="JPY">
                                        <img class="flag" src="assets/img/flag/jpy.jpg" alt="img">
                                        <span>JPY</span>
                                    </a>
                                </li>
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="GBP">
                                        <img class="flag" src="assets/img/flag/gbp.jpg" alt="img">
                                        <span>GBP</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- drawer menu end -->

       
 @endsection       