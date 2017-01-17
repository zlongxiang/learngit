<?php
// 本类由系统自动生成，仅供测试用途
	/**
	 * Class IndexAction
	 */
	class IndexAction extends Action {

		public function index(){
	$this->display('User:index');
    }

		/**
		 *
		 */
	public function  showA() {
		$m = M('user');
		$arr = $m->where("sex=0 and username='陈好'")->find();//使用字符串的方式
		//$result = $m->execute("insert into user values(9,'庄龙祥',1)");
		//$arr=$m->where($data)->select();
		var_dump($arr);
		echo get_include_path();

		$this->display();

	}
//@formatter:off
	public function search(){
		$bb = 'zlx';
		pf($bb);
		
		
		
		pfhello();
	}
//@formatter:on


	}