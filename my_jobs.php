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

    <link rel="stylesheet" href="_css/my_job.css">
    
</head>
<body>
  <div id="app">

  <?php include 'header.php'; ?>

      <div class="wrapper">
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
                  
                  <tr class="table-header" v-for="job in JOBS" @click="view_job(job)">
                    <td>{{ job.name }}</td>
                    <td>{{ job.sub_jobs.length }}</td>
                    <td>{{ job.status }}</td>
                  </tr>

                  <tr class="table-header" v-if="JOBS == ''">
                   
                    <td colspan=3 style="text-align: center" >{{ records }}</td>
                    
                  </tr>

                  

                </tbody>
              </table>

              <br>


          </div>
        </div>
      </div>
      </div>



<?php include 'footer.php'; ?>

  </div>








    <script src="_js/my_jobs.js" ></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script> -->


</body>
</html>