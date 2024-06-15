@extends('master')
@section('contents')
 <!-- HERO SECTION -->
 <section class="hero-section position-relative">
    <img class="hero-img position-absolute bottom-0" src="images/GlobeMonument.png">
    <div class="hero-contents container-fluid">
      <h1 class="hero-header text-center">Connect Beyong Borders</h1>
      <p class="hero-p text-center">Experience seamless communication in over 200 countries with our Travel eSIM.
        Simple, secure, and made for the global explorer.</p>
      <div class="input-container d-flex flex-lg-row flex-column align-items-center">
        <button type="submit" class="sendbtn"><img src="images/Icon.png"></button>
        <input type="text" class="enter-email-address-parent"
          placeholder="Search for your destination in 200 countries...">
        <img class="vector" src="images/Vector.png">
        <button class="e-simbtn">Get your e-sim</button>
      </div>
    </div>
  </section>
  <!-- FEATURES SECTION -->
  <section class="bg-white pt-5 pb-5">
    <div class="scrolling-wrapper">
      <div class="scrolling-image">
        <img src="svg/Frame 37.svg" alt="" class="w-100">
        <img src="svg/Frame 37.svg" alt="" class="w-100 scroll2">
      </div>
    </div>

  </section>
  <!-- PARTNER SECTINO -->
  <div class="container-fluid">
    <section class="partners-section position-relative">
      <div class="partners-container">
        <h4 class="partners-heading">Proud Partner with</h4>
        <div class="partner-logos">
          <img src="images/logos/image 1539.png" alt="Partner Logo 1">
          <img src="images/logos/image 1542.png" alt="Partner Logo 1">
          <img src="images/logos/image 1539.png" alt="Partner Logo 1">
          <img src="images/logos/image 1542.png" alt="Partner Logo 1">
          <img src="images/logos/image 1539.png" alt="Partner Logo 1">
          <img src="images/logos/image 1542.png" alt="Partner Logo 1">
          <img src="images/logos/image 1539.png" alt="Partner Logo 1">
          <img src="images/logos/image 1542.png" alt="Partner Logo 1">
        </div>
      </div>
    </section>
  </div>
  <!-- STAY CONNECTED SECTION -->
  <section class="connected-section position-relative">
    <div class="container">
      <div class="row">
        <div class="col col-12 col-lg-6">
          <h1 class="hero-header-connect text-center">Stay Connected</h1>

        </div>
        <div class="col col-12 col-lg-6">
          <h1 class="hero-header-connect2 text-center">No matter where your journey takes you</h1>
          <p class="ms-2 fs-5">Experience seamless internet connectivity on all your adventures with Tripcel eSIM, and
            say goodbye to costly roaming bills when you return</p>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col col-12 col-lg-3">
          <img src="images/Vector 60.png" alt="vec" class="vec justify-content-center align-content-center">
          <h1 class="text-center fw-bold">Over 200</h1>
          <p class="fs-4 text-center">Countries <br>Travel eSIM available</p>
        </div>
        <div class="col col-12 col-lg-9">
          <img alt="map" src="svg/map.svg" class="w-100">
        </div>
      </div>
    </div>
  </section>
  <!-- BENEFITS SECTION -->
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators d-flex flex-column">
      <button class="e-simbtn align-self-center mb-5">Get your e-sim</button>
      <div class="d-flex flex-row justify-content-center">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
    </div>
    <div class="carousel-inner">
      <img src="images/Pillssection.png" class="d-block w-100" alt="...">
      <div class="container-car">
        <div class="carousel-item active">
          <div class="carousel-caption d-none d-md-block">
            <h4>BENEFITS</h4>
            <h1 class="hero-header-connect text-center text-black">Unlimited Access</h1>
            <h2 class="fw-bold mt-5">No matter where you are</h2>
            <p class="fs-5 mt-2">Enjoy the freedom of unlimited data, navigate, share, stay connected without worrying
              about data limitations. Stream, browse, and explore Turkey at your own pace.</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-caption d-none d-md-block">
            <h4>BENEFITS</h4>
            <h1 class="hero-header-connect text-center text-black">Fast & Reliable Connection</h1>
            <h2 class="fw-bold mt-5">No matter where you are</h2>
            <p class="fs-5 mt-2">Tripcel eSIM provides a fast and reliable internet connection, ensuring you have a
              seamless online experience wherever your journey takes you in Turkey.</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-caption d-none d-md-block">
            <h4>BENEFITS</h4>
            <h1 class="hero-header-connect text-center text-black">Easy Activation</h1>
            <h2 class="fw-bold mt-5">No matter where you are</h2>
            <p class="fs-5 mt-2">No need to visit a local store or wait in long queues. Activate your eSIM with just a
              few clicks, allowing you to start using data right away</p>
          </div>
        </div>

      </div>
    </div>

  </div>

  <!-- HOW IT WORKS SECTION -->
  <section class="works">
    <div class="container">
      <div class="row">
        <div class="col col-12 col-lg-6">
          <h1 class="hero-header-connect">How it Works</h1>
          <h3 class="mt-5 fw-bold animate__animated animate-on-scroll">Check Compatibility and Purchase</h3>
          <p class="fs-4 animate__animated animate-on-scroll">Make sure your device works with eSIM before you buy a
            data plan. Activating our plans is
            instant on unlocked iPhones and Andriods with biult-in eSIM chips. For confirmation, look at the eSIM Device
            List</p>

          <button class="e-simbtn compactbtn">Check your Phone Compatibility</button>
        </div>
        <div class="col col-12 col-lg-6">
          <div class="video-container animate__animated animate-on-scroll">
            <video autoplay loop muted>
              <source src="videos/clay.mp4" type="video/mp4">
            </video>
            <div class="phone-image">
              <img src="images/Phone.png" class="align-self-center" alt="Phone Image">
            </div>
          </div>
        </div>
      </div>
      <div class="row planrow justify-content-center">
        <div class="col col-12 col-lg-6">
          <div class="plan-video-container">
            <video autoplay loop muted>
              <source src="videos/clay.mp4" type="video/mp4">
            </video>
            <div class="phone-image">
              <img src="images/photo2.png" class="align-self-center w-100" alt="Phone Image">
            </div>
          </div>
          <h3 class="plan fw-bold animate__animated animate-on-scroll">Choose a plan</h3>
          <p class="fs-4">Choose either a monthly or prepaid data plan that will work for you in the area you are going
            to. See our eSIM plans & Pricing page for more options</p>
        </div>
      </div>
      <div class="row scan-qr">
        <div class="col col-12 col-lg-6 order-2">
          <h3 class="plan fw-bold animate__animated animate-on-scroll">Scan QR code</h3>
          <p class="fs-4">Use your smart phone or another eSIM-compactible device to scan the QR code sent via email.
          </p>

          <button class="e-simbtn compactbtn">Check your Phone Compatibility</button>
        </div>
        <div class="col col-12 col-lg-6">
          <div class="video-container-scan animate__animated animate-on-scroll">
            <video autoplay loop muted>
              <source src="videos/clay.mp4" type="video/mp4">
            </video>
            <div class="phone-image">
              <img src="images/phone3.png" class="align-self-center" alt="Phone Image">
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col col-12 col-lg-6">
          <h3 class="plan fw-bold animate__animated animate-on-scroll">Connect to 4G OR 5g/LTE</h3>
          <p class="fs-4 animate__animated animate-on-scroll">Simply follow the on-screen instructions to add to your
            new international data plan. It is
            really that easy! As soon as you land, go online because your phone will connect to the internet network
            automatically. Experience how easy and quick Tricep's eSIM connectivity is.</p>
          <div class="video-container-connect pt-5 animate__animated animate-on-scroll">
            <video autoplay loop muted>
              <source src="videos/clay.mp4" type="video/mp4">
            </video>
            <div class="phone-image">
              <img src="svg/phone4.svg" class="align-self-center w-100" alt="Phone Image">
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <h1 class="hero-header text-center mt-5 pt-5" style="color: black !important">Words from our Customers</h1>
  <!-- REVIEWS SECTION -->
  <section class="testimonials-section">

    <div class="scroll-container">
      <div class="card" style="background-color: #f0f7ff; transform: rotateZ(333deg); top: 20px; left: 20px;">
        <div class="card-content">
          <div class="d-flex flex-row">
            <img src="images/user_img.jpg" alt="Mark Thompson">
            <div class="d-flex flex-column">
              <h3>Mark <br> Thompson</h3>
              <p>France</p>
            </div>
          </div>
          <img src="images/icons8-quote-left-100.png" class="quote">
          <p class="pt-5 quotep">Tripcel saved my trip! I forgot to arrange a SIM card beforehand, but with Tripcel’s
            easy
            setup, I was
            connected instantly. Thank you</p>
        </div>
      </div>
      <div class="card" style="background-color: #f9f9f9; 
      transform: rotateZ(347deg);
      top: -100px;
      left: 45px;">
        <div class="card-content">
          <div class="d-flex flex-row">
            <img src="images/user_img.jpg" alt="Emily Parker">
            <div class="d-flex flex-column">
              <h3>Emily Parker</h3>
              <p>Bolivia</p>
            </div>
          </div>
          <img src="images/icons8-quote-left-100.png" class="quote">

          <p class="pt-5 quotep">Tripcel’s seamless integration with my device made international travel stress-free.
            Will
            definitely use
            again.</p>
        </div>
      </div>
      <div class="card" style="background-color: #fff5e6; 
      transform: rotateZ(358deg);
      top: -142px;
      left: 86px;">
        <div class="card-content">
          <div class="d-flex flex-row">
            <img src="images/user_img.jpg" alt="David Smith">
            <div class="d-flex flex-column">
              <h3>David Smith</h3>
              <p>Saudi Arabia</p>
            </div>

          </div>
          <img src="images/icons8-quote-left-100.png" class="quote">
          <p class="pt-5 quotep">Tripcel’s wide coverage and quick activation exceeded my expectations. No more
            searching for
            local SIMs
            abroad.</p>
        </div>
      </div>
      <div class="card" style="background-color: #f9f1ff;  
      transform: rotateZ(14deg);
      top: -110px;
      left: 135px;">
        <div class="card-content">
          <div class="d-flex flex-row">
            <img src="images/user_img.jpg" alt="Jennifer Lee">
            <div class="d-flex flex-column">
              <h3>Jennifer Lee</h3>
              <p>United States</p>
            </div>

          </div>
          <img src="images/icons8-quote-left-100.png" class="quote">
          <p class="pt-5 quotep">Highly efficient! Tripcel’s user-friendly interface and fast service were a lifesaver
            during
            my recent
            travels. A must-have for any globetrotter.</p>
        </div>
      </div>
      <div class="card" style="background-color: #f0f7ff; 
      transform: rotateZ(23deg);
      top: 6px;
      left: 146px;">
        <div class="card-content">
          <div class="d-flex flex-row">
            <img src="images/user_img.jpg" alt="Mark Thompson">
            <div class="d-flex flex-column">
              <h3>Mark <br> Thompson</h3>
              <p>France</p>
            </div>
          </div>
          <img src="images/icons8-quote-left-100.png" class="quote">
          <p class="pt-5 quotep">Tripcel saved my trip! I forgot to arrange a SIM card beforehand, but with Tripcel’s
            easy
            setup, I was
            connected instantly. Thank you</p>
        </div>
      </div>

    </div>
  </section>


@endsection