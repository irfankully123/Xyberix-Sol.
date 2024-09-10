@extends('layout')
@section('styles')
<style type="text/css">
    #banner{background:url("{{ asset('assets/img-banner.jpg') }}") center top/cover no-repeat;height:auto}.form{background:rgba(255,255,255,.3);box-shadow:0 8px 32px 0 rgba(31,38,135,.37);backdrop-filter:blur(2.5px);-webkit-backdrop-filter:blur(2.5px);border-radius:10px;border:1px solid rgba(255,255,255,.18);padding:20px 40px}.form-input,.form-select{padding:10px;width:100%;background:rgba(255,255,255,.5)}.form-heading{font-size:24px!important;font-weight:700!important;margin-bottom:12px;color:#fff!important}.form-group{margin-bottom:20px}.form-input{border-radius:4px;border:none}.form-input,.form-select{margin-top:10px}.form-label{letter-spacing:2.5px;font-size:15px;color:#fff}.form-select{border-radius:4px;border:none;font-weight:300;letter-spacing:1.5px;color:#000!important}.form-btn{outline:0;border:1px solid #000;color:#fff;padding:14px 20px;background-color:#111;letter-spacing:1.5px;font-weight:700;cursor:pointer;transition:.5s ease-in-out}.form-btn:hover{background-color:#fff;color:#000}.col-sm-50{width:50%;padding:0 5px 0 0!important}.mt-1{margin-top:10%}.row-form{display:flex;justify-content:center}.col-50{padding:20px}#banner .section-heading:before{content:"";display:block;width:30px;height:5px;margin-top:30px;background:#b0b0b0}#banner h1{font-family:'Open Sans',sans-serif,Arial,Helvetica;font-size:40px;line-height:60px;font-weight:800;color:#e1e1e1;padding-top:5%}.sub-row{max-width:1000px;margin:0 auto;padding:100px 0;position:relative}@media screen and (max-width:767px){.form{padding:10px!important}.row-form{flex-wrap:wrap}.col-50{width:70%;padding:20px 0!important}.form-heading{font-size:20px!important}.section-heading h1{font-size:40px!important}#banner{height:auto}#logo img{max-height:45px!important}}@media screen and (max-width:650px){.col-50{width:80%;padding:20px 0!important}}@media screen and (max-width:950px){.col-sm-50{width:100%}}@media screen and (max-width:500px){.col-50{width:85%;padding:20px 0!important}}
</style>
@endsection
@section('content')
    <div id="banner">
        <div id="banner-content" class="sub-row row-form">
            <div class="col-50">
                <form class="form" id="myForm" autocomplete="on">
                    <input name="source" type="hidden" value="https://landingpage.xyberixsolutions.com/">
                    <h2 class="form-heading">Let's Talk About Your Project!</h2>
                    <div class="row-form">
                        <div class="form-group col-sm-50">
                            <label for="full-name" class="form-label">Full Name <span></span></label>
                            <input name="fullname" type="text" id="full-name" class="form-input" required autocomplete="name">
                        </div>
                        <div class="form-group col-sm-50">
                            <label for="contact" class="form-label">Contact <span></span></label>
                            <input name="phone" type="tel" id="contact" class="form-input" autocomplete="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Email" class="form-label">Email <span>*</span></label>
                        <input name="email" type="email" id="Email" class="form-input" required autocomplete="email">
                    </div>
                    <div class="form-group">
                        <label for="Budget" class="form-label">Estimated Budget<span></span></label>
                        <select name="budget" id="Budget" class="form-select">
                            <option value="empty" selected disabled>Your Budget</option>
                            <option value="0 - $100">0 - $100</option>
                            <option value="$100 - $200">$100 - $200</option>
                            <option value="$200 - $300">$200 - $300</option>
                            <option value="$300 - $400">$300 - $400</option>
                            <option value="$400 - $500">$400 - $500</option>
                            <option value="$500+">$500+</option>
                            <option value="flexible budget">Flexible Budget</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Description <span></span></label>
                        <textarea name="message" rows="5" id="description" class="form-input" autocomplete="on"></textarea>
                    </div>
                    <div class="form-group text-right mt-1">
                        <button type="submit" class="form-btn btn-dark">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-50">
                <div class="section-heading">
                    <h1>We Are Different</h1>
                    <span style="color: aliceblue;">
                        Empower your vision with Xyberix Solution, where your ideas find a home amidst a wealth of talent
                        and resources dedicated to transforming them into tangible realities. As a globally acclaimed
                        digital agency, we specialize in elevating brands to new heights through revolutionary user
                        experiences and cutting-edge digital products that redefine industry standards.</span>
                </div>
            </div>
        </div>
    </div>
@endsection
