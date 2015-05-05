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

        $out = '<div class="carousel slide" id="carousel-863851"><div class="carousel-inner">';

        for($i=0;$i<count($res);$i++){
            $item = $res[$i];

            $out = $out.'<div class="item"><img alt="" src="';
            $out = $out.$item['kepu_module_carousel_img'];
            $out = $out.'" /><div class="carousel-caption"><h4>';
            $out = $out.$item['kepu_module_carousel_title'];
            $out = $out.'</h4><p>';
            $out = $out.$item['kepu_module_carousel_show'];
            $out = $out.'</p></div></div>';
        }

        $out = $out.'</div> <a data-slide="prev" href="#carousel-863851" class="left carousel-control">‹</a> <a data-slide="next" href="#carousel-863851" class="right carousel-control">›';

        return $out;
    }
}