<?php
namespace smbkr\PeopleThing\controllers;

use smbkr\PeopleThing\models\Person;

/**
 * Class PeopleController
 * @package smbkr\PeopleThing\controllers
 * @author Stuart Baker <stuart@smbkr.xyz>
 */
class PeopleController {

	private $em;

	/**
	 * PeopleController constructor.
	 *
	 * @param \Doctrine\ORM\EntityManager $em
	 */
	public function __construct($em) {
		$this->em = $em;
	}

	/**
	 * Return all instances of Person in the database
	 *
	 * @return array
	 */
	public function index() {
		$result = array();
		$models = $this->em->getRepository('smbkr\PeopleThing\models\Person')->findAll();

		foreach ($models as $key => $person) {
			$result[$key]['name'] = $person->getName();
			$result[$key]['dob'] = $person->getDob();
			$result[$key]['email'] = $person->getEmail();
		}

		return $result;
	}

	/**
	 * Create a new Person and save to the database.
	 *
	 * @param \Klein\Request $request
	 * @return int
	 */
	public function post($request) {
		$person = new Person();

		$person->setName($request->param('name'));
		$person->setDob($request->param('dob'));
		$person->setEmail($request->param('email'));

		$this->em->persist($person);
		$this->em->flush();

		// If new Person was successfully saved to the database, the id will be returned which evaluates to true
		return $person->getId();
	}
}