<?php

define('ROOTDIR', '');

use PHPUnit\Framework\TestCase;
use smbkr\PeopleThing\Template;

class TemplateTest extends TestCase {

	/**
	 * Test that the template helper class outputs the template path correctly
	 */
	public function testTemplateString() {
		$t = Template::is('test');
		$ds = DIRECTORY_SEPARATOR;
		$this->assertEquals($ds.'app'.$ds.'views'.$ds.'test.phtml', $t);
	}
}