<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36a31ea49d76fba5cc1059c8f88ce1e8
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'Libs\\' => 5,
        ),
        'H' => 
        array (
            'Helpers\\' => 8,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Libs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/_classes/Libs',
        ),
        'Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/_classes/Helpers',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fakerphp/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit36a31ea49d76fba5cc1059c8f88ce1e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36a31ea49d76fba5cc1059c8f88ce1e8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit36a31ea49d76fba5cc1059c8f88ce1e8::$classMap;

        }, null, ClassLoader::class);
    }
}
