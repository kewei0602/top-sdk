<?php

/**
 * 满就送对象数据结构
 * @author auto create
 */
class MjsPromotion
{
	
	/** 
	 * 活动id
	 **/
	public $activity_id;
	
	/** 
	 * 减多少钱。当is_decrease_money为true时，该值才有意义。注意：该值单位为分，即100表示1元。
	 **/
	public $decrease_amount;
	
	/** 
	 * 活动的有效条件、人群和行为描述。
	 **/
	public $description;
	
	/** 
	 * 折扣值。当is_discount为true时，该值才有意义。注意：800表示8折。
	 **/
	public $discount_rate;
	
	/** 
	 * 活动结束时间。
	 **/
	public $end_time;
	
	/** 
	 * 免邮的排除地区，即，除指定地区外，其他地区包邮。当is_free_post为true时，该值才有意义。代码使用*链接，代码为行政区划代码。
	 **/
	public $exclude_area;
	
	/** 
	 * 礼品id，当is_send_gift为true时，该值才有意义。
1）只有填写真实的淘宝商品id时，才能生成物流单，并且在确定订单的页面上可以点击该商品名称跳转到商品详情页面。2）当礼物为实物商品时(有宝贝id),礼物必须为上架商品,不能为虚拟商品,不能为拍卖商品,不能有sku,不符合条件的,不做为礼物。
	 **/
	public $gift_id;
	
	/** 
	 * 礼品名称。当is_send_gift为true时，该值才有意义。
	 **/
	public $gift_name;
	
	/** 
	 * 商品详情的url，当is_send_gift为true时，该值才有效。
	 **/
	public $gift_url;
	
	/** 
	 * 满元是否上不封顶。当is_amount_over为true时，该值才有意义。当该值为true时，表示满元上不封顶，例如满100元减10元，当满200时，则减20元。。。
	 **/
	public $is_amount_multiple;
	
	/** 
	 * 是否有满元条件。
	 **/
	public $is_amount_over;
	
	/** 
	 * 是否有减钱行为。
	 **/
	public $is_decrease_money;
	
	/** 
	 * 是否有打折行为。
	 **/
	public $is_discount;
	
	/** 
	 * 是否有免邮行为。
	 **/
	public $is_free_post;
	
	/** 
	 * 是否有满件条件。
	 **/
	public $is_item_count_over;
	
	/** 
	 * 满件是否上不封顶。当is_amount_multiple为true时，该值才有意义。当该值为true时，表示满件上不封顶，例如满10件减2元，当满20件时，则减4元。。。
	 **/
	public $is_item_multiple;
	
	/** 
	 * 是否有送礼品行为。
	 **/
	public $is_send_gift;
	
	/** 
	 * 是否有店铺会员等级条件。
	 **/
	public $is_shop_member;
	
	/** 
	 * 是否指定用户标签。
	 **/
	public $is_user_tag;
	
	/** 
	 * 满多少件。当is_item_count_over为true时，该值才有意义。
	 **/
	public $item_count;
	
	/** 
	 * 活动名称。
	 **/
	public $name;
	
	/** 
	 * 活动范围：0表示全部参与； 1表示部分商品参与。
	 **/
	public $participate_range;
	
	/** 
	 * 店铺会员等级，当is_shop_member为true时，该值才有意义。0：店铺客户；1：普通客户；2：高级会员；3：VIP会员； 4：至尊VIP会员。
	 **/
	public $shop_member_level;
	
	/** 
	 * 活动开始时间。
	 **/
	public $start_time;
	
	/** 
	 * 满多少元。当is_amount_over为true时，该才字段有意义。注意：单位是分，即10000表示100元。
	 **/
	public $total_price;
	
	/** 
	 * 活动类型： 1表示商品级别的活动；2表示店铺级别的活动。
	 **/
	public $type;
	
	/** 
	 * 用户标签。当is_user_tag为true时，该值才有意义。
	 **/
	public $user_tag;	
}
?>