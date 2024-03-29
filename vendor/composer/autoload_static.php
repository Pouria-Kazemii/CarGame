<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitffc09bc62c8b449126e01bd89bd78d31
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CarGame\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CarGame\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitffc09bc62c8b449126e01bd89bd78d31::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitffc09bc62c8b449126e01bd89bd78d31::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitffc09bc62c8b449126e01bd89bd78d31::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitffc09bc62c8b449126e01bd89bd78d31::$classMap;

        }, null, ClassLoader::class);
    }
}
