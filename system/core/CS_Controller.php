<?php if (!defined('PATH_SYSTEM')) die('Bad requested!');

/**
 * @package     CS_Framework
 * @author      cuns
 * @email       cuns@gmail.com
 * @copyright   Copyright (c) 2022
 * @since       Version 1.0
 * @filesource  system/core/CS_Controller.php
 */
class CS_Controller
{
    // Đối tượng view
    protected $view     = NULL;

    // Đối tượng model
    protected $model    = NULL;

    // Đối tượng library
    protected $library  = NULL;

    // Đối tượng helper
    protected $helper   = NULL;

    // Đối tượng config
    protected $config   = NULL;

    /**
     * Hàm khởi tạo
     * 
     * @desc    Load các thư viện cần thiết
     */
    public function __construct()
    {
        // Loader cho config
        require_once PATH_SYSTEM . '/core/loader/CS_Config_Loader.php';
        $this->config   = new CS_Config_Loader();
        $this->config->load('config');

        // Loader Library
        require_once PATH_SYSTEM . '/core/loader/CS_Library_Loader.php';
        $this->library = new CS_Library_Loader();

        // Loader Library
        require_once PATH_SYSTEM . '/core/loader/CS_Helper_Loader.php';
        $this->helper = new CS_Helper_Loader();;

        // Load View
        require_once PATH_SYSTEM . '/core/loader/CS_View_Loader.php';
        $this->view = new CS_View_Loader();

        // load model
        require_once PATH_SYSTEM . '/core/loader/CS_Model_Loader.php';
        $this->model = new CS_Model_Loader();
    }
}
