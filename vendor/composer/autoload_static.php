<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ef6a243cc89f4490e72089d55745581
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Media\\Uploader\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Media\\Uploader\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ef6a243cc89f4490e72089d55745581::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ef6a243cc89f4490e72089d55745581::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ef6a243cc89f4490e72089d55745581::$classMap;

        }, null, ClassLoader::class);
    }
}
