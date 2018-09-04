<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1050693cc276c7f51d7df292c851184
{
    public static $files = array (
        'c15243c55ab4c20eff78d1e24be20dac' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Helpers.php',
    );

    public static $classMap = array (
        'Cloudinary' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Cloudinary.php',
        'CloudinaryField' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/CloudinaryField.php',
        'Cloudinary\\Api' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api.php',
        'Cloudinary\\Api\\AlreadyExists' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/AlreadyExists.php',
        'Cloudinary\\Api\\AuthorizationRequired' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/AuthorizationRequired.php',
        'Cloudinary\\Api\\BadRequest' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/BadRequest.php',
        'Cloudinary\\Api\\Error' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/Error.php',
        'Cloudinary\\Api\\GeneralError' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/GeneralError.php',
        'Cloudinary\\Api\\NotAllowed' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/NotAllowed.php',
        'Cloudinary\\Api\\NotFound' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/NotFound.php',
        'Cloudinary\\Api\\RateLimited' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/RateLimited.php',
        'Cloudinary\\Api\\Response' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/Response.php',
        'Cloudinary\\AuthToken' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/AuthToken.php',
        'Cloudinary\\Error' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Error.php',
        'Cloudinary\\PreloadedFile' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/PreloadedFile.php',
        'Cloudinary\\Search' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Search.php',
        'Cloudinary\\Uploader' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Uploader.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb1050693cc276c7f51d7df292c851184::$classMap;

        }, null, ClassLoader::class);
    }
}
