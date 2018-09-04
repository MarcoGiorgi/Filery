<?php

use Filery\API;

// Include functions
require_once '../functions/return_bytes.php';

// Include classes
require_once '../classes/Filery/FileFactory.php';
require_once '../classes/Filery/AbstractAPI.php';
require_once '../classes/Filery/API.php';
require_once '../classes/Filery/HttpException.php';

// API init and run
$api = new API(require '../config.php');
$api->run();