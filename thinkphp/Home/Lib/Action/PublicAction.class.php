<?php
	
	/**
	 * Created by PhpStorm.
	 * Project name：thinkphp
	 * User: longxiangde
	 * Date: 2017/1/3
	 * Time: 14:57
	 */
	class PublicAction extends Action{
		public function code(){
			import('ORG.Util.Image');
			Image::buildImageVerify(1);
		}

	}