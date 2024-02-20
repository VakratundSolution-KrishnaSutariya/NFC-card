<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('assets/css/new-page.css') }}" rel="stylesheet" type="text/css">
    <!-- Add these lines to include Slick slider files -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css"/>



    @if(!empty($metas))
        @if($metas['meta_description'])
            <meta name="description" content="{{$metas['meta_description']}}">
        @endif
        @if($metas['meta_keyword'])
            <meta name="keywords" content="{{$metas['meta_keyword']}}">
        @endif
        @if($metas['home_title'] && $metas['site_title'])
            <title>{{ $metas['home_title'] }} | {{ $metas['site_title'] }}</title>
        @else
            <title>@yield('title') | {{ getAppName() }}</title>
        @endif
    @else
        <title>@yield('title') | {{ getAppName() }}</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
    @endif

    @if(!empty(getAppLogo()))
        <meta property="og:image" content="{{getAppLogo()}}"/>
    @endif

    <link rel="icon" href="{{ getFaviconUrl() }}" type="image/png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="{{ mix('assets/css/public.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/third-party.css') }}">
    <link href="{{ asset('assets/css/front-custom.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/front/front-custom.css') }}" rel="stylesheet" type="text/css">


    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick Slider v1.8.1 -->
    <!-- Slick Slider CSS -->
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/> -->

    <!-- Line Awesome v1.3.0 -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"> -->
    <!-- AOS Animation v2.3.1 -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet"> -->
    <!-- Animate.min.css v4.1.1 -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"> -->
    <!-- Fancybox.min.css v3.2.11 -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet"> -->
   

    <script src="{{ mix('assets/js/front-third-party.js') }}"></script>
    <script src="{{ asset('assets/js/messages.js') }}"></script>
    <!-- new js -->
    <script src="{{ asset('assets/js/home_page/other_new.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>

    @php  $langSession = Session::get('languageName');
           $frontLanguage = !isset($langSession) ? getSuperAdminSettingValue('default_language') : $langSession;
    @endphp
    <script>
        let frontLanguage = "{{ $frontLanguage }}"
        Lang.setLocale(frontLanguage)
    </script>
    <script src="{{ mix('assets/js/front-pages.js') }}"></script>

    {!! getSuperAdminSettingValue('extra_js_front') !!}
    @routes
    {{--@yield('page_js')--}}
    {{--@yield('scripts')--}}
    <script>
        $('html, body').animate({
            scrollTop: $('html, body').offset().top,
        })
    </script>
    <!--google analytics code-->
    @if(!empty($metas['google_analytics']))
        <script>
            {!! $metas['google_analytics'] !!}
        </script>
    @endif
</head>

<body data-bs-offset="71">
    
<!-- start header section -->
@include('front.layouts.header')
@yield('content')
@include('front.layouts.footer')
<!-- add footer hereFFF -->

</body>
</html>
