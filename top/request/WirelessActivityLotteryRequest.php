<?php
/**
 * TOP API: taobao.wireless.activity.lottery request
 * 
 * @author auto create
 * @since 1.0, 2015.09.15
 */
class WirelessActivityLotteryRequest
{
	/** 
	 * 活动参数
	 **/
	private $bizParam;
	
	/** 
	 * 活动类型
	 **/
	private $bizType;
	
	/** 
	 * ua
	 **/
	private $ua;
	
	/** 
	 * umid
	 **/
	private $umid;
	
	private $apiParas = array();
	
	public function setBizParam($bizParam)
	{
		$this->bizParam = $bizParam;
		$this->apiParas["biz_param"] = $bizParam;
	}

	public function getBizParam()
	{
		return $this->bizParam;
	}

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setUa($ua)
	{
		$this->ua = $ua;
		$this->apiParas["ua"] = $ua;
	}

	public function getUa()
	{
		return $this->ua;
	}

	public function setUmid($umid)
	{
		$this->umid = $umid;
		$this->apiParas["umid"] = $umid;
	}

	public function getUmid()
	{
		return $this->umid;
	}

	public function getApiMethodName()
	{
		return "taobao.wireless.activity.lottery";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
