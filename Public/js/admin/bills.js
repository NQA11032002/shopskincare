$(document).ready(function () {
  let amountPage = 12;
  loadBill();
  lengthListList();

  //search bill
  $(".customer__search--content").keyup(function () {
    loadBill();
  });

  //load bill
  function loadBill() {
    let keyword = getValueInput("customer__search--content");
    let page = getValueInput("customer__pagination--item-page");

    $.post("./Bills/loadBill", { page: page, amountPage: amountPage, keyword: keyword }, function (data) {
      let obj = JSON.parse(data);
      let result = "";

      obj.forEach((element) => {
        result +=
          `<tr>
            <td>` +element.ID +`</td>
            <td>` +element.IDKH +`</td>
            <td>` +element.ngayDat +`</td>
            <td>` +element.phiGD +`</td>
            <td>` +element.tinhTrang +`</td>
            <td class="card-customer__item--action">
                <i class="fa-solid fa-circle-info detail-bill" data-id=`+element.ID +`></i>`;

        if (element.tinhTrang === "Đã duyệt") {
          result += `<i class="fa-solid fa-clipboard-check action-check check-bill" data-status="Đã nhận hàng" data-idkh=` + element.IDKH + ` data-id=` + element.ID + `></i>`;
        } else if (element.tinhTrang === "Đang xử lý") {
          result += `<i class="fa-solid fa-circle-check action-check agree-bill" data-status="Đã duyệt" data-id=` + element.ID + `></i>`;
        }

        result +=
          `<i class="fa-solid fa-trash cancel-bill" data-id=` +
          element.ID +
          `></i>
                                </td>
                            </tr>`;
      });

      $(".table-bill").html(result);

      $(".detail-bill").click(function () {
        let listDetails = document.querySelector(".detail-bills");
        listDetails.style.display = "block";

        // let listBills = document.querySelector(".bills");
        // listBills.style.display = "none";

        let IDDH = $(this).attr("data-id");

        $.post("./Bills/loadDetailBill", { ID: IDDH }, function (data) {
          let result = "";
          let obj = JSON.parse(data);

          obj.forEach((element) => {
            result +=
              `<tr>
                <td>` + element.ID +`</td> 
                <td>` + element.ten +`</td>
                <td>` + element.diaChi +`</td>
                <td>` + element.sdt +`</td>
                <td>` + element.email +`</td> 
                <td>` + element.tenSP +`</td>
                <td>` + element.soLuong +`</td>
                <td>` + element.Size +`</td>
                <td>` + element.tongTien +`</td>
                <td>` + element.cachThanhToan +`</td>
                <td>` + element.ghiChu +`</td>`;

                if(element.status == 0)
                {
                    result += `<td style='color: #b48031'>Đang giao</td>
                              <td><button disabled data-id="`+element.ID+`"  class='btn btn-warning'>Đang giao</button></td>`; 
                }
                else if(element.status == 1)
                {
                    result += `<td style='color: #8B0000'>Đã hủy</td>
                              <td><button disabled data-id="`+element.ID+`" class='btn btn-danger'>Đã hủy</button></td>`; 
                }

                if(element.status == 2)
                {
                  result += `<td style='color: #144339'>Hủy hàng</td>
                            <td><button data-id="`+element.ID+`" class='confirm-cancel-bill btn btn-success'>Xác nhận</button></td>`;
                }

                result += `</tr>`;
          });

          $(".detail-bill__table").html(result);

          $(".confirm-cancel-bill").click(function(){
            let ID = $(this).attr("data-id");

            $.post("./Bills/confirmCancelBill", {ID:ID, IDDH:IDDH}, function(data){
              $(location).attr("href","Bills");
            })
          })
        });

        let detail = document.querySelector(".detail-bills");
        detail.style.transform = `translateX(0%)`;

        let bills = document.querySelector(".bills");
        bills.style.transform = `translateX(100%)`;
      });

      $(".cancel-bill").click(function () {
        let ID = $(this).attr("data-id");

        $.post("./Bills/cancelBill", { ID: ID }, function (data) {
          loadBill();
        });
      });

      $(".action-check").click(function () {
        let ID = $(this).attr("data-id");
        let IDKH = $(this).attr("data-idkh");
        let status = $(this).attr("data-status");

        console.log(status);

        $.post("./Bills/checkBill", { ID: ID, IDKH: IDKH, status: status }, function (data) {
          loadBill();
        });
      });
    });
  }

  setInterval(() => {
    loadBill();
  }, 10000);

  //phân trang cho danh sách bill
  function lengthListList() {
    let keyword = getValueInput("customer__search--content");
    let page = getValueInput("customer__pagination--item-page");

    $.post("./Bills/lengthListBill", { keyword: keyword }, function (data) {
      length = data / amountPage;

      $(".previousPage").click(function () {
        if (page > 0) {
          page = Number(page - 1);
          $(".customer__pagination--item-page").val(page);
          loadBill();
          $(".customer__pagionation--fromPage").html(page);
        }
      });

      $(".nextPage").click(function () {
        if (page < length - 1) {
          page = Number(page + 1);
          $(".customer__pagination--item-page").val(page);
          loadBill();
          $(".customer__pagionation--fromPage").html(page);
        }
      });

      $(".customer__pagination--totalPage").html(parseInt(length > 0 ? length : 0));
      $(".customer__pagination--entries").html(parseInt(length > 0 ? length : 0));
      $(".customer__pagionation--fromPage").html(page);
    });
  }

  //quay lại trang bills
  $(".back-bills").click(function () {
    let detail = document.querySelector(".detail-bills");
    detail.style.transform = `translateX(-120%)`;

    let bills = document.querySelector(".bills");
    bills.style.transform = `translateX(0%)`;

    let details = document.querySelector(".detail-bills");
    details.style.display = "none";

    let listBills = document.querySelector(".bills");
    listBills.style.display = "block";
  });

  function getValueInput(nameClass) {
    let value = $("." + nameClass).val();

    return value;
  }
});
