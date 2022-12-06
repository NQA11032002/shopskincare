$(document).ready(function(){
    chartProductSelled();

    function chartProductSelled()
    {
        let arrProductSelled = new Array();
        let arrMonth = new Array();

        $.post("Home/chartProductSelled", function(data){
            let obj = JSON.parse(data);

            obj.forEach(element => {
                arrProductSelled.push(element.total);
                arrMonth.push(changedMonth(element.month));
            });
        })

        let datas = {
            labels: arrMonth,
            datasets: [
                {
                    label: 'Product Selled',
                    backgroundColor: "red",
                    borderColor: 'red',
                    data: arrProductSelled,
                },
            ],
        }
        
        let config = {
            type: 'line',
            data: datas,
            tension: 0.4
        }
        
        let canvas = document.querySelector('.canvas');
        let chart = new Chart(canvas, config);
    }

    function changedMonth(value)
    {
        let month = "";

        switch(value)
        {
            case '1': month = "January";
                break;
            case '2': month = "February";
                break;
            case '3': month = "March";
                break;
            case '4': month = "April";
                break;
            case '5': month = "May";
                break;
            case '6': month = "June";
                break;
            case '7': month = "July";
                break;
            case '8': month = "August";
                break;
            case '9': month = "September";
                break;
            case '10': month = "October";
                break;
            case '11': month = "November";
                break;
            case '12': month = "December";
                break;
        }

        return month;
    }
})
