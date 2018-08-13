#WebScrapa

###DISCLAIMER
This package was put together for learning purposes only.

[![Build Status](https://travis-ci.org/fokosun/webscrapa.svg?branch=master)](https://travis-ci.org/fokosun/webscrapa)

[![Coverage Status](https://coveralls.io/repos/github/andela-fokosun/webscrapa/badge.svg?branch=master)](https://coveralls.io/github/andela-fokosun/webscrapa?branch=master)

A simple PHP web scraper package -

Most websites do not offer the functionality to save a copy of the data which they display to your computer. The only option then is to manually copy and paste the data displayed by the website in your browser to a local file in your computer - a very tedious job which can take many hours or sometimes days to complete. Web Scraping is the technique of automating this process.

WebScrapa is a simple web scraper package written with PHP. It uses cURL to request and download a webpage. The downloaded webpage is converted to XML DOM object and XPath is used to navigate through elements in the XML DOM object.

##Installation
    
    composer require "florence/scrapa: v1.0"


##Usage

- Create an instance of the Scrap class:

    	$url = 'https://www.youtubecom/JustinBieber/about';
    	$query = '//ul[@class="about-custom-links"]//a[@class="about-channel-link "]/@href';

        $scrap = new Scrap($url, $query);

Learn about XPath and how to scrape the elements based on their tags and attributes, such as CSS classes and IDs.
https://goo.gl/Gjd3R3

- Use the toArrayScrapDOM method to get the results of your query in array format


        print_r($scrap->toArrayScrapDOM());


- Use the toStringScrapDOM method to get the results of your query in string format


        print_r($scrap->toStringScrapDOM())


## Run the example file

clone the repo 

	git clone https://github.com/andela-fokosun/webscrapa

run

	composer install


from your terminal, run:

		
	php example.php


run tests

	vendor/bin/phpunit


