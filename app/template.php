<?php
namespace smbkr\PeopleThing;

class Template {

	private function __construct() {}
	private function __clone() {}

	/**
	* Returns path to template files
	*
	* @param string $template name of the template
	*
	* @return string
	*/
	public static function is($template) {
		return ROOTDIR.DS.'app'.DS.'views'.DS.$template.'.phtml';
	}
}