@extends('layout')
@section('styles')
    <style rel="stylesheet" type="text/css">
        .custom-tabs {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            background: #e5e5e5;
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
            background: #e5e5e5;
            cursor: pointer;
            font-weight: bold;
            font-size: 18px;
            color: #7f7f7f;
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

        .pricingTable-firstTable_table:nth-of-type(2):before {
            display: none !important;
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
                            Choose the pricing that is most suitable for your project.
                        </h6>
                        <h1 class="generic--head__head fw-700">
                            Fixed Price,Time and Materials,<span class="primary-col">Dedicated Teams.</span> </h1>
                    </div>
                </div>
                <div class="col-30">
                    <p class>Prioritize assurance in budget and timeline by opting for fixed-price contracts, which are more
                        streamlined in administration and necessitate less meticulous tracking of labor or materials</p>
                </div>
            </div>
        </div>
    </section>
    <section class="currentOpenings section">
        <div class="pricingTable">
            <h2 class="pricingTable-title"> Discover a suitable plan tailored to your needs.</h2>
            <h3 class="pricingTable-subtitle">Request for a price</h3>
            <div class="custom-tabs">
                <input class="custom-input" name="tabs" type="radio" id="custom-tab-1" checked="checked" />
                <label class="custom-label" for="custom-tab-1">Website Design</label>

                <input class="custom-input" name="tabs" type="radio" id="custom-tab-2" />
                <label class="custom-label" for="custom-tab-2">Shopify Packages</label>

                <input class="custom-input" name="tabs" type="radio" id="custom-tab-3" />
                <label class="custom-label" for="custom-tab-3">Marketing Packages</label>
            </div>
        </div>
        <div class="website-design tab-content active">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="pricingTable-firstTable_table swiper-slide">
                            <h1 style="color: rgb(255, 255, 255)" class="pricingTable-firstTable_table__header">Basic
                                Website
                                Package </h1>
                            <ul class="pricingTable-firstTable_table__options">
                                <li>2 Stock Images</li>
                                <li>2 Page Website</li>
                                <li>1 jQuery Slider Banner</li>
                                <li>Contact/Query Form</li>
                                <li>Complete W3C Certified HTML</li>
                                <li>48 to 72 hours TAT</li>
                                <li>Complete Deployment</li>
                                <li>100% Satisfaction Guarantee</li>
                                <li>100% Money Back Guarantee *</li>
                            </ul>
                            <div class="pricing-card-row">
                                <div class="pricing-card-column">
                                    <h3 class="pricing-price ">$199/<small
                                            style="text-decoration: line-through">$398</small></h3>
                                </div>
                                <div class="pricing-card-column">
                                    <button onclick="openModal('fixed price')" type="button"
                                        class="pricing-button-get-details">Get Details</button>
                                </div>
                            </div>
                        </div>
                        <div class="pricingTable-firstTable_table swiper-slide">
                            <h1 style="color: rgb(255, 255, 255)" class="pricingTable-firstTable_table__header">Startup Website Package</h1>
                                <ul class="pricingTable-firstTable_table__options">
                                    <li>5 Stock Photos</li>
                                    <li>5 Page Website</li>
                                    <li>3 Banner Design</li>
                                    <li>1 jQuery Slider Banner</li>
                                    <li>FREE Google Friendly Sitemap</li>
                                    <li>Complete W3C Certified HTML</li>
                                    <li>48 to 72 hours TAT</li>
                                    <li>100% Satisfaction Guarantee</li>
                                    <li>100% Money Back Guarantee *</li>
                                    <li>Mobile Responsive</li>
                                    <li>CMS will be Additional $250*</li>
                                </ul>
                            <div class="pricing-card-row">
                                <div class="pricing-card-column">
                                    <h3 class="pricing-price ">$249/<small
                                            style="text-decoration: line-through">$498</small></h3>
                                </div>
                                <div class="pricing-card-column">
                                    <button onclick="openModal('fixed price')" type="button"
                                        class="pricing-button-get-details">Get Details</button>
                                </div>
                            </div>
                        </div>
                        <div class="pricingTable-firstTable_table swiper-slide">
                            <h1 style="color: rgb(255, 255, 255)" class="pricingTable-firstTable_table__header">
                                Professional Website Package
                            </h1>
                                <ul class="pricingTable-firstTable_table__options">
                                    <li>8 Unique Pages Website</li>
                                    <li>CMS / Admin Panel Support</li>
                                    <li>8 Stock images</li>
                                    <li>5 Banner Designs</li>
                                    <li>1 jQuery Slider Banner</li>
                                    <li>Mobile Responsive</li>
                                    <li>FREE Google Friendly Sitemap</li>
                                    <li>Complete W3C Certified HTML</li>
                                    <li>48 to 72 hours TAT</li>
                                    <li>Complete Deployment</li>
                                    <li>100% Satisfaction Guarantee</li>
                                    <li>100% Money Back Guarantee *</li>
                                </ul>
                            <div class="pricing-card-row">
                                <div class="pricing-card-column">
                                    <h3 class="pricing-price ">$498/<small
                                            style="text-decoration: line-through">$898</small></h3>
                                </div>
                                <div class="pricing-card-column">
                                    <button onclick="openModal('fixed price')" type="button"
                                        class="pricing-button-get-details">Get Details</button>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="pricingTable-firstTable_table swiper-slide">
                            <h1 style="color: black" class="pricingTable-firstTable_table__header">Elite Website Package
                            </h1>
                            <p style="color: black;font-size:50px;margin-bottom: 10px;"
                                class="pricingTable-firstTable_table__pricing">
                                <span>$1445 <small style="text-decoration: line-through">$2890</small> Save 50%</span>
                            </p>
                            <ul class="pricingTable-firstTable_table__options">
                                <li>Upto 15 Unique Pages Web</li>
                                <li>Conceptual and Dynamic Web</li>
                                <li>Mobile Responsive</li>
                                <li>Online Reservation/Appointment </li>
                                <li>Online Payment Integration </li>
                                <li>Custom Forms</li>
                                <li>Lead Capturing Forms </li>
                                <li>Striking Hover Effects</li>
                                <li>Newsletter Subscription </li>
                                <li>Newsfeed Integration</li>
                                <li>Social Media Integration</li>
                                <li>5 Stock Photos</li>
                                <li>3 Unique Banner Design</li>
                                <li>1 jQuery Slider Banner</li>
                                <li>Complete W3C Certified HTML</li>
                                <li>48 to 72 hours TAT</li>
                                <li>Complete Deployment</li>
                                <li>100% Satisfaction Guarantee</li>
                                <li>100% Money Back Guarantee *</li>
                            </ul>


                            <button onclick="openModal('fixed price')" class="pricingTable-firstTable_table__getstart"
                                fdprocessedid="z4pkpd">Get Details</button>
                        </div>
                        <div class=" pricingTable-firstTable_table swiper-slide">
                            <h1 style="color: black" class="pricingTable-firstTable_table__header">Corporate Website
                                Package</h1>
                            <p style="color: black;font-size:50px;margin-bottom: 10px;"
                                class="pricingTable-firstTable_table__pricing">
                                <span>$2395 <small style="text-decoration: line-through">$4790</small> Save 50%</span>
                            </p>
                            <ul class="pricingTable-firstTable_table__options">
                                <li>20 to 30 Pages Website</li>
                                <li>Custom Made, Dynamic</li>
                                <li>Custom PHP Development</li>
                                <li>1 jQuery Slider Banner</li>
                                <li>Up to 10 Custom Made Banner</li>
                                <li>15 Stock Images</li>
                                <li>Unlimited Revisions</li>
                                <li>Special Hover Effects</li>
                                <li>(CMS)</li>
                                <li>Online Appointment/Scheduling</li>
                                <li>Online Payment Integration</li>
                                <li>Multi Lingual</li>
                                <li>Custom Dynamic Forms</li>
                                <li>Signup Area</li>
                                <li>Basic Search Bar</li>
                                <li>Live Feeds of Social Networks</li>
                                <li>Mobile Responsive</li>
                                <li>Free Google Friendly Sitemap</li>
                                <li>Search Engine Submission</li>
                                <li>Complete W3C Certified HTML</li>
                                <li>Industry Specified Team</li>
                                <li>Complete Deployment</li>
                                <li>Dedicated Accounts Manager</li>
                                <li>100% Ownership Rights</li>
                                <li>100% Satisfaction Guarantee</li>
                                <li>100% Money Back Guarantee *</li>
                            </ul>
                            <button onclick="openModal('Time-and-Materials')"
                                class="pricingTable-firstTable_table__getstart" fdprocessedid="axhv07">Get Details</button>
                        </div>
                        <div class="pricingTable-firstTable_table swiper-slide">
                            <h1 style="color: black" class="pricingTable-firstTable_table__header">Business Website
                                Package</h1>
                            <p style="color: black;font-size:50px;margin-bottom: 10px;"
                                class="pricingTable-firstTable_table__pricing">
                                <span>$2995 <small style="text-decoration: line-through">$5990</small> Save 50%</span>
                            </p>
                            <ul class="pricingTable-firstTable_table__options">
                                <li>Unlimited Pages Website</li>
                                <li>Product Customization</li>
                                <li>Custom Made </li>
                                <li>Dynamic and Interactive</li>
                                <li>High End Design</li>
                                <li>Custom PHP Development</li>
                                <li>5 jQuery Slider Banner</li>
                                <li>Up to 10 Custom Made Banner</li>
                                <li>30 Stock Images</li>
                                <li>Unlimited Revisions</li>
                                <li>Special Hover Effects</li>
                                <li>(CMS)</li>
                                <li>Online Appointment/Scheduling</li>
                                <li>Online Ordering Integration</li>
                                <li>Online Payment Integration</li>
                                <li>Multi Lingual</li>
                                <li>Custom Dynamic Forms</li>
                                <li>Signup Area</li>
                                <li>Advance Search Bar</li>
                                <li>POS System</li>
                                <li>Social Networks integration</li>
                                <li>Mobile Responsive</li>
                                <li>Free Google Friendly Sitemap</li>
                                <li>Search Engine Submission</li>
                                <li>Complete W3C Certified HTML</li>
                                <li>Industry Specified Team</li>
                                <li>Complete Deployment</li>
                                <li>15 Seconds 2D Explainer Video</li>
                                <li>Voice - Over &amp; Sound Effects</li>
                                <li>Professional Script Writing</li>
                                <li>Storyboard</li>
                                <li>SEO Meta Tags</li>
                                <li>Dedicated Accounts Manager</li>
                                <li>100% Ownership Rights</li>
                                <li>100% Satisfaction Guarantee</li>
                                <li>100% Money Back Guarantee *</li>
                            </ul>

                            <button onclick="openModal('Dedicated developers')"
                                class="pricingTable-firstTable_table__getstart" fdprocessedid="oi3c6">Get Details</button>
                        </div>
                        <div class="pricingTable-firstTable_table swiper-slide">
                            <h1 style="color: black" class="pricingTable-firstTable_table__header">Enterprise Website
                                Package</h1>
                            <p style="color: black;font-size:50px;margin-bottom: 10px;"
                                class="pricingTable-firstTable_table__pricing">
                                <span>$4749 <small style="text-decoration: line-through">$9498</small> Save 50%</span>
                            </p>
                            <ul class="pricingTable-firstTable_table__options">
                                <li>On-going Tech Support</li>
                                <li>Project Management Team</li>
                                <li>Dedicated CRM Access</li>
                                <li>Unlimited Pages Website</li>
                                <li>Custom Made </li>
                                <li>Dynamic and Interactive</li>
                                <li>High End Design</li>
                                <li>Complete Website Graphics</li>
                                <li>Detailed Business Profiling</li>
                                <li>Portfolio</li>
                                <li>Sales Funnel Integration</li>
                                <li>Custom CMS</li>
                                <li>Admin Panel Support</li>
                                <li>Custom Development</li>
                                <li>Process Automation Tools</li>
                                <li>Push Notification</li>
                                <li>MLS/IDX Integration</li>
                                <li>Maps Integration</li>
                                <li>Search Filters</li>
                                <li>Specialized CRM Integration</li>
                                <li>Scheduler Integration</li>
                                <li>Unlimited Listings</li>
                                <li>All device compatible</li>
                                <li>Cross-Browser Compatible</li>
                                <li>Social media integration</li>
                                <li>User-Login management system</li>
                                <li>Third-party integrations</li>
                                <li>3 jQuery Slider Banner</li>
                                <li>Up to 10 Custom Made Banner</li>
                                <li>Unlimited Stock Images</li>
                                <li>Unlimited Revisions</li>
                                <li>Special Hover Effects</li>
                                <li>Multi Lingual</li>
                                <li>Custom Dynamic Forms</li>
                                <li>Signup Area </li>
                                <li>Search Bar</li>
                                <li>Social Networks integration</li>
                                <li>Blog Feature Integration</li>
                                <li>SEO friendly coding</li>
                                <li>Free Google Friendly Sitemap</li>
                                <li>Industry Specified Team</li>
                                <li>Complete Deployment</li>
                                <li>Completion Certificate</li>
                                <li>100% Satisfaction Guarantee</li>
                                <li>100% Money Back Guarantee</li>
                                <li>90 Days Post Launch Warranty </li>
                                <li>End User Training</li>
                            </ul>
                            <button onclick="openModal('fixed price')" class="pricingTable-firstTable_table__getstart"
                                fdprocessedid="z4pkpd">Get Details</button>
                        </div> --}}
                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="shopify-packages tab-content">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="pricingTable-firstTable_table swiper-slide">
                            <h1 style="color: rgb(255, 255, 255)" class="pricingTable-firstTable_table__header">Shopify Starter Package </h1>
                            <ul class="pricingTable-firstTable_table__options">
                                <li>User-friendly website </li>
                                <li>Customized Design</li>
                                <li>Sales Funnel Integration</li>
                                <li>Unlimited Revisions</li>
                                <li>Shopping Cart Integration</li>
                                <li>Multiple Payment Option</li>
                                <li>All Device Compatible </li>
                                <li>Social media integration</li>
                                <li>Website Security</li>
                                <li>Stock Images</li>
                                <li>Sales &amp; inventory management</li>
                                <li>Dropshiping</li>
                                <li>Discounts &amp; promotions </li>
                                <li>Dedicated designer &amp; developer</li>
                                <li>Money back Guarantee</li>
                                <li>100% Ownership</li>
                            </ul>
                            <div class="pricing-card-row">
                                <div class="pricing-card-column">
                                    <h3 class="pricing-price ">$298/<small
                                            style="text-decoration: line-through">$596</small></h3>
                                </div>
                                <div class="pricing-card-column">
                                    <button onclick="openModal('fixed price')" type="button"
                                        class="pricing-button-get-details">Get Details</button>
                                </div>
                            </div>
                        </div>
                        <div class="pricingTable-firstTable_table swiper-slide">
                            <h1 style="color: rgb(255, 255, 255)" class="pricingTable-firstTable_table__header">Shopify Professional
                                Package
                            </h1>
                            <ul class="pricingTable-firstTable_table__options">
                                <li>User-friendly website </li>
                                <li>Customized Design</li>
                                <li>Sales Funnel Integration</li>
                                <li>Unlimited Revisions</li>
                                <li>Shopping Cart Integration</li>
                                <li>Multiple Payment Option</li>
                                <li>All Device Compatible </li>
                                <li>Social media integration</li>
                                <li>Website Security</li>
                                <li>Stock Images</li>
                                <li>Sales &amp; inventory management</li>
                                <li>Dropshiping</li>
                                <li>Discounts &amp; promotions </li>
                                <li>Dedicated designer &amp; developer</li>
                                <li>Money back Guarantee</li>
                                <li>100% Ownership</li>
                            </ul>
                            <div class="pricing-card-row">
                                <div class="pricing-card-column">
                                    <h3 class="pricing-price ">$596/<small
                                            style="text-decoration: line-through">$1190</small></h3>
                                </div>
                                <div class="pricing-card-column">
                                    <button onclick="openModal('fixed price')" type="button"
                                        class="pricing-button-get-details">Get Details</button>
                                </div>
                            </div>
                        </div>
                        <div class="pricingTable-firstTable_table swiper-slide">
                            <h1 style="color: rgb(255, 255, 255)" class="pricingTable-firstTable_table__header">Shopify Business
                                Package
                             </h1>
                             <ul class="pricingTable-firstTable_table__options">
                                <li>User-friendly custom website </li>
                                <li>Liquid Templating</li>
                                <li>Sales Funnel Integration</li>
                                <li>Unlimited revisions</li>
                                <li>Shopping cart integration</li>
                                <li>Multiple payment option</li>
                                <li>All device compatible</li>
                                <li>Website Security</li>
                                <li>Unlimited stock images</li>
                                <li>Sales &amp; inventory management</li>
                                <li>Auto Invoice Generation</li>
                                <li>Customizable checkout</li>
                                <li>Gift cards</li>
                                <li>Discounts &amp; promotions</li>
                                <li>Social media integration</li>
                                <li>User-Login management system</li>
                                <li>Order Tracking</li>
                                <li>Purchase History</li>
                                <li>Product recommendations</li>
                                <li>Dropshipping</li>
                                <li>Third-party integrations</li>
                                <li>Multi-currency support</li>
                                <li>Dedicated designer &amp; developer</li>
                                <li>Moneyback Guarantee</li>
                                <li>100% Ownership</li>
                            </ul>
                            <div class="pricing-card-row">
                                <div class="pricing-card-column">
                                    <h3 class="pricing-price ">$895/<small
                                            style="text-decoration: line-through">$1790</small></h3>
                                </div>
                                <div class="pricing-card-column">
                                    <button onclick="openModal('fixed price')" type="button"
                                        class="pricing-button-get-details">Get Details</button>
                                </div>
                            </div>
                        </div>
                        <div class="pricingTable-firstTable_table swiper-slide">
                            <h1 style="color: rgb(255, 255, 255)" class="pricingTable-firstTable_table__header">Shopify Enterprise Package</h1>
                            <ul class="pricingTable-firstTable_table__options">
                                <li>User-friendly custom website </li>
                                <li>Liquid Templating</li>
                                <li>Sales Funnel Integration</li>
                                <li>Unlimited revisions</li>
                                <li>Shopping cart integration</li>
                                <li>Multiple payment option</li>
                                <li>All device compatible</li>
                                <li>Website Security</li>
                                <li>Unlimited stock images</li>
                                <li>Sales &amp; inventory management</li>
                                <li>Auto Invoice Generation</li>
                                <li>Customizable checkout</li>
                                <li>Gift cards</li>
                                <li>Discounts &amp; promotions</li>
                                <li>Social media integration</li>
                                <li>User-Login management system</li>
                                <li>Order Tracking</li>
                                <li>Purchase History</li>
                                <li>Product recommendations</li>
                                <li>Dropshipping</li>
                                <li>Third-party integrations</li>
                                <li>Multi-currency support</li>
                                <li>Dedicated designer &amp; developer</li>
                                <li>Moneyback Guarantee</li>
                                <li>100% Ownership</li>
                            </ul>
                            <div class="pricing-card-row">
                                <div class="pricing-card-column">
                                    <h3 class="pricing-price ">$1200/<small
                                            style="text-decoration: line-through">$2400</small></h3>
                                </div>
                                <div class="pricing-card-column">
                                    <button onclick="openModal('fixed price')" type="button"
                                        class="pricing-button-get-details">Get Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <div class="marketing-packages tab-content">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="pricingTable-firstTable_table swiper-slide">
                            <h1 style="color: rgb(255, 255, 255)" class="pricingTable-firstTable_table__header">Startup Plan Package</h1>
                            <ul class="pricingTable-firstTable_table__options">
                                <li>Website Audit</li>
                                <li>15 Selected Keywords Targeting</li>
                                <li>Keyword Research</li>
                                <li>Keyword Grouping</li>
                                <li>Keyword Mapping</li>
                                <li>On-Page Optimization</li>
                                <li>SEO Road Map</li>
                                <li>Blog Creation</li>
                                <li>Webpage Copywriting</li>
                                <li>Title Tag Optimization</li>
                                <li>Meta Description Optimization</li>
                                <li>Meta Keyword Optimization</li>
                                <li>Domain Redirect Optimization</li>
                                <li>xml Sitemap Optimization</li>
                                <li>Robots.txt Check</li>
                                <li>URL Rewrites</li>
                                <li>Broken Link Report</li>
                                <li>Initial Off-Page SEO</li>
                                <li>Social Bookmarking</li>
                                <li>Slide Share Marketing</li>
                                <li>Forums/FAQ’s</li>
                                <li>Link Building</li>
                                <li>Directory Submission</li>
                                <li>Local Business Listings</li>
                            </ul>
                            <div class="pricing-card-row">
                                <div class="pricing-card-column">
                                    <h3 class="pricing-price ">$350/<small
                                            style="text-decoration: line-through">$700</small></h3>
                                </div>
                                <div class="pricing-card-column">
                                    <button onclick="openModal('fixed price')" type="button"
                                        class="pricing-button-get-details">Get Details</button>
                                </div>
                            </div>
                        </div>
                        <div class="pricingTable-firstTable_table swiper-slide">
                            <h1 style="color: rgb(255, 255, 255)" class="pricingTable-firstTable_table__header">Scaling Plan Package</h1>
                            <ul class="pricingTable-firstTable_table__options">
                                <li>Business Analysis</li>
                                <li>Consumer Analysis</li>
                                <li>Competitor Analysis</li>
                                <li>35 Selected Keywords Targeting</li>
                                <li>15 Pages Keyword Targeted</li>
                                <li>Webpage Optimization</li>
                                <li>Meta Tags Creation</li>
                                <li>Keyword Optimization</li>
                                <li>Image Optimization</li>
                                <li>Inclusion of anchors</li>
                                <li>Tracking &amp; Analysis</li>
                                <li>Google Analytics Installation</li>
                                <li>Google Webmaster Installation</li>
                                <li>Call To Action Plan</li>
                                <li>Creation of Sitemaps</li>
                                <li>Reporting</li>
                                <li>Monthly Reporting</li>
                                <li>Email Support</li>
                                <li>Phone Support</li>
                                <li>Off Page Optimization</li>
                                <li>Social Bookmarking</li>
                                <li>Slide Share Marketing</li>
                                <li>Forums/FAQ’s</li>
                                <li>Link Building</li>
                                <li>Directory Submission</li>
                                <li>Local Business Listings</li>
                                <li>Local Business Listings</li>
                            </ul>
                            <div class="pricing-card-row">
                                <div class="pricing-card-column">
                                    <h3 class="pricing-price ">$750/<small
                                            style="text-decoration: line-through">$1500</small></h3>
                                </div>
                                <div class="pricing-card-column">
                                    <button onclick="openModal('fixed price')" type="button"
                                        class="pricing-button-get-details">Get Details</button>
                                </div>
                            </div>
                        </div>
                        <div class="pricingTable-firstTable_table swiper-slide">
                            <h1 style="color: rgb(255, 255, 255)" class="pricingTable-firstTable_table__header">Venture Plan Package</h1>
                            <ul class="pricingTable-firstTable_table__options">
                                <li>Business Analysis</li>
                                <li>Consumer Analysis</li>
                                <li>Competitor Analysis</li>
                                <li>60+ Selected Keywords Targeting</li>
                                <li>30 Pages Keyword Targeted</li>
                                <li>Webpage Optimization</li>
                                <li>Meta Tags Creation</li>
                                <li>Keyword Optimization</li>
                                <li>Image Optimization</li>
                                <li>Inclusion of anchors Tags</li>
                                <li>Indexing Modifications</li>
                                <li>Tracking &amp; Analysis</li>
                                <li>Google Places Inclusions</li>
                                <li>Google Analytics Installation</li>
                                <li>Google Webmaster Installation</li>
                                <li>Call To Action Plan</li>
                                <li>Creation of Sitemaps</li>
                                <li>Reporting</li>
                                <li>Monthly Reporting</li>
                                <li>Recommendation</li>
                                <li>Email Support</li>
                                <li>Phone Support</li>
                                <li>Off Page Optimization</li>
                                <li>Social Bookmarking</li>
                                <li>Slide Share Marketing</li>
                                <li>Forums/FAQ’s</li>
                                <li>Link Building</li>
                                <li>Directory Submission</li>
                                <li>Local Business Listings</li>
                            </ul>
                            <div class="pricing-card-row">
                                <div class="pricing-card-column">
                                    <h3 class="pricing-price ">$1200/<small
                                            style="text-decoration: line-through">$2400</small></h3>
                                </div>
                                <div class="pricing-card-column">
                                    <button onclick="openModal('fixed price')" type="button"
                                        class="pricing-button-get-details">Get Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabs = document.querySelectorAll('.custom-input');
            const tabContents = document.querySelectorAll('.tab-content');

            tabs.forEach(function(tab, index) {
                tab.addEventListener('change', function() {
                    // Hide all tab contents
                    tabContents.forEach(function(content) {
                        content.classList.remove('active');
                    });

                    // Show the selected tab content
                    tabContents[index].classList.add('active');
                });
            });
        });
    </script>
@endsection
