<?php
/**
 * TOP API: taobao.tongxue.receiveredenvelope.reveive request
 * 
 * @author auto create
 * @since 1.0, 2015.01.27
 */
class TongxueReceiveredenvelopeReveiveRequest
{
	/** 
	 * 卖家id
	 **/
	private $sellerId;
	
	private $apiParas = array();
	
	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function getApiMethodName()
	{
		return "taobao.tongxue.receiveredenvelope.reveive";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
