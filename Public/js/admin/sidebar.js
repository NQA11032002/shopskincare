$(document).ready(function () {
  $(document).ready(function () {
    const arrType = document.querySelectorAll(".SideBar__Pagination");
    let currentPage = location.href.split("/");
    currentPage = currentPage[currentPage.length - 1];

    for (const item of arrType) {
      item.getAttribute("data-name") === currentPage ? item.classList.add("active") : item.classList.remove("active");
    }
  });

  //droplist menu product
  const dropList = document.querySelector(".Product-dropList");
  const managerElements = document.querySelector(".menu-manager--elements");

  dropList.addEventListener("click", function () {
    if ($(this).hasClass("Product-upList")) {
      this.classList.remove("fa-chevron-up");
      this.classList.remove("Product-upList");

      this.classList.add("Product-downList");
      this.classList.add("fa-chevron-down");

      managerElements.style.display = "block";
    } else if ($(this).hasClass("Product-downList")) {
      this.classList.remove("Product-downList");
      this.classList.remove("fa-chevron-down");

      this.classList.add("fa-chevron-up");
      this.classList.add("Product-upList");

      managerElements.style.display = "none";
    }
  });

  $(".logout-Admin").click(function () {
    $.post("./Home/logOut", function () {
      location.reload();
    });
  });

  $(".arrow-slidebar").click(function () {
    let slide = document.querySelector(".contain-left");
    let contain = document.querySelector(".contain");
    let menu = document.querySelector(".SideBar");

    if ($(this).hasClass("arrow-slidebar__right")) {
      $(this).removeClass("arrow-slidebar__right");
      $(this).addClass("arrow-slidebar__left");

      slide.style.transform = "translateX(-100%)";
      contain.style.gridTemplateColumns = "1px auto";
      contain.style.gridGap = "unset";
      menu.style.transform = "translateX(-100%)";
    } else if ($(this).hasClass("arrow-slidebar__left")) {
      $(this).removeClass("arrow-slidebar__left");
      $(this).addClass("arrow-slidebar__right");

      slide.style.transform = "translateX(0%)";
      contain.style.gridTemplateColumns = "210px auto";
      contain.style.gridGap = "30px";
      menu.style.transform = "translateX(0%)";
    }
  });
});
