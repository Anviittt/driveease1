<?php
require './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="img/favicon.ico" rel="icon">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- External Css -->
    <link rel="stylesheet" href="style.css">

     <!-- title -->
    <title>DRIVE EASE</title>

</head>
<body>
    <header>
        <?php
			require './includes/header.php';
		?>
    </header>
     <main>
      <!-- Carousel -->
        <div class="container-fluid p-0 ">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/new-image.png" alt="Image" height="700">
                            </div>
                     
                <div class="carousel-item">
                    <img class="w-100" src="img/driving-school-in-cover.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Road To Motor Training Exellence</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Facts -->
    <div class="container-fluid facts py-5 pt-lg-0">
      <div class="container py-5 pt-lg-0">
          <div class="row gx-0">
              <div class="col-lg-4">
                  <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                      <div class="d-flex">
                          <div class="flex-shrink-0 btn-lg-square bg-primary">
                              <i class="fa fa-car text-white"></i>
                          </div>
                          <div class="ps-4">
                              <h5>Easy Driving Learn </h5>
                              <span>With Expert Teachers Learn Driving Easily.</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                      <div class="d-flex">
                          <div class="flex-shrink-0 btn-lg-square bg-primary">
                              <i class="fa fa-users text-white"></i>
                          </div>
                          <div class="ps-4">
                              <h5>National Instructor</h5>
                              <span>Get To Learn From National Instructors.</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                      <div class="d-flex">
                          <div class="flex-shrink-0 btn-lg-square bg-primary">
                              <i class="fa fa-file-alt text-white"></i>
                          </div>
                          <div class="ps-4">
                              <h5>Get licence</h5>
                              <span>Guaranteed Licence at your first test.</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- About -->
  <!-- About Start -->
  <div class="container-xxl mb-5 py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/about-1.jpg" alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="h-100">
                    <h6 class="text-primary text-uppercase mb-2">About Us</h6>
                    <h1 class="display-6 mb-4">We Help Students To Pass Test & Get A License On The First Try</h1>
                    <p>Get to learn driving from professional instructors and learn driving with easy way.</p>
                    <p class="mb-4">We guarantee you, yours licence on first try and as you know safety shines life.</p>
                    <div class="row g-2 mb-4 pb-2">
                        <div class="col-sm-6">
                            <i class="text-primary me-2"></i>Fully Licensed
                        </div>
                        <div class="col-sm-6">
                            <i class="text-primary me-2"></i>Online Tracking
                        </div>
                        <div class="col-sm-6">
                            <i class="text-primary me-2"></i>Affordable Fee 
                        </div>
                        <div class="col-sm-6">
                            <i class="text-primary me-2"></i>Best Trainers
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <a class="btn btn-primary py-3 px-5" href="">Read More</a>
                        </div>
                        <div class="col-sm-6">
                            <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+0123456789">
                                <span class="flex-shrink-0 btn-square bg-primary">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </span>9167388395</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
</main>
    <footer>
        <?php
        require './includes/footer.php';
        ?>
    </footer>
</body>
</html>