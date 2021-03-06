<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit46a1c529049d98a6b58100facd686341
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Brunovenancio\\Buscardodecursos\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Brunovenancio\\Buscardodecursos\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit46a1c529049d98a6b58100facd686341::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit46a1c529049d98a6b58100facd686341::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit46a1c529049d98a6b58100facd686341::$classMap;

        }, null, ClassLoader::class);
    }
}
