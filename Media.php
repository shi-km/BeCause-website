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
          <h1 class="pb-4 fw-bold text-white">Media</h1>
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
  <!-- Footer -->
  <?php include 'Footer.php'; ?>
</body>
</html>
