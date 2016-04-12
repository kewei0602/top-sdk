<?php
/**
 * TOP API: taobao.tongxue.sendcourse.send request
 * 
 * @author auto create
 * @since 1.0, 2015.11.02
 */
class TongxueSendcourseSendRequest
{
	/** 
	 * 课程商品id
	 **/
	private $auctionId;
	
	/** 
	 * 买家id
	 **/
	private $buyerId;
	
	/** 
	 * 买家昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 赠送课程id
	 **/
	private $courseId;
	
	/** 
	 * 原始订单
	 **/
	private $originalOrderId;
	
	/** 
	 * 送课程卖家id
	 **/
	private $sellerId;
	
	/** 
	 * 送课程卖家昵称
	 **/
	private $sellerNick;
	
	private $apiParas = array();
	
	public function setAuctionId($auctionId)
	{
		$this->auctionId = $auctionId;
		$this->apiParas["auction_id"] = $auctionId;
	}

	public function getAuctionId()
	{
		return $this->auctionId;
	}

	public function setBuyerId($buyerId)
	{
		$this->buyerId = $buyerId;
		$this->apiParas["buyer_id"] = $buyerId;
	}

	public function getBuyerId()
	{
		return $this->buyerId;
	}

	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setCourseId($courseId)
	{
		$this->courseId = $courseId;
		$this->apiParas["course_id"] = $courseId;
	}

	public function getCourseId()
	{
		return $this->courseId;
	}

	public function setOriginalOrderId($originalOrderId)
	{
		$this->originalOrderId = $originalOrderId;
		$this->apiParas["original_order_id"] = $originalOrderId;
	}

	public function getOriginalOrderId()
	{
		return $this->originalOrderId;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
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
		return "taobao.tongxue.sendcourse.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->courseId,"courseId");
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
