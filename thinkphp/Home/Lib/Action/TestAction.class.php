<?php
	/**
	 * Created by PhpStorm.
	 * Project name：thinkphp
	 * User: longxiangde
	 * Date: 2017/1/4
	 * Time: 9:44
	 */
class TestAction extends Action {
	public function index(){		
		$this->display();
	}
	
	public function hello() {
		$this->display();
	}
}