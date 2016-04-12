<?php
/**
 * TOP API: taobao.promotion.benefit.activity.send request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class PromotionBenefitActivitySendRequest
{
	/** 
	 * 混淆的接收者id
	 **/
	private $mixReceiverId;
	
	/** 
	 * 混淆的接收者nick
	 **/
	private $nick;
	
	/** 
	 * 非混淆的接收者nick
	 **/
	private $platNick;
	
	/** 
	 * 非混淆的接收者id
	 **/
	private $receiverId;
	
	/** 
	 * 单个权益发放请求
	 **/
	private $sendRequest;
	
	private $apiParas = array();
	
	public function setMixReceiverId($mixReceiverId)
	{
		$this->mixReceiverId = $mixReceiverId;
		$this->apiParas["mix_receiver_id"] = $mixReceiverId;
	}

	public function getMixReceiverId()
	{
		return $this->mixReceiverId;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setPlatNick($platNick)
	{
		$this->platNick = $platNick;
		$this->apiParas["plat_nick"] = $platNick;
	}

	public function getPlatNick()
	{
		return $this->platNick;
	}

	public function setReceiverId($receiverId)
	{
		$this->receiverId = $receiverId;
		$this->apiParas["receiver_id"] = $receiverId;
	}

	public function getReceiverId()
	{
		return $this->receiverId;
	}

	public function setSendRequest($sendRequest)
	{
		$this->sendRequest = $sendRequest;
		$this->apiParas["send_request"] = $sendRequest;
	}

	public function getSendRequest()
	{
		return $this->sendRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.promotion.benefit.activity.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
