<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite95d623aff10705a3fcedcb9ca845543
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Trupek\\Agent\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Trupek\\Agent\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite95d623aff10705a3fcedcb9ca845543::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite95d623aff10705a3fcedcb9ca845543::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite95d623aff10705a3fcedcb9ca845543::$classMap;

        }, null, ClassLoader::class);
    }
}
