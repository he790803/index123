var lat = "";
var lng = "";
var air = "";

function initMap() {
    var Station_latlng = { lat: 25.046891, lng: 121.516602 }; // 台北車站的經緯度
    var map = new google.maps.Map(document.getElementById('map-canvas'), {
        zoom: 14, //放大的倍率
        center: Station_latlng //初始化的地圖中心位置
    });
    //--------下面是呼叫一個新marker------
    var marker = new google.maps.Marker({
        //position: Station_latlng,
        position: new google.maps.LatLng(lat, lng), //marker的放置位置
        map: map //這邊的map指的是第四行的map變數
    });
    console.log(lat, lng);
}

function getData() {
    $.ajax({
        //url: 'http://opendata2.epa.gov.tw/AQX.json',
        url: 'http://opendata2.epa.gov.tw/AQI.json',
        dataType: 'json',
        methods: 'GET',
        success: (response) => {
            console.log(response);
            air = response;
            console.log(air);
        }
    })
}
getData();

function print_value(lat, lng) {
    $('#aircard').empty();
    // document.getElementById("result").innerHTML = document.getElementById("addr").value;
    var k = document.getElementById("addr").value;
    console.log(k);
    initMap();
    air.forEach((o) => {
        lat = o.Latitude;
        lng = o.Longitude;
        console.log(lat, lng);
        var color = o.Status;
        //for (var i = 0; i < o.length; i++) {
        if (o.County == k) {
            if (o.Status == "普通") {
                $("#aircard").append(`
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                <div class="card text-white mb-3" style="width: 18rem;">
                    <div class="card-body airccc normal">
                        <h5 class="card-title">行政區:  ${o.SiteName}</h5>
                        <h6 class="card-text">空氣狀況: ${o.Status}</h6>
                        <h6>更新時間:   ${o.PublishTime}</h6>
                    </div>
                </div>
            </div>
                          `);
            } else {
                $("#aircard").append(`
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                <div class="card text-white mb-3" style="width: 18rem;">
                    <div class="card-body airccc">
                        <h5 class="card-title">行政區:  ${o.SiteName}</h5>
                        <h6 class="card-text">空氣狀況: ${o.Status}</h6>
                        <h6>更新時間:   ${o.PublishTime}</h6>
                    </div>
                </div>
            </div>
                          `);
            }

        }
    });
}