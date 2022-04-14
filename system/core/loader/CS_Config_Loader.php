<?php
/**
 * @package     CS_Framework
 * @author      cuns
 * @email       cuns@gmail.com
 * @copyright   Copyright (c) 2022
 * @since       Version 1.0
 * @filesource  system/core/loader/CS_Config_Loader.php
 */
class CS_Config_Loader
{
    // Danh sách config
    protected $config = array();
     
    /**
     * Load config
     * 
     * @param   string
     * @desc    hàm load config, tham số truyền vào là tên của config
     */
    public function load($config)
    {
        if (file_exists(PATH_APPLICATION . '/config/' . $config . '.php')){
            $config = include_once PATH_APPLICATION . '/config/' . $config . '.php';
            if ( !empty($config) ){
                foreach ($config as $key => $item){
                    $this->config[$key] = $item;
                }
            }
            return true;
        }
        return FALSE;
    }
     
    /**
     * Get item config
     * 
     * @param   string
     * @param   string
     * @desc    hàm get config item, tham số truyền vào là tên của item và tham số mặc định
     */
    public function item($key, $defailt_val = '')
    {
        return isset($this->config[$key]) ? $this->config[$key] : $defailt_val;
    }
     
    /**
     * Set item config
     * 
     * @param   string
     * @param   string
     * @desc    hàm set config item, tham số truyền vào là tên của item và giá trị của nó
     */
    public function set_item($key, $val){
        $this->config[$key] = $val;
    }
}