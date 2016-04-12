<?php

/**
 * 查询结果
 * @author auto create
 */
class CouponSearchResult
{
	
	/** 
	 * 优惠券详情列表
	 **/
	public $seller_coupon_details;
	
	/** 
	 * 符合条件总数量，用于分页等判断
	 **/
	public $total_count;
	
	/** 
	 * 排查调用id
	 **/
	public $trace_id;	
}
?>