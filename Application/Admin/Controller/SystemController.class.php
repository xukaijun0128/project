<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;

class SystemController extends BaseController {
    public function config(){
        $this->show();
	}

    public function getConfig(){
        $this->ajaxReturn($this->Config->select());
	}

    public function editConfig(){
        $data = $_GET;
        $config = array();
        print_r($data);
        foreach ($data as $k => $v) {
            $this->Config->save($config);
        }
	}
}