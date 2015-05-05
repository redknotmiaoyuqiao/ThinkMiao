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
    <script type="text/javascript" src="__PUBLIC__/layoutit/js/scripts.js"></script>
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
        <div class="lyrow ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span>

            <div class="preview">
                <input value="6 6" type="text">
            </div>
            <div class="view">
                <div class="row-fluid clearfix">
                    <div class="span6 column"></div>
                    <div class="span6 column"></div>
                </div>
            </div>
        </div>
        <div class="lyrow ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span>

            <div class="preview">
                <input value="8 4" type="text">
            </div>
            <div class="view">
                <div class="row-fluid clearfix">
                    <div class="span8 column"></div>
                    <div class="span4 column"></div>
                </div>
            </div>
        </div>
        <div class="lyrow ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span>

            <div class="preview">
                <input value="4 4 4" type="text">
            </div>
            <div class="view">
                <div class="row-fluid clearfix">
                    <div class="span4 column"></div>
                    <div class="span4 column"></div>
                    <div class="span4 column"></div>
                </div>
            </div>
        </div>
        <div class="lyrow ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span>

            <div class="preview">
                <input value="2 6 4" type="text">
            </div>
            <div class="view">
                <div class="row-fluid clearfix">
                    <div class="span2 column"></div>
                    <div class="span6 column"></div>
                    <div class="span4 column"></div>
                </div>
            </div>
        </div>


        <div class="lyrow ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span>

            <div class="preview">
                <input value="1 7 3 1" type="text">
            </div>
            <div class="view">
                <div class="row-fluid clearfix">
                    <div class="span1 column"></div>
                    <div class="span7 column"></div>
                    <div class="span3 column"></div>
                    <div class="span1 column"></div>
                </div>
            </div>
        </div>

    </li>
