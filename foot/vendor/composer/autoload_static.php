<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd5a8d68657907ed13817c7070ac976d
{
    public static $files = array (
        'b9141c70d35c5f6ad5615f70ebba85fb' => __DIR__ . '/../..' . '/src/Helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Song' => __DIR__ . '/../..' . '/Song.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd5a8d68657907ed13817c7070ac976d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd5a8d68657907ed13817c7070ac976d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd5a8d68657907ed13817c7070ac976d::$classMap;

        }, null, ClassLoader::class);
    }
}
