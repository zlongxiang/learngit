<?php
	/**
	 * Created by PhpStorm.
	 * Project name：thinkphp
	 * User: longxiangde
	 * Date: 2017/1/1
	 * Time: 13:31
	 */
class UserAction extends Action{
	public function index() {
		$m = M('user');
		$arr=$m->select();
		$this->assign('data',$arr);
		$this->assign('name', '庄龙祥');
		$this->display();
	}
	public function modify() {
		$m = M('user');
		$arr = $m->find($_GET['id']);
		$this->assign('data',$arr);
		$this->display();
	}
	public function delete() {
		$m = M('user');
		$count = $m->delete($_GET['id']);
		if($count > 0) {
			$this->success('删除数据成功');
		}else{
			$this->error('删除数据失败');
		}
	}

	public function update() {
		$m =M('user');
		$data['id']=$_POST['id'];
		$data['username'] = $_POST['username'];
		$data['sex'] = $_POST['sex'];
		$count = $m->save($data);
		if($count > 0) {
			$this->success('修改数据成功','index');
		}else {
			$this->error('修改数据失败');
		}
	}
	public function add() {
		$this->display();
	}
	public function create(){
		$m = M('user');
		$m->username = $_POST['name'];
		$m->sex = $_POST['sex'];
		$count = $m->add();
		if($count > 0) {
			$this->success('增加用户成功', 'index');
		}else {
			$this->error('增加用户失败');
		}
	}

	public function search() {
		$m = M('user');
		$where = array();
		if(isset($_POST['username']) && $_POST['username'] != NULL) {
			$where['username'] = array('like', "%{$_POST['username']}%");
		}
		if(isset($_POST['sex']) && $_POST['sex'] != NULL) {
			$where['sex'] = array('eq', $_POST['sex']);
		}
		$arr = $m->where($where)->select();
		$this->assign('data',$arr);
		$this->display('index');
		dump($arr);
	}
	public function welcome(){
		
	
		$this->display();
	}

}