<?php if (!defined('PATH_SYSTEM')) die('Bad requested!');

class Signup_Controller extends Base_Controller
{
    public function indexAction()
    {
        $this->view->load('signup');
    }
    public function sendmailAction()
    {
        // Tạo mới thư viện
        $this->library->load('sendmail');

        // Gọi đến phương thức upload
        $result = $this->library->sendmail->sendmail();
        if ($result) {
            echo 'thanh cong';
        }
        else {
            echo 'that bai';
        }
    }
}