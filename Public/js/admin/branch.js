$(document).ready(function(){

  $('.produce__search').mouseover(function(){
    $(this).addClass('produce__search--active');
    $(this).children('.search--text').css('border-radius', '5px');
    $(this).children('.produce__search--action').css('color','var(--color-main)');
  })

  $('.produce__search').mouseleave(function(){
    $(this).removeClass('produce__search--active');
    $(this).children('.search--text').css('border-radius', '50%');
    $(this).children('.produce__search--action').css('color','var(--color-content)');
  })

  loadProduce();
  loadCategories();
  loadBrands();

  function loadProduce()
  {
    let keyword = $('.search--text-produce').val();

    $.post("./Product/apiProduces",{keyword:keyword}, function (data) {
      let obj = JSON.parse(data);
      let temp = '';

      obj.forEach(e => {
        temp += "<tr>"+
                    "<td class='produce-ID'>"+e.ID+"</td>"+
                    "<td class='produce-name'>"+e.tenSX+"</td>"+
                    "<td>"+
                    "<i class='fa-solid fa-pen-to-square produce-action produce-edit' data-idproduce='" +
                    e.ID +
                    "' data-nameproduce='"+e.tenSX+"'></i>" +
                    "<i class='fa-solid fa-trash produce-action produce-remove' data-idproduce='" +
                    e.ID +
                    "'></i>"+
                    "</td>"+
                    "</tr>";
      })

      $('.produce--table').html(temp);

      //remove produce
      $('.produce-remove').click(function(){
        let ID = $(this).attr("data-idproduce");
        $.post("./Branch/removeProduce", {ID:ID}, function(data){
          if(data)
          {
            alert("Xóa không thành công.!!! Hiện đang có mặt hàng của hãng sản xuất này");
          }
          else
          {
            loadProduce();
          }
        })
      })

      //update produce
      $('.produce-edit').click(function(){
        editForm("btn-update--produce",null,null,"Edit Produce", "Update");

        let ID = $(this).attr("data-idproduce");
        let name = $(this).attr("data-nameproduce");

        $('.branch--name').val(name);

        $('.btn-update--produce').click(function(){  
          name = $(".branch--name").val();


          $.post("./Branch/updateProduce", {ID:ID,name:name}, function(){
            $(location).attr("href","Branch");
          })
        })
      })
    })
  }

  //search produces
  $('.search--text-produce').keyup(function(){
    loadProduce();
  })

  //search categories
  $('.search--categoires').keyup(function(){
    loadCategories();
  })

  function loadCategories()
  {
    let ID = $('.search--categoires').val();

    $.post("./Product/apiCategories",{ID:ID}, function (data) {
      let obj = JSON.parse(data);
      let temp = '';
  
      obj.forEach(e => {
        temp += "<tr>"+
                    "<td class='category-ID'>"+e.ID+"</td>"+
                    "<td class='category-name'>"+e.tenTL+"</td>"+
                    "<td class='category-name'>"+e.Loai+"</td>"+
                    "<td>"+
                    "<i class='fa-solid fa-pen-to-square produce-action category-edit' data-idcategory='" +
                    e.ID +
                    "'></i>" +
                    "<i class='fa-solid fa-trash produce-action category-remove' data-idcategory='" +
                    e.ID +
                    "'></i>"+
                    "</td>"+
                    "</tr>";
      })
  
      $('.categories--table').html(temp);
  
      $('.category-edit').click(function(){
        editForm(null,null,null,"Edit category");
      })

      //remove categories
      $('.category-remove').click(function(){
        let ID = $(this).attr("data-idcategory");

        $.post("./Branch/removeCategories", {ID:ID}, function(data){
          console.log(data);
          loadCategories();
        })
      })

      //update categories
      $('.category-edit').click(function(){
          let result = `<select class="form-select selectCategory" name="selectCategory" aria-label="Default select example">"
                          "<option class='optionCategory' value="0">Làm sạch da</option>"
                          "<option class='optionCategory' value="1">Dưỡng da</option>"
                          "<option class='optionCategory' value="2">Mặt nạ</option>"
                          "<option class='optionCategory' value="3">Trang điểm</option>"
                      "</select>`;
      
        $('.container-select').html(result);

        let ID = $(this).attr("data-idcategory");

        $.post("./Product/apiCategories", {ID:ID}, function(data){
          let obj = JSON.parse(data);

          let arrCategory = document.querySelectorAll('.optionCategory');

          arrCategory.forEach(e => {
            if(obj[0].Loai == e.value)
            {
              e.setAttribute("selected", true);
            }
          })

          $('.branch--name').val(obj[0].tenTL);
        })

        editForm('btn-update--category','btn-update--brand','btn-update--produce',"Update Category", "Update");
        
        $('.btn-update--category').click(function(){
          let name = $('.branch--name').val();
          let category = $('.selectCategory').val();

          $.post("./Branch/updateCategories", {ID:ID,name:name,category:category}, function(){
            $(location).attr("href","Branch");
          })
        })
      })
    })
  }

  function loadBrands()
  {
    let keyword = $('.search--text-brand').val();

    $.post("./Product/apiBrands",{keyword:keyword}, function (data) {
      let obj = JSON.parse(data);
      let temp = '';
  
      obj.forEach(e => {
        temp += "<tr>"+
                    "<td class='brand-ID'>"+e.ID+"</td>"+
                    "<td class='brand-name'>"+e.tenBrand+"</td>"+
                    "<td>"+
                    "<i class='fa-solid fa-pen-to-square brand-action produce-action brand-edit' data-namebrand='"+e.tenBrand+"' data-idbrand='" +
                    e.ID +
                    "'></i>" +
                    "<i class='fa-solid fa-trash produce-action  brand-action brand-remove' data-idbrand='" +
                    e.ID +
                    "'></i>"+
                    "</td>"+
                    "</tr>";
      })
  
      $('.brands--table').html(temp);
   
      //update brand
      $('.brand-edit').click(function(){
        editForm("btn-update--brand",null,null,"Update brand", "Update");

        let ID = $(this).attr("data-idbrand");
        let name = $(this).attr("data-namebrand");

        $('.branch--name').val(name);

        $('.btn-update--brand').click(function(){  
          name = $(".branch--name").val();

          $.post("./Branch/updateBrand", {ID:ID,name:name}, function(){
            $(location).attr("href","Branch");
          })
        })
      })

      //remove brand
      $('.brand-remove').click(function(){
        let ID = $(this).attr("data-idbrand");

        $.post("./Branch/removeBrand", {ID:ID}, function(data){
          if(data)
          {
            alert("Xóa không thành công.!!! Hiện đang có mặt hàng của hãng sản xuất này");
          }
          else
          {
            loadBrands();
          }
        })
      })
    })
  }

  //search brand
  $('.search--text-brand').keyup(function(){
    loadBrands();
  })

  $('.produce__inserts').click(function(){
    editForm('btn-insert--produce','btn-insert--brand','btn-insert--category',"Insert Produces", "Insert");
    $('.selectCategory').remove();

    $('.btn-insert--produce').click(function(){
      let name = $('.branch--name').val();

      $.post('./branch/insertProduce', {name:name}, function(data){
        $(location).attr("href","Branch");
      })
    })
  })

  $('.category__inserts').click(function(){
    editForm('btn-insert--category','btn-insert--brand','btn-insert--produce',"Insert Categories", "Insert");

    let result = `<select class="form-select selectCategory" name="selectCategory" aria-label="Default select example">"
                      "<option class='optionCategory' value="0">Làm sạch da</option>"
                      "<option class='optionCategory' value="1">Dưỡng da</option>"
                      "<option class='optionCategory' value="2">Mặt nạ</option>"
                      "<option class='optionCategory' value="3">Trang điểm</option>"
                  "</select>`;
    $('.container-select').html(result);

    $('.btn-insert--category').click(function(){
      let name = $('.branch--name').val();
      let category = $('.selectCategory').val();

      $.post('./branch/insertCategories', {name:name, category:category}, function(){
        $(location).attr("href","Branch");
      })
    })
  })

  $('.brand__inserts').click(function(){
    editForm('btn-insert--brand','btn-insert--produce','btn-insert--category',"Insert Brands", "Insert");
    $('.selectCategory').remove();

    $('.btn-insert--brand').click(function(){
      let name = $('.branch--name').val();

      $.post('./branch/insertBrand', {name:name}, function(){
        $(location).attr("href","Branch");
      })
    })
  })

  function editForm(classAdd, classRemove1, classRemove2, content, submit)
  {
    $('.btn-edit').addClass(classAdd);
    $('.btn-edit').removeClass(classRemove1);
    $('.btn-edit').removeClass(classRemove2);
    document.getElementById("cbCheckLabel").checked = true;
    $('.branch-edit--title').html(content);
    $('.btn-edit').html(submit)
  }
})