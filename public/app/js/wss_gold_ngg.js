var socket = new WebSocket(
    "wss://online.nggtrade.com/primepush/PreLoginProductPrice/107/ONLINE/A"
);
socket.onmessage = function (event) {
    var json_data = JSON.parse(event.data);
    //console.log(JSON.parse(json_data.pfpd));

    var show = JSON.parse(json_data.pfpd);
    // console.log(show);

    var sell = show.productPriceDTOs[1].sellPrice; //GTA
    var buy = show.productPriceDTOs[1].buyPrice;
    // var name = show.productPriceDTOs[1].productDTO.name;
    var time = show.priceTime_th;
    let date = show.priceDate_th;
    // console.log(sell);
    // console.log(buy);
    // console.log(name);
    // console.log(time);
     console.log(date);
    // Currency
    // var c_sell = new Intl.NumberFormat().format(sell);
    var c_buy = new Intl.NumberFormat().format(buy);
    var cal = sell - (0.025 * sell);
    var show_cal = new Intl.NumberFormat().format(~~cal);
    
    var date_number = new Date();
    var short_date = date_number.toLocaleDateString();

    //document.getElementById("date").innerHTML = short_date;

    // ทองรูปพรรณ
    document.getElementById("show_cal_sell_gold").innerText = show_cal;
    document.getElementById("buy_gold_gta").innerText = c_buy;

    // ทองแท่ง
    document.getElementById("sell_gold_bar").innerText = c_sell;
    document.getElementById("buy_bar").innerText = c_buy;
    // document.getElementById("name").innerText = name;
    // document.getElementById("time").innerText = time;
    // document.getElementById("date2").innerText = date;

    //document.getElementById("date_number").innerText = date.toLocaleDateString("en-GB");

//     let diff = buy - (localStorage.buy || 0);
// console.log(buy);
// console.log(diff);
// localStorage.buy = Math.round(buy);
// document.getElementById("diff").innerText = diff;
}