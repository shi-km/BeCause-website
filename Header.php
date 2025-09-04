<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</head>
<body>

  <nav class="navbar navbar-expand-lg bg-white my-4 px-5">
    <div class="container-fluid">

      <!-- Brand on the left -->
      <a class="navbar-brand" href="#">
        <img src="assets/images/Logo.png" 
             alt="Logo" 
             width="150" 
             height="60" 
             class="d-inline-block align-text-top img-fluid">
      </a>

      <!-- Toggler for mobile -->
      <button class="navbar-toggler" type="button" 
              data-bs-toggle="collapse" 
              data-bs-target="#navbarSupportedContent" 
              aria-controls="navbarSupportedContent" 
              aria-expanded="false" 
              aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu items aligned to the right -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>

           <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="About.php">About</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" 
               role="button" data-bs-toggle="dropdown" 
               aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Denmark.php">Denmark</a></li>
              <li><a class="dropdown-item" href="Germany.php">Germany</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="Netherlands.php">The Netherlands</a></li>
              <li><a class="dropdown-item" href="Romania.php">Romania</a></li>
              <li><a class="dropdown-item" href="Norway.php">Norway</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Media</a>
          </li>

          <!-- Application button -->
          <li class="nav-item">
            <a class="btn application-button text-white fw-lg py-2" href="#">Apply Now <i class="fa-solid fa-arrow-right-long ps-2"></i></a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

</body>
</html>
