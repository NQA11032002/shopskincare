/* -------------------------------------- Open search --------------------------------------  */
document.querySelector(".cart__Contain").style.display = "none";
document.querySelector(".search__Content").style.display = "none";

function openSearch() {
  if (document.querySelector(".search__Content").style.display === "none") {
    document.querySelector(".search__Content").style.display = "block";
  } else {
    document.querySelector(".search__Content").style.display = "none";
  }

  document.querySelector(".cart__Contain").style.display = "none";
}

function onpenCart() {
  if (document.querySelector(".cart__Contain").style.display === "none") {
    document.querySelector(".cart__Contain").style.display = "grid";
  } else {
    document.querySelector(".cart__Contain").style.display = "none";
  }

  document.querySelector(".search__Content").style.display = "none";
}
$(".closeSearch").click(function () {
  document.querySelector(".search__Content").style.display = "none";
  document.querySelector(".cart__Contain").style.display = "none";
});

$(".label-event").click(function () {
  document.querySelector(".event").style.display = "none";
});

$(".close-banner__event").click(function () {
  document.querySelector("#check-event").checked = false;
  document.querySelector(".event").style.display = "none";
});

/* -------------------------------------- Lọc sản phẩm --------------------------------------  */

$(document).ready(function () {
  /* -------------------------------------- Banner Event --------------------------------------  */
  loadBannerEvent();

  function loadBannerEvent() {
    $.post("./TrangChu/loadBannerEvent", function (data) {
      let obj = JSON.parse(data);
      let length = Object.keys(obj).length;

      if (length <= 0) {
        document.querySelector("#check-event").checked = false;
        document.querySelector(".event").style.display = "none";
      } else {
        let src = obj[length - 1]["image"];
        document.querySelector(".event-image").setAttribute("src", src);
      }
    });
  }

  scrolltop();
  /* -------------------------------------- Scroll back to top --------------------------------------  */
  function scrolltop() {
    var id_button = "#scrollTop";

    // Kéo xuống khoảng cách 220px thì xuất hiện button
    var offset = 500;

    // THời gian di trượt là 0.5 giây
    var duration = 100;

    // Thêm vào sự kiện scroll của window, nghĩa là lúc trượt sẽ
    // kiểm tra sự ẩn hiện của button
    $("html,body").scroll(function () {
      if ($(this).scrollTop() > offset) {
        $(id_button).fadeIn(duration);
      } else {
        $(id_button).fadeOut(duration);
      }
    });

    // Thêm sự kiện click vào button để khi click là trượt lên top
    $(id_button).click(function (event) {
      $("html, body").animate({ scrollTop: 0 }, duration);
    });
  }
  /*-------------------------------------- Load Categories -------------------------------------- */
  loadCategories();

  function loadCategories() {
    $.post("./SanPham/getCategories", function (data) {
      var obj = JSON.parse(data);
      var mask = "";
      var cleanSkin = "";
      var skinCare = "";
      var makeUp = "";

      obj.forEach((item) => {
        if (item.Loai == 1) {
          mask += "<li><a href='SanPham&title=" + item.tenTL + "&page=0&IDLoai=" + item.ID + "'>-" + item.tenTL + "</a></li>";
        } else if (item.Loai == 0) {
          cleanSkin += "<li><a href='SanPham&title=" + item.tenTL + "&page=0&IDLoai=" + item.ID + "'>-" + item.tenTL + "</a></li>";
        } else if (item.Loai == 2) {
          skinCare += "<li><a href='SanPham&title=" + item.tenTL + "&page=0&IDLoai=" + item.ID + "'>-" + item.tenTL + "</a></li>";
        } else if (item.Loai == 3) {
          makeUp += "<li><a href='SanPham&title=" + item.tenTL + "&page=0&IDLoai=" + item.ID + "'>-" + item.tenTL + "</a></li>";
        }
      });

      $(".Categories-Mask").html(mask);
      $(".Categories-CleanSkin").html(cleanSkin);
      $(".Categories-SkinCare").html(skinCare);
      $(".Categories-MakeUp").html(makeUp);
      $(".Categories-Mask__Mobile").html(mask);
      $(".Categories-CleanSkin__Mobile").html(cleanSkin);
      $(".Categories-SkinCare__Mobile").html(skinCare);
      $(".Categories-MakeUp__Mobile").html(makeUp);
    });
  }

  /*-------------------------------------- Load Product -------------------------------------- */
  var sorted = "All";
  var page = 0;

  filter_data();
  Pagination();

  //Lấy giá trị selection
  $(".MainProduct__select").change(function () {
    sorted = $(this).children("option:selected").val();
    filter_data();
  });

  function filter_data() {
    var brand = getValue("rdBrand");
    var origin = getValue("rdProduce");
    var size = getValue("rdSize");
    var category = getValue("rdCategory");
    var color = getValue("rdColor");
    var fromPrice = $(".minimum__Price").val();
    var toPrice = $(".maximum__Price").val();
    var url = location.href.indexOf("Sale");
    var reduce = 0;
    var countProduct = 9;
    var UrlCategories = location.href.split("IDLoai=");

    if (UrlCategories[1]) {
      category = Array(UrlCategories[1]);
    }

    if (screen.width <= 736) {
      countProduct = 6;
    } else if (screen.width > 736 && screen.width <= 1023) {
      countProduct = 12;
    }

    if (url != -1) {
      reduce = 1;
    }

    $.ajax({
      url: "./Ajax/show",
      type: "POST",
      data: { brand: brand, origin: origin, size: size, color: color, fromPrice: fromPrice, toPrice: toPrice, category: category, sorted: sorted, reduce: reduce, page: page, countProduct: countProduct },
      success: function (data) {
        var kq = "";
        var obj = JSON.parse(data);

        obj.forEach((element) => {
          var giaGiam = element.giaSP * (element.giaGiam * 0.01);

          var total = element.giaSP - giaGiam;
          var price = changedPrice(total);

          var priceOrigin = element.giaSP - 0;
          var priceSP = changedPrice(priceOrigin);

          kq +=
            "<div class='prodDuct__sale pageProduct'>" +
            "<div class='User__Choose'>" +
            "<label for='modal-cart__overplay' class='Choose User__Choose__Cart'>" +
            "<a data-value='" +
            element.IDSP +
            "' data-size='" +
            element.size +
            "' class='Cart--shopping'><i class='fa-solid fa-cart-shopping'></i></a>" +
            "</label>" +
            "<label for='quickView__overplay' class='Choose User__Choose__Look'>" +
            "<a data-tensp='" +
            element.tenSP +
            "' data-idsp='" +
            element.IDSP +
            "' data-idloai='" +
            element.IDLoai +
            "' class='Cart--Look'><i class='fa-solid fa-magnifying-glass'></i></a>" +
            "   </label>" +
            "<div class='Choose User__Choose__Love'>" +
            "<a class='choose--Love' data-id='" +
            element.IDSP +
            "' ><i class='fa-solid fa-heart'></i></a>" +
            "</div>" +
            "</div>";
          if (element.giaGiam > 0) {
            kq += "<div class='total__Sale total--hot'>" + element.giaGiam + "%</div>";
          }

          kq +=
            "<div class='product-Contain product-Contain__pageProduct'>" +
            "<div class='product-Contain__Image'>" +
            "<a href='ChiTietSanPham&title=Chi Tiết Sản Phẩm&IDLoai=" +
            element.IDLoai +
            "&ID=" +
            element.IDSP +
            "'>" +
            "<img class='prodDuct__sale__Image--new product-Image' src='" +
            element.image +
            "' alt=''>" +
            "</a>" +
            "</div>" +
            "<div class='product-Contain__Content'>" +
            "<a href='ChiTietSanPham&title=Chi Tiết Sản Phẩm&IDLoai=" +
            element.IDLoai +
            "&ID=" +
            element.IDSP +
            "'>" +
            element.tenSP +
            "</a>" +
            "<div class='product__Total'>";
          if (element.giaGiam > 0) {
            kq += "<div class='reduce__Price'>" + price + "</div>" + "<div class='original__price'>" + priceSP + "</div>";
          } else {
            kq += "<div class='reduce__Price'>" + priceSP + "</div>";
          }
          kq +=
            "</div>" +
            "<div class='product-Contain__Review'>" +
            "<div class='stars'>" +
            "<input checked=true class='star-show star-show__Review star-show-0' id='star-show-0' type='radio'/>" +
            "<label class='star-show star-show__Review star-show-0' for='star-show-0'></label>" +
            "<input checked=true class='star-show star-show__Review star-show-1' id='star-show-1' type='radio'/>" +
            "<label class='star-show star-show__Review star-show-1' for='star-show-1'></label>" +
            "<input checked=true class='star-show star-show__Review star-show-2' id='star-show-2' type='radio'/>" +
            "<label class='star-show star-show__Review star-show-2' for='star-show-2'></label>" +
            "<input checked=true class='star-show star-show__Review star-show-3' id='star-show-3' type='radio'/>" +
            "<label class='star-show star-show__Review star-show-3' for='star-show-3'></label>" +
            "<input checked=true class='star-show star-show__Review star-show-4' id='star-show-4' type='radio'/>" +
            "<label class='star-show star-show__Review star-show-4' for='star-show-4'></label>" +
            "</div>" +
            "<div data-idstar='" +
            element.IDSP +
            "' class='amount-Stars'>" +
            "</div>" +
            "</div>" +
            "</div>" +
            "</div>" +
            "</div>";
        });

        $(".MainProduct__Items--Product").html(kq);

        var containAmountStar = document.querySelectorAll(".amount-Stars");

        containAmountStar.forEach((item) => {
          var IDSP = item.getAttribute("data-idstar");

          $.post("./Ajax/getStarProduct", function (data) {
            var objStar = JSON.parse(data);

            objStar.forEach((itemStar) => {
              if (IDSP == itemStar.IDSP) {
                kq1 = "<p>( " + itemStar.amountStar + " )</p>";
                item.innerHTML = kq1;
              }
            });
          });
        });

        $(".choose--Love").click(function () {
          var IDSP = $(this).attr("data-id");

          $.post("./Ajax/increaseFavourite", { IDSP: IDSP }, function (data) {
            if (data != -1) {
              var temp = "<i class='fa-solid fa-circle-check'></i>" + "<p>" + data + "</p>";

              $(".notifyFavourite").html(temp);
              document.querySelector(".notifyFavourite").style.display = "flex";

              $(".notifyFavourite").delay(3000).slideUp(400);
            } else {
              $(location).attr("href", "DangNhap");
            }
          });
        });

        $(".Cart--shopping").click(function () {
          var IDSP = $(this).attr("data-value");
          var size = $(this).attr("data-size");
          let amount = 1;

          IncreaseCart(IDSP, size, amount);
          AmounctCart();
        });

        $(".Cart--Look").click(function () {
          var IDSP = $(this).attr("data-idsp");

          $.post("./Ajax/loadDetail", { IDSP: IDSP }, function (data) {
            var arrDetail = JSON.parse(data);
            var kq = "";

            arrDetail.forEach((item) => {
              var giaGiam = item.giaSP * (item.giaGiam * 0.01);

              var total = item.giaSP - giaGiam;
              var price = changedPrice(total);

              var priceOrigin = item.giaSP - 0;
              var priceSP = changedPrice(priceOrigin);

              kq +=
                "<div class='quickView__Contain'>" +
                "<div class='quickView__column--Left'>" +
                "<a href='ChiTietSanPham&title=Chi Tiết Sản Phẩm&IDLoai=" +
                item.IDLoai +
                "&ID=" +
                item.IDSP +
                "'><img src='" +
                item.image +
                "' alt=''></a>" +
                "</div>" +
                "<div class='quickView__column--Right'>" +
                "<div class='quickView__Row__1 inforProduct--Row1'>" +
                "<div class='quickView__titleProduct'>" +
                "<h1><a href=''>" +
                item.tenSP +
                "</a></h1>" +
                "</div>" +
                "<div>" +
                "<span>Mã sản phẩm: </span>" +
                "<span class='quickView__Row__1--Content'>" +
                item.IDSP +
                "</span>" +
                "</div>" +
                "<div>" +
                "<span>Thương hiệu: </span>" +
                "<span class='quickView__Row__1--Content'>" +
                item.tenBrand +
                "</span>" +
                "</div>" +
                "<div>" +
                "<span>Xuất sứ: </span>" +
                "<span class='quickView__Row__1--Content'>" +
                item.tenSX +
                "</span>" +
                "</div>" +
                "<div>" +
                "<span>Loại: </span>" +
                "<span class='quickView__Row__1--Content'>" +
                item.tenTL +
                "</span>" +
                "</div>" +
                "</div>" +
                "<div class='quickView__Row__2'>" +
                "<del class='quickView__PriceProduct--price'>" +
                priceSP +
                "</del>" +
                "<span class='quickView__PriceProduct--total'>" +
                price +
                "</span>" +
                "<span class='quickView__PriceProduct--Reduce'>" +
                item.giaGiam +
                "%</span>" +
                "</div>" +
                "<div class='quickView__Row__3'>" +
                "<div class='quickView--Size'>Kích thước:</div>" +
                "<input type='radio' class='selectSize checkedSelectSize' name='rdSize' checked='true' value='" +
                item.size +
                "'><span>" +
                item.size +
                "</span>" +
                "</div>" +
                "<div class='function__Mount quickView__Row__4'>" +
                "<span>Số Lượng: </span>" +
                "<input type='button' class='reduce reduce_Increase' value='-'></input>" +
                "<input type='text' class='mount' value='1' min='1'>" +
                "<input type='button' class='increase reduce_Increase' value='+'></input>" +
                "</div>" +
                "<div class='function__BuyOrCart quickView__Row__5'>" +
                "<input type='button' class='increaseCart' value='Thêm vào giỏ hàng'>" +
                "<input type='button' data-id='" +
                item.IDSP +
                "' class='buyProduct' value='Mua ngay'>" +
                "</div>" +
                "</div>" +
                "</div>";
            });

            $(".quickView").html(kq);

            document.querySelector(".modal-cart__Input").checked = false;
            document.querySelector(".quickView__Input").checked = true;

            var amount = 1;

            $(".increase").click(function () {
              amount++;
              updateAmount(amount);
            });

            $(".reduce").click(function () {
              if (amount > 1) {
                amount--;
              }

              updateAmount(amount);
            });

            $(".increaseCart").click(function () {
              IncreaseCart(IDSP, $(".checkedSelectSize").val(), $(".mount").val());
              document.querySelector(".quickView__Input").checked = false;
              document.querySelector(".modal-cart__Input").checked = true;

              AmounctCart();
            });

            $(".buyProduct").click(function () {
              var IDSP = $(this).attr("data-id");
              var Amount = $(".mount").val();
              var Size = $("input[name=rdSize]:checked").val();

              document.querySelector(".quickView__Input").checked = false;

              $.post("./Ajax/increaseCart", { IDSP: IDSP, Size: Size, Amount: Amount }, function (data) {
                if (data == 1) {
                  $(location).attr("href", "DangNhap");
                } else {
                  $(location).attr("href", "GioHang&title=Giỏ hàng");
                }
              });

              AmounctCart();
            });
          });
        });
      },
    });
  }

  $(".Cart--shopping").click(function () {
    var IDSP = $(this).attr("data-value");
    var size = $(this).attr("data-size");
    var amount = 1;
    IncreaseCart(IDSP, size, amount);
    AmounctCart();
  });

 
  /* -------------------------------------- Phân trang --------------------------------------  */

  function Pagination() {
    var brand = getValue("rdBrand");
    var origin = getValue("rdProduce");
    var size = getValue("rdSize");
    var category = getValue("rdCategory");
    var color = getValue("rdColor");
    var fromPrice = $(".minimum__Price").val();
    var toPrice = $(".maximum__Price").val();
    var url = location.href.indexOf("Sale");
    var reduce = 0;
    var countProduct = 9;

    var UrlCategories = location.href.split("IDLoai=");

    if (UrlCategories[1]) {
      category = Array(UrlCategories[1]);
    }

    if (screen.width <= 736) {
      countProduct = 6;
    } else if (screen.width > 736 && screen.width <= 1023) {
      countProduct = 12;
    }

    if (url != -1) {
      reduce = 1;
    }

    $.ajax({
      url: "./Ajax/getPages",
      type: "POST",
      data: { brand: brand, origin: origin, size: size, color: color, fromPrice: fromPrice, toPrice: toPrice, category: category, sorted: sorted, reduce: reduce, countProduct: countProduct },
      success: function (data) {
        var value = data;

        if (document.querySelector(".MainProduct__Pagination")) {
          if (page > 0) {
            var firstPage = document.createElement("div");
            firstPage.className = "controlPage firstPage";
            firstPage.innerHTML = "First";
            document.querySelector(".MainProduct__Pagination").appendChild(firstPage);

            var prePage = document.createElement("div");
            prePage.className = "controlPage prePage";
            prePage.innerHTML = "Previous";
            document.querySelector(".MainProduct__Pagination").appendChild(prePage);
          }

          for (var i = 0; i < value; i++) {
            if (i == page) {
              var temp = document.createElement("div");
              temp.className = "Pagination";
              temp.innerHTML = i;
              temp.style.background = "var(--HeaderTop--color)";
              temp.style.color = "#fff";
            } else {
              if (i < 3) {
                var temp = document.createElement("div");
                temp.className = "Pagination";
                temp.innerHTML = i;
              }
            }
            document.querySelector(".MainProduct__Pagination").appendChild(temp);
          }

          if (page < value - 1) {
            var nextPage = document.createElement("div");
            nextPage.className = "controlPage nextPage";
            nextPage.innerHTML = "Next";
            document.querySelector(".MainProduct__Pagination").appendChild(nextPage);

            var lastPage = document.createElement("div");
            lastPage.className = "controlPage lastPage";
            lastPage.innerHTML = "Last";
            document.querySelector(".MainProduct__Pagination").appendChild(lastPage);
          }
        }

        //select Page
        $(".Pagination").click(function () {
          page = $(this).text();
          userControlPage();
        });

        //Previous Page
        $(".prePage").click(function () {
          if (page > 0) {
            page--;
          }
          userControlPage();
        });

        //First Page
        $(".firstPage").click(function () {
          page = 0;
          userControlPage();
        });

        //nextPage
        $(".nextPage").click(function () {
          if (page < value - 1) {
            page++;
          }
          userControlPage();
        });

        //lastPage
        $(".lastPage").click(function () {
          page = parseInt(value);

          if (value % 2 == 0) page = value - 1;

          userControlPage();
        });
      },
    });
  }

  function userControlPage() {
    removePages();
    removeControlPage();
    Pagination();
    filter_data();
  }

  /* -------------------------------------- Xóa phân trang--------------------------------------  */

  function removePages() {
    $(".Pagination").remove();
  }

  function removeControlPage() {
    $(".controlPage").remove();
  }

  /* -------------------------------------- lấy dữ liệu checkbox --------------------------------------  */
  function getValue(className) {
    var value = [];
    $("." + className + ":checked").each(function () {
      value.push($(this).val());
    });

    return value;
  }

  $(".common_selector").click(function () {
    page = 0;
    userControlPage();
  });

  /* -------------------------------------- Favourite Product--------------------------------------  */

  $(".choose--Love").click(function () {
    var IDSP = $(this).attr("data-id");

    $.post("./Ajax/increaseFavourite", { IDSP: IDSP }, function (data) {
      if (data != -1) {
        var temp = "<i class='fa-solid fa-circle-check'></i>" + "<p>" + data + "</p>";

        $(".notifyFavourite").html(temp);
        document.querySelector(".notifyFavourite").style.display = "flex";

        $(".notifyFavourite").delay(3000).slideUp(400);
      } else {
        $(location).attr("href", "DangNhap");
      }
    });
  });

  /* -------------------------------------- Lọc giá --------------------------------------  */

  $(".price__show").html("Từ: " + changedPrice(50000) + " - " + changedPrice(100000000));

  $("#priceRange").slider({
    range: true,
    min: 50000,
    max: 100000000,
    values: [50000, 100000000],
    step: 50000,
    stop: function (event, ui) {
      $(".price__show").html("Từ: " + changedPrice(ui.values[0]) + " - " + changedPrice(ui.values[1]));
      $(".minimum__Price").val(ui.values[0]);
      $(".maximum__Price").val(ui.values[1]);
      filter_data();
      userControlPage();
    },
  });

  $(".rdSpacePrice").change(function () {
    var fromPrice = $("input[type='radio']:checked").attr("data-min");
    var toPrice = $("input[type='radio']:checked").attr("data-max");

    $(".minimum__Price").val(fromPrice);
    $(".maximum__Price").val(toPrice);
    filter_data();
    userControlPage();
  });

  /* -------------------------------------- Tìm kiếm--------------------------------------  */
  var keyWord = "";

  $(".keySearch-Mobile").on("input", function () {
    keyWord = $(".keySearch-Mobile").val();

    document.querySelector(".search__Content--Mobile").style.display = "grid";
    document.querySelector(".search__Content--Mobile-Name").style.display = "flex";
    document.querySelector(".search__Content--Mobile-Items").style.display = "grid";

    if (keyWord === "") {
      keyWord = "???????????????????";
      dataSearch();
      document.querySelector(".search__Content--Mobile-Name").style.display = "none";
      document.querySelector(".search__Content--Mobile-Items").style.display = "none";
    } else {
      dataSearch();
    }
  });

  $(".keySearch").on("input", function () {
    keyWord = $(".keySearch").val();
    document.querySelector(".search__Content--Name").style.display = "flex";
    document.querySelector(".search__Contain--Items").style.display = "grid";

    if (keyWord === "") {
      keyWord = "???????????????????";
      dataSearch();
      document.querySelector(".search__Content--Name").style.display = "none";
      document.querySelector(".search__Contain--Items").style.display = "none";
    } else {
      dataSearch();
    }
  });

  $(".submitSearch").click(function () {
    dataSearch();
  });

  function dataSearch() {
    $.ajax({
      url: "./Ajax/search",
      type: "POST",
      data: { keyWord: keyWord },
      success: function (data) {
        var result = "";

        result = JSON.parse(data);
        var temp = "";
        if (result.length >= 3) {
          var numRow = result.length - 3;
        }

        if (result.length == 0) {
          temp = "<span class='nothingSearch'>Không tìm thấy sản phẩm nào</span>";
        } else {
          for (let index = 0; index < 3; index++) {
            if (result[index] != null) {
              var giaGiam = result[index].giaSP * (result[index].giaGiam * 0.01);

              var total = result[index].giaSP - giaGiam;
              var price = changedPrice(total);

              var priceOrigin = result[index].giaSP - 0;
              var priceSP = changedPrice(priceOrigin);

              temp +=
                "<div class='search__Items--Image'>" +
                "<a href='ChiTietSanPham&title=Chi Tiết Sản Phẩm&IDLoai=" +
                result[index].IDLoai +
                "&ID=" +
                result[index].IDSP +
                "'><img src='" +
                result[index].image +
                "' alt=''></a>" +
                "<div class='search__Items--Content'>" +
                "<a href='ChiTietSanPham&title=Chi Tiết Sản Phẩm&tenSP=" +
                result[index].tenSP +
                "&IDLoai=" +
                result[index].IDLoai +
                "&ID=" +
                result[index].IDSP +
                "'>" +
                result[index].tenSP +
                "</a>" +
                "<div class='search__Items--total'>";
              if (result[index].giaGiam > 0) {
                temp += "<div class='reduce__Price'>" + price + "</div>" + "<div class='original__price'>" + priceSP + "</div>";
              } else {
                temp += "<div class='reduce__Price'>" + priceSP + "</div>";
              }

              temp += "</div>" + "</div>" + "</div>";
            }
          }
        }

        var span = "<span>Sản phẩm</span>";
        if (result.length > 0) {
          span += "<a href='TimKiem&title=Tìm kiếm&key=" + keyWord + "'>Xem thêm (" + result.length + ")</a>";
        }

        $(".search__Content--Name").html(span);
        $(".search__Contain--Items").html(temp);
      },
    });
  }

  /*-------------------------------------- Minimum Cart -------------------------------------- */
  $(".increaseCart").click(function () {
    var IDSP = location.href.split("ID=");
    var Size = $("input[name='rdSize']:checked").val();
    var amount = $(".mount").val();

    document.querySelector(".quickView__Input").checked = false;

    IncreaseCart(IDSP[1], Size, amount);
    AmounctCart();
  });

  function IncreaseCart(IDSP, Size, amount) {
    $.ajax({
      url: "./Ajax/getProductMiniCart",
      type: "POST",
      data: { IDSP: IDSP, Size: Size, amount: amount },
      success: function (data) {
        var arr = JSON.parse(data);
        var temp = "";

        if (data != 1) {
          arr.forEach((item) => {
            var giaGiam = item.giaSP * (item.giaGiam * 0.01);

            var price = item.giaSP - giaGiam;

            var total = changedPrice(price * amount);

            var price = changedPrice(price);

            temp +=
              "<div class='miniCart'>" +
              "<div class='miniCart__Title'>" +
              "<h1>Thêm giỏ hàng thành công</h1>" +
              "</div>" +
              "<div class='miniCart__Product'>" +
              "<div class='miniCart__Product--left'>" +
              "<div class='miniCart__Product--Image'>" +
              "<a href='ChiTietSanPham&title=Chi Tiết Sản Phẩm&IDLoai=" +
              item.IDLoai +
              "&ID=" +
              item.IDSP +
              "'><img src='" +
              item.image +
              "' alt=''></a>" +
              "</div>" +
              "<div class='miniCart_Product--Content'>" +
              "<h2><a href=''>" +
              item.tenSP +
              "</a></h2>" +
              "<p>Kích thước: <span>" +
              Size +
              "</span></p>" +
              "<p>Số lượng: <span>" +
              amount +
              "</span></p>" +
              "<p>Giá tiền: <span>" +
              price +
              "</span></p>" +
              "<p>Tổng tiền: <span>" +
              total +
              "</span></p>" +
              "</div>" +
              "</div>" +
              "<div class='miniCart__Product--right'>" +
              "<p>Có <strong class='amountCart'> 0 </strong> sản phẩm trong giỏ hàng</p>" +
              "<p>Tổng cộng: <span class='totalCart'></span></p>" +
              "<input type='button' class='miniCart__Product--continueBuy miniCart__Active' value='Tiếp tục mua sắm'></input>" +
              "<input type='button' class='miniCart__Product--seeCart miniCart__Active' value='Xem giỏ hàng'></input>" +
              "<input type='button' class='miniCart__Product--Pay miniCart__Active' value='Thanh toán'></input>" +
              "</div>" +
              "</div>" +
              "<div class='comboProduct'>" +
              "<h1>Sản phẩm thường được mua cùng: </h1>" +
              "<div class='comboProduct__contain'></div>" +
              "</div>" +
              "</div>";
          });

          $(".modal-cart").html(temp);

          $.post("./Ajax/loadCart", function (data) {
            var result = JSON.parse(data);
            var total = 0.0;

            result.forEach((item) => {
              total = total + parseFloat(item.tongTien);
            });

            $(".amountCart").html(result.length);
            $(".totalCart").html(changedPrice(total));
          });
        } else {
          $(location).attr("href", "DangNhap");
        }

        $(".miniCart__Product--seeCart").click(function () {
          document.querySelector(".modal-cart__Input").checked = false;
          $(location).attr("href", "GioHang&title=Giỏ hàng");
        });

        $(".miniCart__Product--Pay").click(function () {
          document.querySelector(".modal-cart__Input").checked = false;
          $(location).attr("href", "ThanhToan&title=Thanh toán");
        });

        $(".miniCart__Product--continueBuy").click(function () {
          document.querySelector(".modal-cart__Input").checked = false;
        });
      },
    });

    $.post("./Ajax/increaseCart", { IDSP: IDSP, Amount: amount, Size: Size }, function (data) {
      if (data != 1) {
        document.querySelector(".modal-cart__Input").checked = true;
      } else {
        $(location).attr("href", "DangNhap");
      }
    });

    $.ajax({
      url: "./Ajax/getProductInvolve",
      type: "POST",
      data: { IDSP: IDSP },
      success: function (data) {
        var arrInvolve = JSON.parse(data);
        var tempInvolve = "";

        if (data != 1) {
          arrInvolve.forEach((item) => {
            var giaGiam = item.giaSP * (item.giaGiam * 0.01);

            var total = item.giaSP - giaGiam;
            var price = changedPrice(total);

            var priceOrigin = item.giaSP - 0;
            var priceSP = changedPrice(priceOrigin);

            tempInvolve +=
              "<div class='prodDuct__sale pageProduct comboProduct--Contain'>" +
              "<div class='User__Choose'>" +
              "<div class='Choose User__Choose__Cart'>" +
              "<a data-value='" +
              item.IDSP +
              "' data-size='" +
              item.size +
              "' class='cart--Involve'><i class='fa-solid fa-cart-shopping'></i></a>" +
              "</div>" +
              "<div class='Choose User__Choose__Look'>" +
              "<a data-tensp='" +
              item.tenSP +
              "' data-idsp='" +
              item.IDSP +
              "' data-idloai='" +
              item.IDLoai +
              "' class='Cart--Look'><i class='fa-solid fa-magnifying-glass'></i></a>" +
              "</div>" +
              "<div class='Choose User__Choose__Love'>" +
              "<a class='choose--Love' data-id='" +
              item.IDSP +
              "'><i class='fa-solid fa-heart'></i></a>" +
              "</div>" +
              "</div>";
            if (item.giaGiam > 0) {
              tempInvolve += "<div class='total__Sale total--hot'>" + item.giaGiam + "%</div>";
            }

            tempInvolve +=
              "<div class='product-Contain product-Contain__Sale product-Contain__Combo'>" +
              "<div class='product-Contain__Image product-Contain__Image-Combo'>" +
              "<a href='ChiTietSanPham&title=Chi Tiết Sản Phẩm&tenSP=" +
              item.tenSP +
              "&IDLoai=" +
              item.IDLoai +
              "&ID=" +
              item.IDSP +
              "'>" +
              "<img class='prodDuct__sale__Image--new comboProduct--Image' src='" +
              item.image +
              "' alt=''>" +
              "</a>" +
              "</div>" +
              "<div class='product-Contain__Content'>" +
              "<div class='product-Contain__title'>" +
              "<a href='ChiTietSanPham&title=Chi Tiết Sản Phẩm&tenSP=" +
              item.tenSP +
              "&IDLoai=" +
              item.IDLoai +
              "&ID=" +
              item.IDSP +
              "'>" +
              item.tenSP +
              "</a>" +
              "</div>" +
              "<div class='product__Total'>";
            if (item.giaGiam > 0) {
              tempInvolve += "<div class='reduce__Price'>" + price + "</div>" + "<div class='original__price'>" + priceSP + "</div>";
            } else {
              tempInvolve += "<div class='reduce__Price'>" + priceSP + "</div>";
            }
            tempInvolve +=
              "</div>" +
              "<div class='product-Contain__Review'>" +
              "<div class='stars'>" +
              "<input checked=true class='star-show star-show__Review star-show-0' id='star-show-0' type='radio'/>" +
              "<label class='star-show star-show__Review star-show-0' for='star-show-0'></label>" +
              "<input checked=true class='star-show star-show__Review star-show-1' id='star-show-1' type='radio'/>" +
              "<label class='star-show star-show__Review star-show-1' for='star-show-1'></label>" +
              "<input checked=true class='star-show star-show__Review star-show-2' id='star-show-2' type='radio'/>" +
              "<label class='star-show star-show__Review star-show-2' for='star-show-2'></label>" +
              "<input checked=true class='star-show star-show__Review star-show-3' id='star-show-3' type='radio'/>" +
              "<label class='star-show star-show__Review star-show-3' for='star-show-3'></label>" +
              "<input checked=true class='star-show star-show__Review star-show-4' id='star-show-4' type='radio'/>" +
              "<label class='star-show star-show__Review star-show-4' for='star-show-4'></label>" +
              "</div>" +
              "<div data-idstar='" +
              item.IDSP +
              "' class='amount-Stars'>" +
              "</div>" +
              "</div>" +
              "</div>" +
              "</div>" +
              "</div>" +
              "</div>";
          });

          if (!document.querySelector(".comboProduct--Contain")) {
            $(".comboProduct__contain").html(tempInvolve);

            var containAmountStar = document.querySelectorAll(".amount-Stars");

            containAmountStar.forEach((item) => {
              var IDSP = item.getAttribute("data-idstar");

              $.post("./Ajax/getStarProduct", function (data) {
                var objStar = JSON.parse(data);

                objStar.forEach((itemStar) => {
                  if (IDSP == itemStar.IDSP) {
                    kq1 = "<p>( " + itemStar.amountStar + " )</p>";
                    item.innerHTML = kq1;
                  }
                });
              });
            });
          }
          } else {
            $(location).attr("href", "DangNhap");
          }

        $(".choose--Love").click(function () {
          var IDSP = $(this).attr("data-id");

          $.post("./Ajax/increaseFavourite", { IDSP: IDSP }, function (data) {
            if (data != -1) {
              var temp = "<i class='fa-solid fa-circle-check'></i>" + "<p>" + data + "</p>";

              $(".notifyFavourite").html(temp);
              document.querySelector(".notifyFavourite").style.display = "flex";

              $(".notifyFavourite").delay(3000).slideUp(400);
            } else {
              $(location).attr("href", "DangNhap");
            }
          });
        });

        $(".cart--Involve").click(function () {
          var IDSP = $(this).attr("data-value");
          var Size = $(this).attr("data-size");
          var amount = 1;

          IncreaseCart(IDSP, Size, amount);
          AmounctCart();
        });

        $(".Cart--Look").click(function () {
          document.querySelector(".modal-cart__Input").checked = false;
          document.querySelector(".quickView__Input").checked = true;

          var IDSP = $(this).attr("data-idsp");

          $.post("./Ajax/loadDetail", { IDSP: IDSP }, function (data) {
            var arrDetail = JSON.parse(data);
            var kq = "";

            arrDetail.forEach((item) => {
              var giaGiam = item.giaSP * (item.giaGiam * 0.01);

              var total = item.giaSP - giaGiam;
              var price = changedPrice(total);

              var priceOrigin = item.giaSP - 0;
              var priceSP = changedPrice(priceOrigin);

              kq +=
                "<div class='quickView__Contain'>" +
                "<div class='quickView__column--Left'>" +
                "<a href='ChiTietSanPham&title=Chi Tiết Sản Phẩm&IDLoai=" +
                item.IDLoai +
                "&ID=" +
                item.IDSP +
                "'><img src='" +
                item.image +
                "' alt=''></a>" +
                "</div>" +
                "<div class='quickView__column--Right'>" +
                "<div class='quickView__Row__1 inforProduct--Row1'>" +
                "<div class='quickView__titleProduct'>" +
                "<h1><a href=''>" +
                item.tenSP +
                "</a></h1>" +
                "</div>" +
                "<div>" +
                "<span>Mã sản phẩm: </span>" +
                "<span class='quickView__Row__1--Content'>" +
                item.IDSP +
                "</span>" +
                "</div>" +
                "<div>" +
                "<span>Thương hiệu: </span>" +
                "<span class='quickView__Row__1--Content'>" +
                item.tenBrand +
                "</span>" +
                "</div>" +
                "<div>" +
                "<span>Xuất sứ: </span>" +
                "<span class='quickView__Row__1--Content'>" +
                item.tenSX +
                "</span>" +
                "</div>" +
                "<div>" +
                "<span>Loại: </span>" +
                "<span class='quickView__Row__1--Content'>" +
                item.tenTL +
                "</span>" +
                "</div>" +
                "</div>" +
                "<div class='quickView__Row__2'>" +
                "<del class='quickView__PriceProduct--price'>" +
                priceSP +
                "</del>" +
                "<span class='quickView__PriceProduct--total'>" +
                price +
                "</span>" +
                "<span class='quickView__PriceProduct--Reduce'>" +
                item.giaGiam +
                "%</span>" +
                "</div>" +
                "<div class='quickView__Row__3'>" +
                "<div class='quickView--Size'>Kích thước:</div>" +
                "<input type='radio' class='selectSize checkedSelectSize' name='rdSize' checked=true value='" +
                item.size +
                "'><span>" +
                item.size +
                "</span>" +
                "</div>" +
                "<div class='function__Mount quickView__Row__4'>" +
                "<span>Số Lượng: </span>" +
                "<input type='button' class='reduce reduce_Increase' value='-'></input>" +
                "<input type='text' class='mount' value='1' min='1'>" +
                "<input type='button' class='increase reduce_Increase' value='+'></input>" +
                "</div>" +
                "<div class='function__BuyOrCart quickView__Row__5'>" +
                "<input type='button' class='increaseCart' value='Thêm vào giỏ hàng'>" +
                "<input type='button' data-id='" +
                item.IDSP +
                "' class='buyProduct' value='Mua ngay'>" +
                "</div>" +
                "</div>" +
                "</div>";
            });

            $(".quickView").html(kq);

            let amount_detail = 1;

            $(".increase").click(function () {
              amount_detail++;

              updateAmount(amount_detail);
            });

            $(".reduce").click(function () {
              if (amount_detail > 1) {
                amount_detail--;
              }

              updateAmount(amount_detail);
            });

            $(".increaseCart").click(function () {
              IncreaseCart(IDSP, $(".checkedSelectSize").val(), $(".mount").val());
              document.querySelector(".quickView__Input").checked = false;
              document.querySelector(".modal-cart__Input").checked = true;

              AmounctCart();
            });

            $(".buyProduct").click(function () {
              var IDSP = $(this).attr("data-id");
              var Amount = $(".mount").val();
              var Size = $("input[name=rdSize]:checked").val();

              document.querySelector(".quickView__Input").checked = false;

              $.post("./Ajax/increaseCart", { IDSP: IDSP, Size: Size, Amount: Amount }, function (data) {
                if (data == 1) {
                  $(location).attr("href", "DangNhap");
                } else {
                  $(location).attr("href", "GioHang&title=Giỏ hàng");
                }
              });

              AmounctCart();
            });
          });
        });
      },
    });
  }

  /*-------------------------------------- loadMini Cart -------------------------------------- */
  $(".fa-cart-shopping").click(function () {
    $.post("./Ajax/loadCart", function (data) {
      var result = JSON.parse(data);
      var tempCart = "";
      var total = 0.0;

      if (result.length == 0) {
        tempCart += "<div class='cart__Contain--Items emptyCart__Contain'>" + "<img id='emptyCart' src='https://salt.tikicdn.com/desktop/img/mascot@2x.png'></img>" + "<p>Không có sản phẩm nào trong giỏ hàng của bạn.</p>" + "</div>";

        document.querySelector(".cart__Contain--Bottom").style.display = "none";
        document.querySelector(".cart-Mobile__Contain--Bottom").style.display = "none";
      } else {
        result.forEach((item) => {
          total = total + parseFloat(item.tongTien);
          var price = changedPrice(item.tongTien - 0);

          tempCart +=
            "<div class='cart__Contain--Items'>" +
            "<div class='cart__Contain--Image'>" +
            "<a href='ChiTietSanPham&title=Chi Tiết Sản Phẩm&tenSP=" +
            item.tenSP +
            "&IDLoai=" +
            item.IDLoai +
            "&ID=" +
            item.IDSP +
            "'>" +
            "<img src='" +
            item.image +
            "' alt=''>" +
            "</a>" +
            "</div>" +
            "<div class='cart__Contain--Content'>" +
            "<h3><a href='ChiTietSanPham&title=Chi Tiết Sản Phẩm&tenSP=" +
            item.tenSP +
            "&IDLoai=" +
            item.IDLoai +
            "&ID=" +
            item.IDSP +
            "'>" +
            item.tenSP +
            "</a></h3>" +
            "<p>" +
            price +
            "</p>" +
            "</div>" +
            "</div>";

          document.querySelector(".cart__Contain--Bottom").style.display = "block";
          document.querySelector(".cart-Mobile__Contain--Bottom").style.display = "block";
        });
      }

      $(".cart__Contain--Middle").html(tempCart);
      $(".miniCart__Price--Total").html(changedPrice(total));
    });
  });

  if (document.querySelector(".cartTable")) {
    loadCart();
  }

  /*-------------------------------------- Load Cart -------------------------------------- */
  function loadCart() {
    $.post("./Ajax/loadCart", function (data) {
      var result = JSON.parse(data);
      var temp = "";
      var tempRight = "";
      var totalPrice = 0;

      if (result.length == 0) {
        temp = "<div class='cart__Contain--Items emptyCart__Contain cart__Empty--Image'>" + "<img id='emptyCart' src='https://salt.tikicdn.com/desktop/img/mascot@2x.png'></img>" + "<p>Không có sản phẩm nào trong giỏ hàng của bạn.</p>" + "</div>";

        $(".sectionCart").html(temp);
      } else {
        result.forEach((item) => {
          var giaGiam = item.giaSP * (item.giaGiam / 100);
          var total = item.giaSP - giaGiam;

          totalPrice = totalPrice + (item.tongTien - 0);

          temp +=
            "<tr class='cartTable-rows'>" +
            "<td>" +
            "<div class = 'cartTable__Column1'>" +
            "<div class = 'cartTable__Column1--Image'>" +
            "<img src = '" +
            item.image +
            "'>" +
            "</div>" +
            "<div class = 'cartTable__Column1--nameProduct'>" +
            "<h3><a href='ChiTietSanPham&title=Chi Tiết Sản Phẩm&IDLoai=" +
            item.IDLoai +
            "&ID=" +
            item.IDSP +
            "'>" +
            item.tenSP +
            "</a></h3>" +
            "<p> Cung cấp bởi <a href=''>" +
            item.tenBrand +
            "</a></p>" +
            "<span data-id='" +
            item.IDSP +
            "' class='delCart'>" +
            "<i class='fa-solid fa-trash-can'></i>Xóa</span >" +
            "</div>" +
            "</div > " +
            "</td>" +
            "<td >" +
            "<div class='cartTable__Column2'>" +
            "<p>" +
            changedPrice(total) +
            "</p>";

          if (item.giaGiam > 0) {
            temp += "<p class='cartTable__Column2--Origin'>" + changedPrice(item.giaSP - 0) + "</p>" + "<p class='cartTable__Column2--Reduce'>-" + item.giaGiam + "%</p>";
          }

          temp +=
            "</div> " +
            "</td>" +
            "<td>" +
            "<div class='cartTable__Column3'>" +
            "<input data-id='" +
            item.ID +
            "' data-idsp='" +
            item.IDSP +
            "' class='amountProduct' type='number' min='1' value=" +
            item.soLuong +
            ">" +
            "</div> " +
            "</td> " +
            "<td>" +
            "<div class='cartTable__Column4'>" +
            "<p>" +
            changedPrice(item.tongTien - 0) +
            "</p>" +
            "</div>" +
            "</td>" +
            "</tr>";
        });

        tempRight =
          "<div class='Column__Right--Title'>" +
          "<h5>Thông tin đơn hàng</h5>" +
          "</div>" +
          "<div class='Column__Right--Price'>" +
          "<div class='Price__Provisional'>" +
          "<p>Tạm tính<span>" +
          changedPrice(totalPrice - 0) +
          "</span></p>" +
          "</div>" +
          "<div class='Price__Total'>" +
          "<p>Thành tiền<span>" +
          changedPrice(totalPrice - 0) +
          "</span></p>" +
          "</div>" +
          "<div class='Price__Noted'>" +
          "<p><i>(Chưa bao gồm phí vận chuyển)</i></p>" +
          "</div>" +
          "</div>" +
          "<div class='Column__Right--PlaceAnOrder'>" +
          "<input type='Button' name='' class='PlaceAnOrder' value='TIẾN HÀNH ĐẶT HÀNG'>" +
          "</div>";

        $(".cartTable__Contain--Body").html(temp);
        $(".cartTable__Column--Right").html(tempRight);
      }

      /*-------------------------------------- Delete Cart -------------------------------------- */
      $(".delCart").click(function () {
        var IDSP = $(this).attr("data-id");

        $.post("./Ajax/deleteCart", { IDSP: IDSP }, function(){
          $(location).attr("href","GioHang&title=Giỏ%20hàng");
        });
      });

      $(".amountProduct").change(function () {
        let IDCart = $(this).attr("data-id");
        let amount = $(this).val();
        let IDSP = $(this).attr("data-idsp");

        updateAmountCart(IDCart, amount, IDSP);
        loadCart();
      });

      function updateAmountCart(IDCart, amount, IDSP) {
        $.post("./Ajax/updateCart", { IDCart: IDCart, amount: amount, IDSP: IDSP });
      }

      /*-------------------------------------- Pay Cart -------------------------------------- */
      $(".PlaceAnOrder").click(function () {
        $(location).attr("href", "ThanhToan&title=Thanh toán");
      });
    });
  }

  $(".payingMiniCart").click(function () {
    $(location).attr("href", "ThanhToan&title=Thanh toán");
  });

  if (document.querySelector(".Column2__Row1--Contain")) {
    payCart();
  }

  function payCart() {
    $.post("./Ajax/loadCart", function (data) {
      var result = JSON.parse(data);

      var temp = "";
      var total = 0;

      result.forEach((item) => {
        total += item.tongTien - 0;

        temp += "<div class='payProduct'>" + "<p>" + item.tenSP + "</p>" + "<p>Số lượng: <span>" + item.soLuong + "</span><span class='payProduct__TotalPrice'>" + changedPrice(item.tongTien - 0) + "</span></p>" + "</div>";
      });

      var tempTotal =
        "<p>Tổng thu: <span>" + changedPrice(total) + "</span></p>" + "<p>Giao hàng: <span class='shippingFee'>Phí ship: +29000</span></p>" + "<p class='Row2__Column2--totalPrice'>Tổng: <span class='paypal-total' data-price='" + (total + 29000) + "'>" + changedPrice(total + 29000) + "</span></p>";

      $(".Column2__Row1--Contain").html(temp);
      $(".Column2__Row1--Total").html(tempTotal);
    });
  }


  /*-------------------------------------- Discount -------------------------------------- */
  var total_Paypal = 0;

  $(".show-Codes").click(function () {
    document.querySelector(".Codes").style.display = "block";
  });

  $(".Code-Input").keyup(function () {
    var code = $(".Code-Input").val();

    $.post("./ThanhToan/discount", { code: code }, function (data) {
      var obj = JSON.parse(data);
      var totalPay = $(".paypal-total").attr("data-price");

      $(".paypal-total").html(changedPrice(totalPay - 0));
      $(".Code-error").html("Mã giảm giá không đúng");
      document.querySelector(".Code-error").style.color = "red";

      if (Object.keys(obj).length > 0) {
        if (obj[0].status == "Hết hạn") {
          $(".Code-error").html("Mã giảm giá đã hết hạn");
        } else {
          var priceReduce = totalPay * (obj[0].giagiam / 100);
          totalPay = totalPay - priceReduce;

          document.querySelector(".Code-error").style.color = "green";
          $(".paypal-total").html(changedPrice(totalPay));
          $(".Code-error").html("Áp dụng mã giảm giá thành công");
        }
      }

      total_Paypal = totalPay;
    });
  });

  /*-------------------------------------- Place an order Cart -------------------------------------- */

  $(".Order").click(function () {
    var methodPay = "";

    methodPay = "Chuyển khoản ngân hàng";
    title =
      "<p><i class='fa-solid fa-circle-exclamation'></i> Cảm ơn bạn đã mua hàng tại Nuty Cosmetics. Bạn vui lòng chờ xác nhận đơn hàng qua email từ nhân viên Inbox/Order sau khi kiểm tra tình trạng còn hàng tại kho. Vui lòng <b>KHÔNG</b> chuyển khoản trước khi nhận được xác nhận từ Nuty. Xin cảm ơn!</p>";
    inforBank =
      "<p>Sau khi nhân viên Inbox/Order xác nhận còn hàng, Bạn vui lòng chuyển khoản với nội dung (copy đúng nội dung này để Nuty kiểm tra nhanh cho bạn): <b>#255118 124124 xxxx xxxx</b>vào tài khoản ngân hàng sau:</p>" +
      "<div class='Infor__Bank'>" +
      "<b>THÔNG TIN TÀI KHOẢN NGÂN HÀNG CỦA CHÚNG TÔI</b>" +
      "<div class='Infor__Bank--Contain'>" +
      "<div>NGUYỄN THỊ THẢO NGA</div>" +
      "<div>Vietcombank chi nhánh: Bảy Hiền - TPHCM</div>" +
      "<div>Số tài khoản: <b>1016665838</b></div>" +
      "</div>" +
      "</div>";

    if ($("input[name=rdPaymentMethod]:checked").val() == "2") {
      methodPay = "Trả tiền mặt khi nhận hàng (COD)";
      title = "<p><i class='fa-solid fa-circle-exclamation'></i> Cảm ơn bạn. Đơn hàng của bạn đã được nhận.</p>";
      inforBank = "<p>Trả tiền mặt khi giao hàng (COD)</p>";
    }

    var name = $(".nameCustomer").val();
    var address = $(".addressCustomer").val();
    var phone = $(".phoneCustomer").val();
    var email = $(".emailCustomer").val();
    var noted = $(".noteCustomer").val();
    var totalPrice = 0;

    document.querySelector(".containPay").style.display = "none";
    document.querySelector(".containPayed").style.display = "block";

    $.post("./Ajax/placeAnOrder", { name: name, address: address, phone: phone, email: email, noted: noted, methodPay: methodPay }, function (data) {
      var arr = JSON.parse(data);

      arr.forEach((item) => {
        totalPrice = totalPrice + (item.tongTien - 0);
      });

      var containPay =
        "<div class='tablePayed'>" +
        "<div class='Payed__col1'>" +
        "<img src='https://nuty.vn/wp-content/themes/nuty-suntorydesign-child/images/shop-page.jpg' alt=''>" +
        "</div>" +
        "<div class='Payed__col2'>" +
        "<div class='Payed__col2--Row1'></div>" +
        "<div class='Payed__col2--Row2'>" +
        "<div class='Row2--Col Row2--Col1'>" +
        "<p>Mã số đơn hàng của bạn:</p>" +
        "<strong>" +
        arr[0].ID +
        "</strong>" +
        "</div>" +
        "<div class='Row2--Col Row2--Col2'>" +
        "<p>Tổng tiền thanh toán:</p>";
      if (total_Paypal > 0) {
        containPay += "<strong class='Detail-Bill__Paypal'>" + changedPrice(total_Paypal - 0) + "</strong>";
      } else {
        containPay += "<strong class='Detail-Bill__Paypal'>" + changedPrice(totalPrice + 29000) + "</strong>";
      }
      containPay +=
        "</div>" +
        "<div class='Row2--Col Row2--Col3'>" +
        "<p>Phương thức thanh toán:</p>" +
        "<strong>" +
        methodPay +
        "</strong>" +
        "</div>" +
        "</div>" +
        "<div class='Payed__col2--Row3'>" +
        "<span>Bạn có thể xem lại <a href='TheoDoiDonHang&title=Theo dõi đơn hàng'>đơn hàng của tôi</a></span>" +
        "<p>Thông tin chi tiết về đơn hàng đã được gửi đến địa chỉ email <b>" +
        email +
        "</b>.<br>Nếu không tìm thấy vui lòng kiếm tra trong hộp thư <b>Spam</b> hoặc <b>Junk Folder</b></p>" +
        "</div>" +
        "<div class='Payed__col2--Row4'></div>" +
        "</div>" +
        "</div>";

      $(".containPayed").html(containPay);
      $(".Payed__col2--Row1").html(title);
      $(".Payed__col2--Row4").html(inforBank);

      AmounctCart();
    });

    $.post("./Ajax/sendMail", { name: name, email: email });
  });

  /*-------------------------------------- Reigster -------------------------------------- */
  $(".ReigsterSubmit").click(function () {
    var name = $(".Reigster__Name").val();
    var gender = $('input[name="Gender"]:checked').val();
    var Date = $(".Reigster__Date").val();
    var Address = $(".Reigster__Address").val();
    var Email = $(".Reigster__Email").val();
    var Password = $(".Reigster__Password").val();

    $.ajax({
      url: "./Ajax/Reigster",
      type: "POST",
      data: {
        name: name,
        gender: gender,
        Date: Date,
        Address: Address,
        Email: Email,
        Password: Password,
      },
      success: function (data) {
        if (data == 1) {
          $(location).attr("href", "DangNhap");
        } else if (data == 2) {
          $temp = "Email đã tồn tại. Nếu bạn quên mật khẩu, bạn có thể <a href='KhoiPhucMatKhau'>Khôi phục mật khẩu tại đây</a>";
          $(".Reigster__Error").html($temp);
        } else {
          $(".Reigster__Error").html(data);
        }
      },
    });
  });

  /*-------------------------------------- Login -------------------------------------- */
  $(document).on("keypress", function (e) {
    if (e.which == 13) {
      login();
    }
  });

  $(".LoginSubmit").click(function () {
    login();
  });

  function login() {
    var Email = $(".Login--Email ").val();
    var Password = $(".Login--PassWord").val();

    $.post("./Ajax/login", { Email: Email, Password: Password }, function (data) {
      if (data == 1) {
        $(location).attr("href", "TrangChu");
      } else if (data == 2) {
        $(location).attr("href", "./Admin/Home");
      } else {
        $(".Login__Error").html(data);
      }
    });
  }

  /*-------------------------------------- LogOut -------------------------------------- */
  $(".Logined__Menu--Logout").click(function () {
    $.post("./DangNhap/logOut", function () {
      $(location).attr("href", "TrangChu");
    });
  });

  $(".rdPaymentMethod").change(function () {
    var temp = "";
    if ($("input[name='rdPaymentMethod']:checked").val() == "1") {
      temp = "<p>" + "Bạn vui lòng chờ xác nhận đơn hàng qua email từ nhân viên Inbox/Order <br>" + "sau khi kiểm tra tình trạng còn hàng tại kho. Vui lòng <b>KHÔNG</b> chuyển <br>" + "khoản trước khi nhận được xác nhận từ Nuty. Xin cảm ơn!" + "</p>";
      document.querySelector(".Noted__2").style.display = "none";
      document.querySelector(".Noted__1").style.display = "block";
      $(".Noted__1").html(temp);
    } else {
      temp = "Áp dụng <b>Trả tiền mặt khi giao hàng (ship COD) </b> cho <b>tất cả tỉnh thành <br> trong cả nước!</b>";
      document.querySelector(".Noted__1").style.display = "none";
      document.querySelector(".Noted__2").style.display = "block";
      $(".Noted__2").html(temp);
    }
  });

  /*-------------------------------------- Personally -------------------------------------- */
  $(".cancelFavourite").click(function () {
    var ID = $(this).attr("data-id");

    $.post("./DanhSachYeuThich/deleteFavourite", { ID: ID });
    location.reload();
  });

  $(".deleteBill").click(function () {
    var IDDH = $(this).attr("data-id");
    $.post("./TheoDoiDonHang/deleteBill", { IDDH: IDDH });

    location.reload();
  });

  $(".detailProduct--Favourite").click(function () {
    var IDSP = $(this).attr("data-id");
    var IDLoai = $(this).attr("data-idloai");

    $(location).attr("href", "ChiTietSanPham&title=Chi tiết sản phẩm&IDLoai=" + IDLoai + "&ID=" + IDSP + "");
  });

  $(".Logined__Menu--Information").click(function () {
    $(location).attr("href", "CaNhan&title=Thông tin cá nhân");
  });

  $(".watchDetailBill").click(function () {
    var IDDH = $(this).attr("data-id");

    $.post("./TheoDoiDonHang/chiTietDonHang", { IDDH: IDDH }, function (data) {
      var arr = JSON.parse(data);

      var temp =
        "<div class='detailBill Bill detailBill-Contain'>" +
        "<h2>Chi tiết đơn hàng</h2>" +
        "<table class='detailBill-PC'>" +
        "<thead>" +
        "<tr>" +
        "<th>Mã sản phẩm</th>" +
        "<th>Tên sản phẩm</th>" +
        "<th>Kích thước</th>" +
        "<th>Số lượng</th>" +
        "<th>Tổng</th>" +
        "<th>Phương thức thanh toán</th>" +
        "<th>Thao tác</th>" +
        "</tr>" +
        "</thead>" +
        "<tbody>";

      arr.forEach((item) => {
        temp += "<tr>" + "<td>" + item.IDSP + "</td>" + "<td>" + item.tenSP + "</td>" + "<td>" + item.Size + "</td>" + "<td>" + item.soLuong + "</td>" + "<td>" + changedPrice(item.tongTien - 0.0) + "</td>" + "<td>" + item.cachThanhToan + "</td>";

        if (item.statusDetail == 0) {
          temp += "<td><button class='cancel-product' data-id=" + item.idDetail + " >Hủy hàng</button></td></tr>";
        } else if (item.statusDetail == 1) {
          temp += "<td><button disabled style='opacity: 60%' class='cancel-product canceled-product'>Đã hủy</button></td></tr>";
        } else if (item.statusDetail == 2) {
          temp += "<td><button disabled style='opacity: 60%' class='cancel-product canceling-product'>Chờ duyệt</button></td></tr>";
        }
      });
      temp += "</tbody>" + "</table>";

      arr.forEach((item) => {
        temp +=
          "<div class='Bill-Mobile__Item--Top DetailBill-Mobile'>" +
          "<p>Mã sản phẩm: <span>" +
          item.IDSP +
          "</span></p>" +
          "<p>Tên sản phẩm: <span>" +
          item.tenSP +
          "</span></p>" +
          "<p>Kích thước: <span>" +
          item.Size +
          "</span></p>" +
          "<p>Số lượng: <span>" +
          item.soLuong +
          "</span></p>" +
          "<p>Tổng tiền: <span>" +
          changedPrice(item.tongTien - 0.0) +
          "</span></p>" +
          "<p>Cách thức thanh toán: <span>" +
          item.cachThanhToan +
          "</span></p>";

        if (item.statusDetail == 0) {
          temp += "<td><button class='cancel-product' data-id=" + item.idDetail + " >Hủy hàng</button></td></tr>";
        } else if (item.statusDetail == 1) {
          temp += "<td><button disabled class='cancel-product canceled-product'>Đã hủy</button></td></tr>";
        } else if (item.statusDetail == 2) {
          temp += "<td><button disabled class='cancel-product canceling-product'>Chờ duyệt</button></td></tr>";
        }

        temp += "</div>";
      });
      temp += "</div>";

      $(".Personally--Right").html(temp);

      $(".cancel-product").click(function () {
        let ID = $(this).attr("data-id");

        $.post("./TheoDoiDonHang/cancelBill", { ID: ID }, function (data) {
          $(location).attr("href", "TheoDoiDonHang");
        });
      });
    });
  });

  $(".save__InforAccount").click(function (e) {
    var Name = $(".InforAccount--Name").val();
    var Gender = $("input[name=Gender]:checked").val();
    var birthDate = $(".InforAccount--Date").val();
    var Address = $(".InforAccount--Address").val();
    var Phone = $(".InforAccount--Phone").val();
    var oldPasswords = $(".InforAccount--Password").val();
    var newPasswords = $(".InforAccount--newPassword").val();
    var confirmPasswords = $(".InforAccount--confirmPassword").val();

    $.post("./CaNhan/changeAccount", { Name: Name, Gender: Gender, birthDate: birthDate, Phone: Phone, Address: Address, oldPasswords: oldPasswords, newPasswords: newPasswords, confirmPasswords: confirmPasswords }, function (data) {
      $(".changedEror").html(data);
    });

    $(".Logined--Name").html(Name);
    $(".Personally-Mobile__Title-Name").html(Name);
  });

  /*-------------------------------------- Review Product -------------------------------------- */

  if (document.querySelector(".review__Item")) {
    var splitHref = location.href.split("ID=");
    var IDSP = splitHref[1];
    var Amount = 5;
    loadReview(IDSP, Amount);
  }

  $(".review__input--submit").click(function () {
    var star = $("input[name=star]:checked").val();
    var review = $(".review__Content").val();

    $.post("./ChiTietSanPham/review", { star: star, review: review, IDSP: IDSP }, function (data) {
      if (data == -1) {
        $(location).attr("href", "DangNhap");
      } else {
        loadReview(IDSP, Amount);
      }
    });
  });

  $(".review__More--Than").click(function () {
    $.post("./ChiTietSanPham/lenghtReview", { IDSP: IDSP }, function (data) {
      var lenght = data;

      $.post("./ChiTietSanPham/loadReview", { IDSP: IDSP, Amount: Amount }, function (data) {
        var lenghtNow = JSON.parse(data);

        var lenghtNext = Object.keys(lenghtNow).length + 5;

        if (lenghtNext > lenght) {
          lenghtNext = Object.keys(lenghtNow).length + 1;
        }

        if (lenghtNext == lenght) {
          document.querySelector(".review__More--Than").value = "Thu gọn";
        } else {
          document.querySelector(".review__More--Than").value = "Xem thêm";
        }

        if (lenghtNext > lenght) {
          lenghtNext = 5;
        }

        loadReview(IDSP, lenghtNext);

        Amount = lenghtNext;
      });
    });
  });

  function loadReview(IDSP, Amount) {
    $.post("./ChiTietSanPham/loadReview", { IDSP: IDSP, Amount: Amount }, function (data) {
      var result = JSON.parse(data);
      var temp = "";

      result.forEach((item) => {
        temp += "<div class='Item'>" + "<div class='review__Item--Avatar'>" + "<img src='" + item.image + "' alt=''>" + "</div>" + "<div class='review__Item--Infor'>" + "<div class='stars'>";

        for (var i = 0; i < 5; i++) {
          if (i < item.star) {
            temp += "<input checked=true class='star-show star-show-" + i + "' id='star-show-" + i + "' type='radio'/>" + "<label class='star-show star-show-" + i + "' for='star-show-" + i + "'></label>";
          } else {
            temp += "<input class='star-show star-show-" + i + "' id='star-show-" + i + "' type='radio'/>" + "<label class='star-show star-show-" + i + "' for='star-show-" + i + "'></label>";
          }
        }

        temp += "</div>" + "<div class='review__Item--content'>" + "<h5>" + item.hoTen + "</h5>" + "<span>" + item.ngayBL + "</span>" + "<p>" + item.binhLuan + "</p>" + "</div>" + "</div>" + "</div>";
      });

      $(".review__Item").html(temp);
    });

    $.post("./ChiTietSanPham/lenghtReview", { IDSP: IDSP }, function (data) {
      if (data > 5) {
        document.querySelector(".review__More--Than").style.display = "block";
      }
    });
  }

  // if (document.querySelector("#codeCapcha")) {
  //   changedCapcha();
  // }

  // $(".recovery").click(function () {
  //   changedCapcha();
  // });

  let newCode = "";
  
  $('.sendCode').click(function(){
    var email = $(".recovery--Email").val();

    $.post("./KhoiPhucMatKhau/checkEmail", { email: email }, function (data) {
      if(email.length <= 0)
      {
        $(".Login__Error").html("Email không được để trống");

        changeColorError("#aa0404");
      }
      else if(data)
      {
        $(".Login__Error").html("Email bạn nhập chưa được liên kết tài khoản");

        changeColorError("#aa0404");
      }
      else if(!data)
      {
        $(".Login__Error").html("Mã xác thực đã được gửi về Email");

        changeColorError("#26a726");


        $.post("./KhoiPhucMatKhau/recovery", { email: email }, function (respon) {
          if(respon != 0)
          {
            newCode = respon;
            }
        });
      }

    })


  })

  $(".recovery__Password--Submit").click(function () {
    var email = $(".recovery--Email").val();
    let inCode = $(".recovery--Code").val();  
    let newPassword = $('.recovery--newPassword').val();

    $.post("./KhoiPhucMatKhau/checkEmail", { email: email}, function (data) {
      if(!data)
      {
        if (newCode.length < 6 && newCode != inCode) {
          $(".Login__Error").html("Mã xác thực không đúng");

          changeColorError("#aa0404");
        } 
        else if(newPassword.length < 6)
        {
          $(".Login__Error").html("Mật khẩu phải từ 6 ký tự trở lên. Vui lòng chọn mật khẩu khác");
          changeColorError("#aa0404");
        }
        else {
          $(".Login__Error").html("Lấy lại mật khẩu thành công!");
          changeColorError("#26a726");

          $.post("./KhoiPhucMatKhau/recoveryPassword", { email: email, newPassword:newPassword }, function () {
            $(location).attr("href", "DangNhap");
          });
        }
      }
      else
      {
        $(".Login__Error").html("Email bạn nhập chưa được liên kết tài khoản");

        changeColorError("#aa0404");
      }
    })
  });

  function changeColorError($color)
  {
    let login__Eror = document.querySelector('.Login__Error');
    login__Eror.style.color = $color;
  }

  /*-------------------------------------- Amounct Cart -------------------------------------- */
  AmounctCart();

  function AmounctCart() {
    $.post("./Ajax/loadCart", function (data) {
      var result = JSON.parse(data);

      var AmountCart = Object.keys(result).length;

      if (AmountCart > 0) {
        $(".AmountCart").html(AmountCart);
        document.querySelector(".AmountCart").style.display = "block";
        document.querySelector(".AmountCart-Mobile").style.display = "block";
      } else {
        document.querySelector(".AmountCart").style.display = "none";
        document.querySelector(".AmountCart-Mobile").style.display = "none";
      }
    });
  }
  /*-------------------------------------- Register Email -------------------------------------- */

  $(".submit__Footer").click(function () {
    var Email = $(".Email__Footer").val();
    $.post("./CaNhan/registerEmailNotify", { Email: Email });
  });

  /*-------------------------------------- Contact Email -------------------------------------- */

  $(".Contact__Row3--submit").click(function () {
    var Title = $(".Contact--Title").val();
    var Name = $(".Contact--Name").val();
    var Email = $(".Contact--Email").val();
    var Content = $(".Contact--Content").val();

    $.post("./CaNhan/contactEmail", { Title: Title, Name: Name, Email: Email, Content: Content });
  });

  /*-------------------------------------- Changed Avatar -------------------------------------- */
  $("#files").change(function () {
    var file = $(this)[0].files[0].name;
    document.querySelector(".Personally-Avatar").src = "./Public/image/Avatar/" + file;

    $(".submitFile").submit();
  });

  $(".submitFile").submit(function (event) {
    $.ajax({
      method: $(this).attr("method"),
      url: $(this).attr("action"),
      enctype: $(this).attr("enctype"),
      data: new FormData(this),
      cache: false, // Ngăn trình duyệt không cache request này.
      contentType: false, // Không cho jQuery gửi Content Type, nếu không sẽ làm mất chuỗi
      processData: false, // không cho jquery tự động xử lý data thành query string
    }).done(function (data) {
      if (data == 1) {
        $(".Image-error").html("Chỉ hỗ trợ File {jpg,png,jpeg,gif}");
      } else if (data == 2) {
        $(".Image-error").html("Ảnh của bạn có kích thước quá lớn!!!");
      } else {
        document.querySelector(".Avatar").src = data;
        document.querySelector(".Personally-Avatar").src = data;
        $(".Image-error").html("");

        if (document.querySelector(".Personally-Avatar_Mobile")) {
          document.querySelector(".Personally-Avatar_Mobile").src = data;
        }
      }
    });

    event.preventDefault();
  });

/*-------------------------------------- Detail Product -------------------------------------- */

  let amount = 1;

  $(".increase").click(function () {
    amount++;
    updateAmount(amount);
  });

  $(".reduce").click(function () {
    if (amount > 1) {
      amount--;
    }

    updateAmount(amount);
  });

  $(".buyProduct").click(function () {
    var IDSP = $(this).attr("data-id");
    var Amount = $(".mount").val();
    var Size = $("input[name=rdSize]:checked").val();

    document.querySelector(".quickView__Input").checked = false;

    $.post("./Ajax/increaseCart", { IDSP: IDSP, Size: Size, Amount: Amount }, function (data) {
      if (data == 1) {
        $(location).attr("href", "DangNhap");
      } else {
        $(location).attr("href", "GioHang&title=Giỏ hàng");
      }
    });

    AmounctCart();
  });


  function updateAmount(amount) {
    $(".mount").val(amount);
  }
});

/*-------------------------------------- Paypal momo -------------------------------------- */

// $('.paypal__momo--QRCode').click(function(){
//   $.ajax({
//     type: 'POST',
//     dataType: 'json',
//     cache: false,
//     url: './ThanhToan/paypalMomoQRCode',
//     success: function(data){
//       console.log(data);
//     }
//   })
// })
/*-------------------------------------- Create Capcha -------------------------------------- */

function changedCapcha() {
  //các số và từ
  var permitted_chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

  var code = "";
  for (var i = 0; i < 5; i++) {
    //tạo random
    var randomCode = permitted_chars.charAt(Math.floor(Math.random() * permitted_chars.length));

    //nối chuỗi
    code = code + randomCode;
  }

  document.querySelector("#codeCapcha").value = code;
}

/*-------------------------------------- Changed Price -------------------------------------- */
function changedPrice(price) {
  var priceChanged = price.toLocaleString("vi-VN", {
    style: "currency",
    currency: "VND",
  });

  return priceChanged;
}
