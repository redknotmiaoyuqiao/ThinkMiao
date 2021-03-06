<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
        <div class="col-md-10 col-md-offset-2 main" >
            <script type="text/javascript" src="http://cdn.hcharts.cn/jquery/jquery-1.8.3.min.js"></script>
            <script type="text/javascript" src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>
            <script type="text/javascript" src="http://cdn.hcharts.cn/highcharts/exporting.js"></script>

            <script>
                $(function () {
                    $('#cpu').highcharts({
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false
                        },
                        title: {
                            text: 'Browser market shares at a specific website, 2010',
                            style:{
                                fontSize: '0px'
                            }
                        },
                        credits:{
                            enabled:false
                        },
                        exporting: {
                            enabled: false
                        },
                        tooltip: {
                            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                        },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                cursor: 'pointer',
                                dataLabels: {
                                    enabled: true,
                                    color: '#000000',
                                    connectorColor: '#000000',
                                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                                }
                            }
                        },
                        series: [{
                            type: 'pie',
                            name: 'Browser share',
                            data: [
                                ['已使用',   <?php echo ($cpu_use); ?>],
                    ['空闲',   <?php echo ($cpu_nonuse); ?> ],
                    ]
                }]
                });
                });
            </script>

            <script>
                $(function () {
                    $('#mem').highcharts({
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false
                        },
                        title: {
                            text: 'Browser market shares at a specific website, 2010',
                            style:{
                                fontSize: '0px'
                            }
                        },
                        credits:{
                            enabled:false
                        },
                        exporting: {
                            enabled: false
                        },
                        tooltip: {
                            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                        },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                cursor: 'pointer',
                                dataLabels: {
                                    enabled: true,
                                    color: '#000000',
                                    connectorColor: '#000000',
                                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                                }
                            }
                        },
                        series: [{
                            type: 'pie',
                            name: 'Browser share',
                            data: [
                                ['已使用',   <?php echo ($mem_use); ?>],
                    ['空闲',   <?php echo ($mem_nonuse); ?>],
                    ]
                }]
                });
                });
            </script>

            <h2 class="sub-header">服务器硬件资源</h2>
            <div class="col-md-6">
                <h4>CPU使用率</h4>
                <div id="cpu" style="min-width:100%"></div>

            </div>
            <div class="col-md-6">
                <h4>内存使用率</h4>
                <div id="mem" style="min-width:100%"></div>

            </div>
            <h2 class="sub-header">服务器信息</h2>
            <div class="col-md-12" style="margin-top: 40px">
                <h4>服务器版本：<?php echo php_uname(); ?></h4>
            </div>

        </div>
    </div>
</div>

</body>
</html>