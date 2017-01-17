<?php
	/**
	 * Created by PhpStorm.
	 * Project name：thinkphp
	 * User: longxiangde
	 * Date: 2017/1/3
	 * Time: 13:15
	 */
class LoginAction extends Action {
	public function index(){
		$this->display();
	}
	
	Public function do_login() {
		$username = $_POST['username'];
		$password = $_POST['password'];
		//$code = $_POST['code'];
		//if($_SESSION['verify']!==md5($code)){
		//	$this->error('验证码错误');
		//}
		$m = M('user');
		$where['username'] = $username;
		$where['password'] = $password;
		$i = $m->where($where)->count();
		if($i > 0){

			$this->assign('datalogin', $username);
			//$this->redirect('User/welcome');
			$this->display('User:welcome');

		}else{
			$this->error('该用户不存在！');
		}


	}
}