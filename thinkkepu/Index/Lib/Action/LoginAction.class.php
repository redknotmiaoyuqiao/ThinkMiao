<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/3/10
 * Time: 0:13
 */

class LoginAction extends Action{

    public function index(){
        $this->display();
    }

    public function loginProcess(){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username) && empty($password)){
            echo 'empty';
            exit;
        }

        $password = md5($password);

        $Dao = M('user');
        $user['kepu_user_name'] = $username;
        $user['kepu_user_password'] = $password;
        $count = $Dao->where($user)->count();

        if($count==1){
            $res = $Dao->where($user)->find();
            session_start();
            $_SESSION['user_id'] = $res['kepu_user_id'];
            $_SESSION['user_name'] = $res['kepu_user_name'];
            echo 'success';
        }
        else{
            echo 'falut';
        }
    }
}