<?php

/**
 * 旺彩赠送DO
 * @author auto create
 */
class LotteryWangcaiPresent
{
	
	/** 
	 * isv应用的名称
	 **/
	public $app_name;
	
	/** 
	 * 彩种名称
	 **/
	public $lottery_name;
	
	/** 
	 * 赠送时间
	 **/
	public $present_date;
	
	/** 
	 * 主键id
	 **/
	public $present_id;
	
	/** 
	 * 彩票注数
	 **/
	public $stake_count;
	
	/** 
	 * 订单状态
	 **/
	public $status;
	
	/** 
	 * 订单状态描述
	 **/
	public $status_desc;
	
	/** 
	 * 赠言
	 **/
	public $sweety_words;
	
	/** 
	 * 用户昵称
	 **/
	public $user_nick;
	
	/** 
	 * 用户数字id
	 **/
	public $user_num_id;
	
	/** 
	 * 中奖金额，以分为单位
	 **/
	public $win_fee;	
}
?>