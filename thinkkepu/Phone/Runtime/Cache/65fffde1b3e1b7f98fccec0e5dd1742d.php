<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>

    <script type="text/javascript" src="__PUBLIC__/layoutit/js/jquery-2.0.0.min.js"></script>

    <script type="text/javascript" src="__PUBLIC__/js/page_js.js"></script>


    <script>
        function abc(){

            var img_list = document.getElementsByTagName("img");
            for(var i=0;i<img_list.length;i++){
                img_list[i].style.width = "100%";
            }
        }

    </script>
</head>
<body>
    <div style="width: 100%">
    <h2><?php echo ($title); ?></h2>
    <p><?php echo ($time); ?></p>
    <br>
    <br>

    <?php echo ($show); ?>
    <br>
    <br>
    <br>
    <?php echo ($wen); ?>

    </div>

    <div id="div_comment">
        在这里显示评论<input type="hidden" id="art_id" value="<?php echo ($id); ?>" />
    </div>


    <br>
    <br>
    <br>
    <br>
    <br>

</body>
</html>