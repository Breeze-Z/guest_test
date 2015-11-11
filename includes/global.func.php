<?php
/**
 * 获取运行时间
 * @access public
 * @return float
 */
function run_time(){
    $time = explode(' ', microtime());
    return $time[0]+$time[1];
}

