$(document).ready(function () {
  apiListBill();

  //tìm kiếm
  $(".events_search").keyup(function () {
    apiListBill();
  });

  function apiListBill() {
    let keyword = $(".events_search").val();

    $.post("./Histories/apiListBill", { keyword: keyword }, function (data) {
      let obj = JSON.parse(data);
      let result = "";
      obj.forEach((element) => {
        result +=
          "<tr>" +
          "<td>" +
          element.ID +
          "</td>" +
          "<td>" +
          element.hoTen +
          "</td>" +
          "<td>" +
          element.tenSP +
          "</td>" +
          "<td class='events-description'>" +
          element.soLuong +
          "</td>" +
          "<td>" +
          element.total +
          "</td>" +
          "<td>" +
          element.ngayBan +
          "</td>" +
          "<td class='card-customer__item--action'>" +
          "<i class='fa-solid fa-trash event--delete' data-idbills='" +
          element.ID +
          "'></i>" +
          "</td>" +
          "</tr>";
      });

      $(".list-bills").html(result);

      $(".event--delete").click(function () {
        let ID = $(this).attr("data-idbills");

        $.post("./Histories/removeBill", { ID: ID }, function () {
          apiListBill();
        });
      });
    });
  }
});
