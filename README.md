#WebScrapa

###DISCLAIMER
This package was put together for learning purposes only.

[![Build Status](https://travis-ci.org/andela-fokosun/webscrapa.svg?branch=master)](https://travis-ci.org/andela-fokosun/webscrapa) [![Coverage Status](https://coveralls.io/repos/github/andela-fokosun/webscrapa/badge.svg?branch=master)](https://coveralls.io/github/andela-fokosun/webscrapa?branch=master)

A minimalist approach to building a PHP web scraper


##Installation
    
    composer require "florence/scrapa: 0.0.1"


##Usage

- Create an instance of the scrapa class:

    
        $scrap = new Scrapa($url);


$url is a string e.g. 'https://www.youtubecom/JustinBieber/about'


- The new instance is available to crawl:

    
        $scrap->scrapDOM('//ul[@class="about-custom-links"]//a[@class="about-channel-link "]/@href');


Learn about XPath and about how to find DOM elements using XPath here 'https://goo.gl/m8SDlA'


- Use the toArrayScrapDOM method to get the results of your query in array format


        print_r($scrap->toArrayScrapDOM('//ul[@class="about-custom-links"]//a[@class="about-channel-link "]/@href'));


- Use the toStringScrapDOM method to get the results of your query in array format


        print_r($scrap->toStringScrapDOM('//ul[@class="about-custom-links"]//a[@class="about-channel-link "]/@href'));


## Run the example file

From your terminal, run:
    
    php example.php


##Run tests

    vendor/bin/phpunit


