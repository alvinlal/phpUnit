<?php declare (strict_types = 1);

use PHPUnit\Framework\TestCase;

final class DataProviderTest extends TestCase {

	/** @dataProvider nameProvider  */
	public function testFullName(string $firstname, string $lastname, string $expected): void {
		$firstname = trim($firstname);
		$lastname = trim($lastname);
		$fullname = $firstname . ' ' . $lastname;
		$this->assertSame($expected, $fullname);
	}

	public function nameProvider(): array{
		return [
			'names with spaces' => ['  alvin ', 'lal   ', 'alvin lal'],
			'names with no spaces' => ['alvin', 'lal', 'alvin lal'],
		];
	}
}