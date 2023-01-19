var app = new Vue({
  el: "#app",
  data: {
    JOBS: "",
    records: "Loading...",
    first_name: "",
    last_name: "",
    txtUserName: "",
    txtPassword: "",
    error_message: " "
  },
  mounted: function () {
    this.check_user();
    this.initial();
  },
  methods: {
    check_user: function () {
      axios.get("server/user_data.php?Command=check").then((response) => {
        const check = response.data[0];

        console.log(check);
      });
    },
    initial: function () {
      // axios.get("server/my_jobs_data.php?Command=generate").then((response) => {
      //   if (response.data[0].length > 0) {
      //     this.JOBS = response.data[0];
      //   } else {
      //     this.JOBS = [];
      //     this.records = "No Jobs";
      //   }
      // });
    },
    register: function () {
      this.error_message = "";
      // alert("fsdf");

      // if (this.first_name == "") {
      //   this.error_message = "Please enter First Name";
      //   return;
      // }

      // if (this.last_name == "") {
      //   this.error_message = "Please enter Last Name";
      //   return;
      // }

      if (this.txtUserName == "") {
        this.error_message = "Please enter Email";
        return;
      }else{
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.txtUserName)){

        }else{
          this.error_message = "Please enter valid Email Address";
          return;
        }
      }

      if (this.txtPassword == "") {
        this.error_message = "Please enter Password";
        return;
      }else{
        
        if (this.txtPassword.length < 8) {
          this.error_message = "Minimum password length must be at least 8 characters";
          return;
        }
      }


      axios.get("server/user_data.php?Command=register&first_name="+ this.first_name +"&last_name="+ this.last_name +"&email="+ this.txtUserName +"&password="+ this.txtPassword).then((response) => {
       
        if (response.data == 'Saved') {
          alert('Thank you for Registering');
          this.first_name = '';
          this.error_message = '';
          this.last_name = '';
          this.txtUserName = '';
          this.txtPassword = '';

        }else{
          if (response.data == 'Already Exists') {
            alert('THe Email Address is already Exists, Please login');
          }else{
            alert('Please try again later');
          }
          
          
        }
      });
      
    },
    toRegister: function () {
      window.location.href = "register.php";
    },
  },
});

document.getElementById("pill-1").style.color = "black";
document.getElementById("pill-2").style.color = "black";
document.getElementById("pill-3").style.color = "black";
document.getElementById("pill-4").style.color = "black";

function openNav() {
  document.getElementById("myNav").style.width = "100%";

  document.getElementById("pill-1").style.color = "#818181";
  document.getElementById("pill-2").style.color = "#818181";
  document.getElementById("pill-3").style.color = "#818181";
  document.getElementById("pill-4").style.color = "#818181";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
  document.getElementById("pill-1").style.color = "black";
  document.getElementById("pill-2").style.color = "black";
  document.getElementById("pill-3").style.color = "black";
  document.getElementById("pill-4").style.color = "black";
}
