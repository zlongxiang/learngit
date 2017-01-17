<?php
	/**
	 * Created by PhpStorm.
	 * Project name：thinkphp
	 * User: longxiangde
	 * Date: 2017/1/4
	 * Time: 13:19
	 */
class RegisterAction extends Action {
	public function index() {
		$this->display();
	}
	public function search() {
		$username = $_POST['reg_username'];
		$m = M('user');
		$arr = $m->select();
		foreach($arr as $vo){
			if($vo['username'] == $username){
				$this->assign('data', $vo['username']);
				$this->error('该用户已经存在！');
				$this->redirect('index');
			}
		}
		
		$m->username = $username;
		$m->sex = $_POST['reg_sex'];
		$m->password = $_POST['reg_password'];
		$count = $m->add();
		if($count > 0) {
			$this->success('增加用户成功');
			$this->assign('datalogin', $username);
			$this->display('User:welcome');
			//$this->redirect('User/welcome');
		}else {
			$this->error('增加用户失败');
		}
	}
}