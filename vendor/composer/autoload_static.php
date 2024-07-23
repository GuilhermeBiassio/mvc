<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f9cf28bd825560d8620b32381c69874
{
    public static $files = array (
        'b60467fe7260a7a11f7b06b1b4300775' => __DIR__ . '/../..' . '/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f9cf28bd825560d8620b32381c69874::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f9cf28bd825560d8620b32381c69874::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6f9cf28bd825560d8620b32381c69874::$classMap;

        }, null, ClassLoader::class);
    }
}
