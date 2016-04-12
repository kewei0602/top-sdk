<?php
/**
 * TOP API: taobao.tongxue.buyerauth.confirm request
 * 
 * @author auto create
 * @since 1.0, 2016.03.02
 */
class TongxueBuyerauthConfirmRequest
{
	/** 
	 * 淘宝同学平台向提供的加密串，通过iframe参数传递给第三方。
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
		return "taobao.tongxue.buyerauth.confirm";
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
