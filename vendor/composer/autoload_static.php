<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd24a07d9ea2428d0d0696f17e10699f2
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd24a07d9ea2428d0d0696f17e10699f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd24a07d9ea2428d0d0696f17e10699f2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}