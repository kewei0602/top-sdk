<?php
/**
 * TOP API: taobao.tongxue.choosecourse.query request
 * 
 * @author auto create
 * @since 1.0, 2015.01.27
 */
class TongxueChoosecourseQueryRequest
{
	/** 
	 * 一级前台类目id
	 **/
	private $firstCat;
	
	/** 
	 * 排序方式
	 **/
	private $orderType;
	
	/** 
	 * 当前页码
	 **/
	private $pageNum;
	
	/** 
	 * 页大小
	 **/
	private $pageSize;
	
	/** 
	 * 查询关键字
	 **/
	private $q;
	
	private $apiParas = array();
	
	public function setFirstCat($firstCat)
	{
		$this->firstCat = $firstCat;
		$this->apiParas["first_cat"] = $firstCat;
	}

	public function getFirstCat()
	{
		return $this->firstCat;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function setPageNum($pageNum)
	{
		$this->pageNum = $pageNum;
		$this->apiParas["page_num"] = $pageNum;
	}

	public function getPageNum()
	{
		return $this->pageNum;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setQ($q)
	{
		$this->q = $q;
		$this->apiParas["q"] = $q;
	}

	public function getQ()
	{
		return $this->q;
	}

	public function getApiMethodName()
	{
		return "taobao.tongxue.choosecourse.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNum,"pageNum");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
