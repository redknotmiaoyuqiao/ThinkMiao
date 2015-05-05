<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/4/12
 * Time: 0:22
 */

class Top5Model extends Model{

    public function getView(){
        $Dao = M('article');
        $res = $Dao->limit(5)->order('kepu_art_hot desc')->select();

        $out = '';
        for($i=0;$i<count($res);$i++){
            $Dao2 = M('sort');
            $con2['kepu_sort_id'] = $res[$i]['kepu_art_class'];
            $res2 = $Dao2->where($con2)->find();
            $res[$i]['kepu_art_class'] = $res2['kepu_sort_name'];


            if($i==0){
                $img_src = '/thinkkepu/Public/top/top1.png';
            }
            else if($i==1){
                $img_src = '/thinkkepu/Public/top/top2.png';
            }
            else if($i==2){
                $img_src = '/thinkkepu/Public/top/top3.png';
            }
            else if($i==3){
                $img_src = '/thinkkepu/Public/top/top4.png';
            }
            else if($i==4){
                $img_src = '/thinkkepu/Public/top/top5.png';
            }

            $out = $out.'<div class="row-fluid">';
            $out = $out.'<div class="span12" style="border: 1px solid #eff0ef;">';
            $out = $out.'<div class="span4">';
            $out = $out.'<img style="height:80px;width:100%" src="'.$img_src.'"/>';
            $out = $out.'</div>';

            $out = $out.'<div class="span8" style="overflow:hidden;text-overflow:ellipsis;white-apace:nowrap;height:80px">';
            $out = $out. '<h5><a href="/thinkkepu/index.php/Index/wen?art_id='.$res[$i]['kepu_art_id'].'">'.$res[$i]['kepu_art_title'].'</a></h5>';
            $out = $out.'</div>';

            $out = $out.'</div>';
            $out = $out.'</div>';


        }


        return $out;
    }
}





