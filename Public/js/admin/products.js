$(document).ready(function () {
  const mainInforProducts = document.querySelector(".products__infor");
  const mainInsertProducts = document.querySelector(".product__insert-top");
  const insertOnclick = document.querySelector(".product__inserts");
  const insertAction = document.querySelector(".products__insert--action-content");

  insertOnclick.addEventListener("click", function sliderInsert() {
    mainInforProducts.style.transform = `translateX(${106}%)`;
    mainInsertProducts.style.transform = `translateX(${0}%)`;
    insertAction.value = "Insert";
    insertAction.classList.remove("products__insert--action-update");
    insertAction.classList.add("products__insert--action-insert");
  });

  const backInforProducts = document.querySelector(".products__insert--back");

  backInforProducts.addEventListener("click", function () {
    mainInforProducts.style.transform = `translateX(0)`;
    mainInsertProducts.style.transform = `translateX(calc(-${100}% - ${213}px))`;
  });

  const editCustomerClose = document.querySelector(".customer-edit__close");
  const createCombo = document.querySelector(".products__insert--combo");

  createCombo.addEventListener("click", function () {
    document.getElementById("cbCheckLabel").checked = true;
  });

  editCustomerClose.addEventListener("click", function () {
    document.getElementById("cbCheckLabel").checked = false;
  });

  let amountProduct = 6;
  let IDCombo = 0;

  loadListProduct();
  lengthListProduct();

  //Load list product
  function loadListProduct() {
    let keyword = getValueInput("products__search--content");
    let page = getValueInput("customer__pagination--item-page");

    $.post("./Product/apiListProduct", { page: page, amountProduct: amountProduct, keyword: keyword }, function (data) {
      let obj = JSON.parse(data);
      let result = "";
      let index = 0;

      obj.forEach((element) => {
        result +=
          "<tr>" +
          "<td>" +
          "<p>" +
          element.ID +
          "</p>" +
          "</td>" +
          "<td class='Products-table__images'>" +
          "<img src='" +
          "../" +
          element.image +
          "' alt=''>" +
          "<img src='" +
          "../" +
          element.image1 +
          "' alt=''>" +
          "<img src='" +
          "../" +
          element.image2 +
          "' alt=''>" +
          "</td>" +
          "<td>" +
          "<p class='text-conllapse'>" +
          element.tenSP +
          "</p>" +
          "</td>" +
          "<td>" +
          "<p>" +
          element.tenTL +
          "</p>" +
          "</td>" +
          "<td>" +
          "<p>" +
          element.tenBrand +
          "</p>" +
          "</td>" +
          "<td>" +
          "<p>" +
          element.size +
          "</p>" +
          "</td>" +
          "<td>" +
          "<p>" +
          element.tenMau +
          "</p>" +
          "</td>" +
          "<td>" +
          "<p>" +
          element.tenSX +
          "</p>" +
          "</td>" +
          "<td>" +
          "<p>" +
          element.giaSP +
          "</p>" +
          "</td>" +
          "<td>" +
          "<p class='text-conllapse'>" +
          element.congDung +
          "</p>" +
          "</td>" +
          "<td>" +
          "<p class='text-conllapse'>" +
          element.suDung +
          "</p>" +
          "</td>" +
          "<td>" +
          "<p class='text-conllapse'>" +
          element.gioiThieuTH +
          "</p>" +
          "</td>" +
          "<td>" +
          "<p>" +
          element.status +
          "</p>" +
          "</td>" +
          "<td>" +
          "<div class='card-customer__item--action Products-table--action'>" +
          "<div class='customer__pagination--check-delete'>" +
          "<p class='customer__pagination--check--icon customer__pagination--check--cancel'><i class='fa-solid fa-arrow-rotate-left'></i>Hủy" +
          "</p>" +
          "<p class='customer__pagination--check--icon customer__pagination--check-tick' data-idproduct='" +
          element.ID +
          "'><i class='fa-solid fa-circle-check'></i> Xóa</p>" +
          "</div>" +
          "<i class='fa-solid fa-pen-to-square card-customer__edit Products--edit' data-idproduct='" +
          element.ID +
          "'></i>" +
          "<i class='fa-solid fa-trash card-customer__delete Products--delete' data-index='" +
          index +
          "'></i>" +
          "</div>" +
          "</td>" +
          "</tr>";
        index++;
      });

      $(".products-table__contain").html(result);

      //load form check delete
      $(".Products--delete").click(function () {
        let indexDelete = $(this).attr("data-index");
        const formCheckDelete = document.querySelectorAll(".customer__pagination--check-delete");

        formCheckDelete.forEach((e) => {
          e.style.display = "none";
        });

        formCheckDelete[indexDelete].style.display = "flex";

        $(".customer__pagination--check--cancel").click(function () {
          formCheckDelete[indexDelete].style.display = "none";
        });

        $(".customer__pagination--check-tick").click(function () {
          let IDSP = $(this).attr("data-idproduct");
          console.log(IDSP);
          $.post("./Product/removeProduct", { IDSP: IDSP }, function (data) {
            loadListProduct();
          });
        });
      });

      $(".Products--edit").click(function () {
        mainInforProducts.style.transform = `translateX(${106}%)`;
        mainInsertProducts.style.transform = `translateX(${0}%)`;
        insertAction.value = `Update`;
        insertAction.classList.remove("products__insert--action-insert");
        insertAction.classList.add("products__insert--action-update");

        const editImageProduct = document.querySelectorAll(".edit-product__image");

        editImageProduct.forEach((e) => {
          e.style.display = "none";
        });

        let ID = $(this).attr("data-idproduct");

        $.post("./Product/apiListProduct", { page: 0, amountProduct: amountProduct, keyword: ID }, function (data) {
          let obj = JSON.parse(data);

          obj.forEach((element) => {
            let IDCategory = element.IDLoai;
            let IDBrand = element.IDBrand;
            let IDSize = element.IDSize;
            let IDColor = element.IDMau;
            let IDProduce = element.IDSX;
            IDCombo = element.combo;

            const actionUpdate = document.querySelector(".products__insert");
            const image1 = document.querySelector(".products__insert--image-1");
            const image2 = document.querySelector(".products__insert--image-2");
            const image3 = document.querySelector(".products__insert--image-3");
            const file1 = document.querySelector(".image-file1");
            const file2 = document.querySelector(".image-file2");
            const file3 = document.querySelector(".image-file3");

            file1.setAttribute("value", element.image);
            file2.setAttribute("value", element.image1);
            file3.setAttribute("value", element.image2);

            actionUpdate.setAttribute("data-idproduct", element.ID);

            image1.src = "../" + element.image;
            image2.src = "../" + element.image1;
            image3.src = "../" + element.image2;

            $("#products__insert--name").val(element.tenSP);
            $("#products__insert--description").val(element.moTa);
            $("#products__insert--fromPrice").val(element.giaSP);
            $("#products__insert--effect").val(element.congDung);
            $("#products__insert--usage").val(element.suDung);
            $("#products__insert--introduce").val(element.gioiThieuTH);

            //load categories
            loadCategories(IDCategory);

            //load brands
            loadBrand(IDBrand);

            //load size
            loadSize(IDSize);

            //load color
            loadColor(IDColor);

            //load produce
            loadProduce(IDProduce);

            //load combo
            loadCombo(IDCombo);
          });
        });
      });
    });
  }

  function loadCategories(IDCategory) {
    $.post("./Product/apiCategories", function (data) {
      let obj = JSON.parse(data);
      let result = "";

      obj.forEach((element) => {
        if (IDCategory == element.ID) {
          result += "<option class='category' selected value='" + element.ID + "'>" + element.tenTL + "</option>";
        } else {
          result += "<option class='category' value='" + element.ID + "'>" + element.tenTL + "</option>";
        }
      });

      $("#products__insert--category").html(result);
    });
  }

  function loadBrand(IDBrand) {
    $.post("./Product/apiBrands", function (data) {
      let obj = JSON.parse(data);
      let result = "";

      obj.forEach((element) => {
        if (IDBrand == element.ID) {
          result += "<option class='brand' selected value='" + element.ID + "'>" + element.tenBrand + "</option>";
        } else {
          result += "<option class='brand' value='" + element.ID + "'>" + element.tenBrand + "</option>";
        }
      });

      $("#products__insert--brand").html(result);
    });
  }
  function loadSize(IDSize) {
    $.post("./Product/apiSizes", function (data) {
      let obj = JSON.parse(data);
      let result = "";

      obj.forEach((element) => {
        if (IDSize == element.ID) {
          result += "<option class='size' selected value='" + element.ID + "'>" + element.size + "</option>";
        } else {
          result += "<option class='size' value='" + element.ID + "'>" + element.size + "</option>";
        }
      });

      $("#products__insert--size").html(result);
    });
  }

  function loadColor(IDColor) {
    $.post("./Product/apiColors", function (data) {
      let obj = JSON.parse(data);
      let result = "";

      obj.forEach((element) => {
        if (IDColor == element.ID) {
          result += "<option class='color' selected value='" + element.ID + "'>" + element.tenMau + "</option>";
        } else {
          result += "<option class='color' value='" + element.ID + "'>" + element.tenMau + "</option>";
        }
      });

      $("#products__insert--color").html(result);
    });
  }

  function loadProduce(IDProduce) {
    $.post("./Product/apiProduces", function (data) {
      let obj = JSON.parse(data);
      let result = "";

      obj.forEach((element) => {
        if (IDProduce == element.ID) {
          result += "<option class='produce' selected value='" + element.ID + "'>" + element.tenSX + "</option>";
        } else {
          result += "<option class='produce' value='" + element.ID + "'>" + element.tenSX + "</option>";
        }
      });

      $("#products__insert--produce").html(result);
    });
  }

  //create combo
  $(".products-create__combo--action").click(function () {
    let name = $("#products__insert--combo-create").val();
    $.post("./Product/createCombo", { name: name }, function () {
      loadCombo(IDCombo);
    });
  });

  function loadCombo(IDCombo) {
    //load combo
    $.post("./Product/apiCombo", function (data) {
      let obj = JSON.parse(data);
      let result = "";

      obj.forEach((element) => {
        if (IDCombo == element.ID) {
          result += "<option selected class='option-combo' value='" + element.ID + "'>" + element.tenCombo + "</option>";
        } else {
          result += "<option class='option-combo' value='" + element.ID + "'>" + element.tenCombo + "</option>";
        }
      });
      $("#products__insert--combo").html(result);
    });
  }

  //cập nhật ảnh khi thay đổi
  $(".image-file1").change(function () {
    var file = $(this)[0].files[0].name;
    document.querySelector(".products__insert--image-1").src = "../Public/image/" + file;
    
  });

  $(".image-file2").change(function () {
    var file = $(this)[0].files[0].name;
    document.querySelector(".products__insert--image-2").src = "../Public/image/" + file;

  });

  $(".image-file3").change(function () {
    var file = $(this)[0].files[0].name;
    document.querySelector(".products__insert--image-3").src = "../Public/image/" + file;

  });

  //update thông tin product
  $(".submitFile").submit(function (event) {
    let ID = $(this).attr("data-idproduct");
    let IDCategory = $("#products__insert--category option:selected").val();
    let IDBrand = $("#products__insert--brand option:selected").val();
    let IDSize = $("#products__insert--size option:selected").val();
    let IDColor = $("#products__insert--color option:selected").val();
    let IDProduce = $("#products__insert--produce option:selected").val();
    let combo = $("#products__insert--combo option:selected").val();
    let name = $("#products__insert--name").val();
    let price = $("#products__insert--fromPrice").val();
    let description = $("#products__insert--description").val();
    let effect = $("#products__insert--effect").val();
    let usage = $("#products__insert--usage").val();
    let introduce = $("#products__insert--introduce").val();
    let image1 = document.querySelector(".products__insert--image-1").getAttribute("src");
    let image2 = document.querySelector(".products__insert--image-2").getAttribute("src");
    let image3 = document.querySelector(".products__insert--image-3").getAttribute("src");

    image1 = image1.slice(3);
    image2 = image2.slice(3);
    image3 = image3.slice(3);

    $.ajax({
      method: $(this).attr("method"),
      url: $(this).attr("action"),
      enctype: $(this).attr("enctype"),
      data: new FormData(this),
      cache: false, // Ngăn trình duyệt không cache request này.
      contentType: false, // Không cho jQuery gửi Content Type, nếu không sẽ làm mất chuỗi
      processData: false, // không cho jquery tự động xử lý data thành query string
    }).done(function (data) {
      if (data == 0) {
        $(".Image-error").html("Chỉ hỗ trợ File {jpg,png,jpeg,gif}");
      } else if (data == 2) {
        $(".Image-error").html("Kích thước file quá lớn. Vui lòng chọn file khác");
      } else {
        $(".Image-error").html("");
      }
    });

    if ($(".products__insert--action-content").hasClass("products__insert--action-update")) {
      $.post(
        "./Product/updateProduct",
        { ID: ID, IDCategory: IDCategory, IDBrand: IDBrand, IDSize: IDSize, IDColor: IDColor, IDProduce: IDProduce, combo: combo, name: name, price: price, description: description, effect: effect, usage: usage, introduce: introduce, image1: image1, image2: image2, image3: image3 },
        function (data) {
          $(location).attr("href", "Product");
        }
      );
    } else {
      $.post(
        "./Product/insertProduct",
        { IDCategory: IDCategory, IDBrand: IDBrand, IDSize: IDSize, IDColor: IDColor, IDProduce: IDProduce, combo: combo, name: name, price: price, description: description, effect: effect, usage: usage, introduce: introduce, image1: image1, image2: image2, image3: image3 },
        function (data) {
          if (data != 1) {
            $(".infor-error").html(data);
          } else {
            $(location).attr("href", "Product");
          }
        }
      );
    }
    event.preventDefault();
  });

  //reset load form insert Product
  $(".product__inserts").click(function () {
    document.querySelector(".products__insert--image-1").src = "";
    document.querySelector(".products__insert--image-2").src = "";
    document.querySelector(".products__insert--image-3").src = "";
    $("#products__insert--name").val("");
    $("#products__insert--description").val("");
    $("#products__insert--fromPrice").val("");
    $("#products__insert--effect").val("");
    $("#products__insert--usage").val("");
    $("#products__insert--introduce").val("");
    loadBrand(null);
    loadCategories(null);
    loadColor(null);
    loadCombo(null);
    loadListProduct(null);
    loadProduce(null);
    loadSize(null);
  });

  //phân trang cho danh sách Product
  function lengthListProduct() {
    let keyword = getValueInput("products__search--content");
    let page = getValueInput("customer__pagination--item-page");

    $.post("./Product/lengthListProduct", { keyword: keyword }, function (data) {
      length = data / amountProduct;

      $(".previousPage").click(function () {
        if (page > 0) {
          page = Number(page - 1);
          $(".customer__pagination--item-page").val(page);
          loadListProduct();
          $(".customer__pagionation--fromPage").html(page);
        }
      });

      $(".nextPage").click(function () {
        if (page < length - 1) {
          page = Number(page + 1);
          $(".customer__pagination--item-page").val(page);
          loadListProduct();
          $(".customer__pagionation--fromPage").html(page);
        }
      });

      $(".customer__pagination--totalPage").html(parseInt(length > 0 ? length  : 0));
      $(".customer__pagination--entries").html(parseInt(length > 0 ? length  : 0));
      $(".customer__pagionation--fromPage").html(page);
    });
  }

  //search Product
  $(".products__search--content").keyup(function () {
    $(".customer__pagination--item-page").val(0);
    loadListProduct();
    lengthListProduct();
  });

  function getValueInput(nameClass) {
    let value = $("." + nameClass).val();

    return value;
  }
});
