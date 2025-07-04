<footer class="footer footer-two border-0">

    <div class="footer-top aos" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{ url('/') }}">
                                @if(isset($generalSettings) && $generalSettings->brand_white_logo)
                                    <img src="@prodImage($generalSettings->brand_white_logo)" alt="logo">
                                @else
                                    <img src="@prodImage('assets/img/kingster-white-logo.png')" alt="logo">
                                @endif
                            </a>
                        </div>
                        <!-- Footer Widget -->
                        <div class="footer-widget footer-contact">
                            <div class="footer-contact-info">
                                <div class="footer-address">
                                    <span><i class="feather-phone-call"></i></span>
                                    <div>
                                        <h6>Technical Support: </h6>
                                        <p>{{ isset($generalSettings) && $generalSettings->customer_support_mobile ? $generalSettings->customer_support_mobile : '+91 88665 13744' }}</p>
                                    </div>
                                </div>
                                <div class="footer-address">
                                    <span><i class="feather-mail"></i></span>
                                    <div>
                                        <h6>Email Address</h6>
                                        <p>{{ isset($generalSettings) && $generalSettings->customer_support_email ? $generalSettings->customer_support_email : 'support@kingster.info' }}</p>
                                    </div>
                                </div>
                                @if(isset($generalSettings) && $generalSettings->office_time)
                                <div class="footer-address">
                                    <span><i class="feather-clock"></i></span>
                                    <div>
                                        <h6>Office Hours</h6>
                                        <p>{{ $generalSettings->office_time }}</p>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <!-- /Footer Widget -->
                    </div>
                    <!-- /Footer Widget -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Support</h2>
                        <ul>
                            <!-- <li><a href="{{url('about-us')}}">About Us</a></li> -->
                            <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                            <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                            <li><a href="{{url('terms-condition')}}">Terms Condition</a></li>
                            <li><a href="{{url('shipping-returns')}}">Shipping & Returns</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="footer-widget">
                        <h2 class="footer-title">About Us</h2>
                        <ul class="row insta-row">
                            @if(isset($generalSettings) && $generalSettings->footer_about_us_1)
                                <p class="p-0">{!! $generalSettings->footer_about_us_1 !!}</p>
                            @endif
                            @if(isset($generalSettings) && $generalSettings->footer_about_us_2)
                                <p class="p-0">{!! $generalSettings->footer_about_us_2 !!}</p>
                            @endif
                            @if(!isset($generalSettings) || (!$generalSettings->footer_about_us_1 && !$generalSettings->footer_about_us_2))
                                <p class="p-0"><strong style="color:#203066;">Kingster</strong> is one of <strong style="color:#203066;">India's fastest-growing tech brands</strong>, known for top-selling external hard drives and computer accessories on Amazon. After winning the trust of thousands of online customers, we're now expanding offline to bring our best-in-class products even closer to you.</p>
                                <p class="p-0">Backed by a <strong style="color:#203066;">24x7 dedicated support team</strong> and loved by users nationwide, Kingster stands for quality, innovation, and unbeatable value.</p>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



	<!-- Bottom AREA -->
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="social-icon mb-0">
                            <ul>
                                <li>
                                    <a href="{{ isset($generalSettings) && $generalSettings->ig_link ? $generalSettings->ig_link : 'https://www.instagram.com/kingster.india?igsh=MTAycGdyd3Njd2ljcQ%3D%3D&utm_source=qr' }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="copyright-text mb-0">
                            <p class="mb-0">{{ isset($generalSettings) && $generalSettings->footer_copyright ? $generalSettings->footer_copyright : 'Copyright &copy; ' . date('Y') . ' Kingster. All Rights Reserved.' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>