<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07085b5194bcd80b94fadf93ede2bdd1
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
        'P' => 
        array (
            'PHPSocketIO\\' => 12,
        ),
        'H' => 
        array (
            'Hashids\\' => 8,
        ),
        'C' => 
        array (
            'Channel\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
        'PHPSocketIO\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/phpsocket.io/src',
        ),
        'Hashids\\' => 
        array (
            0 => __DIR__ . '/..' . '/hashids/hashids/src',
        ),
        'Channel\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/channel/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit07085b5194bcd80b94fadf93ede2bdd1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07085b5194bcd80b94fadf93ede2bdd1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}