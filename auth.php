<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <script src="js/user.js?v=0000000001"></script>

</head>
<body>
    
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