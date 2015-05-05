<?php

class SubjectAction extends Action{

    public function __construct(){
        parent::__construct();
        check_login();
    }

    public function index(){

        $Dao = M('staitc_module');

        $list = $Dao->select();

        $Dao2 = M('custom_module_list');

        $res = $Dao2->select();

        $this->assign("list",$list);
        $this->assign("custom_list",$res);
        $this->display();
    }

    public function htmltext(){
        $this->display();
    }

    public function add(){

        $head = '<!DOCTYPE html><html><head lang="en"><meta charset="UTF-8">
            <title></title>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/page_style.css"/>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/page_style_abc.css"/>
            <link href="__PUBLIC__/layoutit/css/bootstrap-combined.min.css" rel="stylesheet">
            <script type="text/javascript" src="__PUBLIC__/layoutit/js/jquery-2.0.0.min.js"></script>
            <script type="text/javascript" src="__PUBLIC__/layoutit/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="__PUBLIC__/js/jquery.floatDiv.js"></script>
            <script type="text/javascript" src="__PUBLIC__/js/page_js.js"></script>

            <style>body{  margin: 0px 0px 0px 0px;
            font-family: 微软雅黑;
            }</style></head><body>';

        $afterbody = '</body></html>';
        $Dao = M("subject");

        $data['kepu_subject_title'] = $_POST['subject_title_t'];
        $data['kepu_subject_show'] = $_POST['subject_show_t'];
        $data['kepu_subject_save'] = $_POST['subject_save_t'];
        $data['kepu_subject_content'] = $head.$_POST['content'].$afterbody;
        $Dao->add($data);

        header("Location: /thinkkepu/admin.php/Index/admin_subject");
    }

    public function del(){
        $Dao = M("subject");
        $id = $_GET['id'];
        $Dao->where("kepu_subject_id = %s" ,$id)->delete();

        header("Location: /thinkkepu/admin.php/Index/admin_subject");
    }

    public function updatepage(){
        $Dao = M("subject");
        $id = $_GET['id'];
        $resa = $Dao->where("kepu_subject_id = %s" ,$id)->find();

        $Dao = M('staitc_module');

        $list = $Dao->select();

        $Dao2 = M('custom_module_list');

        $res = $Dao2->select();

        $this->assign("list",$list);
        $this->assign("custom_list",$res);

        $this->assign('save',$resa['kepu_subject_save']);

        $this->display();
    }

    public function update(){

        $head = '<!DOCTYPE html><html><head lang="en"><meta charset="UTF-8"><title></title>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/page_style.css"/>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/page_style_abc.css"/>
            <link href="__PUBLIC__/layoutit/css/bootstrap-combined.min.css" rel="stylesheet">
            <script type="text/javascript" src="__PUBLIC__/layoutit/js/jquery-2.0.0.min.js"></script>
            <script type="text/javascript" src="__PUBLIC__/layoutit/js/bootstrap.min.js"></script>

            <script type="text/javascript" src="__PUBLIC__/js/jquery.floatDiv.js"></script>
            <script type="text/javascript" src="__PUBLIC__/js/page_js.js"></script>

            <style>body{  margin: 0px 0px 0px 0px;
             font-family: 微软雅黑;
             }</style></head><body>';

        $afterbody = '</body></html>';

        $id = $_GET['id'];

        $Dao = M("subject");

        $data['kepu_subject_save'] = $_POST['subject_save_t'];
        $data['kepu_subject_content'] = $head.$_POST['content'].$afterbody;

        $Dao->where("kepu_subject_id = %s" ,$id)->save($data);

        header("Location: /thinkkepu/admin.php/Index/admin_subject");
    }

    public function getpage(){
        $id = $_GET['id'];

        $Dao = M("subject");
        $res = $Dao->where("kepu_subject_id = %s" ,$id)->find();

        echo json_encode($res);
    }
    public function getwen(){
        $id = $_GET['id'];

        $Dao = new ArticleModel();
        $res = $Dao->getOneArticle($id);

        echo json_encode($res);
    }
}

?>