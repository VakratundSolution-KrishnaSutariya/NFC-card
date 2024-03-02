<?php $__env->startSection('title'); ?>
    <?php echo e(getAppName()); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- start hero section -->
    <section class="hero-section padding-b-100px" id="frontHomeTab">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-lg-row">
                <div class="slideshow-section position-relative">
                        <div class="slideshow-active activate-slider banner-slider activate-slider">
                            <div class="slide-item slide-item-bag position-relative banner-slide">
                                <img src="<?php echo e(isset($setting['home_page_banner']) ? $setting['home_page_banner'] : asset('front/images/hero.png')); ?>"
                                    alt="Vcard" class="img-fluid image-object-fit-cover"/>
                                <div class="content-absolute content-slide">
                                    <div class="container height-inherit d-flex align-items-center justify-content-end">
                                        <div class="content-box slide-content slide-content-1 py-4 hero-content mt-5 mt-lg-0">
                                            <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp text-success"
                                                data-animation="animate__animated animate__fadeInUp">
                                                <?php echo e($setting['home_page_title']); ?>

                                            </h2>
                                            <p class="slide-subheading heading_24 animate__animated animate__fadeInUp text-secondary fs-5 mb-5"
                                                data-animation="animate__animated animate__fadeInUp">
                                                <?php echo e($setting['sub_text'] ?? ''); ?>

                                            </p>
                                            <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                                href="<?php echo e(url('shop')); ?>"
                                                data-animation="animate__animated animate__fadeInUp">SHOP
                                                NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item slide-item-bag position-relative banner-slide">
                                <img src="<?php echo e(isset($setting['home_page_banner']) ? $setting['home_page_banner'] : asset('front/images/hero.png')); ?>"
                                    alt="Vcard" class="img-fluid image-object-fit-cover"/>
                                <div class="content-absolute content-slide">
                                    <div class="container height-inherit d-flex align-items-center justify-content-end">
                                        <div class="content-box slide-content slide-content-1 py-4 text-center hero-content mt-5 mt-lg-0">
                                            <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp text-success"
                                                data-animation="animate__animated animate__fadeInUp">
                                                <?php echo e($setting['home_page_title']); ?>

                                            </h2>
                                            <p class="slide-subheading heading_24 animate__animated animate__fadeInUp text-secondary fs-5 mb-5"
                                                data-animation="animate__animated animate__fadeInUp">
                                                <?php echo e($setting['sub_text'] ?? ''); ?>

                                            </p>
                                            <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                                href="<?php echo e(url('shop')); ?>"
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
                                    dots: false,
                                    arrows: false,
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
                                        <img class="icon-trusted" src="<?php echo e(asset('assets/images/1.png')); ?>" alt="icon-1">
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
                                        <img class="icon-trusted" src="<?php echo e(asset('assets/images/2.png')); ?>" alt="icon-2">
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
                                        <img class="icon-trusted" src="<?php echo e(asset('assets/images/3.png')); ?>" alt="icon-3">
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
                            <a class="grid-item grid-item-1 position-relative rounded mt-0 d-flex" href="<?php echo e(url('shop')); ?>"
                                data-aos="fade-right" data-aos-duration="700">
                                <img class="banner-img rounded" src="<?php echo e(asset('assets/images/f1.jpg')); ?>" alt="banner-1">
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
                            <a class="grid-item grid-item-2 position-relative rounded mt-0 d-flex" href="<?php echo e(url('shop')); ?>"
                                data-aos="fade-right" data-aos-duration="700">
                                <img class="banner-img rounded" src="<?php echo e(asset('assets/images/f3.jpg')); ?>" alt="banner-1">
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
                            <a class="grid-item grid-item-3 position-relative rounded mt-0 d-flex" href="<?php echo e(url('shop')); ?>"
                                data-aos="fade-left" data-aos-duration="700">
                                <img class="banner-img rounded" src="<?php echo e(asset('assets/images/f2.jpg')); ?>" alt="banner-1">
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