</ul>
        <ul class="nav nav-list accordion-group">
    <li class="nav-header"><i class="icon-plus icon-white"></i> 基本CSS
    </li>
    <li style="display: none;" class="boxes" id="elmBase">
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span>
									<span class="configuration"><button type="button" class="btn btn-mini" data-target="#editorModal"

                                                                        role="button" data-toggle="modal">编辑

                                    </button> <span class="btn-group"> <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown"

                                                                          href="#">对齐 <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                        <li class="active"><a href="#" rel="">默认</a>
                                        </li>
                                        <li class=""><a href="#" rel="text-left">靠左</a>
                                        </li>
                                        <li class=""><a href="#" rel="text-center">居中</a>
                                        </li>
                                        <li class=""><a href="#" rel="text-right">靠右</a>
                                        </li>
                                    </ul>
									</span> <span class="btn-group"> <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">标记

                                        <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                        <li class="active"><a href="#" rel="">默认</a>
                                        </li>
                                        <li class=""><a href="#" rel="muted">禁用</a>
                                        </li>
                                        <li class=""><a href="#" rel="text-warning">警告</a>
                                        </li>
                                        <li class=""><a href="#" rel="text-error">错误</a>
                                        </li>
                                        <li class=""><a href="#" rel="text-info">提示</a>
                                        </li>
                                        <li class=""><a href="#" rel="text-success">成功</a>
                                        </li>
                                    </ul>
									</span>
									</span>

            <div class="preview">标题栏</div>
            <div class="view">
                <h3 contenteditable="true">h3. 这是一套可视化布局系统.</h3>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"><button type="button"

                                                                                    class="btn btn-mini"

                                                                                    data-target="#editorModal"

                                                                                    role="button"

                                                                                    data-toggle="modal">

            编辑

        </button> <span class="btn-group"> <a class="btn btn-mini dropdown-toggle"

                                              data-toggle="dropdown" href="#">对齐 <span

                class="caret"></span>
        </a>
									<ul class="dropdown-menu">
                                        <li class="active"><a href="#" rel="">默认</a>
                                        </li>
                                        <li class=""><a href="#" rel="text-left">靠左</a>
                                        </li>
                                        <li class=""><a href="#" rel="text-center">居中</a>
                                        </li>
                                        <li class=""><a href="#" rel="text-right">靠右</a>
                                        </li>
                                    </ul>
									</span> <span class="btn-group"> <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">标记

            <span class="caret"></span>
        </a>
									<ul class="dropdown-menu">
                                        <li class="active"><a href="#" rel="">默认</a>
                                        </li>
                                        <li class=""><a href="#" rel="muted">禁用</a>
                                        </li>
                                        <li class=""><a href="#" rel="text-warning">警告</a>
                                        </li>
                                        <li class=""><a href="#" rel="text-error">错误</a>
                                        </li>
                                        <li class=""><a href="#" rel="text-info">提示</a>
                                        </li>
                                        <li class=""><a href="#" rel="text-success">成功</a>
                                        </li>
                                    </ul>
									</span> <a class="btn btn-mini" href="#" rel="lead">Lead</a> </span>

            <div class="preview">段落</div>
            <div class="view" contenteditable="true">
                <p><em>Git</em>是一个分布式的版本控制系统，最初由<b>Linus Torvalds</b>编写，用作Linux内核代码的管理。在推出后，Git在其它项目中也取得了很大成功，尤其是在Ruby社区中。
                </p>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span>
									<span class="configuration"><button type="button" class="btn btn-mini"

                                                                        data-target="#editorModal" role="button"

                                                                        data-toggle="modal">编辑

                                    </button></span>

            <div class="preview">地址</div>
            <div class="view">
                <address contenteditable="true">

                    <strong>Twitter, Inc.</strong><br>

                    795 Folsom Ave, Suite 600<br>

                    San Francisco, CA 94107<br>

                    <abbr title="Phone">P:</abbr> (123) 456-7890

                </address>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"> <a class="btn btn-mini"

                                                                                href="#"

                                                                                rel="pull-right">右对齐</a> </span>

            <div class="preview">引用块</div>
            <div class="view clearfix">
                <blockquote contenteditable="true">
                    <p>github是一个全球化的开源社区.</p>
                    <small>关键词 <cite title="Source Title">开源</cite></small>
                </blockquote>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"><button type="button"

                                                                                    class="btn btn-mini"

                                                                                    data-target="#editorModal"

                                                                                    role="button"

                                                                                    data-toggle="modal">

            编辑

        </button> <a class="btn btn-mini" href="#" rel="unstyled">无样式</a> <a class="btn btn-mini"

                                                                             href="#"

                                                                             rel="inline">嵌入</a> </span>

            <div class="preview">无序列表</div>
            <div class="view">
                <ul contenteditable="true">
                    <li>新闻资讯</li>
                    <li>体育竞技</li>
                    <li>娱乐八卦</li>
                    <li>前沿科技</li>
                    <li>环球财经</li>
                    <li>天气预报</li>
                    <li>房产家居</li>
                    <li>网络游戏</li>
                </ul>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"><button type="button"

                                                                                    class="btn btn-mini"

                                                                                    data-target="#editorModal"

                                                                                    role="button"

                                                                                    data-toggle="modal">

            编辑

        </button> <a class="btn btn-mini" href="#" rel="unstyled">无样式</a> <a class="btn btn-mini"

                                                                             href="#"

                                                                             rel="inline">嵌入</a> </span>

            <div class="preview">有序列表</div>
            <div class="view">
                <ol contenteditable="true">
                    <li>新闻资讯</li>
                    <li>体育竞技</li>
                    <li>娱乐八卦</li>
                    <li>前沿科技</li>
                    <li>环球财经</li>
                    <li>天气预报</li>
                    <li>房产家居</li>
                    <li>网络游戏</li>
                </ol>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"><button type="button"

                                                                                    class="btn btn-mini"

                                                                                    data-target="#editorModal"

                                                                                    role="button"

                                                                                    data-toggle="modal">

            编辑

        </button> <a class="btn btn-mini" href="#" rel="dl-horizontal">竖向对齐</a> </span>

            <div class="preview">详细描述</div>
            <div class="view">
                <dl contenteditable="true">
                    <dt>Rolex</dt>
                    <dd>劳力士创始人为汉斯.威尔斯多夫，1908年他在瑞士将劳力士注册为商标。</dd>
                    <dt>Vacheron Constantin</dt>
                    <dd>始创于1775年的江诗丹顿已有250年历史，</dd>
                    <dd>是世界上历史最悠久、延续时间最长的名表之一。</dd>
                    <dt>IWC</dt>
                    <dd>创立于1868年的万国表有“机械表专家”之称。</dd>
                    <dt>Cartier</dt>
                    <dd>卡地亚拥有150多年历史，是法国珠宝金银首饰的制造名家。</dd>
                </dl>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"><button type="button"

                                                                                    class="btn btn-mini"

                                                                                    data-target="#editorModal"

                                                                                    role="button"

                                                                                    data-toggle="modal">

            编辑

        </button> <span class="btn-group"> <a class="btn btn-mini dropdown-toggle"

                                              data-toggle="dropdown" href="#">样式 <span

                class="caret"></span>
        </a>
									<ul class="dropdown-menu">
                                        <li class="active"><a href="#" rel="">默认</a>
                                        </li>
                                        <li class=""><a href="#" rel="table-striped">条纹</a>
                                        </li>
                                        <li class=""><a href="#" rel="table-bordered">边框</a>
                                        </li>
                                    </ul>
									</span> <a class="btn btn-mini" href="#" rel="table-hover">鼠标指示</a> <a class="btn btn-mini" href="#" rel="table-condensed">紧凑</a> </span>

            <div class="preview">表格</div>
            <div class="view">
                <table class="table" contenteditable="true">
                    <thead>
                    <tr>
                        <th>编号</th>
                        <th>产品</th>
                        <th>交付时间</th>
                        <th>状态</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Default</td>
                    </tr>
                    <tr class="success">
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr class="error">
                        <td>2</td>
                        <td>TB - Monthly</td>
                        <td>02/04/2012</td>
                        <td>Declined</td>
                    </tr>
                    <tr class="warning">
                        <td>3</td>
                        <td>TB - Monthly</td>
                        <td>03/04/2012</td>
                        <td>Pending</td>
                    </tr>
                    <tr class="info">
                        <td>4</td>
                        <td>TB - Monthly</td>
                        <td>04/04/2012</td>
                        <td>Call in to confirm</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"><button type="button"

                                                                                    class="btn btn-mini"

                                                                                    data-target="#editorModal"

                                                                                    role="button"

                                                                                    data-toggle="modal">

            编辑

        </button> <a class="btn btn-mini" href="#" rel="form-inline">嵌入</a> </span>

            <div class="preview">提交表单</div>
            <div class="view">
                <form>
                    <fieldset>
                        <legend contenteditable="true">表单项</legend>
                        <label contenteditable="true">表签名</label>
                        <input type="text" placeholder="Type something…">
                        <span class="help-block" contenteditable="true">这里填写帮助信息.</span>
                        <label class="checkbox" contenteditable="true">
                            <input type="checkbox"> 勾选同意
                        </label>
                        <button type="submit" class="btn" contenteditable="true">提交</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"><button type="button"

                                                                                    class="btn btn-mini"

                                                                                    data-target="#editorModal"

                                                                                    role="button"

                                                                                    data-toggle="modal">

            编辑

        </button> <a class="btn btn-mini" href="#" rel="form-inline">嵌入</a> </span>

            <div class="preview">搜索框</div>
            <div class="view">
                <form class="form-search">
                    <input class="input-medium search-query" type="text">
                    <button type="submit" class="btn" contenteditable="true">查找</button>
                </form>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"> </span>
									<span class="configuration"><button type="button" class="btn btn-mini"

                                                                        data-target="#editorModal" role="button"

                                                                        data-toggle="modal">编辑

                                    </button></span>

            <div class="preview">纵向表单</div>
            <div class="view">
                <form class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label" for="inputEmail" contenteditable="true">邮箱</label>

                        <div class="controls">
                            <input id="inputEmail" placeholder="Email" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword" contenteditable="true">密码</label>

                        <div class="controls">
                            <input id="inputPassword" placeholder="Password" type="password">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <label class="checkbox" contenteditable="true">
                                <input type="checkbox"> Remember me </label>
                            <button type="submit" class="btn" contenteditable="true">登陆</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"> <span class="btn-group"> <a

                class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">样式 <span

                class="caret"></span>
        </a>
									<ul class="dropdown-menu">
                                        <li class="active"><a href="#" rel="">默认</a>
                                        </li>
                                        <li class=""><a href="#" rel="btn-primary">重点</a>
                                        </li>
                                        <li class=""><a href="#" rel="btn-info">信息</a>
                                        </li>
                                        <li class=""><a href="#" rel="btn-success">成功</a>
                                        </li>
                                        <li class=""><a href="#" rel="btn-warning">提醒</a>
                                        </li>
                                        <li class=""><a href="#" rel="btn-danger">危险</a>
                                        </li>
                                        <li class=""><a href="#" rel="btn-inverse">反转</a>
                                        </li>
                                        <li class=""><a href="#" rel="btn-link">链接</a>
                                        </li>
                                    </ul>
									</span> <span class="btn-group"> <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">尺寸

            <span class="caret"></span>
        </a>
									<ul class="dropdown-menu">
                                        <li class=""><a href="#" rel="btn-large">大</a>
                                        </li>
                                        <li class="active"><a href="#" rel="">中</a>
                                        </li>
                                        <li class=""><a href="#" rel="btn-small">小</a>
                                        </li>
                                        <li class=""><a href="#" rel="btn-mini">微型</a>
                                        </li>
                                    </ul>
									</span> <a class="btn btn-mini" href="#" rel="btn-block">通栏</a> <a class="btn btn-mini" href="#" rel="disabled">禁用</a> </span>

            <div class="preview">按钮</div>
            <div class="view">
                <button class="btn" type="button" contenteditable="true">按钮</button>
            </div>
        </div>

        <div class="box box-element ui-draggable">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i> 删除
            </a>
									<span class="drag label">

                                <i class="icon-move"></i>拖动

                            </span> <span class="configuration">

                            <span class="btn-group">

                                <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">样式

                                    <span class="caret">

                                    </span>
                                </a>
									<ul class="dropdown-menu">
                                        <li class="active"><a href="#" rel="">默认</a>
                                        </li>
                                        <li class=""><a href="#" rel="img-rounded">圆角</a>
                                        </li>
                                        <li class=""><a href="#" rel="img-circle">圆圈</a>
                                        </li>
                                        <li class=""><a href="#" rel="img-polaroid">相框</a>
                                        </li>
                                    </ul>
									</span>
									</span>

            <div class="preview">图片</div>
            <div class="view">
                <img alt="140x140" src="__PUBLIC__/layoutit/img/a.jpg">
            </div>
        </div>


    </li>
