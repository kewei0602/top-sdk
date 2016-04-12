<?php

/**
 * 权益选择器内容展示信息
 * @author auto create
 */
class BenefitTemplateVo
{
	
	/** 
	 * 权益id
	 **/
	public $benefit_id;
	
	/** 
	 * 面额
	 **/
	public $denomination;
	
	/** 
	 * 结束时间
	 **/
	public $end_time;
	
	/** 
	 * 扩展信息
	 **/
	public $extend_feature;
	
	/** 
	 * 扩展信息
	 **/
	public $feature;
	
	/** 
	 * 外部关联id（如支付宝红包模板id）
	 **/
	public $out_object_id;
	
	/** 
	 * 外部关联名称
	 **/
	public $out_object_name;
	
	/** 
	 * 关联活动数
	 **/
	public $relate_activity_num;
	
	/** 
	 * 开始时间
	 **/
	public $start_time;
	
	/** 
	 * 状态
	 **/
	public $status;
	
	/** 
	 * 可用总数
	 **/
	public $valid_total_num;	
}
?>