<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class Index_Controller extends Base_Controller {
    public function IndexAction()
    {
        $this->view->load('index');
    }
}