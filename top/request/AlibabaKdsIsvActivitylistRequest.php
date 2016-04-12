<?php
/**
 * TOP API: alibaba.kds.isv.activitylist request
 * 
 * @author auto create
 * @since 1.0, 2016.01.04
 */
class AlibabaKdsIsvActivitylistRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.kds.isv.activitylist";
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
