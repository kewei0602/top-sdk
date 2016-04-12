<?php

/**
 * 单个权益发放请求
 * @author auto create
 */
class BenefitSingleSendRequest
{
	
	/** 
	 * 权益类型
	 **/
	public $benefit_type;
	
	/** 
	 * 活动详情id
	 **/
	public $detail_id;
	
	/** 
	 * 调用信息
	 **/
	public $invoke_info;
	
	/** 
	 * 发放者id
	 **/
	public $purchaser_id;
	
	/** 
	 * 接收者id
	 **/
	public $receiver_id;
	
	/** 
	 * 活动id
	 **/
	public $relation_id;
	
	/** 
	 * 权益发放数量
	 **/
	public $send_count;
	
	/** 
	 * 唯一键
	 **/
	public $unique_id;	
}
?>