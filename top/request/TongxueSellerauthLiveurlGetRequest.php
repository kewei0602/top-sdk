<?php
/**
 * TOP API: taobao.tongxue.sellerauth.liveurl.get request
 * 
 * @author auto create
 * @since 1.0, 2016.01.13
 */
class TongxueSellerauthLiveurlGetRequest
{
	/** 
	 * 可用的直播流
	 **/
	private $pullUrl;
	
	/** 
	 * 课程id_直播id
	 **/
	private $roomId;
	
	/** 
	 * 1，推流模式；2，拉流模式
	 **/
	private $type;
	
	/** 
	 * 用户id号
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setPullUrl($pullUrl)
	{
		$this->pullUrl = $pullUrl;
		$this->apiParas["pull_url"] = $pullUrl;
	}

	public function getPullUrl()
	{
		return $this->pullUrl;
	}

	public function setRoomId($roomId)
	{
		$this->roomId = $roomId;
		$this->apiParas["room_id"] = $roomId;
	}

	public function getRoomId()
	{
		return $this->roomId;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.tongxue.sellerauth.liveurl.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->roomId,"roomId");
		RequestCheckUtil::checkNotNull($this->type,"type");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
