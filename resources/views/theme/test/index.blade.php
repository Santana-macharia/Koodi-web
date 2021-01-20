@extends('theme.boomcoin.layout.main')

@section('main')

    <!-- //////////////////////////////////// CONTAINER ////////////////////////////////////-->
    <div class="content-wrapper">
      <div class="content-body">
        <main><!-- Header: 3D Animation -->
<section class="head-area" id="head-area">
    <div id="particles-js"></div>
    <div class="head-content d-flex align-items-center">
        <div class="container">
            <div class="banner-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="banner-content pt-5">
                            <h1 class="best-template animated" data-animation="fadeInUpShorter" data-animation-delay="1.5s">BOOMCOIN IS A PLATFORM FOR THE NEXT GENERATION OF INVESTORS <br class="d-none d-xl-block"><br class="d-none d-xl-block"></h1>
                            <h3 class="d-block white animated" data-animation="fadeInUpShorter" data-animation-delay="1.6s"> <br class="d-none d-xl-block"></h3>
                            <div class="mt-5">
                                <a href="{{ route('buy') }}" class="btn btn-lg btn-gradient-purple btn-glow mr-4 mb-2 animated" data-animation="fadeInUpShorter" data-animation-delay="1.7s">Get Started</a>
                                <!-- <a href="#whitepaper" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" data-animation="fadeInUpShorter" data-animation-delay="1.8s">Whitepaper</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 move-first">
                        <div id="svg-animation">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 857 807" width="857" height="807" preserveAspectRatio="xMidYMid meet" style="width: 100%;height: 100%;">
                                <g clip-path="url(#svg_animation_mask)">
                                    <!-- Step 1 -->
                                    

                                    <!-- base -->
                                    <g transform="matrix(1,0,0,1,-1.93,468.7)" opacity="1">
                                        <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="1s" width="558px" height="339px" preserveAspectRatio="xMidYMid slice" xlink:href="{{ asset('assets/boomcoin/theme-assets/images/svg/svg-animation/base.svg') }}"></image>
                                    </g>                                    
                                    
                                    <!-- btc-base-shadow -->
                                    <g transform="matrix(1,0,0,1,60,580)" opacity="0.8">
                                        <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="2s" width="130px" height="130px" preserveAspectRatio="xMidYMid slice" xlink:href="{{ asset('assets/boomcoin
                                        /theme-assets/images/svg/svg-animation/icon-base-shadow.svg') }}"></image>
                                    </g>

                                    <!-- btc-base -->
                                    <g transform="matrix(1,0,0,1,60.8,560.9)" opacity="1">
                                        <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="1.9s" width="130px" height="130px" preserveAspectRatio="xMidYMid slice" xlink:href="{{ asset('assets/boomcoin/theme-assets/images/svg/svg-animation/icon-base-btc.svg') }}"></image>
                                    </g>

                                    <!-- eth-base-shadow -->
                                    <g transform="matrix(1,0,0,1,215,580)" opacity="0.8">
                                        <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="2s" width="90px" height="90px" preserveAspectRatio="xMidYMid slice" xlink:href="{{ asset('assets/boomcoin/theme-assets/images/svg/svg-animation/icon-base-shadow.svg') }}"></image>
                                    </g>

                                    <!-- eth-base -->
                                    <g transform="matrix(1,0,0,1,215,545)" opacity="1">
                                        <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="1.5s" width="90px" height="130px" preserveAspectRatio="xMidYMid slice" xlink:href="{{ asset('assets/boomcoin/theme-assets/images/svg/svg-animation/icon-base-eth.svg') }}"></image>
                                    </g>

                                    <!-- neo-base-shadow -->
                                    <g transform="matrix(1,0,0,1,238,670)" opacity="0.8">
                                        <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="2s" width="120px" height="120px" preserveAspectRatio="xMidYMid slice" xlink:href="{{ asset('assets/boomcoin/theme-assets/images/svg/svg-animation/icon-base-shadow.svg') }}"></image>
                                    </g>
                                    
                                    <!-- neo-base -->
                                    <g transform="matrix(1,0,0,1,240.8,660.9)" opacity="1">
                                        <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="1.7s" width="120px" height="120px" preserveAspectRatio="xMidYMid slice" xlink:href="{{ asset('assets/boomcoin/theme-assets/images/svg/svg-animation/icon-base-neo.svg') }}"></image>
                                    </g>
                                    
                                    <!-- btc -->
                                    <g transform="matrix(1,0,0,1,97,560)" opacity="1">
                                        <image class="animated svg-elements-2" data-animation="fadeInUpShorter" data-animation-delay="2s" width="60px" height="60px" preserveAspectRatio="xMidYMid slice" xlink:href="{{ asset('assets/boomcoin/theme-assets/images/svg/svg-animation/btc.svg') }}"></image>
                                    </g>
                                    
                                    <!-- eth -->
                                    <g transform="matrix(1,0,0,1,230,550)" opacity="1">
                                        <image class="animated svg-elements-1" data-animation="fadeInUpShorter" data-animation-delay="1.6s" width="60px" height="60px" preserveAspectRatio="xMidYMid slice" xlink:href="{{ asset('assets/boomcoin/theme-assets/images/svg/svg-animation/eth.svg') }}"></image>
                                    </g>
                                    
                                    <!-- neo -->
                                    <g transform="matrix(1,0,0,1,270 ,645)" opacity="1">
                                        <image class="animated svg-elements-1" data-animation="fadeInUpShorter" data-animation-delay="1.8s" width="70px" height="70px" preserveAspectRatio="xMidYMid slice" xlink:href="{{ asset('assets/boomcoin/theme-assets/images/svg/svg-animation/neo.svg') }}"></image>
                                    </g>

                                    <!-- Step-2 -->

                                    <!-- base-shaodw -->
                                    <g transform="matrix(1,0,0,1,152.1,445.61)" opacity="0.8">
                                        <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="1.4s" width="406px" height="274px" preserveAspectRatio="xMidYMid slice" xlink:href="{{ asset('assets/boomcoin/theme-assets/images/svg/svg-animation/base-shadow.svg') }}"></image>
                                    </g>
                                    <!-- base -->
                                    <g transform="matrix(1,0,0,1,151.07,301.7)" opacity="0.95">
                                        <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="1.4s" width="558px" height="339px" preserveAspectRatio="xMidYMid slice" xlink:href="{{ asset('assets/boomcoin/theme-assets/images/svg/svg-animation/base.svg') }}"></image>
                                    </g>                                   

                                    <!-- logo-circle-path -->
                                    <g transform="matrix(1,0,0,1,428.5,403.5)" opacity="1">
                                        <g opacity="1" transform="matrix(1.0196,0,0,0.9676,-49.875,71.125)">
                                            <path class="animated" data-animation="path" data-animation-delay="1.4s" stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(99,125,221)" stroke-opacity="1" stroke-width="4" d=" M57.584999084472656,53.77799987792969 C41.18600082397461,60.93600082397461 21.354000091552734,65.125 0,65.125 C-56.362789154052734,65.125 -102.125,35.94248580932617 -102.125,0 C-102.125,-35.94248580932617 -56.362789154052734,-65.125 0,-65.125 C0,-65.125 0,-65.125 0,-65.125 C56.362789154052734,-65.125 102.125,-35.94248580932617 102.125,0 C102.125,22.325000762939453 84.47000122070312,42.04199981689453 57.584999084472656,53.77799987792969"></path>
                                        </g>
                                    </g>

                                    <!-- neo-path -->
                                    <g transform="matrix(1,0,0,1,345,595)" opacity="1">
                                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                            <path class="animated" data-animation="path-reverse" data-animation-delay="1.4s" stroke-linecap="butt" stroke-linejoin="miter" stroke-dashoffset="20" fill="none" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(99,125,221)" stroke-opacity="1" stroke-width="3" d="M0.26,101.431l65-45  c0,0,5.4-1.4,5-25l1-10c0,0-1.2-5.6,6-8l50-30c0,0,7.4-3.6,1-7l-65-38"></path>
                                        </g>
                                    </g>
                                    
                                    <!-- eth-path -->
                                    <g transform="matrix(1,0,0,1,290,545)" opacity="1">
                                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                            <path class="animated" data-animation="path-reverse" data-animation-delay="1.4s" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(99,125,221)" stroke-opacity="1" stroke-width="3" d="M0.239,42.447l11-6  c0,0,5-1.2,4-25v-9c0,0-2-5.8,6-9l16-8"></path>
                                        </g>
                                    </g>

                                    <!-- btc-path -->
                                    <g transform="matrix(1,0,0,1,175,430)" opacity="1">
                                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                            <path class="animated" data-animation="path" data-animation-delay="2.4s" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(99,125,221)" stroke-opacity="1" stroke-width="3" d="M101.68,24.545l-25-15  c0,0-6.14-6-14-1l-28,17c0,0-6.4,5.16-5-30v-20c0,0,0.8-5.6-4-5l-35,25c0,0-5.2,1.6-4,18v90c0,0-1.6,9.8,6,11l40,25c0,0,7,2.6,2,7  l-35,20"></path>
                                        </g>
                                    </g>    
                                    <!-- logo-base -->
                                    <g transform="matrix(1,0,0,1,255,345)" opacity="0.5">
                                        <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="1.4s" width="250px" height="260px" preserveAspectRatio="xMidYMid slice" xlink:href="assets/boomcoin/theme-assets/images/svg/svg-animation/logo-base.svg"></image>
                                    </g>
                                    
                                    <!-- logo-shaodw -->
                                    <g transform="matrix(0.1385,0,0,0.1175,275,385)" opacity="0.65">
                                        <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="2.2s" width="1500px" height="1500px" preserveAspectRatio="xMidYMid slice" xlink:href="assets/boomcoin/theme-assets/images/svg/svg-animation/logo-shadow.svg"></image>
                                    </g>
                                    <!-- logo -->
                                    <g transform="matrix(1,0,0,1,310,410)" opacity="1">
                                        <image class="animated cic-logo" data-animation="fadeInUpShortest" data-animation-delay="2.4s"  width="130px" height="89px" preserveAspectRatio="xMidYMid slice" xlink:href="assets/boomcoin/theme-assets/images/svg/svg-animation/logo.svg"></image>
                                    </g>

                                    <!-- Step 3 -->                                    
                                    <!-- base-shaodw -->
                                    <g transform="matrix(1,0,0,1,305.1,277.61)" opacity="0.8">
                                        <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="1.8s" width="406px" height="274px" preserveAspectRatio="xMidYMid slice" xlink:href="assets/boomcoin/theme-assets/images/svg/svg-animation/base-shadow.svg"></image>
                                    </g>

                                    <!-- base- -->
                                    <g transform="matrix(1,0,0,1,301.07,133.7)" opacity="0.95">
                                        <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="1.8s" width="558px" height="339px" preserveAspectRatio="xMidYMid slice" xlink:href="assets/boomcoin/theme-assets/images/svg/svg-animation/base.svg"></image>
                                    </g>
                                    
                                    <!-- car-path -->
                                    <g transform="matrix(1,0,0,1,320.5,330.5)" opacity="1">
                                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                            <path class="animated" data-animation="path" data-animation-delay="2.4s" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(99,125,221)" stroke-opacity="1" stroke-width="3" d="M32.208,82.43l-35-20  c0,0-6.714-2.571,1-7l26-15c0,0,4.857-1.143,8-8v-35c0,0,0.857-5.81,3-6l70-45"></path>
                                        </g>
                                    </g>
                                    
                                    <!-- car-base-shadow -->
                                    <g transform="matrix(1,0,0,1,415,235)" opacity="0.8">
                                        <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="3s" width="100px" height="100px" preserveAspectRatio="xMidYMid slice" xlink:href="assets/boomcoin/theme-assets/images/svg/svg-animation/icon-base-shadow.svg"></image>
                                    </g>
                                    <!-- car-base -->
                                    <g transform="matrix(1,0,0,1,408.62,240.74)" opacity="1">
                                        <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="2.1s" width="109px" height="68px" preserveAspectRatio="xMidYMid slice" xlink:href="assets/boomcoin/theme-assets/images/svg/svg-animation/icon-base-car.svg"></image>
                                    </g>
                                    
                                    <!-- car -->
                                    <g transform="matrix(1,0,0,1,420.8799,200.27)" opacity="1">
                                        <image class="animated svg-elements-1" data-animation="fadeInUpShorter" data-animation-delay="2.2s" width="80px" height="80px" preserveAspectRatio="xMidYMid slice" xlink:href="assets/boomcoin/theme-assets/images/svg/svg-animation/car.svg"></image>
                                    </g>
                                    
                                    <!-- mobile-path -->
                                    <g transform="matrix(1,0,0,1,475,410)" opacity="1">
                                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                            <path class="animated" data-animation="path" data-animation-delay="2.4s" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(99,125,221)" stroke-opacity="1" stroke-width="3" d="M0.261,90.447l50,30  c0,0,4.15,5.17,14,0l12-6c0,0,6-2,5-8v-50c0,0-0.5-9,9-12l80-45c0,0,5.75-3.5,0-7l-32-16"></path>
                                        </g>
                                    </g>
                                    
                                    <!-- mobile-base-shadow -->
                                    <g transform="matrix(1,0,0,1,565,300)" opacity="0.8">
                                        <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="3s" width="120px" height="120px" preserveAspectRatio="xMidYMid slice" xlink:href="assets/boomcoin/theme-assets/images/svg/svg-animation/icon-base-shadow.svg"></image>
                                    </g>

                                    <!-- mobile-base -->
                                    <g transform="matrix(1,0,0,1,565,310)" opacity="1">
                                        <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="2.3s" width="122px" height="78px" preserveAspectRatio="xMidYMid slice" xlink:href="assets/boomcoin/theme-assets/images/svg/svg-animation/icon-base-mobile.svg"></image>
                                    </g>
                                    
                                    <!-- mobile -->
                                    <g transform="matrix(1,0,0,1,600,280)" opacity="1">
                                        <image class="animated svg-elements-1" data-animation="fadeInUpShorter" data-animation-delay="2.4s" width="51px" height="78px" preserveAspectRatio="xMidYMid slice" xlink:href="assets/boomcoin/theme-assets/images/svg/svg-animation/mobile.svg"></image>
                                    </g>

                                    <!-- home-path -->
                                    <g transform="matrix(1,0,0,1,495,260)" opacity="1">
                                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                            <path class="animated" data-animation="path-reverse" data-animation-delay="1.4s" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(99,125,221)" stroke-opacity="1" stroke-width="3" d="M102.684,0v20  c0.666,7.167-9,11-9,11l-130,75c-11.25,4.5-9,13-9,13v50"></path>
                                        </g>
                                    </g>                                    

                                    <!-- home-base-shadow -->
                                    <g transform="matrix(1,0,0,1,570,150)" opacity="0.8">
                                        <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="3s" width="200px" height="200px" preserveAspectRatio="xMidYMid slice" xlink:href="assets/boomcoin/theme-assets/images/svg/svg-animation/icon-base-shadow.svg"></image>
                                    </g>
                                    <!-- home-base -->
                                    <g transform="matrix(1,0,0,1,570.8,140.9)" opacity="1">
                                        <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="2.4s" width="200px" height="150px" preserveAspectRatio="xMidYMid slice" xlink:href="assets/boomcoin/theme-assets/images/svg/svg-animation/icon-base-home.svg"></image>
                                    </g>
                                    <!-- home -->
                                     <g transform="matrix(1,0,0,1,600,90)" opacity="1">
                                        <image class="animated svg-elements-2" data-animation="fadeInUpShorter" data-animation-delay="2.5s" class="svg-elements-2" width="140px" height="140px" preserveAspectRatio="xMidYMid slice" xlink:href="assets/boomcoin/theme-assets/images/svg/svg-animation/home.svg"></image>
                                    </g>

                                    <!-- step-1-text -->
                                    <g transform="matrix(1,0,0,1,734,400)" opacity="0.8">
                                        <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="2s" width="120px" height="26px" preserveAspectRatio="xMidYMid slice" xlink:href="assets/boomcoin/theme-assets/images/svg/svg-animation/physical.svg"></image>
                                    </g>
                                    <!-- step-2-text -->
                                    <g transform="matrix(1,0,0,1,602,569)" opacity="0.8">
                                        <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="1.6s" width="180px" height="24px" preserveAspectRatio="xMidYMid slice" xlink:href="assets/boomcoin/theme-assets/images/svg/svg-animation/cic-blockchain.svg"></image>
                                    </g>
                                    <!-- step-3-text -->
                                    <g transform="matrix(1,0,0,1,432,745)" opacity="0.8">
                                        <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="1.2s" width="80px" height="24px" preserveAspectRatio="xMidYMid slice" xlink:href="assets/boomcoin/theme-assets/images/svg/svg-animation/digital.svg"></image>
                                    </g>
                                </g>
                                <defs>
                                    <clipPath id="svg_animation_mask">
                                        <rect width="857" height="807" x="0" y="0"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Header: 3D Animation -->
