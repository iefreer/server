<?php
/**
 * @package api
 * @subpackage objects
 */
class KalturaDeliveryProfileArray extends KalturaTypedArray
{
	public static function fromDbArray($arr)
	{
		$newArr = new KalturaDeliveryProfileArray();
		if ($arr == null)
			return $newArr;

		foreach ($arr as $obj)
		{
    		$nObj = KalturaDeliveryProfileFactory::getDeliveryProfileInstanceByType($obj->getType());
			$nObj->fromObject($obj);
			$newArr[] = $nObj;
		}
		
		return $newArr;
	}
		
	public function __construct()
	{
		parent::__construct("KalturaDeliveryProfile");	
	}
}