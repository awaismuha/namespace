<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad9e4ab8e3fce024bb687ccb7b4f2f8b
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad9e4ab8e3fce024bb687ccb7b4f2f8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad9e4ab8e3fce024bb687ccb7b4f2f8b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
