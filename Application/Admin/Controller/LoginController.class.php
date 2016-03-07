<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;

class LoginController extends BaseController {
    public function index(){
        $this->show();
	}

	public function doLogin(){
        $username = I('post.username/s');
        $password = md5(I('post.password/s'));
        
        $info = $this->User->field('id')->where(
            array(
                'username' => $username,
                'password' => $password
            )
        )->find();
        if(isset($info['id'])) {
            session('username', $username);
            $this->ajaxReturn(true);
        } else {
            $this->ajaxReturn(false);
        }
	}
}