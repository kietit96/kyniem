$(document).ready(function () {
    new WOW().init();
    $("#one .wrapper.envelope-box").hover(function () {
        $(this).siblings(".title1").css("opacity", 0)
        $(this).siblings(".arrow").css("opacity", 0)
    }, function () {
        $(this).siblings(".title1").css("opacity", 1)
        $(this).siblings(".arrow").css("opacity", 1)
    })
    const day = 10
    const month = 12
    const year = 1999

    document.getElementById("submit-datebirth").addEventListener("click", function () {
        const input_day = document.querySelector("#zero select[name='day']").value
        const input_month = document.querySelector("#zero select[name='month']").value
        const input_year = document.querySelector("#zero input[name='year']").value
        if (input_day == day && input_month == month && input_year == year) {
            $("#zero").fadeOut("slow")
            $("#one").fadeIn("slow")
            document.cookie = "checkdatebirth=yes";
        } else {
            alert('Nhập sai òi nhập lại đi');
        }
    })
    document.querySelector("#one .envelope-box").addEventListener("click", function () {
        $("#one").fadeOut("slow")
        $("#two").fadeIn("slow")
    })
})