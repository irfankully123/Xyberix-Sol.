@extends('layout')
@section('content')
    <section class="hero--section home-hero" id="heroSec">
        <div class="home-hero__heroImg">
            <div class="img-wrapper">
                <picture>
                    <source media="(min-width:576px)" srcset="{{ asset('assets/hero-home.webp') }}">
                    <img src="{{ asset('assets/hero-home.webp') }}" alt="hero-img">
                </picture>
                <div class="video-wrapper" id="video"><video loop="" playsinline="" autoplay="" muted="">
                        <source src="./video/6.6.mp4" type="video/mp4">
                    </video></div>
            </div>
            <div class="home-hero__hero-caption">
                <div class="home-hero__hero-caption--container container ">
                    <h1 class="head">
                        <span class="head-text-wrapper"><span class="gradient-anim ">CONNECTING
                                BRANDS</span></span><span class="head-text-wrapper"><span>WITH
                                GLOBAL</span></span><span class="head-text-wrapper"><span>AUDIENCES</span></span>
                    </h1>
                </div>
            </div>
        </div>
        <div class="home-hero__hero-banner">
            <div class="home-hero__hero-banner--container container">
                <div class="home-hero__hero-banner--wrapper">
                    <p class="home-hero__hero-banner--descrip">
                        You have an idea, we have the talent and resources to turn it into a reality. Xyberix
                        Solution is a globally recognized digital agency elevating brands through
                        ground-breaking
                        user experience and disruptive digital products. </p>
                    <div class="anchor-wrapper">
                        <a href="tel:(917) 203-8420" class="arrow-anchor">
                            <span>Let's Talk</span>
                            <div class="img-wrapper">
                                <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                    src="{{ asset('assets/svg-anchor-arrow.svg') }}">
                                    <style type="text/css">
                                        .st0 {
                                            fill: #FFFFFF;
                                        }
                                    </style>
                                    <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z"></path>
                                    <path class="st0" d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                </svg>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('assets/bbb-l-dark.png') }}" style="width:13rem">
                </div>
            </div>
        </div>
        <div class="hero--section__social-linkWrapper">
            <a href="https://www.facebook.com/profile.php?id=100094298805051&amp;mibextid=2JQ9oc" target="_blank"
                class="hero--section__social-link">
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
            <a href="https://www.linkedin.com/company/xyberixsolutions/" target="_blank" class="hero--section__social-link">
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
    </section>
    <section class="strategy-concept">
        <div class="twocol-row strategy-concept__center-align">
            <div class="col-50">
                <div class="strategy-concept__cards-wrapper">
                    <div class="strategy-concept__cards-wrapper--card p-lr-4">
                        <div class="generic--head">
                            <h3 class="generic--head__subhead gray-col fw-700">
                                Right <span class="primary-col">strategy</span>
                            </h3>
                        </div>
                        <div class="generic--head">
                            <p class="generic--head__sec-para gray-col s-font">
                                We delivered a bunch of clients' startup products that are successful. Our previous
                                experience helps to launch new startups with less effort and investment.
                            </p>
                        </div>
                    </div>
                    <div class="strategy-concept__cards-wrapper--card gray-bg">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/laptop-mobile.webp') }}" alt="images">
                        </div>
                    </div>
                    <div class="strategy-concept__cards-wrapper--card primary-bg">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/dual-mobile.webp') }}" alt="images">
                        </div>
                    </div>
                    <div class="strategy-concept__cards-wrapper--card gray-bg7 p-lr-4">
                        <div class="generic--head">
                            <h3 class="generic--head__subhead gray-col fw-700">
                                <span class="primary-col">Care</span>
                            </h3>
                        </div>
                        <div class="generic--head">
                            <p class="generic--head__sec-para gray-col s-font">
                                We care about simplicity for our clients at any stage of a project's lifetime, from easy
                                onboarding to smooth launch and support</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-50 strategy-concept__pilot-heading">
                <div class="generic--head">
                    <h3 class="generic--head__subhead s-font gray-col fw-700">
                        Who we are </h3>
                    <p class="generic--head__sec-para gray-col s-font">
                        We delivered a bunch of clients' startup products that are successful. Our previous experience helps
                        to launch new startups with less effort and investment. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="ourWork section translateX-parent animate" data-delay="0s" id="ourWork"
        style="animation: 0.5s ease-out 0s 1 normal forwards running anim;">
        <div class="line-heading translateX-right">
            <h3 class="outline-text ">
                OUR WORK </h3>
        </div>
        <div
            class="ourWork__Slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="swiper-wrapper height-transition-parent opacity-transition-parent"
                id="swiper-wrapper-e09266414710e2bed" aria-live="polite"
                style="transform: translate3d(-906.667px, 0px, 0px); transition-duration: 0ms;">
                <div class="swiper-slide" role="group" aria-label="1 / 8"
                    style="width: 277.222px; margin-right: 25px;">
                    <div class="ourWork__Slider--slideWrapper height-transition opacity-transition" data-delay="0">
                        <div class="ourWork__Slider--img drag--img ">
                            <img data-src="{{ asset('assets/ourwork/our-work-1.webp') }}" alt="our-work" width="369"
                                height="404" src="{{ asset('assets/ourwork/our-work-1.webp') }}">
                        </div>
                        <div class="ourWork__Slider--logo">
                            <img data-src="{{ asset('assets/ourwork/belgravia-logo.svg') }}" alt="images"
                                width="258" height="61" src="{{ asset('assets/ourwork/belgravia-logo.svg') }}">
                        </div>
                        <p class="ourWork__Slider--descrip">
                            Building a magnificent platform to aid the chanting purpose of the Belgravia London.
                            Loud and proud among competitors. </p>

                    </div>
                </div>
                <div class="swiper-slide" role="group" aria-label="2 / 8"
                    style="width: 277.222px; margin-right: 25px;">
                    <div class="ourWork__Slider--slideWrapper height-transition opacity-transition" data-delay="0">
                        <div class="ourWork__Slider--img drag--img ">
                            <img data-src="{{ asset('assets/ourwork/our-work-2.webp') }}" alt="our-work" width="369"
                                height="404" src="{{ asset('assets/ourwork/our-work-2.webp') }}">
                        </div>
                        <div class="ourWork__Slider--logo">
                            <img data-src="{{ asset('assets/ourwork/betterhomes-logo.svg') }}" alt="images"
                                width="258" height="61" src="{{ asset('assets/ourwork/betterhomes-logo.svg') }}">
                        </div>
                        <p class="ourWork__Slider--descrip">
                            Establishing a dynamic presence with incredible reach for a business with dedicated
                            efforts to the real estate industry. </p>

                    </div>
                </div>
                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="3 / 8"
                    style="width: 277.222px; margin-right: 25px;">
                    <div class="ourWork__Slider--slideWrapper height-transition opacity-transition" data-delay="0">
                        <div class="ourWork__Slider--img drag--img ">
                            <img data-src="{{ asset('assets/ourwork/our-work-3.webp') }}" alt="our-work" width="369"
                                height="404" src="{{ asset('assets/ourwork/our-work-3.webp') }}">
                        </div>
                        <div class="ourWork__Slider--logo">
                            <img data-src="{{ asset('assets/ourwork/cryptosouk-logo.svg') }}" alt="images"
                                width="258" height="61" src="{{ asset('assets/ourwork/cryptosouk-logo.svg') }}">
                        </div>
                        <p class="ourWork__Slider--descrip">
                            Assisting the business to stand tall and established among the competitors alongside
                            growing with visibility, reach, and engagement. </p>

                    </div>
                </div>
                <div class="swiper-slide swiper-slide-active" role="group" aria-label="4 / 8"
                    style="width: 277.222px; margin-right: 25px;">
                    <div class="ourWork__Slider--slideWrapper height-transition opacity-transition" data-delay="0">
                        <div class="ourWork__Slider--img drag--img ">
                            <img data-src="{{ asset('assets/ourwork/our-work-4.webp') }}" alt="our-work" width="369"
                                height="404" src="{{ asset('assets/ourwork/our-work-4.webp') }}">
                        </div>
                        <div class="ourWork__Slider--logo">
                            <img data-src="{{ asset('assets/ourwork/emaar-logo.svg') }}" alt="images" width="258"
                                height="61" src="{{ asset('assets/ourwork/emaar-logo.svg') }}">
                        </div>
                        <p class="ourWork__Slider--descrip">
                            Assisting businesses in representing and achieving their core values and objectives
                            by initiating high-performing strategies. </p>

                    </div>
                </div>
                <div class="swiper-slide swiper-slide-next" role="group" aria-label="5 / 8"
                    style="width: 277.222px; margin-right: 25px;">
                    <div class="ourWork__Slider--slideWrapper height-transition opacity-transition" data-delay="0">
                        <div class="ourWork__Slider--img drag--img ">
                            <img data-src="{{ asset('assets/ourwork/our-work-5.webp') }}" alt="our-work" width="369"
                                height="404" src="{{ asset('assets/ourwork/our-work-5.webp') }}">
                        </div>
                        <div class="ourWork__Slider--logo">
                            <img data-src="{{ asset('assets/ourwork/saeed-logo.svg') }}" alt="images" width="258"
                                height="61" src="{{ asset('assets/ourwork/saeed-logo.svg') }}">
                        </div>
                        <p class="ourWork__Slider--descrip">
                            A Well crafted and strategy-based project with utmost importance to the business
                            objective achievement. </p>

                    </div>
                </div>
                <div class="swiper-slide" role="group" aria-label="6 / 8"
                    style="width: 277.222px; margin-right: 25px;">
                    <div class="ourWork__Slider--slideWrapper height-transition opacity-transition" data-delay="0">
                        <div class="ourWork__Slider--img drag--img ">
                            <img data-src="{{ asset('assets/ourwork/our-work-6.webp') }}" alt="our-work" width="369"
                                height="404" src="{{ asset('assets/ourwork/our-work-6.webp') }}">
                        </div>
                        <div class="ourWork__Slider--logo">
                            <img data-src="{{ asset('assets/ourwork/sharjah-fdi.svg') }}" alt="images" width="258"
                                height="61" src="{{ asset('assets/ourwork/sharjah-fdi.svg') }}">
                        </div>
                        <p class="ourWork__Slider--descrip">
                            Developing a strong digital presence of platforms dedicated towards immense growth
                            and recognizability. </p>

                    </div>
                </div>
                <div class="swiper-slide" role="group" aria-label="7 / 8"
                    style="width: 277.222px; margin-right: 25px;">
                    <div class="ourWork__Slider--slideWrapper height-transition opacity-transition" data-delay="0">
                        <div class="ourWork__Slider--img drag--img ">
                            <img data-src="{{ asset('assets/ourwork/our-work-7.webp') }}" alt="our-work" width="369"
                                height="404" src="{{ asset('assets/ourwork/our-work-7.webp') }}">
                        </div>
                        <div class="ourWork__Slider--logo">
                            <img data-src="{{ asset('assets/ourwork/shurooq-logo.svg') }}" alt="logo" width="258"
                                height="61" src="{{ asset('assets/ourwork/shurooq-logo.svg') }}">
                        </div>
                        <p class="ourWork__Slider--descrip">
                            Assisting business to maintain their digital footprint up to the mark while
                            encouraging them to take more digital initiatives </p>

                    </div>
                </div>
                <div class="swiper-slide" role="group" aria-label="8 / 8"
                    style="width: 277.222px; margin-right: 25px;">
                    <div class="ourWork__Slider--slideWrapper height-transition opacity-transition" data-delay="0">
                        <div class="ourWork__Slider--img drag--img ">
                            <img data-src="{{ asset('assets/ourwork/our-work-8.webp') }}" alt="our-work" width="369"
                                height="404" src="{{ asset('assets/ourwork/our-work-8.webp') }}">
                        </div>
                        <div class="ourWork__Slider--logo">
                            <img data-src="{{ asset('assets/ourwork/suzuki-logo.svg') }}" alt="images" width="258"
                                height="61" src="{{ asset('assets/ourwork/suzuki-logo.svg') }}">
                        </div>
                        <p class="ourWork__Slider--descrip">
                            Assisting one of the most successful automobile companies to attain greater goals of
                            digital presence. </p>

                    </div>
                </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </section>
    <section class="research-design">
        <div class="container">
            <div class="generic--head center-head">
                <h2 class="generic--head__subhead fw-700 primary-col">RESEARCH &amp; DESIGN</h2>
            </div>
            <div class="generic--head col-75 m-auto text-center">
                <p class="generic--head__sec-para black-col">
                    Every new website we create amazes our clients due to its performance and aesthetics. The secret is in
                    our professional and flawless process. Here’s how we do it:
                </p>
            </div>
            <div
                class="research-design__slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-1017dd0a110c702238" aria-live="off">
                    <div class="swiper-slide swiper-slide-active" style="width: 222.2px;" role="group"
                        aria-label="1 / 5">
                        <div class="generic--head research-design__slider--border">
                            <h5 class="generic--head__subhead fw-700 black-col"> Research </h5>
                            <span class="generic--head research-design__slider--slide-number">01</span>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" style="width: 222.2px;" role="group"
                        aria-label="2 / 5">
                        <div class="generic--head research-design__slider--border">
                            <h5 class="generic--head__subhead fw-700 black-col"> Analysis</h5>
                            <span class="generic--head research-design__slider--slide-number">02</span>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 222.2px;" role="group" aria-label="3 / 5">
                        <div class="generic--head research-design__slider--border">
                            <h5 class="generic--head__subhead fw-700 black-col"> Wireframing</h5>
                            <span class="generic--head research-design__slider--slide-number">03</span>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 222.2px;" role="group" aria-label="4 / 5">
                        <div class="generic--head research-design__slider--border">
                            <h5 class="generic--head__subhead fw-700 black-col"> UI Designing </h5>
                            <span class="generic--head research-design__slider--slide-number">04</span>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="5 / 5" style="width: 222.2px;">
                        <div class="generic--head research-design__slider--border">
                            <h5 class="generic--head__subhead fw-700 black-col"> Prototyping </h5>
                            <span class="generic--head research-design__slider--slide-number">05</span>
                        </div>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </section>
    <section class="services animate" data-delay="0s"
        style="animation: 0.5s ease-out 0s 1 normal forwards running anim;">
        <section class="services__wrap">
            <div class="services__items translateX-parent">
                <div class="line-heading translateX-right">
                    <h3 class="outline-text ">SERVICES </h3>
                </div>
                <div class="services-thumb-slider-wrapper">
                    <div
                        class="services-thumb-slider swiper swiper-initialized swiper-vertical swiper-pointer-events swiper-backface-hidden">
                        <div class="swiper-wrapper" id="swiper-wrapper-a4865ddf4106d43d" aria-live="polite"
                            style="transition-duration: 0ms; transform: translate3d(0px,0px,0px);">

                            <div class="swiper-slide" role="group" aria-label="1 / 8" style="height: 11.8px;">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a href="javascript:void(0)">Web Development</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 8"
                                style="height: 11.8px;">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a href="javascript:void(0)">Mobile Application
                                            Development</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="3 / 8"
                                style="height: 11.8px;">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a href="javascript:void(0)">Ecommerce Web Development</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="4 / 8"
                                style="height: 11.8px;">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a href="javascript:void(0)">Digital Marketing</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="5 / 8" style="height: 11.8px;">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a href="javascript:void(0)">Digital Branding
                                            &amp; Communication</a>
                                    </h2>
                                </div>
                            </div>

                            <div class="swiper-slide" role="group" aria-label="6 / 8" style="height: 11.8px;">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a href="javascript:void(0)">UI/UX Design</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="7 / 8" style="height: 11.8px;">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a href="javascript:void(0)">Video Animation</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="8 / 8" style="height: 11.8px;">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a href="javascript:void(0)">IT Resource Outsourcing</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <div class="scroll-text">
                        <span class="mouse">
                            <span class="move"></span>
                        </span>
                        <span class="head">Scroll</span>
                    </div>
                </div>
                <div
                    class="services-slider swiper swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-2af64a9596d2f714" aria-live="polite"
                        style="transition-duration: 0ms;">
                        <div class="swiper-slide" role="group" aria-label="1 / 8"
                            style="width: 1355px; transition-duration: 0ms; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img data-src="{{ asset('assets/services/service-img-1.webp') }}"
                                                alt="images" src="{{ asset('assets/services/service-img-1.webp') }}">
                                        </div>
                                        <div class="descrip-wrapper">
                                            <p>
                                                Get an edge over your competitors and boost your profitability
                                                with magnetic web experiences. Xyberix Solutions is the choice
                                                of
                                                the UAE’s leading brands for website design and web
                                                development services in USA. Whether it’s custom web
                                                development or WordPress web development, we make sure you get
                                                the best of both worlds in the form of a responsive, secure, and
                                                high-performance website. </p>
                                            <p> You can receive services in the following categories of Web
                                                Development:</p>
                                            <ul class="service-item__list-wrapper">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Wordpress Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Sharepoint Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Enterprise Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Sitecore Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        PHP Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Joomla Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        ASP.NET Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        CMS Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Drupal Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Ibexa DXP </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Laravel Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Python Web App Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Angularjs Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Website Maintenance Services </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="#" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                    src="{{ asset('assets/svg-anchor-arrow.svg') }}">
                                                    <style type="text/css">
                                                        .st0 {
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z">
                                                    </path>
                                                    <path class="st0"
                                                        d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg" style="background-color: black">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 8"
                            style="width: 1355px; transition-duration: 0ms; opacity: 1; transform: translate3d(-1355px, 0px, 0px);">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img data-src="{{ asset('assets/services/service-img-2.webp') }}"
                                                alt="images" src="{{ asset('assets/services/service-img-2.webp') }}">
                                        </div>
                                        <div class="descrip-wrapper">
                                            <p>
                                                Leverage the power of mobile solutions and create a personalised
                                                marketing channel for your audience. Xyberix Solutions offers
                                                comprehensive mobile app development services for iOS and
                                                Android devices. In the form of native and cross-platform
                                                applications, we carve out interfaces that win hearts and
                                                accelerate your growth. </p>
                                            <p> Innovative &amp; Ingenious Mobile App Development Solutions in
                                                USA</p>
                                            <ul class="service-item__list-wrapper">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hybrid Apps </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Android App Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        IOS App Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        React Native Apps </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Flutter Apps </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Progressive Web Apps </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Ruby on Rails (ROR) Development </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="#" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                    src="{{ asset('assets/svg-anchor-arrow.svg') }}">
                                                    <style type="text/css">
                                                        .st0 {
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z">
                                                    </path>
                                                    <path class="st0"
                                                        d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg" style="background-color: rgb(54, 54, 54)">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-visible swiper-slide-active" role="group"
                            aria-label="3 / 8"
                            style="width: 1355px; transition-duration: 0ms; opacity: 1; transform: translate3d(-2710px, 0px, 0px);">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img data-src="{{ asset('assets/services/service-img-5.webp') }}"
                                                alt="images" src="{{ asset('assets/services/service-img-5.webp') }}">
                                        </div>
                                        <div class="descrip-wrapper">
                                            <p>
                                                Robust, sales-driven, and intuitive eCommerce solutions for
                                                online businesses yearning to scale in a competitive digital
                                                landscape. Xyberix Solutions is recognized as the top eCommerce
                                                web development company in USA with a team of tech-savvy
                                                professionals, who can integrate both simple and complex
                                                features into your online store. </p>
                                            <p> You can receive services in the following categories of
                                                Ecommerce Web Development:</p>
                                            <ul class="service-item__list-wrapper">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Woo Commerce Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Mirakl Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Magento Ecommerce Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Big Commerce Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Shopify Ecommerce Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Shopify Plus Ecommerce Developments </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="#" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                    src="{{ asset('assets/svg-anchor-arrow.svg') }}">
                                                    <style type="text/css">
                                                        .st0 {
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z">
                                                    </path>
                                                    <path class="st0"
                                                        d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg" style="background-color: #000">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="4 / 8"
                            style="width: 1355px; transition-duration: 0ms; opacity: 0; transform: translate3d(-4065px, 0px, 0px);">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img data-src="{{ asset('assets/services/service-img-3.webp') }}"
                                                alt="images" src="{{ asset('assets/services/service-img-3.webp') }}">
                                        </div>
                                        <div class="descrip-wrapper">
                                            <p>
                                                Climb the ladder of success by accumulating more leads and sales
                                                with our digital marketing services. We will help you achieve a
                                                substantial ROI in a little time with search engine
                                                optimization, social media marketing, and Google Ads with our
                                                tried and tested strategies. </p>
                                            <p> Communicable &amp; Captivating Digital Marketing Services</p>
                                            <ul class="service-item__list-wrapper">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Social Media Marketing (SMM) </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Social Media Optimization (SMO) </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Pay Per Click (PPC) </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Search Engine Optimization (SEO) </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Conversion Rate Optimization (CRO) </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Email Marketing </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Content Marketing </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Online Reputation Management (ORM) </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        App Store Optimization (ASO) </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Public Relation (PR) </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Online Translation Services </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="#" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                    src="{{ asset('assets/svg-anchor-arrow.svg') }}">
                                                    <style type="text/css">
                                                        .st0 {
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z">
                                                    </path>
                                                    <path class="st0"
                                                        d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg" style="background-color: rgb(54, 54, 54)">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="5 / 8"
                            style="width: 1355px; transition-duration: 0ms; opacity: 0; transform: translate3d(-5420px, 0px, 0px);">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img data-src="{{ asset('assets/services/service-img-4.webp') }}"
                                                alt="images" src="{{ asset('assets/services/service-img-4.webp') }}">
                                        </div>
                                        <div class="descrip-wrapper">
                                            <p>
                                                Promote your business to the masses and build a strong
                                                reputation in the market with our branding and communication
                                                services. Now you can focus on meeting the bottom line while we
                                                get your branding message across to the target audience. We have
                                                a knack for crafting memorable brand stories that win you
                                                lifelong customers and boost engagement for your brand. </p>
                                            <p> Creative Branding &amp; Communication Agency for Curious Minds.
                                            </p>
                                            <ul class="service-item__list-wrapper">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Company Profile &amp; Brochure Design </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Business Card Design </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Corporate Identity Design </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Packaging Designs </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Logo Design </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="#" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                    src="{{ asset('assets/svg-anchor-arrow.svg') }}">
                                                    <style type="text/css">
                                                        .st0 {
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z">
                                                    </path>
                                                    <path class="st0"
                                                        d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg" style="background-color: rgb(0, 0, 0)">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide" role="group" aria-label="6 / 8"
                            style="width: 1355px; transition-duration: 0ms; opacity: 0; transform: translate3d(-6775px, 0px, 0px);">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img data-src="{{ asset('assets/services/service-img-6.webp') }}"
                                                alt="images" src="{{ asset('assets/services/service-img-6.webp') }}">
                                        </div>
                                        <div class="descrip-wrapper">
                                            <p>
                                                Get bespoke user experiences that meet all your design needs. We
                                                take pride in crafting stunning user interfaces that make it fun
                                                for your audience to interact with your brand and come back in
                                                the future for more. Whether it’s a mobile app or a
                                                website, Xyberix Solutions’s team of UX/UI designers is
                                                the
                                                best you can hire for UX/UI design services in USA. </p>
                                            <p> A Creative UI/UX Design Agency in USA with Business Centric
                                                Approach</p>
                                            <ul class="service-item__list-wrapper">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        PSD To Responsive HTML </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        UX Design Workshop </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Responsive Web Design </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        UX Design </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Landing Page Design </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        UX Audit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Graphic Design </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="#" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                    src="{{ asset('assets/svg-anchor-arrow.svg') }}">
                                                    <style type="text/css">
                                                        .st0 {
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z">
                                                    </path>
                                                    <path class="st0"
                                                        d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg" style="background-color: rgb(54, 54, 54)">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="7 / 8"
                            style="width: 1355px; transition-duration: 0ms; opacity: 0; transform: translate3d(-8130px, 0px, 0px);">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img data-src="{{ asset('assets/services/service-img-7.webp') }}"
                                                alt="images" src="{{ asset('assets/services/service-img-7.webp') }}">
                                        </div>
                                        <div class="descrip-wrapper">
                                            <p>
                                                Create bewitching videos for your brand and enthral your
                                                prospective customers. Xyberix Solutions is the best video
                                                production company in USA you can choose to make yourself look
                                                and sound awesome. We create everything you need from explainer
                                                videos to sales videos, product videos, branding videos, and a
                                                lot more in exactly the way you envisioned them. </p>
                                            <p> Compelling, Aesthetically Appealing &amp; Immersive Video
                                                Animation.</p>
                                            <ul class="service-item__list-wrapper">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Explanier Video Production </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Product Demo Animation </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Video Game Trailer </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        3D Architectural Walkthroughs </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Medical Animation Studio </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Character Animation Video </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Whiteboard Animation Video </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="#" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                    src="{{ asset('assets/svg-anchor-arrow.svg') }}">
                                                    <style type="text/css">
                                                        .st0 {
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z">
                                                    </path>
                                                    <path class="st0"
                                                        d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg" style="background-color: #000">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="8 / 8"
                            style="width: 1355px; transition-duration: 0ms; opacity: 0; transform: translate3d(-9485px, 0px, 0px);">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img data-src="{{ asset('assets/services/service-img-8.webp') }}"
                                                alt="images" src="{{ asset('assets/services/service-img-8.webp') }}">
                                        </div>
                                        <div class="descrip-wrapper">
                                            <p>
                                                We are an IT outsourcing company in USA to offer an extended
                                                range of services including End User Support, Application
                                                Investment, Cloud &amp; Infrastructure expertise. On-demand IT
                                                staff outsourcing solution USA specialises exclusively for
                                                digital transformation with Custom Software Development,
                                                Software Testing &amp; QA, Cloud Computing, Mobile &amp; Web
                                                Development, Maintenance &amp; Support, Blockchain Consulting,
                                                Data Science, Internet of Things, UI/UX Design, MVP Development,
                                                Nearshore/Offshore Software Development. </p>
                                            <p> Cost-effective and Comprehensive IT Outsourcing Company</p>
                                            <ul class="service-item__list-wrapper">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire Mobile App Developer </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire Scrum Master in USA </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire AWS Resources in USA </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire QA Resources in USA </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire Node.js Developer in USA </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire Azure Developer in USA </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire React JS Developers in USA </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire React Native Developers in USA </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire Sharepoint Developers in USA </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire Dynamics 365 Developers in USA </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire Project Managers in USA </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire Dot Net Developers in USA </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire RPA in USA </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        3D Google Maps Integration </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        MarTech Consulting </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Digital Cloud Transformation Solutions </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="#" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                    src="{{ asset('assets/svg-anchor-arrow.svg') }}">
                                                    <style type="text/css">
                                                        .st0 {
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z">
                                                    </path>
                                                    <path class="st0"
                                                        d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg" style="background-color: rgb(54, 54, 54)">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </section>
    </section>
    <section class="service-mob" data-delay="0s">
        <h1>Services</h1>
        <p id="mobserviceptag">Ecommerce Web Development</p>
        <div
            class="swiper sample-slider swiper-cube swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress">
            <div class="swiper-wrapper" id="swiper-wrapper-2132f74077fadd77" aria-live="off"
                style="cursor: grab; transition-duration: 0ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg); --swiper-cube-translate-z: 0px;">
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="7"><img
                        src="{{ asset('assets/services/servi') }}ce-img-8.webp"></div>
                <div class="swiper-slide" data-swiper-slide-index="0"><img
                        src="{{ asset('assets/services/service-img-5.webp') }}"></div>
                <div class="swiper-slide" data-swiper-slide-index="1"><img
                        src="{{ asset('assets/services/service-img-2.webp') }}"></div>
                <div class="swiper-slide" data-swiper-slide-index="2"><img
                        src="{{ asset('assets/services/service-img-3.webp') }}"></div>
                <div class="swiper-slide" data-swiper-slide-index="3"><img
                        src="{{ asset('assets/services/service-img-4.webp') }}"></div>
                <div class="swiper-slide" data-swiper-slide-index="4"><img
                        src="{{ asset('assets/services/service-img-1.webp') }}"></div>
                <div class="swiper-slide" data-swiper-slide-index="5"><img
                        src="{{ asset('assets/services/service-img-6.webp') }}"></div>
                <div class="swiper-slide" data-swiper-slide-index="6"><img
                        src="{{ asset('assets/services/service-img-7.webp') }}"></div>
                <div class="swiper-slide" data-swiper-slide-index="7"><img
                        src="{{ asset('assets/services/service-img-8.webp') }}"></div>
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0"><img
                        src="{{ asset('assets/services/service-img-5.webp') }}"></div>
                <div class="swiper-cube-shadow"></div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </section>
    <section class="tab-container">
        <div class="sub-container">
            <div class="generic--head center-head">
                <h2 class="generic--head__subhead fw-700 primary-col">TECHNOLOGY IN USE</h2>
            </div>
            <div class="tab-menu-row">
                <div class="tab">
                    <button class="tablinks active" onmouseover="openCity(event, 'Mobile')" fdprocessedid="8le647"
                        style="display: inline-block;">Mobile</button>
                    <button class="tablinks" onmouseover="openCity(event, 'Frontend')" fdprocessedid="filbv"
                        style="display: inline-block;">Frontend</button>
                    <button class="tablinks" onmouseover="openCity(event, 'Database')" fdprocessedid="rly7tk"
                        style="display: inline-block;">Database</button>
                    <button class="tablinks" onmouseover="openCity(event, 'Backend')" fdprocessedid="w64g9v"
                        style="display: inline-block;">Backend</button>
                    <button class="tablinks" onmouseover="openCity(event, 'CMS')" fdprocessedid="1l0qgi"
                        style="display: inline-block;">CMS</button>
                    <button class="tablinks" onmouseover="openCity(event, 'DEVOP')" fdprocessedid="s7htye"
                        style="display: inline-block;">DEVOP</button>
                    <div class="dropdown" style="display: none;">
                        <button class="dropdown-button">More</button>
                        <div class="dropdown-content"></div>
                    </div>
                </div>
            </div>
            <div id="Mobile" class="tabcontent" style="display: block;">
                <div class="tab-row">
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/apple.svg') }}"
                                alt="apple" src="{{ asset('tabs/apple.svg') }}">
                        </div>
                        <h5>iOS</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/android.svg') }}"
                                alt="android" src="{{ asset('tabs/android.svg') }}">
                        </div>
                        <h5>android</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/react.svg') }}"
                                alt="react" src="{{ asset('tabs/react.svg') }}">
                        </div>
                        <h5>react native</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/flutter.svg') }}"
                                alt="flutter" src="{{ asset('tabs/flutter.svg') }}">
                        </div>
                        <h5>Flutter</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/ionic.svg') }}"
                                alt="ionic" src="{{ asset('tabs/ionic.svg') }}">
                        </div>
                        <h5>ionic</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/swift.svg') }}"
                                alt="swift" src="{{ asset('tabs/swift.svg') }}">
                        </div>
                        <h5>swift</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/kotlin.svg') }}"
                                alt="kotlin" src="{{ asset('tabs/kotlin.svg') }}">
                        </div>
                        <h5>Kotlin</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/objectivec.svg') }}"
                                alt="objectivec" src="{{ asset('tabs/objectivec.svg') }}">
                        </div>
                        <h5>objectiveC</h5>
                    </div>
                </div>
            </div>
            <div id="Frontend" class="tabcontent" style="display: none;">
                <div class="tab-row">
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/angularjs.svg') }}"
                                alt="angularjs">
                        </div>
                        <h5>angular.js</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/reactjs.svg') }}"
                                alt="reactjs">
                        </div>
                        <h5>react.js</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/typescript.svg') }}"
                                alt="typescript">
                        </div>
                        <h5>typescript</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/vuejs.svg') }}"
                                alt="vuejs">
                        </div>
                        <h5>vue.js</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/wpf.svg') }}"
                                alt="wpf">
                        </div>
                        <h5>wpf</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/html.svg') }}"
                                alt="html">
                        </div>
                        <h5>html5</h5>
                    </div>
                </div>
            </div>
            <div id="Database" class="tabcontent" style="display: none;">
                <div class="tab-row">
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/mongodb.svg') }}"
                                alt="mongodb">
                        </div>
                        <h5>mongo db</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/mysql.svg') }}"
                                alt="mysql">
                        </div>
                        <h5>mySql</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/mssql.svg') }}"
                                alt="mssql">
                        </div>
                        <h5>msSql</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/firebase.svg') }}"
                                alt="firebase">
                        </div>
                        <h5>Firebase</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/dynamodb.svg') }}"
                                altt="dynamodb">
                        </div>
                        <h5>dynamodb</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/redis.svg') }}"
                                alt="redis">
                        </div>
                        <h5>redis</h5>
                    </div>
                </div>
            </div>
            <div id="Backend" class="tabcontent" style="display: none;">
                <div class="tab-row">
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/php.svg') }}"
                                alt="p">
                        </div>
                        <h5>php</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/java.svg') }}"
                                alt="java">
                        </div>
                        <h5>java</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/nodejs.svg') }}"
                                alt="node">
                        </div>
                        <h5>node.js</h5>
                    </div>
                </div>
            </div>
            <div id="CMS" class="tabcontent" style="display: none;">
                <div class="tab-row">
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/wordpress.svg') }}"
                                alt="wordpress">
                        </div>
                        <h5>wordpress</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/magento.svg') }}"
                                alt="magento">
                        </div>
                        <h5>magento</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/shopify.svg') }}"
                                alt="shopify">
                        </div>
                        <h5>shopify</h5>
                    </div>
                </div>
            </div>
            <div id="DEVOP" class="tabcontent" style="display: none;">
                <div class="tab-row">
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/aws.svg') }}"
                                alt="aws">
                        </div>
                        <h5>aws</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/gradle.svg') }}"
                                alt="gradle">
                        </div>
                        <h5>gradle</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/jenkins.svg') }}"
                                alt="jenkins">
                        </div>
                        <h5>jenkins</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/appium.svg') }}"
                                alt="appium">
                        </div>
                        <h5>appium</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/selenium.svg') }}"
                                alt="selenium">
                        </div>
                        <h5>selenium</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/azure.svg') }}"
                                alt="azure">
                        </div>
                        <h5>azure</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/digitalocean.svg') }}"
                                alt="digitalocean">
                        </div>
                        <h5>digital ocean</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/rackspace.svg') }}"
                                alt="rackspace">
                        </div>
                        <h5>rackspace</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/linode.svg') }}"
                                alt="linode">
                        </div>
                        <h5>linode</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<section class="pricingCards section">-->
    <!--    <div class="pricingTable">-->
    <!--        <h2 class="pricingTable-title">Discover a suitable plan tailored to your needs.</h2>-->
    <!--        <h3 class="pricingTable-subtitle">Request for a price</h3>-->
    <!--        <div class="pricingTable-firstTable">-->
    <!--            <div class="pricingTable-firstTable_table">-->
    <!--                <h1 style="color: rgb(255, 255, 255)" class="pricingTable-firstTable_table__header">Basic Website-->
    <!--                    Package </h1>-->
    <!--                <ul class="pricingTable-firstTable_table__options">-->
    <!--                    <li>2 Stock Images</li>-->
    <!--                    <li>1 Page Website</li>-->
    <!--                    <li>1 jQuery Slider Banner</li>-->
    <!--                    <li>Contact/Query Form</li>-->
    <!--                    <li>Complete W3C Certified HTML</li>-->
    <!--                    <li>48 to 72 hours TAT</li>-->
    <!--                    <li>Complete Deployment</li>-->
    <!--                    <li>100% Satisfaction Guarantee</li>-->
    <!--                    <li>100% Unique Design Guarantee</li>-->
    <!--                    <li>100% Money Back Guarantee *</li>-->
    <!--                </ul>-->
    <!--                <div class="pricing-card-row">-->
    <!--                    <div class="pricing-card-column">-->
    <!--                        <h3 class="pricing-price">$249/<small style="text-decoration: line-through">$498</small></h3>-->
    <!--                    </div>-->
    <!--                    <div class="pricing-card-column" >-->
    <!--                        <button onclick="openModal('fixed price')"  type="button" class="pricing-button-get-details">Get Details</button>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="pricingTable-firstTable_table">-->
    <!--                <h1 style="color: rgb(246, 246, 246)" class="pricingTable-firstTable_table__header">Shopify Starter-->
    <!--                    Package</h1>-->
    <!--                <ul class="pricingTable-firstTable_table__options">-->
    <!--                    <li>User-friendly website</li>-->
    <!--                    <li>Template customization</li>-->
    <!--                    <li>personalization</li>-->
    <!--                    <li>Unlimited revisions</li>-->
    <!--                    <li>Shopping cart integration</li>-->
    <!--                    <li>Payment shipping integration</li>-->
    <!--                    <li>Mobile responsive design</li>-->
    <!--                    <li>Stock images</li>-->
    <!--                    <li>Dedicated designer &amp; developer</li>-->
    <!--                    <li>100% Ownership </li>-->
    <!--                    <li> Money back Guarantee </li>-->
    <!--                </ul>-->
    <!--                <div class="pricing-card-row">-->
    <!--                    <div class="pricing-card-column">-->
    <!--                        <h3 class="pricing-price">$499/<small style="text-decoration: line-through">$998</small></h3>-->
    <!--                    </div>-->
    <!--                    <div class="pricing-card-column" >-->
    <!--                        <button onclick="openModal('fixed price')"  type="button" class="pricing-button-get-details">Get Details</button>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="pricingTable-firstTable_table">-->
    <!--                <h1 style="color: rgb(255, 255, 255)" class="pricingTable-firstTable_table__header">Startup Plan-->
    <!--                    Package-->
    <!--                </h1>-->
    <!--                <ul class="pricingTable-firstTable_table__options">-->
    <!--                    <li>Website Audit</li>-->
    <!--                    <li>15 Selected Keywords Targeting</li>-->
    <!--                    <li>Keyword Research</li>-->
    <!--                    <li>Keyword Grouping</li>-->
    <!--                    <li>Keyword Mapping</li>-->
    <!--                    <li>On-Page Optimization</li>-->
    <!--                    <li>SEO Road Map</li>-->
    <!--                    <li>Blog Creation</li>-->
    <!--                    <li>Webpage Copywriting</li>-->
    <!--                    <li>Title Tag Optimization</li>-->
    <!--                    <li>Meta Description Optimization</li>-->
    <!--                    <li>Meta Keyword Optimization</li>-->
    <!--                    <li>Domain Redirect Optimization</li>-->
    <!--                    <li>xml Sitemap Optimization</li>-->
    <!--                    <li>Robots.txt Check</li>-->
    <!--                    <li>URL Rewrites</li>-->
    <!--                    <li>Broken Link Report</li>-->
    <!--                    <li>Initial Off-Page SEO</li>-->
    <!--                    <li>Social Bookmarking</li>-->
    <!--                    <li>Slide Share Marketing</li>-->
    <!--                    <li>Forums/FAQ’s</li>-->
    <!--                    <li>Link Building</li>-->
    <!--                    <li>Directory Submission</li>-->
    <!--                    <li>Local Business Listings</li>-->
    <!--                </ul>-->
    <!--                <div class="pricing-card-row">-->
    <!--                    <div class="pricing-card-column">-->
    <!--                        <h3 class="pricing-price">$350/<small style="text-decoration: line-through">$700</small></h3>-->
    <!--                    </div>-->
    <!--                    <div class="pricing-card-column" >-->
    <!--                        <button onclick="openModal('fixed price')"  type="button" class="pricing-button-get-details">Get Details</button>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="row" style="align-content: center">-->
    <!--        <button onclick="window.location.href='https://www.xyberixsolutions.com/pricing'" type="button" class="pricingTable-firstTable_table__getstart">View More</button>-->
    <!--    </div>-->
    <!--</section>-->
    <section class="portfolio-section">
        <div class="portfolio-section-container">
            <div class="portfolio-section-top">
                <h2>How to get started</h2>
                <p>It all starts with an idea. And then you get your idea rolling. Get right talents to support you on your
                    way. So let's get together to talk about your exciting project.</p>
               <button type="button" onclick="window.open('https://calendly.com/info-xyberix/30min', '_blank')">Book a free consultation</button>

            </div>
            <div class="portfolio-section-bottom">
                <div class="portfolio-section-bottom-pricing">
                    <h2>Pricing</h2>
                    <p>Interested to know how much your project is going to cost? Request a detailed no-obligation estimate
                        today.</p>
                     <button type="button" onclick="window.location='{{ route('pricing') }}'">Get a quote</button>

                    <div class="portfolio-section-bottom-pricing-image">
                        <img src="{{ asset('portfolio/pricing.svg') }}" alt="pricing-image">
                    </div>
                </div>
                <div class="portfolio-section-bottom-right">
                    <div class="portfolio-section-bottom-right-card">
                        <div class="head">
                            <h2>Portfolio</h2>
                            <a href="{{route('portfolio')}}">View Portfolio &gt;</a>
                        </div>
                        <div class="image">
                            <img src="{{ asset('portfolio/portfolio-card-1.webp') }}" alt="portfolio-card-1">
                        </div>
                    </div>
                    <div class="portfolio-section-bottom-right-card">
                        <div class="head">
                            <h2>Portfolio</h2>
                            <a href="{{route('portfolio')}}">View Portfolio &gt;</a>
                        </div>
                        <div class="blog-head">
                            <p>Artificial Intelligence</p>
                            <div class="author">
                                <div class="avatar">
                                    <img src="{{ asset('portfolio/blog-author-avatar.webp') }}"
                                        alt="blog-author-avatar">
                                </div>
                                <span>Maria Johnes</span>
                            </div>
                        </div>
                        <h6>Chatbots in Real Estate</h6>
                        <p class="date">24/09/2023</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq section animate" data-delay="0s"
        style="animation: 0.5s ease-out 0s 1 normal forwards running anim;">
        <div class="line-heading translateX-right">
            <h3 class="outline-text ">FAQ</h3>
        </div>
        <div class="faq__container">
            <div class="faq__Slider swiper drag--img--white swiper-initialized swiper-horizontal swiper-pointer-events">
                <div class="swiper-wrapper" id="swiper-wrapper-8bc5876fd10b21e3f" aria-live="polite"
                    style="transform: translate3d(0px, 0px, 0px);">
                    <div class="faq-width swiper-slide animate fadein-Up swiper-slide-active" data-delay="0s"
                        role="group" aria-label="1 / 43"
                        style="animation: 0.5s ease-out 0s 1 normal forwards running anim; width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover mouseleave right">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    1 </h2>
                                <h4 class="faq__Slider--head">
                                    I need web design services for my enterprise website. Can you help? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img data-src="{{ asset('images/plus-icon.svg') }}" alt="images"
                                            width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    1 </h2>
                                <p>
                                    Whether you are an enterprise or a start-up, we would love to contribute to
                                    your growth with our web design and development services in USA. We have
                                    designed several enterprise websites before.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up swiper-slide-next" data-delay="0s"
                        role="group" aria-label="2 / 43"
                        style="width: 225.4px; animation: 0.5s ease-out 0s 1 normal forwards running anim; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover mouseleave right">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    2 </h2>
                                <h4 class="faq__Slider--head">
                                    How much does it cost to hire web designer in USA? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img data-src="{{ asset('images/plus-icon.svg') }}" alt="images"
                                            width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    2 </h2>
                                <p>
                                    If you are looking to hire web designer in USA,&nbsp;you must consider
                                    factors such as;&nbsp;website nature,&nbsp;the development platform, and
                                    hosting service provider.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="3 / 43"
                        style="width: 225.4px; animation: 0.5s ease-out 0s 1 normal forwards running anim; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover mouseleave bottom">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    3 </h2>
                                <h4 class="faq__Slider--head">
                                    How can I choose a great web design agency in USA? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img data-src="{{ asset('images/plus-icon.svg') }}" alt="images"
                                            width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    3 </h2>
                                <p>
                                    If you are looking for the best website design company for your business,
                                    you should first identify what kind of site you require, and what you aim to
                                    accomplish with your new website.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="4 / 43"
                        style="width: 225.4px; animation: 0.5s ease-out 0s 1 normal forwards running anim; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    4 </h2>
                                <h4 class="faq__Slider--head">
                                    Is responsive web design important? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img data-src="{{ asset('images/plus-icon.svg') }}" alt="images"
                                            width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    4 </h2>
                                <p>
                                    Almost 60% of web traffic comes from mobile devices. So if your website is
                                    not mobile-friendly or responsive, you will lose more than half of your
                                    prospects. Responsive website design is also important for SEO. If your
                                    website isn’t responsive, you will get little to no organic traffic.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="5 / 43"
                        style="width: 225.4px; animation: 0.5s ease-out 0s 1 normal forwards running anim; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    5 </h2>
                                <h4 class="faq__Slider--head">
                                    What are the average charges that a website design agency in USA asks for
                                    responsive web design services? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img data-src="{{ asset('images/plus-icon.svg') }}" alt="images"
                                            width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    5 </h2>
                                <p>
                                    When designing your website, most expert web designers in USA will make
                                    sure that your site is mobile-friendly anyway. Responsive web design may
                                    cost between 7346 USD to 73,460 USD, based on the designer’s
                                    experience and your project. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="6 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    6 </h2>
                                <h4 class="faq__Slider--head">
                                    How can I compare different web design services? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    6 </h2>
                                <p>
                                    You should compare different web design services in areas like service
                                    charges, their old customers, online reviews, and the quality of their
                                    portfolios on the whole. You will then have a better idea of which <b>USA
                                        web design services</b> would be ideal for your business’s
                                    objectives. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="7 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    7 </h2>
                                <h4 class="faq__Slider--head">
                                    What skills should a web designer in USA have? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    7 </h2>
                                <p>
                                    A website designer in USA should have various skills including knowledge
                                    of the principles of design, typography, composition, color theory,
                                    knowledge of design software, knowledge of content management systems (CMS),
                                    responsive design, User Experience (UX), User Interface (UI), and graphic
                                    design. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="8 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    8 </h2>
                                <h4 class="faq__Slider--head">
                                    What are the elements of web design in UAE? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    8 </h2>
                                <p>
                                    There are five basic elements of <b>website design in the UAE.</b> Those are
                                    content, usability, aesthetics, visibility, and interaction. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="9 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    9 </h2>
                                <h4 class="faq__Slider--head">
                                    How much will a web design agency in USA charge me? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    9 </h2>
                                <p>
                                    It depends on the complexity of the design and the reputation of the web
                                    design agency USA you choose. A well-reputed agency will always impress
                                    you by going the extra mile to ensure work quality and thus, it’s
                                    likely to charge a little higher than the normal ones. On average, the cost
                                    of web design in USA starts from USD 10,000 and goes as high as USD
                                    50,000. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="10 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    10 </h2>
                                <h4 class="faq__Slider--head">
                                    I'm looking for a specific web development framework. Tell me a bit about
                                    your expertise. </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    10 </h2>
                                <p>
                                    As we have a diverse client base with varying needs in the web domain, we
                                    house a team of React JS, Angular, Vue JS, Laravel, Ruby on Rails, Flask,
                                    Node JS, Cake PHP, CodeIgniter, and Bootstrap experts at Xyberix Solutions.
                                    Just let us know which one is your preferred framework or technology for web
                                    development and we will connect you with the pertinent department. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="11 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    11 </h2>
                                <h4 class="faq__Slider--head">
                                    I need a website but I also need someone who can boost it on Google with
                                    SEO. Can I hire Xyberix Solutions for this task? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    11 </h2>
                                <p>
                                    Of course, we would be more than happy to assist you in this area. As we
                                    have a team of search engine optimization experts with several years of
                                    experience on the back, we know what your website needs to stand out on
                                    Google. Recognized among the best SEO agencies in USA, we guarantee
                                    significant organic reach with our tried and tested white-hat SEO strategy.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="12 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    12 </h2>
                                <h4 class="faq__Slider--head">
                                    Do you offer ERP systems customization and integration services? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    12 </h2>
                                <p>
                                    Yes, our team of experienced software engineers is aware of the complexities
                                    involved in ERP integration and carries out delicate processes in a seamless
                                    manner. We can assist you with SAP, Oracle, Salesforce, Microsoft, Infor,
                                    IFS, Epicor, SYSPRO, Acumatica, Sage, and many more. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="13 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    13 </h2>
                                <h4 class="faq__Slider--head">
                                    Which Industrial projects does your agency deal with? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    13 </h2>
                                <p>
                                    Over the decade, our team has gained extensive cross-industry experience
                                    allowing us further to take on diverse projects. Some of the industries we
                                    have successfully delivered include Real Estate, Automobile, SMEs,
                                    Healthcare, Fashion, Manufacturing, Automotive, Technology, FMCG, Food and
                                    Beverage. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="14 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    14 </h2>
                                <h4 class="faq__Slider--head">
                                    How many years have you served in the UAE market? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    14 </h2>
                                <p>
                                    Xyberix Solutions has been serving as a digital marketing agency in USA
                                    for
                                    a decade now. We have offered the best web solutions in the UAE to different
                                    agencies and unique start-up ideas and have helped them to achieve digital
                                    growth and visibility. We are known for our state-of-the-art affordable
                                    marketing and web design and web development services in USA. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="15 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    15 </h2>
                                <h4 class="faq__Slider--head">
                                    Should I develop my app on iOS or Android for my new business? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    15 </h2>
                                <p>
                                    As suggested by mobile app developers, choosing the right platforms is
                                    subject to your market audience and business objectives. You should launch
                                    your application on the platform with the best-targeted audience engagement.
                                    On the other hand, we as a top-notch digital marketing agency offer both
                                    android app development and ios app development services. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="16 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    16 </h2>
                                <h4 class="faq__Slider--head">
                                    What are the services suggested for my startup business? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    16 </h2>
                                <p>
                                    Assuming that you have no website and logo for online branding now, we
                                    suggest you the following services:<br>Logo design<br>Brochure design<br>Web
                                    design and development<br>Social media marketing<br>Search engine
                                    optimization </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="17 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    17 </h2>
                                <h4 class="faq__Slider--head">
                                    Which web design platform is right for me? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    17 </h2>
                                <p>
                                    There are a plethora of web design platforms in the market. Some of the best
                                    and trending web design platforms include WordPress with WooCommerce,
                                    Shopify, and Magento. These are our most opted services in the industry for
                                    result-driven business models. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="18 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    18 </h2>
                                <h4 class="faq__Slider--head">
                                    What will be the turnaround time for my project? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    18 </h2>
                                <p>
                                    Our aim is to ensure absolute transparency in our work, and therefore
                                    involve our clients every step of the way. Once you get in touch with us
                                    with your project brief, we will schedule a meeting with you to discuss the
                                    project at length. Once the client approves the proposal, we will start
                                    working our magic. The project turnaround time estimation is solely based on
                                    project requirements. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="19 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    19 </h2>
                                <h4 class="faq__Slider--head">
                                    What programming language is used for hybrid and native mobile app
                                    development? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    19 </h2>
                                <p>
                                    For designing Hybrid apps, mobile app development companies in USA use
                                    Swift, Xamarin, and Objective C. And for Native mobile applications, app
                                    design service providers prefer Java, Python, C++, Kotlin, and Rust. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="20 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    20 </h2>
                                <h4 class="faq__Slider--head">
                                    Does your digital agency offer ongoing help with our new site once it's
                                    launched? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    20 </h2>
                                <p>
                                    Yes, we offer ongoing help with a website that we have created, once
                                    launched. However, if your website has been up and running for some time,
                                    then we offer further services for a charge. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="21 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    21 </h2>
                                <h4 class="faq__Slider--head">
                                    What programming language is used for hybrid and native mobile apps? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    21 </h2>
                                <p>
                                    When creating a Hybrid app, various programming languages are used, such as
                                    Xamarin and React Native. In contrast, when developing Native mobile
                                    applications, programming languages such as Swift and Objective C are used
                                    for iOS, and Java and Kotlin are used for Android applications. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="22 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    22 </h2>
                                <h4 class="faq__Slider--head">
                                    What does a simple project cost? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    22 </h2>
                                <p>
                                    We are an all-encompassing digital agency that offers highly customized
                                    digital solutions to its wide global clientele. All projects we take on have
                                    different objectives and requirements; therefore, all our solutions are
                                    unique. Consequently, we do not have a standardized pricing system in place.
                                    If you are looking for a quote for your project, get in touch with us
                                    through our website or social media platforms. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="23 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    23 </h2>
                                <h4 class="faq__Slider--head">
                                    How long does it take to build a website? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    23 </h2>
                                <p>
                                    It depends on the size of the website. At Xyberix Solutions, we follow the
                                    agile approach to deliver small to complex websites in 1 to 3 months. This
                                    timeline may further increase or decrease depending on the hurdles involved
                                    in a particular project. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="24 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    24 </h2>
                                <h4 class="faq__Slider--head">
                                    How much does it cost to develop a mobile app? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    24 </h2>
                                <p>
                                    Native mobile app development is relatively more expensive than
                                    cross-platform app development. A mobile app development company USA will
                                    charge you between USD 50,000 to USD 200,000 for developing native,
                                    cross-platform, and hybrid mobile applications. Need a price for mobile app
                                    development USA? Reach out to us, we will share a custom business proposal
                                    with you according to your requirements. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="25 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    25 </h2>
                                <h4 class="faq__Slider--head">
                                    How much money does it take to maintain an app? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    25 </h2>
                                <p>
                                    App maintenance is very critical for the successful working of your app.
                                    Failure to do so will directly affect your user experience and will
                                    consequently impact your sales. There is no fixed rate for app maintenance
                                    since it depends upon your specific app and agency contract(if you have
                                    one). Therefore, when you partner with a mobile app development company, you
                                    should discuss the annual maintenance charges in advance. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="26 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    26 </h2>
                                <h4 class="faq__Slider--head">
                                    How much budget do I need for Google Ads PPC? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    26 </h2>
                                <p>
                                    It depends on the CPC of the keywords you want to target, the campaign
                                    objective, and the agency you choose for campaign management. We suggest you
                                    get a free consultation from our performance marketing team to get more
                                    clarity on this subject. WhatsApp us to schedule your meeting today. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="27 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    27 </h2>
                                <h4 class="faq__Slider--head">
                                    I need brochures for my business. Is brochure design a part of your branding
                                    service? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    27 </h2>
                                <p>
                                    Xyberix Solutions is a full-service design agency in USA, offering
                                    brochure
                                    design, logo design, packaging design, and several other services in the
                                    design domain. We can also assist you with flyers, company profiles, and
                                    pitch decks. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="28 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    28 </h2>
                                <h4 class="faq__Slider--head">
                                    My website or app depends and relies on a specific web service or cloud
                                    provider? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    28 </h2>
                                <p>
                                    Yes, our web design and app development team is skilled in most of the web
                                    services and work with different cloud providers including: Microsoft Azure,
                                    Amazon Web Services (AWS), Google Cloud, Alibaba Cloud, IBM Cloud, Oracle,
                                    Salesforce, SAP, Rackspace Cloud, VMWare. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="29 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    29 </h2>
                                <h4 class="faq__Slider--head">
                                    Will you offer a discount if I take multiple services from you? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    29 </h2>
                                <p>
                                    Yes, we do offer discounts to clients who approach us for multiple services.
                                    For example, if you hire us for both web design and search engine
                                    optimization of your website, we will quote you a discount price. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="30 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    30 </h2>
                                <h4 class="faq__Slider--head">
                                    What web design services does your web design agency USA offer? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    30 </h2>
                                <p>
                                    We offer 360 web designing USA. Our services cover UX/UI design from
                                    scratch, PSD to HTML conversion, UX/UI audit, and a complete user interface
                                    revamp. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="31 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    31 </h2>
                                <h4 class="faq__Slider--head">
                                    I’m looking for an agency to design as well as code the front-end and
                                    back-end. Can you help? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg}') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    31 </h2>
                                <p>
                                    From web design to web development, we do everything. Our web team consists
                                    of PHP, HTML, CSS, JavaScript, React, Laravel, and ASP.NET experts. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="32 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    32 </h2>
                                <h4 class="faq__Slider--head">
                                    How much will it cost me to hire a website designer USA from Digital
                                    Gravity? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    32 </h2>
                                <p>
                                    Our web design service charges vary from project to project, depending on
                                    the complexity involved. To get a custom quote, fill out the form and our
                                    sales team will contact you the same day. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="33 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    33 </h2>
                                <h4 class="faq__Slider--head">
                                    Why should I hire you for website design UAE? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    33 </h2>
                                <p>
                                    At Xyberix Solutions, we strive to set new quality benchmarks and exceed the
                                    expectations of our clients. We have more than 10 years of experience in web
                                    design and development. Our impressive portfolio reflects the quality of our
                                    work. So choosing us means working with the best web design agency in USA.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="34 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    34 </h2>
                                <h4 class="faq__Slider--head">
                                    Can your website developers migrate my website? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    34 </h2>
                                <p>
                                    Yes, our website development team is equipped with all the technical
                                    knowledge required for safe and smooth website migration. We follow a
                                    risk-free method to ensure that you don't lose any traffic and online safes.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="35 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    35 </h2>
                                <h4 class="faq__Slider--head">
                                    I’m looking for a web developer in USA for WordPress web
                                    development. Do you have any WordPress experts in your team? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    35 </h2>
                                <p>
                                    Our web design USA services cover all popular platforms such as WordPress,
                                    Magento, Shopify, and many more. So whether you need some assistance with
                                    plugin installation or custom theme development, CMS development, or
                                    e-commerce development, we have you covered! </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="36 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    36 </h2>
                                <h4 class="faq__Slider--head">
                                    Can you create a content management system for my website? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    36 </h2>
                                <p>
                                    Yes, we have a team of web developers USA who are proficient in WordPress,
                                    Drupal, Joomla, and several other content management systems. We can code
                                    one from scratch as well as make changes to your existing CMS as per your
                                    requirements. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="37 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    37 </h2>
                                <h4 class="faq__Slider--head">
                                    May I know the name of some of the UAE’s biggest brands you have
                                    worked with? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg}') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    37 </h2>
                                <p>
                                    In the last few years, our client base has grown substantially. The most
                                    notable names among all include GJ Real Estate, Al Ghurair, Masdar, Capital
                                    Health Screening Center, Jino, Emaar, Suzuki, and Coroli. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="38 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    38 </h2>
                                <h4 class="faq__Slider--head">
                                    I’m looking for a content marketing agency. Do you have writers in
                                    your agency? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    38 </h2>
                                <p>
                                    Content marketing is a part of our primary services. We have an in-house
                                    team of Arabic and English copywriters, who are equally good in both sales
                                    copywriting and SEO writing. Our team can assist you with web content,
                                    articles, blog posts, video sales scripts, and a lot more. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="39 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    39 </h2>
                                <h4 class="faq__Slider--head">
                                    Why should I choose you as my web design agency in USA? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    39 </h2>
                                <p>
                                    As an experienced web design agency USA, we bring unique ideas to the
                                    table. By leveraging those concepts, you can set yourself apart from the
                                    rest and engage your audience. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="40 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    40 </h2>
                                <h4 class="faq__Slider--head">
                                    Can you create a theme-based WordPress website? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    40 </h2>
                                <p>
                                    Our WordPress design and development services USA cover everything you
                                    need. From custom WordPress development to WordPress theme and plugin
                                    development, WooCommerce development, and WordPress maintenance. Reach out
                                    to us to get a quote for your WordPress theme website. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="41 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    41 </h2>
                                <h4 class="faq__Slider--head">
                                    Why should I hire web developer from a&nbsp;professional web development
                                    agency? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    41 </h2>
                                <p>
                                    When you hire web developer from a professional agency, you not only save
                                    time and cost, but also get a professional and experienced team on-board.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="42 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    42 </h2>
                                <h4 class="faq__Slider--head">
                                    Do I need to hire web designer&nbsp;to develop my business site? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    42 </h2>
                                <p>
                                    You must hire web designer&nbsp;if your business has a decent budget to
                                    spend on building your new site and has the patience to wait at least a few
                                    months for the final product. </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-width swiper-slide animate fadein-Up" data-delay="0s" role="group"
                        aria-label="43 / 43" style="width: 225.4px; margin-right: 30px;">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    43 </h2>
                                <h4 class="faq__Slider--head">
                                    Should I hire web designer from an agency or a freelance designer? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}"
                                            alt="images" width="16" height="16"
                                            src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    43 </h2>
                                <p>
                                    Although hiring a freelancer might seem like a cost-effective option, but
                                    there are multiple drawbacks these include; lack of control, mis-management,
                                    and deteriorating communication. When you hire web designer from an agency
                                    you will have a dedicated project manager, web site designer, and web
                                    developer working on your website. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </section>
    <div class="gtco-testimonials">
        <h2>OUR CLIENTS TRUST US</h2>
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div>
                <div class="card text-center"><img class="card-img-top" src="{{ asset('testimonial/3.webp') }}"
                        alt="images">
                    <div class="card-body">
                        <h5>Mr.David Stewart Handelman<br />
                            <span>Book Writer</span>
                        </h5>
                        <p class="card-text">"Xyberix excelled in creating my e-book site, seamlessly featuring my books
                            with engaging tutorials. Meticulous attention, responsiveness, and dedication make them an
                            exceptional digital partner, highly recommended for authors." </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="{{ asset('testimonial/1.webp') }}"
                        alt="images">
                    <div class="card-body">
                        <h5>Mr.William Chu<br />
                            <span> Engineer </span>
                        </h5>
                        <p class="card-text">“They excel in tackling challenging tasks and delving deep into technology.
                            Their project management, communication, and commitment to continuous improvement impress us,
                            ensuring deadlines are consistently met.” </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="{{ asset('testimonial/2.webp') }}"
                        alt="images">
                    <div class="card-body">
                        <h5>Mr.TJ Wilkinson<br />
                            <span> Project Manager </span>
                        </h5>
                        <p class="card-text">“
                            Xyberix's higher quality, ongoing backend support since January 2018, minimal rework, and cost
                            efficiency make them a reliable choice with a technically proficient team. Their multiple
                            developers ensure timely assistance when needed.” </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="{{ asset('testimonial/4.webp') }}"
                        alt="images">
                    <div class="card-body">
                        <h5>Mr.Theodore Joseph Hauenstein<br />
                            <span>Graphic Designer</span>
                        </h5>
                        <p class="card-text">“ They deliver a comprehensive development solution in multiple languages,
                            with proactive communication, swift issue resolution, and standout proficiency in both front-
                            and backend work, design, and functionality enhancements.” </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="trustpilot-widget" style="margin-bottom:20px" data-locale="en-US"
        data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="65b2b2ca94caa4c0b17f1896"
        data-style-height="52px" data-style-width="100%">
        <a href="https://www.trustpilot.com/review/xyberixsolutions.com" target="_blank" rel="noopener">Trustpilot</a>
    </div>
    <section class="collabCompanies section">
        <div class="container">
            <h2 class="collabCompanies__title">
                We are ready to uplift your <span class="primary-col">brand like many others in</span> the past!
            </h2>
            <div
                class="collabCompanies__Slider drag--img swiper swiper-grid swiper-grid-column swiper-initialized swiper-horizontal swiper-pointer-events">
                <div class="swiper-wrapper skew-transition-parent" id="swiper-wrapper-2105fde8bae1b16cc"
                    aria-live="polite" style="width: 3016px; transform: translate3d(0px, 0px, 0px);">
                    <div class="swiper-slide skew-transition swiper-slide-active" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="1 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/1.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/1.webp') }}">
                        </div>
                    </div>
                    {{-- <div class="swiper-slide skew-transition swiper-slide-next" data-delay="0" style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;" role="group" aria-label="2 / 37">
                            <div class="img-wrapper">
                                <img  data-src="{{asset('assets/ourbrands/2.webp')}}" alt="images" width="225" height="225" src="{{asset('assets/ourbrands/2.webp')}}">
                            </div>
                        </div> --}}
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="3 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/3.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/3.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;"
                        role="group" aria-label="4 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/4.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/4.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="5 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/5.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/5.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;"
                        role="group" aria-label="6 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/6.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/6.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="7 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/7.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/7.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;"
                        role="group" aria-label="8 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/8.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/8.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="9 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/9.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/9.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;"
                        role="group" aria-label="10 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/10.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/10.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="11 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/11.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/11.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;"
                        role="group" aria-label="12 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/12.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/12.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="13 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/13.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/13.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;"
                        role="group" aria-label="14 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/14.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/14.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="15 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/15.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/15.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;"
                        role="group" aria-label="16 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/16.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/16.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="17 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/17.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/17.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;"
                        role="group" aria-label="18 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/18.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/18.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="19 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/19.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/19.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;"
                        role="group" aria-label="20 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/20.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/20.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="21 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/37.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/37.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;"
                        role="group" aria-label="22 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/22.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/22.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="23 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/23.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/23.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;"
                        role="group" aria-label="24 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/24.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/24.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="25 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/25.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/25.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;"
                        role="group" aria-label="26 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/26.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/26.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="27 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/27.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/27.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;"
                        role="group" aria-label="28 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/28.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/28.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="29 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/29.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/29.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;"
                        role="group" aria-label="30 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/30.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/30.webp') }}">
                        </div>
                    </div>
                    {{-- <div class="swiper-slide skew-transition" data-delay="0" style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;" role="group" aria-label="31 / 37">
                            <div class="img-wrapper">
                                <img  data-src="{{asset('assets/ourbrands/31.webp')}}" alt="images" width="225" height="225" src="{{asset('assets/ourbrands/31.webp')}}">
                            </div>
                        </div> --}}
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;"
                        role="group" aria-label="32 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/32.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/32.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="33 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/33.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/33.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;"
                        role="group" aria-label="34 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/34.svg') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/34.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="35 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/35.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/35.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px; margin-top: 0px;"
                        role="group" aria-label="36 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/36.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/36.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                        style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 158.714px;"
                        role="group" aria-label="37 / 37">
                        <div class="img-wrapper">
                            <img data-src="{{ asset('assets/ourbrands/37.webp') }}" alt="images" width="225"
                                height="225" src="{{ asset('assets/ourbrands/37.webp') }}">
                        </div>
                    </div>
                </div>
                <div class="app-slider__scrollbarWrapper">
                    <div class="app-slider__scrollbar">
                        <div class="swiper-scrollbar swiper-scrollbar-horizontal">
                            <div class="swiper-scrollbar-drag"
                                style="transform: translate3d(0px, 0px, 0px); width: 160.609px;"></div>
                        </div>
                        <div class="drag-wrapper">
                            <div class="drag-img">
                                <img data-src="{{ asset('assets/drag-img.svg') }}"
                                    src="{{ asset('assets/drag-img.svg') }}" alt="drag" width="21"
                                    height="21">
                            </div>
                            <h4 class="drag-head">
                                Drag to see more
                            </h4>
                        </div>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </section>
@endsection
