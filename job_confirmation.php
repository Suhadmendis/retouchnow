
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RetouchNow</title>


  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

  <link rel="stylesheet" href="_css/header.css">
  <link rel="stylesheet" href="_css/style.css">
  <link rel="stylesheet" href="_css/footer.css">

  <link rel="stylesheet" href="_css/job_confirmation.css">

</head>

<body>
  <div id="app">

  <?php include 'header.php'; ?>

    <div class="container">
      <div class="row">
        <div class="offset-md-1 col-md-10">
          <div class="thank-you-box">
            <h1 class="thank-you-text">Thank you!</h1>
          <p class="thank-you-title-text">Lorem ipsum dolor sit amet consectetur adipisicing  qui!</p>
          <p class="thank-you-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, distinctio. Veritatis consequuntur ducimus tempora debitis doloremque hic, quasi perferendis non at, labore architecto? Accusantium quasi nulla ducimus quo, sequi qui.</p>
          </div>
        </div>
      </div>
    </div>
   


    <div id="progress-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
               <div class="progress-box-active">

                 <div class="progress-icon-area">
                  <i class="fas fa-shopping-cart"></i>
                 </div>
                 <p class="progress-head-text">Lorem ipsum dolor</p>
                 <p class="progress-des-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint repudiandae suscipit veniam vero accusamus a, saepe architecto harum aliquid.</p>

               </div>
          </div>
          <div class="col-md-4">
               <div class="progress-box">

                 <div class="progress-icon-area">
                  <i class="far fa-edit"></i>
                 </div>
                 <p class="progress-head-text">Lorem ipsum dolor</p>
                 <p class="progress-des-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint repudiandae suscipit veniam vero accusamus a, saepe architecto harum aliquid.</p>

               </div>
          </div>
          <div class="col-md-4">
               <div class="progress-box">

                 <div class="progress-icon-area">
                  <i class="fas fa-check-double"></i>
                 </div>
                 <p class="progress-head-text">Lorem ipsum dolor</p>
                 <p class="progress-des-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint repudiandae suscipit veniam vero accusamus a, saepe architecto harum aliquid.</p>

               </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="button-box">
            <button class="button button-default" @click="toHome">Home</button>
            <button class="button button-default" @click="toNewJob">New Job</button>
            <button class="button button-primary" @click="toMyJobs">My Jobs</button>
          </div>
        </div>
      </div>
    </div>






<br><br>

  <?php include 'footer.php'; ?>


  </div>






  <script src="_js/script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script> -->


</body>

</html>