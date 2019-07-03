<?php

function loader($class)
{
    // Support for pre-PHP 5.6 versions
    if ($class === 'PHPUnit\Framework\TestCase') {
      class_alias('PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');

      return;
    }
    $file = $class . '.php';
    if (file_exists($file)) {
        require $file;
    }
}

spl_autoload_register('loader');
