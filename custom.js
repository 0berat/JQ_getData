$(document).ready(function () {

    $(".send_btn").click(function () {
        var data = {
            full_name : $("#full_name").val(),
            email : $("#email").val(),
            phone : $("#phone").val()
        }
        // $.post("adres",{data},function (callback function) {})

        $.post("http://beratt.cf/telefonrehberi/insert.php",data,function (response){
                alert(response);
        $(".refresh_btn").click();
        })



    })
$(".refresh_btn").click(function () {
    $.get("http://beratt.cf/telefonrehberi/list.php",{},function (response) {
        var jsonData =JSON.parse(response);
        $(".list").html(''); //butona basıldığında verileri siler
        $(jsonData).each(function (index,item) {
            var line = item.full_name + "["+ item.email +"]" + "[" +item.phone + "]"
            $(".list").append("<li> "+ line +" </li>")


        })
    })
})
})
