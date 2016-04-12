<?php
/**
 * TOP API: taobao.tongxue.gift.send request
 * 
 * @author auto create
 * @since 1.0, 2015.05.04
 */
class TongxueGiftSendRequest
{
	/** 
	 * 收到礼包的买家ID
	 **/
	private $buyerNick;
	
	/** 
	 * 礼包ID，代表一种礼包的类型
	 **/
	private $giftId;
	
	/** 
	 * 关联订单id,可选
	 **/
	private $oinalOrderId;
	
	/** 
	 * 发出礼包的卖家nick
	 **/
	private $sellerNick;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setGiftId($giftId)
	{
		$this->giftId = $giftId;
		$this->apiParas["gift_id"] = $giftId;
	}

	public function getGiftId()
	{
		return $this->giftId;
	}

	public function setOinalOrderId($oinalOrderId)
	{
		$this->oinalOrderId = $oinalOrderId;
		$this->apiParas["oinal_order_id"] = $oinalOrderId;
	}

	public function getOinalOrderId()
	{
		return $this->oinalOrderId;
	}

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function getApiMethodName()
	{
		return "taobao.tongxue.gift.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->giftId,"giftId");
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
