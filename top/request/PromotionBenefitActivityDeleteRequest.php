<?php
/**
 * TOP API: taobao.promotion.benefit.activity.delete request
 * 
 * @author auto create
 * @since 1.0, 2015.07.02
 */
class PromotionBenefitActivityDeleteRequest
{
	/** 
	 * ISV活动关联权益后获得的关联ID
	 **/
	private $relationId;
	
	private $apiParas = array();
	
	public function setRelationId($relationId)
	{
		$this->relationId = $relationId;
		$this->apiParas["relation_id"] = $relationId;
	}

	public function getRelationId()
	{
		return $this->relationId;
	}

	public function getApiMethodName()
	{
		return "taobao.promotion.benefit.activity.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->relationId,"relationId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
