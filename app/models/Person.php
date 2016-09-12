<?php
namespace smbkr\PeopleThing\models;

/**
 * Class Person
 * @package smbkr\PeopleThing
 * @author Stuart Baker <stuart@smbkr.xyz>
 *
 * @Entity @Table(name="people")
 */
class Person {

	/**
	 * @Id @Column(type="integer") @GeneratedValue
	 *
	 * @var int
	 */
	protected $id;
	/**
	 * @Column(type="string")
	 *
	 * @var string
	 */
	protected $name;
	/**
	 * @Column(type="string")
	 *
	 * @var string
	 */
	protected $dob;
	/**
	 * @Column(type="string", length=8)
	 *
	 * @var string
	 */
	protected $email;

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name) {
		$this-> name = $name;
	}

	/**
	 * @return string
	 */
	public function getDob() {
		return $this->dob;
	}

	/**
	 * @param string $dob
	 */
	public function setDob($dob) {
		//TODO: Should format the date as yyyymmdd
		$this->dob = $dob;
	}

	/**
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 */
	public function setEmail($email)
	{
		$this->email = $email;
	}
}