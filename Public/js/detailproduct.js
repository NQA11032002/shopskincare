/* tab__selection */

var tabDetail = document.querySelectorAll(".tab__selection");

changeColor(tabDetail, 0);

tabDetail[0].onclick = function () {
  changeDisplay(".tabDescription", ".guideBuyProduct", ".provisionService");
  changeColor(tabDetail, 0);
};
tabDetail[1].onclick = function () {
  changeDisplay(".guideBuyProduct", ".tabDescription", ".provisionService");
  changeColor(tabDetail, 1);
};
tabDetail[2].onclick = function () {
  changeDisplay(".provisionService", ".guideBuyProduct", ".tabDescription");
  changeColor(tabDetail, 2);
};

function changeDisplay(nameChange, name1, name2) {
  document.querySelector(nameChange).style.display = "block";
  document.querySelector(name1).style.display = "none";
  document.querySelector(name2).style.display = "none";
}

function changeColor(tabDetail, index) {
  for (var i = 0; i < tabDetail.length; i++) {
    if (index == i) {
      tabDetail[i].style.color = "var(--HeaderTop--color)";
      tabDetail[i].style.borderColor = "var(--HeaderTop--color)";
    } else if (index != i) {
      tabDetail[i].style.color = "#222222";
      tabDetail[i].style.borderColor = "transparent";
    }
  }
}

/* Chi tiết sản phẩm */
var temp = document.querySelectorAll(".detailProduct--Image");
const slideDetails = document.querySelector(".detailProduct__mainImage");

var indexDetail = 0;

temp[0].onclick = function () {
  document.querySelector(".showMainImage").src = temp[0].src;
  indexDetail = 0;
  updateSlideDetail();
};
temp[1].onclick = function () {
  document.querySelector(".showMainImage").src = temp[1].src;
  indexDetail = 1;
  updateSlideDetail();
};
temp[2].onclick = function () {
  document.querySelector(".showMainImage").src = temp[2].src;
  indexDetail = 2;
  updateSlideDetail();
  console.log(indexDetail);
};

function updateSlideDetail() {
  if (screen.width <= 736) {
    slideDetails.style.transform = `translateX(-${indexDetail * 100}%)`;
  } else if (screen.width > 736 && screen.width < 1024) {
    slideDetails.style.transform = `translateX(-${indexDetail * 5}%)`;
  } else {
    slideDetails.style.transform = `translateX(-${indexDetail * 85}%)`;
  }
}
