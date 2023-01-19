var app = new Vue({
  el: "#app",
  data: {
    JOBS: "",
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
      axios.get("server/my_jobs_data.php?Command=generate").then((response) => {
        if (response.data[0].length > 0) {
          this.JOBS = response.data[0];
        } else {
          this.JOBS = [];
          this.records = "No Jobs";
        }
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
