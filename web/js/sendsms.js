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

