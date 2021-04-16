<?php

class FixtureTest extends \PHPUnit\Framework\TestCase {

	private static $db;
	public static function setUpBeforeClass(): void {
		// runs once before first test
		self::$db = new PDO('sqlite::memory:');
	}

	private $stack;

	protected function setUp(): void {
		// runs before each test
		$this->stack = [];
	}
	protected function tearDown(): void {
		// is called after each test
	}

	public function testEmpty(): void {
		$this->assertTrue(empty($this->stack));
	}

	public function testPush(): void {
		array_push($this->stack, 'foo');

		$this->assertSame('foo', $this->stack[count($this->stack) - 1]);
		$this->assertFalse(empty($this->stack));
	}

	public function testPop(): void {
		array_push($this->stack, 'foo');

		$this->assertSame('foo', array_pop($this->stack));
		$this->assertTrue(empty($this->stack));
	}

	public static function tearDownAfterClass(): void {
		// runs after last test
		self::$db = new PDO('sqlite::memory:');
	}
}