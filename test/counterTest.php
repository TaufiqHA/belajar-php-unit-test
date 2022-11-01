<?php 

namespace taufiq\test;

use PHPUnit\Framework\TestCase;

class counterTest extends TestCase
{
	public function testCounter()
	{
		$counter = new counter();
		$counter->increment();
		$counter->increment();
		echo $counter->getCounter();
	}

	public function testOther()
	{
		echo "Other";
	}
}