<?php

/**
 * 通用单品优惠活动
 * @author auto create
 */
class CommonItemActivity
{
	
	/** 
	 * 优惠活动ID
	 **/
	public $activity_id;
	
	/** 
	 * 活动描述，不能超过100字符
	 **/
	public $description;
	
	/** 
	 * 活动结束时间
	 **/
	public $end_time;
	
	/** 
	 * 活动名称，不能超过32字符
	 **/
	public $name;
	
	/** 
	 * 提供者标识
	 **/
	public $provider_key;
	
	/** 
	 * 卖家ID
	 **/
	public $seller_id;
	
	/** 
	 * 活动开始时间
	 **/
	public $start_time;	
}
?>