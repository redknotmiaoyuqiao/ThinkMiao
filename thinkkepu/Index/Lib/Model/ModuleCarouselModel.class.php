<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/4/9
 * Time: 0:28
 */

class ModuleCarouselModel extends Model{

    public function del($id){
        if(empty($id)){
            return false;
        }
        $Dao = M('module_carousel');
        $con['kepu_module_carousel_id'] = $id;
        $re = $Dao->where($con)->delete();

        if($re){
            return true;
        }
        return false;
    }

    public function getAll(){
        $Dao = M('module_carousel');
        $res = $Dao->select();

        return $res;
    }

    public function getView(){
        $Dao = M('module_carousel');
        $res = $Dao->select();


        $out = '<div class="carousel slide" id="carousel-76042"><div class="carousel-inner">';

        for($i=0;$i<count($res);$i++){
            $item = $res[$i];
            if($i==0){
                $out = $out.'<div class="active item">';
            }
            else{
                $out = $out.'<div class="item">';
            }
            $out = $out.'<a href="';
            $out = $out.$item['kepu_module_carousel_url'];
            $out = $out.'"><img style="height:400px;width:100%" alt="" src="'.$item['kepu_module_carousel_img'].'" /></a>';
            $out = $out.'<div class="carousel-caption">';
            $out = $out.'<h4>';
            $out = $out.$item['kepu_module_carousel_title'];
            $out = $out.'</h4>';
            $out = $out.'<p>';
            $out = $out.$item['kepu_module_carousel_show'];
            $out = $out.'</p>';
            $out = $out.'</div>';
            $out = $out.'</div>';
        }

        $out = $out.'</div> <a data-slide="prev" href="#carousel-76042" class="left carousel-control">‹</a> <a data-slide="next" href="#carousel-76042" class="right carousel-control">›</a></div>';
        return $out;
    }
}