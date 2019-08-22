<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/lib/Model/Ship.php';
require_once __DIR__ . '/lib/Service/BattleManager.php';
require_once __DIR__ . '/lib/Service/ShipLoader.php';
require_once __DIR__ . '/lib/Service/Container.php';
require_once __DIR__ . '/lib/Model/BattleResult.php';

function dump($var)
{
    echo '<pre class="dump">';
    var_dump($var);
    echo '</pre>';
}

$configuration = [
    'dbDsn' => 'mysql:host=localhost;dbname=oo_battle',
    'dbUser' => 'root',
    'dbPass' => ''];




