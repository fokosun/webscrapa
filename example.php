<?php

require "vendor/autoload.php";

use Florence\Scrapa;


// run the scrapper and fetch results

$webpage = new Scrapa('https://www.youtube.com/user/RihannaVEVO/about');

$webpage->scrapDOM('//ul[@class="about-custom-links"]//a[@class="about-channel-link "]/@href');

// print_r($webpage->toStringScrapDOM('//ul[@class="about-custom-links"]//a[@class="about-channel-link "]/@href'));
print_r($webpage->toArrayScrapDOM('//ul[@class="about-custom-links"]//a[@class="about-channel-link "]/@href'));
