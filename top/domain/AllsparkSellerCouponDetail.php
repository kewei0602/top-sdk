<?php

/**
 * 券详情
 * @author auto create
 */
class AllsparkSellerCouponDetail
{
	
	/** 
	 * 面额
	 **/
	public $amount;
	
	/** 
	 * 已领取数量
	 **/
	public $apply_count;
	
	/** 
	 * 券类型
	 **/
	public $coupon_type;
	
	/** 
	 * 券类型
	 **/
	public $coupon_type_name;
	
	/** 
	 * 券失效时间
	 **/
	public $end_time;
	
	/** 
	 * 商品优惠券会有商品id集合
	 **/
	public $item_ids;
	
	/** 
	 * 模板限领数量
	 **/
	public $person_limit_count;
	
	/** 
	 * 保留数量
	 **/
	public $reserve_count;
	
	/** 
	 * 卖家ID
	 **/
	public $seller_id;
	
	/** 
	 * 卖家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 店铺名称
	 **/
	public $shop_name;
	
	/** 
	 * 券对外ID
	 **/
	public $spread_id;
	
	/** 
	 * 满足金额阀值  如订单满多少元才可用
	 **/
	public $start_fee;
	
	/** 
	 * 券生效时间
	 **/
	public $start_time;
	
	/** 
	 * 状态信息
	 **/
	public $status;
	
	/** 
	 * 状态名称
	 **/
	public $status_name;
	
	/** 
	 * 券名称
	 **/
	public $title;
	
	/** 
	 * 设置发券数量总数
	 **/
	public $total_count;
	
	/** 
	 * mtop 店铺链接
	 **/
	public $url;	
}
?>