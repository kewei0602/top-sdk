<?php
/**
 * TOP API: taobao.promotion.benefit.selector request
 * 
 * @author auto create
 * @since 1.0, 2016.03.15
 */
class PromotionBenefitSelectorRequest
{
	/** 
	 * 权益选择器请求
	 **/
	private $query;
	
	private $apiParas = array();
	
	public function setQuery($query)
	{
		$this->query = $query;
		$this->apiParas["query"] = $query;
	}

	public function getQuery()
	{
		return $this->query;
	}

	public function getApiMethodName()
	{
		return "taobao.promotion.benefit.selector";
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
