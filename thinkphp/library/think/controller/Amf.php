<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

namespace think\controller;

abstract class Amf {

   /**
     * PHPRpc控制器架构函数
     * @access public
     */
    public function __construct() {
    	//导入类库
    	Think\Loader::import('Vendor.Zend.Amf.Server');
    	//实例化AMF
    	$server = new \Zend_Amf_Server();
  	    $server -> setClass($this);
    	echo $server -> handle();
        return ;
    }

}
