<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit311544c67d4b3377f2f0c28434207183
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit311544c67d4b3377f2f0c28434207183::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit311544c67d4b3377f2f0c28434207183::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit311544c67d4b3377f2f0c28434207183::$classMap;

        }, null, ClassLoader::class);
    }
}