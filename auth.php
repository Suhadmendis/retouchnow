<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tallees - Live Stream</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="_css/login_style.css?v=0000000001">
    <script src="js/user.js?v=0000000001"></script>

</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div id="heading-box">
                    <div id="top-pill">
                        <p>Webinar</p>
                    </div>
                    <!-- <h1 class="header-text text-hightlight">Webinar</h1> -->
                    <h1 class="header-text">Initiation and Optimization of <br>insulin therapy in the role of <br>conventional insulin <br>and analogues</h1>

                    <br><br><br><br>
                </div>
                <div id="image-box">
                    <img src="_img/16/speaker.png" alt="" id="image-dr">
                </div>
            </div>
            <div class="col-md-2">
                <div id="date-box">
                    <img src="_img/16/date.png" alt="" id="date-image">
                </div>
            </div>
            <div class="col-md-3">
                <div id="login-form-box">
                    <!-- <div id="login-upper-stripe"></div> -->
                    <div id="login-bottom">
                    
                        <p class="input-label">Name</p>
                        <input type="text" id="txtUserName" class="login-input">
                        <p class="input-label">Mobile</p>
                        <input type="text" id="txtPassword" class="login-input">
                        <br>
                        
                        <p class="input-label">Name as it should appear<br> in the certificate participation*</p>
                        <input type="text" id="display_name" class="login-input">

                        <button id="info-button" onClick="IsValiedData()">
                            Sign in
                        </button>

                        <br><br>
                        *Mandatory
                    </div>
                </div>
            </div>
        </div>
    </div>


<br><br><br>



    <div id="bottom-image-area">
<img id="bottom-image" src="_img/16/bottom.png" alt="">
</div>

<script>
    var elem = document.getElementById("txtPassword");
    elem.onkeyup = function (e) {
        if (e.keyCode == 13) {
            IsValiedData();
        }
    }


</script>


</body>
</html>