<!-- About -->
<section class="about section-padding" id="about">
    <div class="container">
        <div class="heading text-center">
            <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                <h6 class="sub-title">About</h6>
                <h2 class="title">About Us</h2>
            </div>
            <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">51 Capital is a platform for the next generation of investors exploring how cryptocurrencies and digital assets are contributing to the evolution of the global financial system. 
                <br class="d-none d-xl-block">Its mandate is to inform, educate, and connect the global investment community through news, data, events and education.</p>
        </div>
        <div class="content-area">
            <div class="row">
               
                
            </div>
        </div>
    </div>
</section>
<!--/ About -->
<!-- Problems & Solutions -->
<section id="problem-solution" class="problem-solution section-pro section-padding ">
    <div class="container">
        <div class="heading text-center">
            <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                <h6 class="sub-title">Solutions</h6>
                <h2 class="title">Problems &amp; <strong>Solutions</strong></h2>
            </div>
            <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">
                <br class="d-none d-xl-block"></p>
        </div>
        <div class="problems">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="heading mb-4">
                        <h4 class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.2s">Problems</h4>
                    </div>
                    <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">The current Cryptocurrencies are usually exchanged through centralized or decentralized
cryptocurrency exchanges with no allocation to access of funds till the initial benchmark
allorted balance is achieved when the account holder enjoys the benefits accrued in terms of
earnings, which is contrary different from what consumers need.</p>
                    <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">In centralized
