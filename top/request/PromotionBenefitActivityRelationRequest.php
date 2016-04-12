<?php
/**
 * TOP API: taobao.promotion.benefit.activity.relation request
 * 
 * @author auto create
 * @since 1.0, 2015.07.02
 */
class PromotionBenefitActivityRelationRequest
{
	/** 
	 * 活动关联权益请求参数
	 **/
	private $relationRequest;
	
	private $apiParas = array();
	
	public function setRelationRequest($relationRequest)
	{
		$this->relationRequest = $relationRequest;
		$this->apiParas["relation_request"] = $relationRequest;
	}

	public function getRelationRequest()
	{
		return $this->relationRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.promotion.benefit.activity.relation";
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
