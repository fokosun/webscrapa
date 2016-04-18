<?php

use \Mockery as m;
use Florence\Scrap;

class ScrapaTest extends PHPUnit_Framework_TestCase {

	public function setUp()
	{
		$this->url = 'https://www.youtube.com/user/RihannaVEVO/about';
		$this->query = '//ul[@class="about-custom-links"]//a[@class="about-channel-link"]/@href';
		$this->scrap = new Scrap($this->url, $this->query);
	}

	public function testXPathOBjectHasAttributeUrl()
	{
        $this->assertObjectHasAttribute('url', $this->scrap);
    }

    public function testInstanceOf()
    {
        $this->assertInstanceOf('Florence\Scrap', $this->scrap->scrapDOM());
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

    public function testResetArr()
    {
        $pck = m::mock('Scrap');
        $pck->shouldReceive('resetArr')->andReturn(['http://www.vevo.com/artist/rihanna']);
        
        $this->assertInternalType('array', $pck->resetArr());
        $this->assertContains('http://www.vevo.com/artist/rihanna', $pck->resetArr());
    }

    public function tearDown()
    {
        m::close();
    }

}
