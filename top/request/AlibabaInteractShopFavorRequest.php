<?php
/**
 * TOP API: alibaba.interact.shop.favor request
 * 
 * @author auto create
 * @since 1.0, 2015.06.24
 */
class AlibabaInteractShopFavorRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.shop.favor";
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
