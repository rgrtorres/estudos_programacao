<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita363b824be839d9e5eb747bf30c685a3
{
    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'rgrto\\cep\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'rgrto\\cep\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Search' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita363b824be839d9e5eb747bf30c685a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita363b824be839d9e5eb747bf30c685a3::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita363b824be839d9e5eb747bf30c685a3::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita363b824be839d9e5eb747bf30c685a3::$classMap;

        }, null, ClassLoader::class);
    }
}
