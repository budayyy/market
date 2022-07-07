$(function () {
  // chart terbanyak
  $.get("http://localhost/market/public/laporan/dataChart", function (data) {
    var cData = JSON.parse(data);
    var ctx = document.getElementById("terbanyakChart").getContext("2d");
    var barChart = new Chart(ctx, {
      type: "bar",
      data: {
        labels: [
          "January",
          "February",
          "Maret",
          "April",
          "May",
          "Juny",
          "August",
          "September",
          "October",
          "November",
          "Desember",
        ],
        datasets: [
          {
            label: "",
            data: cData.terbanyak,
            // [2, 4, 8, 5, 100, 7, 8, 9, 4, 2, 3, 6],
            backgroundColor: [
              "rgba(255, 99, 132, 0.2)",
              "rgba(54, 162, 235, 0.2)",
              "rgba(255, 206, 86, 0.2)",
              "rgba(255, 99, 132, 0.2)",
              "rgba(75, 192, 192, 0.2)",
              "rgba(255, 206, 86, 0.2)",
              "rgba(255, 99, 132, 0.2)",
              "rgba(75, 192, 192, 0.2)",
              "rgba(255, 206, 86, 0.2)",
              "rgba(255, 99, 132, 0.2)",
              "rgba(75, 192, 192, 0.2)",
            ],
            borderColor: [
              "rgba(255,99,132,1)",
              "rgba(54, 162, 235, 1)",
              "rgba(255, 206, 86, 1)",
              "rgba(75, 192, 192, 1)",
            ],
            borderWidth: 1,
          },
        ],
      },
      options: {
        scales: {
          yAxes: [
            {
              ticks: {
                beginAtZero: true,
              },
            },
          ],
        },
      },
    });

    // chart tertinggi
    var cty = document.getElementById("tertinggiChart").getContext("2d");
    var barChart = new Chart(cty, {
      type: "line",
      data: {
        labels: [
          "January",
          "February",
          "Maret",
          "April",
          "May",
          "Juny",
          "August",
          "September",
          "October",
          "November",
          "Desember",
        ],
        datasets: [
          {
            label: "",
            data: cData.tertinggi,
            // [2, 4, 8, 5, 5, 7, 8, 9, 4, 2, 3, 6],
            backgroundColor: [
              "rgba(255, 99, 132, 0.2)",
              "rgba(54, 162, 235, 0.2)",
              "rgba(255, 206, 86, 0.2)",
              "rgba(255, 99, 132, 0.2)",
              "rgba(75, 192, 192, 0.2)",
              "rgba(255, 206, 86, 0.2)",
              "rgba(255, 99, 132, 0.2)",
              "rgba(75, 192, 192, 0.2)",
              "rgba(255, 206, 86, 0.2)",
              "rgba(255, 99, 132, 0.2)",
              "rgba(75, 192, 192, 0.2)",
            ],
            borderColor: [
              "rgba(255,99,132,1)",
              "rgba(54, 162, 235, 1)",
              "rgba(255, 206, 86, 1)",
              "rgba(75, 192, 192, 1)",
            ],
            borderWidth: 1,
          },
        ],
      },
      options: {
        scales: {
          yAxes: [
            {
              ticks: {
                beginAtZero: true,
              },
            },
          ],
        },
      },
    }); // akhir cut
  });
});

// mencari pencarian kategori penjualan
$(document).ready(function () {
  $("#kategoriPenjualan").change(function () {
    var kategori_id = $(this).val();
    $.ajax({
      url: "http://localhost/market/public/laporan/penjualan_kategori",
      method: "POST",
      data: { kategori_id: kategori_id },
      success: function (data) {
        $("#laporan.penjualan").html(data);
      },
    });
  });
});

// mencari pencarian kategori terbanyak
$(document).ready(function () {
  $("#kategoriTerbanyak").change(function () {
    var kategori_id = $(this).val();
    $.ajax({
      url: "http://localhost/market/public/laporan/terbanyak_kategori",
      method: "POST",
      data: { kategori_id: kategori_id },
      success: function (data) {
        $("#laporan.terbanyak").html(data);
      },
    });
  });
});

// mencari pencarian kategori periode
$(document).ready(function () {
  $("#periode_kategori").change(function () {
    var kategori_id = $(this).val();
    $.ajax({
      url: "http://localhost/market/public/laporan/periode_kategori",
      method: "POST",
      data: { kategori_id: kategori_id },
      success: function (data) {
        $("#laporan.bulan").html(data);
      },
    });
  });
});
