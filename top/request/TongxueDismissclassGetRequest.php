<?php
/**
 * TOP API: taobao.tongxue.dismissclass.get request
 * 
 * @author auto create
 * @since 1.0, 2014.05.26
 */
class TongxueDismissclassGetRequest
{
	/** 
	 * 房间号ID
	 **/
	private $roomId;
	
	/** 
	 * 用户ID
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setRoomId($roomId)
	{
		$this->roomId = $roomId;
		$this->apiParas["room_id"] = $roomId;
	}

	public function getRoomId()
	{
		return $this->roomId;
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
		return "taobao.tongxue.dismissclass.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->roomId,"roomId");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
