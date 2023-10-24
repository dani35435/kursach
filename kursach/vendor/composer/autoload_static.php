<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteda9a08f53600ae4fcce79fe979ec1bb
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/Src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteda9a08f53600ae4fcce79fe979ec1bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteda9a08f53600ae4fcce79fe979ec1bb::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticIniteda9a08f53600ae4fcce79fe979ec1bb::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticIniteda9a08f53600ae4fcce79fe979ec1bb::$classMap;

        }, null, ClassLoader::class);
    }
}
