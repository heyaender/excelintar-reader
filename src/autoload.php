<?php

spl_autoload_register(static function ($class) {
    $namespace = 'heyaender\\ExcelintarReader\\';
    if (0 === strpos($class, $namespace)) {
        include __DIR__ . '/ExcelintarReader/' . str_replace($namespace, '', $class) . '.php';
    }
});

// EOF