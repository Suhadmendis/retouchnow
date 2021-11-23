function GetXmlHttpObject() {
  var xmlHttp = null;
  try {
    // Firefox, Opera 8.0+, Safari
    xmlHttp = new XMLHttpRequest();
  } catch (e) {
    // Internet Explorer
    try {
      xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
  return xmlHttp;
}

// codes for log on button

function IsValiedData() {
  if (document.getElementById("txtUserName").value == "") {
    document.getElementById("txtUserName").focus();
    document.getElementById("error-message-element").innerHTML = "Please Enter Email";
    return false;
  } else if (document.getElementById("txtPassword").value == "") {
    document.getElementById("error-message-element").innerHTML = "Please Enter Password";
    document.getElementById("txtPassword").focus();
    return false;
  } else {
    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
      alert("Browser does not support HTTP Request");
      return;
    }

    var url = "CheckUsers.php";

    url = url + "?Command=" + "CheckUsers";
    url = url + "&UserName=" + document.getElementById("txtUserName").value;
    url = url + "&Password=" + document.getElementById("txtPassword").value;
    //alert(url);
    xmlHttp.onreadystatechange = CheckUsers;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
  }
}

// logon button stateChanged
function CheckUsers() {
  var XMLAddress1;

  if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
    var val = xmlHttp.responseText;

    if (val == "OK") {
      location.href = "index.php";
    } else if (val == "Invalied Connection") {
      alert(xmlHttp.responseText);
    } else {
      alert(xmlHttp.responseText);
      // document.getElementById("txterror").innerHTML = "Invalied UserName or Password";
    }
  }
}

function register() {
  if (document.getElementById("name").value == "") {
    alert("Please Endter Name");
    document.getElementById("name").focus();
    return false;
  } else if (document.getElementById("mobile").value == "") {
    alert("Please Endter Mobile");
    document.getElementById("mobile").focus();
    return false;
  } else if (document.getElementById("email").value == "") {
    alert("Please Endter email");
    document.getElementById("email").focus();
    return false;
  } else if (document.getElementById("speciality").value == "") {
    alert("Please Endter Speciality");
    document.getElementById("speciality").focus();
    return false;
  } else {
    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
      alert("Browser does not support HTTP Request");
      return;
    }

    var url = "CheckUsers.php";

    url = url + "?Command=" + "register";

    url = url + "&name=" + document.getElementById("name").value;
    url = url + "&mobile=" + document.getElementById("mobile").value;
    url = url + "&email=" + document.getElementById("email").value;
    url = url + "&speciality=" + document.getElementById("speciality").value;
    //alert(url);
    xmlHttp.onreadystatechange = CheckUsersReg;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
  }
}

// logon button stateChanged
function CheckUsersReg() {
  var XMLAddress1;

  if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
    var val = xmlHttp.responseText;

    if (val == "Saved") {
      // location.href = "index.php";
      document.getElementById("name").value = "";
      document.getElementById("mobile").value = "";
      document.getElementById("email").value = "";
      document.getElementById("speciality").value = "";

      alert("Thank you for Registering!");
    } else if (val == "Invalied Connection") {
      alert(xmlHttp.responseText);
    } else {
      alert(xmlHttp.responseText);
      // document.getElementById("txterror").innerHTML = "Invalied UserName or Password";
    }
  }
}

function showPostion(position) {
  alert("dsf");
  alert(position.coords.latitude);
}

function logout() {
  //alert("ok");

  xmlHttp = GetXmlHttpObject();
  if (xmlHttp == null) {
    alert("Browser does not support HTTP Request");
    return;
  }

  var url = "CheckUsers.php";

  url = url + "?Command=" + "logout";

  xmlHttp.onreadystatechange = logout_state_Changed;
  xmlHttp.open("GET", url, true);
  xmlHttp.send(null);
}

function logout_state_Changed() {
  var XMLAddress1;
  if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
    location.href = "index.php";
  }
}

function showData() {
  xmlHttp = GetXmlHttpObject();
  if (xmlHttp == null) {
    alert("Browser does not support HTTP Request");
    return;
  }

  var url = "CheckUsers.php";

  url = url + "?Command=" + "showDataRegister";

  xmlHttp.onreadystatechange = resultData;
  xmlHttp.open("GET", url, true);
  xmlHttp.send(null);
}

function resultData() {
  var XMLAddress1;
  if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
    var data = JSON.parse(xmlHttp.responseText);

    console.log(data[0]);

    $(document).ready(function () {
      var table = $("#example").DataTable({
        dom: "Bfrtip",
        buttons: ["copy", "csv", "excel", "pdf", "print"],
      });
      for (let index = 0; index < data[0].length; index++) {
        console.log(index);
        table.row
          .add([
            data[0][index].name,
            data[0][index].mobile,
            data[0][index].email,
            data[0][index].speciality,
          ])
          .draw();
      }
    });

    $(document).ready(function () {
      var table = $("#example1").DataTable({
        dom: "Bfrtip",
        buttons: ["copy", "csv", "excel", "pdf", "print"],
      });
      for (let index = 0; index < data[1].length; index++) {
        console.log(index);
        table.row.add([data[1][index].user_name, data[1][index].mobile]).draw();
      }
    });

    // $("#pallet").show();
  }
}

function lock_acc() {
  xmlHttp = GetXmlHttpObject();
  if (xmlHttp == null) {
    alert("Browser does not support HTTP Request");
    return;
  }

  var url = "CheckUsers.php";

  url = url + "?Command=" + "lock_acc";
  url = url + "&Calendar1=" + document.getElementById("Calendar1").value;

  xmlHttp.onreadystatechange = lock_acc_Changed;
  xmlHttp.open("GET", url, true);
  xmlHttp.send(null);
}

function lock_acc_Changed() {
  var XMLAddress1;

  if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
    //location.href="index.php";
    alert(xmlHttp.responseText);
  }
}

function updated() {
  xmlHttp = GetXmlHttpObject();
  if (xmlHttp == null) {
    alert("Browser does not support HTTP Request");
    return;
  }

  var url = "CheckUsers.php";

  url = url + "?Command=" + "updated";
  url = url + "&txtcashpay=" + document.getElementById("txtcashpay").value;
  url = url + "&txtchqPay=" + document.getElementById("txtchqPay").value;
  url = url + "&txtdep=" + document.getElementById("txtdep").value;
  url = url + "&txtJe=" + document.getElementById("txtJe").value;
  url = url + "&txtBt=" + document.getElementById("txtBt").value;
  url = url + "&txtRECCABOOK=" + document.getElementById("txtRECCABOOK").value;
  url = url + "&DTfrom=" + document.getElementById("DTfrom").value;
  url = url + "&DTTO=" + document.getElementById("DTTO").value;

  alert(url);

  xmlHttp.onreadystatechange = updated_Changed;
  xmlHttp.open("GET", url, true);
  xmlHttp.send(null);
}

function updated_Changed() {
  var XMLAddress1;

  if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
    //location.href="index.php";
    alert(xmlHttp.responseText);
  }
}
//////////////////////////////////////////////////////////////////////////////////////////////

function newuser() {
  //alert("ok");

  xmlHttp = GetXmlHttpObject();
  if (xmlHttp == null) {
    alert("Browser does not support HTTP Request");
    return;
  }

  location.href = "logon_users.php";
}
