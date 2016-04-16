<?php
 
use Florence\Scrapa;
 
class ScrapaTest extends PHPUnit_Framework_TestCase {

	public function setUp()
	{
		$this->url = 'https://www.youtube.com/user/RihannaVEVO/about';
		$this->scrap = new Scrapa($this->url);
	}

	public function testTargetUrlIsSame()
	{
		$this->assertEquals($this->url, $this->scrap->url);
	}

	public function testToStringScrapDOM()
    {
    	$query = '//ul[@class="about-custom-links"]//a[@class="about-channel-link "]/@href';

        $this->assertInternalType('string', $this->scrap->toStringScrapDOM($query));
    }

    public function testToArrayScrapDOM()
    {
    	$query = '//ul[@class="about-custom-links"]//a[@class="about-channel-link "]/@href';

        $this->assertInternalType('array', $this->scrap->toArrayScrapDOM($query));
    }
}
