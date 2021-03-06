<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6fcf04a9213e074a97b68699e1844ee5
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Instamojo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Instamojo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6fcf04a9213e074a97b68699e1844ee5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6fcf04a9213e074a97b68699e1844ee5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
