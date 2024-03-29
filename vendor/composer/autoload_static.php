<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb3df8837c5ae0f77067001825606317f
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb3df8837c5ae0f77067001825606317f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb3df8837c5ae0f77067001825606317f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb3df8837c5ae0f77067001825606317f::$classMap;

        }, null, ClassLoader::class);
    }
}
