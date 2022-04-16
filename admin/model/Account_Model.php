<?php if ( ! defined('PATH_APPLICATION')) die ('Bad requested!');

class Account_Model extends Database {

    //login
    public function login($email, $password)
    {
        //1. viet sql
        $sql = parent::$connection->prepare('SELECT * FROM `cs_users` WHERE user_email = ?');
        $sql->bind_param('s', $email);

        $user = parent::select($sql);
        //kiem tra pass
        // if (password_verify($password, $user[0]['user_password'])) {
        //     return true;
        // }

        //kiểm tra tài khoản có tồn tại không.
        if (empty($user)) {
            return false;
        }
        if ($password == $user[0]['user_password']) {
            return true;
        }
        return false;
    }
    public function test()
    {
        return true;
    }
}