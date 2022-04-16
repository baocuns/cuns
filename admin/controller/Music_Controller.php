<?php if (!defined('PATH_SYSTEM')) die('Bad requested!');

class Music_Controller extends Base_Controller
{
    public function indexAction()
    {
        $this->view->load('music');
    }
}