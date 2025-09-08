<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

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
  <!-- Navbar -->
  <?php include('Header.php') ?>

  <!-- Hero section -->
  <div id="hero-section" style="background-color:#00B7F9; border-radius:30px;">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center text-md-start py-5">
        <!-- Left Column -->
        <div class="col-md-6">
          <h1 class="pb-4 fw-bold text-white">Services</h1>
        </div>
        <!-- Right Column -->
        <div class="col-md-6 text-center">
          <img src="assets/images/kapta.png" 
               alt="Illustration" 
               class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <!-- Accordion Section -->
  <div class="container my-5">
    <h1 class="pb-3 fw-bold" style="color:#00B7F9;">1. Livestock</h1>

    <div class="accordion" id="accordionExample">
      
      <!-- Item 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" 
                  data-bs-toggle="collapse" 
                  data-bs-target="#collapseOne" 
                  aria-expanded="true" 
                  aria-controls="collapseOne">
            <span class="fw-bold">Program Description</span>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" 
             aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Duration up to 18 months<br>
            37 working hours/week + occasional overtime which is paid<br>
            Salary rate before tax<br>
            First 6 months 1,587 EUR/month<br>
            Next 12 months for students under 25 years old 1,841 EUR/month while over 25 years old earn 2,132 EUR/month<br>
            Accommodation provided near the workplace for monthly rent – approx. 320 EUR/month (incl. facilities)<br>
            Visa type – Traineeship visa<br>
            Visa processing – within 3 months<br>
            Visa fee 4,740 DKK and 1,720 DKK embassy fee<br>
            Bixter program fee – 1,100 EUR (600 EUR upfront, 500 EUR after visa)<br>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" 
                  data-bs-toggle="collapse" 
                  data-bs-target="#collapseTwo" 
                  aria-expanded="false" 
                  aria-controls="collapseTwo">
            <span class="fw-bold">Requirements for the Candidate</span>
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" 
             aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>Requirements content goes here.</strong>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" 
                  data-bs-toggle="collapse" 
                  data-bs-target="#collapseThree" 
                  aria-expanded="false" 
                  aria-controls="collapseThree">
            <span class="fw-bold">Training Process</span>
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" 
             aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>Training process details go here.</strong>
          </div>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" 
                  data-bs-toggle="collapse" 
                  data-bs-target="#collapseFour" 
                  aria-expanded="false" 
                  aria-controls="collapseFour">
            <span class="fw-bold">Documents required for the Application</span>
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" 
             aria-labelledby="headingFour" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>Documents list goes here.</strong>
          </div>
        </div>
      </div>

    </div>
    <div class="row">
         <div class="col-md-12 text-center py-5">
              <button type="submit" class="btn application-button text-white fw-bold py-2 px-4">
                APPLY NOW <i class="fa-solid fa-arrow-right-long ps-2"></i>
              </button>
            </div>
    </div>
  </div>


  <!--Hospitality-->
  <div class="container my-5">
    <h1 class="pb-3 fw-bold" style="color:#00B7F9;">2. Hospitality</h1>

    <div class="accordion" id="accordionExample">
      
      <!-- Item 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" 
                  data-bs-toggle="collapse" 
                  data-bs-target="#collapseOne" 
                  aria-expanded="true" 
                  aria-controls="collapseOne">
            <span class="fw-bold">Program Description</span>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" 
             aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Duration up to 18 months<br>
            37 working hours/week + occasional overtime which is paid<br>
            Salary rate before tax<br>
            First 6 months 1,587 EUR/month<br>
            Next 12 months for students under 25 years old 1,841 EUR/month while over 25 years old earn 2,132 EUR/month<br>
            Accommodation provided near the workplace for monthly rent – approx. 320 EUR/month (incl. facilities)<br>
            Visa type – Traineeship visa<br>
            Visa processing – within 3 months<br>
            Visa fee 4,740 DKK and 1,720 DKK embassy fee<br>
            Bixter program fee – 1,100 EUR (600 EUR upfront, 500 EUR after visa)<br>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" 
                  data-bs-toggle="collapse" 
                  data-bs-target="#collapseTwo" 
                  aria-expanded="false" 
                  aria-controls="collapseTwo">
            <span class="fw-bold">Requirements for the Candidate</span>
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" 
             aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>Requirements content goes here.</strong>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" 
                  data-bs-toggle="collapse" 
                  data-bs-target="#collapseThree" 
                  aria-expanded="false" 
                  aria-controls="collapseThree">
            <span class="fw-bold">Training Process</span>
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" 
             aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>Training process details go here.</strong>
          </div>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" 
                  data-bs-toggle="collapse" 
                  data-bs-target="#collapseFour" 
                  aria-expanded="false" 
                  aria-controls="collapseFour">
            <span class="fw-bold">Documents required for the Application</span>
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" 
             aria-labelledby="headingFour" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>Documents list goes here.</strong>
          </div>
        </div>
      </div>

    </div>
  </div>


<!-- Contact us section -->
   <div id="section" class="bg-white pb-5">
      <h1 class="pt-5 text-center fw-bold" style="color:#00B7F9;">Get in Touch</h1>
    <div class="container my-5" style="background-color:#EBF5F5; border-radius:30px">
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
  <?php include('Footer.php') ?>

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
          crossorigin="anonymous"></script>
</body>
</html>
