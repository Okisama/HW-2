<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit917215b3b798410d3a3ad9cf35b8167a
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '0f5378425de20e199f93b0fa3c855600' => __DIR__ . '/..' . '/Okisama/superlib/lib_functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Routing\\' => 26,
            'Symfony\\Component\\HttpKernel\\' => 29,
            'Symfony\\Component\\HttpFoundation\\' => 33,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Symfony\\Component\\Debug\\' => 24,
            'Silex\\' => 6,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/routing',
        ),
        'Symfony\\Component\\HttpKernel\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-kernel',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Silex\\' => 
        array (
            0 => __DIR__ . '/..' . '/silex/silex/src/Silex',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
        'M' => 
        array (
            'MyCompanyNamespace' => 
            array (
                0 => __DIR__ . '/..' . '/mycompany/superlogger',
            ),
        ),
    );

    public static $classMap = array (
        'TimerClass' => __DIR__ . '/..' . '/Okisama/superlib/timer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit917215b3b798410d3a3ad9cf35b8167a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit917215b3b798410d3a3ad9cf35b8167a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit917215b3b798410d3a3ad9cf35b8167a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit917215b3b798410d3a3ad9cf35b8167a::$classMap;

        }, null, ClassLoader::class);
    }
}
