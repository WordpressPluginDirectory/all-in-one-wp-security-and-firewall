<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit485bfd7ecd1b0fb61cfc6ef6011586f0
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'IPLib\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'IPLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/mlocati/ip-lib/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit485bfd7ecd1b0fb61cfc6ef6011586f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit485bfd7ecd1b0fb61cfc6ef6011586f0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit485bfd7ecd1b0fb61cfc6ef6011586f0::$classMap;

        }, null, ClassLoader::class);
    }
}
