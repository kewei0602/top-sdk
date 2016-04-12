<?php

/**
 * 无条件单品优惠数据对象
 * @author auto create
 */
class ItemPromotion
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
	 * 是否有减钱行为。
	 **/
	public $is_decrease_money;
	
	/** 
	 * 是否有打折行为。
	 **/
	public $is_discount;
	
	/** 
	 * 是否指定用户标签。
	 **/
	public $is_user_tag;
	
	/** 
	 * 活动名称。
	 **/
	public $name;
	
	/** 
	 * 活动范围：0表示全部参与； 1表示部分商品参与。
	 **/
	public $participate_range;
	
	/** 
	 * 活动开始时间。
	 **/
	public $start_time;
	
	/** 
	 * 用户标签。当is_user_tag为true时，该值才有意义。
	 **/
	public $user_tag;	
}
?>