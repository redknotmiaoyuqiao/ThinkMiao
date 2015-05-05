<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/3/12
 * Time: 1:09
 */

class CommentAction extends Action{
    public function addComment(){
        $art_id = $_GET['art_id'];

        if(empty($art_id)){
            echo 'sada';
            exit;
        }
        if(empty($_SESSION['user_id'])){
            header("Location: /thinkkepu/index.php/Login");
            exit;
        }
        $Dao = M('comment');
        $comment['kepu_comment_article_id'] = $art_id;
        $comment['kepu_comment_user_id'] = $_SESSION['user_id'];
        $comment['kepu_comment_time'] = time();
        $comment['kepu_comment_content'] = $_POST['comment_content'];
        $re = $Dao->add($comment);
        if($re){
            header("Location: /thinkkepu/index.php/Index/wen?art_id=$art_id");
            exit;
        }
    }

    public function ajaxAddComment(){
        $art_id = $_GET['art_id'];
        $checkcode = $_POST['checkcode'];

        if($checkcode != $_SESSION['helloweba_num']){
            echo 'echckerror';
            exit;
        }
        if(empty($art_id)){
            exit;
        }
        if(empty($_SESSION['user_id'])){
            echo 'onlogin';
            exit;
        }

        if(empty($_POST['comment_content']) ||  $_POST['comment_content'] == ""){
            exit;
        }


        $Dao = M('comment');
        $comment['kepu_comment_article_id'] = $art_id;
        $comment['kepu_comment_user_id'] = $_SESSION['user_id'];
        $comment['kepu_comment_time'] = time();
        $comment['kepu_comment_content'] = $_POST['comment_content'];
        $re = $Dao->add($comment);
        if($re){
            $_SESSION['helloweba_num'] = '';
            echo 'ok';
        }
    }

    public function getComment(){
        $art_id = $_GET['art_id'];
        if(empty($art_id)){
            exit;
        }
        $Dao = M('comment');
        $id_list['kepu_comment_article_id'] = $art_id;
        $res = $Dao->where($id_list)->select();

        for($i=0;$i<count($res);$i++){
            $time = $res[$i]['kepu_comment_time'];
            $time = date("Y-m-d H:i:s", $time);
            $res[$i]['kepu_comment_time'] = $time;

            $Dao2 = M('user');
            $user['kepu_user_id'] = $res[$i]['kepu_comment_user_id'];
            $user_res = $Dao2->where($user)->find();

            $res[$i]['kepu_comment_user_id'] = $user_res['kepu_user_name'];
        }

        echo json_encode($res);
    }
}