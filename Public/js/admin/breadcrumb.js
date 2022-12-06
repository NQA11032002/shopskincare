let realtimeDate = function(){
    let currentDate = new Date();
    let today = currentDate.getDate() + "-" + currentDate.getMonth() + "-" + currentDate.getFullYear() + " " + currentDate.getHours() + ":" + currentDate.getMinutes() + ":" + currentDate.getSeconds();;
    let dateShow = document.querySelector('.currentDate');
    dateShow.innerHTML = today;
}

realtimeDate();

setInterval(() => {
    realtimeDate();
},1000);

let url = location.href.split("/")[5];
let toPagination = document.querySelector('.pagination-to');
toPagination.innerHTML = "/ " + url;
