<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit269754a1afde8bbff858996cdbb65a63
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'enshrined\\svgSanitize\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'enshrined\\svgSanitize\\' => 
        array (
            0 => __DIR__ . '/..' . '/enshrined/svg-sanitize/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit269754a1afde8bbff858996cdbb65a63::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit269754a1afde8bbff858996cdbb65a63::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
