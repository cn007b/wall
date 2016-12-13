<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb355086da3555754eb2fbe9e20836e81
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wall\\' => 5,
        ),
        'T' => 
        array (
            'Test\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wall\\' => 
        array (
            0 => __DIR__ . '/../..' . '/wall/src/ddd/Wall',
        ),
        'Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb355086da3555754eb2fbe9e20836e81::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb355086da3555754eb2fbe9e20836e81::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
