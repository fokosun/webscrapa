<?php

namespace Florence;

use Exception;
use Florence\XPathObject;

class Scrapa 
{
	private $pathObject;
	private $arr;
	public $url;
	private $urlStrings;
	private $providers;
	private $channelName;

	public function __construct($url)
	{
		$this->arr = [];
		$this->url = $url;
		$this->scrapDOMStrings = '';
		$this->pathObject = new XPathObject($url);
	}

	public function packtPage() 
	{
		return $this->pathObject->curlGet($this->url);
	}

	public function packtPageXpath() 
	{
		return $this->pathObject->returnXPathObject($this->packtPage());
	}

	/**
	* scrap the page with $query
	* @param $query
	* @return object
	*/
	public function scrapDOM($query) 
	{
		return $this->packtPageXpath()->query($query);
	}

	/**
	* parse to string
	* @return string
	*/
	public function toStringScrapDOM($query) 
	{
		for ($i = 0; $i < $this->scrapDOM($query)->length; $i++) {
			array_push($this->arr, $this->scrapDOM($query)->item($i)->nodeValue);
		}
		
		$this->scrapDOM = implode(",", $this->arr);

		return $this->scrapDOM;
	}

	public function toArrayScrapDOM($query) 
	{
		// empty the array
		$this->arr = [];
		for ($i = 0; $i < $this->scrapDOM($query)->length; $i++) {
			array_push($this->arr, $this->scrapDOM($query)->item($i)->nodeValue);
		}

		return $this->arr;
	}
}
