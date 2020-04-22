<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3403daee88462847926ac72030765b4
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Time4VPS\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Time4VPS\\' => 
        array (
            0 => __DIR__ . '/..' . '/time4vps/lib/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3403daee88462847926ac72030765b4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3403daee88462847926ac72030765b4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}