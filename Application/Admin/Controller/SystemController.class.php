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
        $data = $_GET['data'];
        $data = json_decode($data, true);
        
        foreach ($data as $k => $v) {
            $this->Config->save($v);
        }

        $this->ajaxReturn(true);
	}

    public function user() {
        $this->show();
    }
}