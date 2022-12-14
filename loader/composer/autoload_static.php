<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a925edd00772cfa811048ea750650b6
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPExtension\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPExtension\\' => 
        array (
            0 => __DIR__ . '/../..' . '/apps',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WPExtension\\admin\\app\\WPExtenstionParentMenu' => __DIR__ . '/../..' . '/apps/admin/app/WPExtenstionParentMenu.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a925edd00772cfa811048ea750650b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a925edd00772cfa811048ea750650b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0a925edd00772cfa811048ea750650b6::$classMap;

        }, null, ClassLoader::class);
    }
}
