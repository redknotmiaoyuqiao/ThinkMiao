/**
 * Created by lenovo on 2015/3/12.
 */
onload = function(){
    var div_comment = $("#div_comment");
    if(div_comment){
        getComment($("#art_id").val());
    }

    abc();
}



function getComment(id){
    var div_comment = $("#div_comment");
    $.get(
        "/thinkkepu/index.php/Comment/getComment?art_id=" + id,
        function(res){
            div_comment.html("");
            var obj = JSON.parse(res);
            for(var i=0;i<obj.length;i++){
                var comment = obj[i];
                var str = "";
                str = str + "<div><hr>";
                str = str + "<p style='color: #3399FF'>" + comment.kepu_comment_user_id + " 于 " + comment.kepu_comment_time + " 发表评论：" + '</p><br>';
                str = str + comment.kepu_comment_content;
                str = str + "<br><hr></div>";
                div_comment.html(div_comment.html() + str);
            }
        }
    );
}

function onupcomment(){
    var content = $("#tv_comment_content").val();
    var txtCheckCode = $("#txtCheckCode").val();
    $("#show").html("");
    if(content != ""){
        $.post(
            "/thinkkepu/index.php/Comment/ajaxAddComment?art_id=" + $("#comment_art_id").val(),
            {comment_content:content,checkcode:txtCheckCode},
            function(res){
                console.log(res);
                if(res == "echckerror"){
                    $("#show").html("验证码错误");
                    $("#txtCheckCode").val("");
                    $("#check_img").attr("src","/thinkkepu/index.php/Common/getCodeImage?d="+Math.random());
                }
                if(res == "ok"){
                    getComment($("#comment_art_id").val());
                    $("#tv_comment_content").val("");
                    $("#txtCheckCode").val("");
                    $("#check_img").attr("src","/thinkkepu/index.php/Common/getCodeImage?d="+Math.random());
                }
            },
            "text"
        );
    }
    else{
        $("#show").html("输入不可为空");
    }
}