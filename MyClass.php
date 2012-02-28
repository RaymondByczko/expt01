<?php
	class MyClass
	{
		public function __construct()
		{
		}
	}
	class MyClassTest extends PHPUnit_Framework_TestCase
	{
		public function testIt()
		{
			$this->assertEquals(0,1);
		}
		public function testThat()
		{
			$this->assertEquals(1,1);
		}
	}
?>
