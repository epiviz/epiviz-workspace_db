<?php
/**
 * Created by Florin Chelaru ( florinc [at] umd [dot] edu )
 * Date: 11/19/13
 * Time: 11:15 AM
 */

require_once('util.php');
require_once('DBSettings.php');
require_once('Workspace.php');

class EpivizWorkspaceManager {
  private $workspace = null;

  public function __construct() {
    $this->workspace = new Workspace();
  }

  public function execute($args) {
    $action = $args['action'];
    $request_id = idx($args, 'requestId', 0);

    session_start();
    $user = idx($_SESSION, 'user', null);

    switch ($action) {
      case 'saveWorkspace':
        if ($user === null) { return array('requestId'=> 0+$request_id, 'type'=>'response', 'data'=>null); }

        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $content = $_REQUEST['content'];
        $ws_id =  $this->workspace->save($user['id'], $id, $name, $content);
        return array(
          'requestId' => 0 + $request_id,
          'type' => 'response',
          'data' => $ws_id
        );
      case 'deleteWorkspace':
        if ($user === null) { return array('requestId'=> 0+$request_id, 'type'=>'response', 'data'=>array('success'=>false)); }
        $workspace_id = $_REQUEST['id'];
        $result = $this->workspace->deleteWorkspace($user['id'], $workspace_id);

        return array(
          'requestId' => 0 + $request_id,
          'type' => 'response',
          'data' => $result
        );
      case 'getWorkspaces':
        $user_id = ($user === null) ? -1 : $user['id'];
        $q = idx($args, 'q', '');
        $requestWorkspace = idx($args, 'ws', null);
        $workspaces = $this->workspace->getWorkspaces($user_id, $q, $requestWorkspace);

        return array(
          'requestId' => 0 + $request_id,
          'type' => 'response',
          'data' => $workspaces
        );
      default:
        break;
    }

    return array(
      'requestId' => 0 + $request_id,
      'type' => 'response',
      'data' => null
    );
  }
}
