<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
class Login_Controller extends Base_Controller
{
    public function indexAction()
    {
        $this->view->load('login');
    }
    //login
    public function loginAction()
    {
        if (isset($_POST['email'])) {
            die('không tìm thấy email');
        }
        if (isset($_POST['password'])) {
            die('không tìm thấy password');
        }

        //test
        $data = array(
            'title' => 'Chào mừng các bạn đến với Index'
        );

        $this->model->load('account');
        $this->model->account->upload();
        //$this->model->load('account', 'login') == true ? $this->view->load('view', $data) : $this->view->load('login');
    }
}