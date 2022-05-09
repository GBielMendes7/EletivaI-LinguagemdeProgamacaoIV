<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae8b3090273959b5c91547bcb7102851
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Exercicio1\\Php\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Exercicio1\\Php\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitae8b3090273959b5c91547bcb7102851::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitae8b3090273959b5c91547bcb7102851::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitae8b3090273959b5c91547bcb7102851::$classMap;

        }, null, ClassLoader::class);
    }
}
