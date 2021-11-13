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
      <script src="_js/axios.min.js"></script>


      <script src="_js/user.js?v=0000000001"></script>


    <link rel="stylesheet" href="_css/header.css">
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="_css/footer.css">

    <link rel="stylesheet" href="_css/auth.css">


    
    
</head>
<body>
  <div id="app">

  <?php include 'header.php'; ?>

      <div class="wrapper">
        <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="page-title">Login</h2>
          </div>
        </div>
      </div>


      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="login-box">
                  <div class="row">
                    <div class="col-md-6">

                        <div class="login-form">
  
                              <div class="image-area">
                                <img src="_img/logo.png" alt="" id="image">
                              </div>
                              <div class="input-box">
                                  <p class="label-text">Email</p>
                                  <input type="text"  id="txtUserName" class="form-input">
                              </div>
                              <div class="input-box">
                                  <p class="label-text">Password</p>
                                  <input type="password" id="txtPassword" class="form-input">
                              </div>
                              <div class="error-message-area">
                                  <p class="error-message">Forgotten your login details?</p>
                              </div>
                              <div class="button-area">
                                  <button class="button button-primary" onClick="IsValiedData()">Login</button>
                                  <button class="button button-default">Create Account</button>
                              </div>
                              <div class="forgot-message-area">
                                  <p class="forgot-message">Forgotten your login details? <b>Get Help Signing in</b></p>
                              </div>
  
                        </div>
  
                        
                    </div>
                    <div class="col-md-6">
                        <div class="right-image-area">
                            <div class="login-welcome-text-box">
                                <p class="upper-text">WELCOME TO</p>
                                <p class="middle-text">RetouchNow Editing</p>
                                <div class="spe-line"></div>
                                <p class="lower-text">Login to Access Your Jobs</p>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            

          </div>
        </div>
      </div>


<br><br><br>



      </div>



<?php include 'footer.php'; ?>

  </div>





  <script>
    var elem = document.getElementById("txtPassword");
    elem.onkeyup = function (e) {
        if (e.keyCode == 13) {
            IsValiedData();
        }
    }


</script>




    <script src="_js/auth.js" ></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script> -->


</body>
</html>