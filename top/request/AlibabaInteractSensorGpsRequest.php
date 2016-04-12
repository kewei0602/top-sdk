<?php
/**
 * TOP API: alibaba.interact.sensor.gps request
 * 
 * @author auto create
 * @since 1.0, 2014.10.11
 */
class AlibabaInteractSensorGpsRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.sensor.gps";
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
