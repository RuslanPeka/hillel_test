<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3793c3d086250eb5b765bdc3a4aa1041
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
            'Components\\' => 11,
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
        'Components\\' => 
        array (
            0 => __DIR__ . '/../..' . '/components',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\Admin\\ArticlesAdminController' => __DIR__ . '/../..' . '/app/Controllers/Admin/ArticlesAdminController.php',
        'App\\Controllers\\Admin\\MainAdminController' => __DIR__ . '/../..' . '/app/Controllers/Admin/MainAdminController.php',
        'App\\Controllers\\Admin\\UsersAdminController' => __DIR__ . '/../..' . '/app/Controllers/Admin/UsersAdminController.php',
        'App\\Controllers\\General\\Controller' => __DIR__ . '/../..' . '/app/Controllers/General/Controller.php',
        'App\\Controllers\\General\\Error404Controller' => __DIR__ . '/../..' . '/app/Controllers/General/Error404Controller.php',
        'App\\Controllers\\Main\\AboutController' => __DIR__ . '/../..' . '/app/Controllers/Main/AboutController.php',
        'App\\Controllers\\Main\\GalleryController' => __DIR__ . '/../..' . '/app/Controllers/Main/GalleryController.php',
        'App\\Controllers\\Main\\IndexController' => __DIR__ . '/../..' . '/app/Controllers/Main/IndexController.php',
        'App\\Models\\About' => __DIR__ . '/../..' . '/app/Models/About.php',
        'App\\Models\\Gallery' => __DIR__ . '/../..' . '/app/Models/Gallery.php',
        'App\\Models\\General\\Model' => __DIR__ . '/../..' . '/app/Models/General/Model.php',
        'App\\Models\\Index' => __DIR__ . '/../..' . '/app/Models/Index.php',
        'App\\Models\\UserPermissions' => __DIR__ . '/../..' . '/app/Models/UserPermissions.php',
        'App\\Models\\Users' => __DIR__ . '/../..' . '/app/Models/Users.php',
        'Components\\Orm\\Connector' => __DIR__ . '/../..' . '/components/Orm/Connector.php',
        'Components\\Orm\\Delete' => __DIR__ . '/../..' . '/components/Orm/Delete.php',
        'Components\\Orm\\Insert' => __DIR__ . '/../..' . '/components/Orm/Insert.php',
        'Components\\Orm\\Select' => __DIR__ . '/../..' . '/components/Orm/Select.php',
        'Components\\Orm\\Update' => __DIR__ . '/../..' . '/components/Orm/Update.php',
        'Components\\Orm\\Where' => __DIR__ . '/../..' . '/components/Orm/Where.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Core\\ActionName' => __DIR__ . '/../..' . '/core/ActionName.php',
        'Core\\ClassNamespace' => __DIR__ . '/../..' . '/core/ClassNamespace.php',
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
