<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1871cd5f14258ed85e0ddbed2e69ea5d
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Exercicio3\\Php\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Exercicio3\\Php\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1871cd5f14258ed85e0ddbed2e69ea5d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1871cd5f14258ed85e0ddbed2e69ea5d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1871cd5f14258ed85e0ddbed2e69ea5d::$classMap;

        }, null, ClassLoader::class);
    }
}
