<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'sebastianbergmann\\money\\exception' => '/interfaces/Exception.php',
                'sebastianbergmann\\money\\invalidargumentexception' => '/exceptions/InvalidArgumentException.php',
                'sebastianbergmann\\money\\money' => '/Money.php',
                'sebastianbergmann\\money\\moneyinterface' => '/interfaces/MoneyInterface.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd