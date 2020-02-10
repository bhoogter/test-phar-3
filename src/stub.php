<?php

spl_autoload_register(function ($name) {
    $d = (strpos(__FILE__, ".phar") === false ? __DIR__ : "phar://" . __FILE__ . "/src");
    if ($name == "test-phar-aaa") require_once($d . "/src/test-phar-aaa.php");
    if ($name == "test-phar-bbb") require_once($d . "/src/test-phar-bbb.php");
    if ($name == "test-phar-ccc") require_once($d . "/src/test-phar-ccc.php");
});

__HALT_COMPILER();
