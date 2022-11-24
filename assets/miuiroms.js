$(document).ready(function () {
    let height = $(document).width();
    if (height < "550") {
        $("#pc").addClass("mdui-hidden");
        $("#mobile").removeClass("mdui-hidden");
        $("td #r").text("卡刷包");
        $("td #f").text("线刷包");
    }
})