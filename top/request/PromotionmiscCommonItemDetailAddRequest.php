<?php
/**
 * TOP API: taobao.promotionmisc.common.item.detail.add request
 * 
 * @author auto create
 * @since 1.0, 2015.10.29
 */
class PromotionmiscCommonItemDetailAddRequest
{
	/** 
	 * 优惠活动ID
	 **/
	private $activityId;
	
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 优惠类型，只有两种可选值：0-减钱；1-打折
	 **/
	private $promotionType;
	
	/** 
	 * 优惠力度，其值的解释方式由promotion_type定义：当为减钱时解释成减钱数量，如：900表示减9元；当为打折时解释成打折折扣，如：900表示打9折
	 **/
	private $promotionValue;
	
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

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setPromotionType($promotionType)
	{
		$this->promotionType = $promotionType;
		$this->apiParas["promotion_type"] = $promotionType;
	}

	public function getPromotionType()
	{
		return $this->promotionType;
	}

	public function setPromotionValue($promotionValue)
	{
		$this->promotionValue = $promotionValue;
		$this->apiParas["promotion_value"] = $promotionValue;
	}

	public function getPromotionValue()
	{
		return $this->promotionValue;
	}

	public function getApiMethodName()
	{
		return "taobao.promotionmisc.common.item.detail.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityId,"activityId");
		RequestCheckUtil::checkMinValue($this->activityId,1,"activityId");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkMinValue($this->itemId,1,"itemId");
		RequestCheckUtil::checkNotNull($this->promotionType,"promotionType");
		RequestCheckUtil::checkMaxValue($this->promotionType,1,"promotionType");
		RequestCheckUtil::checkMinValue($this->promotionType,0,"promotionType");
		RequestCheckUtil::checkNotNull($this->promotionValue,"promotionValue");
		RequestCheckUtil::checkMinValue($this->promotionValue,1,"promotionValue");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
