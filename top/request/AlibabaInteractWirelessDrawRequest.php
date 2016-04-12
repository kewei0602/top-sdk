<?php
/**
 * TOP API: alibaba.interact.wireless.draw request
 * 
 * @author auto create
 * @since 1.0, 2015.09.24
 */
class AlibabaInteractWirelessDrawRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.wireless.draw";
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
