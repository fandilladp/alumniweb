// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

setTimeout(() => {
  let url = "http://localhost:8080/algoritma/refresh";
$.ajax({
    url: url,
    async: false,
  });
}, 500);
setTimeout(() => {
  
  let url = "http://localhost:8080/algoritma/fetch";
  $.ajax({
      url: url,
      async: false,
      dataType: 'json',
      success: function(data) {
          data1 = data.kepuasan;
          data2 = data.bekerja;
          data3 = data.hubungandenganprodi;
          data4 = data.bidangpekerjaan;
  }});
  let bidangpekerjaan = JSON.parse(data4);
  let sisakepuasan = 100 - data1;
  let sisabekerja = 100 - data2;
  let sisahubungan = 100 - data3;

  
  // Pie Chart Example
  var ctx = document.getElementById("kepuasanprodi");
  var myPieChart = new Chart(ctx, {
    type: 'pie',
    
    data: {
      labels: ["Suka", "Tidak Puas"],
      datasets: [{
        data: [data1, sisakepuasan],
        backgroundColor: ['#007bff', '#dc3545'],
      }],
    },
  });
  
  var ctx = document.getElementById("statusbekerja");
  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["Bekerja", "Tidak Bekerja"],
      datasets: [{
        data: [data2, sisabekerja],
        backgroundColor: ['#007bff', '#dc3545'],
      }],
    },
  });
  
  var ctx = document.getElementById("hubungandenganprodi");
  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["ya", "tidak"],
      datasets: [{
        data: [data3, sisahubungan],
        backgroundColor: ['#007bff', '#dc3545'],
      }],
    },
  });
  var ctx = document.getElementById("bidangkerja");
  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["Dosen", "Software Developer", "Freelance"],
      datasets: [{
        data: [bidangpekerjaan.dosen, bidangpekerjaan.softwareDevelopment, bidangpekerjaan.freelance],
        backgroundColor: ['#007bff', ' #fd7e14', ' #28a74'],
      }],
    },
  });
}, 1000);
