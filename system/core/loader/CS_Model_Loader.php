<?php if ( ! defined('PATH_APPLICATION')) die ('Bad requested!');

/**
 * @package     CS_Framework
 * @author      cuns
 * @email       cuns@gmail.com
 * @copyright   Copyright (c) 2022
 * @since       Version 1.0
 * @filesource  system/core/loader/CS_Model_Loader.php
 */
 
class CS_Model_Loader {

    public function load($model, $agrs = array())
    {
        // Nếu thư viện chưa được load thì thực hiện load
        if (empty($this->{$model}))
        {
            // Chuyển chữ hoa đầu và thêm hậu tố _Library
            $class = ucfirst($model) . '_Model';
            //import thư viện Database để class model mới có thể kế thừa được
            require_once(PATH_SYSTEM . '/config/Database.php');
            //import thư viện model
            require_once(PATH_APPLICATION . '/model/' . $class . '.php');
            //Tạo class
            $this->{$model} = new $class($agrs);
        }
    }
}