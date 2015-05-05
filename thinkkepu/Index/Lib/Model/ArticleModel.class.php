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

    public function getSearchArticleListView(){
        $Dao = M('article');
        $class_id = $_GET['class'];
        $con['kepu_art_class'] = $class_id;
        $res = $Dao->where($con)->limit(20)->order('kepu_art_time desc')->select();

        if(count($res) == 0){
            return '查询结果为空';
        }

        for($i=0;$i<count($res);$i++){
            $Dao2 = M('sort');
            $con2['kepu_sort_id'] = $res[$i]['kepu_art_class'];
            $res2 = $Dao2->where($con2)->find();
            $res[$i]['kepu_art_class'] = $res2['kepu_sort_name'];
        }

        $out = '';
        for($i=0;$i<count($res);$i++){
            $item = $res[$i];
            $out = $out.'<div class="row-fluid">';
            $out = $out.'<div class="span4">';
            $out = $out.'<p id="model4_class">';
            $out = $out.$item['kepu_art_class'];
            $out = $out.'</p>';
            $out = $out.'<img width="300px" height="250px" id="model4_img" src="/files/'.$item['kepu_art_img'].'" alt="" />';
            $out = $out.'</div>';
            $out = $out.'<div class="span8">';
            $out = $out.'<p id="model4_time">';

            $time = date("Y-m-d h:m",$item['kepu_art_time']);

            $out = $out.$item['kepu_art_author'].'  '.$time;

            $out = $out.'</p>';
            $out = $out.'<h4 id="model4_title">';
            $out = $out.'<a href="/thinkkepu/index.php/Index/wen?art_id='.$item['kepu_art_id'].'">'.$item['kepu_art_title'].'</a>';
            $out = $out.'</h4>';
            $out = $out.'<p id="model4_show">';

            $out = $out.$item['kepu_art_show'];

            $out = $out.'</p>';
            $out = $out.'</div>';
            $out = $out.'</div><hr />';


        }
        return $out;
    }


    public function getAutoArticleListView(){
        $Dao = M('article');
        $res = $Dao->limit(20)->order('kepu_art_time desc')->select();

        for($i=0;$i<count($res);$i++){
            $Dao2 = M('sort');
            $con2['kepu_sort_id'] = $res[$i]['kepu_art_class'];
            $res2 = $Dao2->where($con2)->find();
            $res[$i]['kepu_art_class'] = $res2['kepu_sort_name'];
        }

        $out = '';
        for($i=0;$i<count($res);$i++){
            $item = $res[$i];
            $out = $out.'<div class="row-fluid">';
            $out = $out.'<div class="span4">';
            $out = $out.'<p id="model4_class">';
            $out = $out.$item['kepu_art_class'];
            $out = $out.'</p>';
            $out = $out.'<img width="300px" height="250px" id="model4_img" src="/files/'.$item['kepu_art_img'].'" alt="" />';
            $out = $out.'</div>';
            $out = $out.'<div class="span8">';
            $out = $out.'<p id="model4_time">';

            $time = date("Y-m-d h:m",$item['kepu_art_time']);

            $out = $out.$item['kepu_art_author'].'  '.$time;

            $out = $out.'</p>';
            $out = $out.'<h4 id="model4_title">';
            $out = $out.'<a href="/thinkkepu/index.php/Index/wen?art_id='.$item['kepu_art_id'].'">'.$item['kepu_art_title'].'</a>';
            $out = $out.'</h4>';
            $out = $out.'<p id="model4_show">';

            $out = $out.$item['kepu_art_show'];

            $out = $out.'</p>';
            $out = $out.'</div>';
            $out = $out.'</div><hr />';


        }
        return $out;
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