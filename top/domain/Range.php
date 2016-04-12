<?php

/**
 * 营销工具的范围类！
 * @author auto create
 */
class Range
{
	
	/** 
	 * 营销范围参与者id。即MarketingRangeDO中的participateId。
	 **/
	public $participate_id;
	
	/** 
	 * 营销范围参与者类型。MarketingRangeDO中的participateType。(1:商品;2:店铺;3:seller;4:sku;5:category;6:shopCategory)
	 **/
	public $participate_type;	
}
?>