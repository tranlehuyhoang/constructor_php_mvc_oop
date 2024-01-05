<?php
session_start();

include "../app/libs/Session.php";
include_once __DIR__ . "/../app/configs/config.php";
include "../app/helpers/Format.php";
include "../app/libs/Database.php";
include "../app/helpers/redirect.php";
include "../app/core/Core.php";
include "../app/libs/Controller.php";
$core = new Core();