<?php

/**
 * 同步权益活动的概述信息，方便卖家后台查看
 * @author auto create
 */
class UpdateBenefitActivityVo
{
	
	/** 
	 * ISV活动的活动地址
	 **/
	public $activity_url;
	
	/** 
	 * 活动描述
	 **/
	public $desc;
	
	/** 
	 * 活动名称
	 **/
	public $name;
	
	/** 
	 * 活动创建者ID（当前卖家ID）
	 **/
	public $purchaser_id;
	
	/** 
	 * ISV活动关联权益后获得的关联ID
	 **/
	public $relation_id;	
}
?>