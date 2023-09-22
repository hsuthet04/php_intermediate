<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47114c78a17cb5a20503f0beb64f5b32
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit47114c78a17cb5a20503f0beb64f5b32::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47114c78a17cb5a20503f0beb64f5b32::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit47114c78a17cb5a20503f0beb64f5b32::$classMap;

        }, null, ClassLoader::class);
    }
}