</ul>
        <ul class="nav nav-list accordion-group">
    <li class="nav-header"><i class="icon-plus icon-white"></i> 组件

    </li>
    <li style="display: none;" class="boxes" id="elmComponents">
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"> <span class="btn-group"> <a

                class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">方向<span

                class="caret"></span>
        </a>
									<ul class="dropdown-menu">
                                        <li class="active"><a href="#" rel="">横向</a>
                                        </li>
                                        <li class=""><a href="#" rel="btn-group-vertical">竖向</a>
                                        </li>
                                    </ul>
									</span>
									</span>

            <div class="preview">按钮组</div>
            <div class="view">
                <div class="btn-group">
                    <button class="btn" type="button"><i class="icon-align-left"></i>
                    </button>
                    <button class="btn" type="button"><i class="icon-align-center"></i>
                    </button>
                    <button class="btn" type="button"><i class="icon-align-right"></i>
                    </button>
                    <button class="btn" type="button"><i class="icon-align-justify"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"><button type="button"

                                                                                    class="btn btn-mini"

                                                                                    data-target="#editorModal"

                                                                                    role="button"

                                                                                    data-toggle="modal">

            编辑

        </button> <a class="btn btn-mini" href="#" rel="dropup">上拉</a> </span>

            <div class="preview">下拉菜单</div>
            <div class="view">
                <div class="btn-group">
                    <button class="btn" contenteditable="true">Action</button>
                    <button data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" contenteditable="true">
                        <li><a href="#">操作</a>
                        </li>
                        <li><a href="#">设置栏目</a>
                        </li>
                        <li><a href="#">更多设置</a>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu"><a tabindex="-1" href="#">更多选项</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">操作</a>
                                </li>
                                <li><a href="#">设置栏目</a>
                                </li>
                                <li><a href="#">更多设置</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"><button type="button"

                                                                                    class="btn btn-mini"

                                                                                    data-target="#editorModal"

                                                                                    role="button"

                                                                                    data-toggle="modal">

            编辑

        </button> <span class="btn-group"> <a class="btn btn-mini dropdown-toggle"

                                              data-toggle="dropdown" href="#">样式 <span

                class="caret"></span>
        </a>
									<ul class="dropdown-menu">
                                        <li class=""><a href="#" rel="nav-tabs">线框</a>
                                        </li>
                                        <li class=""><a href="#" rel="nav-pills">图钉</a>
                                        </li>
                                    </ul>
									</span> <a class="btn btn-mini" href="#" rel="nav-stacked">切换格式</a> </span>

            <div class="preview">导航</div>
            <div class="view">
                <ul class="nav nav-tabs" contenteditable="true">
                    <li class="active"><a href="#">首页</a>
                    </li>
                    <li><a href="#">资料</a>
                    </li>
                    <li class="disabled"><a href="#">信息</a>
                    </li>
                    <li class="dropdown pull-right"><a href="#" data-toggle="dropdown" class="dropdown-toggle">下拉 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">操作</a>
                            </li>
                            <li><a href="#">设置栏目</a>
                            </li>
                            <li><a href="#">更多设置</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">分割线</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"><button type="button"

                                                                                    class="btn btn-mini"

                                                                                    data-target="#editorModal"

                                                                                    role="button"

                                                                                    data-toggle="modal">

            编辑

        </button> <a class="btn btn-mini" href="#" rel="well">嵌入</a> </span>

            <div class="preview">导航列表</div>
            <div class="view">
                <ul class="nav nav-list" contenteditable="true">
                    <li class="nav-header">列表标题</li>
                    <li class="active"><a href="#">首页</a>
                    </li>
                    <li><a href="#">库</a>
                    </li>
                    <li><a href="#">应用</a>
                    </li>
                    <li class="nav-header">功能列表</li>
                    <li><a href="#">资料</a>
                    </li>
                    <li><a href="#">设置</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#">帮助</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span>
									<span class="configuration"><button type="button" class="btn btn-mini"

                                                                        data-target="#editorModal" role="button"

                                                                        data-toggle="modal">编辑

                                    </button></span>

            <div class="preview">面包导航</div>
            <div class="view">
                <ul class="breadcrumb" contenteditable="true">
                    <li><a href="#">主页</a> <span class="divider">/</span>
                    </li>
                    <li><a href="#">类目</a> <span class="divider">/</span>
                    </li>
                    <li class="active">主题</li>
                </ul>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"><button type="button"

                                                                                    class="btn btn-mini"

                                                                                    data-target="#editorModal"

                                                                                    role="button"

                                                                                    data-toggle="modal">

            编辑

        </button> <span class="btn-group"> <a class="btn btn-mini dropdown-toggle"

                                              data-toggle="dropdown" href="#">尺寸 <span

                class="caret"></span>
        </a>
									<ul class="dropdown-menu">
                                        <li class=""><a href="#" rel="pagination-large">大</a>
                                        </li>
                                        <li class="active"><a href="#" rel="">中</a>
                                        </li>
                                        <li class=""><a href="#" rel="pagination-small">小</a>
                                        </li>
                                        <li class=""><a href="#" rel="pagination-mini">微型</a>
                                        </li>
                                    </ul>
									</span> <span class="btn-group"> <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">位置

            <span class="caret"></span>
        </a>
									<ul class="dropdown-menu">
                                        <li class="active"><a href="#" rel="">靠左</a>
                                        </li>
                                        <li class=""><a href="#" rel="pagination-centered">居中</a>
                                        </li>
                                        <li class=""><a href="#" rel="pagination-right">靠右</a>
                                        </li>
                                    </ul>
									</span>
									</span>

            <div class="preview">翻页</div>
            <div class="view">
                <div class="pagination">
                    <ul contenteditable="true">
                        <li><a href="#">上一页</a>
                        </li>
                        <li><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#">下一页</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"><button type="button"

                                                                                    class="btn btn-mini"

                                                                                    data-target="#editorModal"

                                                                                    role="button"

                                                                                    data-toggle="modal">

            编辑

        </button> <span class="btn-group"> <a class="btn btn-mini dropdown-toggle"

                                              data-toggle="dropdown" href="#">样式 <span

                class="caret"></span>
        </a>
									<ul class="dropdown-menu">
                                        <li class="active"><a href="#" rel="">默认</a>
                                        </li>
                                        <li class=""><a href="#" rel="badge-success">成功</a>
                                        </li>
                                        <li class=""><a href="#" rel="badge-warning">警告</a>
                                        </li>
                                        <li class=""><a href="#" rel="badge-important">重要</a>
                                        </li>
                                        <li class=""><a href="#" rel="badge-info">提示</a>
                                        </li>
                                        <li class=""><a href="#" rel="badge-inverse">倒数</a>
                                        </li>
                                    </ul>
									</span>
									</span>

            <div class="preview">文字标签</div>
            <div class="view"><span class="label" contenteditable="true">文字标签</span>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"><button type="button"

                                                                                    class="btn btn-mini"

                                                                                    data-target="#editorModal"

                                                                                    role="button"

                                                                                    data-toggle="modal">

            编辑

        </button> <span class="btn-group"> <a class="btn btn-mini dropdown-toggle"

                                              data-toggle="dropdown" href="#">样式 <span

                class="caret"></span>
        </a>
									<ul class="dropdown-menu">
                                        <li class="active"><a href="#" rel="">默认</a>
                                        </li>
                                        <li class=""><a href="#" rel="badge-success">成功</a>
                                        </li>
                                        <li class=""><a href="#" rel="badge-warning">警告</a>
                                        </li>
                                        <li class=""><a href="#" rel="badge-important">重要</a>
                                        </li>
                                        <li class=""><a href="#" rel="badge-info">提示</a>
                                        </li>
                                        <li class=""><a href="#" rel="badge-inverse">倒数</a>
                                        </li>
                                    </ul>
									</span>
									</span>

            <div class="preview">微标</div>
            <div class="view"><span class="badge" contenteditable="true">1</span>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"><button type="button"

                                                                                    class="btn btn-mini"

                                                                                    data-target="#editorModal"

                                                                                    role="button"

                                                                                    data-toggle="modal">

            编辑

        </button> <a class="btn btn-mini" href="#" rel="well">嵌入</a> </span>

            <div class="preview">概述</div>
            <div class="view">
                <div class="hero-unit" contenteditable="true">
                    <h1>Hello, world!</h1>

                    <p>这是一个可视化布局模板, 你可以点击模板里的文字进行修改, 也可以通过点击弹出的编辑框进行富文本修改. 拖动区块能实现排序. </p>

                    <p><a class="btn btn-primary btn-large" href="#">参看更多 »</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span>
									<span class="configuration"><button type="button" class="btn btn-mini"

                                                                        data-target="#editorModal" role="button"

                                                                        data-toggle="modal">编辑

                                    </button></span>

            <div class="preview">页标题</div>
            <div class="view">
                <div class="page-header" contenteditable="true">
                    <h1>页标题范例

                        <small>此处编写页标题</small>

                    </h1>
                </div>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span>
									<span class="configuration"><button type="button" class="btn btn-mini"

                                                                        data-target="#editorModal" role="button"

                                                                        data-toggle="modal">编辑

                                    </button></span>

            <div class="preview">文本</div>
            <div class="view">
                <h2 contenteditable="true">标题</h2>

                <p contenteditable="true">本可视化布局程序在HTML5浏览器上运行更加完美, 能实现自动本地化保存, 即使关闭了网页, 下一次打开仍然能恢复上一次的操作.
                </p>

                <p><a class="btn" href="#" contenteditable="true">查看更多 »</a>
                </p>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span>
									<span class="configuration"><button type="button" class="btn btn-mini"

                                                                        data-target="#editorModal" role="button"

                                                                        data-toggle="modal">编辑

                                    </button></span>

            <div class="preview">预览列表</div>
            <div class="view">
                <ul class="thumbnails">
                    <li class="span4">
                        <div class="thumbnail">
                            <img alt="300x200" src="__PUBLIC__/layoutit/img/people.jpg">

                            <div class="caption" contenteditable="true">
                                <h3>冯诺尔曼结构</h3>

                                <p>
                                    也称普林斯顿结构，是一种将程序指令存储器和数据存储器合并在一起的存储器结构。程序指令存储地址和数据存储地址指向同一个存储器的不同物理位置。</p>

                                <p><a class="btn btn-primary" href="#">浏览</a> <a class="btn" href="#">分享</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <img alt="300x200" src="__PUBLIC__/layoutit/img/city.jpg">

                            <div class="caption" contenteditable="true">
                                <h3>哈佛结构</h3>

                                <p>哈佛结构是一种将程序指令存储和数据存储分开的存储器结构，它的主要特点是将程序和数据存储在不同的存储空间中，进行独立编址。</p>

                                <p><a class="btn btn-primary" href="#">浏览</a> <a class="btn" href="#">分享</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <img alt="300x200" src="__PUBLIC__/layoutit/img/sports.jpg">

                            <div class="caption" contenteditable="true">
                                <h3>改进型哈佛结构</h3>

                                <p>改进型的哈佛结构具有一条独立的地址总线和一条独立的数据总线，两条总线由程序存储器和数据存储器分时复用，使结构更紧凑。</p>

                                <p><a class="btn btn-primary" href="#">浏览</a> <a class="btn" href="#">分享</a>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"> <span class="btn-group"> <a

                class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">样式 <span

                class="caret"></span>
        </a>
									<ul class="dropdown-menu">
                                        <li class="active"><a href="#" rel="">默认</a>
                                        </li>
                                        <li class=""><a href="#" rel="progress-info">提示</a>
                                        </li>
                                        <li class=""><a href="#" rel="progress-success">成功</a>
                                        </li>
                                        <li class=""><a href="#" rel="progress-warning">警告</a>
                                        </li>
                                        <li class=""><a href="#" rel="progress-danger">危险</a>
                                        </li>
                                    </ul>
									</span> <a class="btn btn-mini" href="#" rel="progress-striped">条纹</a> <a class="btn btn-mini" href="#" rel="active">动画</a> </span>

            <div class="preview">进度条</div>
            <div class="view">
                <div class="progress">
                    <div class="bar" style="width: 60%;"></div>
                </div>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"><button type="button"

                                                                                    class="btn btn-mini"

                                                                                    data-target="#editorModal"

                                                                                    role="button"

                                                                                    data-toggle="modal">

            编辑

        </button> <a class="btn btn-mini" href="#" rel="well">嵌入</a> </span>

            <div class="preview">嵌入媒体</div>
            <div class="view">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="__PUBLIC__/layoutit/img/a_002.jpg" class="media-object"> </a>

                    <div class="media-body" contenteditable="true">
                        <h4 class="media-heading">嵌入媒体标题</h4> 请尽量使用HTML5兼容的视频格式和视频代码实现视频播放, 以达到更好的体验效果.
                    </div>
                </div>
            </div>
        </div>
    </li>
