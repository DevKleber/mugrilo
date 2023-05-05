<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbba46573e81471775ebcd80ad2051620
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kleber\\Frame\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kleber\\Frame\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbba46573e81471775ebcd80ad2051620::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbba46573e81471775ebcd80ad2051620::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbba46573e81471775ebcd80ad2051620::$classMap;

        }, null, ClassLoader::class);
    }
}