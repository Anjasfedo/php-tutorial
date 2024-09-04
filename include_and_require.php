<?php

// include vs require, op

// If the file is not found or causes an error, PHP will issue a warning (E_WARNING) but will continue executing the rest of the script.
include 'example.php';
// echo 'lorem ipsum dolor' . PHP_EOL;

// If the file is not found or causes an error, PHP will issue a fatal error (E_COMPILE_ERROR) and stop executing the rest of the script.
require 'example.php';

// _once
// include_once and require_once ensure that the file is included only once during the script execution, even if you try to include it multiple times.
// include_once andrequire_once

include_once 'example.php';

require_once 'example.php';