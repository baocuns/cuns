<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

/**
 * @package     CS_Framework
 * @author      cuns
 * @email       cuns@gmail.com
 * @copyright   Copyright (c) 2022
 * @since       Version 1.0
 * @filesource  system/core/loader/CS_Library_Loader.php
 */
class CS_Library_Loader
{
    /**
     * Load library
     * 
     * @param   string
     * @param   array
     * @desc    hàm load library, tham số truyền vào là tên của library và 
     *          danh sách các biến trong hàm khởi tạo (nếu có)
     */
    public function load($library, $agrs = array())
    {
        // Nếu thư viện chưa được load thì thực hiện load
        if (empty($this->{$library}) )
        {
            // Chuyển chữ hoa đầu và thêm hậu tố _Library
            $class = ucfirst($library) . '_Library';

            require_once(PATH_SYSTEM . '/library/' . $class . '.php');
            
            $this->{$library} = new $class($agrs);
        }
    }
}