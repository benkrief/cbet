<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite55a3caec62730450e5f49a8b5cc7d89
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\src\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite55a3caec62730450e5f49a8b5cc7d89::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite55a3caec62730450e5f49a8b5cc7d89::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