cryptocurrency exchanges the client will be able to access overdraft funds within seven
working days also, a third party assists the users of the exchanges with conducting their
transactions. In decentralized cryptocurrency exchanges (also known as P2P exchanges)
through Pessacoin.
Decentralized exchanges are usually more secure than centralized exchanges because trades
occur directly between users. Nevertheless, the existing decentralized cryptocurrency
exchanges have significant drawbacks, such as relatively high fees, support a limited number
cryptocurrencies, do not enable crypto-to-crypto trading, have basic UX design and UI design,
lack support for iPhone and Android apps, have weak information security, offer expensive or
non-existent dispute resolution support, are based on slow and rigid processes, cover limited
payment methods, and have limited availability. The slow and rigid processes are often a result of forcing users to undergo complex KYC
procedures. The weak information security is caused by various factors, including, but not limited to,
the lack of 3FA authentication and the use of outdated security procedures. The reason
for the relatively high fees is likely to be the oligopoly in the field of decentralized
cryptocurrency exchanges. The expensive and/or non-existent dispute resolution support
provided by many decentralized cryptocurrency exchanges can be explained with exchanges’
lack of sufficient knowledge and expertise in the field of online dispute resolution. The limited
availability is a logical outcome of the lack of mechanisms (such as the use of onion networks)
preventing third parties from blocking the access to decentralized cryptocurrency exchanges. The
lack of support of a large number of cryptocurrencies, iPhone and Android apps, and crypto-tocrypto trading can be explained with the complexity associated with the implementation of such
features, whereas the reason for the basic UX design and UI design is likely to be a result of the
underestimation of the importance of sophisticated UX/UI designs.</p>
                </div>
                <div class="col-md-12 col-lg-6 text-center">
                    <img src="assets/boomcoin/theme-assets/images/problems-graphic.png" class="problems-img animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s" alt="problems-graphic">
                </div>
            </div>
        </div>
        <div class="solutions mt-5">
            <div class="row">
                <div class="col-md-12 col-lg-6 text-center">
                    <img src="assets/boomcoin/theme-assets/images/solutions-graphic.png" class="solutions-img animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s" alt="problems-graphic">
                </div>
                <div class="col-md-12 col-lg-6 move-first">
                    <div class="heading mb-4">
                        <h4 class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.2s">Solutions</h4>
                    </div>
                    <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s">The Platform aims to utilize the benefits of decentralized exchanges, while, accessing funds in a
