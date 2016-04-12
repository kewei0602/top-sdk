<?php

/**
 * 发放结果
 * @author auto create
 */
class SingleBenefitSendResult
{
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 错误信息
	 **/
	public $error_message;
	
	/** 
	 * 用于宝箱应用，为true表示宝箱任务已完成，需要提示用户
	 **/
	public $is_baoxiang_task_done;
	
	/** 
	 * 是否发放成功
	 **/
	public $is_success;
	
	/** 
	 * 单次发放结果
	 **/
	public $results;
	
	/** 
	 * 事务id
	 **/
	public $unique_id;	
}
?>