<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title" content="LayoutIt! - Bootstrap可视化布局系统">
    <meta name="description" content="LayoutIt! 可拖放排序在线编辑的Bootstrap可视化布局系统">
    <meta name="keywords" content="可视化,布局,系统">
    <title>可视化布局系统</title>

    <!-- Le styles -->
    <link href="__PUBLIC__/css/page_style.css" rel="stylesheet">
    <link href="__PUBLIC__/layoutit/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="__PUBLIC__/layoutit/css/layoutit.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="__PUBLIC__/layoutit/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="__PUBLIC__/layoutit/img/favicon.png">

    <script type="text/javascript" src="__PUBLIC__/layoutit/js/jquery-2.0.0.min.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="__PUBLIC__/layoutit/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/layoutit/js/jquery-ui.js"></script>
    <script type="text/javascript" src="__PUBLIC__/layoutit/js/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/layoutit/js/jquery.htmlClean.js"></script>
    <script type="text/javascript" src="__PUBLIC__/layoutit/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="__PUBLIC__/layoutit/ckeditor/config.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Phone/main.js"></script>
    <script type="text/javascript" src="__PUBLIC__/admin_write/jquery.form.js"> </script>
</head>

<body style="min-height: 660px; cursor: auto;" class="edit">
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
            </button>
            <a class="brand" href="/">
                <img src="">山西科普网</a>

            <div class="nav-collapse collapse">
                <ul class="nav" id="menu-layoutit">
                    <li class="divider-vertical"></li>
                    <li>

                        <div class="btn-group" data-toggle="buttons-radio">
                            <button type="button" id="edit" class="btn btn-primary active"><i class="icon-edit icon-white"></i>编辑
                            </button>
                            <button type="button" class="btn btn-primary" id="devpreview"><i class="icon-eye-close icon-white"></i>布局编辑
                            </button>
                            <button type="button" class="btn btn-primary" id="sourcepreview"><i class="icon-eye-open icon-white"></i>预览
                            </button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary" onclick="onupdate()"><i
                                    class="icon-chevron-down icon-white"></i>更改
                            </button>
                            <button class="btn btn-primary" href="#clear" id="clear"><i class="icon-trash icon-white"></i>清空
                            </button>
                        </div>

                    </li>
                </ul>
                <ul class="nav pull-right">
                    <li>

                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row-fluid">
        <div class="">
            <div class="sidebar-nav">
                <ul class="nav nav-list accordion-group">
    <li class="nav-header">

        <i class="icon-plus icon-white"></i> 布局设置
    </li>
    <li style="display: list-item;" class="rows" id="estRows">
        <div class="lyrow ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span>

            <div class="preview">
                <input value="12" type="text">
            </div>
            <div class="view">
                <div class="row-fluid clearfix">
                    <div class="span12 column"></div>
                </div>
            </div>
        </div>


    </li>
</ul>
<ul class="nav nav-list accordion-group">
    <li class="nav-header"><i class="icon-plus icon-white"></i> 内容
    </li>
    <li style="display: none;" class="boxes" id="elmBase">
        <div style="border: 0px solid red">
            <input id="s_id" type="text" style="width: 153px"/>
            <input id="s_btn" onclick="s_on_btn()" type="button" style="width: 100%" value="搜索"/>

            <p id="s_show"></p>
        </div>

        <script>
            onload = function () {

                $("#model4").hide();

            }

            function getLocalTime(nS) {
                return new Date(parseInt(nS) * 1000).toLocaleString().replace(/年|月/g, "-").replace(/日/g, " ");
            }

            function s_on_btn() {
                $("#model4").hide();
                var s = $("#s_id").val();

                $.get("/thinkkepu/admin.php/Subject/getwen?id=" + s,
                        function (result) {
                            var res = JSON.parse(result);

                            $("#model4_title").html('<a href="/thinkkepu/index.php/Index/wen?art_id=' + res['kepu_art_id'] + '">' +
                            res['kepu_art_title'] + '</a>');
                            $("#model4_show").html(res['kepu_art_show']);
                            $("#model4_img").attr("src", "/files/" + res['kepu_art_img']);
                            $("#model4_class").html(res['kepu_art_class']);
                            $ti = getLocalTime(res['kepu_art_time']);
                            $("#model4_time").html(res['kepu_art_author'] + "   " + $ti);

                            //$("#model4_id").val(res['kepu_art_id']);
                            $("#model4_id").attr("value",res['kepu_art_id']);
                            $("#model4").show();
                        }
                );
            }
        </script>

        <div class="box box-element ui-draggable" id="model4">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i>删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>
                                拖动
                            </span>

            <div class="preview">图片 标题 快照</div>
            <div class="view">
                <div class="row-fluid clearfix">

                    <div class="span4">
                        <p id="model4_class">计算机</p>
                        <img width="300px" height="250px" id="model4_img"
                             src="__PUBLIC__/layoutit/img/a.jpg">
                    </div>
                    <div class="span8">
                        <p id="model4_time">作者 2015/1/15</p>
                        <h4 contenteditable="true" id="model4_title">标题</h4>

                        <p contenteditable="true" id="model4_show">neirong</p>
                    </div>

                    <input id="model4_id" hidden="hidden" value="-1">
                </div>
                <hr>
            </div>
        </div>


    </li>
</ul>
            </div>
        </div>

        <!--/span-->
        <div class="demo ui-sortable" style="min-height: 304px; ">
            <?php echo ($save); ?>
        </div>



        <!-- end demo -->
        <!--/span-->
        <div id="download-layout">
            <div class="container-fluid"></div>
        </div>
    </div>
    <!--/row-->
</div>

<!--/.fluid-container-->
<div class="modal hide fade" role="dialog" id="editorModal">
    <div class="modal-header"><a class="close" data-dismiss="modal">×</a>

        <h3>编辑</h3>
    </div>
    <div class="modal-body">
        <p>
            <textarea id="contenteditor"></textarea>
        </p>
    </div>
    <div class="modal-footer"><a id="savecontent" class="btn btn-primary" data-dismiss="modal">保存</a> <a class="btn" data-dismiss="modal">关闭</a>
    </div>
</div>
<div class="modal hide fade" role="dialog" id="downloadModal">
    <div class="modal-header"><a class="close" data-dismiss="modal">×</a>

        <h3>下载</h3>
    </div>
    <div class="modal-body">
        <p>专题标题</p>
        <input type="text" id="page_title" />
        <br>

        <p>专题快照</p>
        <textarea type="text" id="page_show"></textarea>
    </div>
    <div class="modal-footer"><a class="btn" onclick="upload()">提交</a><a class="btn" data-dismiss="modal">关闭</a>
    </div>
</div>
<div class="modal hide fade" role="dialog" id="shareModal">
    <div class="modal-header"><a class="close" data-dismiss="modal">×</a>

        <h3>保存</h3>
    </div>
    <div class="modal-body">保存成功</div>
    <div class="modal-footer"><a class="btn" data-dismiss="modal">Close</a>
    </div>
</div>

</body>

</html>