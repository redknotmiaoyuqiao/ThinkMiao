<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/5/4
 * Time: 10:57
 */

class CustomModel extends Model{

    public function getCustomByTag($tag){
        if(empty($tag)){
            return false;
        }
        $Dao = M('custom_module_list');
        $con['kepu_custom_module_list_tag'] = $tag;
        $res = $Dao->where($con)->find();

        $type = $res['kepu_custom_module_list_type'];
        $list_id = $res['kepu_custom_module_list_id'];

        $Dao2 = M('custom_module_content');
        $con2['kepu_custom_module_content_list_id'] = $list_id;
        $res2 = $Dao2->where($con2)->select();

        $out = '';

        if($type == 1){
            $t = uniqid();
            $out = '<div class="carousel slide" id="carousel-'.$t.'"><div class="carousel-inner">';

            for($i=0;$i<count($res2);$i++){
                $item = $res2[$i];
                if($i==0){
                    $out = $out.'<div class="active item">';
                }
                else{
                    $out = $out.'<div class="item">';
                }
                $out = $out.'<a href="';
                $out = $out.$item['kepu_custom_module_content_url'];
                $out = $out.'"><img style="height:400px;width:100%" alt="" src="/files/'.$item['kepu_custom_module_content_imgurl'].'" /></a>';
                $out = $out.'<div class="carousel-caption">';
                $out = $out.'<h4>';
                $out = $out.$item['kepu_custom_module_content_title'];
                $out = $out.'</h4>';
                $out = $out.'<p>';
                $out = $out.$item['kepu_custom_module_content_show'];
                $out = $out.'</p>';
                $out = $out.'</div>';
                $out = $out.'</div>';
            }
            $out = $out.'</div> <a data-slide="prev" href="#carousel-'.$t.'" class="left carousel-control"></a> <a data-slide="next" href="#carousel-'.$t.'" class="right carousel-control"></a></div>';
        }

        if($type == 2){
            for($i=0;$i<count($res2);$i++){
                $item = $res2[$i];
                $str = $str.'<div style="width:100% ;height:250px;border: 1px solid #dfdfdf;border-top: 5px solid #CC0000;">';
                $str = $str.'<a href="'.$item['kepu_custom_module_content_url'].'">';
                $str = $str.'<h4 style="margin-left: 10px;">'.$item['kepu_custom_module_content_title'].'</h4>';
                $str = $str.'<img style="height:200px;width:97% ;margin-left:10px;margin-right:10px" src="/files/'.$item['kepu_custom_module_content_imgurl'].'"/>';
                $str = $str.'</a>';
                $str = $str.'</div><br>';
            }
            $out = $str;
        }

        if($type == 3){
            $out = '';
            for ($i = 0; $i < ((count($res2)) / 3); $i++) {
                $out = $out . '<div class="row-fluid">';
                $w = $i * 3;
                for ($j = $w; $j < $w + 3; $j++) {
                    $item = $res2[$j];
                    if ($item) {
                        $out = $out . '<div class="span4" style="height:350px;border: 1px solid #dfdfdf;border-top: 5px solid #CC0000;">';
                        $out = $out . '<h4 style="margin-left: 10px;">' .$item['kepu_custom_module_content_title'] . '</h4>';
                        $out = $out . '<img style="height:210px;width:90% ;margin-left:10px;margin-right:10px" src="/files/'.$item['kepu_custom_module_content_imgurl'].'"/>';
                        $out = $out . '<div style="overflow:hidden;text-overflow:ellipsis;white-apace:nowrap;height:80px;height:45px;width:90% ;margin-top:10px;margin-left:10px;margin-right:10px">';
                        $out = $out . '<small>'.$item['kepu_custom_module_content_show'].'</small>';
                        $out = $out . '</div>';
                        $out = $out . '<a href="'.$item['kepu_custom_module_content_url'].'"><h5 style="margin-left: 10px; color:#CC0000">了解活动</h5></a>';
                        $out = $out . '</div>';
                    }
                }   
                $out = $out . '</div><br>';
            }
        }

        return $out;
    }
}