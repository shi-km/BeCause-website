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
      <div class="row align-items-center justify-content-center text-center text-md-start py-5 py-md-6">
        
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


  <!-- Accordion-->

<h1 class="mb-5 text-center fw-bold" style="color:#00B7F9;">1.Livestock</h1>
  <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Program Description
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Duration up to 18 months
37 working hours/week + occasional overtime which is paid
Salary rate before tax
First 6 months 1,587 EUR/month
Next 12 months for students under 25 years old 1,841 EUR/month while over 25 years old earn 2,132 EUR/month
Accommodation provided near the workplace for monthly rent – approx. 320 EUR/month (incl. facilities) (room in shared apartment/house)
Visa type – Traineeship visa
Visa processing – within 3 months since the candidate is applied for a visa
Visa fee 4,740 DKK and 1,720 DKK embassy fee
Bixter program fee – 1,100 EUR – as follows; 600 EUR paid upon the submission of the signed contract from the employer while 500 EUR paid as soon as the candidate receives the visa.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>

  <!-- Footer -->
  <?php include('Footer.php') ?>
</body>
</html>
