<?php
/**
 * TOP API: taobao.promotion.benefit.activity.detail.get request
 * 
 * @author auto create
 * @since 1.0, 2015.07.02
 */
class PromotionBenefitActivityDetailGetRequest
{
	/** 
	 * 查询活动关联权益详情的请求
	 **/
	private $queryRequest;
	
	private $apiParas = array();
	
	public function setQueryRequest($queryRequest)
	{
		$this->queryRequest = $queryRequest;
		$this->apiParas["query_request"] = $queryRequest;
	}

	public function getQueryRequest()
	{
		return $this->queryRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.promotion.benefit.activity.detail.get";
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
