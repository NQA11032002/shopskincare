
/* tab__selection */

var tabDetail = document.querySelectorAll('.tab__selection');

changeColor(tabDetail,0);

tabDetail[0].onclick = function()
{
    changeDisplay(".tabDescription",'.guideBuyProduct','.provisionService')
    changeColor(tabDetail, 0);
}
tabDetail[1].onclick = function()
{
    changeDisplay(".guideBuyProduct",'.tabDescription','.provisionService')
    changeColor(tabDetail, 1);
}
tabDetail[2].onclick = function()
{
    changeDisplay(".provisionService",'.guideBuyProduct','.tabDescription')
    changeColor(tabDetail, 2);
}

function changeDisplay(nameChange, name1, name2)
{
    document.querySelector(nameChange).style.display = "block";
    document.querySelector(name1).style.display = "none";
    document.querySelector(name2).style.display = "none";
}

function changeColor(tabDetail, index)
{
    for(var i = 0; i < tabDetail.length; i++)
    {
        if(index == i)
        {
            tabDetail[i].style.color = "var(--HeaderTop--color)";
            tabDetail[i].style.borderColor = "var(--HeaderTop--color)";
        }
        else if(index != i)
        {
            tabDetail[i].style.color = "#222222";
            tabDetail[i].style.borderColor = "transparent";
        }
    }
}
