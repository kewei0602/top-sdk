<?php
/**
 * TOP API: taobao.promotion.benefit.activity.update request
 * 
 * @author auto create
 * @since 1.0, 2015.12.08
 */
class PromotionBenefitActivityUpdateRequest
{
	/** 
	 * 修改关联的权益的活动请求
	 **/
	private $updateRequest;
	
	private $apiParas = array();
	
	public function setUpdateRequest($updateRequest)
	{
		$this->updateRequest = $updateRequest;
		$this->apiParas["update_request"] = $updateRequest;
	}

	public function getUpdateRequest()
	{
		return $this->updateRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.promotion.benefit.activity.update";
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
