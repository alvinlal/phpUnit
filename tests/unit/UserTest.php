<?php

use app\models\User;

class UserTest extends \PHPUnit\Framework\TestCase {

	private User $user;

	public function setUp(): void {
		$this->user = new User("alvin", "lal");
	}

	public function testThatWeCanGetTheFirstName() {
		$this->assertEquals($this->user->getFirstName(), "alvin", "getFirstName returns wrong name");
	}

	public function testFullName() {
		$this->assertEquals($this->user->getFullName(), "alvin lal", "getFullName returns wrong full name");
	}

	public function testFirstAndLastNameAreTrimmed() {
		$this->user = new User("  alvin ", "  lal  ");

		$this->assertEquals($this->user->getFirstName(), "alvin");
		$this->assertEquals($this->user->getLastName(), "lal");

	}

	public function testUserDetails() {
		$user = new User("alvin", "lal");

		$expected = [
			"firstName" => "alvin",
			"lastName" => "lal",
			"fullName" => "alvin lal",
		];

		$this->assertEquals($user->getDetails(), $expected);
	}
}