</ul>
        <ul class="nav nav-list accordion-group">
    <li class="nav-header"><i class="icon-plus icon-white"></i> 交互组件

    </li>
    <li style="display: none;" class="boxes mute" id="elmJS">
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span>

            <div class="preview">遮罩窗体</div>
            <div class="view">
                <!-- Button to trigger modal -->
                <a id="myModalLink" href="#myModalContainer" role="button" class="btn" data-toggle="modal" contenteditable="true">触发遮罩窗体</a>

                <!-- Modal -->
                <div id="myModalContainer" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                        </button>
                        <h3 id="myModalLabel" contenteditable="true">标题栏</h3>
                    </div>
                    <div class="modal-body">
                        <p contenteditable="true">显示信息</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true" contenteditable="true">关闭
                        </button>
                        <button class="btn btn-primary" contenteditable="true">保存设置</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"><button type="button"

                                                                                    class="btn btn-mini"

                                                                                    data-target="#editorModal"

                                                                                    role="button"

                                                                                    data-toggle="modal">

            编辑

        </button> <a class="btn btn-mini" href="#" rel="navbar-inverse">Inverse</a>

              <!--a class="btn btn-mini" href="#" rel="navbar-fixed-top">Navbar fixed top</a-->

              </span>

            <div class="preview">导航栏</div>
            <div class="view">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container-fluid">
                            <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
                                <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a href="#" class="brand" contenteditable="true">网站名</a>

                            <div class="nav-collapse collapse navbar-responsive-collapse">
                                <ul class="nav" contenteditable="true">
                                    <li class="active"><a href="#">主页</a>
                                    </li>
                                    <li><a href="#">链接</a>
                                    </li>
                                    <li><a href="#">链接</a>
                                    </li>
                                    <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#">下拉菜单 <b

                                            class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">下拉导航1</a>
                                            </li>
                                            <li><a href="#">下拉导航2</a>
                                            </li>
                                            <li><a href="#">其他</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li class="nav-header">标签</li>
                                            <li><a href="#">链接1</a>
                                            </li>
                                            <li><a href="#">链接2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav pull-right" contenteditable="true">
                                    <li><a href="#">右边链接</a>
                                    </li>
                                    <li class="divider-vertical"></li>
                                    <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#">下拉菜单 <b

                                            class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">下拉导航1</a>
                                            </li>
                                            <li><a href="#">下拉导航2</a>
                                            </li>
                                            <li><a href="#">其他</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">链接3</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.nav-collapse -->
                        </div>
                    </div>
                    <!-- /navbar-inner -->
                </div>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"><button type="button"

                                                                                    class="btn btn-mini"

                                                                                    data-target="#editorModal"

                                                                                    role="button"

                                                                                    data-toggle="modal">

            编辑

        </button> <span class="btn-group"> <a class="btn btn-mini dropdown-toggle"

                                              data-toggle="dropdown" href="#">位置 <span

                class="caret"></span>
        </a>
									<ul class="dropdown-menu">
                                        <li class="active"><a href="#" rel="">默认</a>
                                        </li>
                                        <li class=""><a href="#" rel="tabs-below">底部</a>
                                        </li>
                                        <li class=""><a href="#" rel="tabs-left">靠左</a>
                                        </li>
                                        <li class=""><a href="#" rel="tabs-right">靠右</a>
                                        </li>
                                    </ul>
									</span>
									</span>

            <div class="preview">切换卡</div>
            <div class="view">
                <div class="tabbable" id="myTabs">
                    <!-- Only required for left/right tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab" contenteditable="true">第一部分</a>
                        </li>
                        <li><a href="#tab2" data-toggle="tab" contenteditable="true">第二部分</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1" contenteditable="true">
                            <p>第一部分内容.</p>
                        </div>
                        <div class="tab-pane" id="tab2" contenteditable="true">
                            <p>第二部分内容.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span> <span class="configuration"> <span class="btn-group"> <a

                class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">样式 <span

                class="caret"></span>
        </a>
									<ul class="dropdown-menu">
                                        <li class="active"><a href="#" rel="">默认</a>
                                        </li>
                                        <li class=""><a href="#" rel="alert-info">提示</a>
                                        </li>
                                        <li class=""><a href="#" rel="alert-error">错误</a>
                                        </li>
                                        <li class=""><a href="#" rel="alert-success">成功</a>
                                        </li>
                                    </ul>
									</span>
									</span>

            <div class="preview">提示框</div>
            <div class="view">
                <div class="alert" contenteditable="true">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <h4>提示!</h4>
                    <strong>警告!</strong> 请注意你的个人隐私安全.
                </div>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span>
									<span class="configuration"><button type="button" class="btn btn-mini"

                                                                        data-target="#editorModal" role="button"

                                                                        data-toggle="modal">编辑

                                    </button></span>

            <div class="preview">手风琴切换</div>
            <div class="view">
                <div class="accordion" id="myAccordion">
                    <div class="accordion-group">
                        <div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#myAccordion" href="#collapseOne" contenteditable="true"> 选项卡 #1 </a>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner" contenteditable="true"> 功能块...</div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#myAccordion" href="#collapseTwo" contenteditable="true"> 选项卡 #2 </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-inner" contenteditable="true"> 功能块...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box box-element ui-draggable"><a href="#close" class="remove label label-important"><i

                class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i

                class="icon-move"></i>拖动</span>
									<span class="configuration"><button type="button" class="btn btn-mini"

                                                                        data-target="#editorModal" role="button"

                                                                        data-toggle="modal">编辑

                                    </button></span>

            <div class="preview">轮换图</div>
            <div class="view">
                <div class="carousel slide" id="myCarousel">
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
                        <li data-slide-to="1" data-target="#myCarousel" class=""></li>
                        <li data-slide-to="2" data-target="#myCarousel" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img alt="" src="__PUBLIC__/layoutit/img/1.jpg">

                            <div class="carousel-caption" contenteditable="true">
                                <h4>棒球</h4>

                                <p>棒球运动是一种以棒打球为主要特点，集体性、对抗性很强的球类运动项目，在美国、日本尤为盛行。</p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="" src="__PUBLIC__/layoutit/img/2.jpg">

                            <div class="carousel-caption" contenteditable="true">
                                <h4>冲浪</h4>

                                <p>
                                    冲浪是以海浪为动力，利用自身的高超技巧和平衡能力，搏击海浪的一项运动。运动员站立在冲浪板上，或利用腹板、跪板、充气的橡皮垫、划艇、皮艇等驾驭海浪的一项水上运动。</p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="" src="__PUBLIC__/layoutit/img/3.jpg">

                            <div class="carousel-caption" contenteditable="true">
                                <h4>自行车</h4>

                                <p>以自行车为工具比赛骑行速度的体育运动。1896年第一届奥林匹克运动会上被列为正式比赛项目。环法赛为最著名的世界自行车锦标赛。</p>
                            </div>
                        </div>
                    </div>
                    <a data-slide="prev" href="#myCarousel" class="left carousel-control">‹</a> <a data-slide="next" href="#myCarousel" class="right carousel-control">›</a>
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
            onload = function(){
                $("#model1").hide();
                $("#model2").hide();
                $("#model3").hide();
                $("#model4").hide();
                $("#model5").hide();
            }

            function getLocalTime(nS) {
                return new Date(parseInt(nS) * 1000).toLocaleString().replace(/年|月/g, "-").replace(/日/g, " ");
            }

            function s_on_btn(){
                $("#model1").hide();
                $("#model2").hide();
                $("#model3").hide();
                $("#model4").hide();
                $("#model5").hide();
                var s = $("#s_id").val();

                $.get("/thinkkepu/admin.php/Subject/getwen?id=" + s,
                        function(result){
                            var res = JSON.parse(result);
                            $("#s_show").html(res['kepu_art_title']);

                            $("#model1_title").html('<a href="/thinkkepu/index.php/Index/wen?art_id='+res['kepu_art_id']+'">' + res['kepu_art_title'] + '</a>');
                            $("#model1_show").html(res['kepu_art_show']);
                            $("#model1").show();

                            $("#model2_title").html('<a href="/thinkkepu/index.php/Index/wen?art_id='+res['kepu_art_id']+'">' +
                            res['kepu_art_title'] + '</a>');
                            $("#model2").show();

                            $("#model3_img").attr("src", "/files/" + res['kepu_art_img']);
                            $("#model3").show();

                            $("#model4_title").html('<a href="/thinkkepu/index.php/Index/wen?art_id='+res['kepu_art_id']+'">' +
                            res['kepu_art_title'] + '</a>');
                            $("#model4_show").html(res['kepu_art_show']);
                            $("#model4_img").attr("src", "/files/" + res['kepu_art_img']);
                            $("#model4_class").html(res['kepu_art_class']);
                            $ti = getLocalTime(res['kepu_art_time']);
                            $("#model4_time").html(res['kepu_art_author'] + "   " + $ti);
                            $("#model4").show();

                            $("#model5_title").html('<a href="/thinkkepu/index.php/Index/wen?art_id='+res['kepu_art_id']+'">' +
                            res['kepu_art_title'] + '</a>');
                            $("#model5_img").attr("src", "/files/" + res['kepu_art_img']);
                            $("#model5").show();
                        }
                );
            }
        </script>



        <div class="box box-element ui-draggable" id="model1">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i>删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>
                                拖动
                            </span>
            <div class="preview">标题 快照</div>
            <div class="view">
                <h3 contenteditable="true" id="model1_title">标题</h3>

                <p contenteditable="true" id="model1_show">本可视化布局程序在HTML5浏览器上运行更加完美, 能实现自动本地化保存,
                    即使关闭了网页,
                    下一次打开仍然能恢复上一次的操作.
                </p>
                <HR>
            </div>
        </div>

        <div class="box box-element ui-draggable" id="model2">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i>删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>
                                拖动
                            </span>
            <div class="preview">标题</div>
            <div class="view">
                <h4 contenteditable="true" id="model2_title">标题</h4>
            </div>
        </div>

        <div class="box box-element ui-draggable" id="model3">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i>删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>
                                拖动
                            </span>
            <div class="preview">图片</div>
            <div class="view">
                <a><img id="model3_img" src=""></a>
            </div>
        </div>





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

                </div>
                <hr>
            </div>
        </div>



        <div class="box box-element ui-draggable" id="model5">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i>删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>
                                拖动
                            </span>
            <div class="preview">图片 标题 上下</div>
            <div class="view">
                <img id="model5_img"/>
                <h5 contenteditable="true" id="model5_title">标题</h5>
                <hr>
            </div>
        </div>


    </li>
