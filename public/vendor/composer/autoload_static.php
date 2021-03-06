<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a0888e20e28f152820a45d5a2fe22aa
{
    public static $files = array (
        'ae2b2fbc1ae2e7a851a2af518947a092' => __DIR__ . '/../..' . '/index.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'skins\\' => 6,
        ),
        'm' => 
        array (
            'models\\' => 7,
        ),
        'c' => 
        array (
            'controllers\\' => 12,
            'components\\' => 11,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'skins\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../skins',
        ),
        'models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../models',
        ),
        'controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../controllers',
        ),
        'components\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../components',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'components\\App' => __DIR__ . '/../..' . '/../components/App.php',
        'components\\Auth' => __DIR__ . '/../..' . '/../components/Auth.php',
        'components\\Controller' => __DIR__ . '/../..' . '/../components/Controller.php',
        'components\\Db' => __DIR__ . '/../..' . '/../components/Db.php',
        'components\\Model' => __DIR__ . '/../..' . '/../components/Model.php',
        'components\\Request' => __DIR__ . '/../..' . '/../components/Request.php',
        'components\\traits\\SingletonTrait' => __DIR__ . '/../..' . '/../components/traits/SingletonTrait.php',
        'controllers\\AccountController' => __DIR__ . '/../..' . '/../controllers/AccountController.php',
        'controllers\\AdminController' => __DIR__ . '/../..' . '/../controllers/AdminController.php',
        'controllers\\BasketController' => __DIR__ . '/../..' . '/../controllers/BasketController.php',
        'controllers\\BlogController' => __DIR__ . '/../..' . '/../controllers/BlogController.php',
        'controllers\\ErrorController' => __DIR__ . '/../..' . '/../controllers/ErrorController.php',
        'controllers\\IndexController' => __DIR__ . '/../..' . '/../controllers/IndexController.php',
        'controllers\\NewsController' => __DIR__ . '/../..' . '/../controllers/NewsController.php',
        'controllers\\ProductController' => __DIR__ . '/../..' . '/../controllers/ProductController.php',
        'models\\Admin' => __DIR__ . '/../..' . '/../models/Admin.php',
        'models\\Basket' => __DIR__ . '/../..' . '/../models/Basket.php',
        'models\\Blog' => __DIR__ . '/../..' . '/../models/Blog.php',
        'models\\Goods' => __DIR__ . '/../..' . '/../models/Goods.php',
        'models\\News' => __DIR__ . '/../..' . '/../models/News.php',
        'models\\User' => __DIR__ . '/../..' . '/../models/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a0888e20e28f152820a45d5a2fe22aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a0888e20e28f152820a45d5a2fe22aa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7a0888e20e28f152820a45d5a2fe22aa::$classMap;

        }, null, ClassLoader::class);
    }
}
