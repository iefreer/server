<?php

/**
 * @package api
 * @subpackage objects
 */
class KalturaLiveStatsListResponse extends KalturaObject
{				
	/**
	 *
	 * @var KalturaLiveStats
	 **/
	public $objects;
	
	/**
	 *
	 * @var int
	 **/
	public $totalCount = 0;
	
	public function getWSObject() {
		$obj = new WSLiveEntriesListResponse();
		$obj->fromKalturaObject($this);
		return $obj;
	}
	
}


