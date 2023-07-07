@include('header')
<style>
    @media screen and (max-width: 768px) {

        .cap {
            margin-top: 300px !important;
            /*color: red;*/
        }

        .cap1 {
            margin-top: 80px !important;
        }

        .cap2 {
            margin-top: 70px !important;
        }

        .cap4 {
            margin-bottom: 90px !important;
        }

        .img-h {
            margin-bottom: 90px !important;
        }
    }
</style>
<div id="wrapper" class="animsition">
    <div id="page" class="">
        <!-- Header Wrap -->
        @include('navbar')
        <!-- #site-header-wrap -->
        <!-- Main Content -->
        <div id="main-content-home" class="site-main clearfix">
            <!-- SLIDER -->
            <div class="rev_slider_wrapper fullwidthbanner-container">
                <div id="rev-slider1" class="rev_slider fullwidthabanner ">
                    <ul>
                        <!-- Slide 1 -->
                        <li data-transition="random">
                            <!-- Main Image -->
                            <!-- <div class="tp-img-1"
                        data-x="['left','left','left','center']" data-hoffset="['-420','0','-20','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','-100','-100','0']"
                        data-whitespace="normal"

                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        <img src="assets/img/slider/slider-1_.png"  alt="Image" data-bgposition="center center" data-no-retina>
                    </div> -->
                            <div
                                class="tp-caption tp-resizeme tp-img img-h "
                                data-x="['left','left','left','center']"
                                data-hoffset="['615','400','400','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-25','0','0','-200']"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];"
                                data-mask_out="x:inherit;y:inherit;"
                                data-start="300"
                                data-splitin="none"
                                data-splitout="none"
                                data-responsive_offset="on"
                            >
                                <img
                                    src="assets/img/slider/slider-1.png"
                                    alt="Image"
                                    data-bgposition="center center"
                                    data-no-retina
                                >
                            </div>
                            <!-- Layers -->
                            <div
                                class="tp-caption tp-resizeme cap4 text-green font-heading font-weight-500"
                                data-x="['left','left','left','center']"
                                data-hoffset="['0','34','34','15']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-300','-10','-10','20']"
                                data-fontsize="['16','16','16','14']"
                                data-lineheight="['20','18','18','16']"
                                data-width="full"
                                data-height="none"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];"
                                data-mask_out="x:inherit;y:inherit;"
                                data-start="300"
                                data-splitin="none"
                                data-splitout="none"
                                data-responsive_offset="on"
                            >
                                <span class="heading-tittle">Solar Energy</span>
                            </div>
                            <div
                                class="tp-caption tp-resizeme text-black font-heading font-weight-400"
                                data-x="['left','left','left','center']"
                                data-hoffset="['0','34','34','15']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-200','-10','-10','30']"
                                data-fontsize="['72','62','62','42']"
                                data-lineheight="['60','50','50','40']"
                                data-width="full"
                                data-height="none"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];"
                                data-mask_out="x:inherit;y:inherit;"
                                data-start="400"
                                data-splitin="none"
                                data-splitout="none"
                                data-responsive_offset="on"
                            >
                                        <span class="tittle1"> Best Solar Energy
                                            <br> Companies of 2023.
                                        </span>
                            </div>
{{--                            <div--}}
{{--                                class="tp-caption cap2 tp-resizeme line"--}}
{{--                                data-x="['left','left','left','center']"--}}
{{--                                data-hoffset="['0','34','34','0']"--}}
{{--                                data-y="['middle','middle','middle','middle']"--}}
{{--                                data-voffset="['-100','-10','-10','40']"--}}
{{--                                data-whitespace="normal"--}}
{{--                                data-transform_idle="o:1;"--}}
{{--                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"--}}
{{--                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"--}}
{{--                                data-mask_in="x:0px;y:[100%];"--}}
{{--                                data-mask_out="x:inherit;y:inherit;"--}}
{{--                                data-start="500"--}}
{{--                                data-splitin="none"--}}
{{--                                data-splitout="none"--}}
{{--                                data-responsive_offset="on"--}}
{{--                            ></div>--}}
                            <div
                                class="tp-caption tp-resizeme cap1 text-black font-heading font-weight-400"
                                data-x="['left','left','left','center']"
                                data-hoffset="['0','34','34','15']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-40','10','10','40']"
                                data-fontsize="['16','16','16','14']"
                                data-lineheight="['30','20','20','16']"
                                data-width="full"
                                data-height="none"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];"
                                data-mask_out="x:inherit;y:inherit;"
                                data-start="600"
                                data-splitin="none"
                                data-splitout="none"
                                data-responsive_offset="on"
                            >
                                Find a Solar Energy partner near you.
                            </div>
                            <div
                                class="tp-caption cap"
                                data-x="['left','left','left','center']"
                                data-hoffset="['2','34','34','15']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-70','20','20','75']"
                                data-width="full"
                                data-height="none"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];"
                                data-mask_out="x:inherit;y:inherit;"
                                data-start="700"
                                data-splitin="none"
                                data-splitout="none"
                                data-responsive_offset="on"
                            >
                                <form class="form-inline">
                                    <div class="form-group">
                                        <label for="zipcode" class="sr-only">Zip Code</label>
                                        <input
                                            type="text"
                                            class="form-control ars-style-input"
                                            id="zipcode"
                                            placeholder="Enter Zip Code"
                                        >
                                    </div>
                                    <button class="btn get-a-quote ars-style-btn" id="sub">Get Started</button>

                                </form>
                                <p id="error" style="display: none;" class="text-danger">Please enter a valid U.S. zip
                                    code </p><br>
                                <p id="error" style="display: inline;" class="text-black"> By clicking “Get Started”,
                                    you <a href=""class="btn-link">agree</a> to our
                                    <a href="" class="btn-link">Privacy Policy</a> ,<br>
                                    Terms of Use
                                    , and the use of your email address for our services.  </p>
                            </div>
                        </li>
                        <!-- /End Slide 1 -->
                    </ul>
                </div>
            </div>
            <!-- END SLIDER -->
            <!-- SERVICES -->

            <!-- END SERVICES -->
            <!-- COUNTER -->
            {{--            <div class="row-counter ">--}}
            {{--                <img src="assets/img/shortcode/counter/bg-counter.png" alt="Image">--}}
            {{--                <div class="container">--}}
            {{--                    <div class="row clearfix">--}}
            {{--                        <div class="col-md-12">--}}
            {{--                            <div--}}
            {{--                                class="themesflat-spacer clearfix"--}}
            {{--                                data-desktop="120"--}}
            {{--                                data-mobile="60"--}}
            {{--                                data-smobile="60"--}}
            {{--                            ></div>--}}
            {{--                        </div>--}}
            {{--                        <!-- /.col-md-12 -->--}}
            {{--                    </div>--}}
            {{--                    <!-- /.row -->--}}
            {{--                    <div class="row ">--}}
            {{--                        <div class="col-md-3">--}}
            {{--                            <div class=" box-counter  wow fadeInUp">--}}
            {{--                                <!-- <div class="themesflat-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0"> -->--}}
            {{--                                <div class="themesflat-counter style-1 align-center clearfix">--}}
            {{--                                    <div class="counter-item">--}}
            {{--                                        <div class="inner">--}}
            {{--                                            <div class="text-wrap box1">--}}
            {{--                                                <span class="icon zingbox-icon-author"></span>--}}
            {{--                                                <div class="number-wrap">--}}
            {{--                                                            <span--}}
            {{--                                                                class="number"--}}
            {{--                                                                data-speed="3000"--}}
            {{--                                                                data-to="35"--}}
            {{--                                                                data-inviewport="yes"--}}
            {{--                                                                data-delimitor="1"--}}
            {{--                                                            >35</span>--}}
            {{--                                                    <span class="suffix">,000</span>--}}
            {{--                                                </div>--}}
            {{--                                                <h3 class="heading margin-right-6">Happy Customers</h3>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <!-- /.themesflat-counter -->--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <!-- /.col-md-3 -->--}}
            {{--                        <div class="col-md-3 ">--}}
            {{--                            <div class="box-counter  wow fadeInDown">--}}
            {{--                                <!-- <div class="themesflat-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0"> -->--}}
            {{--                                <div class="themesflat-counter style-1 align-center clearfix">--}}
            {{--                                    <div class="counter-item">--}}
            {{--                                        <div class="inner">--}}
            {{--                                            <div class="text-wrap">--}}
            {{--                                                <span class="icon zingbox-icon-book"></span>--}}
            {{--                                                <div class="number-wrap">--}}
            {{--                                                            <span--}}
            {{--                                                                class="number"--}}
            {{--                                                                data-speed="3000"--}}
            {{--                                                                data-to="541"--}}
            {{--                                                                data-inviewport="yes"--}}
            {{--                                                            >541</span>--}}
            {{--                                                    <span class="suffix">+</span>--}}
            {{--                                                </div>--}}
            {{--                                                <h3 class="heading margin-right-6">Project Done</h3>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <!-- /.themesflat-counter -->--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <!-- /.col-md-3 -->--}}
            {{--                        <div class="col-md-3">--}}
            {{--                            <div class="box-counter wow fadeInUp">--}}
            {{--                                <!-- <div class="themesflat-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0"> -->--}}
            {{--                                <div class="themesflat-counter style-1 align-center clearfix">--}}
            {{--                                    <div class="counter-item">--}}
            {{--                                        <div class="inner">--}}
            {{--                                            <div class="text-wrap">--}}
            {{--                                                <span class="icon zingbox-icon-diamond"></span>--}}
            {{--                                                <div class="number-wrap">--}}
            {{--                                                            <span--}}
            {{--                                                                class="number"--}}
            {{--                                                                data-speed="3000"--}}
            {{--                                                                data-to="40"--}}
            {{--                                                                data-inviewport="yes"--}}
            {{--                                                            >40</span>--}}
            {{--                                                    <span class="suffix">+</span>--}}
            {{--                                                </div>--}}
            {{--                                                <h3 class="heading margin-right-8">Awards Win</h3>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <!-- /.themesflat-counter -->--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <!-- /.col-md-3 -->--}}
            {{--                        <div class="col-md-3">--}}
            {{--                            <div class="box-counter  wow fadeInDown">--}}
            {{--                                <!-- <div class="themesflat-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0"> -->--}}
            {{--                                <div class="themesflat-counter style-1 align-center clearfix">--}}
            {{--                                    <div class="counter-item">--}}
            {{--                                        <div class="inner">--}}
            {{--                                            <div class="text-wrap">--}}
            {{--                                                <span class="icon zingbox-icon-clock"></span>--}}
            {{--                                                <div class="number-wrap">--}}
            {{--                                                            <span--}}
            {{--                                                                class="number"--}}
            {{--                                                                data-speed="3000"--}}
            {{--                                                                data-to="678"--}}
            {{--                                                                data-inviewport="yes"--}}
            {{--                                                            >678</span>--}}
            {{--                                                    <span class="suffix"></span>--}}
            {{--                                                </div>--}}
            {{--                                                <h3 class="heading margin-right-10">Client Works</h3>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <!-- /.themesflat-counter -->--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <!-- /.col-md-3 -->--}}
            {{--                    </div>--}}
            {{--                    <!-- /.row -->--}}
            {{--                    <div class="row clearfix">--}}
            {{--                        <div class="col-md-12">--}}
            {{--                            <div--}}
            {{--                                class="themesflat-spacer clearfix"--}}
            {{--                                data-desktop="115"--}}
            {{--                                data-mobile="60"--}}
            {{--                                data-smobile="60"--}}
            {{--                            ></div>--}}
            {{--                        </div>--}}
            {{--                        <!-- /.col-md-12 -->--}}
            {{--                    </div>--}}
            {{--                    <!-- /.row -->--}}
            {{--                </div>--}}
            {{--                <!-- /.container -->--}}
            {{--            </div>--}}
            <!-- END COUNTER -->
            <!-- EXPERIENCES-->
            <div class="row-experiences" id="ars-experience">
                <div class="container">
                    <div class=" row-experiences-content wow zoomInDown">
                        <div class="row">
                            <h1 class=" text-gray-dark">How to choose a solar company</h1>
                        </div>
                        <div class="row">
                            <p class="content">Solar energy systems are designed to last for up to 25 years or more, so
                                you want to find an installer you’re
                                <br> comfortable working with in the future. Here are some tips to narrow down your
                                options and choose a solar energy
                                <br> company that is reputable and experienced and provides quality service at a
                                competitive price.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 p-0">
                                <div class="question-faq">
                                    <div class="accordion-item">
                                        <div class="question"> Installation experience and reputation</div>
                                        <div class="infor-question">
                                            <span>In general, a company that has been in business for several years is more likely to have a track record that reflects they have the necessary skills and knowledge to install your system correctly.
                                                The reality is that solar installation is a service, not a product,” said Luke Cove, managing director of Lightning Energy, an Australian solar energy company. “It really does matter who you get it from. The company you buy solar from is everything, not the products.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="question"> Quality of solar equipment</div>
                                        <div class="infor-question">
                                            <span>
                                                When comparing solar panels, look for reliability, efficiency and durability. Higher-efficiency solar panels are more expensive but generate more electricity and require less space. Depending on where you live, the panels might need to be tough enough to withstand harsh weather conditions like hail, wind and snow.
                                                <li><b>Monocrystalline panels:</b> Use cells made from a single silicon crystal. They are highly effective and the most expensive.</li>
                                                <li><b>Polycrystalline panels: </b>Use cells made from multiple silicon crystals. They are slightly less efficient but can still produce a significant amount of electricity.</li>
                                                <li> <b>Thin-film panels:</b>Made by depositing layers of photovoltaic (PV) material onto a substrate, such as glass or metal. They are the least expensive and also the least efficient.</li>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 ">
                                <div class="question-faq">
                                    <div class="accordion-item">
                                        <div class="question"> Pricing and payment <br> options</div>
                                        <div class="infor-question">
                                            <span>
                                                Compare a few quotes, but remember the rule that “good quality doesn’t come cheap and cheap isn’t usually good quality,” Cove said.
According to Cove it’s often worth it to pay a little more in exchange for skilled labor, installation quality and customer service. Otherwise, you risk ending up with an underperforming system, leaky roof or equipment, with the company not willing to help — “or worse, gone bankrupt from selling too cheap; that happens all the time in the solar industry.”

It’s a significant investment, but you don’t have to pay everything upfront and out of pocket. People often finance or lease solar panels, and many companies offer power purchase agreements (PPAs).

<li> <b>Loan:</b> Solar loans work a lot like other types of loans, so pay attention to the interest rate — a bad financing deal will really throw a kink into your overall cost-benefit.</li>
<li><b>Lease or PPA:</b> Both are ways to trade ownership of the system for upfront savings, but there are several differences.</li>

                                            </span>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="question">  Customer service and ongoing support</div>
                                        <div class="infor-question">
                                            <span>
                                                up and be there if you need assistance with maintenance and repairs in the future.
 <li><b>Monitoring service:</b>   This lets you track the performance of your solar energy system and monitor the amount of energy it's producing.</li>

   A good monitoring service will make everyday life more convenient. For example, a solar customer in California without reliable monitoring has to “go outside every single day right before sunset and write down all the numbers off of both of the inverters and the hardware that sends it off to the city.”

  <li><b>Warranty or guarantee:</b> Look for solar panel manufacturers with a good reputation and a history of standing by their products. Panels typically come with a warranty covering the panel's performance and materials. A good warranty should cover at least 25 years.</li>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="container" style="margin-top: -90px;margin-bottom: 100px; ">--}}
{{--                <div class="row row-experiences-bottom wow fadeInUp">--}}
{{--                    <div class="col-md-6 ">--}}
{{--                        <h1 class="heading-experiences">Best Solar Energy--}}
{{--                            <br> Companies of 2023.</h1>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 ">--}}
{{--                        <div class="form">--}}
{{--                            <input--}}
{{--                                type="text"--}}
{{--                                class="text"--}}
{{--                                id="zipcode"--}}
{{--                                placeholder="Enter Zip Code"--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                        <button class="submit" id="sub">Get Started</button>--}}

{{--                        <p id="error" style="display: none;" class="text-danger">Please enter a valid U.S. zip--}}
{{--                            code </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <!-- END EXPERIENCES -->
        <!-- our creative team -->
        {{--            <div class="row-our-team">--}}
        {{--                <div class="container">--}}
        {{--                    <div class="row row-our-team-inner">--}}
        {{--                        <div class="col-md-12">--}}
        {{--                            <div--}}
        {{--                                class="themesflat-spacer clearfix"--}}
        {{--                                data-mobile="100"--}}
        {{--                                data-smobile="121"--}}
        {{--                            ></div>--}}
        {{--                            <div class="themesflat-headings text-center wow fadeInUp text-gray-dark">--}}
        {{--                                <h1 class="heading">OUR CREATIVE TEAM</h1>--}}
        {{--                                <p class="sub-heading">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam--}}
        {{--                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed</p>--}}
        {{--                            </div>--}}
        {{--                            <div--}}
        {{--                                class="themesflat-spacer clearfix"--}}
        {{--                                data-desktop="40"--}}
        {{--                                data-mobile="35"--}}
        {{--                                data-smobile="35"--}}
        {{--                            ></div>--}}
        {{--                        </div>--}}
        {{--                        <!-- /.col-md-12 -->--}}
        {{--                    </div>--}}
        {{--                    <!-- /.row -->--}}
        {{--                    <div class="row">--}}
        {{--                        <div class="col-lg-3 col-md-6 ">--}}
        {{--                            <div class="box-team active wow fadeInUp">--}}
        {{--                                <div class="img-overlay"></div>--}}
        {{--                                <img src="assets/img/shortcode/team/team-1.jpg" alt="Image">--}}
        {{--                                <div class="box box1">--}}
        {{--                                    <h3 class="team-tittle">--}}
        {{--                                        <a href="team.html">Doris Jordan</a>--}}
        {{--                                    </h3>--}}
        {{--                                    <span>Design Expert</span>--}}
        {{--                                    <div class="icon-social-team">--}}
        {{--                                        <a href="#">--}}
        {{--                                            <i class="fa fa-facebook"></i>--}}
        {{--                                        </a>--}}
        {{--                                        <a href="#">--}}
        {{--                                            <i class="fa fa-twitter"></i>--}}
        {{--                                        </a>--}}
        {{--                                        <a href="#">--}}
        {{--                                            <i class="fa fa-instagram"></i>--}}
        {{--                                        </a>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="col-lg-3 col-md-6 ">--}}
        {{--                            <div class="box-team wow fadeInDown">--}}
        {{--                                <div class="img-overlay"></div>--}}
        {{--                                <img src="assets/img/shortcode/team/team-2.jpg" alt="Image">--}}
        {{--                                <div class="box box2">--}}
        {{--                                    <h3 class="team-tittle">--}}
        {{--                                        <a href="team.html">Johnny Ramirez</a>--}}
        {{--                                    </h3>--}}
        {{--                                    <span>Design Expert</span>--}}
        {{--                                    <div class="icon-social-team">--}}
        {{--                                        <a href="#">--}}
        {{--                                            <i class="fa fa-facebook"></i>--}}
        {{--                                        </a>--}}
        {{--                                        <a href="#">--}}
        {{--                                            <i class="fa fa-twitter"></i>--}}
        {{--                                        </a>--}}
        {{--                                        <a href="#">--}}
        {{--                                            <i class="fa fa-instagram"></i>--}}
        {{--                                        </a>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="col-lg-3 col-md-6 ">--}}
        {{--                            <div class="box-team wow fadeInUp">--}}
        {{--                                <div class="img-overlay"></div>--}}
        {{--                                <img src="assets/img/shortcode/team/team-3.jpg" alt="Image">--}}
        {{--                                <div class="box">--}}
        {{--                                    <h3 class="team-tittle">--}}
        {{--                                        <a href="team.html">Diana Wagner</a>--}}
        {{--                                    </h3>--}}
        {{--                                    <span>Design Expert</span>--}}
        {{--                                    <div class="icon-social-team">--}}
        {{--                                        <a href="#">--}}
        {{--                                            <i class="fa fa-facebook"></i>--}}
        {{--                                        </a>--}}
        {{--                                        <a href="#">--}}
        {{--                                            <i class="fa fa-twitter"></i>--}}
        {{--                                        </a>--}}
        {{--                                        <a href="#">--}}
        {{--                                            <i class="fa fa-instagram"></i>--}}
        {{--                                        </a>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="col-lg-3 col-md-6 ">--}}
        {{--                            <div class="box-team wow fadeInDown">--}}
        {{--                                <div class="img-overlay"></div>--}}
        {{--                                <img src="assets/img/shortcode/team/team-4.jpg" alt="Image">--}}
        {{--                                <div class="box">--}}
        {{--                                    <h3 class="team-tittle">--}}
        {{--                                        <a href="team.html">Harry Garrett</a>--}}
        {{--                                    </h3>--}}
        {{--                                    <span>Design Expert</span>--}}
        {{--                                    <div class="icon-social-team">--}}
        {{--                                        <a href="#">--}}
        {{--                                            <i class="fa fa-facebook"></i>--}}
        {{--                                        </a>--}}
        {{--                                        <a href="#">--}}
        {{--                                            <i class="fa fa-twitter"></i>--}}
        {{--                                        </a>--}}
        {{--                                        <a href="#">--}}
        {{--                                            <i class="fa fa-instagram"></i>--}}
        {{--                                        </a>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <!-- /.container -->--}}
        {{--            </div>--}}
        <!-- END our creative team -->
        <!-- Should I go solar? -->
        <section id="ars-bg-solar" class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="themesflat-headings about-us style-1  clearfix">
                            {{-- <span class="heading-shadown-text text-uppercase">SUNLIGHT</span> --}}
                            <h1 class="heading text-uppercase text-gray-dark">Should I go & solar?</h1>
                            <p class="sub-heading text-gray-dark">Going solar is an awesome idea for many
                                homeowners. Despite the high upfront costs, “the energy savings can offset the
                                initial investment with a great ROI,” according to Warren Matthews, co-founder of
                                and head editor at Helius Hub. </p>
                            <p class="sub-heading text-gray-dark"> We invested in a solar energy system for our home
                                because of environmental and utility cost benefits, a resident of Friday Harbor,
                                Washington (the “greenest state”) told us. They said they took advantage of the 30%
                                federal solar tax credit and that “OPALCO (Orcas Power & Light Cooperative) supports
                                net metering, so we now offset 100% of our yearly electric-grid consumption.”</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="about-us">

                            <div class="about-us-content">
                                <div class="about-us-content-left">
                                    <h1 class="heading text-uppercase text-gray-dark">Pros</h1>
                                    <ul>
                                        <li><b><i class="fa fa-dollar" style="font-size: 30px"> </i> </b> Save Money On
                                            Your electric bill
                                        </li>
                                        <li><b><i class="fa fa-home" style="font-size: 30px"> </i></b> Increase Your
                                            Home value
                                        </li>
                                        <li><i class="fa fa-bars" style="font-size: 30px" aria-hidden="true"></i> Boost
                                            Clean Energy in the grid
                                        </li>
                                        <li><i class="fa fa-money" style="font-size: 30px" aria-hidden="true"></i> Earn
                                            credits Toward your electric bill
                                        </li>
                                    </ul>
                                </div>
                                <div class="about-us-content-right">
                                    <h1 class="heading text-uppercase text-gray-dark">Cons</h1>
                                    <ul>
                                        <li><b><i class="fa fa-credit-card-alt" style="font-size: 30px"
                                                  aria-hidden="true"></i></b> Inital Investment can be high
                                        </li>
                                        <li><b><i class="fa fa-home" style="font-size: 30px"> </i></b> May require a
                                            ample roof space
                                        </li>
                                        <li><b><i class="fa fa-home" style="font-size: 30px"> </i></b> Not Compatiable
                                            with all roof types
                                        </li>
                                        <li><b><i class="fa fa-clock-o" style="font-size: 30px"> </i></b> Installation
                                            isn't immediate
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        {{-- <div class="row-about-us style-2">
            <img class="bg-about-us" src="assets/img/shortcode/about-us/bg-about-us.jpg" alt="Image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="themesflat-headings about-us style-1  clearfix">
                            <span class="heading-shadown-text text-uppercase">SUNLIGHT</span>
                            <h1 class="heading text-uppercase">Should I go & solar?</h1>
                            <p class="sub-heading">Going solar is an awesome idea for many homeowners. Despite the high upfront costs, “the energy savings can offset the initial investment with a great ROI,” according to Warren Matthews, co-founder of and head editor at Helius Hub.</p>
                            <p class="sub-heading">Still, it isn’t for everyone. You might not want to make the switch if you:</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="about-us">

                        <div class="about-us-content">
                            <div class="about-us-content-left">
                                <ul>
                                    <li><a href="service-detail.html"> Malesuada dictum neque </a> </li>
                                    <li><a href="service-detail.html"> Malesuada dictum neque </a> </li>
                                    <li><a href="service-detail.html"> Malesuada dictum neque </a> </li>
                                </ul>
                            </div>
                            <div class="about-us-content-right">
                                <ul>
                                    <li><a href="service-detail.html"> Tempor commodo  </a> </li>
                                    <li> <a href="service-detail.html"> Tempor commodo  </a></li>
                                    <li><a href="service-detail.html"> Tempor commodo  </a> </li>
                                </ul>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> --}}
        <!--END Should I go solar? -->
        <!-- WORK -->
        <div class="row-work">
            {{-- <img class="bg-img" src="assets/img/shortcode/work/bg-work.png" alt="Image"> --}}
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-headings style-2 text-center wow fadeInUp clearfix">
                            <h1 class="heading">OUR WORK PROCESS</h1>
                            {{--                                <p class="sub-heading">What Happens Next?</p>--}}
                        </div>
                        <div
                            class="themesflat-spacer clearfix"
                            data-desktop="55"
                            data-mobile="35"
                            data-smobile="35"
                        ></div>
                        <div class="row">
                            <div class="col-md-3 ">
                                <div class="box-work wow fadeInUp">
                                    <img src="assets/img/shortcode/work/phone.png" alt="Image">
                                    <div class="text-wrap">
                                        <h6 class="heading">Quick Verification Call</h6>
                                        <p class="sub-heading">We may need some additional information about your
                                            home</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="box-work wow fadeInDown">
                                    <!-- <span class="icon zingbox-icon-solar-fan "></span> -->
                                    <img src="assets/img/shortcode/work/work-2.png" alt="Image">
                                    <div class="text-wrap">
                                        <h6 class="heading">At-Home Consultation</h6>
                                        <p class="sub-heading">We’ll sit down with you to discuss your savings potential
                                            and financing options</p>
                                        {{--                                            <a href="#" class="btn-read-more">Read More--}}
                                        {{--                                                <i class="fa fa-arrow-right"></i>--}}
                                        {{--                                            </a>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="box-work wow fadeInUp">
                                    <!-- <span class="icon zingbox-icon-powe-poles"></span> -->
                                    <img src="assets/img/shortcode/work/work-1.png" alt="Image">
                                    <div class="text-wrap">
                                        <h6 class="heading">System Design & Permitting</h6>
                                        <div class="sep clearfix"></div>
                                        <p class="sub-heading"> We’ll finalize your custom system design and take care
                                            of all the paperwork to get it approved</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="box-work wow fadeInUp">
                                    <!-- <span class="icon zingbox-icon-powe-poles"></span> -->
                                    <img src="assets/img/shortcode/work/work-3.png" alt="Image">
                                    <div class="text-wrap">
                                        <h6 class="heading">System
                                            Installation</h6>
                                        <div class="sep clearfix"></div>
                                        <p class="sub-heading"> We’ll work with your schedule to find the perfect time
                                            and take care of all the rest. All you have to do is start saving!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div
                                class="themesflat-spacer clearfix"
                                data-desktop="122"
                                data-mobile="60"
                                data-smobile="60"
                            ></div>
                        </div>
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
        </div>

        {{--            <div class="row-articles">--}}
        {{--                <div class="container">--}}
        {{--                    <div class="col-md-12">--}}
        {{--                        <div--}}
        {{--                            class="themesflat-spacer clearfix"--}}
        {{--                            data-desktop="175"--}}
        {{--                            data-mobile="120"--}}
        {{--                            data-smobile="120"--}}
        {{--                        ></div>--}}
        {{--                    </div>--}}
        {{--                    <div class="themesflat-headings style-2 wow fadeInUp article">--}}
        {{--                        <h1 class="heading ">OUR INSIGHTS & ARTICLES</h1>--}}
        {{--                    </div>--}}
        {{--                    <div class="owl-carousel owl-theme" data-item="3" data-item2="2">--}}
        {{--                        <div class="item acticle wow fadeInUp">--}}
        {{--                            <div class="img">--}}
        {{--                                <div class="img-overlay"></div>--}}
        {{--                                <img src="assets/img/shortcode/article/article-1.jpg" alt="Image">--}}
        {{--                            </div>--}}
        {{--                            <ul>--}}
        {{--                                <li>--}}
        {{--                                    <a class="date-articles" href="blog-detail.html">28 JANUARY, 2020</a>--}}
        {{--                                </li>--}}
        {{--                            </ul>--}}
        {{--                            <div class="box-acticle">--}}
        {{--                                <a href="blog-detail.html" class="link-articles">MAURIS NEQUE NISIIBUS NON--}}
        {{--                                    <br> ELEMENTUM--}}
        {{--                                </a>--}}
        {{--                                <p class="content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam--}}
        {{--                                    nonumy eirmod tempor invidunt</p>--}}
        {{--                                <i class="line"></i>--}}
        {{--                                <a href="blog-detail.html" class="btn-read-more">READ MORE</a>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="item acticle wow fadeInDown">--}}
        {{--                            <div class="img">--}}
        {{--                                <div class="img-overlay"></div>--}}
        {{--                                <img src="assets/img/shortcode/article/article-2.jpg" alt="Image">--}}
        {{--                            </div>--}}
        {{--                            <ul>--}}
        {{--                                <li>--}}
        {{--                                    <a class="date-articles" href="blog-detail.html">28 JANUARY, 2020</a>--}}
        {{--                                </li>--}}
        {{--                            </ul>--}}
        {{--                            <div class="box-acticle">--}}
        {{--                                <a href="blog-detail.html" class="link-articles">MAURIS NEQUE NISIIBUS NON--}}
        {{--                                    <br> ELEMENTUM--}}
        {{--                                </a>--}}
        {{--                                <p class="content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam--}}
        {{--                                    nonumy eirmod tempor invidunt</p>--}}
        {{--                                <i class="line"></i>--}}
        {{--                                <a href="blog-detail.html" class="btn-read-more">READ MORE</a>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="item acticle wow fadeInUp">--}}
        {{--                            <div class="img">--}}
        {{--                                <div class="img-overlay"></div>--}}
        {{--                                <img src="assets/img/shortcode/article/article-3.jpg" alt="Image">--}}
        {{--                            </div>--}}
        {{--                            <ul>--}}
        {{--                                <li>--}}
        {{--                                    <a class="date-articles" href="blog-detail.html">28 JANUARY, 2020</a>--}}
        {{--                                </li>--}}
        {{--                            </ul>--}}
        {{--                            <div class="box-acticle">--}}
        {{--                                <a href="blog-detail.html" class="link-articles">MAURIS NEQUE NISIIBUS NON--}}
        {{--                                    <br> ELEMENTUM--}}
        {{--                                </a>--}}
        {{--                                <p class="content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam--}}
        {{--                                    nonumy eirmod tempor invidunt</p>--}}
        {{--                                <i class="line"></i>--}}
        {{--                                <a href="blog-detail.html" class="btn-read-more">READ MORE</a>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="col-md-12">--}}
        {{--                        <div--}}
        {{--                            class="themesflat-spacer clearfix"--}}
        {{--                            data-desktop="120"--}}
        {{--                            data-mobile="60"--}}
        {{--                            data-smobile="60"--}}
        {{--                        ></div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        <!--END ARTICLE-->
    </div>
    <!-- /#main-content -->
    <!-- Footer -->
    @include('footer')

    {{--        <script src="https://code.jquery.com/jquery-3.7.0.min.js"--}}
    {{--                integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>--}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"
            integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.js"
            integrity="sha512-4WpSQe8XU6Djt8IPJMGD9Xx9KuYsVCEeitZfMhPi8xdYlVA5hzRitm0Nt1g2AZFS136s29Nq4E4NVvouVAVrBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        $("#sub").click(function (e) {
            e.preventDefault();
            let zip = document.getElementById('zipcode').value;
            console.log(zip)
            if (zip === "") {
                $("#error").css("display", "inline");
            }
            const api_url =
                'https://api.zippopotam.us/us/' + zip;

            // Defining async function
            async function getapi(url) {
                console.log(url)
                // Storing response
                const response = await fetch(url);
                // Storing data in form of JSON
                var data = await response.json();
                if (Object.keys(data).length > 1) {
                    window.location.href = '/multiform'
                } else {
                    $("#error").css("display", "inline");
                }
            }

            getapi(api_url);
        });

    </script>
