<?php
/**
 * TOP API: taobao.tongxue.hudongbuyerauth.auth request
 * 
 * @author auto create
 * @since 1.0, 2015.03.11
 */
class TongxueHudongbuyerauthAuthRequest
{
	/** 
	 * 鉴权参数
	 **/
	private $authInfo;
	
	private $apiParas = array();
	
	public function setAuthInfo($authInfo)
	{
		$this->authInfo = $authInfo;
		$this->apiParas["auth_info"] = $authInfo;
	}

	public function getAuthInfo()
	{
		return $this->authInfo;
	}

	public function getApiMethodName()
	{
		return "taobao.tongxue.hudongbuyerauth.auth";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->authInfo,"authInfo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
