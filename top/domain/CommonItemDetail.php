<?php

/**
 * 通用单品优惠详情
 * @author auto create
 */
class CommonItemDetail
{
	
	/** 
	 * 优惠活动ID
	 **/
	public $activity_id;
	
	/** 
	 * 优惠详情ID
	 **/
	public $detail_id;
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * 优惠类型，只有两种可选值：0-减钱；1-打折
	 **/
	public $promotion_type;
	
	/** 
	 * 优惠力度，其值的解释方式由promotion_type定义：当为减钱时解释成减钱数量，如：900表示减9元；当为打折时解释成打折折扣，如：900表示打9折
	 **/
	public $promotion_value;
	
	/** 
	 * 提供者标识
	 **/
	public $provider_key;
	
	/** 
	 * 卖家ID
	 **/
	public $seller_id;	
}
?>