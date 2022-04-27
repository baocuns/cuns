<?php

// Đường dẫn tới hệ  thống
define('PATH_SYSTEM', __DIR__ .'/system');
define('PATH_APPLICATION', __DIR__ . '/admin');
define('PATH_PUBLIC', '/public');
 
// Lấy thông số cấu hình
require (PATH_SYSTEM . '/config/config.php');
 
//mở file CS_Common.php, file này chứa hàm CS_Load() chạy hệ thống
include_once PATH_SYSTEM . '/core/CS_Common.php';

// Chương trình chính
CS_load();
