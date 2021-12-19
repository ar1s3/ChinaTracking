<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit701ab44bcaaffadddcdda05ca5781fc1
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsehub' => 
            array (
                0 => __DIR__ . '/..' . '/msankhala/parsehub-php/src',
            ),
        ),
        'H' => 
        array (
            'Httpful' => 
            array (
                0 => __DIR__ . '/..' . '/nategood/httpful/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit701ab44bcaaffadddcdda05ca5781fc1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit701ab44bcaaffadddcdda05ca5781fc1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit701ab44bcaaffadddcdda05ca5781fc1::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit701ab44bcaaffadddcdda05ca5781fc1::$classMap;

        }, null, ClassLoader::class);
    }
}
