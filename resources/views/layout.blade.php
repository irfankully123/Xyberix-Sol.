<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/swiper-min-css.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/main.css?v1') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-D2TKPS3JSE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-D2TKPS3JSE');
    </script> --}}
    @yield('styles')
    <title>Xyberix Solutions</title>
</head>

<body>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">×</span>
            <h2>Get Details</h2>
            <form id="getaquoteform" onsubmit="submitForm(); return false;">
                <label style="color: white" for="name">Name:</label>
                <input type="text" id="name" name="name" required="" autocomplete="name">

                <label style="color: white" for="email">Email:</label>
                <input type="email" id="email" name="email" required="" autocomplete="email">

                <label style="color: white" for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required="" autocomplete="phone">

                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>
    <div id="portrait-warnning" class="alert-warnning" style="display: none">
        <p>For an optimal experience please<br> rotate your device to portrait mode</p>
    </div>
    <div class="loader-first"></div>
    <header class="header">
        <div class="header__container">
            <div class="header__wrapper">
                <div class="brand-logo">
                    <a href="{{ route('home') }}">
                        <picture>
                            <source srcset="{{ asset('assets/brand-logo.png') }}" type="image/webp">
                            <img src="{{ asset('assets/brand-logo.png') }}" alt="Brand Logo">
                        </picture>
                    </a>
                </div>
                <div class="navigation-wrapper">
                    <nav class="navigation">
                        <ul class="menu">
                            <li class="menu__menuitem ">
                                <a href="{{ route('home') }}" class="menu__menuitem--menulink">
                                    Home </a>
                            </li>
                            <li class="menu__menuitem ">
                                <a href="{{ route('pricing') }}" class="menu__menuitem--menulink">
                                    Pricing </a>
                            </li>
                            <li class="menu__menuitem ">
                                <a href="{{ route('portfolio') }}" class="menu__menuitem--menulink">
                                    Portfolio </a>
                            </li>
                            <li class="menu__menuitem">
                                <a href="{{ route('service') }}" class="menu__menuitem--menulink">
                                    Services </a>
                                <div class="s-column-dropdown-menu dropdown-js">
                                    <div class="menu-slider-wrapper">
                                        <div class="dropdown__menu-item menu-slider-thumb-wrapper">
                                            <ul class="menu-slider-thumb">
                                                <li class="menu-slider-thumb-slide" data-menu="service-tab1">
                                                    <a href="javascript:void(0)">
                                                        <div class="slide-head">
                                                            Web Development
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="menu-slider-thumb-slide" data-menu="service-tab2">
                                                    <a href="javascript:void(0)">
                                                        <div class="slide-head">
                                                            Mobile Application Development
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="menu-slider-thumb-slide" data-menu="service-tab3">
                                                    <a href="javascript:void(0)">
                                                        <div class="slide-head">
                                                            Digital Marketing
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="menu-slider-thumb-slide" data-menu="service-tab4">
                                                    <a href="javascript:void(0)">
                                                        <div class="slide-head">
                                                            Ui/Ux Design
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="menu-slider-thumb-slide" data-menu="service-tab5">
                                                    <a href="javascript:void(0)">
                                                        <div class="slide-head">
                                                            E-commerce Web development
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="menu-slider-thumb-slide" data-menu="service-tab6">
                                                    <a href="javascript:void(0)">
                                                        <div class="slide-head">
                                                            Digital Branding &amp; Communication
                                                        </div>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="menu-slider-gallery-wrapper">
                                            <ul class="menu-slider-gallery">
                                                <li class="menu-slider-gallery-slide" data-menu="service-tab1">
                                                    <div class="slide-head">
                                                        Web Development
                                                    </div>
                                                    <ul class="list-wrapper">
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=wordpress-development">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/WORDPRESS.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/WORDPRESS.webp') }}"
                                                                        alt="wordpress">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Wordpress Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=sharepoint-development">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/SHAREPOINT.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/SHAREPOINT.webp') }}"
                                                                        alt="sharepoint">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    SharePoint Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=enterprise-development">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/ENTERPRISE.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/ENTERPRISE.webp') }}"
                                                                        alt="enterprise">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Enterprise Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=sitecore-development">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/SITECORE.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/SITECORE.webp') }}"
                                                                        alt="sitecore">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Sitecore Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a href="{{ route('service') }}?service=php-development">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/PHP.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/PHP.webp') }}"
                                                                        alt="php">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Php Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=joomla-development">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/JOOMLA.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/JOOMLA.webp') }}"
                                                                        alt="joomla">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Joomla Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=asp-net-development">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/ASPdotNET.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/ASPdotNET.webp') }}"
                                                                        alt="ASP">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    ASP.NET Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=cms-website-development">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/CMS.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/CMS.webp') }}"
                                                                        alt="cms">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    CMS Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=drupal-web-development">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/DRUPAL.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/DRUPAL.webp') }}"
                                                                        alt="drupal">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Drupal Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a href="{{ route('service') }}?service=ibexa-dxp">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/IBEXA.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/IBEXA.webp') }}"
                                                                        alt="ibexa">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    ibexa DXP Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=laravel-web-development">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/LARAVEL.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/LARAVEL.webp') }}"
                                                                        alt="Laravel">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Laravel Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=python-development">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/PYTHON.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/PYTHON.webp') }}"
                                                                        alt="phython">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Python Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=angularjs-development">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                       src="{{ asset('assets/header-icons/ANGULARJS.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/ANGULARJS.webp') }}"
                                                                        alt="angular">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Angularjs Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=website-maintenance-services">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                       src="{{ asset('assets/header-icons/WEBSITE-MAINTENANCE.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/WEBSITE-MAINTENANCE.webp') }}"
                                                                        alt="website-maintenance">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Website Maintenance Services
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=whatsapp-business-integration">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/WEBSITE-MAINTENANCE.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/WEBSITE-MAINTENANCE.webp') }}"
                                                                        alt="whatsapp-business-integration">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Whatsapp Integration
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-slider-gallery-slide" data-menu="service-tab2">
                                                    <div class="slide-head">
                                                        Mobile Application Development
                                                    </div>
                                                    <ul class="list-wrapper">
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=hybrid-app-development">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                       src="{{ asset('assets/header-icons/HYBRID.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/HYBRID.webp') }}"
                                                                        alt="hybrid-app-development">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    hybrid Apps
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=android-app-development">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                       src="{{ asset('assets/header-icons/ANDROID.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/ANDROID.webp') }}"
                                                                        alt="android-app-development">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Android App development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=ios-app-development-dubai">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/IOS.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/IOS.webp') }}"
                                                                        alt="service=ios-app-development-dubai">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    IOS app development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=react-app-development">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/REACT-NATIVE.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/REACT-NATIVE.webp') }}"
                                                                        alt="react-app-development">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    React Native apps
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=flutter-app-development">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/FLUTTER.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/FLUTTER.webp') }}"
                                                                        alt="flutter-app-development">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Flutter apps
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=progressive-web-app-dubai.html">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/PROGRESSIVE-WEB.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/PROGRESSIVE-WEB.webp') }}"
                                                                        alt="progressive-web-app-dubai">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    progressive Web apps
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=ruby-on-rails-development">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/RUBY-ON-RAILS.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/RUBY-ON-RAILS.webp') }}"
                                                                        alt="ruby-on-rails-development">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Ruby on Rails (ROR) Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-slider-gallery-slide" data-menu="service-tab3">
                                                    <div class="slide-head">
                                                        Digital Marketing
                                                    </div>
                                                    <ul class="list-wrapper">
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=social-media-marketing">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/SOCIAL-MEDIA-MARKETING.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/SOCIAL-MEDIA-MARKETING.webp') }}"
                                                                        alt="service=social-media-marketing">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Social Media Marketing (SMM)
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=social-media-optimization">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/SOCIAL-MEDIA-OPTIMIZATION.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/SOCIAL-MEDIA-OPTIMIZATION.webp') }}"
                                                                        alt="social-media-optimization">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Social Media Optimization (SMO)
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a href="{{ route('service') }}?service=pay-per-click">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/PAY-PER-CLICK.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/PAY-PER-CLICK.webp') }}"
                                                                        alt="service=pay-per-click">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Pay Per Click (PPC)
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a href="{{ route('service') }}?service=seo">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/SEARCH-ENGINE-OPTIMIZATION.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/SEARCH-ENGINE-OPTIMIZATION.webp') }}"
                                                                        alt="seo">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Search Engine Optimization (SEO)
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=coversion-rate-optimization">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/CONVERSION-RATE-OPTIMIZATION.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/CONVERSION-RATE-OPTIMIZATION.webp') }}"
                                                                        alt="coversion-rate-optimization">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Conversion Rate Optimization (CRO)
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a href="{{ route('service') }}?service=email-marketing">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/EMAIL-MARKETING.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/EMAIL-MARKETING.webp') }}"
                                                                        alt="email-marketing">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Email Marketing
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=content-marketing">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/CONTENT-MARKETING.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/CONTENT-MARKETING.webp') }}"
                                                                        alt="content-marketing">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Content Marketing
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=online-reputation-management">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/ONLINE-REPUTATION-MANAGEMENT.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/ONLINE-REPUTATION-MANAGEMENT.webp') }}"
                                                                        alt="online-reputation-management">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Online Reputation Management (ORM)
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=aso-app-store-optimization-services">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                         src="{{ asset('assets/header-icons/APP-STORE-OPTIMIZATION.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/APP-STORE-OPTIMIZATION.webp') }}"
                                                                        alt="aso-app-store-optimization-services"
                                                                        >
                                                                </div>
                                                                <div class="list-item__head">
                                                                    App Store Optimization (ASO)
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a href="{{ route('service') }}?service=pr-firm">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/PUBLIC-RELATION.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/PUBLIC-RELATION.webp') }}"
                                                                        alt="pr-firm">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Public Relation (PR)
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=translation-services-company">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/ONLINE-TRANSLATION-SERVICES.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/ONLINE-TRANSLATION-SERVICES.webp') }}"
                                                                        alt="translation-services-company">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Online Translation Services
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-slider-gallery-slide" data-menu="service-tab4">
                                                    <div class="slide-head">
                                                        Ui/Ux Design
                                                    </div>
                                                    <ul class="list-wrapper">
                                                        <li class="list-item">
                                                            <a href="{{ route('service') }}?service=psd-to-html">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/PSD-TO-RESPONSIVE-HTML.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/PSD-TO-RESPONSIVE-HTML.webp') }}"
                                                                        alt="psd-to-html"
                                                                        >
                                                                </div>
                                                                <div class="list-item__head">
                                                                    PSD To Responsive HTML
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a href="{{ route('service') }}?service=ux-workshops">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/UX-DESIGN-WORKSHOP.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/UX-DESIGN-WORKSHOP.webp') }}"
                                                                        alt="ux-workshops">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    UX Design Workshop
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=responsive-website-design">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/RESPONSIVE-WEB.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/RESPONSIVE-WEB.webp') }}"
                                                                        alt="responsive-website-design">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Responsive Web Design
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a href="{{ route('service') }}?service=ux-design">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                       src="{{ asset('assets/header-icons/UX-DESIGN.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/UX-DESIGN.webp') }}"
                                                                        alt="service=ux-design">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    UX Design
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=landing-page-design">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                      src="{{ asset('assets/header-icons/LANDING-PAGE.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/LANDING-PAGE.webp') }}"
                                                                        alt="service=landing-page-design">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Landing Page Design
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a href="{{ route('service') }}?service=ux-audit-dubai">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/UX-AUDIT.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/UX-AUDIT.webp') }}"
                                                                        alt="ux-audit-dubai">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    UX Audit
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=graphic-design-services">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/GRAPHIC-DESIGN.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/GRAPHIC-DESIGN.webp') }}"
                                                                        alt="graphic-design-services">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Graphic Design
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-slider-gallery-slide" data-menu="service-tab5">
                                                    <div class="slide-head">
                                                        E-commerce Web development
                                                    </div>
                                                    <ul class="list-wrapper">
                                                        <li class="list-item">
                                                            <a href="{{ route('service') }}?service=woo-commerce">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/WOO-COMMERCE.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/WOO-COMMERCE.webp') }}"
                                                                        alt="woo-commerce">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Woo Commerce Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a href="{{ route('service') }}?service=mirakl">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                       src="{{ asset('assets/header-icons/MIRAKL-DEVELOPMENT.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/MIRAKL-DEVELOPMENT.webp') }}"
                                                                        alt="mirakl">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Mirakl Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a href="{{ route('service') }}?service=magento">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/MAGENTO-ECOMMERCE.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/MAGENTO-ECOMMERCE.webp') }}"
                                                                        alt="magento">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Magento Ecommerce Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a href="{{ route('service') }}?service=big-commerce">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                       src="{{ asset('assets/header-icons/BIG-COMMERCE.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/BIG-COMMERCE.webp') }}"
                                                                        alt="big-commerce">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Big Commerce Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a href="{{ route('service') }}?service=shopify">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/SHOPIFY-ECOMMERCE.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/SHOPIFY-ECOMMERCE.webp') }}"
                                                                        alt="shopify">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Shopify Ecommerce Development
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a href="{{ route('service') }}?service=shopify-plus">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                       src="{{ asset('assets/header-icons/SHOPIFY-PLUS-ECOMMERCE.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/SHOPIFY-PLUS-ECOMMERCE.webp') }}"
                                                                        alt="SHOPIFY-PLUS-ECOMMERCE">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Shopify Plus Ecommerce Developments
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-slider-gallery-slide" data-menu="service-tab6">
                                                    <div class="slide-head">
                                                        Digital Branding &amp; Communication
                                                    </div>
                                                    <ul class="list-wrapper">
                                                        <li class="list-item">
                                                            <a href="{{ route('service') }}?service=brochure-design">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                    src="{{ asset('assets/header-icons/COMPANY-PROFILE-&-BROCHURE.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/COMPANY-PROFILE-&-BROCHURE.webp') }}"
                                                                        alt="brochure-design">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Company Profile &amp; Brochure Design
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=business-card-design">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/BUSINESS-CARD.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/BUSINESS-CARD.webp') }}"
                                                                        alt="business-card-design">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Business Card Design
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=corporate-identity-design">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                     src="{{ asset('assets/header-icons/CORPORATE-IDENTITY.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/CORPORATE-IDENTITY.webp') }}"
                                                                        alt="corporate-identity-design">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Corporate Identity Design
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=packaging-designs">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/PACKAGING.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/PACKAGING.webp') }}"
                                                                        alt="packaging-designs">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Packaging Designs
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a
                                                                href="{{ route('service') }}?service=logo-design-dubai">
                                                                <div class="list-item__img">
                                                                    <img class="lazy-img"
                                                                        src="{{ asset('assets/header-icons/LOGO.webp') }}"
                                                                        data-src="{{ asset('assets/header-icons/LOGO.webp') }}"
                                                                        alt="logo-design-dubai">
                                                                </div>
                                                                <div class="list-item__head">
                                                                    Logo Design
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                             
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu__menuitem ">
                                <a href="{{ route('about') }}" class="menu__menuitem--menulink">
                                    About </a>
                            </li>


                            <li class="menu__menuitem ">
                                <a href="{{ route('career') }}" class="menu__menuitem--menulink">
                                    Careers </a>
                            </li>
                            <li class="menu__menuitem ">
                                <a href="{{ route('contact') }}" class="menu__menuitem--menulink">
                                    Contact </a>
                            </li>
                        </ul>
                        <div class="social-wrapper">
                            <div class="anchor-wrapper project-anchor">
                                <button class="menu-open btn get-in-touch-wrap" id="animatedButton"><span>Get a Free
                                        Quote</span></button>
                            </div>
                        </div>
                    </nav>
                    <div class="mobNav">
                        <ul class="mobNav__menu">
                            <li class="mobNav__menu--item ">
                                <a href="{{ route('home') }}" class="menu-link">
                                    Home </a>
                            </li>
                            <li class="mobNav__menu--item ">
                                <a href="{{ route('pricing') }}" class="menu-link">
                                    Pricing </a>
                            </li>
                            <li class="mobNav__menu--item ">
                                <a href="{{ route('portfolio') }}" class="menu-link">
                                    Portfolio </a>
                            </li>
                            <li class="mobNav__menu--item ">
                                <a href="{{ route('service') }}" class="menu-link">
                                    Services </a>
                                <ul class="inner-menu">
                                    <li class="inner-menu__item">
                                        <a class="inner-menu__item--link" href="javascript:void(0)"> Web
                                            Development</a>
                                        <ul class="sub-inner-menu">
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=wordpress-development">
                                                    Wordpress Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=sharepoint-development">
                                                    SharePoint Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=enterprise-development">
                                                    Enterprise Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=sitecore-development">
                                                    Sitecore Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=php-development">
                                                    Php Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=joomla-development">
                                                    Joomla Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=asp-net-development">
                                                    ASP.NET Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=cms-website-development">
                                                    CMS Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=drupal-web-development">
                                                    Drupal Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=ibexa-dxp">
                                                    ibexa DXP Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=laravel-web-development">
                                                    Laravel Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=python-development">
                                                    Python Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=angularjs-development">
                                                    Angularjs Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=website-maintenance-services">
                                                    Website Maintenance Services </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=whatsapp-business-integration">
                                                    Whatsapp Integration </a>
                                            </li>
                                        </ul>
                                        <div class="inner-menu-toggleBtn"></div>
                                    </li>
                                    <li class="inner-menu__item">
                                        <a class="inner-menu__item--link" href="javascript:void(0)">
                                            Mobile Application Development</a>
                                        <ul class="sub-inner-menu">
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=hybrid-app-development">
                                                    hybrid Apps </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=android-app-development">
                                                    Android App development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=ios-app-development-dubai">
                                                    IOS app development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=react-app-development">
                                                    React Native apps </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=flutter-app-development">
                                                    Flutter apps </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=progressive-web-app-dubai.html">
                                                    progressive Web apps </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=ruby-on-rails-development">
                                                    Ruby on Rails (ROR) Development </a>
                                            </li>
                                        </ul>
                                        <div class="inner-menu-toggleBtn"></div>
                                    </li>
                                    <li class="inner-menu__item">
                                        <a class="inner-menu__item--link" href="javascript:void(0)"> Digital
                                            Marketing</a>
                                        <ul class="sub-inner-menu">
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=social-media-marketing">
                                                    Social Media Marketing (SMM) </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=social-media-optimization">
                                                    Social Media Optimization (SMO) </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=pay-per-click">
                                                    Pay Per Click (PPC) </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=seo">
                                                    Search Engine Optimization (SEO) </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=coversion-rate-optimization">
                                                    Conversion Rate Optimization (CRO) </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link" href="#">
                                                    Email Marketing </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=content-marketing">
                                                    Content Marketing </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=online-reputation-management">
                                                    Online Reputation Management (ORM) </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=aso-app-store-optimization-services">
                                                    App Store Optimization (ASO) </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=pr-firm">
                                                    Public Relation (PR) </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=translation-services-company">
                                                    Online Translation Services </a>
                                            </li>
                                        </ul>
                                        <div class="inner-menu-toggleBtn"></div>
                                    </li>
                                    <li class="inner-menu__item">
                                        <a class="inner-menu__item--link" href="javascript:void(0)"> Ui/Ux
                                            Design</a>
                                        <ul class="sub-inner-menu">
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=psd-to-html">
                                                    PSD To Responsive HTML </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=ux-workshops">
                                                    UX Design Workshop </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=responsive-website-design">
                                                    Responsive Web Design </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=ux-design">
                                                    UX Design </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=landing-page-design">
                                                    Landing Page Design </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=ux-audit-dubai">
                                                    UX Audit </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=graphic-design-services">
                                                    Graphic Design </a>
                                            </li>
                                        </ul>
                                        <div class="inner-menu-toggleBtn"></div>
                                    </li>
                                    <li class="inner-menu__item">
                                        <a class="inner-menu__item--link" href="javascript:void(0)">
                                            E-commerce Web development</a>
                                        <ul class="sub-inner-menu">
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=woo-commerce">
                                                    Woo Commerce Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=mirakl">
                                                    Mirakl Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=magento">
                                                    Magento Ecommerce Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=big-commerce">
                                                    Big Commerce Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=shopify">
                                                    Shopify Ecommerce Development </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=shopify-plus">
                                                    Shopify Plus Ecommerce Developments </a>
                                            </li>
                                        </ul>
                                        <div class="inner-menu-toggleBtn"></div>
                                    </li>
                                    <li class="inner-menu__item">
                                        <a class="inner-menu__item--link" href="javascript:void(0)"> Digital Branding
                                            &amp;
                                            Communication</a>
                                        <ul class="sub-inner-menu">
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=brochure-design">
                                                    Company Profile &amp; Brochure Design </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=business-card-design">
                                                    Business Card Design </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=corporate-identity-design">
                                                    Corporate Identity Design </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=packaging-designs">
                                                    Packaging Designs </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=logo-design-dubai">
                                                    Logo Design </a>
                                            </li>
                                        </ul>
                                        <div class="inner-menu-toggleBtn"></div>
                                    </li>
                                    <li class="inner-menu__item">
                                        <a class="inner-menu__item--link" href="javascript:void(0)"> Video
                                            Animation</a>
                                        <ul class="sub-inner-menu">
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=explainer-videos">
                                                    Explanier Video Production </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=product-demo">
                                                    Product Demo Animation </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=video-game-trailers">
                                                    Video Game Trailer </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=3d-architectural-walkthroughs">
                                                    3D Architectural Walkthroughs </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=medical-animation-company">
                                                    Medical Animation Studio </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=character-animation">
                                                    Character Animation Video </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=whiteboard-videos-animation">
                                                    Whiteboard Animation Video </a>
                                            </li>
                                        </ul>
                                        <div class="inner-menu-toggleBtn"></div>
                                    </li>
                                    <li class="inner-menu__item">
                                        <a class="inner-menu__item--link" href="javascript:void(0)"> It
                                            Resource</a>
                                        <ul class="sub-inner-menu">
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=hire-mobile-app-developer">
                                                    Hire Mobile App Developer </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=hire-scrum-master">
                                                    Hire Scrum Master in Dubai </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=hire-aws-resources">
                                                    Hire AWS Resources in Dubai </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=hire-qa-engineer">
                                                    Hire QA Resources in Dubai </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=hire-nodejs-developer">
                                                    Hire Node.js Developer in Dubai </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=hire-azure-developer">
                                                    Hire Azure Developer in Dubai </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=hire-react-js-developer">
                                                    Hire React JS Developers in Dubai </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=hire-react-native-developer">
                                                    Hire React Native Developers in Dubai </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=hire-sharepoint-developer">
                                                    Hire Sharepoint Developers in Dubai </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=hire-dynamics-365-developer">
                                                    Hire Dynamics 365 Developers in Dubai </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=hire-project-manager">
                                                    Hire Project Managers in Dubai </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=hire-dot-net-developer">
                                                    Hire Dot Net Developers in Dubai </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=robotic-process-automation-rpa">
                                                    Hire RPA in Dubai </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=google-3d-map-design-development">
                                                    3D Google Maps Integration </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=martech-consulting-company">
                                                    MarTech Consulting </a>
                                            </li>
                                            <li class="sub-inner-menu__item">
                                                <a class="sub-inner-menu__item--link"
                                                    href="{{ route('service') }}?service=digital-cloud-transformatio-solution">
                                                    Digital Cloud Transformation </a>
                                            </li>
                                        </ul>
                                        <div class="inner-menu-toggleBtn"></div>
                                    </li>
                                </ul>
                                <div class="menu-toggleBtn"></div>
                            </li>
                            <li class="mobNav__menu--item ">
                                <a href="{{ route('about') }}" class="menu-link">
                                    About </a>
                            </li>
                            <li class="mobNav__menu--item ">
                                <a href="{{ route('career') }}" class="menu-link">
                                    Careers </a>
                            </li>
                            <li class="mobNav__menu--item ">
                                <a href="{{ route('contact') }}" class="menu-link">
                                    Contacts </a>
                            </li>
                        </ul>
                    </div>
                    <div id="toggle" class="nav-button">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="social-wrapper flotaing-icons">
        <div class="img-wrapper whatsapp">
            <a target="_blank" href="https://wa.me/(917) 203-8420">
                <img class="svg-convert" src="{{ asset('assets/social-whatsapp.svg') }}" alt="whatsapp">
            </a>
        </div>
        <div class="img-wrapper email">
            <a class="menu-open">
                <img class="svg-convert" src="{{ asset('assets/svg-email.svg') }}" alt="email">
            </a>
        </div>
        <div class="img-wrapper phone">
            <a href="tel:(917) 203-8420">
                <img class="svg-convert" src="{{ asset('assets/social-phone.svg') }}" alt="whatsapp">
            </a>
        </div>
    </div>
    <div id="butter">
        <main>
            @yield('content')
        </main>
        <footer class="footer">
            <div class="inner-section">
                <div class="row padding-5">
                    <div class="col-4 col-lg-12">
                        <div class="logo">
                            <img src="{{ asset('assets/brand-logo.png') }}" alt="brand-logo">
                        </div>
                        <p class="brand-description">
                            Welcome to Xyberix Solutions, your strategic partner for digital transformation! We
                            specialize in
                            creating high-impact websites, optimizing online presence, and executing powerful digital
                            marketing
                            strategies. Let's elevate your business in the digital realm and drive success together!
                        </p>
                        <div class="social-icons collapse-deactive">
                            <a href="https://www.facebook.com/profile.php?id=100094298805051&amp;mibextid=2JQ9oc"
                                target="_blank" class="hero--section__social-link">
                                <div class="img-wrapper">
                                    <svg viewBox="0 0 14 27" fill="none" class="svg-convert svg-converted"
                                        src="{{ asset('assets/social-facebook.svg') }}">
                                        <path
                                            d="M14 0H10.1818C8.49408 0 6.87546 0.711159 5.68205 1.97703C4.48863 3.2429 3.81818 4.95979 3.81818 6.75V10.8H0V16.2H3.81818V27H8.90909V16.2H12.7273L14 10.8H8.90909V6.75C8.90909 6.39196 9.04318 6.04858 9.28186 5.79541C9.52055 5.54223 9.84427 5.4 10.1818 5.4H14V0Z"
                                            fill="white"></path>
                                    </svg>
                                </div>
                            </a>
                            <a href="https://twitter.com/xyberixs?s=21&amp;t=kXmOtLnYa844an74zFzhSA" target="_blank"
                                class="hero--section__social-link">
                                <div class="img-wrapper">
                                    <svg viewBox="0 0 18 15" fill="none" class="svg-convert svg-converted"
                                        src="{{ asset('assets/social-twitter.svg') }}">
                                        <path
                                            d="M5.66262 14.4063C12.4534 14.4063 16.1687 9.09144 16.1687 4.48385C16.1687 4.33443 16.1652 4.1817 16.1582 4.03229C16.8809 3.53865 17.5046 2.92721 18 2.2267C17.3269 2.50954 16.6122 2.69426 15.8804 2.77455C16.651 2.33834 17.2279 1.65307 17.5043 0.845782C16.7794 1.25151 15.9867 1.53771 15.1601 1.69213C14.6031 1.13322 13.8667 0.763155 13.0648 0.63915C12.2628 0.515145 11.4399 0.644108 10.7233 1.0061C10.0067 1.36809 9.43635 1.94295 9.10039 2.64179C8.76442 3.34064 8.68157 4.12455 8.86465 4.87232C7.39687 4.80276 5.96095 4.44265 4.64999 3.81535C3.33902 3.18805 2.18227 2.30755 1.25473 1.23094C0.7833 1.99858 0.639042 2.90695 0.851273 3.77143C1.0635 4.63591 1.6163 5.39164 2.3973 5.88502C1.81097 5.86744 1.23748 5.71835 0.724219 5.45006V5.49322C0.723693 6.2988 1.01857 7.0797 1.55873 7.70316C2.09889 8.32662 2.85099 8.75418 3.68719 8.91314C3.14404 9.0535 2.57399 9.07395 2.02113 8.97291C2.25709 9.66571 2.71618 10.2717 3.33433 10.7062C3.95248 11.1407 4.69884 11.3821 5.46926 11.3967C4.16132 12.3671 2.54563 12.8934 0.882422 12.8909C0.587465 12.8905 0.292799 12.8734 0 12.8397C1.68964 13.8635 3.65515 14.4073 5.66262 14.4063Z"
                                            fill="white"></path>
                                    </svg>
                                </div>
                            </a>
                            <a href="https://www.instagram.com/xyberixsolutions/?igshid=MzRlODBiNWFlZA%3D%3D&amp;__coig_restricted=1"
                                target="_blank" class="hero--section__social-link">
                                <div class="img-wrapper">
                                    <svg viewBox="0 0 18 18" fill="none" class="svg-convert svg-converted"
                                        src="{{ asset('assets/social-instagram.svg') }}">
                                        <path
                                            d="M9 1.6207C11.4047 1.6207 11.6895 1.63125 12.6352 1.67344C13.5141 1.71211 13.9887 1.85977 14.3051 1.98281C14.7234 2.14453 15.0258 2.34141 15.3387 2.6543C15.6551 2.9707 15.8484 3.26953 16.0102 3.68789C16.1332 4.0043 16.2809 4.48242 16.3195 5.35781C16.3617 6.30703 16.3723 6.5918 16.3723 8.99297C16.3723 11.3977 16.3617 11.6824 16.3195 12.6281C16.2809 13.507 16.1332 13.9816 16.0102 14.298C15.8484 14.7164 15.6516 15.0187 15.3387 15.3316C15.0223 15.648 14.7234 15.8414 14.3051 16.0031C13.9887 16.1262 13.5105 16.2738 12.6352 16.3125C11.6859 16.3547 11.4012 16.3652 9 16.3652C6.59531 16.3652 6.31055 16.3547 5.36484 16.3125C4.48594 16.2738 4.01133 16.1262 3.69492 16.0031C3.27656 15.8414 2.97422 15.6445 2.66133 15.3316C2.34492 15.0152 2.15156 14.7164 1.98984 14.298C1.8668 13.9816 1.71914 13.5035 1.68047 12.6281C1.63828 11.6789 1.62773 11.3941 1.62773 8.99297C1.62773 6.58828 1.63828 6.30351 1.68047 5.35781C1.71914 4.47891 1.8668 4.0043 1.98984 3.68789C2.15156 3.26953 2.34844 2.96719 2.66133 2.6543C2.97773 2.33789 3.27656 2.14453 3.69492 1.98281C4.01133 1.85977 4.48945 1.71211 5.36484 1.67344C6.31055 1.63125 6.59531 1.6207 9 1.6207ZM9 0C6.55664 0 6.25078 0.0105469 5.29102 0.0527344C4.33477 0.0949219 3.67734 0.249609 3.10781 0.471094C2.51367 0.703125 2.01094 1.00898 1.51172 1.51172C1.00898 2.01094 0.703125 2.51367 0.471094 3.1043C0.249609 3.67734 0.0949219 4.33125 0.0527344 5.2875C0.0105469 6.25078 0 6.55664 0 9C0 11.4434 0.0105469 11.7492 0.0527344 12.709C0.0949219 13.6652 0.249609 14.3227 0.471094 14.8922C0.703125 15.4863 1.00898 15.9891 1.51172 16.4883C2.01094 16.9875 2.51367 17.2969 3.1043 17.5254C3.67734 17.7469 4.33125 17.9016 5.2875 17.9437C6.24727 17.9859 6.55312 17.9965 8.99648 17.9965C11.4398 17.9965 11.7457 17.9859 12.7055 17.9437C13.6617 17.9016 14.3191 17.7469 14.8887 17.5254C15.4793 17.2969 15.982 16.9875 16.4813 16.4883C16.9805 15.9891 17.2898 15.4863 17.5184 14.8957C17.7398 14.3227 17.8945 13.6687 17.9367 12.7125C17.9789 11.7527 17.9895 11.4469 17.9895 9.00352C17.9895 6.56016 17.9789 6.2543 17.9367 5.29453C17.8945 4.33828 17.7398 3.68086 17.5184 3.11133C17.2969 2.51367 16.991 2.01094 16.4883 1.51172C15.9891 1.0125 15.4863 0.703125 14.8957 0.474609C14.3227 0.253125 13.6688 0.0984375 12.7125 0.05625C11.7492 0.0105469 11.4434 0 9 0Z"
                                            fill="white"></path>
                                        <path
                                            d="M9 4.37695C6.44766 4.37695 4.37695 6.44766 4.37695 9C4.37695 11.5523 6.44766 13.623 9 13.623C11.5523 13.623 13.623 11.5523 13.623 9C13.623 6.44766 11.5523 4.37695 9 4.37695ZM9 11.9988C7.34414 11.9988 6.00117 10.6559 6.00117 9C6.00117 7.34414 7.34414 6.00117 9 6.00117C10.6559 6.00117 11.9988 7.34414 11.9988 9C11.9988 10.6559 10.6559 11.9988 9 11.9988Z"
                                            fill="white"></path>
                                        <path
                                            d="M14.8852 4.19404C14.8852 4.7917 14.4 5.27334 13.8059 5.27334C13.2082 5.27334 12.7266 4.78819 12.7266 4.19404C12.7266 3.59639 13.2117 3.11475 13.8059 3.11475C14.4 3.11475 14.8852 3.5999 14.8852 4.19404Z"
                                            fill="white"></path>
                                    </svg>
                                </div>
                            </a>
                            <a href="https://www.linkedin.com/company/xyberixsolutions/" target="_blank"
                                class="hero--section__social-link">
                                <div class="img-wrapper">
                                    <svg viewBox="0 0 14 14" fill="none" class="svg-convert svg-converted"
                                        src="{{ asset('assets/social-linkedin.svg') }}">
                                        <path
                                            d="M12.9637 0H1.03359C0.462109 0 0 0.451172 0 1.00898V12.9883C0 13.5461 0.462109 14 1.03359 14H12.9637C13.5352 14 14 13.5461 14 12.991V1.00898C14 0.451172 13.5352 0 12.9637 0ZM4.15352 11.9301H2.07539V5.24726H4.15352V11.9301ZM3.11445 4.33672C2.44727 4.33672 1.90859 3.79805 1.90859 3.13359C1.90859 2.46914 2.44727 1.93047 3.11445 1.93047C3.77891 1.93047 4.31758 2.46914 4.31758 3.13359C4.31758 3.79531 3.77891 4.33672 3.11445 4.33672ZM11.9301 11.9301H9.85469V8.68164C9.85469 7.90781 9.84101 6.90977 8.77461 6.90977C7.69453 6.90977 7.53047 7.75469 7.53047 8.62695V11.9301H5.45781V5.24726H7.44844V6.16055H7.47578C7.75195 5.63555 8.43008 5.08047 9.43906 5.08047C11.5418 5.08047 11.9301 6.46406 11.9301 8.26328V11.9301Z"
                                            fill="white"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-4 collapse-deactive">
                        <div class="animate fadein-Right" data-delay="0.4s"
                            style="animation: 0.5s ease-out 0.4s 1 normal forwards running anim;">
                            <p class="sub-heading-1">Overview</p>
                            <ul class="qlinks-menu">
                                <li class="qlinks-menu__item "><a href="{{ route('home') }}" class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> Home</a></li>
                                <li class="qlinks-menu__item "><a href="{{ route('pricing') }}" class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> Pricing</a></li>
                                <li class="qlinks-menu__item "><a href="{{ route('service') }}" class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> Services</a></li>
                                <li class="qlinks-menu__item "><a href="{{ route('about') }}" class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> About</a></li>
                                <li class="qlinks-menu__item  "><a href="{{ route('career') }}" class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> Careers</a></li>
                                <li class="qlinks-menu__item "><a href="{{ route('contact') }}" class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-2 col-lg-4 collapse-deactive">
                        <div class="animate fadein-Right" data-delay="0.6s"
                            style="animation: 0.5s ease-out 0.6s 1 normal forwards running anim;">
                            <p class="sub-heading-2">Web Solutions</p>
                            <ul class="qlinks-menu">
                                <li class="qlinks-menu__item  "><a
                                        href="{{ route('service') }}?service=web-development" class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> Web Development </a>
                                </li>
                                <li class="qlinks-menu__item  "><a
                                        href="{{ route('service') }}?service=ui/ux-design" class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> UI/UX Design</a></li>
                                <li class="qlinks-menu__item  "><a
                                        href="{{ route('service') }}?service=digital-marketing-service"
                                        class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> Digital Marketing
                                        Services</a></li>
                                <li class="qlinks-menu__item  "><a
                                        href="{{ route('service') }}?=branding-comunication" class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> Branding &amp;
                                        Comunication</a></li>
                                <li class="qlinks-menu__item  "><a
                                        href="{{ route('service') }}?service=ecommerce-web-development"
                                        class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> Ecommerce Web
                                        Development</a></li>
                                <li class="qlinks-menu__item  "><a
                                        href="h{{ route('service') }}?service=mobile-app-developement"
                                        class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> Mobile App Development</a>
                                </li>
                                <li class="qlinks-menu__item  "><a
                                        href="{{ route('service') }}?service=IT-resource-outsouring"
                                        class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> IT Resource Outsouring
                                        Dubai</a></li>
                            </ul>
                        </div>
                        
                        <img class="bbb" src="{{ asset('assets/bbb-l-dark.png') }}">
                        
                    </div>
                    <div class="col-2 col-lg-4 px-5 collapse-deactive">
                        <div class="animate fadein-Right" data-delay="0.8s"
                            style="animation: 0.5s ease-out 0.8s 1 normal forwards running anim;">
                            <p class="sub-heading-3">Digital Marketing</p>
                            <ul class="qlinks-menu">
                                <li class="qlinks-menu__item  "><a href="{{ route('service') }}?service=ppc"
                                        class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> PPC</a></li>
                                <li class="qlinks-menu__item  "><a href="{{ route('service') }}?service=seo"
                                        class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> SEO</a></li>
                                <li class="qlinks-menu__item  "><a href="{{ route('service') }}?service=cro"
                                        class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> CRO</a></li>
                                <li class="qlinks-menu__item  "><a
                                        href="{{ route('service') }}?service=content-marketing" class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> Content Marketing</a></li>
                                <li class="qlinks-menu__item  "><a
                                        href="{{ route('service') }}?service=social-media-marketing"
                                        class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> Social Marketing</a></li>
                                <li class="qlinks-menu__item  "><a
                                        href="{{ route('service') }}?service=social-media-optimization"
                                        class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> Social Optimization</a></li>
                                <li class="qlinks-menu__item  "><a
                                        href="{{ route('service') }}?service=email-marketing" class="w-uline">
                                        <i aria-hidden="true" class="fas fa-minus"></i> Email Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    
                    <div class="newsletter">
                        <h2>Subscribe to our newsletter</h2>
                        <p>Monthly digest of whats new and exciting from us.</p>
                        <div class="newsletter-input">
                            <label for="newsletter" style="display: none">Email</label>
                            <input name="newsletter" id="newsletter" type="email" placeholder="Email Address">
                            <button onclick="subscribe()">Subscribe</button>
                        </div>
                    </div>
                    <div class="col-12 collapse">
                        <div class="accordion">
                            <div class="accordion-item">
                                <div class="accordion-header" onclick="toggleAccordion(this)">
                                    Overview
                                    <span class="accordion-icon" id="accordion-icon"><i
                                            class="fa-solid fa-angle-up"></i></span>
                                </div>
                                <div class="accordion-content">
                                    <div class="content-inner">
                                        <ul class="accordion-menu">
                                            <li class="accordion-menu__item "><a
                                                    href="https://www.xyberixsolutions.com" class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> Home</a></li>
                                            <li class="accordion-menu__item "><a
                                                    href="https://www.xyberixsolutions.com/about" class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> About Us</a>
                                            </li>
                                            <li class="accordion-menu__item "><a
                                                    href="https://www.xyberixsolutions.com/pricing" class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> Pricing</a></li>
                                            <li class="accordion-menu__item "><a
                                                    href="https://www.xyberixsolutions.com/service" class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> Services</a>
                                            </li>
                                            <li class="accordion-menu__item  "><a
                                                    href="https://www.xyberixsolutions.com/career" class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> Careers</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 collapse">
                        <div class="accordion">
                            <div class="accordion-item">
                                <div class="accordion-header" onclick="toggleAccordion(this)">
                                    Web Solutions
                                    <span class="accordion-icon" id="accordion-icon"><i
                                            class="fa-solid fa-angle-up"></i></span>
                                </div>
                                <div class="accordion-content">
                                    <div class="content-inner">
                                        <ul class="accordion-menu">
                                            <li class="accordion-menu__item  "><a
                                                    href="{{ route('service') }}?service=web-development"
                                                    class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> Web Development
                                                </a>
                                            </li>
                                            <li class="accordion-menu__item  "><a
                                                    href="{{ route('service') }}?service=ui/ux-design"
                                                    class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> UI/UX Design</a>
                                            </li>
                                            <li class="accordion-menu__item  "><a
                                                    href="{{ route('service') }}?service=digital-marketing-service"
                                                    class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> Digital
                                                    Marketing
                                                    Services</a>
                                            </li>
                                            <li class="accordion-menu__item  "><a
                                                    href="{{ route('service') }}?service=branding-comunication"
                                                    class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> Branding &amp;
                                                    Comunication</a></li>
                                            <li class="accordion-menu__item  "><a
                                                    href="{{ route('service') }}?service=ecommerce-web-development"
                                                    class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> Ecommerce Web
                                                    Development</a>
                                            </li>
                                            <li class="accordion-menu__item  "><a
                                                    href="{{ route('service') }}?service=mobile-app-developement"
                                                    class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> Mobile App
                                                    Development</a>
                                            </li>
                                            <li class="accordion-menu__item  "><a
                                                    href="{{ route('service') }}?service=IT-resource-outsouring"
                                                    class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> IT Resource
                                                    Outsouring
                                                    Dubai</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 collapse">
                        <div class="accordion">
                            <div class="accordion-item">
                                <div class="accordion-header" onclick="toggleAccordion(this)">
                                    Digital Marketing
                                    <span class="accordion-icon" id="accordion-icon"><i
                                            class="fa-solid fa-angle-up"></i></span>
                                </div>
                                <div class="accordion-content">
                                    <div class="content-inner">
                                        <ul class="accordion-menu">
                                            <li class="accordion-menu__item  "><a
                                                    href="{{ route('service') }}?service=ppc" class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> PPC</a></li>
                                            <li class="accordion-menu__item  "><a
                                                    href="{{ route('service') }}?service=seo" class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> SEO</a></li>
                                            <li class="accordion-menu__item  "><a
                                                    href="{{ route('service') }}?service=cro" class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> CRO</a></li>
                                            <li class="accordion-menu__item  "><a
                                                    href="{{ route('service') }}?hservice=content-marketing"
                                                    class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> Content
                                                    Marketing</a></li>
                                            <li class="accordion-menu__item  "><a
                                                    href="{{ route('service') }}?=social-media-marketing"
                                                    class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> Social
                                                    Marketing</a></li>
                                            <li class="accordion-menu__item  "><a
                                                    href="{{ route('service') }}?service=social-media-optimization"
                                                    class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> Social
                                                    Optimization</a>
                                            </li>
                                            <li class="accordion-menu__item  "><a
                                                    href="{{ route('service') }}?service=email-marketing"
                                                    class="w-uline">
                                                    <i aria-hidden="true" class="fas fa-minus"></i> Email
                                                    Marketing</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5 bottom-section">
                        <div class="row text-center">
                            <div class="col-4 col-sm-12 ">
                                <p><i class="fa-solid fa-envelope me-5"></i>info@xyberixsolutions.com</p>
                            </div>
                            <div class="col-4 col-sm-12 addressSwitch">
                                <p><i class="fa-solid fa-location-dot me-5"></i> Head Office: New York USA</p>
                            </div>
                            <div class="col-4 col-sm-12 addressSwitch">
                                <p><i class="fa-solid fa-location-dot me-5"></i> 39 Irving street Valley stream, ny 11580
                                </p>
                            </div>
                            <div class="col-4 col-sm-12 addressSwitch">
                                <p><i class="fa-solid fa-location-dot me-5"></i> Site Office: Karachi, Sindh, PK</p>
                            </div>
                            <div class="col-4 col-sm-12">
                                <p><i class="fa-solid fa-phone me-5"></i>(917) 203-8420</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 copyright-text">
                        <p class="text-center"><span>ⓒ Copyright 2024 Xyberix Solution's (LLC). All rights
                                reserved.</span></p>
                    </div>
                </div>
            </div>
            <div class="footer__bg"></div>
        </footer>
    </div>
    <div class="projectForm--box">
        <div class="projectForm">
            <div class="projectForm__wrapper">
                <h2 class="head s-font form-item">
                    Speak to an Expert
                </h2>
                <div class="generic--form col-100">
                    <form id="contact-form">
                        <input type="hidden" id="source" name="source"
                            value="https://www.xyberixsolutions.com">
                        <div class="generic--form__wrapper twocol-row">
                            <div class="col-31 form-item">
                                <div class="input-container">
                                    <input class="input" id="fullname" name="fullname" type="text" required
                                        placeholder=" " autocomplete="name">
                                    <div class="cut"></div>
                                    <label for="fullname" class="placeholder">Full Name*</label>
                                </div>
                            </div>
                            <div class="col-31 form-item">
                                <div class="input-container">
                                    <input class="input" id="phone" name="phone" type="text" required
                                        placeholder=" " autocomplete="phone">
                                    <div class="cut"></div>
                                    <label for="phone" class="placeholder">Phone*</label>
                                </div>
                            </div>
                            <div class="col-31 form-item">
                                <div class="input-container">
                                    <input class="input" id="email" name="email" type="email"
                                        placeholder=" " required autocomplete="email">
                                    <div class="cut"></div>
                                    <label for="email" class="placeholder">Email*</label>
                                </div>
                            </div>
                            <div class="col-31 form-item">
                                <div class="input-container">
                                    <input class="input" id="company" name="company" type="text"
                                        placeholder=" " id="company" autocomplete="company">
                                    <div class="cut"></div>
                                    <label for="company" class="placeholder">Company*</label>
                                </div>
                            </div>
                            <div class="col-45 form-item">
                                <div class="input-container">
                                    <label for="job"></label><select class="input-select" name="interest"
                                        id="job">
                                        <option value="empty" selected disabled>I'm interested in</option>
                                        <option value="Corporate Identity / Branding">Corporate Identity / Branding
                                        </option>
                                        <option value="Company Profile / Brochure / E-Magazine">Company Profile /
                                            Brochure / E-Magazine</option>
                                        <option value="Website Design / CMS / CRM">Website Design / CMS / CRM</option>
                                        <option value="Portal Development / Intranet ">Portal Development / Intranet
                                        </option>
                                        <option value="Digital Marketing / SEO / Social / Paid">Digital Marketing /
                                            SEO
                                            / Social / Paid</option>
                                        <option value="Mobile App / AR / VR">Mobile App / AR / VR</option>
                                        <option value="Blockchain / NFT / Web 3.0 "> Blockchain / NFT / Web 3.0
                                        </option>
                                        <option value="Resource Augmentation"> Resource Augmentation</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-100 form-item">
                                <div class="input-container">
                                    <label for="budget"></label><select class="input-select" id="budget"
                                        name="budget">
                                        <option value="empty" selected disabled>Budget</option>
                                        <option value="$100 - $500">$100 - $500</option>
                                        <option value="$500 - $1000">$500 - $1000</option>
                                        <option value="$1000 - $1500">$1000 - $1500</option>
                                        <option value="$1500 - $2000">$1500 - $2000</option>
                                        <option value="$2000 - $3000">$2000 - $3000</option>
                                        <option value="$3000+">$500+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-100 form-item">
                                <div class="input-container textArea " style="z-index: 0;">
                                    <textarea class="input" id="message" name="message" placeholder=" "></textarea>
                                    <div class="cut"></div>
                                    <label for="message" class="placeholder">Message</label>
                                </div>
                            </div>
                            
                            <div class="col-100 form-item referral-check">
                                    <input class="input" id="referral" name="referral" type="checkbox" value="true">
                                    <label for="referral" class="placeholder referral">Do you have any referral?</label>
                            </div>
                            
                            <div class="col-100 form-item referral-code" id="referral-code" style="display:none;">
                                <div class="input-container">
                                    <input class="input" id="referralCode" name="referralCode" type="text"
                                        placeholder=" ">
                                    <div class="cut"></div>
                                    <label for="referralCode" class="placeholder">Referral</label>
                                </div>
                            </div>
                            
                            <div class="primary-anchor  form-item">
                                <button class="btn--submit" type="submit">
                                    <span> Submit</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <button class="close-btn" id="menu-toggle-close">
                <img class="lazy-img" data-src="{{ asset('assets/close-btn.svg') }}" alt="close-btn"
                    width="27" height="27" src="">
            </button>
        </div>
        <div class="projectForm--box__gradient">
        </div>
    </div>
    <div class="mobile-only">
        <div class="mobile-only__social-wrapper">
            <a target="_blank" href="https://wa.me/(917) 203-8420">
                <img class="svg-convert" src="{{ asset('assets/social-whatsapp.svg') }}" alt="whatsapp">
            </a>
            <a target="_blank" href="tel:(917) 203-8420">
                <img class="svg-convert" src="{{ asset('assets/social-phone.svg') }}" alt="phone">
            </a>
        </div>
        <div class="mobile-only__get-quote">
            <a href="javascript:void(0)" class="menu-open">Get a quote</a>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/3.6.0-jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl-carosel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/swiper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendors-svgConvert.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/3.10.4-gsap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/3.10.4-ScrollTrigger.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendors-direction-hover.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendors-project-form.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/js-form_custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendors-intersection-observer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/sweetalerts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/axios.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js?v1') }}"></script>
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/65b28dd78d261e1b5f57f2e0/1hl0nk4kf';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
        Tawk_API.customStyle = {
            visibility: {
                desktop: {
                    position: 'br',
                    xOffset: '60px',
                    yOffset: 20
                },
                mobile: {
                    position: 'br',
                    xOffset: 0,
                    yOffset: '80px'
                },
                bubble: {
                    rotate: '0deg',
                    xOffset: -20,
                    yOffset: 0
                }
            }
        };
    </script>
    @yield('scripts')
</body>

</html>
