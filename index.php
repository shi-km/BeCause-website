<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Becourse Website</title>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css" />

  <!-- Font Awesome Icons -->
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- Cycle2 Plugin -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js"></script>

  <!-- Animate on Scroll -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body>
  <?php include('Header.php')?>

<!-- Hero Section -->
<div class="container position-relative home-hero d-flex align-items-center text-white">

  <div class="row align-items-center w-100 px-5">
    
    <!-- Left Column (Text) -->
    <div class="col-12 col-md-6">
      <h1 class="pb-3 fw-bold home-hero-text" style="color:#00B7F9;">
        Welcome to <br>BeCourse Group.
      </h1>
      <p class="lead fw-bold pb-3" style="color:#F29B27;">
        Your Gateway to Global Opportunities
      </p>
      <a href="#" class="btn application-button px-4 py-2 text-white fw-bold">
        Contact Us <i class="fa-solid fa-arrow-right-long ps-2"></i>
      </a>
    </div>

    <!-- Right Column (Hero Image) -->
    <div class="col-12 col-md-6 text-center hero-image">
      <!-- Background image handled via CSS -->
    </div>

  </div>

  <!-- Decorative Vector -->
  <img src="assets/images/vector.png" alt="vector decoration" 
       class="hero-vector text-white position-absolute">
</div>


  <!-- Internship Section -->
<div class="container-fluid internship-section py-5">
  <div class="row align-items-cente">
    
    <!-- Left Column -->
    <div class="col-md-6  p-md-5">
      <h1 class="fw-bold text-white mb-4 display-5">Internship Training</h1>
      <p class="lh-lg text-white">
        BeCourse Group in partnership with Bixter Training is dedicated to enhancing internship
        programs in Europe and other opportunities for trainees by actively partnering with partners
        that participate in international exhibitions. By staying updated on top technologies and
        cultivating relationships with new host employers, Bixter ensures its programs remain innovative
        and relevant.
      </p>
    </div>

    <!-- Right Column -->
    <div class="col-md-6 text-center  p-md-5">
      <img src="assets/images/video-player.png" alt="Internships Video" class="img-fluid" style="max-height:400px;" />
    </div>
  </div>

  <!-- Paris Image Centered -->
  <div class="row">
    <div class="col-12 text-center position-relative p-0">
      <img src="assets/images/paris.png" alt="Paris"
           class="img-fluid"
           style="height:300px; width:auto; margin-top:-250px;margin-left:-70px" />
    </div>
  </div>
</div>


<div id="intership-section" style="background-color:#E3DBD8;">
    <!-- Current Internships Section -->
  <div class="container p-5" >
    <p class="fw-bold" style="color:#F29B27;">CURRENT INTERNSHIPS</p>
    <h1 class="pb-4 fw-bold" style="color:#00B7F9;">
      Internship Opportunities <br /> in Europe
    </h1>

    <div class="row g-4">

      <!-- Card One -->
      <div class="col-md-3">
        <div class="card p-3 text-center">
          <img src="assets/images/Denmark.png" alt="Denmark flag"
               class="img-fluid rounded-circle"
               style="width:60px; height:60px;  object-fit:cover;" />
          <div class="card-body text-start">
            <h5 class="card-title">Denmark</h5>
            <p class="card-text">Some quick example text...</p>
            <a href="#" class="btn link-color">View More
              <i class="fa-solid fa-arrow-right-long ps-2"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Card Two -->
      <div class="col-md-3">
        <div class="card p-3 text-center">
          <img src="assets/images/germany.png" alt="Germany flag"
               class="img-fluid rounded-circle"
               style="width:60px; height:60px; object-fit:cover;" />
          <div class="card-body text-start">
            <h5 class="card-title">Germany</h5>
            <p class="card-text">Some quick example text...</p>
            <a href="#" class="btn link-color">View More
              <i class="fa-solid fa-arrow-right-long ps-2"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Card Three -->
      <div class="col-md-3">
        <div class="card p-3 text-center">
          <img src="assets/images/Netherlands.png" alt="Netherlands flag"
               class="img-fluid rounded-circle"
               style="width:60px; height:60px;  object-fit:cover;" />
          <div class="card-body text-start">
            <h5 class="card-title">The Netherlands</h5>
            <p class="card-text">Some quick example text...</p>
            <a href="#" class="btn link-color">View More
              <i class="fa-solid fa-arrow-right-long ps-2"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Card Four -->
      <div class="col-md-3">
        <div class="card p-3 text-center">
          <img src="assets/images/Romania.png" alt="Romania flag"
               class="img-fluid rounded-circle"
               style="width:60px; height:60px;  object-fit:cover;" />
          <div class="card-body text-start">
            <h5 class="card-title">Romania</h5>
            <p class="card-text">Some quick example text...</p>
            <a href="#" class="btn link-color">View More
              <i class="fa-solid fa-arrow-right-long ps-2"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

  <!-- Ready to Start Section -->