</ul>
        <ul class="nav nav-list accordion-group">
    <li class="nav-header"><i class="icon-plus icon-white"></i> 页面
    </li>
    <li style="display: none;" class="boxes" id="elmBase">
        <div style="border: 0px solid red">
            <input id="page_s_id" type="text" style="width: 153px"/>
            <input id="page_s_btn" onclick="page_s_on_btn()" type="button" style="width: 100%"
                   value="搜索"/>
            <p id="page_s_show"></p>
        </div>

        <script>
            function page_onload(){
                $("#page_model1").hide();
                $("#page_model2").hide();
            }
            function page_s_on_btn(){

                $("#page_model1").hide();
                $("#page_model2").hide();

                var page_id = $("#page_s_id").val();
                $.get("/thinkkepu/admin.php/Subject/getpage?id=" + page_id,
                        function(result) {
                            var res = JSON.parse(result);
                            $("#page_s_show").html(res['kepu_subject_title']);

                            $("#page_model1").show();
                            $("#page_model2").show();

                            $("#page_model1_title").html('<a href="/thinkkepu/index.php/Index/subject?id='
                            + res['kepu_subject_id'] +'">'+res['kepu_subject_title'] +
                            '</a>');

                            $("#page_model2_title").html('<a href="/thinkkepu/index.php/Index/subject?id='
                            + res['kepu_subject_id'] +'">'+res['kepu_subject_title'] +
                            '</a>');
                        }
                );
            }
        </script>

        <div class="box box-element ui-draggable" id="page_model1">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i> 删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>拖动
                            </span>
            <div class="preview">题目</div>
            <div class="view">
                <h4 contenteditable="true" id="page_model1_title"></h4>
            </div>
        </div>
    </li>
