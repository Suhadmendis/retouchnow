<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RetouchNow</title>


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">

      <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <link rel="stylesheet" href="_css/header.css">
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="_css/footer.css">

    <link rel="stylesheet" href="_css/my_job.css">
    
</head>
<body>
  <div id="app">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="_img/logo.png" alt="" height="30">
        </a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
        <button class="navbar-toggler" type="button" onclick="openNav()" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item top-menu">
              <a class="nav-link active" aria-current="page" href="#">Packages and Services</a>
            </li>
            <li class="nav-item top-menu">
              <a class="nav-link" href="#">Reviews</a>
            </li>
            <li class="nav-item top-menu">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item top-menu">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <!-- <li class="nav-item top-menu dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      About Us
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li> -->
    
          </ul>
          <form class="d-flex">
            <a class="login-button" href="#">Login</a>
              <button class="button button-primary" type="submit">Sign up</button>
          </form>
        </div>
    
      </div>
    </nav>




      <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
          <a href="#" id="pill-1">Packages and Services</a>
          <a href="#" id="pill-2">Reviews</a>
          <a href="#" id="pill-3">About Us</a>
          <a href="#" id="pill-4">Contact Us</a>
        </div>
      </div>


      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="page-title">My Jobs</h2>
          </div>
        </div>
      </div>


      <div class="container">
        <div class="row">
          <div class="col-md-12">

              <table class="table table-bordered" id="job-table">
                <thead>
                  <tr class="top-table-header">
                    <th style="width: 40%;">Name</th>
                    <th style="width: 30%;">Number of photos</th>
                    <th style="width: 30%;">Status</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <tr class="table-header">
                    <td>Name Name</td>
                    <td>1</td>
                    <td>Editing</td>
                  </tr>

                  <tr class="table-header">
                    <td>Name Name</td>
                    <td>4</td>
                    <td>Editing</td>
                  </tr>

                  <tr class="table-header">
                    <td>Name Name</td>
                    <td>2</td>
                    <td>Editing</td>
                  </tr>

                  <tr class="table-header">
                    <td>Name Name</td>
                    <td>1</td>
                    <td>Editing</td>
                  </tr>

                </tbody>
              </table>


          </div>
        </div>
      </div>


<br><br>
<div id="footer-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img class="footer-logo" src="_img/bnw-logo.png" alt="">
        <p class="footer-des">
          If you need help transforming your business, want to discuss an idea, or simply find out a bit more about us, get in
          touch.
        </p>

        <i class="fab fa-facebook-square footer-social-icon"></i>
        <i class="fab fa-pinterest-square footer-social-icon"></i>
        <i class="fab fa-twitter-square footer-social-icon"></i>
        <i class="fab fa-youtube-square footer-social-icon"></i>
      </div>
      <div class="offset-md-2 col-md-6">
        <div class="row">
          <div class="col-md-6">
            
            <p class="footer-head">Support</p>

            <p class="footer-sub">
              <a class="a-link" href="terms_of_service.php">
                Help & FAQs
              </a>
            </p>
            <p class="footer-sub">
              <a class="a-link" href="terms_of_service.php">
                Contact us
              </a>
            </p>
            <p class="footer-sub">
              <a class="a-link" href="terms_of_service.php">
                Refunds
              </a>
            </p>
            <p class="footer-sub">
              <a class="a-link" href="terms_of_service.php">
                Platform Status
              </a>
            </p>
            <p class="footer-sub">
              <a class="a-link" href="terms_of_service.php">
                Affiliate Program
              </a>
            </p>
            <p class="footer-sub">
              <a class="a-link" href="terms_of_service.php">
                About us
              </a>
            </p>

          </div>
          <div class="col-md-6">

            <p class="footer-head">Company</p>
            
            <p class="footer-sub">
              <a class="a-link" href="terms_of_service.php">
                Blog
              </a>
            </p>
            <p class="footer-sub">
              <a class="a-link" href="terms_of_service.php">
                Affiliate Program
              </a>
            </p>
            <p class="footer-sub">
              <a class="a-link" href="terms_of_service.php">
                Background Removal
              </a>
            </p>
            <p class="footer-sub">
              <a class="a-link" href="terms_of_service.php">
                Careers
              </a>
            </p>
            <p class="footer-sub">
              <a class="a-link" href="terms_of_service.php">
                About us
              </a>
            </p>
            <p class="footer-sub">
              <a class="a-link" href="terms_of_service.php">
                Press
              </a>
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br><br>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="footer-bottom-text-box">
          <p class="footer-bottom-text">
            Imprint
          </p>
          <p class="footer-bottom-text" > | </p>
          <p class="footer-bottom-text">
            <a class="a-link" href="terms_of_service.php">
              General Terms and Conditions
            </a>
          </p>
          <p class="footer-bottom-text" > | </p>
          <p class="footer-bottom-text">
            <a class="a-link" href="terms_of_service.php">
              Terms of Service
            </a>
          </p>
          <p class="footer-bottom-text" > | </p>
          <p class="footer-bottom-text">
            <a class="a-link" href="terms_of_service.php">
              Cookie Policy
            </a>
          </p>
          <p class="footer-bottom-text" > | </p>
          <p class="footer-bottom-text">
            <a class="a-link" href="terms_of_service.php">
              Privacy Policy
            </a>
          </p>
        </div>

        <div id="footer-bottom-text-box-mobile">
          <!-- <p class="footer-bottom-text" > | </p> -->
          <p class="footer-bottom-text">
            <a class="a-link" href="terms_of_service.php">
              General Terms and Conditions
            </a>
          </p>
          <p class="footer-bottom-text" > | </p>
          <p class="footer-bottom-text">
            <a class="a-link" href="terms_of_service.php">
              Terms of Service
            </a>
          </p>
        </div>

      </div>
    </div>
  </div>

</div>

  </div>








    <script src="_js/script.js" ></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script> -->


</body>
</html>