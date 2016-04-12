<?php

/**
 * 查询活动关联权益详情的请求
 * @author auto create
 */
class ActivityRelationDetailRequest
{
	
	/** 
	 * ISV调用信息
	 **/
	public $invoke_info;
	
	/** 
	 * 活动创建者ID（当前卖家ID）
	 **/
	public $purchaser_id;
	
	/** 
	 * ISV活动关联权益后获得的关联ID
	 **/
	public $relation_id;
	
	/** 
	 * 活动状态(VALID  ， DELETE)
	 **/
	public $status;	
}
?>