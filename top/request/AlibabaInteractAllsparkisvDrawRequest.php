<?php
/**
 * TOP API: alibaba.interact.allsparkisv.draw request
 * 
 * @author auto create
 * @since 1.0, 2015.12.31
 */
class AlibabaInteractAllsparkisvDrawRequest
{
	/** 
	 * dd
	 **/
	private $ddd;
	
	/** 
	 * ddd
	 **/
	private $test;
	
	private $apiParas = array();
	
	public function setDdd($ddd)
	{
		$this->ddd = $ddd;
		$this->apiParas["ddd"] = $ddd;
	}

	public function getDdd()
	{
		return $this->ddd;
	}

	public function setTest($test)
	{
		$this->test = $test;
		$this->apiParas["test"] = $test;
	}

	public function getTest()
	{
		return $this->test;
	}

	public function getApiMethodName()
	{
		return "alibaba.interact.allsparkisv.draw";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
