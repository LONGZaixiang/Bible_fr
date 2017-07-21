<?php

require_once 'ActionBase.class.php';


class hello extends ActionBase {
	public $need_login ;
    public function action(){
        //页面展示
         echo "ok";
        die;
        
    }
}