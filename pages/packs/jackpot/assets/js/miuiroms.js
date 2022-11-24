function index(lang){
    $.ajax({
        //请求方式
        type : "GET",
        //文件位置
        url : "../data/devices.json",
        //返回数据格式为json,也可以是其他格式如
        dataType : "JSON",
        //请求成功后要执行的函数，拼接html
        success:function(data){
            //alert(data);
            if (lang == "cn") {
                devices = data["cn"]["su"];
                list = "";
                var i = 0;
                dp = "https://roms.miuier.com/cn/devices/"
                for(i in devices){
                    $name = devices[i]["name"];
                    if(i == "star"){
                        list = list + "<span><a href = " +dp +i+">"+ $name +"</a></span> ";
                    }else{
                        list = list + "<span><a href = " +dp +i+">"+ $name +"</a></span> /";
                    }
                }
                $("#devicelist").append(list);
            }
            else if(lang == "en"){
                devices = data["en"]["su"];
                list = "";
                var i = 0;
                dp = "https://roms.miuier.com/en/devices/"
                for(i in devices){
                    $name = devices[i]["name"];
                    if(i == "star"){
                        list = list + "<span><a href = " +dp +i+">"+ $name +"</a></span> ";
                    }else{
                        list = list + "<span><a href = " +dp +i+">"+ $name +"</a></span> /";
                    }
                }
                $("#devicelist").append(list);
            }

        }
    });

};
function sitever() {
			$.ajax({
				//请求方式
				type : "GET",
				//文件位置
				url : "../data/site.json",
				//返回数据格式为json,也可以是其他格式如
				dataType : "JSON",
				//请求成功后要执行的函数，拼接html
				success:function(data){
					//alert(data);
					ver = data["sitever"];
                    date = data["date"];
					$("#sitever").append("站店版本："+ver);
                    $("#date").append("更新日期："+date);
				}
			});
}