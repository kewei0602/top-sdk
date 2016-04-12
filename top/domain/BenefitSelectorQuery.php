<?php

/**
 * 权益选择器请求
 * @author auto create
 */
class BenefitSelectorQuery
{
	
	/** 
	 * 权益id
	 **/
	public $benefit_id;
	
	/** 
	 * 权益类型
	 **/
	public $benefit_type;
	
	/** 
	 * 新权益类型id
	 **/
	public $config_id;
	
	/** 
	 * 需要过滤的option
	 **/
	public $exclude_options;
	
	/** 
	 * 调用信息
	 **/
	public $invoke_info;
	
	/** 
	 * 卖家（权益采购者）id
	 **/
	public $purchaser_id;
	
	/** 
	 * 选择器步骤,步骤1：不需要填写其他参数，获取拥有的权益类型列表；步骤2：需填写权益类型benefit_type字段，获取该权益类型下的权益列表；步骤3：必填benefit_id，获取对应权益的信息
	 **/
	public $step;	
}
?>