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
    // let lang ;
    // let english = /^[A-Za-z0-9]*$/;
    // if(english.test(input_data){
    //     lang = 'en';
    // }else{
    //     lang = 'other';
    // }
    return input_data.length;
}

function show_count() {
    // document.getElementById("status").innerHTML = lang + " " + count_smstext($("#message").val()) + " / 160";
}

function get_feild() {
    $.ajax({
        type: "POST",
        url: '../service/get_feild.php',
        success: function (result) {
            console.log(result);
            let obj = jQuery.parseJSON(result);
            if (obj != '') {
                $.each(obj, function (key, val) {
                    opt_res = "";
                    opt_res += "<option value=\"" + val['feild'] + "\">" + val['feild'] + "</option>";
                    $('.dd_feild').append(opt_res);
                });
            }
        },
        error: function (failinfo) {
            $("#loaderbox").append("เกิดข้อผิดพลาดบางอย่าง");
        }
    });
};



function mode_change(mode) {
    // $("#phone_input").slideToggle();
    if(mode == 'ph'){
        $("#group_input").hide();
        $("#phone_input").show();
        
    }else if(mode == 'gr'){
        $("#phone_input").hide();
        $("#group_input").show();
    }
}




$(document).ready(get_feild());


function sha_hash(text) {
    var sha256 = new jsSHA('SHA-256', text);
    sha256.update(some_string_variable_to_hash);
    var hash = sha256.getHash("HEX");
    return hash;
}
