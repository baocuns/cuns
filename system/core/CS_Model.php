<?php if (!defined('PATH_SYSTEM')) die('Bad requested!');
/**
 * @package     CS_Framework
 * @author      cuns
 * @email       cuns@gmail.com
 * @copyright   Copyright (c) 2022
 * @since       Version 1.0
 * @filesource  system/core/CS_Model.php
 */

/**
 * file nay chua can thiet: cuns
 */

class CS_Model
{
    //doi tuong
    protected $model = null;

    /**
     * Hàm khởi tạo
     * 
     * @desc    Load các thư viện cần thiết
     */
    function __construct()
    {
    }
    //load model
    function CS_Model_Load($model, $action)
    {
        // Chuyển đổi tên model vì nó có định dạng là {Name}_Model
        $model = ucfirst(strtolower($model)) . '_Model';
        // chuyển đổi tên action vì nó có định dạng {name}Action
        $action = strtolower($action) . 'Action';

        // Kiểm tra file model có tồn tại hay không
        if (!file_exists(PATH_APPLICATION . '/model/' . $model . '.php')) {
            die('Không tìm thấy model');
        }
    }
}

/**
 * file nay chua can thiet: cuns
 */
