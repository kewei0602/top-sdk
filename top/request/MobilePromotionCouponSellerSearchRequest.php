<?php
/**
 * TOP API: taobao.mobile.promotion.coupon.seller.search request
 * 
 * @author auto create
 * @since 1.0, 2015.11.25
 */
class MobilePromotionCouponSellerSearchRequest
{
	/** 
	 * 当前第几页 从第一页开始
	 **/
	private $currentPage;
	
	/** 
	 * 每页数据 最大20左右
	 **/
	private $pageSize;
	
	/** 
	 * 券id集合
	 **/
	private $spreadIds;
	
	/** 
	 * 请求id 排查线索 需保证单次调用唯一
	 **/
	private $traceId;
	
	private $apiParas = array();
	
	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
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

	public function setSpreadIds($spreadIds)
	{
		$this->spreadIds = $spreadIds;
		$this->apiParas["spread_ids"] = $spreadIds;
	}

	public function getSpreadIds()
	{
		return $this->spreadIds;
	}

	public function setTraceId($traceId)
	{
		$this->traceId = $traceId;
		$this->apiParas["trace_id"] = $traceId;
	}

	public function getTraceId()
	{
		return $this->traceId;
	}

	public function getApiMethodName()
	{
		return "taobao.mobile.promotion.coupon.seller.search";
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