</ul>
        <ul class="nav nav-list accordion-group">
    <li class="nav-header"><i class="icon-plus icon-white"></i> 图片
    </li>


    <li style="display: none;" class="boxes">
        <div class="u_demo">
            <div class="u_btn">
                <span>添加附件</span>
                <input id="u_fileupload" type="file" name="mypic">
            </div>
            <div class="u_progress">
                <span class="u_bar"></span><span class="u_percent">0%</span >
            </div>
            <div class="u_files"></div>
            <div id="u_showimg"></div>
        </div>
        <style type="text/css">
            .u_btn{position: relative;overflow: hidden;margin-right: 4px;display:inline-block;*display:inline;padding:4px 10px 4px;font-size:14px;line-height:18px;*line-height:20px;color:#fff;text-align:center;vertical-align:middle;cursor:pointer;background-color:#5bb75b;border:1px solid #cccccc;border-color:#e6e6e6 #e6e6e6 #bfbfbf;border-bottom-color:#b3b3b3;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}
            .u_btn input {position: absolute;top: 0; right: 0;margin: 0;border: solid transparent;opacity:
            0;filter:alpha(opacity=0); cursor: pointer;}
            .u_progress { position:relative; margin-left:100px; margin-top:-24px;
                width:200px;padding: 1px; border-radius:3px; display:none}
            .u_bar {background-color: green; display:block; width:0%; height:20px; border-radius: 3px; }
            .u_percent { position:absolute; height:20px; display:inline-block; top:3px; left:2%;
                color:#fff }
            .u_files{height:22px; line-height:22px; margin:10px 0}
            .u_delimg{margin-left:20px; color:#090; cursor:pointer}
        </style>
        <script type="text/javascript">

            var pic_name;

            function ondel(){
                var pic = $(this).attr("rel");
                console.log("hahahhahahahahaha");
                $.post("/thinkkepu/admin.php/Article/addimage?act=delimg",{imagename:pic_name},function(msg){
                    if(msg==1){
                        $(".u_files").html("删除成功.");
                        $('#u_showimg').empty();
                        $(".u_progress").hide();
                        $(".u_btn span").html('添加图片');
                        $(".u_btn").show();
                    }else{
                        alert(msg);
                    }
                });
            }

            $(function () {
                var bar = $('.u_bar');
                var percent = $('.u_percent');
                var showimg = $('#u_showimg');
                var progress = $(".u_progress");
                var files = $(".u_files");
                var btn = $(".u_btn span");

                $("#u_fileupload").wrap("<form id='myupload' action='/thinkkepu/admin.php/Article/addimage' method='post' enctype='multipart/form-data'></form>");
                $("#u_fileupload").change(function(){
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

                            files.html("<b>"+"("+data.size+"kb)</b> <span class='delimg' onclick='ondel()' rel='"+data.pic+"'>删除</span><br><br>");

                            var img = "/files/"+data.pic;

                            $("#img_model").attr("src",img);
                            $("#img_model2").attr("src",img);
                            btn.html("再传一个");
                            progress.hide();
                            showimg.html("<img style='width:300px' src='"+img+"'>");

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
        <div class="box box-element ui-draggable">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i>删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>
                                拖动
                            </span>
            <div class="preview">图片 默认大小</div>
            <div class="view">
                <img id="img_model"/>
            </div>
        </div>

        <div class="box box-element ui-draggable">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i>删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>
                                拖动
                            </span>
            <div class="preview">图片 长图片</div>
            <div class="view">
                <img id="img_model2"/>
            </div>
        </div>
    </li>
</ul>
        <ul class="nav nav-list accordion-group">
    <li class="nav-header"><i class="icon-plus icon-white"></i> 模块
    </li>
    <li style="display: none;" class="boxes" id="elmBase">
        <div class="box box-element ui-draggable">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i> 删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>拖动
                            </span>
            <div class="preview">文章模块</div>
            <div class="view">
                <div>
                    <div class="span6">
                        <p id="wen_class">{wen_class}</p>
                    </div>
                    <div class="span6">
                        <p id="wen_author">{wen_author}</p>
                    </div>
                </div>
                <br>
                <br>
                <h2>{wen_title}</h2>
                <br>
                <br>
                <div class="hero-unit">
                    {wen_show}
                </div>
                <br>
                {wen}
            </div>
        </div>

        <div class="box box-element ui-draggable">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i> 删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>拖动
                            </span>
            <div class="preview">顶部导航</div>
            <div class="view">
                <div class="row">
                    <div class="span1">

                    </div>
                    <div class="span3">
                        <img id="dingbudaohangimg" src="__PUBLIC__/img/kp_top.jpg"/>
                    </div>

                    <div class="span4">

                    </div>

                    <div class="span3">
                        <form class="form-search" id="dingbudaohangform">
                            <input class="input-medium search-query" type="text">
                            <button type="submit" class="btn" contenteditable="true">查找</button>
                        </form>
                    </div>
                    <div class="span1">

                    </div>
                </div>
            </div>
        </div>


        <div class="box box-element ui-draggable">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i> 删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>拖动
                            </span>
            <div class="preview">左边导航</div>
            <div class="view">
                <div class="row-fluid" id="abc">
                    <ul class="unstyled">
                        <li>
                            <div class="span12" id="daohangdiv">
                                <div class="span5">
                                    <img id="daohangimg" src="/thinkkepu/Public/daohang/zixun.png" alt='' />
                                </div>
                                <div class="span7">
                                    <h4>
                                        <a href="/thinkkepu/index.php/Index?id=3">资讯</a>
                                    </h4> <small>汇集最热内容热点</small>
                                </div>
                            </div>
                        </li><br />
                        <li>
                            <div class="span12" id="daohangdiv">
                                <div class="span5">
                                    <img id="daohangimg" src="/thinkkepu/Public/daohang/huodong.png" alt='' />
                                </div>
                                <div class="span7">
                                    <h4>
                                        <a href="/thinkkepu/index.php/Index?id=4">活动</a>
                                    </h4> <small>有趣活动一网打尽</small>
                                </div>
                            </div>
                        </li><br />
                        <li>
                            <div class="span12" id="daohangdiv">
                                <div class="span5">
                                    <img id="daohangimg" src="/thinkkepu/Public/daohang/zhuanti.png" alt='' />
                                </div>
                                <div class="span7">
                                    <h4>
                                        <a href="/thinkkepu/index.php/Index?id=5">专题</a>
                                    </h4> <small>精选话题深度解读</small>
                                </div>
                            </div>
                        </li><br />
                        <li>
                            <div class="span12" id="daohangdiv">
                                <div class="span5">
                                    <img id="daohangimg" src="/thinkkepu/Public/daohang/ziyuan.png" alt='' />
                                </div>
                                <div class="span7">
                                    <h4>
                                        <a href="/thinkkepu/index.php/Index?id=6">资源</a>
                                    </h4> <small>炫酷科技看得清楚</small>
                                </div>
                            </div>
                        </li><br />
                        <li>
                            <div class="span12" id="daohangdiv">
                                <div class="span5">
                                    <img id="daohangimg" src="/thinkkepu/Public/daohang/xueshu.png" alt='' />
                                </div>
                                <div class="span7">
                                    <h4>
                                        <a href="/thinkkepu/index.php/Index?id=7">学术</a>
                                    </h4> <small>感受科学神奇魅力</small>
                                </div>
                            </div>
                        </li><br />
                        <li>
                            <div class="span12" id="daohangdiv">
                                <div class="span5">
                                    <img id="daohangimg" src="/thinkkepu/Public/daohang/tuijian.png" alt='' />
                                </div>
                                <div class="span7">
                                    <h4>
                                        <a href="/thinkkepu/index.php/Index?id=8">推荐</a>
                                    </h4> <small>精彩推荐</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="box box-element ui-draggable">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i> 删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>拖动
                            </span>
            <div class="preview">评论</div>
            <div class="view">
                <div id="div_comment">
                    在这里显示评论
                    <input type="hidden" id="art_id" value="{art_id}" />
                </div>
            </div>
        </div>

        <div class="box box-element ui-draggable">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i> 删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>拖动
                            </span>
            <div class="preview">添加评论</div>
            <div class="view">
                <div id="div_add_comment">
                    {add_comment}
                </div>
            </div>
        </div>

        <div class="box box-element ui-draggable">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i> 删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>拖动
                            </span>
            <div class="preview">尾部</div>
            <div class="view">
                <br>
                <hr>
                <br>
                <footer class="kepu_footer">
                    <p>山西省科普网</p>
                    <p>
                        <a href="#">Back to top</a>
                    </p>
                </footer>
                <br>
                <br>
            </div>
        </div>

        <div class="box box-element ui-draggable">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i> 删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>拖动
                            </span>
            <div class="preview">动态轮播页</div>
            <div class="view">
                {carousel}
            </div>
        </div>

        <div class="box box-element ui-draggable">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i> 删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>拖动
                            </span>
            <div class="preview">自动文章列表模块</div>
            <div class="view">
                {auto_article_model}
            </div>
        </div>

        <div class="box box-element ui-draggable">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i> 删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>拖动
                            </span>
            <div class="preview">Top5模块</div>
            <div class="view">
                {top_5_model}
            </div>
        </div>

        <div class="box box-element ui-draggable">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i> 删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>拖动
                            </span>
            <div class="preview">专题列表模块</div>
            <div class="view">
                {subject_list_model}
            </div>
        </div>

        <div class="box box-element ui-draggable">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i> 删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>拖动
                            </span>
            <div class="preview">活动列表模块</div>
            <div class="view">
                {activity_model}
            </div>
        </div>

        <div class="box box-element ui-draggable">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i> 删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>拖动
                            </span>
            <div class="preview">搜索结果列表</div>
            <div class="view">
                {search_res_list}
            </div>
        </div>

        <div class="box box-element ui-draggable">
            <a href="#close" class="remove label label-important">
                <i class="icon-remove icon-white"></i> 删除
            </a>
                            <span class="drag label">
                                <i class="icon-move"></i>拖动
                            </span>
            <div class="preview">分类列表</div>
            <div class="view">
                {class_list}
            </div>
        </div>

    </li>
</ul>
        <ul class="nav nav-list accordion-group">
    <li class="nav-header"><i class="icon-plus icon-white"></i> 自定义静态模块
    </li>
    <li style="display: none;" class="boxes" id="elmBase">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="box box-element ui-draggable">
                <a href="#close" class="remove label label-important">
                    <i class="icon-remove icon-white"></i> 删除
                </a>
                            <span class="drag label">
                                <i class="icon-move"></i>拖动
                            </span>
                <div class="preview"><?php echo ($vo["kepu_staitc_module_name"]); ?></div>
                <div class="view">
                    <?php echo ($vo["kepu_staitc_module_text"]); ?>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>

        <a href="/thinkkepu/admin.php/Module/addstatic">
            <button>添加</button>
        </a>
    </li>

</ul>
        <ul class="nav nav-list accordion-group">
    <li class="nav-header"><i class="icon-plus icon-white"></i> 自定义动态模块
    </li>
    <li style="display: none;" class="boxes" id="elmBase">

        <?php if(is_array($custom_list)): $i = 0; $__LIST__ = $custom_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="box box-element ui-draggable">
                <a href="#close" class="remove label label-important">
                    <i class="icon-remove icon-white"></i> 删除
                </a>
                            <span class="drag label">
                                <i class="icon-move"></i>拖动
                            </span>
                <div class="preview"><?php echo ($vo["kepu_custom_module_list_title"]); ?></div>
                <div class="view">
                    <?php echo ($vo["kepu_custom_module_list_tag"]); ?>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
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