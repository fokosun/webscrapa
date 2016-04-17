<?php

namespace Florence;

use Exception;
use ReflectionMethod;
use Florence\XPathObject;

abstract class Scrapa 
{
	private $pathObject;
	private $arr;
	public $url;
	private $urlStrings;
	private $strings;
	private $providers;
	private $channelName;

	public function __construct($url, $query)
	{
		$this->arr = [];
		$this->url = $url;
		$this->query = $query;
		$this->scrapDOMStrings = '';
		$this->strings = '';
		$this->pathObject = new XPathObject($url);
	}

	public function __get($key)
    {
        return $this->properties[$key];
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
	public function scrapDOM() 
	{
		$pck = $this->packtPageXpath()->query($this->query);

		return $this;
	}

	/**
	* parse to string
	* @return string
	*/
	public function toStringScrapDOM() 
	{
		$pck = $this->packtPageXpath()->query($this->query);
		for ($i = 0; $i < $pck->length; $i++) {
			array_push($this->arr, $pck->item($i)->nodeValue);
		}
		
		$this->strings = implode(",", $this->arr);

		return $this->strings;
	}

	public function toArrayScrapDOM() 
	{
		// empty the array
		$this->arr = [];
		$pck = $this->packtPageXpath()->query($this->query);
		for ($i = 0; $i < $pck->length; $i++) {
			array_push($this->arr, $pck->item($i)->nodeValue);
		}

		return $this->arr;
	}
}
