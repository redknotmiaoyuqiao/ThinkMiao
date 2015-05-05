<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
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
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
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
        <div class="col-md-10 col-md-offset-2 main">

            <ul class="nav nav-tabs">

    <li>
        <a href="/thinkkepu/admin.php/module/carousel">轮播页</a>
    </li>
    <li>
        <a href="/thinkkepu/admin.php/module/subject">专题列表</a>
    </li>
    <li>
        <a href="/thinkkepu/admin.php/module/activity">活动列表</a>
    </li>

</ul>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>编号</th><th>题目</th><th>图片</th><th>地址</th><th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($subject_list)): $i = 0; $__LIST__ = $subject_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$subject_vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($subject_vo["kepu_subjectlist_id"]); ?></td>
                        <td><?php echo ($subject_vo["kepu_subjectlist_title"]); ?></td>
                        <td>
                            <a href="<?php echo ($subject_vo["kepu_subjectlist_img"]); ?>">
                                <img style="height: 50px;width: 100px;" src="<?php echo ($subject_vo["kepu_subjectlist_img"]); ?>"/>
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo ($subject_vo["kepu_subjectlist_url"]); ?>"><?php echo ($subject_vo["kepu_subjectlist_url"]); ?></a>
                        </td>
                        <td>
                            <a href="/thinkkepu/admin.php/Module/delSubject?id=<?php echo ($subject_vo["kepu_subjectlist_id"]); ?>">
                                <button type="button" class="btn btn-xs btn-danger">删除</button>
                            </a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <div class="col-md-4">
                <form action="/thinkkepu/admin.php/Module/addSubject" method="post" enctype="multipart/form-data">
                    题目：<input type="text" name="title"/><br><br>
                    地址：<input type="text" name="url"/><br><br>
                    图片：<input type="file" name="img"><br><br>

                    <input type="submit" value="添加">
                </form>
            </div>



        </div>
    </div>
</div>





</body>
</html>