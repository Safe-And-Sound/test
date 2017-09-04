$(function () {
    console.log(11);
    $.ajax({
        type: "GET",
        url: "https://106.14.191.220:9443/services/questionnaire/SelectCount/?num=1",
        dataType: "json",
        headers:{
			"Accept": "application/json"
		},
        success: function (data) {
            console.log(data.datas.data[0]);
        }
    });
});