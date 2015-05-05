<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    }

    public function getClassList(){
        $Dao = M("sort");
        $res = $Dao->select();
        echo json_encode($res);
    }

    public function getWen(){
        $id = $_GET['id'];

        $Dao = M('article');

        $con['kepu_art_id'] = $id;
        $res = $Dao->where($con)->find();

        //echo $res['kepu_art_content'];
        $this->assign('title',$res['kepu_art_title']);
        $this->assign('show',$res['kepu_art_show']);
        $this->assign('time',date('Y-m-d h:m', $res['kepu_art_time']));
        $this->assign('wen',$res['kepu_art_content']);
        $this->assign('id',$id);

        $this->display();
    }
    public function getWenList(){
        $Dao = M("article");
        $id = $_GET['id'];
        $size_a = $_GET['size'];
        $size_b = $size_a + 10;

        $con['kepu_art_class'] = $id;

        $res = $Dao->where($con)->limit($size_a,$size_b)->select();

        for($i=0;$i<count($res);$i++){
            $class_id = $res[$i]['kepu_art_class'];
            $Dao2 = M('sort');
            $con2['kepu_sort_id'] = $class_id;
            $res2 = $Dao2->where($con2)->find();
            $res[$i]['kepu_art_class'] = $res2['kepu_sort_name'];
        }

        if(count($res) == 0){
            echo '[]';
        }else{
            echo json_encode($res);
        }

    }
}