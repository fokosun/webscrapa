<?php
 
use Florence\Scrapa;
 
class ScrapaTest extends PHPUnit_Framework_TestCase {

	public function testNachHasCheese()
	{
		$url = 'https://www.youtube.com/user/RihannaVEVO/about';

		$webpage = new Scrapa($url);

		$this->assertEquals($url, $webpage->url);
	}
}
