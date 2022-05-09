<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit336170a9a3ae7b7f314dab985ce3d54d
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Exercicio5\\Php\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Exercicio5\\Php\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit336170a9a3ae7b7f314dab985ce3d54d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit336170a9a3ae7b7f314dab985ce3d54d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit336170a9a3ae7b7f314dab985ce3d54d::$classMap;

        }, null, ClassLoader::class);
    }
}
