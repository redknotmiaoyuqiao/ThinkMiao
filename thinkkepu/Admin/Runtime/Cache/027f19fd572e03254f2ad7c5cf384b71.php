<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/kp_top.jpg">
    <title>ThinkMiao控制台</title>
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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">ThinkMiao控制台</a>
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
    <li><a href="/thinkkepu/admin.php/index/admin_subject">页面管理</a></li>
    <li><a href="/thinkkepu/admin.php/index/admin_static_apge">静态页面管理</a></li>
    <li><a href="/thinkkepu/admin.php/index/admin_page">默认页面管理</a></li>
    <li><a href="/thinkkepu/admin.php/module/carousel">默认模块管理</a></li>
    <li><a href="/thinkkepu/admin.php/index/admin_add_module">自定义模块管理</a></li>
    <!--<li><a href="/thinkkepu/admin.php/index/admin_phone">手机客户端管理</a></li>-->


    <li><a href="">用户管理</a></li>'
</ul>
        </div>
        <div class="col-md-10 col-md-offset-2 main">
            <div class="col-md-2" >
              
                <ul class="nav nav-sidebar">
                    <?php if(is_array($module_list)): $i = 0; $__LIST__ = $module_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <a href="/thinkkepu/admin.php/index/admin_add_module?id=<?php echo ($vo["kepu_custom_module_list_id"]); ?>">
                                <?php echo ($vo["kepu_custom_module_list_title"]); ?>
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>

                <form action="/thinkkepu/admin.php/CustomModule/addlist" method="post">
                    标题：<input type="text" name="title"/><br><br>
                    类型：
                    <select name="type">
                        <option value="1">轮播模块</option>
                        <option value="2">长条模块</option>
                        <option value="3">三列模块</option>
                    </select>
                    <br><br>
                    <button type="submit" class="btn btn-success">添加</button>
                </form>
            
            </div>
            <div class="col-md-9 col-md-offset-1" style="border: 2px solid #CC0000">

                <h3><?php echo ($title); ?></h3>
                <a href="/thinkkepu/admin.php/CustomModule/dellist?id=<?php echo ($idid); ?>">
                <button type="button" class="btn btn-xs btn-danger">删除</button><br><br>
                </a>

            <div class="tabbable" id="tabs-486018">
            
                <table class="table table-striped">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>标题</th>
                    <th>快照</th>
                    <th>地址</th>
                    <th>图片</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                    <?php if(is_array($module_content)): $i = 0; $__LIST__ = $module_content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($vo["kepu_custom_module_content_id"]); ?></td>
                            <td><?php echo ($vo["kepu_custom_module_content_title"]); ?></td>
                            <td><?php echo ($vo["kepu_custom_module_content_show"]); ?></td>
                            <td><?php echo ($vo["kepu_custom_module_content_url"]); ?></td>
                            <td>
                                <img style="height: 50px;width: 100px;" src="/files/<?php echo ($vo["kepu_custom_module_content_imgurl"]); ?>"/>
                            </td>
                            <td>
                                <a href="/thinkkepu/admin.php/CustomModule/delContent?id=<?php echo ($vo["kepu_custom_module_content_id"]); ?>&return=<?php echo ($vo["kepu_custom_module_content_list_id"]); ?>">
                                    <button type="button" class="btn btn-xs btn-danger">删除</button>
                                </a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>

                <form action="/thinkkepu/admin.php/CustomModule/addContent?id=<?php echo ($id); ?>" method="post" enctype="multipart/form-data">
                    题目：<input name="kepu_custom_module_content_title" /><br><br>
                    地址：<input name="kepu_custom_module_content_url" /><br><br>
                    快照：<input name="kepu_custom_module_content_show" /><br><br>
                    图片：<input type="file" name="img"><br><br>
                    <button type="submit" class="btn btn-success">添加元素</button>
                </form>
                <br><br>
            

            </div>
        </div>
    </div>
</div>

</body>
</html>