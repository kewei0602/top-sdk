<?php

/**
 * 修改关联的权益的活动请求
 * @author auto create
 */
class UpdateBenefitActivityRequest
{
	
	/** 
	 * 活动关联的权益信息列表，可以从权益选择器API中获取
	 **/
	public $add_detail_vos;
	
	/** 
	 * 同步权益活动的概述信息，方便卖家后台查看
	 **/
	public $benefit_activity_vo;
	
	/** 
	 * 需要删除的已经关联的权益
	 **/
	public $delete_detail_vos;
	
	/** 
	 * ISV调用信息
	 **/
	public $invoke_info;	
}
?>