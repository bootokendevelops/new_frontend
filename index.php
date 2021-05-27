
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Favicons -->
    <link href="images/favicon.png" rel="icon" />
    <title>BooToken</title>
    <!--font-awesome icons link-->
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/slick.css" />
    <!--main style file-->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <script src="https://cdn.logwork.com/widget/countdown.js"></script>
    <script src="https://kit.fontawesome.com/4ca16cb460.js" crossorigin="anonymous"></script>

  </head>

  <body id="dark-mode">
    <svg id="ckLine" xmlns="http://www.w3.org/2000/svg"></svg>
    <!-- Preloader Part Start -->
    <div class="preloader">
      <div class="frame">
        <div class="center">
          <div class="dot-1"></div>
          <div class="dot-2"></div>
          <div class="dot-3"></div>
        </div>
      </div>
    </div>
    <!-- Preloader Part End -->
    <!-- HEADER AREA START -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <div class="container">
        <img src="images/bootoken.png" alt="banner-img" width="35px" /><a
          class="navbar-brand"
          href="index.html"
        >
          BooToken<b> .</b></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div
          class="collapse navbar-collapse menu-main"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav ml-auto menu-item">
            <li class="nav-item">
              <a class="nav-link" href="#banner">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#overview">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#roadmap">RoadMap</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="files/whitepaper.pdf">WhitePaper</a>
          
            <li class="nav-item">
              <button class='btn fourth' onclick='location.href="#";'>         
                    Donate
              </button>
            </li>
          </ul>
        </div>
        <div
          class="modal fade"
          id="exampleModal"
          tabindex="-1"
          role="dialog"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Contact Us</h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="input-group contact-input mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text faq-icon"
                        ><i class="fa fa-user-o" aria-hidden="true"></i>
                      </span>
                    </div>
                    <input
                      type="text"
                      class="form-control box-bg"
                      placeholder="Username"
                      aria-label="Username"
                    />
                  </div>
                  <div class="input-group contact-input mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text faq-icon"
                        ><i class="fa fa-envelope-o" aria-hidden="true"></i>
                      </span>
                    </div>
                    <input
                      type="email"
                      class="form-control box-bg"
                      placeholder="Email Address"
                      aria-label="Username"
                    />
                  </div>
                  <div class="form-group">
                    <textarea
                      class="form-control box-bg"
                      placeholder="Ask a Question..."
                      rows="3"
                    ></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="dropboxx" data-dismiss="modal">
                  Close
                </button>
                <button type="submit" class="dropboxx2" data-dismiss="modal">
                  Send message
                </button>
              </div>
            </div>
          </div>
        </div>
        <div
          class="modal fade"
          id="exampleModal2"
          tabindex="-1"
          role="dialog"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Subscription</h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="input-group contact-input mb-3">
                    <input
                      type="email"
                      class="form-control box-bg"
                      placeholder="Email Address"
                      aria-label="Username"
                    />
                  </div>
                </form>
              </div>
              <div class="modal-footer mf-2">
                <button type="submit" class="dropboxx2" data-dismiss="modal">
                  Subscribe
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- HEADER AREA ENDS -->

    <!-- BANNER AREA START -->
    <section id="banner">
      <div class="design-layer"></div>
      <div class="backtotop">
        <a href="#banner"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
      </div>
      <div class="container zindex">
        <div class="row">
          <div class="col-lg-7 banner-txt">
            <h3>
              Hi!<br>
It's me Boo.
            </h3>
            <p>
              The goal of Boo is to prevent dogs of all breeds from being abandoned. For this reason, we will be making weekly donations to community chosen dog charities!
            </p>
            <p style="color: #f0b90a;">Contract<br>
              0xe52246c0647bcd730d62ec58432409901f0e6798</p>
            
            <a href="https://exchange.pancakeswap.finance/#/swap?inputCurrency=0xe52246c0647bcd730d62ec58432409901f0e6798">
              <img id="ctl00_XXX" src="images/pancake-swap.png" style="width: 30px;" /> Buy BooToken
            </a>

            <a href="https://bscscan.com/token/0xe52246c0647bcd730d62ec58432409901f0e6798">
              <img id="ctl00_XXX" src="images/bscscan.png" style="width: 30px;margin-left:20px;" /> BSCScan
            </a>

            <a href="https://poocoin.app/tokens/0xe52246c0647bcd730d62ec58432409901f0e6798">
              <img id="ctl00_XXX" src="images/poocoin.png" style="width: 30px;margin-left:20px;" /> Chart
            </a>

          </div>
          <div class="col-lg-5">
            <div class="banner-img">
              <img
                src="images/bootoken.png"
                alt="banner-img"
                class="img-fluid"
                width="600px"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- BANNER AREA ENDS -->

    <!-- FEATURE AREA START -->
    <section id="overview">
      <div class="container">
        <div class="row header-text text-center">
          <div class="col-lg-12">
            <h3>F<span>E</span>ATURES</h3>
          </div>
        </div>
        <div class="row over-pa">
          <div class="col-lg-9 col-sm-12 m-auto">
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <div class="over-item txt-right unique-style3">
                  <i class="fa fa-book over-i" style="background-color:#f0b90a"  aria-hidden="true" ></i>
                  <div class="break"></div>
                  <h3>Protocol</h3>
                  <p>
                    5% fee is redistributed to all existing holders
