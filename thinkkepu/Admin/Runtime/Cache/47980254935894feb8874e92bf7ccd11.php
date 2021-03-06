<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <script src="__PUBLIC__/layoutit/js/jquery-2.0.0.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-image: url(__PUBLIC__/img/background.jpg);
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }

        .form-signin .checkbox {
            font-weight: normal;
        }

        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .kexiang {
            margin-left: 50px;
        }

        * {
            font-family: 微软雅黑
        }

        h1, h2, h3, h4.h5, h6 {
            font-family: 微软雅黑
        }
    </style>
</head>

<body>
<div class="container">
    <div class="kexiang">

    </div>
    <form method="post" action="/thinkkepu/admin.php/Login/loginProcess">
        <label class="sr-only">Email address</label>
        <input name="username" type="text" class="form-control" placeholder="请输入用户名" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="请输入密码" required>

        <button id="submit_btn" class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
    </form>
</div>

</body>
</html>