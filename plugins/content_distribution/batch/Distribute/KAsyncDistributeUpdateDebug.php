<?php

/**
 * @package plugins.contentDistribution
 * @subpackage Scheduler.Distribute.Debug
 */

// /opt/kaltura/app/batch
chdir(dirname( __FILE__ ) . "/../../../../batch");

require_once(__DIR__ . "/../../../../batch/bootstrap.php");

$iniFile = "../configurations/batch";		// should be the full file path

$kdebuger = new KGenericDebuger($iniFile);
$kdebuger->run('KAsyncDistributeUpdate');
