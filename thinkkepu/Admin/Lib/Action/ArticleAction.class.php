<?php

Class ArticleAction extends Action{

    public function __construct(){
        parent::__construct();
        check_login();
    }

    public function del(){
        $Dao = M("article");
        $id = $_GET['id'];
        $result = $Dao->where('kepu_art_id = %s',$id)->delete();

        header("Location: /thinkkepu/admin.php/Index/admin_art");
    }

    public function addImage(){
        $action = $_GET['act'];
        if($action=='delimg'){
            $filename = $_POST['imagename'];
            if(!empty($filename)){
                unlink('../files/'.$filename);
                echo '1';
            }else{
                echo '删除失败.';
            }
        }else{
            $picname = $_FILES['mypic']['name'];
            $picsize = $_FILES['mypic']['size'];
            if ($picname != "") {
                if ($picsize > 1024000) {
                    echo '图片大小不能超过1M';
                    exit;
                }
                $type = strstr($picname, '.');
                if ($type != ".gif" && $type != ".jpg" && $type != ".png") {
                    echo '图片格式不对！';
                    exit;
                }
                $rand = rand(100, 999);
                $pics = date("YmdHis") . $rand . $type;
                //上传路径
                $pic_path = "../files/". $pics;
                move_uploaded_file($_FILES['mypic']['tmp_name'], $pic_path);
            }
            $size = round($picsize/1024,2);
            $arr = array(
                'name'=>$picname,
                'pic'=>$pics,
                'size'=>$size
            );
            echo json_encode($arr);
        }
    }

    public function add(){

        $User = M("article");
        $data['kepu_art_time'] = time();
        $data['kepu_art_content'] = $_POST['wen'];
        $data['kepu_art_title'] = $_POST['title'];
        $data['kepu_art_class'] = $_POST['class'];
        $data['kepu_art_author'] = $_POST['author'];
        $data['kepu_art_show'] = $_POST['show'];
        $data['kepu_art_img'] = $_POST['image'];
        $User->add($data);

        header("Location: /thinkkepu/admin.php/Index/admin_art");
    }

}

?>