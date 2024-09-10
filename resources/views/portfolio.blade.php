@extends('layout')
@section('styles')
    <style rel="stylesheet" type="text/css">
        .portfolios-container {
            padding-top: 50px;
            margin-bottom: 40px;
        }

        .custom-tabs {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            box-shadow: 0 48px 80px -32px rgba(0, 0, 0, 0.3);
            margin-bottom: 50px;
        }

        .custom-h1 {
            color: black;
        }

        .custom-input {
            position: absolute;
            opacity: 0;
        }

        .custom-label {
            width: 100%;
            padding: 20px 30px;
            cursor: pointer;
            font-weight: bold;
            font-size: 18px;
            color: #000000;
            transition: background 0.1s, color 0.1s;
        }

        .custom-label:hover {
            background: #d8d8d8;
        }

        .custom-label:active {
            background: #ccc;
        }

        .custom-input:focus+.custom-label {
            z-index: 1;
        }

        .custom-input:checked+.custom-label {
            background: #fff;
            color: #000;
        }

        @media (min-width: 600px) {
            .custom-label {
                width: auto;
            }
        }

        .custom-panel {
            display: none;
            padding: 20px 30px 30px;
            background: #fff;
        }

        @media (min-width: 600px) {
            .custom-panel {
                order: 99;
            }
        }

        .custom-input:checked+.custom-label+.custom-panel {
            display: block;
        }

        .website-design {
            margin-top: 50px
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }


        .swiper-slide {
            width: 100%;
            height: 400px !important;
            overflow: hidden;
        }

        .portfolio-image.enlarged {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            background: rgba(0, 0, 0, 0.8);
            z-index: 9999;
            cursor: pointer;
            transition: opacity 0.3s ease;
        }

        .portfolio-image.enlarged.show {
            opacity: 1;
        }

        .portfolio-image.enlarged img {
            display: block;
            margin: auto;
            max-width: 60%;
            max-height: 60%;
        }

        /* @media (max-width: 768px) {
                    .row-port {
                        display: none;
                    }
                }

                @media (min-width: 769px) {
                    .swiper {
                        display: none;
                    }
                } */

        .portfolio-category-row {
            text-align: center;
            margin: 53px 0px 30px;
        }

        .portfolio-category-btn {
            border: none;
            background: transparent;
            font-size: 16px;
            margin: 0 23px 10px;
            padding: 0;
            padding-bottom: 3px;
            border-bottom: 2px solid transparent;
            transition: 0.2s all ease;
        }

        .portfolio-category-dropdown {
            display: inline-block;
        }

        .portfolio-category-dropdown .dropdown-button,
        .portfolio-category-btn {
            font-size: 1.12em;
        }

        @media screen and (max-width: 557px) {

            .portfolio-category-dropdown .dropdown-button,
            .portfolio-category-btn {
                font-size: 0.9rem;
                margin-top: 20px;
            }
        }

        .portfolio-category-dropdown .dropdown-button i {
            margin-left: 6px;
        }

        .portfolio-category-btn:hover {
            border-bottom: 5px solid #9c9c9c;
            border-radius: 5px;
        }

        .portfolio-category-dropdown {
            position: relative;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 160px;
            padding: 5px 0;
            margin: 10px 0 0;
            list-style: none;
            font-size: 14px;
            text-align: left;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, 0.15);
            border-radius: 4px;
            -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
            background-clip: padding-box;
        }

        .scrollable {
            height: auto;
            max-height: 200px;
            overflow-x: hidden;
            width: 220px !important;
        }

        .dropdown-menu li button {
            border: none;
            background: transparent;
            font-size: 14px;
            margin: 0 23px 10px;
            padding: 6px 5px;
            border-bottom: 2px solid transparent;
        }

        .is-active {
            /* border-bottom: 5px solid #9c9c9c; */
            border-radius: 5px;
        }

        .dropdown-menu.active {
            display: block;
        }

        .portfolios-container h2 {
            text-align: center;
            font-size: 2em;
            font-weight: 600;
            color: #000;
        }

        .portfolio-image {
            width: 100%;
            height: 200px;
            background-size: cover;
            background-position: center
        }

        .row-port {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 0 -15px;
        }

        .col-port {
            flex: 0 0 calc(25% - 30px);
            margin: 0 15px;
        }

        @media screen and (max-width: 947px) {
            .col-port {
                flex: 0 0 calc(33.33% - 30px);
            }
        }

        @media screen and (max-width: 768px) {
            .col-port {
                flex: 0 0 calc(50% - 30px);
            }
        }

        @media screen and (max-width: 480px) {
            .col-port {
                flex: 0 0 calc(100% - 30px);
            }
        }

        .row-port {
            padding: 15px;
        }

        .col-port {
            padding: 15px;
            margin-bottom: 15px;
        }
    </style>
