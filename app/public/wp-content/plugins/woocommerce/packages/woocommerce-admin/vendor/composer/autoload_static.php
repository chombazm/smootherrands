<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd2519442fcc0b80c97dae2082ba9f07
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'A' => 
        array (
            'Automattic\\WooCommerce\\Internal\\Admin\\' => 38,
            'Automattic\\WooCommerce\\Admin\\' => 29,
            'Automattic\\Jetpack\\Autoloader\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Automattic\\WooCommerce\\Internal\\Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src-internal/Admin',
        ),
        'Automattic\\WooCommerce\\Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Automattic\\Jetpack\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src',
        ),
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd2519442fcc0b80c97dae2082ba9f07::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd2519442fcc0b80c97dae2082ba9f07::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd2519442fcc0b80c97dae2082ba9f07::$classMap;

        }, null, ClassLoader::class);
    }
}