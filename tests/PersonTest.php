<?php

define('DS', DIRECTORY_SEPARATOR);

use PHPUnit\Framework\TestCase;
use smbkr\PeopleThing\models\Person;

class PersonTest extends TestCase {

	/**
	 * Test that a Person model can be created
	 */
	public function testCanCreateAPerson() {
		$person = $this->getPerson();

		$this->assertInstanceOf('smbkr\PeopleThing\models\Person', $person);
	}

	/**
	 * Test the getters on Person model
	 */
	public function testCanGetProperties() {
		$person = $this->getPerson();

		$this->assertEquals('Vince Noir', $person->getName());
		$this->assertEquals('19880211', $person->getDob(false));
		$this->assertEquals('dev@null.com', $person->getEmail());
	}

	/**
	 * Helper function to create a new Person quickly
	 * @return Person
	 */
	private function getPerson() {
		$person = new Person();
		$name = "Vince Noir";
		$dob = "19880211";
		$email = "dev@null.com";
		
		$person->setName($name);
		$person->setDob($dob);
		$person->setEmail($email);

		return $person;
	}
}