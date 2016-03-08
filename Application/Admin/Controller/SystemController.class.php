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

    public function getUser() {
        $info = $this->User->select();
        foreach ($info as $k => $person) {
            $info[$k]['logintime'] = date('Y-m-d H:i:s', $person['logintime']);
        }
        $this->ajaxReturn($info);
    }

    public function loginInfo() {
        $this->show();
    }

    public function getlog() {
        $Loginlog = M();
        $this->ajaxReturn(
            $Loginlog->query(
                "select "
                . "a.id, b.username, a.logintime, a.loginip "
                . "from loginlog a "
                . "inner join user b on %d = %d",
                array('a.user_id', 'b.id')
            )
        );
    }

    public function deleteLog() {
        $deleteLog = M('loginlog');
        $num = I('get.num');
//        $info = $deleteLog->field('id')->order('id desc')->find();
        $deleteLog->where('1')->delete();
    }
}