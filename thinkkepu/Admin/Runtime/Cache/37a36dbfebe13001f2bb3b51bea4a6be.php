<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="/thinkkepu/admin.php/Subject/add" method="post">
    <p>专题标题</p>
    <input type="text" name="subject_title_t" />
    <p>专题快照</p>
    <input type="text" name="subject_show_t" />
    <p>HTML代码</p>
    <textarea type="text" name="content"></textarea>
    <input type="submit" value="提交"/>
</form>
</body>
</html>