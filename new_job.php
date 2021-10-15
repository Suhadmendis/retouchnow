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

  <link rel="stylesheet" href="_css/new_job.css">

</head>

<body>
  <div id="app">

  <?php include 'header.php'; ?>

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
        <div class="col-md-6">
          <div class="job-name-box">
            <h2 class="job-name">Job Name:</h2>
            <input class="job-name-input" v-model="job_name" placeholder="Enter Job Name" type="text">
          </div>
        </div>
        <div class="col-md-6">
          <h5 class="job-ref">Job Number: JOB/00002334</h5>
        </div>
      </div>

      <div class="row">


        <div class="col-md-12" v-for="sub_job in SUB_JOBS">
          <div class="photo-box">
            <div class="row">
              <div class="col-md-6">
                <div class="image-box">
                  <img class="image" :src="sub_job.url" alt="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="close-button-area">
                  <i class="fas fa-times-circle close-icon" @click="removeImage(sub_job.id)"></i>
                </div>
                <p class="editing-category">
                  Editing Category
                </p>
                <button :class="sub_job.base == 1 ? 'button button-primary' : 'button button-default'" @click="editingCategory(sub_job,'base')">Base Retouch</button>
                <button :class="sub_job.advanced == 1 ? 'button button-primary' : 'button button-default'" @click="editingCategory(sub_job,'advanced')">Advanced Retouch</button>
                <!-- <button class="button button-primary">My Jobs</button> -->
                <p class="cost">Cost: $ {{ sub_job.cost.toFixed(2) }}</p>
                <p class="note">Notes / Special Instructions</p>
                <textarea name="" id="" class="form-control note-input"></textarea>
              </div>
            </div>
          </div>
        </div>


   


        <div class="col-md-12">
          <div class="job-total-area">
            <div class="row">
              <div class="col-md-6">
                <h4 class="job-total-name">Job Name: {{job_name}}</h4>
              </div>
              <div class="col-md-6">
                <h4 class="job-total-total">Total Cost: $ {{ TOTAL.toFixed(2) }}</h4>
              </div>
            </div>
          </div>
        </div>



        <div class="col-md-12">
          <button class="button button-border button-left" @click="addImage()">Add More Photos</button>
          <button class="button button-primary button-right">Continue</button>
        </div>
        


      </div>


    </div>

<br><br>
<?php include 'footer.php'; ?>
  </div>






  <script src="_js/new_job.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script> -->


</body>

</html>