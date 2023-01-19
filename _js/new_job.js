var app = new Vue({
  el: "#app",
  data: {
    job_name: "",
    CATEGORIES: "",
    SUB_JOBS: [],
    TOTAL: 0,
    id: 1,
  },
  mounted: function () {
    this.SUB_JOBS.push({
      id: 1,
      base: 0,
      advanced: 0,
      cost: 0,
      notes: "",
      cat_ref: "",
      image_name: "",
      url: "_img/new_job/89293416_2845746348848190_2139080574550147072_n.png",
    });

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
      axios.get("server/new_job_data.php?Command=generate").then((response) => {
        this.CATEGORIES = response.data[0];
      });
    },
    onFileSelect: function (e) {
      
      const file = e.target.files[0];
     
    
      const promise3 = new Promise((resolve, reject) => {
        var file_data = file;
        var form_data = new FormData();
        form_data.append("fileToUpload", file_data);
        
      
        $.ajax({
          url: "server/upload_data.php?Command=upload",
          dataType: "script",
          cache: false,
          contentType: false,
          processData: false,
          data: form_data,
          type: "POST",
          success: function (res) {

            const imageAry = JSON.parse(res);
     
            resolve(imageAry[0]);
     
          },
        });
      });
      


      Promise.all([promise3]).then((values) => {
        // let tempSUB_JOBS = this.SUB_JOBS[index];

      for (let index = 0; index < this.SUB_JOBS.length; index++) {
        if (this.SUB_JOBS[index].id == e.target.getAttribute('sub-job-id')) {
          this.SUB_JOBS[index].image_name = values[0];
          this.SUB_JOBS[index].url = "uploads/newjobs/temp/" + values[0];
        }
        
      }
      
      });
    
    },
    save_operation: function () {

      if (this.job_name == "") {
        alert("Please Enter a Job Name");
        return;
      }

      if (this.TOTAL == 0) {
        alert("Please Complete the Order");
        return;
      }


      axios
        .get(
          "server/new_job_data.php?Command=save_operation&job_name=" +
            this.job_name +
            "&sub_jobs=" +
            JSON.stringify(this.SUB_JOBS) +
            "&tot=" +
            this.TOTAL
        )
        .then((response) => {
          if (response.data == "Saved") {
            location.href = "job_payment.php";
          }
        });
    },
    editingCategory: function (sub_job, flag) {
      if (flag == "base") {
        sub_job.base = 1;
        sub_job.advanced = 0;
        sub_job.cost = 12;
      } else {
        sub_job.advanced = 1;
        sub_job.base = 0;
        sub_job.cost = 23;
      }

      this.makeTotal();
    },
    setCategory: function (sub_job, ref, cost) {
      sub_job.cat_ref = ref;
      sub_job.cost = cost;

      
      for (let index = 0; index < this.CATEGORIES.length; index++) {
        if (this.CATEGORIES[index].REF == ref) {
          sub_job.feature_1 = this.CATEGORIES[index].feature_1;
          sub_job.feature_2 = this.CATEGORIES[index].feature_2;
          sub_job.feature_3 = this.CATEGORIES[index].feature_3;
          sub_job.feature_4 = this.CATEGORIES[index].feature_4;
          sub_job.feature_5 = this.CATEGORIES[index].feature_5;
          sub_job.feature_6 = this.CATEGORIES[index].feature_6;
          sub_job.feature_7 = this.CATEGORIES[index].feature_7;
          sub_job.feature_8 = this.CATEGORIES[index].feature_8;
          sub_job.feature_9 = this.CATEGORIES[index].feature_9;
        }
        
      }

      

      this.makeTotal();
    },
    makeTotal: function () {
      var total = 0;
      for (let index = 0; index < this.SUB_JOBS.length; index++) {
        total = total + parseFloat(this.SUB_JOBS[index].cost) || 0;
      }
      this.TOTAL = total;
    },
    addImage: function () {
      var temp_id = this.id;
      ++temp_id;
      this.id = temp_id;
      this.SUB_JOBS.push({
        id: this.id,
        base: 0,
        advanced: 0,
        cost: 0,
        notes: "",
        image_name: "",
        url: "_img/new_job/89293416_2845746348848190_2139080574550147072_n.png",
      });
    },
    removeImage: function (id) {
      if (this.SUB_JOBS.length != 1) {
        temp_subjobs = [];
        for (let index = 0; index < this.SUB_JOBS.length; index++) {
          if (this.SUB_JOBS[index].id == id) {
          } else {
            temp_subjobs.push(this.SUB_JOBS[index]);
          }
        }
        this.SUB_JOBS = temp_subjobs;
      } else {
        alert("Minimum Image Count - 1");
      }

      this.makeTotal();
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




// $(document).ready(function(){

//   $("#img_file").on("change", function () {
//   console.log('====================================');
//   console.log($("#img_file").prop("files")[0]);
//   console.log('====================================');
//     var file_data = $("#img_file").prop("files")[0];
//     var form_data = new FormData();
//     form_data.append("fileToUpload", file_data);
    
  
//     $.ajax({
//       url: "server/upload_data.php?Command=upload",
//       dataType: "script",
//       cache: false,
//       contentType: false,
//       processData: false,
//       data: form_data,
//       type: "POST",
//       success: function (res) {
//         // alert(res);
//   console.log(res);
//         // // <img src="uploads/store/logo/5ef4ee67d7328.PNG" alt="" width="400" >
//         // document.getElementById("img_path").innerHTML =
//         //   '<img src="uploads/item/books/' + res + '" alt="" width="400" >';
//         // document.getElementById("img_logo").value = res;
//       },
//     });
//   });
// });


// async function upload(file){
//   var file_data = file;
//     var form_data = new FormData();
//     form_data.append("fileToUpload", file_data);
    
  
//     $.ajax({
//       url: "server/upload_data.php?Command=upload",
//       dataType: "script",
//       cache: false,
//       contentType: false,
//       processData: false,
//       data: form_data,
//       type: "POST",
//       success: function (res) {
//         // alert(res);
//         return res;
//   // console.log(res);
//         // // <img src="uploads/store/logo/5ef4ee67d7328.PNG" alt="" width="400" >
//         // document.getElementById("img_path").innerHTML =
//         //   '<img src="uploads/item/books/' + res + '" alt="" width="400" >';
//         // document.getElementById("img_logo").value = res;
//       },
//     });

//     return 'f'
// }

