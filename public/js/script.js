// inisisasi
function inisiasi() {
  var interval;
  daftarObrolan();
}

//proses updating dan kirim pesan
function daftarObrolan() {
  $(document).ready(function () {
    list = "";
    $.ajax({
      url: "http://localhost/market/public/chat/getObrolan",
    }).done(function (data) {
      var temanObrol = JSON.parse(data);
      for (var i = 0; i < temanObrol.length; i++) {
        var list =
          "<li>" +
          '<div style="cursor: pointer;" onclick="manage(\'' +
          temanObrol[i]["mb_username"] +
          "')\">" +
          '<img class="contacts-list-img" src="../public/img/' +
          temanObrol[i]["mb_picture"] +
          '" alt="User Avatar">' +
          '<div class="contacts-list-info">' +
          '<span class="contacts-list-name text-dark">' +
          temanObrol[i]["mb_name"] +
          "</span>" +
          "</div>" +
          "</div>" +
          "</li>";
        $(list).appendTo("#obrolan");
      }
    });
  });
}

//manage obrolan
function manage(mb_username) {
  this.teman = mb_username;
  clearInterval(this.intervalID);
  this.intervalID = setInterval(function () {
    loadHistoriObrolan(mb_username);
  }, 500);
}

//menampilkan histori obrolan
function loadHistoriObrolan(mb_username) {
  $.ajax({
    url: "http://localhost/market/public/chat/getHistori",
    method: "POST",
    data: {
      temanObrolan: mb_username,
    },
    success: function (response) {
      $("#roomchat").html(response);
    },
  });
}

// membuat kirim data
function kirim() {
  var temanObrolan = this.teman;
  var pesan = document.getElementById("pesan").value;

  $.ajax({
    url: "http://localhost/market/public/chat/getPesan",
    method: "POST",
    data: {
      temanObrolan: temanObrolan,
      pesan: pesan,
    },
    success: function (response) {
      if (response == 1) {
        $("#pesan").val("");
      }
    },
  });
}

// notifikasi retail dan chat
$(function () {
  // update view with notification ajax
  function load_notification(view = "") {
    $.ajax({
      url: "http://localhost/market/public/home/notif",
      method: "POST",
      data: { view: view },
      dataType: "json",
      success: function (data) {
        // console.log(data);
        $(".dropdown-menu").html(data.notification);
        if (data.unseen_notification > 0) {
          $(".count").html(data.unseen_notification);
        }
      },
    });
  }

  load_notification();
  //load new notification
  $(".dropdown-bell").on("click", function () {
    $(".count").html("");
    load_notification("yes");
  });
  setInterval(function () {
    load_notification();
  }, 1000);
});
