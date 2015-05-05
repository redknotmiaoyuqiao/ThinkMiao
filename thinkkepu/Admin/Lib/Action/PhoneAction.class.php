<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/3/29
 * Time: 20:59
 */

class PhoneAction extends Action{

    public function __construct(){
        parent::__construct();
        check_login();
    }

    public function index(){

    }

    public function add_text(){
        $this->display();
    }

    public function update_text(){
        $id = $_GET['id'];
        $Dao = M('phoneclass');
        $con['kepu_phone_id'] = $id;
        $res = $Dao->where($con)->find();

        $this->assign('save',$res['kepu_phone_save']);
        $this->display();
    }

    public function update(){
        $content = $_POST['content'];
        $subject_save_t = $_POST['subject_save_t'];

        $id = $_GET['id'];

        $Dao = M('phoneclass');

        $con['kepu_phone_id'] = $id;

        $phone['kepu_phone_save'] = $subject_save_t;
        $phone['kepu_phone_list'] = $content;

        $re = $Dao->where($con)->save($phone);
        if($re){
            header("Location: /thinkkepu/admin.php/Index/admin_phone");
        }
    }

    public function add(){
        $content = $_POST['content'];
        $subject_title_t = $_POST['subject_title_t'];
        $subject_show_t = $_POST['subject_show_t'];
        $subject_save_t = $_POST['subject_save_t'];

        $Dao = M('phoneclass');
        $con['kepu_phone_name'] = $subject_title_t;
        $con['kepu_phone_list'] = $content;
        $con['kepu_phone_save'] = $subject_save_t;
        $re = $Dao->add($con);

        if($re){
            header("Location: /thinkkepu/admin.php/Index/admin_phone");
        }
    }

    public function del(){
        $id = $_GET['id'];
        if(empty($id)){
            exit;
        }
        $Dao = M('phoneclass');
        $con['kepu_phone_id'] = $id;
        $re = $Dao->where($con)->delete();

        if($re){
            header("Location: /thinkkepu/admin.php/Index/admin_phone");
        }
    }
}