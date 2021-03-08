<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite836a4bc21f9d54ecfd66645cb16b824
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite836a4bc21f9d54ecfd66645cb16b824::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite836a4bc21f9d54ecfd66645cb16b824::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}