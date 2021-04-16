<?php

namespace app\models;

use PhpParser\Node\Expr\Cast\Object_;

class User {

	private String $firstName;
	private String $lastName;

	public function __construct(String $firstName, String $lastName) {

		$this->firstName = trim($firstName);
		$this->lastName = trim($lastName);
	}

	public function setFirstName(String $firstName) {
		$this->firstName = $firstName;
	}

	public function getFirstName() {
		return $this->firstName;
	}

	public function getLastName() {
		return $this->lastName;
	}

	public function getFullName() {
		return "$this->firstName $this->lastName";
	}

	public function getDetails(): array{
		return [
			'firstName' => $this->getFirstName(),
			'lastName' => $this->getLastName(),
			'fullName' => "$this->firstName $this->lastName",
		];
	}
}