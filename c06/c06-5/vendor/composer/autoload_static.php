<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf712109acfb59f047e8410f87e216fec
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'system\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'system\\' => 
        array (
            0 => __DIR__ . '/../..' . '/system',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf712109acfb59f047e8410f87e216fec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf712109acfb59f047e8410f87e216fec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf712109acfb59f047e8410f87e216fec::$classMap;

        }, null, ClassLoader::class);
    }
}
