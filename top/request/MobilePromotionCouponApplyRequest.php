<?php
/**
 * TOP API: taobao.mobile.promotion.coupon.apply request
 * 
 * @author auto create
 * @since 1.0, 2015.11.25
 */
class MobilePromotionCouponApplyRequest
{
	/** 
	 * 三方活动id
	 **/
	private $bizId;
	
	/** 
	 * 广播id
	 **/
	private $feedId;
	
	/** 
	 * 传播id
	 **/
	private $spreadId;
	
	/** 
	 * 请求唯一id，问题排查
	 **/
	private $traceId;
	
	private $apiParas = array();
	
	public function setBizId($bizId)
	{
		$this->bizId = $bizId;
		$this->apiParas["biz_id"] = $bizId;
	}

	public function getBizId()
	{
		return $this->bizId;
	}

	public function setFeedId($feedId)
	{
		$this->feedId = $feedId;
		$this->apiParas["feed_id"] = $feedId;
	}

	public function getFeedId()
	{
		return $this->feedId;
	}

	public function setSpreadId($spreadId)
	{
		$this->spreadId = $spreadId;
		$this->apiParas["spread_id"] = $spreadId;
	}

	public function getSpreadId()
	{
		return $this->spreadId;
	}

	public function setTraceId($traceId)
	{
		$this->traceId = $traceId;
		$this->apiParas["trace_id"] = $traceId;
	}

	public function getTraceId()
	{
		return $this->traceId;
	}

	public function getApiMethodName()
	{
		return "taobao.mobile.promotion.coupon.apply";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizId,"bizId");
		RequestCheckUtil::checkNotNull($this->feedId,"feedId");
		RequestCheckUtil::checkNotNull($this->spreadId,"spreadId");
		RequestCheckUtil::checkNotNull($this->traceId,"traceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
