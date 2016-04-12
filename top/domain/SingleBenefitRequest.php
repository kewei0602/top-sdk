<?php

/**
 * 单用户权益发放请求
 * @author auto create
 */
class SingleBenefitRequest
{
	
	/** 
	 * 权益类型    其中ALIPAY_COUPON 对应的type值是1
	 **/
	public $benefit_type;
	
	/** 
	 * 权益关联的活动ID
	 **/
	public $biz_id;
	
	/** 
	 * 支持每日赢宝箱多个卡片类型，默认“游戏惊喜”卡片，可选“美妆”卡片beauty
	 **/
	public $card_type;
	
	/** 
	 * 活动详情id
	 **/
	public $detail_id;
	
	/** 
	 * 调用信息
	 **/
	public $provider_key;
	
	/** 
	 * 卖家用户id,　可通过接口taobao.user.seller.get获取
	 **/
	public $purchaser_id;
	
	/** 
	 * 权益接收者id
	 **/
	public $receiver_id;
	
	/** 
	 * 关联活动id
	 **/
	public $relation_id;
	
	/** 
	 * 权益发放数量
	 **/
	public $send_count;
	
	/** 
	 * 调试线索
	 **/
	public $trace_id;
	
	/** 
	 * 事务id
	 **/
	public $unique_id;	
}
?>