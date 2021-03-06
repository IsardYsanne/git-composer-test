<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5375b02b41b945f3e54d685dd6122cf0
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TestComp\\Gitcomp\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TestComp\\Gitcomp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5375b02b41b945f3e54d685dd6122cf0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5375b02b41b945f3e54d685dd6122cf0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5375b02b41b945f3e54d685dd6122cf0::$classMap;

        }, null, ClassLoader::class);
    }
}
