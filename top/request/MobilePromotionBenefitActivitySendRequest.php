<?php
/**
 * TOP API: taobao.mobile.promotion.benefit.activity.send request
 * 
 * @author auto create
 * @since 1.0, 2015.08.25
 */
class MobilePromotionBenefitActivitySendRequest
{
	/** 
	 * 单用户权益发放请求
	 **/
	private $singleBenefitRequest;
	
	private $apiParas = array();
	
	public function setSingleBenefitRequest($singleBenefitRequest)
	{
		$this->singleBenefitRequest = $singleBenefitRequest;
		$this->apiParas["single_benefit_request"] = $singleBenefitRequest;
	}

	public function getSingleBenefitRequest()
	{
		return $this->singleBenefitRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.mobile.promotion.benefit.activity.send";
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
