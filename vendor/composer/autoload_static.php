<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

use Closure;

class ComposerStaticInit818eb43a3575d3238ec5754e9166d81e {
    public static $prefixLengthsPsr4 = array(
        'P' =>
            array(
                'Psr\\Log\\' => 8,
                'PHPCurl\\CurlWrapper\\' => 20,
                'PHPCurl\\CurlHttp\\' => 17,
            ),
        'M' =>
            array(
                'Monolog\\' => 8,
            ),
    );

    public static $prefixDirsPsr4 = array(
        'Psr\\Log\\' =>
            array(
                0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
            ),
        'PHPCurl\\CurlWrapper\\' =>
            array(
                0 => __DIR__ . '/..' . '/phpcurl/curlwrapper/src',
            ),
        'PHPCurl\\CurlHttp\\' =>
            array(
                0 => __DIR__ . '/..' . '/phpcurl/curlhttp/src',
            ),
        'Monolog\\' =>
            array(
                0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
            ),
    );

    public static $prefixesPsr0 = array(
        'P' =>
            array(
                'Parsehub' =>
                    array(
                        0 => __DIR__ . '/..' . '/msankhala/parsehub-php/src',
                    ),
            ),
        'H' =>
            array(
                'Httpful' =>
                    array(
                        0 => __DIR__ . '/..' . '/nategood/httpful/src',
                    ),
            ),
    );

    public static $classMap = array(
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader) {
        return Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit818eb43a3575d3238ec5754e9166d81e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit818eb43a3575d3238ec5754e9166d81e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit818eb43a3575d3238ec5754e9166d81e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit818eb43a3575d3238ec5754e9166d81e::$classMap;

        }, null, ClassLoader::class);
    }
}
