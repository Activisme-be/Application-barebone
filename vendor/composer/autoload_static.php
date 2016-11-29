<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5bb924f08583b5c21de5176e78da190b
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '65fec9ebcfbb3cbb4fd0d519687aea01' => __DIR__ . '/..' . '/danielstjules/stringy/src/Create.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Stringy\\' => 8,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Events\\' => 18,
            'Illuminate\\Database\\' => 20,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'H' => 
        array (
            'Http\\Promise\\' => 13,
            'Http\\Client\\' => 12,
            'Http\\Adapter\\Guzzle6\\' => 21,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
            'Github\\' => 7,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Stringy\\' => 
        array (
            0 => __DIR__ . '/..' . '/danielstjules/stringy/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Events\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/events',
        ),
        'Illuminate\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/database',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Http\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/promise/src',
        ),
        'Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/httplug/src',
        ),
        'Http\\Adapter\\Guzzle6\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/guzzle6-adapter/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Github\\' => 
        array (
            0 => __DIR__ . '/..' . '/knplabs/github-api/lib/Github',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsStream/src/main/php',
            ),
        ),
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Applications' => __DIR__ . '/../..' . '/../../tom-manheaghe/application-barebone/application/models/Applications.php',
        'Blade' => __DIR__ . '/../..' . '/../../tom-manheaghe/application-barebone/application/libraries/Blade.php',
        'Category' => __DIR__ . '/../..' . '/../../tom-manheaghe/application-barebone/application/models/Category.php',
        'Login' => __DIR__ . '/../..' . '/../../tom-manheaghe/application-barebone/application/models/Login.php',
        'Ticket' => __DIR__ . '/../..' . '/../../tom-manheaghe/application-barebone/application/models/Ticket.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5bb924f08583b5c21de5176e78da190b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5bb924f08583b5c21de5176e78da190b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5bb924f08583b5c21de5176e78da190b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5bb924f08583b5c21de5176e78da190b::$classMap;

        }, null, ClassLoader::class);
    }
}
