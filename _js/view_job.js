var app = new Vue({
  el: "#app",
  data: {
    JOB: "",
    records: "Loading...",
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
      
      const urlString = window.location.href;
      let paramString = urlString.split('?')[1];
      let queryString = new URLSearchParams(paramString);

  
      let REF = '';
      for(let pair of queryString.entries()) {  REF = pair[1]; }

      axios.get("server/view_job_data.php?Command=generate&REF="+REF).then((response) => {
        
          console.log('====================================');
          console.log(response.data[0][0]);
          console.log('====================================');
          this.JOB = response.data[0][0];
          console.log('====================================');
          console.log(this.JOB);
          console.log('====================================');
        
      });
    },
    view_job: function (job) {
      window.location.href = "view_job.php?REF="+job.REF;
      
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
