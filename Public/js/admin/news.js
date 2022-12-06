$(document).ready(function(){

    $('.news__inserts').click(function () {
        document.getElementById("cbCheckLabel").checked = true;

        let img = document.querySelector('.products__insert--image-3');
        img.setAttribute('src', null);

        let inputImg = document.querySelector('.image-file3');
        inputImg.setAttribute('value', null);

        $('.news__title').val('');
        $('.news__content').val('');
        $("option[name='news__category_2']").attr('selected', false);
        $('.edit-product__image').fadeIn(1);
        $('.new__id').val(null);

    });

    $('.customer-edit__close').click(function () {
        document.getElementById("cbCheckLabel").checked = false;
    });

    $('.news__delete').click(function(){
        let ID = $(this).attr("data-id");

        $.post("./News/removeNews", {ID:ID}, function(){
            $(location).attr("href","News");
        })
    })
})