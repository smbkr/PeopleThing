<?php
namespace smbkr\PeopleThing;

class Template {

	private function __construct() {}
	private function __clone() {}

	public static function is($template) {
		return ROOTDIR.DS.'app'.DS.'views'.DS.$template.'.phtml';
	}
}