#VebScrapa

[![Build Status](https://travis-ci.org/andela-fokosun/webscrapa.svg?branch=master)](https://travis-ci.org/andela-fokosun/webscrapa)

A minimalist approach to building a PHP web scraper


##Dependencies


    - phpunit/phpunit: ^4.8


##Installation
    
    composer require florence/scrapa


##Usage

- Create an instance of the scrapa class:

    
        $scrap = new Scrapa($url);


$url is a string e.g. 'https://www.youtubecom/JustinBieber/about'


- The new instance is available to crawl:

    
        $scrap->scrapDOM('//ul[@class="about-custom-links"]//a[@class="about-channel-link "]/@href');


Learn about XPath and about how to find DOM elements using XPath here


- Use the toArrayScrapDOM method to get the results of your query in array format


        print_r($scrap->toArrayScrapDOM('//ul[@class="about-custom-links"]//a[@class="about-channel-link "]/@href'));


- Use the toStringScrapDOM method to get the results of your query in array format


        print_r($scrap->toStringScrapDOM('//ul[@class="about-custom-links"]//a[@class="about-channel-link "]/@href'));


## Run the example file

From your terminal, run:
    
    php example.php


##Run tests

    vendor/bin/phpunit

