<?php
/**
 * TOP API: taobao.tongxue.monitor.call request
 * 
 * @author auto create
 * @since 1.0, 2016.01.13
 */
class TongxueMonitorCallRequest
{
	/** 
	 * 心跳参数json对象
	 **/
	private $info;
	
	private $apiParas = array();
	
	public function setInfo($info)
	{
		$this->info = $info;
		$this->apiParas["info"] = $info;
	}

	public function getInfo()
	{
		return $this->info;
	}

	public function getApiMethodName()
	{
		return "taobao.tongxue.monitor.call";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->info,"info");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
