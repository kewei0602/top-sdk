<?php

/**
 * 同步权益活动的概述信息，用于卖家后台查看
 * @author auto create
 */
class BenefitActivityVo
{
	
	/** 
	 * ISV活动的具体地址
	 **/
	public $activity_url;
	
	/** 
	 * 活动描述
	 **/
	public $desc;
	
	/** 
	 * 活动结束时间
	 **/
	public $end_time;
	
	/** 
	 * 活动名称
	 **/
	public $name;
	
	/** 
	 * 活动创建者ID（当前卖家ID）
	 **/
	public $purchaser_id;
	
	/** 
	 * 活动的开始时间
	 **/
	public $start_time;
	
	/** 
	 * 活动类型
	 **/
	public $type;	
}
?>