<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf0d4ab4d926080d7bca6feba366d6b4c
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitf0d4ab4d926080d7bca6feba366d6b4c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf0d4ab4d926080d7bca6feba366d6b4c::$classMap;

        }, null, ClassLoader::class);
    }
}
