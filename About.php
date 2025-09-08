<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ===============================
       Meta & Document Settings
  ================================ -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>

  <!-- ===============================
       Stylesheets
  ================================ -->
  <link rel="stylesheet" href="style.css" />

  <!-- Font Awesome Icons -->
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />

  <!-- ===============================
       Scripts
  ================================ -->
  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- Cycle2 Plugin -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js"></script>

  <!-- Animate on Scroll -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>
<body>

  <!-- ===============================
       Header (PHP Include)
  ================================ -->
  <?php include('Header.php') ?>
  <!-- ===============================
       End Header
  ================================ -->


  <!-- ===============================
       HERO SECTION
  ================================ -->
  <div class="container-fluid">
    <div class="About-hero position-relative">
      <div class="About-text position-absolute ms-5 top-50">
        <h1 class="pb-3 fw-bold text-white display-5">
          Grow Your Career<br> With Opportunities In Europe
        </h1>
        <a href="#" class="btn application-button px-4 py-2 text-white fw-bold">
          Contact Us <i class="fa-solid fa-arrow-right-long ps-2"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- ===============================
       END HERO SECTION
  ================================ -->


  <!-- ===============================
       WHY CHOOSE US SECTION
  ================================ -->
  <div class="container my-5 why-choose-us">

    <!-- Section Heading -->
    <div class="text p-5">
      <h1 class="fw-bold pb-2 section-title">Why Choose Us?</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <!-- Cards Row -->
    <div class="row g-4 px-4 pb-5 service-cards">

      <!-- Card One -->
      <div class="col-md-4">
        <a href="jobs.html" class="card-link-wrapper">
          <div class="card p-3 text-center h-100 custom-card">
            <div class="circle-wrapper mx-auto mb-2">
              <img src="assets/images/suitcase.png" alt="Suitcase image" class="img-fluid" />
            </div>
            <div class="card-body">
              <h5 class="card-title pt-2">Jobs</h5>
              <p class="card-text p-1 lh-md text-start">
                Dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nun Lorem ipsum dolor sit amet...
              </p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card Two -->
      <div class="col-md-4">
        <a href="internships.html" class="card-link-wrapper">
          <div class="card p-3 text-center h-100 custom-card">
            <div class="circle-wrapper mx-auto mb-2">
              <img src="assets/images/Abroad.png" alt="Global map" class="img-fluid" />
            </div>
            <div class="card-body">
              <h5 class="card-title pt-2">Internships Abroad</h5>
              <p class="card-text p-1 lh-md text-start">
                Dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nun Lorem ipsum dolor sit amet...
              </p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card Three -->
      <div class="col-md-4">
        <a href="study.html" class="card-link-wrapper">
          <div class="card p-3 text-center h-100 custom-card">
            <div class="circle-wrapper mx-auto mb-2">
              <img src="assets/images/map.png" alt="Global Map" class="img-fluid" />
            </div>
            <div class="card-body">
              <h5 class="card-title pt-2">Study Abroad</h5>
              <p class="card-text p-1 lh-md text-start">
                Dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nun Lorem ipsum dolor sit amet...
              </p>
            </div>
          </div>
        </a>
      </div>

    </div> <!-- End Cards Row -->

  </div> <!-- End Container -->
  <!-- ===============================
       END WHY CHOOSE US SECTION
  ================================ -->


  <!-- ===============================
       STATS SECTION
  ================================ -->
  <div class="container my-5">
    <div class="row align-items-center">
      
      <!-- Left Column (Video Image) -->
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="assets/images/video-player.png" alt="Video player" class="img-fluid" />
      </div>

      <!-- Right Column (Cards Grid) -->
      <div class="col-md-6">
        <div class="row g-3">
          
          <!-- Card 1 -->
          <div class="col-md-6">
            <div class="card stat-card text-center p-3 h-100">
              <div class="card-body">
                <h3 class="fw-bold mb-0">200+</h3>
                <span class="text-muted">Internships</span>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-md-6">
            <div class="card stat-card text-center p-3 h-100">
              <div class="card-body">
                <h3 class="fw-bold mb-0">150+</h3>
                <span class="text-muted">Programs</span>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col-md-6">
            <div class="card stat-card text-center p-3 h-100">
              <div class="card-body">
                <h3 class="fw-bold mb-0">50+</h3>
                <span class="text-muted">Partners</span>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="col-md-6">
            <div class="card stat-card text-center p-3 h-100">
              <div class="card-body">
                <h3 class="fw-bold mb-0">30+</h3>
                <span class="text-muted">Countries</span>
              </div>
            </div>
          </div>

        </div> <!-- End Row -->
      </div> <!-- End Right Column -->
    </div>
  </div>
  <!-- ===============================
       END STATS SECTION
  ================================ -->


  <!-- ===============================
       CONTACT US SECTION
  ================================ -->
  <div id="section" class="bg-white">
    <div class="container my-5">
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
                  <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
              </div>

              <!-- Phone -->
              <div class="col-md-6 mb-3">
                <label for="phone" class="form-label">Your Phone</label>
                <div class="input-group">
                  <input type="text" id="phone" placeholder="Enter your phone" class="form-control">
                  <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                </div>
              </div>

              <!-- Address -->
              <div class="col-md-12 mb-3">
                <label for="address" class="form-label">Your Address</label>
                <div class="input-group">
                  <input type="text" id="address" placeholder="Enter your address" class="form-control">
                  <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                </div>
              </div>

              <!-- Message -->
              <div class="col-md-12 mb-3">
                <label for="message" class="form-label">Message</label>
                <div class="input-group">
                  <textarea id="message" placeholder="Write message..." class="form-control" rows="4"></textarea>
                  <span class="input-group-text"><i class="fa-solid fa-comment"></i></span>
                </div>
              </div>

              <!-- Submit Button -->
              <div class="col-md-12 text-center mt-3">
                <button type="submit" class="btn application-button text-white fw-bold py-2 px-4">
                  Send Message <i class="fa-solid fa-arrow-right-long ps-2"></i>
                </button>
              </div>

            </div> <!-- End Form Row -->
          </form>
        </div>

        <div class="col-md-2"></div>
      </div>
    </div>
  </div>
  <!-- ===============================
       END CONTACT US SECTION
  ================================ -->


  <!-- ===============================
       Footer (PHP Include)
  ================================ -->
  <?php include('Footer.php') ?>
  <!-- ===============================
       End Footer
  ================================ -->

</body>
</html>
