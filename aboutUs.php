<!doctype html>
<html lang="en">

<head>
    <!-- head -->
        <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
            <link rel="stylesheet" href="assets/css/main.css" />
            <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>about us!</title>
</head>

<body>
<?php
        include "header.php";
        include 'employee_connect.php';
        ?>
    <!-- corousel for the pictures to hoover -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://source.unsplash.com/1600x500/?sky,sun" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/1600x500/?computer,gaming" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/1600x500/?water,forest" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <h1>About us</h1>
      <h5>bla bcscale



      
      .....
     
    
    
    ..............bla bla </h5>

      <!-- roles of staff -->
      <div class="album py-5 bg-dark">
        <div class="container">
    
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <!-- one -->

            <!-- fetch all employees -->
        <?php 
            $sql="SELECT * FROM `employee`";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result))
            {
                $sno = $row['sno'];
                $employee_name = $row['employee_name'];
                $employee_post = $row['employee_post'];
                $employee_contribution = $row['employee_contribution'];

                echo '<div class="col">
                <div class="card shadow-sm">
                  <img src="images/bgmi.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">'.$employee_name.'.<br>
                    '.$employee_post.'.<br>
                    contribution='.$employee_contribution.'</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>';

            }
        ?>
            



          <!-- Footer -->
              <!-- <footer class="wrapper style1 align-center">
                <div class="inner">
                  <ul class="icons">
                    <li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="https://www.facebook.com/groups/699084033848480" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands style2 fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                    <li><a href="#" class="icon style2 fa-envelope"><span class="label">Email</span></a></li>
                  </ul>
                  <p class="text-light">&copy; Untitled. Design: <a href="#">rgb</a>.</p>
                </div>
              </footer>
            </div> -->

          <!-- Scripts (for rigth alingment)-->
            <!-- <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/browser.min.js"></script>
            <script src="assets/js/breakpoints.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script> -->

                    <!-- Option 1: Bootstrap Bundle with Popper (for rigth alingment)-->
            <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
            </script> -->

            <!-- Option 2: Separate Popper and Bootstrap JS (for rigth alingment)-->

            <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
                integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
                integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
            </script> -->
      

<!-- footer -->
<div class="text-light">
  <footer class="">
    <div class="row">
      <div class="col-4">
        <h5 class="text-light">About</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="contactUs.php" class="nav-link p-0 text-muted">contact us</a></li>
          <li class="nav-item mb-2"><a href="aboutUs.php" class="nav-link p-0 text-muted">About us</a></li>
          <li class="nav-item mb-2"><a href="career.php" class="nav-link p-0 text-muted">Careers</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">U$ stories</a></li>
		  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">press</a></li>
		  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">wholesale</a></li>
        </ul>
      </div>

      <div class="col-4">
        <h5 class="text-light">Help</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Payments</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Shipping</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Calcellation and Returns</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Report</a></li>
        </ul>
      </div>

      <div class="col-4">
        <h5 class="text-light">Policy</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">return policy</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">terms of use</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Security</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Privacy</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sitemap</a></li>
        </ul>
      </div>

      <div class="col-20 offset-1">
        <form>
          <h5 class="text-light">Subscribe to our newsletter</h5>
          <p class="text-light">Monthly digest of whats new and exciting from us.</p>
          <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex justify-content-between py-4 my-4 border-top">
      <p class="text-light">&copy; 2021 Company, Inc. All rights reserved.</p>
    </div>
  </footer>
</div>


    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

      
  </body>
</html>

    
    
    
    
    
    
    <!-- FOOTER OF THE WEBSITE -->

    <footer class="wrapper style1 align-center">
        <div class="inner">
            <ul class="icons">
                <li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="https://www.facebook.com/groups/699084033848480" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands style2 fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                <li><a href="#" class="icon style2 fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <p class="text-light">&copy; Untitled. Design: <a href="#">rbg</a>.</p>
        </div>
    </footer>

</div>

        <!-- Scripts (for rigth alingment)-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

            <!-- Option 1: Bootstrap Bundle with Popper (for rigth alingment)-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS (for rigth alingment)-->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
        </script>

    </footer>

</body>
</html>