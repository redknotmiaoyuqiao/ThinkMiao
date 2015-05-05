<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/3/12
 * Time: 1:09
 */

class CommentAction extends Action{
    public function addComment(){
        $art_id = $_POST['art_id'];
        $art_comment = $_POST['art_comment'];
        $user_session = $_POST['user_session'];

        if(empty($art_id) || empty($art_comment) || empty($user_session)){
            echo 'empty';
            exit;
        }
        $Dao = M('user');
        $user['kepu_user_session'] = $user_session;
        $res = $Dao->where($user)->find();

        if(!$res){
            echo 'login';
            exit;
        }
        $Dao = M('comment');
        $comment['kepu_comment_article_id'] = $art_id;
        $comment['kepu_comment_user_id'] = $res['kepu_user_id'];
        $comment['kepu_comment_time'] = time();
        $comment['kepu_comment_content'] = $art_comment;
        $re = $Dao->add($comment);
        if($re){
            echo 'success';
            exit;
        }
    }
}