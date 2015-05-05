<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/kp_top.jpg">
    <title>山西科普网控制台</title>
    <link href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="__PUBLIC__/dashboard/css/dashboard.css" rel="stylesheet">
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/dashboard/js/docs.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/admin_write/jquery.form.js"> </script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">山西科普网</a>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar">
            <ul class="nav nav-sidebar">
    <?php
 ?>


    <li><a href="/thinkkepu/admin.php/index/admin_info">网站概况</span></a></li>
    <li><a href="/thinkkepu/admin.php/index/admin_sort">文章类型管理</a></li>
    <li><a href="/thinkkepu/admin.php/index/admin_art">文章大库</a></li>
    <li><a href="/thinkkepu/admin.php/index/admin_subject">专题管理</a></li>
    <li><a href="/thinkkepu/admin.php/index/admin_static_apge">静态页面管理</a></li>
    <li><a href="/thinkkepu/admin.php/index/admin_page">默认页面管理</a></li>
    <li><a href="/thinkkepu/admin.php/module/carousel">模块管理</a></li>
    <li><a href="/thinkkepu/admin.php/index/admin_add_module">自定义模块管理</a></li>
    <!--<li><a href="/thinkkepu/admin.php/index/admin_phone">手机客户端管理</a></li>-->

    
    <li><a href="">用户管理</a></li>'
</ul>
        </div>
        <div class="col-md-10 col-md-offset-2 main" >

            题目：<input type="text" id="wen_title" style="width: 400px"/>
            <br>
            <br>
            作者：<input type="text" id="wen_author" style="width: 400px"/>
            <br>
            <br>
            类型：
            <select id="wen_class">
                <?php if(is_array($wen_list)): $i = 0; $__LIST__ = $wen_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["kepu_sort_id"]); ?>"><?php echo ($vo["kepu_sort_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
            <br>
            <br>
            图片：

            <style type="text/css">

            .demo p{line-height:32px}
            .btn{position: relative;overflow: hidden;margin-right: 4px;display:inline-block;*display:inline;padding:4px 10px 4px;font-size:14px;line-height:18px;*line-height:20px;color:#fff;text-align:center;vertical-align:middle;cursor:pointer;background-color:#5bb75b;border:1px solid #cccccc;border-color:#e6e6e6 #e6e6e6 #bfbfbf;border-bottom-color:#b3b3b3;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}
            .btn input {position: absolute;top: 0; right: 0;margin: 0;border: solid transparent;opacity: 0;filter:alpha(opacity=0); cursor: pointer;}
            .progress { position:relative; margin-left:100px; margin-top:-24px; width:200px;padding: 1px; border-radius:3px; display:none}
            .bar {background-color: green; display:block; width:0%; height:20px; border-radius: 3px; }
            .percent { position:absolute; height:20px; display:inline-block; top:3px; left:2%; color:#fff }
            .files{height:22px; line-height:22px; margin:10px 0}
            .delimg{margin-left:20px; color:#090; cursor:pointer}
        </style>
            <div class="demo">
                <p>说明：示例中只允许上传gif/jpg格式的图片，图片大小不能超过500k。</p>
                <div class="btn">
                    <span>添加附件</span>
                    <input id="fileupload" type="file" name="mypic">
                </div>
                <div class="progress">
                    <span class="bar"></span><span class="percent">0%</span >
                </div>
                <div class="files"></div>
                <div id="showimg"></div>
            </div>
            <script type="text/javascript">

                var pic_name;

                function ondel(){
                    var pic = $(this).attr("rel");
                    console.log("hahahhahahahahaha");
                    $.post("/thinkkepu/admin.php/Article/addimage?act=delimg",{imagename:pic_name},function(msg){
                        if(msg==1){
                            $(".files").html("删除成功.");
                            $('#showimg').empty();
                            $(".progress").hide();
                            $(".btn span").html('添加图片');
                            $(".btn").show();
                        }else{
                            alert(msg);
                        }
                    });
                }

                $(function () {
                    var bar = $('.bar');
                    var percent = $('.percent');
                    var showimg = $('#showimg');
                    var progress = $(".progress");
                    var files = $(".files");
                    var btn = $(".btn span");



                    $("#fileupload").wrap("<form id='myupload' action='/thinkkepu/admin.php/Article/addimage' method='post' enctype='multipart/form-data'></form>");
                    $("#fileupload").change(function(){
                        $("#myupload").ajaxSubmit({
                            dataType:  'json',
                            beforeSend: function() {
                                showimg.empty();
                                progress.show();
                                var percentVal = '0%';
                                bar.width(percentVal);
                                percent.html(percentVal);
                                btn.html("上传中...");
                            },
                            uploadProgress: function(event, position, total, percentComplete) {
                                var percentVal = percentComplete + '%';
                                bar.width(percentVal);
                                percent.html(percentVal);
                            },
                            success: function(data) {

                                pic_name = data.pic;

                                files.html("<b>"+data.name+"("+data.size+"kb)</b> <span class='delimg' onclick='ondel()' rel='"+data.pic+"'>删除</span>");
                                var img = "/files/"+data.pic;
                                showimg.html("<img style='width:300px' src='"+img+"'>");
                                $(".btn").hide();
                                $(".progress").hide();

                                console.log(pic_name);
                            },
                            error:function(xhr){
                                btn.html("上传失败");
                                bar.width('0');
                                files.html(xhr.responseText);
                            }
                        });
                    });
                });
            </script>


            <br>
            <br>
            快照：
            <br>
            <textarea type="text" id="wen_show" style="width: 100%;height: 150px"></textarea>
            <br>
            <br>
            <div style="width: 100%">
                <script id="editor" type="text/plain" style="width: 100%;height: 600px"></script>
            </div>
            <br>
            <div id="btns">
                <div>
                    <button onclick="upload()">提交</button>
                </div>
            </div>


            <script type="text/javascript">

                //实例化编辑器+9
                //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                var ue = UE.getEditor('editor');

                function upload(){
                    var is = hasContent();
                    if(is == false){
                        var arr = [];
                        arr.push("文章内容为空");
                        alert(arr.join("\n"));
                    }
                    else {
                        var content = getContent();
                        var w_title = document.getElementById("wen_title").value;
                        var w_class = document.getElementById("wen_class").value;
                        var w_author = document.getElementById("wen_author").value;
                        var w_show = document.getElementById("wen_show").value ;
                        post("/thinkkepu/admin.php/Article/add",{wen:content,class:w_class,title:w_title,author:w_author,show:w_show,image:pic_name});
                    }
                }

                function getContent() {
                    var content = UE.getEditor('editor').getContent();
                    return content;
                }

                function post(URL, PARAMS) {
                    var temp = document.createElement("form");
                    temp.action = URL;
                    temp.method = "post";
                    temp.style.display = "none";
                    for (var x in PARAMS) {
                        var opt = document.createElement("textarea");
                        opt.name = x;
                        opt.value = PARAMS[x];
                        // alert(opt.name)
                        temp.appendChild(opt);
                    }
                    document.body.appendChild(temp);
                    temp.submit();
                    return temp;
                }

                function setContent(content) {
                    UE.getEditor('editor').setContent('欢迎使用ueditor', content);
                }

                function hasContent() {
                    var is = UE.getEditor('editor').hasContents();
                    console.log(is);
                    return is;
                }
            </script>
        </div>

    </div>
</div>

</body>
</html>