<?php
namespace Admin\Controller;
use Think\Controller;

class BaseController extends Controller 
{
	protected $User, $Config;
	public function _initialize()
	{
		$this->User = M('user');
		$this->Config = M('config');
	}
}
?>