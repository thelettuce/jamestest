<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9bcbbe3bdaa8adf73ce1960dd4f92621
{
    public static $files = array (
        '54fe90e81ee668b48def54394b5343d8' => __DIR__ . '/../..' . '/registration.php',
    );

    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Konstructive\\Oneaddress\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Konstructive\\Oneaddress\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9bcbbe3bdaa8adf73ce1960dd4f92621::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9bcbbe3bdaa8adf73ce1960dd4f92621::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
