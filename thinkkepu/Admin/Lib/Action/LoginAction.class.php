<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/4/8
 * Time: 0:06
 */

class LoginAction extends Action{

    public function index(){
        $this->display();
    }

    public function loginProcess(){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username) || empty($password)){
            header("Location: /thinkkepu/admin.php/Login/index");
            exit;
        }

        $admin = new AdminModel();
        $res = $admin->login($username,$password);

        if($res){
            header("Location: /thinkkepu/admin.php/index/admin_info");
            exit;
        }

        header("Location: /thinkkepu/admin.php/Login/index");
        exit;

    }
}