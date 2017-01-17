<?php
	/**
	 * Created by PhpStorm.
	 * Project name：thinkphp
	 * User: longxiangde
	 * Date: 2017/1/5
	 * Time: 21:07
	 */
class DemoAction extends Action {
	public function index(){
		load("@.myfunction");
		pfhello();
	}
	public function showD(){
		load("@.myfunction");
		pfhello();
	}
}