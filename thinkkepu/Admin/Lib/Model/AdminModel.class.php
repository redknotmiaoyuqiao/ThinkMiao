<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/4/8
 * Time: 0:12
 */

class AdminModel extends Model{

    public function login($username,$password){
        $Dao = M('admin');
        if(empty($username) || empty($password)){
            return false;
        }

        $password = md5($password);

        $user['kepu_admin_username'] = $username;
        $user['kepu_admin_password'] = $password;
        $count = $Dao->where($user)->count();

        if($count==1){
            $res = $Dao->where($user)->find();
            session_start();
            $_SESSION['admin_id'] = $res['kepu_admin_id'];
            $_SESSION['admin_name'] = $res['kepu_admin_username'];
            $_SESSION['admin_authority'] = $res['kepu_admin_authority'];

            return true;
        }
        else{
            return false;
        }
    }
}