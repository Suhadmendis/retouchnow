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


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">

      <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
      <script src="_js/axios.min.js"></script>

    <link rel="stylesheet" href="_css/header.css">
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="_css/footer.css">

    <link rel="stylesheet" href="_css/new_job.css">
    
    
</head>
<body>
  <div id="app">

  <?php include 'header.php'; ?>

      <div class="wrapper">
        <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="page-title">{{ JOB.name }}</h2>
          </div>
        </div>


        <div class="col-md-12" v-for="sub_job in JOB.sub_jobs">
          <div class="photo-box">
            <div class="row">
              <div class="col-md-6">
                <div class="image-box">
                  <img class="image" :src="'uploads/newjobs/temp/'+sub_job.url"  alt="">
                </div>
                
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <p class="editing-category">
                      Editing Category
                    </p>
                    <!-- <button :class="sub_job.cat_ref == category.REF ? 'button button-primary' : 'button button-default'" v-for="category in CATEGORIES" @click="setCategory(sub_job,category.REF,category.cost)">{{ category.name }}</button> -->
                    <!-- <button class="button button-primary">My Jobs</button> -->
                    <p class="cat-features">{{ sub_job.category[0].feature_1 }}</p>
                    <p class="cat-features">{{ sub_job.category[0].feature_2 }}</p>
                    <p class="cat-features">{{ sub_job.category[0].feature_3 }}</p>
                    <p class="cat-features">{{ sub_job.category[0].feature_4 }}</p>
                    <p class="cat-features">{{ sub_job.category[0].feature_5 }}</p>
                    <p class="cat-features">{{ sub_job.category[0].feature_6 }}</p>
                    <p class="cat-features">{{ sub_job.category[0].feature_7 }}</p>
                    <p class="cost">Cost: $ {{ sub_job.cost }}</p>
                    <p class="note">Notes / Special Instructions</p>
                    <p name=""  class="note-text">{{ sub_job.remark }}</p>
                  </div>
                  <div class="col-md-6">
                    <div class="close-button-area">
                      <button type="button"  class="btn btn-primary" v-if="JOB.status == 'Delivered'">
                        <span class="badge badge-primary" tooltip="too" >{{ JOB.status }}</span>
                      </button>
                      
                      <button type="button"  class="btn btn-info" v-if="JOB.status == 'Processing'">
                        <span class="badge badge-info" tooltip="too" >{{ JOB.status }}</span>
                      </button>
                      
                      <button type="button"  class="btn btn-success" v-if="JOB.status == 'Emailed'">
                        <span class="badge badge-success" tooltip="too" >{{ JOB.status }}</span>
                      </button>
                    
                    </div>

                  </div>
                </div>
                
                
                
                
                
<!-- 
                <button type="button" class="btn btn-secondary">
                  <span class="badge badge-secondary">4</span>
                </button>

                <button type="button" class="btn btn-danger">
                  <span class="badge badge-danger">4</span>
                </button>
                
                <button type="button" class="btn btn-warning">
                  <span class="badge badge-warning">4</span>
                </button>
                
                <button type="button" class="btn btn-dark">
                  <span class="badge badge-dark">4</span>
                </button>
                 -->
              
                
              </div>
            </div>
          </div>
        </div>




      </div>
     


      
      
      </div>



<?php include 'footer.php'; ?>

  </div>








    <script src="_js/view_job.js" ></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script> -->


</body>
</html>