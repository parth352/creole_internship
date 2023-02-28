<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56d945b6b4e4be7d404bcdc97ce469d7
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit56d945b6b4e4be7d404bcdc97ce469d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56d945b6b4e4be7d404bcdc97ce469d7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit56d945b6b4e4be7d404bcdc97ce469d7::$classMap;

        }, null, ClassLoader::class);
    }
}
