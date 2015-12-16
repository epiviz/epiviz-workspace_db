<?php
/**
 * Created by Florin Chelaru ( florinc [at] umd [dot] edu )
 * Date: 10/25/12
 * Time: 8:56 PM
 */

require_once('db_config.php');
require_once('DBConnection.php');
require_once('src/workspace/EpivizWorkspaceManager.php');

$mgr = new EpivizWorkspaceManager();

header('Access-Control-Allow-Origin: *');
echo json_encode($mgr->execute($_REQUEST));
