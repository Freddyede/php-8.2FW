<?php

use Core\Abstract\AbstractController;

include_once __DIR__ . '/bin/init/databases.php';

const TEMPLATES = __DIR__ . "/templates";
const PATH_AUTOLOADER = __DIR__ . '/autoload.php';
const PATH_INIT = TEMPLATES . '/headers/init/index.php';
const ABSTRACT_CONTROLLER = new AbstractController();
