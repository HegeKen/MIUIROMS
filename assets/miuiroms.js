$(document).ready(function() {
    let height = $(document).width();
    if (height > "550") {
        return 0;
    } else {
        $("div#pc").addClass("mdui-hidden");
        $("div#mobile").removeClass("mdui-hidden");
        $("td#r").text("卡刷包");
        $("td#f").text("线刷包");
    }
})