5% fee is split 50/50.
                  </p>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="over-item txt-left unique-style">
                  <i class="fa fa-video-camera over-i" style="background-color:#f0b90a"  aria-hidden="true"></i>
                  <div class="break"></div>
                  <h3>Donations And Marketing</h3>
                  <p>
                    We allocated 9% wallet for donation and marketing, we will disrupt this in a way that does not affect the market.
                  </p>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="over-item txt-right unique-style2">
                  <i class="fa fa-lock over-i" style="background-color:#f0b90a"  aria-hidden="true"></i>
                  <div class="break"></div>
                  <h3>Liquidity Pool</h3>
                  <p>
                    Our Liquidity pool locked until 2026 and we will continue to lock                   </p>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="over-item txt-left unique-style4">
                  <i class="fa fa-star over-i" style="background-color:#f0b90a"  aria-hidden="true"></i>
                  <div class="break"></div>
                  <h3>Rewarding</h3>
                  <p>
                    Simply hold Boo in your wallet and gain rewards when others transfer.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FEATURE AREA ENDS -->

   
          <!-- ABOUT AREA START -->
          <section id="about">
            <div class="container">
                <div class="row header-text text-center about-header">
                    <div class="col-lg-12">
                        <h3>AB<span>O</span>UT</h3>
                    </div>
                </div>
                <div class="row about-pa">
                    <div class="col-lg-10 col-md-12 m-auto about-item">
                        <div class="row">
                            <div class="col-lg-4 col-sm-8 m-sm-auto col-md-5 text-center">
                                <div class="about-img ai-one">
                                    <img src="images/bootoken.png" alt="about-img" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1"></div>
                            <div class="col-lg-7 col-md-6">
                                <div class="about-txt">
                                    <h3>What About Boo?</h3>
                                    <p>The goal of Boo is to prevent dogs of all breeds from being abandoned. For this reason, we will be making weekly donations to community chosen dog charities!

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
        </section>
        <!-- ABOUT AREA ENDS -->

    

    <!-- ======= roadmap Section ======= -->
    <section id="roadmap" class="wallet">
      <section id="roadmap" class="section section-bg">
        <div class="row header-text text-center">
          <div class="col-lg-12">
            <h3>R<span>O</span>ADMAP</h3>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
        </div>

   <div class="cd-timeline__container">
     <div class="cd-timeline__block js-cd-block">
       <div class="cd-timeline__milestone"></div>
       <div class="cd-timeline__content js-cd-content">
         <div class="cd-timeline__date">Phase 1</div>
         <h4 class="m-0">Goals</h4>
         <p>
          Core Development
        </p>
         <p>
          Launch
        </p>
        <p>
          Marketing
        </p>
        <p>
          Blockfolio Listing
        </p>
        <p>
          Coingecko Listing
        </p>
        <p>
          CoinMarketCap Listing
        </p>
       </div>
     </div>
      <div class="cd-timeline__block js-cd-block">
       <div class="cd-timeline__milestone"></div>
       <div class="cd-timeline__content js-cd-content">
         <div class="cd-timeline__date">Phase 2</div>
         <h4>Goals</h4>
         <p>
          First Donation
        
         </p>
         <p>
        
          Integrating swap transactions into the site
       
         </p>
         <p>
         
          Integrating staking options into the site
       
         </p>
         <p>
         
          NFT marketing into the site
         </p>
       </div>
     </div>
     <div class="cd-timeline__block js-cd-block">
       <div class="cd-timeline__milestone"></div>
       <div class="cd-timeline__content js-cd-content">
         <div class="cd-timeline__date">Phase 3</div>
         <h4>Goals</h4>
         <p>
          Additional CEX Applications 
         </p>
         <p>
          Larger scale marketing
         </p>
        
       </div>
     </div>
     <div class="cd-timeline__block js-cd-block">
       <div class="cd-timeline__milestone"></div>
       <div class="cd-timeline__content js-cd-content">
         <div class="cd-timeline__date">Phase 4</div>
         <h4>Goals</h4>
         <p>Will be listed on major exchanges</p>
       </div>
     </div>
  
   
   </div>
 </section>
 
      <!-- TOKENOMICS AREA START -->
    <section id="gallery">
      <div class="container">
        <div class="row header-text text-center">
          <div class="col-lg-12">
            <h3>T<span>O</span>KENOMICS</h3>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
        </div>
        <div class="row price-table">
          <div class="col-lg-5 ">
            <h6>
              <span style="color: #EFB91C;">Total Supply</span>
            </h6>
            <p>
              <span style="color: cornsilk;">1,000,000,000,000 BLOC</span>
            </p>
            <h6>
              <span style="color: #EFB91C;"> Total Burn</span>
            </h6>
            <p>
              <span style="color: cornsilk;">408,395,370,888 BLOC</span>
            </p>
            <h6>
              <span style="color: #EFB91C;"> Donations And Marketing</span>
            </h6>
            <p>
              <span style="color: cornsilk;">92,506,060,642 BLOC</span>
            </p>
            <h6>
              <span style="color: #EFB91C;"> Market Cap</span>
            </h4>
            <p>
              <span style="color: cornsilk;">$50,000</span>
            </p>
            <h6>
              <span style="color: #EFB91C;"> Audit Report</span>
            </h6>
            <p>
              <button class="btn fourth" onclick="location.href=&quot;files/BooAuditReport.pdf&quot;;">         
                Download
          </button>
            </p>


            <h6>
              <span style="color: #EFB91C;"> DX Lock</span>
            </h6>
            <p>
              <button class="btn fourth" onclick="location.href=&quot;https://dxsale.app/app/pages/dxlockview?id=1&add=0x9F644E1d5bFd3e8BE73dAbba492ce38942bB51a4&type=lplock&chain=BSC&quot;;">         
                Go
          </button>
            </p>

            
           
          </div>
          <div class="col-lg-7">
            <div class="about-img ai-one">
              <img
                src="images/bootoken.png"
                alt="banner-img"
                class="img-fluid"
                width="600px"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- BANNER AREA ENDS -->


     <br/>
    <br/>
    <!-- SUBSCRIBE AREA START -->
    <section id="subscribe">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 m-auto">
            <div class="sub-main">
              <div class="row">
                <div class="col-lg-8 col-md-7">
                  <h3>Stay Connected With Us</h3>
                </div>
                <div class="col-lg-3 col-md-5 subscripe-btn">
                  <a href="#"
                    >Subcribe Us</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- SUBSCRIBE AREA END -->

    <!-- FOOTER AREA START -->
    <footer id="footer">
      <div class="d-flex justify-content-center">
        <div class="row">
          <div class="col-lg-12 col-sm-11">
              <div class="footer-social">
               
                <a href="https://twitter.com/BooToken"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://t.me/bootoken"
                  ><i class="fa fa-telegram" aria-hidden="true"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="fop-btm text-center">
              <br>
              <h2>
                Email:
                <a href="mailto:bootokenofficial@gmail.com">bootokenofficial@gmail.com</a>
              </h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="fop-btm text-center">
              <br>
              <h2>
                Contract:
                <a href="https://bscscan.com/address/0xe52246c0647bcd730d62ec58432409901f0e6798">0xe52246c0647bcd730d62ec58432409901f0e6798</a>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- FOOTER AREA END -->

    <!-- COPY_RIGHT AREA START -->
    <section id="footer-btm">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="fop-btm text-center">
              <h2>
                Copyright &copy; 2021. All rights reserved by
                <a href="#">BooToken.</a>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- COPY_RIGHT AREA END -->

    <!-- Optional JavaScript -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/line.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/circular.js"></script>
    <script src="js/custom.js"></script>

    <script type="text/javascript">
      'use strict';

      $('#ckLine').ckLine({
        strokeColor: '#1d1d1d',
        strokeWidth: 1,
        leftRight: true,
        easing: 'swing',
        interval: 80,
      });
    </script>

    <script>
      function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);
    </script>
  </body>
</html>