<!-- Start features section -->
<section class="features-section" id="frontFeatureTab">
    <div class="featured-collection mt-100 overflow-hidden">
        <div class="collection-tab-inner">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-heading primary-color">Featured Products</h2>
                </div>
                <div class="row">
                    <?php $__currentLoopData = $subscriptionProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscriptionProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                            <div class="product-card">
                                <div class="product-card-img">
                                    <a class="hover-switch" href="<?php echo e(url('shop/'.$subscriptionProduct->id)); ?>">
                                        <img class="primary-img" src="<?php echo e(asset($subscriptionProduct->product_thumb_image)); ?>" alt="product-img">
                                    
                                    </a>
                                    <div class="product-badge">
                                        <span class="badge-label badge-percentage rounded">-<?php echo e($subscriptionProduct->product_price_percentage_discount); ?>%</span>
                                    </div>
                                    <div class="product-card-action product-card-action-2 justify-content-center">
                                        <a href="<?php echo e(url('shop/'.$subscriptionProduct->id)); ?>" class="action-card action-quickview">
                                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <!-- Quick view SVG -->
                                            </svg>
                                        </a>
                                        <!-- Other action buttons -->
                                    </div>
                                </div>
                                <div class="product-card-details">
                                    <!-- Product details -->
                                    <h3 class="product-card-title">
                                        <a href="<?php echo e(url('shop/'.$subscriptionProduct->id)); ?>"><?php echo e($subscriptionProduct->product_title); ?></a>
                                    </h3>
                                    <div class="product-card-price">
                                        <span class="card-price-regular">$<?php echo e($subscriptionProduct->product_price); ?></span>
                                        
                                        <span class="card-price-compare text-decoration-line-through">$<?php echo e($subscriptionProduct->product_price_fix_discount); ?></span>

                                        <!-- Add the compare_price field here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="view-all text-center" data-aos="fade-up" data-aos-duration="700">
                    <a class="btn-primary" href="<?php echo e(url('shop')); ?>">VIEW ALL</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End features section -->



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
                            <div class="col-lg-6 offset-lg-1 col-md-12 col-12" data-aos="fade-left" data-aos-duration="700">
                                <div class="testimonial-container position-relative">
                                    <div class="testimonial-slideshow common-slider">
                                        <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                    <img src="<?php echo e(asset('assets/images/star.png')); ?>" alt="img">
                                                    <img src="<?php echo e(asset('assets/images/star.png')); ?>" alt="img">
                                                    <img src="<?php echo e(asset('assets/images/star.png')); ?>" alt="img">
                                                    <img src="<?php echo e(asset('assets/images/star.png')); ?>" alt="img">
                                                    <img src="<?php echo e(asset('assets/images/star.png')); ?>" alt="img">
                                                </div>
                                            </div>
                                            <p class="testimonial-review my-4 text_16">
                                            <?php echo $feature->description; ?>

                                            </p>
                                            <div class="testimonial-reviewer d-flex align-items-center">
                                                <div class="reviewer-img">
                                                    <img src="<?php echo e($feature->profile_image); ?>" alt="img" class="feature-image feature-image-card image-object-fit-cover">
                                                </div>
                                                <div class="reviewer-info ms-4">
                                                    <h4 class="reviewer-name heading_18 mb-2 primary-color"><?php echo e($feature->name); ?>

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
                                                    <img src="<?php echo e(asset('assets/images/star.png')); ?>" alt="img">
                                                    <img src="<?php echo e(asset('assets/images/star.png')); ?>" alt="img">
                                                    <img src="<?php echo e(asset('assets/images/star.png')); ?>" alt="img">
                                                    <img src="<?php echo e(asset('assets/images/star.png')); ?>" alt="img">
                                                    <img src="<?php echo e(asset('assets/images/star.png')); ?>" alt="img">
                                                </div>
                                            </div>
                                            <p class="testimonial-review my-4 text_16">
                                            <?php echo $feature->description; ?>

                                            </p>
                                            <div class="testimonial-reviewer d-flex align-items-center">
                                                <div class="reviewer-img">
                                                    <img src="<?php echo e($feature->profile_image); ?>" alt="img" class="feature-image feature-image-card image-object-fit-cover">
                                                </div>
                                                <div class="reviewer-info ms-4">
                                                    <h4 class="reviewer-name heading_18 mb-2 primary-color"><?php echo e($feature->name); ?>

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
                                                    <img src="<?php echo e(asset('assets/images/star.png')); ?>" alt="img">
                                                    <img src="<?php echo e(asset('assets/images/star.png')); ?>" alt="img">
                                                    <img src="<?php echo e(asset('assets/images/star.png')); ?>" alt="img">
                                                    <img src="<?php echo e(asset('assets/images/star.png')); ?>" alt="img">
                                                    <img src="<?php echo e(asset('assets/images/star.png')); ?>" alt="img">
                                                </div>
                                            </div>
                                            <p class="testimonial-review my-4 text_16">
                                            <?php echo $feature->description; ?>

                                            </p>
                                            <div class="testimonial-reviewer d-flex align-items-center">
                                                <div class="reviewer-img">
                                                    <img src="<?php echo e($feature->profile_image); ?>" alt="img" class="feature-image feature-image-card image-object-fit-cover">
                                                </div>
                                                <div class="reviewer-info ms-4">
                                                    <h4 class="reviewer-name heading_18 mb-2 primary-color"><?php echo e($feature->name); ?>

                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                        <script>
                                            $(document).ready(function(){
                                                $('.common-slider').slick({
                                                    slidesToShow: 1,
                                                    slidesToScroll: 1,
                                                    dots: false,
                                                    arrows: false,
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
                                    <div class="activate-arrows show-arrows-always article-arrows arrows-white"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonial end -->

            <!-- single banner start -->
            <div class="single-banner-section mt-100 overflow-hidden">
                <div class="position-relative overlay">
                    <img class="single-banner-img" src="<?php echo e(asset('assets/images/nfc-banner.jpg')); ?>" alt="slide-1">

                    <div class="content-absolute content-slide">
                        <div class="container height-inherit d-flex align-items-center justify-content-center">
                            <div class="content-box single-banner-content py-4 text-center" data-aos="fade-up"
                                data-aos-duration="700">
                                <h2 class="single-banner-heading heading_42 text-white animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp" data-aos="fade-up"
                                    data-aos-duration="700">
                                    Created Furniture
                                </h2>
                                <p class="single-banner-text text_16 text-white animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp" data-aos="fade-up"
                                    data-aos-duration="700">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.
                                </p>
                                <a class="btn-primary single-banner-btn animate__animated animate__fadeInUp"
                                    href="<?php echo e(url('shop')); ?>"
                                    data-animation="animate__animated animate__fadeInUp" data-aos="fade-up"
                                    data-aos-duration="700">
                                    DISCOVER NOW
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single banner end -->

            <!-- latest blog start -->
            <div class="latest-blog-section mt-100 overflow-hidden home-section">
                <div class="latest-blog-inner">
                    <div class="container">
                        <div class="section-header text-center">
                            <h2 class="section-heading primary-color">Latest blogs</h2>
                        </div>
                        <div class="article-card-container position-relative">
                            <div class="common-slider" data-slick='{
                                "slidesToShow": 3, 
                                "slidesToScroll": 1,
                                "dots": false,
                                "arrows": true,
                                "responsive": [
                                  {
                                    "breakpoint": 1281,
                                    "settings": {
                                      "slidesToShow": 2
                                    }
                                  },
                                  {
                                    "breakpoint": 602,
                                    "settings": {
                                      "slidesToShow": 1
                                    }
                                  }
                                ]
                            }'>

                                <div class="article-slick-item" data-aos="fade-up" data-aos-duration="700">
                                    <div class="article-card bg-transparent p-0 shadow-none">
                                        <a class="article-card-img-wrapper" href="article.html">
                                            <img src="<?php echo e(asset('assets/images/card-2.jpg')); ?>" alt="img"
                                                class="article-card-img rounded">

                                            <span class="article-tag article-tag-absolute rounded">Decor</span>
                                        </a>
                                        <p class="article-card-published text_12 d-flex align-items-center">
                                            <span class="article-date d-flex align-items-center">
                                                <span class="icon-publish">
                                                    <svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3.46875 0.875V1.59375H0.59375V17.4063H16.4063V1.59375H13.5313V0.875H12.0938V1.59375H4.90625V0.875H3.46875ZM2.03125 3.03125H3.46875V3.75H4.90625V3.03125H12.0938V3.75H13.5313V3.03125H14.9688V4.46875H2.03125V3.03125ZM2.03125 5.90625H14.9688V15.9688H2.03125V5.90625ZM6.34375 7.34375V8.78125H7.78125V7.34375H6.34375ZM9.21875 7.34375V8.78125H10.6563V7.34375H9.21875ZM12.0938 7.34375V8.78125H13.5313V7.34375H12.0938ZM3.46875 10.2188V11.6563H4.90625V10.2188H3.46875ZM6.34375 10.2188V11.6563H7.78125V10.2188H6.34375ZM9.21875 10.2188V11.6563H10.6563V10.2188H9.21875ZM12.0938 10.2188V11.6563H13.5313V10.2188H12.0938ZM3.46875 13.0938V14.5313H4.90625V13.0938H3.46875ZM6.34375 13.0938V14.5313H7.78125V13.0938H6.34375ZM9.21875 13.0938V14.5313H10.6563V13.0938H9.21875Z"
                                                            fill="#00234D" />
                                                    </svg>
                                                </span>
                                                <span class="ms-2">30 December, 2022</span>
                                            </span>
                                            <span class="article-author d-flex align-items-center ms-4">
                                                <span class="icon-author"><svg width="15" height="17"
                                                        viewBox="0 0 15 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.5 0.59375C4.72888 0.59375 2.46875 2.85388 2.46875 5.625C2.46875 7.3573 3.35315 8.89587 4.69238 9.80274C2.12903 10.9033 0.3125 13.447 0.3125 16.4063H1.75C1.75 13.2224 4.31616 10.6563 7.5 10.6563C10.6838 10.6563 13.25 13.2224 13.25 16.4063H14.6875C14.6875 13.447 12.871 10.9033 10.3076 9.80274C11.6469 8.89587 12.5313 7.3573 12.5313 5.625C12.5313 2.85388 10.2711 0.59375 7.5 0.59375ZM7.5 2.03125C9.49341 2.03125 11.0938 3.63159 11.0938 5.625C11.0938 7.61841 9.49341 9.21875 7.5 9.21875C5.50659 9.21875 3.90625 7.61841 3.90625 5.625C3.90625 3.63159 5.50659 2.03125 7.5 2.03125Z"
                                                            fill="#00234D" />
                                                    </svg>
                                                </span>
                                                <span class="ms-2">Lara Joe</span>
                                            </span>
                                        </p>
                                        <h2 class="article-card-heading heading_18">
                                            <a class="heading_18" href="article.html">
                                                Pure is the most furniture.
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                                <div class="article-slick-item" data-aos="fade-up" data-aos-duration="700">
                                    <div class="article-card bg-transparent p-0 shadow-none">
                                        <a class="article-card-img-wrapper" href="article.html">
                                            <img src="<?php echo e(asset('assets/images/card-2.jpg')); ?>" alt="img"
                                                class="article-card-img rounded">
                                            <span class="article-tag article-tag-absolute rounded">Furniture</span>
                                        </a>
                                        <p class="article-card-published text_12 d-flex align-items-center">
                                            <span class="article-date d-flex align-items-center">
                                                <span class="icon-publish">
                                                    <svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3.46875 0.875V1.59375H0.59375V17.4063H16.4063V1.59375H13.5313V0.875H12.0938V1.59375H4.90625V0.875H3.46875ZM2.03125 3.03125H3.46875V3.75H4.90625V3.03125H12.0938V3.75H13.5313V3.03125H14.9688V4.46875H2.03125V3.03125ZM2.03125 5.90625H14.9688V15.9688H2.03125V5.90625ZM6.34375 7.34375V8.78125H7.78125V7.34375H6.34375ZM9.21875 7.34375V8.78125H10.6563V7.34375H9.21875ZM12.0938 7.34375V8.78125H13.5313V7.34375H12.0938ZM3.46875 10.2188V11.6563H4.90625V10.2188H3.46875ZM6.34375 10.2188V11.6563H7.78125V10.2188H6.34375ZM9.21875 10.2188V11.6563H10.6563V10.2188H9.21875ZM12.0938 10.2188V11.6563H13.5313V10.2188H12.0938ZM3.46875 13.0938V14.5313H4.90625V13.0938H3.46875ZM6.34375 13.0938V14.5313H7.78125V13.0938H6.34375ZM9.21875 13.0938V14.5313H10.6563V13.0938H9.21875Z"
                                                            fill="#00234D" />
                                                    </svg>
                                                </span>
                                                <span class="ms-2">30 December, 2022</span>
                                            </span>
                                            <span class="article-author d-flex align-items-center ms-4">
                                                <span class="icon-author"><svg width="15" height="17"
                                                        viewBox="0 0 15 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.5 0.59375C4.72888 0.59375 2.46875 2.85388 2.46875 5.625C2.46875 7.3573 3.35315 8.89587 4.69238 9.80274C2.12903 10.9033 0.3125 13.447 0.3125 16.4063H1.75C1.75 13.2224 4.31616 10.6563 7.5 10.6563C10.6838 10.6563 13.25 13.2224 13.25 16.4063H14.6875C14.6875 13.447 12.871 10.9033 10.3076 9.80274C11.6469 8.89587 12.5313 7.3573 12.5313 5.625C12.5313 2.85388 10.2711 0.59375 7.5 0.59375ZM7.5 2.03125C9.49341 2.03125 11.0938 3.63159 11.0938 5.625C11.0938 7.61841 9.49341 9.21875 7.5 9.21875C5.50659 9.21875 3.90625 7.61841 3.90625 5.625C3.90625 3.63159 5.50659 2.03125 7.5 2.03125Z"
                                                            fill="#00234D" />
                                                    </svg>
                                                </span>
                                                <span class="ms-2">Lara Joe</span>
                                            </span>
                                        </p>
                                        <h2 class="article-card-heading heading_18">
                                            <a class="heading_18" href="article.html">
                                                Minimalism in your room.
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                                <div class="article-slick-item" data-aos="fade-up" data-aos-duration="700">
                                    <div class="article-card bg-transparent p-0 shadow-none">
                                        <a class="article-card-img-wrapper" href="article.html">
                                            <img src="<?php echo e(asset('assets/images/card-2.jpg')); ?>" alt="img"
                                                class="article-card-img rounded">
                                            <span class="article-tag article-tag-absolute rounded">Kitchen</span>
                                        </a>
                                        <p class="article-card-published text_12 d-flex align-items-center">
                                            <span class="article-date d-flex align-items-center">
                                                <span class="icon-publish">
                                                    <svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3.46875 0.875V1.59375H0.59375V17.4063H16.4063V1.59375H13.5313V0.875H12.0938V1.59375H4.90625V0.875H3.46875ZM2.03125 3.03125H3.46875V3.75H4.90625V3.03125H12.0938V3.75H13.5313V3.03125H14.9688V4.46875H2.03125V3.03125ZM2.03125 5.90625H14.9688V15.9688H2.03125V5.90625ZM6.34375 7.34375V8.78125H7.78125V7.34375H6.34375ZM9.21875 7.34375V8.78125H10.6563V7.34375H9.21875ZM12.0938 7.34375V8.78125H13.5313V7.34375H12.0938ZM3.46875 10.2188V11.6563H4.90625V10.2188H3.46875ZM6.34375 10.2188V11.6563H7.78125V10.2188H6.34375ZM9.21875 10.2188V11.6563H10.6563V10.2188H9.21875ZM12.0938 10.2188V11.6563H13.5313V10.2188H12.0938ZM3.46875 13.0938V14.5313H4.90625V13.0938H3.46875ZM6.34375 13.0938V14.5313H7.78125V13.0938H6.34375ZM9.21875 13.0938V14.5313H10.6563V13.0938H9.21875Z"
                                                            fill="#00234D" />
                                                    </svg>
                                                </span>
                                                <span class="ms-2">30 December, 2022</span>
                                            </span>
                                            <span class="article-author d-flex align-items-center ms-4">
                                                <span class="icon-author"><svg width="15" height="17"
                                                        viewBox="0 0 15 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.5 0.59375C4.72888 0.59375 2.46875 2.85388 2.46875 5.625C2.46875 7.3573 3.35315 8.89587 4.69238 9.80274C2.12903 10.9033 0.3125 13.447 0.3125 16.4063H1.75C1.75 13.2224 4.31616 10.6563 7.5 10.6563C10.6838 10.6563 13.25 13.2224 13.25 16.4063H14.6875C14.6875 13.447 12.871 10.9033 10.3076 9.80274C11.6469 8.89587 12.5313 7.3573 12.5313 5.625C12.5313 2.85388 10.2711 0.59375 7.5 0.59375ZM7.5 2.03125C9.49341 2.03125 11.0938 3.63159 11.0938 5.625C11.0938 7.61841 9.49341 9.21875 7.5 9.21875C5.50659 9.21875 3.90625 7.61841 3.90625 5.625C3.90625 3.63159 5.50659 2.03125 7.5 2.03125Z"
                                                            fill="#00234D" />
                                                    </svg>
                                                </span>
                                                <span class="ms-2">Lara Joe</span>
                                            </span>
                                        </p>
                                        <h2 class="article-card-heading heading_18">
                                            <a class="heading_18" href="article.html">
                                                Build up your kitchen.
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                                <div class="article-slick-item" data-aos="fade-up" data-aos-duration="700">
                                    <div class="article-card bg-transparent p-0 shadow-none">
                                        <a class="article-card-img-wrapper" href="article.html">
                                            <img src="<?php echo e(asset('assets/images/card-2.jpg')); ?>" alt="img"
                                                class="article-card-img rounded">
                                            <span class="article-tag article-tag-absolute rounded">Furniture</span>
                                        </a>
                                        <p class="article-card-published text_12 d-flex align-items-center">
                                            <span class="article-date d-flex align-items-center">
                                                <span class="icon-publish">
                                                    <svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3.46875 0.875V1.59375H0.59375V17.4063H16.4063V1.59375H13.5313V0.875H12.0938V1.59375H4.90625V0.875H3.46875ZM2.03125 3.03125H3.46875V3.75H4.90625V3.03125H12.0938V3.75H13.5313V3.03125H14.9688V4.46875H2.03125V3.03125ZM2.03125 5.90625H14.9688V15.9688H2.03125V5.90625ZM6.34375 7.34375V8.78125H7.78125V7.34375H6.34375ZM9.21875 7.34375V8.78125H10.6563V7.34375H9.21875ZM12.0938 7.34375V8.78125H13.5313V7.34375H12.0938ZM3.46875 10.2188V11.6563H4.90625V10.2188H3.46875ZM6.34375 10.2188V11.6563H7.78125V10.2188H6.34375ZM9.21875 10.2188V11.6563H10.6563V10.2188H9.21875ZM12.0938 10.2188V11.6563H13.5313V10.2188H12.0938ZM3.46875 13.0938V14.5313H4.90625V13.0938H3.46875ZM6.34375 13.0938V14.5313H7.78125V13.0938H6.34375ZM9.21875 13.0938V14.5313H10.6563V13.0938H9.21875Z"
                                                            fill="#00234D" />
                                                    </svg>
                                                </span>
                                                <span class="ms-2">30 December, 2022</span>
                                            </span>
                                            <span class="article-author d-flex align-items-center ms-4">
                                                <span class="icon-author"><svg width="15" height="17"
                                                        viewBox="0 0 15 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.5 0.59375C4.72888 0.59375 2.46875 2.85388 2.46875 5.625C2.46875 7.3573 3.35315 8.89587 4.69238 9.80274C2.12903 10.9033 0.3125 13.447 0.3125 16.4063H1.75C1.75 13.2224 4.31616 10.6563 7.5 10.6563C10.6838 10.6563 13.25 13.2224 13.25 16.4063H14.6875C14.6875 13.447 12.871 10.9033 10.3076 9.80274C11.6469 8.89587 12.5313 7.3573 12.5313 5.625C12.5313 2.85388 10.2711 0.59375 7.5 0.59375ZM7.5 2.03125C9.49341 2.03125 11.0938 3.63159 11.0938 5.625C11.0938 7.61841 9.49341 9.21875 7.5 9.21875C5.50659 9.21875 3.90625 7.61841 3.90625 5.625C3.90625 3.63159 5.50659 2.03125 7.5 2.03125Z"
                                                            fill="#00234D" />
                                                    </svg>
                                                </span>
                                                <span class="ms-2">Lara Joe</span>
                                            </span>
                                        </p>
                                        <h2 class="article-card-heading heading_18">
                                            <a class="heading_18" href="article.html">
                                                Minimalism in your room.
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="activate-arrows show-arrows-always article-arrows arrows-white"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- latest blog end -->

            <!-- brand logo start -->
            <div class="brand-logo-section mt-100">
                <div class="brand-logo-inner">
                    <div class="container">
                        <div class="brand-logo-container overflow-hidden">
                            <div class="scroll-horizontal row align-items-center flex-nowrap">
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                                    data-aos-duration="700">
                                    <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                        <img src="<?php echo e(('assets/images/infyom-logo.png')); ?>" alt="img">
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                                    data-aos-duration="700">
                                    <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                        <img src="<?php echo e(('assets/images/infyom-logo.png')); ?>" alt="img">
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                                    data-aos-duration="700">
                                    <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                        <img src="<?php echo e(('assets/images/infyom-logo.png')); ?>" alt="img">
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                                    data-aos-duration="700">
                                    <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                        <img src="<?php echo e(('assets/images/infyom-logo.png')); ?>" alt="img">
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                                    data-aos-duration="700">
                                    <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                        <img src="<?php echo e(('assets/images/infyom-logo.png')); ?>" alt="img">
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                                    data-aos-duration="700">
                                    <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                        <img src="<?php echo e(('assets/images/infyom-logo.png')); ?>" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand logo end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Nfc-vcard\resources\views/front/home/home.blade.php ENDPATH**/ ?>