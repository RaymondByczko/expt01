<?php
	class MyClassTest extends PHPUnit_Framework_TestCase
	{
		public function testIt()
		{
			$this->assertEquals('0','0');
		}
		public function testThat()
		{
			$zero = '0';
			$this->assertEquals(0,$zero);
		}
	}
?>
