<?php

require "vendor/autoload.php";

use Florence\Scrap;


// run the scrapper and fetch results


$url = 'https://www.youtube.com/user/RihannaVEVO/about';
$query = '//ul[@class="about-custom-links"]//a[@class="about-channel-link "]/@href';

$webpage = new Scrap($url, $query);
print_r($webpage->scrapDOM()->toStringScrapDOM());
print_r($webpage->scrapDOM()->toArrayScrapDOM());
