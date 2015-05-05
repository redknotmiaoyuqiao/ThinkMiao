<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/4/6
 * Time: 23:21
 */

class ArticleModel extends Model{

    public function insertArticle(){
        $Dao = M('article');
        $data['kepu_art_time'] = time();
        $data['kepu_art_content'] = $_POST['wen'];
        $data['kepu_art_title'] = $_POST['title'];
        $data['kepu_art_class'] = $_POST['class'];
        $data['kepu_art_author'] = $_POST['author'];
        $data['kepu_art_show'] = $_POST['show'];
        $data['kepu_art_img'] = $_POST['image'];
        $Dao->add($data);
    }

    public function addOneHot($id){
        $Dao = M('article');
        $con['kepu_art_id'] = $id;
        $Dao->where($con)->setInc('kepu_art_hot');
    }

    public function getAllArticle(){

    }

    public function getOneArticle($id){
        if(empty($id)){
            return false;
        }
        $Dao = M('article');
        $con['kepu_art_id'] = $id;
        $res = $Dao->where($con)->find();

        $class_id = $res['kepu_art_class'];

        $Dao2 = M('sort');
        $con2['kepu_sort_id'] = $class_id;
        $res2 = $Dao2->where($con2)->find();

        $res['kepu_art_class'] = $res2['kepu_sort_name'];

        return $res;
    }
}