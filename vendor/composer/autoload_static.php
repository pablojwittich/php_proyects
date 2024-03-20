<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ef84b6979e5203aacdf70860d0ce3ef
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SimpleSoftwareIO\\QrCode\\' => 24,
        ),
        'D' => 
        array (
            'DASPRiD\\Enum\\' => 13,
        ),
        'B' => 
        array (
            'BaconQrCode\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SimpleSoftwareIO\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplesoftwareio/simple-qrcode/src',
        ),
        'DASPRiD\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/dasprid/enum/src',
        ),
        'BaconQrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/bacon/bacon-qr-code/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ef84b6979e5203aacdf70860d0ce3ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ef84b6979e5203aacdf70860d0ce3ef::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2ef84b6979e5203aacdf70860d0ce3ef::$classMap;

        }, null, ClassLoader::class);
    }
}