@endsection
@section('content')
    <section class="about-us inner-banner inner-hero">
        <div class="container">
            <div class="twocol-row">
                <div class="col-36">
                    <div class=" inner-hero__head generic--head">
                        <h6 class="generic--head__subhead left-element">
                            Digital Marketing Agency In US, Dubai and South Asia
                        </h6>
                        <h1 class="generic--head__head fw-700">We Activate Businesses &amp; Brands for the <span class="primary-col">Digital Change</span></h1>
                    </div>
                </div>
                <div class="col-30">
                    <p>
                        Xyberix Solutions is an accomplished digital transformation company in Dubai, US and South Asia,
                        with a
                        progressive perspective. We offer scalable web and mobile solutions coupled with digital
                        marketing services under one roof &mdash; without silos or handoffs. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolios-container">
        <h2>Portfolio Gallery</h2>
        <div class="portfolio-category-row">
            <button class="portfolio-category-btn" onclick="showTab('logo-design')">Logo Design</button>
            <button class="portfolio-category-btn" onclick="showTab('web-design')">Web Design</button>
            {{-- <div class="portfolio-category-dropdown">
                <button class="dropdown-button is-active" onclick="toggleDropdown()">Cms Development<i
                        class="fa-sharp fa-solid fa-caret-down"></i></button>
                <ul class="dropdown-menu scrollable">
                    <li>
                        <button class="portfolio-category-btn" onclick="showTab('ecommerce-development')">Ecommerce</button>
                    </li>
                    <li>
                        <button class="portfolio-category-btn" onclick="showTab('brochure-development')">Brochure</button>
                    </li>
                </ul>
            </div> --}}
            <button class="portfolio-category-btn" onclick="showTab('video-animation')">Video Animations / Editing</button>
        </div>
        <div class="container">
            <div class="logo-design tab-content active">
                <div class="row-port">
                    <div class="col-port web-portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('logo/1.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('logo/2.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/3.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/4.png') }})"></div>
                        </div>
                    </div>

                    <div class="col-port web-portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('logo/5.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('logo/6.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/7.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/8.png') }})"></div>
                        </div>
                    </div>


                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('logo/9.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('logo/10.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/11.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/12.png') }})"></div>
                        </div>
                    </div>


                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('logo/13.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('logo/14.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/15.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/16.png') }})"></div>
                        </div>
                    </div>

                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('logo/17.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('logo/18.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/19.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/20.png') }})"></div>
                        </div>
                    </div>

                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('logo/21.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('logo/22.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/23.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/24.png') }})"></div>
                        </div>
                    </div>

                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('logo/25.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('logo/26.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/27.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/28.png') }})"></div>
                        </div>
                    </div>

                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('logo/29.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('logo/30.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/31.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/32.png') }})"></div>
                        </div>
                    </div>

                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('logo/33.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('logo/34.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/35.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/36.png') }})"></div>
                        </div>
                    </div>

                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('logo/37.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('logo/38.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/39.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/40.png') }})"></div>
                        </div>
                    </div>

                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('logo/41.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('logo/42.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/43.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/44.png') }})"></div>
                        </div>
                    </div>

                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('logo/45.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('logo/46.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/47.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/48.png') }})"></div>
                        </div>
                    </div>

                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('logo/49.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('logo/50.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/51.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/52.png') }})"></div>
                        </div>
                    </div>

                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('logo/53.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('logo/54.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/55.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('logo/56.png') }})"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="web-design tab-content">
                <div class="row-port">
                    <div class="col-port web-portfolio-col">
                        <a data-fancybox="images" href="https://thejyim.com">
                            <div class="web-portfolio-col-wrapper">
                                <div class="web-image web-port-image-13"
                                    style="background-image:url({{ asset('portfolio/8.webp') }})"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <a data-fancybox="images" href="https://tanna-frederick.com">
                            <div class="web-portfolio-col-wrapper">
                                <div class="web-image web-port-image-14"
                                    style="background-image:url({{ asset('portfolio/7.webp') }})"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <a data-fancybox="images" href="https://lanexyachtingusa.com">
                            <div class="web-portfolio-col-wrapper">
                                <div class="web-image web-port-image-17"
                                    style="background-image:url({{ asset('portfolio/3.webp') }})"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <a data-fancybox="images" href="https://purplefroggraphics.com">
                            <div class="web-portfolio-col-wrapper">
                                <div class="web-image web-port-image-17"
                                    style="background-image:url({{ asset('portfolio/11.webp') }})"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row-port">
                    <div class="col-port web-portfolio-col">
                        <a data-fancybox="images" href="https://texastbonesteakhouse.com/">
                            <div class="web-portfolio-col-wrapper">
                                <div class="web-image web-port-image-13"
                                    style="background-image:url({{ asset('portfolio/14.webp') }})"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <a data-fancybox="images" href="https://annasova.com/">
                            <div class="web-portfolio-col-wrapper">
                                <div class="web-image web-port-image-14"
                                    style="background-image:url({{ asset('portfolio/15.webp') }})"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <a data-fancybox="images" href="https://www.coscapes.com">
                            <div class="web-portfolio-col-wrapper">
                                <div class="web-image web-port-image-17"
                                    style="background-image:url({{ asset('portfolio/12.webp') }})"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <a data-fancybox="images" href="https://bioptimizers.com">
                            <div class="web-portfolio-col-wrapper">
                                <div class="web-image web-port-image-17"
                                    style="background-image:url({{ asset('portfolio/13.webp') }})"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row-port">
                    <div class="col-port web-portfolio-col">
                        <a data-fancybox="images" href="https://compedgeusa.com">
                            <div class="web-portfolio-col-wrapper">
                                <div class="web-image web-port-image-17"
                                    style="background-image:url({{ asset('portfolio/17.webp') }})"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <a data-fancybox="images" href="https://soccerstars.com">
                            <div class="web-portfolio-col-wrapper">
                                <div class="web-image web-port-image-17"
                                    style="background-image:url({{ asset('portfolio/18.webp') }})"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <a data-fancybox="images" href="https://www.wearablegratitude.com">
                            <div class="web-portfolio-col-wrapper">
                                <div class="web-image web-port-image-17"
                                    style="background-image:url({{ asset('portfolio/19.webp') }})"></div>
                            </div>
                        </a>
                    </div>

                    <div class="col-port web-portfolio-col">
                        <a data-fancybox="images" href="https://madebypi.co.uk">
                            <div class="web-portfolio-col-wrapper">
                                <div class="web-image web-port-image-17"
                                    style="background-image:url({{ asset('portfolio/16.webp') }})"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row-port">
                    <div class="col-port web-portfolio-col">
                        <a data-fancybox="images" href="https://petshack.au">
                            <div class="web-portfolio-col-wrapper">
                                <div class="web-image web-port-image-6"
                                    style="background-image:url({{ asset('portfolio/6.webp') }})"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <a data-fancybox="images" href="https://www.henryusa.com/">
                            <div class="web-portfolio-col-wrapper">
                                <div class="web-image web-port-image-7"
                                    style="background-image:url({{ asset('portfolio/1.webp') }})"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <a data-fancybox="images" href="https://camodernhome.com/">
                            <div class="web-portfolio-col-wrapper">
                                <div class="web-image web-port-image-7"
                                    style="background-image:url({{ asset('portfolio/2.webp') }})"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <a data-fancybox="images" href="https://www.trestique.com/">
                            <div class="web-portfolio-col-wrapper">
                                <div class="web-image web-port-image-7"
                                    style="background-image:url({{ asset('portfolio/9.webp') }})"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="video-animation tab-content">
                <div class="row-port">
                    <div class="col-port web-portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('video-editing/dummy.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('video-editing/dummy.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('video-editing/dummy.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('video-editing/dummy.png') }})"></div>
                        </div>
                    </div>

                    <div class="col-port web-portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('video-editing/dummy.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('video-editing/dummy.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('video-editing/dummy.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port web-portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('video-editing/dummy.png') }})"></div>
                        </div>
                    </div>


                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('video-editing/dummy.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('video-editing/dummy.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('video-editing/dummy.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('video-editing/dummy.png') }})"></div>
                        </div>
                    </div>

                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-13"
                                style="background-image:url({{ asset('video-editing/dummy.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-14"
                                style="background-image:url({{ asset('video-editing/dummy.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('video-editing/dummy.png') }})"></div>
                        </div>
                    </div>
                    <div class="col-port portfolio-col">
                        <div class="web-portfolio-col-wrapper">
                            <div class="portfolio-image web-port-image-17"
                                style="background-image:url({{ asset('video-editing/dummy.png') }})"></div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script type="text/javascript">
        function toggleDropdown() {
            let dropdownMenu = document.querySelector('.dropdown-menu');
            dropdownMenu.classList.toggle('active');
        }

        function showTab(tabName) {
            var tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(function(tab) {
                tab.classList.remove('active');
            });

            var selectedTab = document.querySelector('.' + tabName);
            if (selectedTab) {
                selectedTab.classList.add('active');
            }
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropdown-button')) {
                var dropdowns = document.getElementsByClassName("dropdown-menu");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('active')) {
                        openDropdown.classList.remove('active');
                    }
                }
            }
        };
    </script>
@endsection
