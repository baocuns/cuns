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
        //neu model chua duoc tao
        if (empty($this->{$model})) {
            // Chuyển chữ hoa đầu và thêm hậu tố _Model
            $class = ucfirst($model) . '_Model';
            require_once(PATH_APPLICATION . '/model/' . $class . '.php');
            $this->{$model} = new $class($agrs);
        }
    }
}