fast and convenient way at the same time, eliminate the drawbacks of the current decentralized
exchanges:</p>
<h6 class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.2s">Up to 40% Overdraft approvals
</h6>
                    <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">The platform offers a convenient mode of accessing overdraft funds depending on the available boom
Coin balance. Which is vast spread with no remittance limit. This depends on the once emergency
needs as from 10% up to 40% range depending on your initial deposit balance.</p>
<h6 class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.2s">Crypto to Crypto Trading</h6>
<p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">51 CAPITAL Boom Coin platform will also allow Crypto to Crypto trades. We will
provide our Coin Holders with the option to exchange their earned coins on the Pessacoin
Wallets into the Boom Coin Wallet.
</p>
<h6 class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.2s">Unique UX and UI designs</h6>
<p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">Our exclusive website design will offer a better user experience for 51 CAPITAL
traders. Our goal is to design and develop a platform that will be easy to use,
trouble free, straightforward, and novice friendly.
</p>
<h6 class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.2s">Enhanced Security and Availability</h6>
<p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">51 CAPITAL will implement latest security measures and techniques, thus ensuring security
of the trade transactions. The Platform will also become available in the Onion network
in order to ensure anonymous and uninterrupted access.
</p>
<h6 class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.2s">24/7 Support and Dispute Resolution</h6>
<p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">51 CAPITAL’s support team will be available 24/7 on live chat, email, telegram and
BitcoinTalk to ensure the best trouble free experience for its traders. Dispute resolution
will be handled by law professionals at no or affordable cost.
</p>

</h6>

                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Problems & Solutions -->


                           
    
               
    <!--/ Crypto ico App -->
</section>
<!--/ Pre-Sale & Mobile Apps -->

@endsection

@section('page-js')
 
@endsection