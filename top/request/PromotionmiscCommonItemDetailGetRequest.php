<?php
/**
 * TOP API: taobao.promotionmisc.common.item.detail.get request
 * 
 * @author auto create
 * @since 1.0, 2015.10.29
 */
class PromotionmiscCommonItemDetailGetRequest
{
	/** 
	 * 优惠活动ID
	 **/
	private $activityId;
	
	/** 
	 * 优惠详情ID
	 **/
	private $detailId;
	
	private $apiParas = array();
	
	public function setActivityId($activityId)
	{
		$this->activityId = $activityId;
		$this->apiParas["activity_id"] = $activityId;
	}

	public function getActivityId()
	{
		return $this->activityId;
	}

	public function setDetailId($detailId)
	{
		$this->detailId = $detailId;
		$this->apiParas["detail_id"] = $detailId;
	}

	public function getDetailId()
	{
		return $this->detailId;
	}

	public function getApiMethodName()
	{
		return "taobao.promotionmisc.common.item.detail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityId,"activityId");
		RequestCheckUtil::checkMinValue($this->activityId,1,"activityId");
		RequestCheckUtil::checkNotNull($this->detailId,"detailId");
		RequestCheckUtil::checkMinValue($this->detailId,1,"detailId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
