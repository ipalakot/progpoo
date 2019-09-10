<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37b235a1ab41d1014b783c7a74227f9d
{
    public static $classMap = array (
        'Carre' => __DIR__ . '/../..' . '/src/Carre.php',
        'Cercle' => __DIR__ . '/../..' . '/src/Cercle.php',
        'Forme' => __DIR__ . '/../..' . '/src/Forme.php',
        'Triangle' => __DIR__ . '/../..' . '/src/Triangle.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit37b235a1ab41d1014b783c7a74227f9d::$classMap;

        }, null, ClassLoader::class);
    }
}
