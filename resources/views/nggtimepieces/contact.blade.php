@extends('layouts.mainnewtime')

@section('content')

    <br><br><br>
    <!-- contact -->
    <div class="container">
        <center>
            <div id="myResultDiv"></div>
        </center>
        <br>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if ($message = Session::get('message'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="infomation">
                        <div class="card_card">
                            <div class="container_card">
                                <hr class="new2">
                                <h4>Boutique Udonthani, Thailand</h4>
                                <hr class="new2">
                                <p>Department Store 1 FL. 277 / 1-3 Prajaksilpak Amphoe Mueang Udon Thani,</p>
                                <p>Udon Thani 41000</p>
                                <p>STORE HOURS 10:30 - 21:00 (Mon-Sun)</p>
                                <p>CONTACT Tel: +664-292-1339</p>
                                <br><br>
                            </div>
                        </div>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.1263090634225!2d102.79805791443938!3d17.40572500685839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31239d7ca3ab6a75%3A0xcbd7b88ccd8d47a9!2z4LmA4LiL4LmH4LiZ4LiX4Lij4Lix4Lil4Lie4Lil4Liy4LiL4LiyIOC4reC4uOC4lOC4o-C4mOC4suC4meC4tQ!5e0!3m2!1sth!2sth!4v1508497455277"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="swiper-slide">
                    <div class="infomation">
                        <div class="card_card">
                            <div class="container_card">
                                <hr class="new2">
                                <h4>NGG Timepieces Head Office</h4>
                                <hr class="new2">
                                <p> Multi-Brands. Bangkok, Thailand</p>
                                <p>428 Ratchadapisek Rd.,</p>
                                <p>Chong Nonsi, Yan Nawa, Bangkok 10120</p>
                                <p>STORE HOURS 09:00 - 18:30 (Mon-Fri)</p>
                                <p>CONTACT Tel: +662-678-9988</p>
                                <br>
                            </div>
                        </div>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1938.1816590753535!2d100.53559304033658!3d13.696431821892109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29f49a4384edf%3A0x999bc8f2e15355c9!2sNGG%20Timepieces%20-%20Official%20Rolex%20Retailer!5e0!3m2!1sth!2sth!4v1596558291333!5m2!1sth!2sth"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="swiper-slide">
                    <div class="infomation">
                        <div class="card_card">
                            <div class="container_card">
                                <hr class="new2">
                                <h4>Central World</h4>
                                <hr class="new2">
                                <p> Multi-Brands Bangkok, Thailand</p>
                                <p>Department Store 1 FL. 4/4 / 2/4 Ratchadamri Road,</p>
                                <p>Pathumwan, Pathumwan, Bangkok 10330</p>
                                <p>STORE HOURS 10:30 - 22:00 (Mon-Sun)</p>
                                <p>CONTACT Tel: +662-640-7000</p>
                                <br>

                            </div>
                        </div>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.5908693991387!2d100.535339064399!3d13.743202301196373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29ecfc2f455e1%3A0xc4ad0280d8906604!2z4LmA4LiL4LmH4LiZ4LiX4Lij4Lix4Lil4LmA4Lin4Li04Lil4LiU4LmM!5e0!3m2!1sth!2sth!4v1508497477726"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="swiper-slide">

                    <div class="infomation">

                        <div class="card_card">
                            <div class="container_card">
                                <hr class="new2">
                                <h4>Central Plaza Ladprao</h4>
                                <hr class="new2">
                                <p>Multi-Brands Bangkok, Thailand</p>
                                <p>Department Store 3 FL. 1693 Phaholyothin Rd.,</p>
                                <p>Chatuchak, Chatuchak, Bangkok 10900</p>
                                <p>STORE HOURS 10:00 - 22:00 (Mon-Sun)</p>
                                <p>CONTACT Tel: +662-793-6000</p>
                                <br>
                            </div>
                        </div>

                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.3864141389904!2d100.55878331439965!3d13.81582019952999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29c5a53d05aab%3A0x313d533c3d15a124!2z4LmA4LiL4LmH4LiZ4LiX4Lij4Lix4Lil4Lie4Lil4Liy4LiL4LiyIOC4peC4suC4lOC4nuC4o-C5ieC4suC4pw!5e0!3m2!1sth!2sth!4v1508497498551"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="swiper-slide">

                    <div class="infomation">
                        <div class="card_card">
                            <div class="container_card">
                                <hr class="new2">
                                <h4>Central WestGate</h4>
                                <hr class="new2">
                                <p>Multi-Brands Nonthaburi, Thailand</p>
                                <p>Department Store 1 FL. 199, 199/1, 199/2 Moo 6 Bang Yai Sub-district,</p>
                                <p>Sao Thong Hin Nonthaburi 11140</p>
                                <p>STORE HOURS 10:00 - 21:00 (Mon-Sun)</p>
                                <p>CONTACT Tel: +662-102-7999</p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.367036905266!2d100.409434614631!3d13.876988390266531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29020ac6e42a9%3A0xa070ae6040275d9!2z4LmA4LiL4LmH4LiZ4LiX4Lij4Lix4Lil4LmA4Lin4Liq4LiV4LmM4LmA4LiB4LiV!5e0!3m2!1sth!2sth!4v1589307256863!5m2!1sth!2sth"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <!-- mail -->
        <div class="banner-bottom">
            <div class="agileits_heading_section">
                <h3 class="wthree_head">Contact us</h3>
                <p class="agileinfo_para"></p>
            </div>
            <br>






            <div class="w3ls_portfolio_grids w3_agile_mail_grids">
                <form action="{{ url('save_contact') }}" method="post" id="myform" onsubmit="return validateRecaptcha();">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="col-md-6 w3_agile_mail_grid">
                            <span class="input input--ichiro">
                                <input class="input__field input__field--ichiro" type="text" id="input-25" name="name"
                                    placeholder=" " required="" maxlength="20" />
                                <label class="input__label input__label--ichiro" for="input-25">
                                    <span class="input__label-content input__label-content--ichiro" >Your Name</span>
                                </label>
                            </span>
                            <span class="input input--ichiro">
                                <input class="input__field input__field--ichiro" type="email" id="input-26" placeholder=" "
                                    name="email" required="" />
                                <label class="input__label input__label--ichiro" for="input-26">
                                    <span class="input__label-content input__label-content--ichiro">Your Email</span>
                                </label>
                            </span>
                            <span class="input input--ichiro">
                                <input class="input__field input__field--ichiro" type="text" id="input-28" placeholder=" "
                                    name="from_country" required="" maxlength="20" />
                                <label class="input__label input__label--ichiro" for="input-28">
                                    <span class="input__label-content input__label-content--ichiro" >Country</span>
                                </label>
                            </span>
                            <span class="input input--ichiro">
                                <input class="input__field input__field--ichiro" type="text" id="input-27" placeholder=" "
                                    required="" name="phone" maxlength="20"   />
                                <label class="input__label input__label--ichiro" for="input-27">
                                    <span class="input__label-content input__label-content--ichiro"  >Your Phone Number</span>
                                </label>
                            </span>
                            <span class="input input--ichiro">

                                <label>
                                    <input type="checkbox" id="conditions" name="conditions" required />
                                    * I have read and accepted <a href="../terms_and_conditions" style="color: blue;">the
                                        terms and conditions</a> and <a href="../privacy_policy"
                                        style="color: blue;">privacy policy</a>
                                </label>
                            </span>
                            <span class="input input--ichiro">
                                <label>
                                    <input type="checkbox" id="accept_marketing" name="accept_marketing" value="1"  />
                                    I accept receiving marketing information about Rolex from NGG TIMEPIECES CO. LTD.
                                </label>
                            </span>
                            <br>
                          

                            <input type="submit" value="Submit">
                        </div>
                        <div class="col-md-6 w3_agile_mail_grid">
                            <textarea placeholder="Your message here..." required="" name="message" maxlength="250" ></textarea>
                        </div>
                    </div>



                    <div class="clearfix"> </div>
                    <input type="hidden" name="recaptcha" id="recaptcha">
                </form>
            </div>

        </div>
    </div>
    <!-- //mail -->
    <br><br><br>


@endsection


@section('javascript')

    <script>
        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 30,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 8000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

    </script>

@endsection
