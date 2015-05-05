<?php
class CustomModuleAction extends Action{

    public function __construct(){
        parent::__construct();
        check_login();
    }


    public function addlist(){

        $Dao = M('custom_module_list');
        $con['kepu_custom_module_list_title'] = $_POST['title'];
        $con['kepu_custom_module_list_type'] = $_POST['type'];
        $t = uniqid();
        $con['kepu_custom_module_list_tag'] = '{'.$t.'}';
        $Dao->add($con);

        header("Location: /thinkkepu/admin.php/index/admin_add_module");

    }

    public function dellist(){
        $id = $_GET['id'];
        if(empty($id)){
            header("Location: /thinkkepu/admin.php/index/admin_add_module");exit;
        }

        $Dao = M('custom_module_list');
        $con['kepu_custom_module_list_id'] = $id;
        $Dao->where($con)->delete();

        $Dao = M('custom_module_content');
        $con['kepu_custom_module_content_list_id'] = $id;
        $Dao->where($con)->delete();

        header("Location: /thinkkepu/admin.php/index/admin_add_module");
    }

    public function delContent(){
        $id = $_GET['id'];
        $Dao = M('custom_module_content');
        $con['kepu_custom_module_content_id'] = $id;
        $Dao->where($con)->delete();
        $return = $_GET['return'];

        header("Location: /thinkkepu/admin.php/index/admin_add_module?id=$return");
    }
	
	public function addContent(){

        if(empty($_GET['id'])){
            header("Location: /thinkkepu/admin.php/index/admin_add_module?id=$id");exit;
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

		$kepu_custom_module_content_title = $_POST['kepu_custom_module_content_title'];
		$kepu_custom_module_content_show = $_POST['kepu_custom_module_content_show'];
		$kepu_custom_module_content_url = $_POST['kepu_custom_module_content_url'];
		$kepu_custom_module_content_imgurl = $pics;

        $id = $_GET['id'];

		$con['kepu_custom_module_content_title'] = $kepu_custom_module_content_title;
		$con['kepu_custom_module_content_show'] = $kepu_custom_module_content_show;
		$con['kepu_custom_module_content_url'] = $kepu_custom_module_content_url;
		$con['kepu_custom_module_content_imgurl'] = $kepu_custom_module_content_imgurl;
		$con['kepu_custom_module_content_list_id'] = $id;

		$Dao = M('custom_module_content');
		$re = $Dao->add($con);

		header("Location: /thinkkepu/admin.php/index/admin_add_module?id=$id");

	}
}

?>
