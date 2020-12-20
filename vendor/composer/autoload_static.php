<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3793c3d086250eb5b765bdc3a4aa1041
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\AboutController' => __DIR__ . '/../..' . '/app/Controllers/AboutController.php',
        'App\\Controllers\\Controller' => __DIR__ . '/../..' . '/app/Controllers/Controller.php',
        'App\\Controllers\\Error404Controller' => __DIR__ . '/../..' . '/app/Controllers/Error404Controller.php',
        'App\\Controllers\\GalleryController' => __DIR__ . '/../..' . '/app/Controllers/GalleryController.php',
        'App\\Controllers\\IndexController' => __DIR__ . '/../..' . '/app/Controllers/IndexController.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Core\\MyHelp' => __DIR__ . '/../..' . '/core/MyHelp.php',
        'Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Core\\View' => __DIR__ . '/../..' . '/core/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3793c3d086250eb5b765bdc3a4aa1041::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3793c3d086250eb5b765bdc3a4aa1041::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3793c3d086250eb5b765bdc3a4aa1041::$classMap;

        }, null, ClassLoader::class);
    }
}
