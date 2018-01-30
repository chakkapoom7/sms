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

function show_count() {
    var lang ;
    var input_data = $("#message").val();
    var english = /^[A-Za-z0-9]*$/;
    if(english.test(input_data){
        lang = 'en';
    }else{
        lang = 'other';
    }
    document.getElementById("status").innerHTML =  lang + " " + input_data.length + " / 160";
}