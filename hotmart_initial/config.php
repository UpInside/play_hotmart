<?php
/**
 * Created by PhpStorm.
 * User: gustavoweb
 * Date: 23/10/18
 * Time: 13:39
 */

define('EAD_TOKEN_HOTMART', 'abc123');

define('DATABASE', [
    'HOST' => 'localhost',
    'USER' => 'root',
    'PASS' => '',
    'NAME' => 'play_hotmart'
]);

require_once __DIR__ . '/source/crud/Conn.php';
require_once __DIR__ . '/source/crud/Read.php';
require_once __DIR__ . '/source/crud/Create.php';
require_once __DIR__ . '/source/crud/Update.php';