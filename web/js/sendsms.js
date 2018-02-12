$(function () {
    var delayID = null;
    $("#message").on("keyup", function (event) {
        if (delayID) { clearTimeout(delayID); }
        delayID = setTimeout(function () {
            show_count(); // ทำคำสั่งที่ต้องการ
            delayID = null;
        }, 200);
    });
});

function count_smstext(text) {
    let lang ;
    let english = /^[A-Za-z0-9]*$/;
    if(english.test(input_data){
        lang = 'en';
    }else{
        lang = 'other';
    }
    
    return input_data.length;
}

function show_count() {
    document.getElementById("status").innerHTML =  lang + " " + count_smstext($("#message").val()) + " / 160";
}

// function get_feild() {
//     $.ajax({
//         type: "POST",
//         url: 'getdata.php',
//         data: varData,
//         success: function (result) {
//             // console.log(result);
            
//             let obj = jQuery.parseJSON(result);
//             if (obj != '') {
//                 $.each(obj, function (key, val) {
//                     tr_res = "<tr>";
//                     tr_res += "<td>" + val['date'] + "</td>";
//                     tr_res += "<td>" + val['time'] + "</td>";
//                     tr_res += "<td>" + val['user'] + "</td>";
//                     tr_res += "<td>" + val['shopcode'] + "</td>";
//                     tr_res += "<td>" + val['shopname'] + "</td>";
//                     tr_res += "<td>" + val['openstatus'] + "</td>";
//                     tr_res += '<td><button onclick="window.open(\'detail.php?id=' + val['id'] + '\',\'_blank\')" type="button" class="btn btn-dark" > รายละเอียด </button></td>';
//                     tr_res += "</tr>";
//                     $('#tbl_info').append(tr_res);
//                 });
//             }
//             console.log("clear loader");
//             $("#loaderbox").empty();
//         },
//         error: function (failinfo) {
//             console.log("clear loader"); failinfo
//             console.log(failinfo);
//             $("#loaderbox").empty();
//             $("#loaderbox").append("เกิดข้อผิดพลาดบางอย่าง");
//         }
//     });
// };



