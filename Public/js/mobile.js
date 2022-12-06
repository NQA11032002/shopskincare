if(document.querySelector('.MainProduct-Menu__Mobile'))
{
    document.querySelector('.MainProduct-Menu__Mobile').onclick = function(){
        document.querySelector('.MainProduct__Menu').style.transform = "translateX(0%)";
        document.querySelector('.MainProduct-Menu__Layout').style.display = "block";
    }
}

if(document.querySelector('.MainProduct-Menu__Mobile--Close'))
{
    document.querySelector('.MainProduct-Menu__Mobile--Close').onclick = function(){
        document.querySelector('.MainProduct__Menu').style.transform = "translateX(100%)";
        document.querySelector('.MainProduct-Menu__Layout').style.display = "none";
    }
}

if(document.querySelector('.MainProduct-Menu__Layout'))
{
    document.querySelector('.MainProduct-Menu__Layout').onclick = function(){
        document.querySelector('.MainProduct__Menu').style.transform = "translateX(100%)";
        document.querySelector('.MainProduct-Menu__Layout').style.display = "none";
        console.log("zxcxz");
    }
}

document.querySelector('.more-Categories').onclick = function(){
    showHiddenCategory('less-Categories','more-Categories');
    
    var arrShow = document.querySelectorAll('.Categories__Contain');

    CategoriesShow(arrShow,"block");
}

document.querySelector('.less-Categories').onclick = function(){
    showHiddenCategory('more-Categories','less-Categories');

    var arrShow = document.querySelectorAll('.Categories__Contain');

    CategoriesShow(arrShow,"none");

    var arrLess = document.querySelectorAll('.Categories--Hidden');

    CategoriesShow(arrLess,"none");

    showHiddenCategory('more-Face','less-Face');
    showHiddenCategory('more-skinLeather','less-skinLeather');
    showHiddenCategory('more-cleanLeather','less-cleanLeather');
    showHiddenCategory('more-skinCare','less-skinCare');
}

document.querySelector('.more-Face').onclick = function(){
    showHiddenCategory('less-Face','more-Face');

    var arrShow = document.querySelectorAll('.Categories--Show__Face');

    CategoriesShow(arrShow,"block");
}

document.querySelector('.less-Face').onclick = function(){
    showHiddenCategory('more-Face','less-Face');

    var arrShow = document.querySelectorAll('.Categories--Show__Face');

    CategoriesShow(arrShow,"none");
}

document.querySelector('.more-cleanLeather').onclick = function(){
    showHiddenCategory('less-cleanLeather','more-cleanLeather');

    var arrShow = document.querySelectorAll('.Categories--Show__cleanLeather');

    CategoriesShow(arrShow,"block");
}

document.querySelector('.less-cleanLeather').onclick = function(){
    showHiddenCategory('more-cleanLeather','less-cleanLeather');

    var arrShow = document.querySelectorAll('.Categories--Show__cleanLeather');

    CategoriesShow(arrShow,"none");
}

document.querySelector('.more-skinLeather').onclick = function(){
    showHiddenCategory('less-skinLeather','more-skinLeather');

    var arrShow = document.querySelectorAll('.Categories--Show__skinLeather');

    CategoriesShow(arrShow,"block");
}

document.querySelector('.less-skinLeather').onclick = function(){
    showHiddenCategory('more-skinLeather','less-skinLeather');

    var arrShow = document.querySelectorAll('.Categories--Show__skinLeather');

    CategoriesShow(arrShow,"none");
}

document.querySelector('.more-skinCare').onclick = function(){
    showHiddenCategory('less-skinCare','more-skinCare');

    var arrShow = document.querySelectorAll('.Categories--Show__skinCare');

    CategoriesShow(arrShow,"block");
}

document.querySelector('.less-skinCare').onclick = function(){

    showHiddenCategory('more-skinCare','less-skinCare');

    var arrShow = document.querySelectorAll('.Categories--Show__skinCare');

    CategoriesShow(arrShow,"none");
}

document.querySelector('.close-MenuMobile').onclick = function(){
    document.querySelector('.Layout-check__Mobile').checked = false;
}

function CategoriesShow(nameClass,status)
{
    for(var i=0; i<nameClass.length; i++)
    {
        if(status == "block")
        {
            nameClass[i].style.display = "block";
        }
        else
        {
            nameClass[i].style.display = "none";
        }
    }
}

function showHiddenCategory(nameShow,nameHidden)
{
    document.querySelector('.'+nameShow).style.display = "block";
    document.querySelector('.'+nameHidden).style.display = "none";
}
