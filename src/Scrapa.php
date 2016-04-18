<?php

namespace Florence;

use Exception;
use ReflectionMethod;
use Florence\XPathObject;

abstract class Scrapa 
{
	public $url;
	private $pathObject;

	public function __construct($url, $query)
	{
		$this->url = $url;
		$this->query = $query;
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
		$arr = $this->resetArr($this->packtPageXpath()->query($this->query));
		$strings = implode(",", $arr);

		return $strings;
	}

	public function toArrayScrapDOM() 
	{
		$arr = $this->resetArr($this->packtPageXpath()->query($this->query));
		
		return $arr;
	}

	public function resetArr($pck) 
	{
		$arr = [];

		for ($i = 0; $i < $pck->length; $i++) {
			array_push($arr, $pck->item($i)->nodeValue);
		}

		return $arr;
	}
}
