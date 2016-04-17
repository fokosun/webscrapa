<?php
 
use Florence\Scrap;
 
class ScrapaTest extends PHPUnit_Framework_TestCase {

	public function setUp()
	{
		$this->url = 'https://www.youtube.com/user/RihannaVEVO/about';
        $this->query = '//ul[@class="about-custom-links"]//a[@class="about-channel-link "]/@href';
		$this->scrap = new Scrap($this->url, $this->query);
	}

	public function testXPathOBjectHasAttributeUrl()
    {
        $this->assertObjectHasAttribute('url', $this->scrap);
    }

	public function testTargetUrlIsSame()
	{
		$this->assertEquals($this->url, $this->scrap->url);
	}

	public function testToStringScrapDOM()
    {
        $this->assertInternalType('string', $this->scrap->toStringScrapDOM());
    }

    public function testToArrayScrapDOM()
    {
        $this->assertInternalType('array', $this->scrap->toArrayScrapDOM());
    }
}
