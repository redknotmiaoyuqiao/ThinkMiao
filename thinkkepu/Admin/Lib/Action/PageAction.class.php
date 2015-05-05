<?php

class PageAction extends Action{

    public function __construct(){
        parent::__construct();
        check_login();
    }

    public function updata(){
        $newid =  $_POST['newid'];
        $id = $_GET['id'];

        $Dao = M('page');
        $data['kepu_page_subject_id'] = $newid;
        $Dao->where('kepu_page_id=%s',$id)->save($data);

        header("Location: /thinkkepu/admin.php/Index/admin_page");
    }
}

?>