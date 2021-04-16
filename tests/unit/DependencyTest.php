<?php declare (strict_types = 1);

use PHPUnit\Framework\TestCase;

final class DependencyTest extends TestCase {

	public function testEmpty(): array{
		$stack = [];
		$this->assertEmpty($stack);
		return $stack;
	}

	/** @depends testEmpty */
	public function testPush(array $stack): void {
		array_push($stack, 'foo');
		$this->assertSame('foo', $stack[count($stack) - 1]);
		$this->assertNotEmpty($stack);
	}

}