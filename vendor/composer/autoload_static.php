<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d95ca2e98bf24aa43ef3c1cb21c4d83
{
    public static $prefixLengthsPsr4 = array (
        'z' => 
        array (
            'zcrmsdk\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'zcrmsdk\\' => 
        array (
            0 => __DIR__ . '/..' . '/zohocrm/php-sdk-archive/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2d95ca2e98bf24aa43ef3c1cb21c4d83::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2d95ca2e98bf24aa43ef3c1cb21c4d83::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2d95ca2e98bf24aa43ef3c1cb21c4d83::$classMap;

        }, null, ClassLoader::class);
    }
}
