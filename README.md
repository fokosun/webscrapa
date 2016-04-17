#WebScrapa

###DISCLAIMER
This package was put together for learning purposes only.

[![Build Status](https://travis-ci.org/andela-fokosun/webscrapa.svg?branch=master)](https://travis-ci.org/andela-fokosun/webscrapa) [![Coverage Status](https://coveralls.io/repos/github/andela-fokosun/webscrapa/badge.svg?branch=master)](https://coveralls.io/github/andela-fokosun/webscrapa?branch=master)

A simple PHP web scraper package


##Installation
    
    composer require "florence/scrapa: 0.0.1"


##Usage

- Create an instance of the scrapa class:

    
        $scrap = new Scrap($url, $query);


$url is a string e.g. 'https://www.youtubecom/JustinBieber/about'


$query is also a string e.g. '//ul[@class="about-custom-links"]//a[@class="about-channel-link "]/@href'


Learn about XPath and about how to find DOM elements using XPath here 'https://goo.gl/m8SDlA'


- Use the toArrayScrapDOM method to get the results of your query in array format


        print_r($scrap->scrapDOM()->toArrayScrapDOM());


- Use the toStringScrapDOM method to get the results of your query in array format


        print_r($scrap->scrapDOM()->toStringScrapDOM())


## Run the example file

From your terminal, run:
    
    php example.php


##Run tests

    vendor/bin/phpunit


