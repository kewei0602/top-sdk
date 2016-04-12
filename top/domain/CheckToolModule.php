<?php

/**
 * 工具审核结果
 * @author auto create
 */
class CheckToolModule
{
	
	/** 
	 * 工具审核的URL，工具检测通过后，ISV需要把该URL和工具基本信息一起提交UMP工具技术审核。
	 **/
	public $check_url;
	
	/** 
	 * 工具检测结果中的错误信息。
	 **/
	public $error_message;
	
	/** 
	 * 工具是否检测通过。
	 **/
	public $is_pass;
	
	/** 
	 * 工具中已经使用的元数据。
	 **/
	public $meta_def;	
}
?>