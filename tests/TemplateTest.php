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
		$this->assertEquals('/app/views/test.phtml', $t);
	}
}