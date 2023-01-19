

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="_img/logo.png" alt="" height="30">
          </a>
          <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
          <button class="navbar-toggler" type="button" onclick="openNav()" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" ></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item top-menu">
                <a class="nav-link active" aria-current="page" href="#packages-section">Packages and Services</a>
              </li>
              <li class="nav-item top-menu">
                <a class="nav-link" href="#">Reviews</a>
              </li>
              <li class="nav-item top-menu">
                <a class="nav-link" href="aboutus.php">About Us</a>
              </li>
              <li class="nav-item top-menu">
                <a class="nav-link"  href="#">Contact Us</a>
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
              <?php 
                if ($_SESSION['CURRENT_USER'] != "") {
                  echo '<a class="login-button" href="my_jobs.php">My Jobs</a>'; 
                  echo '<a class="login-button">Hi, '. $_SESSION['CURRENT_USER'] .'</a>'; 
                  echo '<a class="login-button" onclick="logout()">Logout</a>'; 
                  echo '<a class="button button-primary" href="new_job.php">New Job</a>'; 
                  
                }else{
                  echo '<a class="login-button" href="auth.php">Login</a>'; 
                  echo '<a class="button button-primary" href="register.php"> Sign up</a>'; 
                }
              
              ?>
              
              
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
  