<div id="ready-section" class="bg-white">
  <div class="container my-5 py-5">
    <div class="row align-items-center">

      <!-- Left Column -->
      <div class="col-12 col-md-6 mb-4 mb-md-0">
        <h1 style="color:#00B7F9;" class="fw-bold">Ready to start?</h1>
        <p class="py-3">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna
          aliqua. Ut enim ad minim veniam, quis nostrud.
        </p>

        <!-- Email Input -->
        <form class="position-relative" style="max-width: 320px;">
          <input type="text" 
                 class="form-control rounded-pill pe-5 small-input" 
                 placeholder="Your Email" />

          <!-- Send Icon -->
          <button type="submit" 
                  class="btn  rounded-circle position-absolute top-50 end-0 translate-middle-y me-2 p-2"
                  style="width: 36px; height: 36px; background-color:#F29B20">
            <i class="fa-solid fa-paper-plane text-white"></i>
          </button>
        </form>
      </div>

      <!-- Right Column (Image) -->
      <div class="col-12 col-md-6 text-center">
        <img src="assets/images/kapta.png" 
             alt="Illustration" 
             class="img-fluid" 
             style="max-height: 320px;">
      </div>

    </div>
  </div>
</div>

<!-- Testimonials Section -->
<div class="container-fluid py-5" style="background-color:#E3DBD8;">
  <h1 class="mb-5 text-center fw-bold" style="color:#00B7F9;">Testimonials</h1>

  <div class="row justify-content-center">
    <div class="col-12 col-lg-8">
      <div class="cycle-slideshow testimonial-slider"
           data-cycle-fx="scrollHorz"
           data-cycle-timeout="4000"
           data-cycle-speed="600"
           data-cycle-slides="> .slide"
           data-cycle-pager=".testimonial-pager"
           data-cycle-pause-on-hover="true"
           data-cycle-swipe="true">

        <!-- Slide 1 -->
        <div class="slide d-flex justify-content-center">
          <div class="card testimonial-card shadow-lg mx-auto" style="max-width:800px;">
            <div class="card-body text-start">
              <h5 class="fw-bold mb-1">Victor</h5>
              <small class="text-muted d-block mb-3">Diploma in IT</small>
              <p class="testimonial-text mb-0">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
              </p>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide d-flex justify-content-center">
          <div class="card testimonial-card shadow-lg mx-auto" style="max-width:800px;">
            <div class="card-body text-start">
              <h5 class="fw-bold mb-1">Jane</h5>
              <small class="text-muted d-block mb-3">BSc Agriculture</small>
              <p class="testimonial-text mb-0">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
              </p>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide d-flex justify-content-center">
          <div class="card testimonial-card shadow-lg mx-auto" style="max-width:800px;">
            <div class="card-body text-start">
              <h5 class="fw-bold mb-1">David</h5>
              <small class="text-muted d-block mb-3">MSc Mechanical Eng.</small>
              <p class="testimonial-text mb-0">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
              </p>
            </div>
          </div>
        </div>

      </div>

      <!-- Dots (Pager Only) -->
      <div class="testimonial-pager text-center mt-4"></div>
    </div>
  </div>
</div>
<!-- Testimonials End -->



<!-- Contact us section -->
<div id="section">
  <div class="container my-5" style="background-color:#E3DBD8;">
    <div class="row">
      <div class="col-md-2"></div>

      <div class="col-md-8">
        <form action="">
          <div class="row my-5">
            
            <!-- Email -->
            <div class="col-md-6 mb-3">
              <label for="email" class="form-label">Your Email</label>
              <div class="input-group">
                <input type="email" id="email" placeholder="Enter your email" class="form-control">
                <span class="input-group-text"><i class="fa-solid fa-envelope" style="color:#F29B27;"></i></span>
              </div>
            </div>

            <!-- Phone -->
            <div class="col-md-6 mb-3">
              <label for="phone" class="form-label">Your Phone</label>
              <div class="input-group">
                <input type="text" id="phone" placeholder="Enter your phone" class="form-control">
                <span class="input-group-text"><i class="fa-solid fa-phone" style="color:#F29B27;"></i></span>
              </div>
            </div>

            <!-- Address -->
            <div class="col-md-12 mb-3">
              <label for="address" class="form-label">Your Address</label>
              <div class="input-group">
                <input type="text" id="address" placeholder="Enter your address" class="form-control">
                <span class="input-group-text"><i class="fa-solid fa-location-dot" style="color:#F29B27;"></i></span>
              </div>
            </div>

            <!-- Message -->
            <div class="col-md-12 mb-3">
              <label for="message" class="form-label">Message</label>
              <div class="input-group">
                <textarea id="message" placeholder="Write message..." class="form-control" rows="4"></textarea>
                <span class="input-group-text"><i class="fa-solid fa-comment" style="color:#F29B27;"></i></span>
              </div>
            </div>

            <!-- Submit Button Centered -->
            <div class="col-md-12 text-center mt-3">
              <button type="submit" class="btn application-button text-white fw-bold py-2 px-4">
                Send Message <i class="fa-solid fa-arrow-right-long ps-2"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      <div class="col-md-2"></div>
    </div>
  </div>
</div>

  <!-- Footer -->
  <?php include 'Footer.php'; ?>
</body>
</html>
