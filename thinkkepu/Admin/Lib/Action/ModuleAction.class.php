<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/4/9
 * Time: 0:40
 */

class ModuleAction extends Action{
    public function __construct(){
        parent::__construct();
        check_login();
    }

    public function addstatic(){
        $this->display();
    }
    public function addstatic_process(){
        if(empty($_POST['name']) || empty($_POST['text'])){
            header("Location: /thinkkepu/admin.php/Subject/index");
            exit;
        }
        $name = $_POST['name'];
        $text = $_POST['text'];

        $Dao = M('staitc_module');
        $con['kepu_staitc_module_name'] = $name;
        $con['kepu_staitc_module_text'] = $text;
        $Dao->add($con);
        header("Location: /thinkkepu/admin.php/Subject/index");
        exit;

    }

    public function carousel(){
        $carousel = new ModuleCarouselModel();
        $res = $carousel->getAll();

        $this->assign('carousel_list',$res);
        $this->display();
    }


    public function addCarousel(){
        $title = $_POST['title'];
        $show = $_POST['show'];
        $url = $_POST['url'];
        if(empty($title) || empty($show) || empty($url)){
            header("Location: /thinkkepu/admin.php/module/carousel");exit;
        }

        $picname = $_FILES['img']['name'];
        $picsize = $_FILES['img']['size'];
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
            move_uploaded_file($_FILES['img']['tmp_name'], $pic_path);
        }

        $carousel['kepu_module_carousel_title'] = $title;
        $carousel['kepu_module_carousel_show'] = $show;
        $carousel['kepu_module_carousel_url'] = $url;
        $carousel['kepu_module_carousel_img'] = "/files/".$pics;

        $Dao = M('module_carousel');
        $Dao->add($carousel);

        header("Location: /thinkkepu/admin.php/module/carousel");exit;

    }

    public function delCarousel(){
        $id = $_GET['id'];
        $carousel = new ModuleCarouselModel();
        $re = $carousel->del($id);

        $time = time();
        if($re){
            header("Location: /thinkkepu/admin.php/module/carousel?dd=$time");
        }
    }


    public function subject(){
        $subject = new ModuleSubjectModel();
        $res = $subject->getAll();

        $this->assign('subject_list',$res);
        $this->display();
    }


    public function delSubject(){
        $id = $_GET['id'];
        $carousel = new ModuleSubjectModel($id);;
        $re = $carousel->del($id);

        $time = time();
        if($re){
            header("Location: /thinkkepu/admin.php/module/subject?dd=$time");
        }
    }


    public function addSubject(){
        $title = $_POST['title'];
        $url = $_POST['url'];
        if(empty($title) || empty($url)){
            header("Location: /thinkkepu/admin.php/module/subject");exit;
        }

        $picname = $_FILES['img']['name'];
        $picsize = $_FILES['img']['size'];
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
            move_uploaded_file($_FILES['img']['tmp_name'], $pic_path);
        }

        $carousel['kepu_subjectlist_title'] = $title;
        $carousel['kepu_subjectlist_url'] = $url;
        $carousel['kepu_subjectlist_time'] = time();
        $carousel['kepu_subjectlist_img'] = "/files/".$pics;

        $Dao = M('subjectlist');
        $Dao->add($carousel);

        header("Location: /thinkkepu/admin.php/module/subject");exit;

    }


    public function activity(){
        $activity = new ModuleActivityModel();
        $res = $activity->getAll();

        $this->assign('activity_list',$res);
        $this->display();
    }

    public function delActivity(){
        $id = $_GET['id'];
        $del = new ModuleActivityModel();
        $del->del($id);
        header("Location: /thinkkepu/admin.php/module/activity");exit;
    }

    public function addActivity(){
        $title = $_POST['title'];
        $show = $_POST['show'];
        $url = $_POST['url'];
        if(empty($title) || empty($show) || empty($url)){
            header("Location: /thinkkepu/admin.php/module/activity");exit;
        }

        $picname = $_FILES['img']['name'];
        $picsize = $_FILES['img']['size'];
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
            move_uploaded_file($_FILES['img']['tmp_name'], $pic_path);
        }

        $carousel['kepu_module_activity_title'] = $title;
        $carousel['kepu_module_activity_show'] = $show;
        $carousel['kepu_module_activity_url'] = $url;
        $carousel['kepu_module_activity_time'] = time();
        $carousel['kepu_module_activity_img'] = "/files/".$pics;

        $Dao = M('module_activity');
        $Dao->add($carousel);

        header("Location: /thinkkepu/admin.php/module/activity");exit;

    }

}