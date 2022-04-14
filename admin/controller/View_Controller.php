<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
class View_Controller extends Base_Controller
{
    public function indexAction()
    {
        $data = array(
            'title' => 'Chào mừng các bạn đến với Index'
        );
         
        // Load view
        $this->view->load('view', $data);
    }
    public function viewAction()
    {
        $data = array(
            'title' => 'Chào mừng các bạn đến với view'
        );
         
        // Load view
        $this->view->load('view', $data);
    }
}