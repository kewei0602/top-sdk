<?php
/**
 * TOP API: taobao.tongxue.certificate.sync request
 * 
 * @author auto create
 * @since 1.0, 2015.04.20
 */
class TongxueCertificateSyncRequest
{
	/** 
	 * 证书创建时间
	 **/
	private $certificateCreateTime;
	
	/** 
	 * 证书编号
	 **/
	private $certificateNum;
	
	/** 
	 * 证书标题
	 **/
	private $certificateTitle;
	
	/** 
	 * 英文的证书标题
	 **/
	private $certificateTitleE;
	
	/** 
	 * 淘宝同学课程id
	 **/
	private $courseId;
	
	/** 
	 * 课程名称
	 **/
	private $courseTitle;
	
	/** 
	 * 英文的课程名称
	 **/
	private $courseTitleE;
	
	/** 
	 * 考试编号
	 **/
	private $examNum;
	
	/** 
	 * 身份证号码
	 **/
	private $idCardNum;
	
	/** 
	 * 接入方名字
	 **/
	private $joinUpTypeName;
	
	/** 
	 * 真实姓名
	 **/
	private $name;
	
	/** 
	 * 照片
	 **/
	private $photo;
	
	/** 
	 * 姓名的拼音
	 **/
	private $pinYinName;
	
	/** 
	 * 用户id md5
	 **/
	private $userIdMd5;
	
	private $apiParas = array();
	
	public function setCertificateCreateTime($certificateCreateTime)
	{
		$this->certificateCreateTime = $certificateCreateTime;
		$this->apiParas["certificate_create_time"] = $certificateCreateTime;
	}

	public function getCertificateCreateTime()
	{
		return $this->certificateCreateTime;
	}

	public function setCertificateNum($certificateNum)
	{
		$this->certificateNum = $certificateNum;
		$this->apiParas["certificate_num"] = $certificateNum;
	}

	public function getCertificateNum()
	{
		return $this->certificateNum;
	}

	public function setCertificateTitle($certificateTitle)
	{
		$this->certificateTitle = $certificateTitle;
		$this->apiParas["certificate_title"] = $certificateTitle;
	}

	public function getCertificateTitle()
	{
		return $this->certificateTitle;
	}

	public function setCertificateTitleE($certificateTitleE)
	{
		$this->certificateTitleE = $certificateTitleE;
		$this->apiParas["certificate_title_e"] = $certificateTitleE;
	}

	public function getCertificateTitleE()
	{
		return $this->certificateTitleE;
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

	public function setCourseTitle($courseTitle)
	{
		$this->courseTitle = $courseTitle;
		$this->apiParas["course_title"] = $courseTitle;
	}

	public function getCourseTitle()
	{
		return $this->courseTitle;
	}

	public function setCourseTitleE($courseTitleE)
	{
		$this->courseTitleE = $courseTitleE;
		$this->apiParas["course_title_e"] = $courseTitleE;
	}

	public function getCourseTitleE()
	{
		return $this->courseTitleE;
	}

	public function setExamNum($examNum)
	{
		$this->examNum = $examNum;
		$this->apiParas["exam_num"] = $examNum;
	}

	public function getExamNum()
	{
		return $this->examNum;
	}

	public function setIdCardNum($idCardNum)
	{
		$this->idCardNum = $idCardNum;
		$this->apiParas["id_card_num"] = $idCardNum;
	}

	public function getIdCardNum()
	{
		return $this->idCardNum;
	}

	public function setJoinUpTypeName($joinUpTypeName)
	{
		$this->joinUpTypeName = $joinUpTypeName;
		$this->apiParas["join_up_type_name"] = $joinUpTypeName;
	}

	public function getJoinUpTypeName()
	{
		return $this->joinUpTypeName;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setPhoto($photo)
	{
		$this->photo = $photo;
		$this->apiParas["photo"] = $photo;
	}

	public function getPhoto()
	{
		return $this->photo;
	}

	public function setPinYinName($pinYinName)
	{
		$this->pinYinName = $pinYinName;
		$this->apiParas["pin_yin_name"] = $pinYinName;
	}

	public function getPinYinName()
	{
		return $this->pinYinName;
	}

	public function setUserIdMd5($userIdMd5)
	{
		$this->userIdMd5 = $userIdMd5;
		$this->apiParas["user_id_md5"] = $userIdMd5;
	}

	public function getUserIdMd5()
	{
		return $this->userIdMd5;
	}

	public function getApiMethodName()
	{
		return "taobao.tongxue.certificate.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->certificateTitle,"certificateTitle");
		RequestCheckUtil::checkNotNull($this->certificateTitleE,"certificateTitleE");
		RequestCheckUtil::checkNotNull($this->courseId,"courseId");
		RequestCheckUtil::checkNotNull($this->courseTitle,"courseTitle");
		RequestCheckUtil::checkNotNull($this->courseTitleE,"courseTitleE");
		RequestCheckUtil::checkNotNull($this->idCardNum,"idCardNum");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkNotNull($this->pinYinName,"pinYinName");
		RequestCheckUtil::checkNotNull($this->userIdMd5,"userIdMd5");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
