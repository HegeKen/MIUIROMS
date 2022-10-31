function weeklyCN(lang){
    $.ajax({
        //请求方式
        type : "GET",
        //文件位置
        url : "../../data/weekly.json",
        //返回数据格式为json,也可以是其他格式如
        dataType : "JSON",
        //请求成功后要执行的函数，拼接html
        success:function(data){
            //alert(data);
            if (lang == "cn") {
                latest = data["latest"];
                console.log(latest);
                week = data["weeks"];
                list = "";
                url = "https://roms.miuier.com/cn/weekly/"
                console.log(week);
                for(i=0;i<13;i++){
                    miuiver = week[i]["ver"];
                    console.log(miuiver);
                    list = list + "<p>" +miuiver +"</p>";
                    weeks = week[i]["included"];
                    weeks.forEach(function(element){
                        console.log(element);
                            //list = list + "<a href = \"" +url +"week-" +element +"-CN.html><button class=\"mdui-btn\">第" +element +"周</button></a>";
                            button = "<button class=\"mdui-btn\"><a href = \""+url +"week-"+element+"-CN.html\">第"+element+"周</a></button>";
                            list = list + button;
                    });
                }
                $("#weeks").append(list);
            }
        }
});
}