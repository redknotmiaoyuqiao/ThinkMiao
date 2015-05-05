<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/3/23
 * Time: 14:20
 */

class LoginAction extends Action{

    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username) || empty($password)){
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
            $user_id = $res['kepu_user_id'];
            $username = $res['kepu_user_name'];
            $password = $res['kepu_user_password'];

            $time = time();

            $check_id = $username + $time + $password;

            $check_id = md5($check_id);

            $con['kepu_user_session'] = $check_id;
            $con['kepu_user_id'] = $user_id;

            $Dao->save($con);

            $res['username'] = $username;
            $res['session'] = $check_id;

            echo json_encode($res);
        }
        else{
            echo 'falut';
        }
    }

}