<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/4/7
 * Time: 0:15
 */

class SortAction extends Action{

    public function __construct(){
        parent::__construct();
        check_login();
    }

    public function addSort(){
        $name = $_POST['sort_name'];
        if(empty($name)){
            header("Location: /thinkkepu/admin.php/index/admin_sort");
            exit;
        }

        $sort = new ArticleSortModel();
        $sort->insertSort($name);
        $t = time();
        header("Location: /thinkkepu/admin.php/index/admin_sort?hah=$t");
    }

    public function delSort(){
        $id = $_GET['id'];

        if(empty($id)){
            header("Location: /thinkkepu/admin.php/index/admin_sort");
            exit;
        }

        $sort = new ArticleSortModel();
        $sort->delSort($id);
        $t = time();
        header("Location: /thinkkepu/admin.php/index/admin_sort?hah=$t");
    }
}

?>