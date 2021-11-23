var app = new Vue({
  el: "#app",
  data: {
    TESTIMONIALS: [
      {
        REF: "1",
        name: "Suhad Mendis",
        position: "Sales Manager, Slack",
        image_url: "_img/home_page/download (8).png",
        feedback_title: "Lorem ipsum, dolor consectetur",
        stars: 5,
        message:
          "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dicta explicabo quo distinctio ab quisquam. Nesciunt recusandae enim sint! Exercitationem necessitatibus quibusdam esse quo ipsam labore recusandae corrupti illo quae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dicta explicabo quo distinctio ab quisquam. Nesciunt recusandae enim sint! Exercitationem.",
      },
      {
        REF: "2",
        name: "Charlotte Ava",
        position: "Sales Manager, Slack",
        image_url: "_img/home_page/download (7).png",
        feedback_title: "Lorem ipsum",
        stars: 4,
        message:
          "sectetur adipisicing elit. Magni dicta explicabo quo distinctio ab qui",
      },
      {
        REF: "3",
        name: "Amelia Mia",
        position: "Sales Manager, Slack",
        image_url: "_img/home_page/images (2).png",
        feedback_title: "Dolor consectetur",
        stars: 5,
        message:
          "olor sit amet consectetur adipisicing elit. Magni dicta explicabo quo distinctio ab quisquam. Nesciunt recusandae enim sint! Exe",
      },
    ],
    selected_user: {},
  },
  mounted: function () {
    this.$nextTick(function () {
      // Code that will run only after the
      // entire view has been rendered
      this.selected_user = this.TESTIMONIALS[0];
    });
  },
  methods: {
    select_user_testimonial: function (user) {

      if(window.innerWidth < 768){
        document.getElementById("testimonial-feedback-box").scrollIntoView();
      }
      
      this.selected_user = user;
    },
    toHome: function () {
      window.location.href = "index.php";
    },
    toNewJob: function () {
      window.location.href = "new_job.php";
    },
    toMyJobs: function () {
      window.location.href = "my_jobs.php";
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
